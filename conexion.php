<?php
error_reporting(0);
$mysqli = new mysqli("", "", "", "");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
