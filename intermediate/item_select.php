<?php

session_start();

?>
<?php

	class select_item {

		function get_selected_item () {

			$nItem=  count($_SESSION['odds_array']);

			$start = array(0,0,0,0,0,0,0,0,0,0);
			$endi =  array(0,0,0,0,0,0,0,0,0,0);

			global $index;

		
			 for($i=0; $i<$nItem; $i++){
		        for($j=0; $j<=$i; $j++){
		            $start[$i]+=$_SESSION['odds_array'][$j-1];

		        }
		        $endi[$i] = $start[$i] + $_SESSION['odds_array'][$i];
		    }
		
		    //srand (time(NULL));
		    $v2 = mt_rand() % 100 + 1;
		     
		    for($k=0; $k<$nItem; $k++)
		    {
		        if($v2 >= $start[$k] && $v2 < $endi[$k])
		        {  
		        	$index=$k;
		        	//echo $index;
		            
		            return $index;
		        }
		        else 
		        	continue;
		    }

		}

	}


	$obj = new select_item();


	 echo $obj->get_selected_item() ;



	?>