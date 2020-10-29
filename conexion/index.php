<?php 

$sandra = new mysqli("localhost","root","","dba");

if ($sandra) {
	# code...
	echo "hola bien";
}else{
	echo "hola mal";
}

 ?>