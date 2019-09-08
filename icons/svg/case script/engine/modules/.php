<?php
if(!isset($Functions)){
    die("Error! 404");
}
if(!in_array($Functions->getIP(), array('136.243.38.147', '136.243.38.149', '136.243.38.150', '136.243.38.151', '136.243.38.189'))) die($Functions->getIndex("404"));

$sign = md5($Functions->config['merchant_id'].':'.$_POST['AMOUNT'].':'.$Functions->config['merchant_secret_2'].':'.$_POST['MERCHANT_ORDER_ID']);
if($sign != $_POST['SIGN']) die($Functions->getIndex("404"));

$payment = $Functions->db->query("SELECT * FROM payments WHERE id = '".(int)$_POST['MERCHANT_ORDER_ID']."'");
if($payment->num_rows == 0){
    die($Functions->getIndex("404"));
}else{
    $payment = $payment->fetch_object();
    if($payment->status != 0){
        die($Functions->getIndex("404"));
    }else{
        if($payment->amount != $_POST['AMOUNT']){
            die($Functions->getIndex("404"));
        }else{
            $Functions->db->query("UPDATE payments SET status = '1' WHERE id = '".$payment->id."'");
            $user = $Functions->db->query("SELECT * FROM users WHERE steamid = '".$payment->user."'")->fetch_object();
            $Functions->giveMoney($user->steamid, $payment->amount);
            echo 'success';
        }
    }
}

?>