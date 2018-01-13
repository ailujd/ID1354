<?php

recuire_once('config.php');

$Username = $_POST['user'];
$Comment = $_POST['Comment'];
$Recept = $_SERVER['REQUEST_URI'];

$query = "DELETE FROM Comments WHERE User = '$Username' AND Recept = '$Recept' AND Comment = '$Comment' ";

$result = mysqli_query($link, $query);

if($result){
	$smsg = "FAN VAAA BRA";
}

?>