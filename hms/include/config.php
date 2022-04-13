<?php
define('DB_SERVER','containers-us-west-33.railway.app');
define('DB_USER','root');
define('DB_PASS' ,'0GvwYDKiYtu1niX8cidA');
define('DB_NAME', 'railway');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME,5537);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>