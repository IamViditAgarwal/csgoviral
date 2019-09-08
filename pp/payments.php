<?php
session_start();
$steamid=$_SESSION['steamid'];
// Database variables
$host = "";
$user = "";
$pass = "";
$db_name = "pp"; //database name

$invlid = false ;
// PayPal settings
$paypal_email = 'csgoviral9-facilitator@gmail.com';
$return_url = 'http://127.0.0.1/CsgoViral/pp/payment-successful.php?id='.$data['txn_id'].'&amt='.$data['payment_amount'].'&time='.date("Y-m-d H:i:s").'&from='.$data['payer_email'].'&curr='.$data['payment_currency'].' ';
$cancel_url = 'http://127.0.0.1/CsgoViral/pp/payment-cancelled.php?stat='.$invlid.'';
$notify_url = 'http://127.0.0.1/CsgoViral/pp/payments.php';

// Include Functions
include("functions.php");

$item_name = 'Funds';
if($_POST['os0'] < 1 || $_POST['os0'] > 500)
{
    echo '<script type="text/javascript">alert("Amount is improper");
            window.location.replace("../profile.php") ;
            </script>';
   // header("Location:../profile.php") ;
    exit();

}

$item_amount = $_POST['os0'];



// Check if paypal request or response
if (!isset($_POST["txn_id"]) && !isset($_POST["txn_type"])){
    $querystring = '';

    // Firstly Append paypal account to querystring
    $querystring .= "?business=".urlencode($paypal_email)."&";

    // Append amount& currency (£) to quersytring so it cannot be edited in html

    //The item name and amount can be brought in dynamically by querying the $_POST['item_number'] variable.
    $querystring .= "item_name=".urlencode($item_name)."&";
    $querystring .= "amount=".urlencode($item_amount)."&";

    //loop for posted values and append to querystring
    foreach($_POST as $key => $value){
        $value = urlencode(stripslashes($value));
        $querystring .= "$key=$value&";
    }

    // Append paypal return addresses
    $querystring .= "return=".urlencode(stripslashes($return_url))."&";
    $querystring .= "cancel_return=".urlencode(stripslashes($cancel_url))."&";
    $querystring .= "notify_url=".urlencode($notify_url);

    // Append querystring with custom field
    //$querystring .= "&custom=".USERID;

    // Redirect to paypal IPN
    header('location:https://www.sandbox.paypal.com/cgi-bin/webscr'.$querystring);
    exit();
} 
/*
else 
{
    //Database Connection
    $link =  new mysqli($host, $user, $pass, $db_name);

    // Response from Paypal

    // read the post from PayPal system and add 'cmd'
    $req = 'cmd=_notify-validate';
    foreach ($_POST as $key => $value) {
        $value = urlencode(stripslashes($value));
        $value = preg_replace('/(.*[^%^0^D])(%0A)(.*)/i','${1}%0D%0A${3}',$value);// IPN fix
        $req .= "&$key=$value";
    }

    // assign posted variables to local variables
    $data = array() ;

    $data['item_name']          = $_POST['item_name'];  //it is funds
    $data['item_number']        = $_POST['item_number']; 
    $data['payment_status']     = $_POST['payment_status']; //Completed like 
    $data['payment_amount']     = $_POST['mc_gross'];  //actual amt paid by user
    $data['payment_fee']        = $_POST['mc_fee'];  //fee deducted
    $data['payment_currency']   = $_POST['mc_currency']; // USD
    $data['txn_id']             = $_POST['txn_id'];
    $data['receiver_email']     = $_POST['receiver_email']; //csgoviral9@gmail.com
    $data['payer_email']        = $_POST['payer_email'];  //amount sender email
    $data['custom']             = $_POST['custom']; 

    // post back to PayPal system to validate
    $header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
    $header .= "Content-Type: application/x-www-form-urlencoded\r\n";
    $header .= "Content-Length: " . strlen($req) . "\r\n\r\n";

    $fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);

    if (!$fp) {
        // HTTP ERROR

    } 
    else 
    {
        fputs($fp, $header . $req);
        while (!feof($fp)) 
        {
            $res = fgets ($fp, 1024);
            if (strcmp($res, "VERIFIED") == 0) 
            {

                // Used for debugging
                // mail('user@domain.com', 'PAYPAL POST - VERIFIED RESPONSE', print_r($post, true));

                // Validate payment (Check unique txnid & correct price)
                $valid_txnid = check_txnid($data['txn_id'] , $link);
             
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
} 
*/
?>