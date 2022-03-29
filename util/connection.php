<?php

session_start();
$host = "host = john.db.elephantsql.com";
$port = "port = 5432";
$dbname = "dbname = mnaejyfq";
$username = "user = mnaejyfq";
$password = "password = e3C1QDPaex8ClwZGSznB7P3MEYWGneza";

$connection = pg_connect("$host $port $dbname $username $password");
if ($connection) {
    echo "Connected";
} else {
    echo "Cant Connect";
}

?>
