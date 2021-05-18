<?php
    require "config.php";
if(isset($_POST['name']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $sql = "INSERT INTO `sampleform`.`tbl_signup` (`name`, `email`, `password`) VALUES ('$name', '$email', '$pwd');";
    if($con->query($sql) == true)
    {
        echo "Successfully inserted";

    //   Flag for successful insertion
        $insert = true;
        header("Location: login.php");
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>







