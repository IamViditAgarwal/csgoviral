<?php
 //$user_amount= $_POST['ua'];
	$cp = $_POST['casePrice']; //case price
	$sci = $_POST['sci'];//selling case id
	$bid= $_POST['sn'] ;//buyer id
	$tn = 'Credit_'.$_POST['sn']; //buyer table name
	$seller_id= $_POST['caseSeller'] ; //seller id

	$stn= 'Credit_'.$seller_id; //seller table name

	$servername = "";
	$username = "";
	$password = "";
	$dbname = "Csgoviral_MBR";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	//apply the locking mechanism 
	//we need to get the unique transaction id 

	$t = time(); //get time of transaction
	$t = date("dmY-H:i:s",$t); //convert it in human readable form
	$tx = uniqid($t,true); //generate id

	$tx_id = 'Transaction-'.$tx.''; //final transaction id

	

	$sql_mbr = "INSERT INTO MBR_transaction (txid,sell_case_id,buyer,seller,amount) VALUES ('$tx_id', $sci, '$bid', '$seller_id', '$cp')";
	 

	$conn->query($sql_mbr) ;

	//buyer

	$sql_buyer = "INSERT INTO  credit_system.".$tn." (localtx_id , buyer , seller , credit_for_case_id , amount , f_amt) VALUES ('$tx_id', 'me' ,'$seller_id', '$sci' , '$cp' , '$cp')"; //insert transaction in buyer

	$conn->query($sql_buyer) ;
	
	//read the buyer account balance
	$buy_balance= $conn->query("SELECT amount FROM credit_system.".$tn." WHERE localtx_id = '0' ")  ;

	if ($buy_balance->num_rows > 0) 
	{
    	// output data of each row
	    $row = $buy_balance->fetch_assoc() ;
	        $buy_balance_amt=  $row['amount'];
	    
	} 
	

	$fbb =number_format( (float)($buy_balance_amt-$cp) ,2,'.' , '');

	$sql_buyer_deduct = "UPDATE credit_system.".$tn." SET amount='".$fbb."' WHERE localtx_id = '0' "; // deduce amount from buyer table wallet
	$conn->query($sql_buyer_deduct) ;
	

	//seller

	$sql_seller = "INSERT INTO  credit_system.".$stn." (localtx_id , buyer , seller , credit_for_case_id , amount , f_amt) VALUES ('$tx_id' , '$bid','me', '$sci' ,  '$cp' , '".(0.9*$cp)."')";  //insert the transaction
	$conn->query($sql_seller) ;
	

	//read the seller account balance
	$seller_balance= $conn->query("SELECT amount FROM credit_system.".$stn." WHERE localtx_id = '0' ")  ;

	if ($seller_balance->num_rows > 0) 
	{
    	// output data of each row
	   $row = $seller_balance->fetch_assoc() ;
	        $seller_balance_amt=  $row['amount'];
	    
	} 

	//deduct profit

	$profit = 0.1*$cp ;

	$fsba = number_format( (float)($seller_balance_amt+(0.9 * $cp) ) ,2,'.' , '');

	$sql_seller_add = "UPDATE credit_system.".$stn." SET amount='".$fsba."' WHERE localtx_id = '0' ";  // add up the amount in wallet 

	if($conn->query($sql_seller_add)===TRUE) 
	{

	}
	else
	{
		//echo  "hello".$fsba.$conn->error;
	}

	
	//insert the profit in MBR profit transaction tble

	$sql_profit = "INSERT INTO MBR_profit_transaction  ( txid,sell_case_id,buyer,seller,amount,profit) VALUES ('$tx_id',$sci,'$bid','$seller_id', '$cp', '$profit')";  //insert the transaction
	$conn->query($sql_profit) ;


	//update the MBR_sell case table also

	$sql_up_sell = "UPDATE Csgoviral_MBR.MBR_sell_case SET case_stat='sold out', txid='$tx_id' WHERE sell_case_id=$sci ";  //insert the transaction
	$conn->query($sql_up_sell) ;

	//delete the entry from sell case table
		
	//$sql_del_sell = "DELETE FROM sell_case_db.sell_case WHERE sell_case_id=$sci ";

	//$conn->query($sql_del_sell) ;


	
	//output back to ajax
	echo  $tx_id; //return transaction id ;

	$conn->close();
?>