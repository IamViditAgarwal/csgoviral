
<?php
session_start();

if(isset($_POST['submit']))
{   
    $fund_type = $_POST['r_f'] ;


    if($fund_type< 0 || $fund_type>6)
    {
       echo '<script type="text/javascript">
                            alert("We can\'t process this amount !");
                            window.location="../profile.php";
                            </script> ';
    }

    else
    {
       
            $id = $_SESSION['steamid'] ;
            $url = "127.0.0.1:9000/pay".$fund_type."?user_steam_id=".$id."";
            $ch = curl_init();

            header("Access-Control-Allow-Origin: *"); // for all
            // set URL and other appropriate options
            curl_setopt($ch, CURLOPT_URL, $url);
             //curl_setopt($ch, CURLOPT_HEADER, false);
            //curl_setopt($ch, CURLOPT_POST, 1);
            //curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
            //curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            curl_setopt($ch, CURLOPT_ENCODING,"");
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

         
            $result= curl_exec($ch);


            curl_close($ch);

           
            header("Location: ".$result."", true, 301);
       

        
    }
}




?>


​