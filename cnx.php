<?php

$user="root";
$mdp="";
$db="projet_youtube";
$server="localhost";

$link=mysqli_connect($server,$user,$mdp,$db);

if($link){
    //echo "connexion établie";
}

else{
    die(mysqli_connect_error());
}

?>