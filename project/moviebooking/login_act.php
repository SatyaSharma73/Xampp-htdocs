<?php
    require "config.php";

    $insert = false;
    if(isset($_POST['name']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $sql = "INSERT INTO `sampleform`.`tbl_signin` (`name`, `email`, `password`) VALUES ('$name', '$email', '$pwd');";
    if($con->query($sql) == true)
    {
        echo "Successfully inserted";

    //   Flag for successful insertion
        $insert = true;
        header("Location: home.php");
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
    
}
?>