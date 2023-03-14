<?php

$request = $_SERVER['REQUEST_URI'];
if($request=='/')
{
    include('index.php');
}elseif($request=='/form')
{
    include('form.php');
}elseif($request=='/brdb-details-contestants')
{
    include('contestant.php');
}
elseif($request=='/thankyou')
{
    include('thankyou.php');
}
elseif($request=='/brdb-details-view')
{
    include('view.php');
}
else{
    // include('index.php');
    // header('Location: https://ilishchingriutsav.bhooterrajadilobor.com/');
    // echo '<h1> Not Found  </h1>';
    // print "$_SERVER[REQUEST_URI]" ;
    echo"<script>window.location.href = 'https://ilishchingriutsav.bhooterrajadilobor.com/';</script>";
}

?>