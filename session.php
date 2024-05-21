<?php
session_start();
include"./database/database.php";

if(!empty($_SESSION['ZamaID']))
{
    $ZamaID = $_SESSION['ZamaID'];

    $query = $db->query("SELECT * from users WHERE ID = '$ZamaID'");
    $data = $query->fetch(PDO::FETCH_ASSOC);

    echo "<script>var loggedIn = true;</script>";
}
else
{
    header('location: login.php');
}
?>