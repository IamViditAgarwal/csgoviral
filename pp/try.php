<?php
/*
$steamid= "12345321";




$host = "";
$user = "";
$pass = "";
$db_name = "pp"; //database name

function updatePayments($data , $steamid , $link){
    

    if (is_array($data)) {
        $sql = $link->query("INSERT INTO pp.payments (txnid, person ,payment_amount, payment_status, itemid, createdtime) VALUES (
                '".$data['txn_id']."' , '".$steamid."' , ".$data['payment_amount']." ,'".$data['payment_status']."' , '".$data['item_number']."' , '".date("Y-m-d H:i:s")."' )");

        if($sql)
        		return true;
        else
        	return false;
        
    }
}

 $link  = new mysqli($host, $user, $pass, $db_name);
$data = array();
$data['txn_id']= "KJbVG7JHJsksdfhpwer" ;
$data['payment_amount']="23";

$data['payment_status']="done" ;
                $data['item_number']="de";

echo updatePayments($data , $steamid , $link);
*/


 $fp = fsockopen ('ssl://www.paypal.com', 443, $errno, $errstr, 30);

    if (!$fp) {
        // HTTP ERROR

    } 
    else 
    {

        $link =  new mysqli($host, $user, $pass, $db_name);

        fputs($fp, $header . $req);
        while (!feof($fp)) 
        {
            $res = fgets ($fp, 1024);
            if (strcmp($res, "VERIFIED") == 0) 
            {

                // Used for debugging
                // mail('user@domain.com', 'PAYPAL POST - VERIFIED RESPONSE', print_r($post, true));

                // Validate payment (Check unique txnid & correct price)
                $valid_txnid = check_txnid($data['txn_id']);
            //    $valid_price = check_price($data['payment_amount'], $data['item_number']);
                // PAYMENT VALIDATED & VERIFIED!
                if ($valid_txnid) {

                    $orderid = updatePayments($data , $steamid , $link);

                    if ($orderid) {
                        // Payment has been made & successfully inserted into the Database

                        //now i can insert in our wallet

                        updateWallet($data ,$steamid , $link) ;

                        updateWalletAddDb($data, $steamid , $link);


                    } else {

                        echo "Error inserting into db" ;
                        // Error inserting into DB
                        // E-mail admin or alert user
                        // mail('user@domain.com', 'PAYPAL POST - INSERT INTO DB WENT WRONG', print_r($data, true));
                    }
                } else {
                    // Payment made but data has been changed
                    // E-mail admin or alert user
                    echo "Payment made but daata has been changed" ;
                }

            } 
            else if (strcmp ($res, "INVALID") == 0) 
            {

                // PAYMENT INVALID & INVESTIGATE MANUALY!
                // E-mail admin or alert user
               $invlid= true ;
                //echo "payment invlid , need investigation" ;
                // Used for debugging
                //@mail("user@domain.com", "PAYPAL DEBUGGING", "Invalid Response data = <pre>".print_r($post, true)."</pre>");
            }
        }
        fclose ($fp);
    }
?>