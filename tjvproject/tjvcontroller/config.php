<?php
$dbhost ="localhost";
$dbuser="root";
$dbpass="";
$dbname="tjvdatabase@controller";
$dbconn=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if ($dbconn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $dbconn -> connect_error;
    exit();
}
?>