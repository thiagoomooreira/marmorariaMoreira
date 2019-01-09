<?php

$host = "localhost";
$username = "root";
$password = "";
$banco = "marmorariamoreira";

$conn = new mysqli($host,$username,$password,$banco);
if ($conn->connect_error) {
    die("Falha ao estabelecer conexão");
}