<!DOCTYPE html>
<html>
    <head>
        <title>Inscription</title>
        <meta charset="utf-!">

        <style>
            label{
                width : 20%;
                display : inline-block;
                text-align : left;
            }

            body{
                width : 50%;
                font-family : Arial;
                margin : 5px auto;
                background : #f4f7f8;
                padding : 20px;
                color : #1abc9c;
            }

            fieldset{
               border-radius : 8px;
            }

            legend{
                font-size : 1.4em;
                margin-bottom: 10px;
            }

            input[type="text"], input[type="number"], input[type="email"]
            {
                border-radius: 5px;
                padding: 10px;
                width: 70%;
                background-color: #ffff;
                margin: 10px;
            }

            input[type="submit"] {
                position: relative;
                padding: 20px;
                font-size: 18px;
                border: 1px solid #16a085;
                border-radius: 2px;
                margin-top: 8px;
                width: 100%;
                font-size: 18px;
                font-style: bold;
                color: #000;
            }

            ul{
                list-style-type: none;
                padding: 20px;
                overflow: hidden;
                margin: 10px;
                background-color: #333;
            }

            li{
                display: inline;
                padding: 10px;
                margin: 20px;
            }

            li a{
                color: white;
                padding: 20px;
                margin: 20px;
            }
        </style>
    </head>
    
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="https://www.bing.com/">Home</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </header>

<?php

include "cnx.php";
if(isset($_POST["id"])){

    $id=$_POST["id"];
    $req=mysqli_query($link,"SELECT * FROM user WHERE id='$id' ");

    $res=mysqli_fetch_array($req);
}

else{

    echo "champs manquant";
}


?>



        <form action="modifier.php" method="GET">
            <fieldset>
                <legend>Détails</legend>

            <input type="hidden" name="id" value="<?php echo $res["id"]?>" />

            <label>Nom</label><input type="text" name="nom" value="<?php echo $res["nom"]?> placeholder="votre nom ici"/> <br>
            <label>Prénom</label><input type="text" name="prenom" value="<?php echo $res["prenom"]?> placeholder="votre prenom ici"/> <br>
            <label>Tél</label><input type="number" name="phone" value="<?php echo $res["phone"]?> placeholder="votre phoneephone ici"/> <br>
            <label>Email</label><input type="email" name="mail" value="<?php echo $res["mail"]?> placeholder="votre mail ici"/> <br>
            <label>Sexe</label>
            <?php
            if($res["sexe"]=="Homme")
            {
            ?>
            <input type="radio" name="gender" value="Homme" checked="true"/>Homme 
            <input type="radio" name="gender" value="Femme" checked="true"/>Femme <br>
            <?php
            }

            else{
                ?>


                <?php
            }
            ?>
            <input type="submit" value="Modifier"/>
            </fieldset>
        </form>

    </body>

</html>