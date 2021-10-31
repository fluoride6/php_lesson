<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'time');

$mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($mysqli->connect_errno) exit('Ошибка соединения с БД');
$mysqli->set_charset('utf8');

$query = 'CREATE TABLE `time`.`test` ( `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT , 
`login` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
 `date` INT(10) NULL DEFAULT NULL , PRIMARY KEY (`id`), UNIQUE (`login`)) ENGINE = InnoDB;';
$mysqli->query($query);

/*$query = "DROP TABLE `time`.`test`";
$mysqli->query($query);*/

$mysqli->close();
