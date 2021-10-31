<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'time');

$mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD);
if ($mysqli->connect_errno) exit('Ошибка соединения с БД');
$mysqli->set_charset('utf8');

$mysqli->query('CREATE DATABASE `newbd`');
//$mysqli->query('DROP DATABASE `newbd`');

$mysqli->close();
