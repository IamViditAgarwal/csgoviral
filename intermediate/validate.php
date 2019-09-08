<?php

session_start();

$person_name = $_SESSION['personaname'] ;
$profile_url = $_SESSION['profile_url'] ;
$avatar = $_SESSION['avatar'] ;
$steamid = $_SESSION['steamid'];//"76561198306639779";// ;
$tradeUrl = "https://steamcommunity.com/tradeoffer/new/?partner=346374051&token=eG0i5scZ" ;
/*
	//set the initial header
	$url = "http://127.0.0.1:8000/?req=bot&partner=".$steamid."&tradeUrl=".$tradeUrl  ; 
	//set the item market hash name 
	
	if(isset($_POST['odd1']))
		$url.="&Itm1=".urlencode(str_replace(',' , ' ' ,$_POST['weapon_name1']) )."|".urlencode(str_replace(',' , ' ' ,$_POST['skin_name1']  ) )."(". urlencode(str_replace(',' , ' ' ,$_POST['exterior_name1'] ) ).")" ;
		
	
	if(isset($_POST['odd2']))
		$url.="&Itm2=".urlencode(str_replace(',' , ' ' ,$_POST['weapon_name2']) )."|".urlencode(str_replace(',' , ' ' ,$_POST['skin_name2']  ) )."(". urlencode(str_replace(',' , ' ' ,$_POST['exterior_name2'] ) ).")" ;
		

	if(isset($_POST['odd3']))
		$url.="&Itm3=".str_replace(',', ' ', $_POST['weapon_name3'])."|".$_POST['skin_name3']."(".$_POST['exterior_name3'].")" ;


	if(isset($_POST['odd4']))
		$url.="&Itm4=".str_replace(',', ' ', $_POST['weapon_name4'])."|".$_POST['skin_name4']."(".$_POST['exterior_name4'].")" ;

	if(isset($_POST['odd5']))
		 $url.="&Itm5=".str_replace(',', ' ', $_POST['weapon_name5'])."|".$_POST['skin_name5']."(".$_POST['exterior_name5'].")" ;


	if(isset($_POST['odd6']))
		$url.="&Itm6=".str_replace(',', ' ', $_POST['weapon_name6'])."|".$_POST['skin_name6']."(".$_POST['exterior_name6'].")" ;


	if(isset($_POST['odd7']))
		$url.="&Itm7=".str_replace(',', ' ', $_POST['weapon_name7'])."|".$_POST['skin_name7']."(".$_POST['exterior_name7'].")" ;


	if(isset($_POST['odd8']))
		$url.="&Itm8=".str_replace(',', ' ', $_POST['weapon_name8'])."|".$_POST['skin_name8']."(".$_POST['exterior_name8'].")" ;


	if(isset($_POST['odd9']))
		$url.="&Itm9=".str_replace(',', ' ', $_POST['weapon_name9'])."|".$_POST['skin_name9']."(".$_POST['exterior_name9'].")" ;


	if(isset($_POST['odd10']))
		$url.="&Itm10=".str_replace(',', ' ', $_POST['weapon_name10'])."| ".$_POST['skin_name10']." (".$_POST['exterior_name10'].")" ;

					
	echo $url ."<br />";


	//call bot 

	$ch = curl_init();

	// set URL and other appropriate options
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_VERBOSE, 0);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
	curl_setopt($ch, CURLOPT_TIMEOUT, 3); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// grab URL and pass it to the browser
	// Execute
	$result=curl_exec($ch);

	curl_close($ch);

	echo "Res from node js :" .$result."<br />" ;	

	if(strcmp($result , "err")==0)  //it is giving 
	{
		echo "Error In sending Item" ;
	}
	else
	{
		echo '<script type="text/javascript">
	                    window.location="https://steamcommunity.com/my/tradeoffers";
	                    </script> ';
	}
	else if(strcmp($result, "send"))
	{

	*/	
		if(isset($_POST['sell_button']))
		{
			$case_name = $_POST['case_name'] ;
			$case_type = $_POST['category_type'] ;
			$case_color = $_POST['case_color_input'] ;
			$case_price = $_POST['price'] ;
			$skin_of_case = $_POST['expensive_skin_input'] ;

			

			
			$servername = "";
			$username = "";
			$password = "";
			$dbname = "sell_case_db";

									
			$conn = new mysqli($servername, $username, $password, $dbname);


			//enter into the history table

				//enter first into the long table 
			
			
			$sql_hstry="INSERT INTO history_user.MBR_history_".$steamid." (flag , content , case_name , case_price , skin_get , weapon_name , skin_name , skin_extr) VALUES ('c' ,'You created' , '$case_name' , '-' , '-' , '-' , '-' , '-' ) " ;
			if($conn->query($sql_hstry) === TRUE)
			{  //unset($sql_hstry); 
			}
			else
			{
				echo "Error: " . $sql_hstry . "<br>" . $conn->error;
			}

				//insert into the shorter version

			$cur_h_cnt = "SELECT COUNT(*) FROM history_user.history_".$steamid." ";
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
				$del_h = "DELETE  FROM history_user.history_".$steamid." LIMIT 1 " ;

				if($conn->query($del_h) === TRUE)
				{   
				}
				else
				{
					echo "Error in deletion: " . $del_h . "<br>" . $conn->error;
				}

			}
			
			$sql_hstry="INSERT INTO history_user.history_".$steamid." (flag , content , case_name , case_price , skin_get , weapon_name , skin_name , skin_extr) VALUES ('c' ,'You created' , '$case_name' , '-' , '-' , '-' , '-' , '-' )" ;
			if($conn->query($sql_hstry) === TRUE)
			{  unset($sql_hstry); 
			}
			else
			{
				echo "Error: " . $sql_hstry . "<br>" . $conn->error;
			}

									

			//insert inti the MBR sell case table first , get that id and fetch it to sell case 



			$sql="INSERT INTO Csgoviral_MBR.MBR_sell_case (txid , steamid , case_name , case_type , case_color , case_price , skin_of_case, case_desc_item , case_stat) VALUES ( '-' , '$steamid' , '$case_name' , '$case_type' , '$case_color','$case_price' ,'$skin_of_case', '-' , 'available' )" ;


			//$sql_profileTable = "CREATE TABLE IF NOT EXISTS user_profile_case_db.".$_SESSION['case_table']." ( case_name VARCHAR(16) , case_type VARCHAR(12) , case_color VARCHAR(20) , case_price VARCHAR(5) , skinOfCase VARCHAR(150), case_desc_table VARCHAR(50)) )";
			
			
			if ($conn->query($sql) === TRUE) 
			{
		    	
				$last_id =  $conn->insert_id;

				//case desc table name ;
				$case_desc_table_name = "Table_".$steamid."_".$last_id ;

				//insert into the sell case 

				$conn->query("INSERT INTO sell_case (sell_case_id ,person_name , profile_url , avatar , steamid , case_name , case_type , case_color , case_price , skinOfCase, case_desc_table) VALUES ('$last_id' ,'$person_name', '$profile_url', '$avatar' , '$steamid' , '$case_name' , '$case_type' , '$case_color','$case_price' ,'$skin_of_case','$case_desc_table_name')"); 



				

				//insert sell case record to the user profile

				$insert_profile_case = "INSERT INTO user_profile_case_db.User_Case_Table_".$steamid." (sell_case_id , case_name , case_type , case_color , case_price , skinOfCase, case_desc_table,case_stat) VALUES ('$last_id',  '$case_name' , '$case_type' , '$case_color','$case_price' ,'$skin_of_case','$case_desc_table_name', 'available')" ;

				$conn->query($insert_profile_case) ;


				$new_table_sql = "CREATE TABLE IF NOT EXISTS ".$case_desc_table_name." (case_item_id INT(50) NOT NULL AUTO_INCREMENT , case_item_image VARCHAR(500) , weapon_name VARCHAR(50) , skin_name VARCHAR(30) , exterior VARCHAR(20), odd VARCHAR(5) , rarity VARCHAR(22) ,PRIMARY KEY (case_item_id) )" ;

				if ($conn->query($new_table_sql) === TRUE) 
				{  
					// now the dynaic table is generated , insert the reference in old table

					$update_sql = "UPDATE Csgoviral_MBR.MBR_sell_case SET case_desc_item ='".$case_desc_table_name."' WHERE sell_case_id= '".$last_id."' " ;



					if($conn->query($update_sql) === TRUE)
					{

						//now multiple insert queries 
						if(isset($_POST['odd1']))
							$Insert_sql = "INSERT INTO  $case_desc_table_name (case_item_image , weapon_name , skin_name , exterior , odd, rarity) VALUES ('".$_POST['skin_pic_1']."' , '".$_POST['weapon_name1']."' , '".$_POST['skin_name1']."' , '".$_POST['exterior_name1']."' ,'".$_POST['odd1']."' , '".$_POST['rarity_color1']."' ) ;";
						
						if(isset($_POST['odd2']))
							$Insert_sql .= "INSERT INTO  $case_desc_table_name (case_item_image , weapon_name , skin_name , exterior , odd, rarity) VALUES ('".$_POST['skin_pic_2']."' , '".$_POST['weapon_name2']."' , '".$_POST['skin_name2']."' , '".$_POST['exterior_name2']."' ,'".$_POST['odd2']."' , '".$_POST['rarity_color2']."' );";
						if(isset($_POST['odd3']))
							$Insert_sql .= "INSERT INTO  $case_desc_table_name (case_item_image , weapon_name , skin_name , exterior , odd, rarity) VALUES ('".$_POST['skin_pic_3']."' , '".$_POST['weapon_name3']."' , '".$_POST['skin_name3']."' , '".$_POST['exterior_name3']."' ,'".$_POST['odd3']."' , '".$_POST['rarity_color3']."' );";
						if(isset($_POST['odd4']))
							$Insert_sql .= "INSERT INTO  $case_desc_table_name (case_item_image , weapon_name , skin_name , exterior , odd, rarity) VALUES ('".$_POST['skin_pic_4']."' , '".$_POST['weapon_name4']."' , '".$_POST['skin_name4']."' , '".$_POST['exterior_name4']."' ,'".$_POST['odd4']."' , '".$_POST['rarity_color4']."' );";
						if(isset($_POST['odd5']))
							$Insert_sql .= "INSERT INTO  $case_desc_table_name (case_item_image , weapon_name , skin_name , exterior , odd, rarity) VALUES ('".$_POST['skin_pic_5']."' , '".$_POST['weapon_name5']."' , '".$_POST['skin_name5']."' , '".$_POST['exterior_name5']."' ,'".$_POST['odd5']."' , '".$_POST['rarity_color5']."' );";
						if(isset($_POST['odd6']))
							$Insert_sql .= "INSERT INTO  $case_desc_table_name (case_item_image , weapon_name , skin_name , exterior , odd, rarity) VALUES ('".$_POST['skin_pic_6']."' , '".$_POST['weapon_name6']."' , '".$_POST['skin_name6']."' , '".$_POST['exterior_name6']."' ,'".$_POST['odd6']."' , '".$_POST['rarity_color6']."' );";
						if(isset($_POST['odd7']))
							$Insert_sql .= "INSERT INTO  $case_desc_table_name (case_item_image , weapon_name , skin_name , exterior , odd, rarity) VALUES ('".$_POST['skin_pic_7']."' , '".$_POST['weapon_name7']."' , '".$_POST['skin_name7']."' , '".$_POST['exterior_name7']."' ,'".$_POST['odd7']."' , '".$_POST['rarity_color7']."' );";
						if(isset($_POST['odd8']))
							$Insert_sql .= "INSERT INTO  $case_desc_table_name (case_item_image , weapon_name , skin_name , exterior , odd, rarity) VALUES ('".$_POST['skin_pic_8']."' , '".$_POST['weapon_name8']."' , '".$_POST['skin_name8']."' , '".$_POST['exterior_name8']."' ,'".$_POST['odd8']."' , '".$_POST['rarity_color8']."' );";
						if(isset($_POST['odd9']))
							$Insert_sql .= "INSERT INTO  $case_desc_table_name (case_item_image , weapon_name , skin_name , exterior , odd, rarity) VALUES ('".$_POST['skin_pic_9']."' , '".$_POST['weapon_name9']."' , '".$_POST['skin_name9']."' , '".$_POST['exterior_name9']."' ,'".$_POST['odd9']."' , '".$_POST['rarity_color9']."' );";
						if(isset($_POST['odd10']))
							$Insert_sql .= "INSERT INTO  $case_desc_table_name (case_item_image , weapon_name , skin_name , exterior , odd, rarity) VALUES ('".$_POST['skin_pic_10']."' , '".$_POST['weapon_name10']."' , '".$_POST['skin_name10']."' , '".$_POST['exterior_name10']."' ,'".$_POST['odd10']."' , '".$_POST['rarity_color10']."' )";
						

						

						
						if ($conn->multi_query($Insert_sql) === TRUE) 
						{
							//re direct to the home page
							$conn->close() ;
						   echo '<script type="text/javascript">
		                    alert("Success ! Your Case has been listed to the market .");
		                    window.location="../profile.php";
		                    </script> ';
						} 
						else 
						{
						    echo "Error: " . $Insert_sql . "<br />" . $conn->error;
						}

						
					}
					else{
						echo "Error: " . $update_sql . "<br>" . $conn->error;
					} 
				}
				else
				{
					echo "Error: " . $new_table_sql . "<br>" . $conn->error;
				}

			
			} 
			else 
			{
		    	echo "Error: " . $sql . "<br>" . $conn->error;
			}
				
			

			//echo '<script src="../bots/index.js" ></script>
			//	  <script type="text/javascript">sendRandomItem();</script>';

			unset($_POST['sell_button']) ;			
		}

	//}

?>