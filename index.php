<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body >
    <!-- css -->
    <h1 > Find Leap year </h1> 
    <form action="form.php" method= "POST" style= "align-items: center; text-align: center; background-color: darkgray; justify-content: center; padding: 50px; width: 40%;" >

        <label style = " coloe: white;"for="Write The Year"></label>
        <input style= "color: blue; background-color: rgb(229, 245, 251);border: 0px;
padding: 10px; margin-bottom: 15px; 
text-align: center;" type="text" placeholder= "Enter the value " name= "year"><br>
        <input type="submit" name= "submit" >

        <?php if(isset($_SESSION ['year_good'])){ ?>
            <p> <?php echo $_SESSION ['year_good'] ; ?></p>
            <?php }  unset($_SESSION ['year_good'])?> 

        <?php if(isset($_SESSION ['year_error'])){ ?>
            <p style="color:rad;" > <?php echo $_SESSION ['year_error'] ; ?></p>
            <?php }  unset($_SESSION ['year_error'])?>

    </form>
</body>
</html>

