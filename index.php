<?php
include_once("rconClass.php");  
$host = ''; // Server host name or IP
$port = ''; // Port rcon is listening on
$password = ''; // rcon.password setting set in server.properties
$timeout = '10';                       // How long to timeout.
$rcon = new Rcon($host, $port, $password, $timeout);
if ($rcon->connect()){
  echo "Rcon Server is working!";	
  var_dump($rcon->sendCommand("GetPlayerPoints 76561197969383152"));
}else{
  echo "Rcon Server is not working!";	
}
?>
