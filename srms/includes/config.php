<?php 
// DB credentials.
define('DB_HOST','containers-us-west-39.railway.app');
define('DB_USER','root');
define('DB_PASS','laMKViKc979dqtzLvodA');
define('DB_NAME','railway');
define('DB_PORT','7130');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>