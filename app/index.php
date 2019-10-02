<?php
//var_dump(getenv('PHP_MYSQL_USER'));
//var_dump($GLOBALS);
$l = mysqli_connect(getenv('PHP_MYSQL_HOST'),getenv('PHP_MYSQL_USER'),getenv('PHP_MYSQL_PASSWORD'), getenv('PHP_MYSQL_DB'));
//var_dump($l);
phpinfo();
//добавил в мастер


// еще в мастер
