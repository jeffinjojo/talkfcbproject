<?php
//https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id16664855_talkfcbuser');
define('DB_PASSWORD', '~&|Mi7%nm0W8d^u4');
define('DB_NAME', 'id16664855_talkfcbdatabase');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>