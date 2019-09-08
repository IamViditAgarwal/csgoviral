<?php


// functions.php
function check_txnid($tnxid , $link){
    
   // return true;
    $valid_txnid = true;
    //get result set
    $sql = $link->query("SELECT * FROM pp.payments WHERE txnid = '$tnxid'");

     if ($sql->num_rows != 0) 
    {
       
        if ($row = $sql->fetch_assoc()) 
        {
            $valid_txnid = false;
        }
    }
    return $valid_txnid;
}

/*function check_price($price, $id , $link){
    $valid_price = false;
    //you could use the below to check whether the correct price has been paid for the product

    
    $sql = $link->query("SELECT amount FROM products WHERE id = $id ");
    if ($sql->num_rows != 0) 
    {
        while ($row = $sql->fetch_assoc()) 
        {
            $num = (float)$row['amount'];
            if($num == $price){
                $valid_price = true;
            }
        }
    }
    return $valid_price;
    
    //return true;
}*/


function updatePayments($data , $steamid , $link){
    

    if (is_array($data)) {
        if($link->query("INSERT INTO pp.payments (txnid, person ,payment_amount, payment_status, itemid, createdtime) VALUES (
                '".$data['txn_id']."' , '".$steamid."' , ".$data['payment_amount']." ,'".$data['payment_status']."' , '".$data['item_number']."' , '".date("Y-m-d H:i:s")."' )") === TRUE)
        {
            return true ;
        }
        else
        {
            return false ;
        }           
    }
}



function updateWallet($data , $steamid , $link){
    

    if (is_array($data)) 
    {
         if($link->query("UPDATE credit_system.Credit_".$steamid." SET amount = amount + ".$data['payment_amount']." WHERE localtx_id ='0'  ") === TRUE )
         {
            return true ;
         }
         else
         {
            return false ;
         }
        
    }
   
}

function updateWalletAddDb($data , $steamid , $link){
    

    if (is_array($data)) 
    {
        if($link->query("INSERT INTO csgo_MoneyAddWithdraw.csgo_addMoney (steamid , amt_add ,currency , method ,txnid , payer_email ,addTime) VALUES ('".$steamid."' , '".$data['payment_amount']."' ,'".$data['payment_currency']."', 'paypal' ,'".$data["txn_id"]."', '".$data['payer_email']."', '".date("Y-m-d H:i:s")."' )  " ) === TRUE )
            {
                return true ;
            }
            else
            {
                return false ;
            }
        
    }
            
}


?>