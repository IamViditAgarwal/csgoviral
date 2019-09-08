<?php
if(!isset($Functions)){
    die("Error! 404");
}

$caseName = $_GET['name'];
if(empty($caseName)){
    die($Functions->getIndex("404"));
}else{
    $case = $Functions->db->query("SELECT * FROM cases WHERE name = '".$Functions->getString($caseName)."'");
    if($case->num_rows == 0){
        die($Functions->getIndex("404"));
    }else{
        $case = $case->fetch_object();
		$Visible = $case->visible == 1 ? "" : "disable";
        $items = explode(",", $case->items);
        $randItems = [];
        $itemsBlock = '';
        foreach($items as $key => $item){
            $item = $Functions->db->query("SELECT * FROM items WHERE id = '".$item."' ORDER BY RAND()")->fetch_object();
            $searchQuery = str_replace(" ", "%20", ($item->weapon." | ".$item->name));
            http://steamcommunity.com/market/search?appid=730&q='.$searchQuery.'
           $itemsBlock .= '<a class="item-incase '.$item->type.'" target="_blank" href="https://csgo.tm/?s=price&search='.$searchQuery.'" style="text-decoration: none;">
			<div class="picture">
				<img src="'.$item->image.'" alt="Drop">
			</div>
			<div class="descr">
			    <strong>'.$item->weapon.'</strong>
				<span>'.$item->name.'</span>
			</div></a>';
			$randItems[] = ['weapon' => $item->weapon, 'name' => $item->name, 'image' => $item->image, 'type' => $item->type];
        }

        $caruselBlock = '';
        for($i = 0; $i < 35; $i++){
            $blue = [];
            if(rand(0, 3) != 2){
                foreach($randItems as $rItem){
                    if($rItem['type'] == "milspec"){
                        $blue[] = $rItem;
                    }
                }
                $randItem = $blue[array_rand($blue)];
            }else{
                $randItem = $randItems[array_rand($randItems)];
            }
            $caruselBlock .= '<div class="case-weapon-block-carusel weaponblock '.$randItem['type'].'">
                        <img src="'.$randItem['image'].'">
                        <div class="case-weapon-block-info"><span>'.$randItem['weapon'].'<br>'.$randItem['name'].'</span></div>
                    </div>';
        }
    }
}
        $items = $Functions->db->query("SELECT * FROM `drops`");
		$totalcase = 0;
		while($drop = $items->fetch_object()){
			$totalcase++;}
	  $sqr = $Functions->db->query("SELECT * FROM `users`");
	  $totaluser = 0;
	  while($row = $sqr->fetch_object()){
	  $totaluser++;}
	      session_start();
    $id = session_id();
    
if ($id!="") {
 $CurrentTime = time();
 $LastTime = time() - 60;
 $base = "base.dat";

     $file = file($base);
     $k = 0;
     for ($i = 0; $i < sizeof($file); $i++) {
      $line = explode("|", $file[$i]);
       if ($line[1] > $LastTime) {
       $ResFile[$k] = $file[$i];
       $k++;
      }
     }

     for ($i = 0; $i<sizeof($ResFile); $i++) {
      $line = explode("|", $ResFile[$i]);
      if ($line[0]==$id) {
          $line[1] = trim($CurrentTime)."\n";
          $is_sid_in_file = 1;
      }
      $line = implode("|", $line); $ResFile[$i] = $line;
     }
    
     $fp = fopen($base, "w");
     for ($i = 0; $i<sizeof($ResFile); $i++) { fputs($fp, $ResFile[$i]); }
     fclose($fp);
    
     if (!$is_sid_in_file) {
      $fp = fopen($base, "a-");
      $line = $id."|".$CurrentTime."\n";
      fputs($fp, $line);
      fclose($fp);
     }
    }
echo $Functions->getIndex("case", [
    'from' => ['{case_title}', '{case_in}', '{rand_cases}', '{case_name}', '{case_picture}', '{total_case}', '{total_users}', '{online_people}', '{case_price}', '{case_viz}'],
    'to' => [$case->title, $itemsBlock, $caruselBlock, $case->name, $case->picture , $totalcase, $totaluser, sizeof(file($base)), $case->price, $Visible]
]);

?>