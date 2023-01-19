<?php

session_start();

if(isset($_SESSION['id_client'])) {

    unset($_SESSION['id_client']);
}

header("Location: login.php");
die;