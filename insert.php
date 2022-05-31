<?php

include "cnx.php";

if(isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["phone"]) && isset($_GET["mail"]) && isset($_GET["gender"]));

{
    $nom= $_GET["nom"];
    $prenom= $_GET["prenom"];
    $phone= $_GET["phone"];
    $mail= $_GET["mail"];
    $sexe= $_GET["gender"];

    $req= mysqli_query($link, "insert into user(nom,prenom,phone,mail,sexe) values ('$nom','$prenom','$phone','$mail','$sexe')");

    if($req)
    {
        echo "insertion effectuée";
    }

    else

    {
        echo "erreur d'insertion";
    }
}

?>