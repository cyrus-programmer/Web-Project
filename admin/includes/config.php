<?php 
// DB credentials.
define('DB_HOST','sql310.epizy.com');
define('DB_USER','epiz_34254935');
define('DB_PASS','HRFOe0FWAcTCU');
define('DB_NAME','epiz_34254935_carrental');
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