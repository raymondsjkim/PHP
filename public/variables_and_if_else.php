<?php  
    $name = "Raymond Kim";
    $age = 28;
    $country = "United States of America";
    $password = '5866';
    $minpassword = 8;
    
    
    // strlen gets the string length
    if(strlen($password) < $minpassword) {
        echo "Password is less than the requirement";
    } else {
        echo "Your name is " . $name . " and your password is " . $password . " and it is correct, you are " . $age . " years old and you are from " . $country . " ";
    }
?>
