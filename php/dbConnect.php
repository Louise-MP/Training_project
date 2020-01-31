<?php                                                      
/* on définit les paramètres de connexion à la bdd */
$dbuser = "root";
$dbpass = "root";
$dbname = "member area";

// on créer la connexion 

    $connexion = new PDO('mysql:host=localhost;dbname=' .$dbname. ';charset=utf8', $dbuser, $dbpass);
    $connexion-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>