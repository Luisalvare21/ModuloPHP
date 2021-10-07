<?php
error_reporting(0);
$mysqli = new mysqli("34.78.26.237", "leadlanding", "2Kg^s(}dg~~g:L]/", "leads");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}