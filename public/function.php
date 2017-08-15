<?php 

    $user_allowed = 16;
    $user_too_young = 17;
    $user_too_old = 50;


    function allowedUser ($user_allowed) {
        if($user_allowed >= 18 && $user_allowed <= 49) {
            echo "You can attend.";
        } else if ($user_allowed >= 50) {
            echo "You must wait in your car.";
        } else {
            echo "You are way to young kid you need to be 18 years or older.";
        } 
    }
    allowedUser($user_allowed);
?>
