<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-02-08 03:20:16 --> Severity: error --> Exception: syntax error, unexpected 'SELECT' (T_STRING), expecting function (T_FUNCTION) or const (T_CONST) C:\xampp\htdocs\intern\application\models\Intermship.php 47
ERROR - 2019-02-08 03:36:30 --> Severity: error --> Exception: syntax error, unexpected 'foreach' (T_FOREACH) C:\xampp\htdocs\intern\application\views\intern\applyintern.php 44
ERROR - 2019-02-08 03:36:38 --> Severity: error --> Exception: syntax error, unexpected 'foreach' (T_FOREACH) C:\xampp\htdocs\intern\application\views\intern\applyintern.php 44
ERROR - 2019-02-08 04:55:42 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\xampp\htdocs\intern\system\database\DB_query_builder.php 837
ERROR - 2019-02-08 04:55:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')' at line 4 - Invalid query: SELECT `intermship`.`id` as `postid`, `users`.`id` as `usersid`, `intermship`.`userid`, `intermship`.`company_name`, `intermship`.`duration`, `intermship`.`start_date`, `intermship`.`phone`, `intermship`.`status`, `intermship`.`createdAt`, `users`.`first_name`, `users`.`last_name`, `users`.`email`, `users`.`state`, `users`.`created`, `users`.`modified`
FROM `intermship`
INNER JOIN `users` ON `users`.`id` = `intermship`.`userid`
WHERE `intermship`.`id` NOT IN()
ERROR - 2019-02-08 04:56:34 --> Severity: 4096 --> Object of class CI_DB_mysqli_driver could not be converted to string C:\xampp\htdocs\intern\system\database\DB_query_builder.php 837
ERROR - 2019-02-08 04:56:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')' at line 4 - Invalid query: SELECT `intermship`.`id` as `postid`, `users`.`id` as `usersid`, `intermship`.`userid`, `intermship`.`company_name`, `intermship`.`duration`, `intermship`.`start_date`, `intermship`.`phone`, `intermship`.`status`, `intermship`.`createdAt`, `users`.`first_name`, `users`.`last_name`, `users`.`email`, `users`.`state`, `users`.`created`, `users`.`modified`, `select postid from applications where` `userid=1`
FROM `intermship`
INNER JOIN `users` ON `users`.`id` = `intermship`.`userid`
WHERE `intermship`.`id` NOT IN()
ERROR - 2019-02-08 05:01:45 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ',' or ')' C:\xampp\htdocs\intern\application\models\Intermship.php 57
