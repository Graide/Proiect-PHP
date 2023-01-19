<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "magazin";

if (!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Eroare de conectare!" . mysqli_connect_error());
}