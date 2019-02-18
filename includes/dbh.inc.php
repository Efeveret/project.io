<?php


$dbServername = "CSDM-WEBDEV";
$dbUsername = "1811216";
$dbPassword = "1811216";
$dbName = "db1811216_cmm04p";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

/*
if ($conn->connect_error){ die('Error'.('.$conn->connect_errno.'));
} else {
    echo "Connected";
}