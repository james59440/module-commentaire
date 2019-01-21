<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 17/01/2019
 * Time: 09:46
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


function add (){

    global $conn;

if (isset($_POST['user'])
    && $_POST['comments'] !=''
     && (isset($_POST['button']))) {

    $com = $_POST['comments'];
    $login = $_POST['user'];

    $sql = "INSERT INTO `info_com` (`id`, `pseudo`, `coms`) VALUES (NULL ,'$login','$com')";
    $conn->query($sql);

    header('Location: index.php');
}

}
add();




