<?php
require_once("config.php");
ob_start();
session_start();
error_reporting(E_ERROR | E_PARSE);
ini_set('default_socket_timeout', 30);

class Functions{

    public $db, $config;

    public function __construct($config){
        
        $this->config = $config;
        $this->db = new mysqli($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);
        if ($this->db->connect_error) {
            die("Couldn't connect to MySQL: ".$this->db->connect_error);
        }
        mysqli_query($this->db, "SET NAMES utf8");
    }
    public function getTemplate($name){
        $file = $_SERVER['DOCUMENT_ROOT']."/template/".$name.".tpl";
        if(!is_file($file)){
            return "Error! Template not found!";
        }else{
            $template = file_get_contents($file);
            preg_match_all('/{include file="(.*?)"}/is', $template, $matches);
            foreach($matches[1] as $value) {
                $template = str_replace('{include file="'.$value.'"}', $this->getTemplate(str_replace(".tpl", "", $value)), $template);
            }
            return $template;
        }
    }

    public function getIndex($template, $replace = ['from' => [], 'to' => []]){
        $template = $this->getTemplate($template);
		$replace['from'][] = "{title}";
        $replace['to'][] = $this->config['site_title'];
        if($this->isLogged()){
            $user = $this->getUser();
            $replace['from'][] = "{authBlock}";
            $replace['to'][] = '<div class="userblock">
				<a href="/user" class="username">
					<img src="'.$_SESSION['avatarfull'].'" alt="Аватар">
					<span>'.$_SESSION['name'].'</span>
				</a>
				<div class="userblock-bottom">
					<a href="#" class="purse">
						Balance:
						<span>'.$user->money.' <small>p</small></span>
					</a>
					<span class="addmoney">
					<form action="/pay" method="POST">
						<input name="money" type="number" min="0" placeholder="Sum" class="invoiceMoney">
						<button class="button" type="submit">+</button>
					</form>
					</span>
				</div>
				<a href="/steam?logout" class="quit">x</a>
			</div>';
        }else{
            $replace['from'][] = "{authBlock}";
            $replace['to'][] = '<a href="/steam?login" class="via_steam">
            <div class="via_steam_img"></div><div class="text">Login<br>via STEAM</div></a>';
            $replace['from'][] = "{logoutBlock}";
            $replace['to'][] = "";
        }
        return str_replace($replace['from'], $replace['to'], $template);
    }

    public function getString($str){
        return $this->db->real_escape_string($str);
    }

    public function redirect($url = ""){
        if(empty($url)){
            header("Location: /index.php");
        }else{
            header("Location: ".$url);
        }
    }

    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function getUser($steamid = ""){
        if(empty($steamid)){
            $user = $this->db->query("SELECT * FROM users WHERE steamid = '".$this->getString($_SESSION['steamid'])."'");
            if($user->num_rows != 0){
                return $user->fetch_object();
            }else{
                return false;
            }
        }else{
            $user = $this->db->query("SELECT * FROM users WHERE steamid = '".$steamid."'");
            if($user->num_rows != 0){
                return $user->fetch_object();
            }else{
                return false;
            }
        }
    }

    public function isLogged(){
        if(!empty($_SESSION['steamid'])){
            $user = $this->db->query("SELECT * FROM users WHERE steamid = '".$this->getString($_SESSION['steamid'])."'");
            if($user->num_rows == 0){
                return false;
            }else{
                return true;
            }
        }else{
            return false;
        }
    }

    public function takeMoney($user, $amount){
        $this->db->query("UPDATE users SET money = money - '".$amount."' WHERE steamid = '".$user."'");
    }

    public function giveMoney($user, $amount){
        $this->db->query("UPDATE users SET money = money + '".$amount."' WHERE steamid = '".$user."'");
    }

    public function getItemSteamPrice($name){
        $cost = json_decode(file_get_contents("http://steamcommunity.com/market/priceoverview/?country=RU&currency=5&appid=730&market_hash_name=".urlencode($name)), true);
        if($cost){
            return $cost;
        }else{
            return false;
        }
    }

    public function getIP() {
        if (isset($_SERVER['CF-PSEUDO-IPV4'])) return $_SERVER['CF-PSEUDO-IPV4'];
        return $_SERVER['REMOTE_ADDR'];
    }
}

$Functions = new Functions($cfg);
?>