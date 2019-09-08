<?php
	session_start();

	if(isset($_POST['continue']))
	{

			$pcStat = 0 ;

			$steamid= $_SESSION['steamid'];
			$trade_url = $_POST['tradeURL'] ;

			$conn = NEW  mysqli('', '', '' , 'csgoviral') ;


			//promoCode

			if(isset($_POST['promoCode']) && strlen($_POST['promoCode'])==7 )
			{
				$pc = $_POST['promoCode'] ;
				$pc = $conn->real_escape_string($pc); 


				//emsure that the promocodes can be used only once and upto 10 times

				//check the promocode ..

				if ($conn->query("SELECT code FROM promoCodes.code WHERE code = '".$pc."' ") === TRUE) {

					//register the entry of the $0.5  record in wallet
					if ($conn->query("INSERT INTO credit_system.Credit_".$_SESSION['steamid']." (localtx_id , buyer , seller , credit_for_case_id , amount , f_amt) VALUES ('PromoCode of $0.5 Used' , 'me' , '-' , '-' , 1 , '1') ") === TRUE) {

						//update the wallet amount
						if ($conn->query("UPDATE credit_system.Credit_".$_SESSION['steamid']." SET amount = amount + 0.5 WHERE localtx_id = '0'  ") === TRUE) {

							//deduct the qty from promoCode table
							if ($conn->query("UPDATE promoCodes.code SET qty = qty - 1 WHERE sno = 1 ") === TRUE) {

								
								//make a record who used promoCode
								if ($conn->query("INSERT INTO promoCodes.couponUseRecord (person) VALUES ('".$_SESSION['steamid']."') ") === TRUE) {

									//successfully code applied 
									//insert into the notification table of a user

									if ($conn->query("INSERT INTO notification.notify (message , userid) VALUES ('You have successfully applied Promo Code !' , '".$_SESSION['steamid']."') ") === TRUE) {

			
										//all done upto here
										$pcStat = 1 ;
								
									}
								
								}	
								
							}

						}


					}

				}
				else
				{
					$pcStat =2 ;
				}

			}

			//TradeUrl

			$_SESSION['tu'] = $trade_url ;
			if ($conn->query("INSERT INTO trade_url (steamid, trade_url_val) VALUES ('$steamid', '$trade_url')") === TRUE) {
			   
			    $conn->close(); 
				header("location: ../index.php?pcStat=$pcStat");
			} 

			 
			
	}


?>