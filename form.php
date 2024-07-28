<?php

    session_start();

    if (isset ($_POST["submit"])){
    $year = $_POST["year"];

    if($year){
        
        if (is_numeric($year)){
            
            if(strlen($year) == 4){
               
                if( $year % 4 == 0 && [ $year % 400 == 0 || $year % 100 == 0]){
                    $_SESSION ['year_good'] = " $year is a Leapyear ";
                    header ("location: index.php");
                }else{
                    $_SESSION ['year_error'] = "$year is not a Leapyear";
                    header ("location: index.php");
                }
            }else{
                $_SESSION ['year_error'] = "Year Has Four Digit only ";
                header ("location: index.php");
            }
        }else{
           $_SESSION ['year_error'] = "Enter the correct Year";
            header ("location: index.php");
        }
    }else{
        $_SESSION ['year_error'] = "Enter the correct value";
        header ("location: index.php");
    }
}else {
    header ("location: index.php");
    $_SESSION ['year_error'] = "Come Again";
}

?>