<?php
session_start();
print_r($_POST);
if(isset($_POST["name"]) && $_POST["name"] !== "") {

    $_SESSION["name"] = $_POST["name"];
}
print_r($_SESSION);
header('Location: index.php');