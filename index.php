<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 18/01/2019
 * Time: 09:19
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "module_com";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
else{
    $conn->select_db($dbname);
}
?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="module.css" media="screen" title="no title" charset="utf-8">
    </head>
    <body>

    <h1 id="titre">Espace Commentaires</h1>

    <form id="formu" action="module.php" method="post">
        <div>
            <label for="username">Identifiant</label>
            <input id="ident" type="text" name="user">
        </div>
        <div>
            <label for="commentaire">commentaire</label>
            <textarea id="commentaire" name="comments" ></textarea>
        </div>
        <div>
            <button type="submit" name="button">envoyer</button>
        </div>

        <div id="recup">

            <?php
            function affichall()
            {

                global $conn;
                $sql = "SELECT id,pseudo,coms from info_com ";
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    echo "".$row['pseudo']." : " . $row['coms'] .  "<br><br>";


                }

            }

            affichall();
            ?>

        </div>


    </form>
    </body>
    </html>

<?php


