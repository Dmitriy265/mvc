<?php
$dbhost = "localhost";
$dbuser = "y95327t3_auth";
$dbpass = "m&APj5FF";
$dbname = "y95327t3_auth";

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$mysqli->set_charset("utf-8");

if ($mysqli->connect_error) {
  die("Не удалось подключиться к БД".$mysqli->connect_error);
}