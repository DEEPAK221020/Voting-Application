<?php

$request = $_SERVER['REQUEST_URI'];
if($request=='/')
{
    include('index.php');
}
elseif($request=='/thankyou')
{
    include('thankyou.php');
}
elseif($request=='/contestAdmin')
{
    include('admin.php');
}
else{
    // include('index.php');
    // header('Location: https://ilishchingriutsav.bhooterrajadilobor.com/');
    // echo '<h1> Not Found  </h1>';
    // print "$_SERVER[REQUEST_URI]" ;
    echo"<script>window.location.href = 'https://recipecontest.bhooterrajadilobor.com/';</script>";
}

?>