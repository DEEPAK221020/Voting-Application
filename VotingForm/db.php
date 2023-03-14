<?php 

// $servername = "localhost";
// $username = "root";
// $password ="";
// $dbname = "contest";

define("servername" , "localhost");
define("username" , "bhooterr_contest");
define("password" , "F=+a56x1!FN0");
define("dbname" , "bhooterr_contest");


$con = new mysqli(servername , username , password , dbname);
// $con = new mysqli($servername , $username , $password , $dbname);
if($con->connect_error){
    die('connection failed');
}

// echo '<h1> connected <h1>';

?>