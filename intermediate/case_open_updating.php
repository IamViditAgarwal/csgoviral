<?php

	session_start();

	//need buyer id

	//need seller id


	$myid= $_SESSION['steamid'] ; //buyer id
	$trsid= $_POST['trsid'];
	$csid= $_POST['csid'] ;
	$sllr_id = $_POST['sellerid'] ;//seller id
	$sw=$_POST['skin_won'];
	$swn = $_POST['skin_name'] ;
	$swerr = $_POST['skin_etrr'] ;
	$cnm = $_POST['cnm'] ; //case name
	$wpn = $_POST['wpn'] ;
	$cp = $_POST['cpr'] ; //price

	$sn = "";
	$un = "";
	$pwd = "";
	$dbname = "userCaseOpenDb";

	// Create connection
	$conn = new mysqli($sn, $un, $pwd, $dbname);

	//apply the locking mechanism 
	//we need to get the unique transaction id 

	//insert into the MBR transaction table 

		$skinOut= "INSERT INTO Csgoviral_MBR.MBR_skin_out (case_open_txid,sell_case_id ,weapon_name,skin_won,skin_name,skin_extr) VALUES ('$trsid',$csid,'$wpn', '$sw', '$swn', '$swerr')" ;

		if($conn->query($skinOut)===TRUE)
		{

		}
		else
		{
			echo '<script type="text/javascript">
	                    alert("Error Occured !".$conn->error);
	                    </script> ' ;
		}



	//insert into the user case open table
		
		$sql_cop = "INSERT INTO User_Case_Open_Table_".$myid." (case_open_txid,sell_case_id ,weapon_name,skin_won,skin_name,skin_extr) VALUES ('$trsid',$csid,'$wpn', '$sw', '$swn', '$swerr')";
	 
	// [--History --]

	//now insert the case buy for buyer MBR



		$buy_hs = "INSERT INTO history_user.MBR_history_".$myid." (flag , content , case_name , case_price , skin_get , weapon_name , skin_name , skin_extr) VALUES ('b' ,'You bought' , '$cnm' , '".$cp."' , '$sw' , '$wpn' , '$swn' , '$swerr' ) " ;

		if($conn->query($buy_hs) === TRUE)
		{ }
		else
		{
			echo "Error: " . $buy_hs . "<br>" . $conn->error;
		}

		// insert the case for buyer current

		$cur_h_cnt = "SELECT COUNT(*) FROM history_user.history_".$myid." ";
		$r_h = $conn->query($cur_h_cnt);

		if ($r_h->num_rows > 0) 
		{
			$row_hc = $r_h->fetch_assoc();
			$answer = reset($row_hc);
		} 
		else 
		{
			$answer=0;//						    echo "0";
		}

		if($answer>17)
		{
			//delete top row from current history
			$del_h = "DELETE * FROM history_user.history_".$myid." LIMIT 1 " ;

			if($conn->query($del_h) === TRUE)
			{   
			}
			else
			{
				echo "Error in deletion: " . $del_h . "<br>" . $conn->error;
			}

		}
				//insert into current history
		$sql_hstry="INSERT INTO history_user.history_".$myid." (flag , content , case_name , case_price , skin_get , weapon_name , skin_name , skin_extr) VALUES ('b' ,'You bought' , '$cnm' , '".$cp."' , '$sw' , '$wpn' , '$swn' , '$swerr' )" ;


		if($conn->query($sql_hstry) === TRUE)
		{  	}
		else
		{
			echo "Error: " . $sql_hstry . "<br>" . $conn->error;
		}




	// insert the history MBR seller

		$sell_hs = "INSERT INTO history_user.MBR_history_".$sllr_id." (flag , content , case_name , case_price , skin_get , weapon_name , skin_name , skin_extr) VALUES ('s' ,'You sold' , '$cnm' , '".$cp."' , '$sw' , '$wpn' , '$swn' , '$swerr' ) " ;

		if($conn->query($sell_hs) === TRUE)
		{ }
		else
		{
			echo "Error: " . $sell_hs . "<br>" . $conn->error;
		}


		//insert the current history MBR seller



		$cur_h_cnt = "SELECT COUNT(*) FROM history_user.history_".$sllr_id." ";
		$r_h = $conn->query($cur_h_cnt);

		if ($r_h->num_rows > 0) 
		{
			$row_hc = $r_h->fetch_assoc();
			$answer = reset($row_hc);
		} 
		else 
		{
			$answer=0;//						    echo "0";
		}

		if($answer>17)
		{
			//delete top row from current history
			$del_h = "DELETE * FROM history_user.history_".$sllr_id." LIMIT 1 " ;

			if($conn->query($del_h) === TRUE)
			{   
			}
			else
			{
				echo "Error in deletion: " . $del_h . "<br>" . $conn->error;
			}

		}
				//insert into current history
		$sql_hstry="INSERT INTO history_user.history_".$sllr_id." (flag , content , case_name , case_price , skin_get , weapon_name , skin_name , skin_extr) VALUES ('s' ,'You sold' , '$cnm' , '".$cp."' , '$sw' , '$wpn' , '$swn' , '$swerr' )" ;


		if($conn->query($sql_hstry) === TRUE)
		{  	}
		else
		{
			echo "Error: " . $sql_hstry . "<br>" . $conn->error;
		}


	  $conn->query($sql_cop) ;




	//now insert into the item on hold tables also

	//item on hold for buyer
		$select = "SELECT * FROM Csgoviral_MBR.MBR_sell_case WHERE sell_case_id = $csid" ;
		$sr = $conn->query($select) ;

		if($sr->num_rows >0)
		{   
			$srow = $sr->fetch_assoc();

			if($conn->query("INSERT INTO holdItem.holdItem_user_".$sllr_id." (flag, cn, ct, cid , cc, cp, cskin, cdt ,csgot) VALUES ('cs' , '$cnm' , '".$srow["case_type"]."' , $csid ,'".$srow["case_color"]."', '$cp' ,'".$srow["skin_of_case"]."','".$srow["case_desc_item"]."','$sw') ")===TRUE)
			{
			}
			else
			{
				echo "Error: ";
			}
		}

	//item on hold for seller

		$select_seller = "SELECT * FROM userCaseOpenDb.User_Case_Open_Table_".$myid." WHERE sell_case_id = $csid "  ;
		$s_seller = $conn->query($select_seller) ;

		if($s_seller->num_rows >0)
		{   
			$srow_s = $s_seller->fetch_assoc();

		  if($conn->query("INSERT INTO holdItem.holdItem_user_".$myid." (flag, cn, ct, cid , cc, cp, cskin, cdt ,csgot) VALUES ('sw' , '-' , '-' , $csid ,'-', '-' , '".$wpn."(".$swn."(".$swerr."(".$srow_s['buy_time']."' , '-' , '$sw' ) ")===TRUE)
				{
				}
				else
				{
					echo "Error: ";
				} 

		}



	$conn->close();
?>