<?php


// session start
session_start();

include('header.php');
?>

<div class="container sec1 ">
    
    <img class="loader" src="./image/loader.gif">
    
    <?php
    $single = $_SESSION['voter'];
    // echo $single[0]['myname'];
    $_SESSION['votingbtn'] = 0;

    echo"<div class='thank' ><h5> Thank You For Voting </h5> <h2> ".$single[0]['myname']." </h2> </div>";

    // print_r($single);
    
    // remove cookies if set
    
    // unset cookies
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}
    
    ?>

</div>

<?php
include('footer.php');
?>