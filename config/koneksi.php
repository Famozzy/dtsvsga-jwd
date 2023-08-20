<?php

$HOST = 'localhost';
$USER = 'root';
$PASS = '';
$DBNAME = 'db_beasiswa';

$conn = mysqli_connect($HOST, $USER, $PASS, $DBNAME);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
