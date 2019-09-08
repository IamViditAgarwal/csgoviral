<?php

	session_start();


	$Id = $_POST['data'] ;  //get substring 

	if(empty($Id))
	{
		echo "empty" ;
	}
	else
	{
	$caseDelId = strrchr($Id, '_');

	$caseDelId = str_replace('_', '', $caseDelId) ;


	$steamid = $_SESSION['steamid'] ;

	$servername = "";
	$username = "";
	$password = "";
	$dbname = "csgoviral";
	

	$case_name="";

	$conn = new mysqli($servername, $username, $password, $dbname);

	
	$sql = "DELETE FROM user_profile_case_db.User_Case_Table_".$steamid." WHERE sell_case_id =$caseDelId  ";

	if ($conn->query($sql) === TRUE) 
	{

		$cnt = "SELECT * FROM sell_case_db.sell_case WHERE sell_case_id = $caseDelId ";
		$rh = $conn->query($cnt);

		if ($rh->num_rows > 0) 
		{
			$row_hc = $rh->fetch_assoc();
			$case_name = $row_hc["case_name"];
			$ct = $row_hc["case_type"];
			$cc = $row_hc["case_color"];
			$cp = $row_hc["case_price"];
			$cskin = $row_hc["skinOfCase"];
			$cdt = $row_hc["case_desc_table"];
			$cid = $row_hc["sell_case_id"];

		} 
		
			if ($conn->query("DELETE FROM sell_case_db.sell_case WHERE sell_case_id =$caseDelId  ") === TRUE) 
			{
				
				if ($conn->query("UPDATE Csgoviral_MBR.MBR_sell_case SET case_stat ='deleted' WHERE sell_case_id= $caseDelId ") === TRUE) 
				{
				
                  //insert into the holdItemdb

					if ($conn->query("INSERT INTO holdItem.holdItem_user_".$steamid." (flag,cn,ct,cid,cc,cp,cskin,cdt,csgot) VALUES ('cd','$case_name','$ct', $cid,'$cc' ,'$cp' ,'$cskin','$cdt','-')") === TRUE) 
					{
					


					  	//insert into history
						if ($conn->query("INSERT INTO history_user.MBR_history_".$steamid." (flag ,content ,case_name ,case_price ,skin_get ,weapon_name ,skin_name ,skin_extr) VALUES ('d' , 'You deleted' , '$case_name' , '-' , '-' , '-' , '-' , '-')   ") === TRUE) 
						{
					
		   				
			   				//now enter into current history

			   				$cur_h_cnt = "SELECT COUNT(*) FROM history_user.history_".$steamid." ";
							$r_h = $conn->query($cur_h_cnt);

							if ($r_h->num_rows > 0) 
							{
								$row_hc = $r_h->fetch_assoc();
								$answer = reset($row_hc);
							} 
							else 
							{
								$answer=0;
							}

							if($answer>17)
							{
								//delete top row from current history
								$del_h = "DELETE  FROM history_user.history_".$steamid." LIMIT 1 " ;

								if($conn->query($del_h) === TRUE)
								{   


								}
								else
								{
									echo "Error in deletion: " . $del_h . "<br>" . $conn->error;
								}

							}

							$sql_hstry="INSERT INTO history_user.history_".$steamid." (flag , content , case_name , case_price , skin_get , weapon_name , skin_name , skin_extr) VALUES ('d' ,'You deleted' , '$case_name' , '-' , '-' , '-' , '-' , '-' )" ;
						
							if($conn->query($sql_hstry) === TRUE)
							{  
								echo "succ" ;
							}
							else
							{
								echo "Error: " . $sql_hstry . "<br>" . $conn->error;
							}
		   			
						} 
						else
						{
							echo "Error updating record: " . $conn->error;
						}	

				    }
					else

					{
						echo "Error in itemhold query record: " . $conn->error;
					}
				
			} 
			else
			{
				echo "Error updating record: " . $conn->error;
			}	
			
		} 
		else
		{
			echo "Error updating record: " . $conn->error;
		}
	} 
	else {
    	echo "Error updating record: " . $conn->error;
	}


	$conn->close();

	}
				

?>