<?php   

    /*
    $users = array("Ray Kim", "United States", "CA", 28);
    $count = 0;

    echo $users[0] . ", " . $users[1] . ", " . $users[2] . ", " . $users[3] . "<br>" ;
    
    
    for($i = 0; $i < 4; $i++) {
        echo $users[$i] . ", " . " ";
        $count++;
    }
    echo "<br>";
    echo $count;
    echo "<br>";
    */
    
    // associative array
    $users = array("fullname"=>"Ray Kim", "country"=>"United States", "city"=>"CA", "age"=>28);

    echo $users["fullname"];
    echo "<br>";
    echo $users["country"];
    echo "<br>";
    echo $users["city"];
    echo "<br>";
    echo $users["age"];
    echo "<br>";
        
?>
