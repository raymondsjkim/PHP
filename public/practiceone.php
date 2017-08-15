<?php 

    $performer_name = "Dave Chapelle";
    $height = "5 inches tall";
    
    $user_allowed = 16;
    $user_too_young = 17;
    $user_too_old = 50;

    $attendee = "A person attending the show";

    // associative array
    if($comedyshow["age_allowed"] >= 18 && $comedyshow["age_allowed"] <= 49) {
        echo "You can attend.";
    } else if ($comedyshow["age_allowed"] >= 50) {
        echo "You must wait in your car.";
    } else {
        echo "You are way to young kid you need to be 18 years or older.";
    } 


?>
