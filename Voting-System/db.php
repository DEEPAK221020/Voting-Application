<?php 

// $database ="localhost";
// $dbuser = "root";
// $password = "";
// $dbname="contest";


// $database ="localhost";
// $dbuser = "testbrdb";
// $password = "n&ztB(3r^HEK";
// $dbname="testbrdb";

define("servername" , "localhost");
define("username" , "bhooterr_contest");
define("password" , "F=+a56x1!FN0");
define("dbname" , "bhooterr_contest");

// $con = new mysqli($database , $dbuser , $password , $dbname);
$con = new mysqli(servername , username , password , dbname);
if($con->connect_error){
    die('Connection Failed');
}

?>