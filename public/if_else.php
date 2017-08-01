<?php   
    $win = 1;
    $logged_in = 1;

    if(($win) == 1) {
        echo "I will buy a car.<br>";
    } else {
        echo "I will ride my bike to college.<br>";
    }
    
    if($logged_in == 3) {
        header("Location: account.php");
    } else if ($logged_in == 2) {
        include('login.php');
    } else {
        echo "Session Expired";
    }
?>
