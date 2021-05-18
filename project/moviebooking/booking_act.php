<?php
    require "config.php";

    $insert = false;
    if(isset($_POST['name']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $columns = $_POST['columns'];
    $rows = $_POST['rows'];

    $age = $_POST['age'];
    $sql = "INSERT INTO `sampleform`.`tbl_booking` (`name`, `age`, `phone`,`date`,`time`,`columns`,`rows`) VALUES ('$name', '$age','$phone','$date','$time','$columns','$rows');";
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