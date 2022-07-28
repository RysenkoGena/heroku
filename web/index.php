<?php
include_once 'author.php';

session_start();

if(isset($_SESSION["name"]) && $_SESSION["name"] !== ""){
    echo "Приветствую тебя, ".$_SESSION["name"];
    echo '<br><a href="exit.php">Выход</a>';
}
else {
    include_once 'form.php';
}

