<?php
define('SERVEUR','localhost');
define('USER','root');
define('MDP','');
define('BD','patrimoinemanouba');

$conn = mysqli_connect(SERVEUR,USER,MDP,BD);
if(!$conn){
	echo "error";
}

?>