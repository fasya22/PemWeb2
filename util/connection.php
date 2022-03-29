<?php

session_start();
$host = "host = john.db.elephantsql.com";
$port = "port = 5432";
$dbname = "dbname = jgdcsjkw";
$username = "user = jgdcsjkw";
$password = "password = lg3gGkAyxygFbNeNIpt1yoIRdsrBCFyr";

$connection = pg_connect("$host $port $dbname $username $password");
if ($connection) {
    echo "Connected";
} else {
    echo "Cant Connect";
}

?>
