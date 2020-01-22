<?php

$dbuser = "root";
$dbpass = "root";
$dbname = "member area";

$connexion = new PDO('mysql:host=localhost;dbname=' .$dbname. ';charset=utf8', $dbuser, $dbpass);
$connexion-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



?>