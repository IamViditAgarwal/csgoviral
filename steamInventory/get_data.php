<?php
			


			$url = 'http://127.0.0.1:8000';
			
			$contents = file_get_contents($url);
			$json_inventory = (json_decode($contents,true));



			$inventoryTable= '<table align= "center" border="1" cellpadding="10" style="text-align:center ;">' ;
		
			$col_count=0;

			foreach ($json_inventory as $key => $inventoryItem) {
					
						if(($col_count)%4==0)
						{		
								
								
								foreach ($inventoryItem as $itemName => $itemValue) {
								
									
									
										
										if($itemName =='name')
										{
											if(strpos($itemValue, "Case" , 0) !== false )
											{
												break;
											}

										}
										if($itemName =='name')
										{
											if(strpos($itemValue, "Medal" , 0) !== false )
											{
												break;
											}

										}
										if($itemName=='image')
										{
											$inventoryTable.='<tr><td>' ;
											$imageofitem='<img src="'.$itemValue.'" alt="Image_View" style="height :250px ;width:250px;">' ;

											$inventoryTable.=$imageofitem.'</td>';
											$col_count+=1;
										}
										if($itemName =='name')
										{
											if(strpos($itemValue, "Graffiti" , 0) !== false )
											{
												break;
											}

										}
							
									
								}
						}
						else
						{
								

								foreach ($inventoryItem as $itemName => $itemValue) {
					
									
									//$pos=strpos($itemValue, $case) ;
									
										if($itemName =='name')
										{
											if(strpos($itemValue, "Case" , 0) !== false )
											{
												break;
											}

										}
										if($itemName=='image')

										{
											$inventoryTable.='<td>' ;
											$imageofitem='<img src="'.$itemValue.'" alt="Image_View" style="height :250px ;width:250px;">' ;

											$inventoryTable.=$imageofitem.'</td>';
											$col_count+=1;
										}
										if($itemName =='name')
										{
											if(strpos($itemValue, "Graffiti" , 0) !== false )
											{
												break;
											}

										}
										if($itemName =='name')
										{
											if(strpos($itemValue, "Medal" , 0) !== false )
											{
												break;
											}

										}
									
								}
						}
			}
			$inventoryTable.='</tr></table>' ;


			echo $inventoryTable ;
			


?>

	

