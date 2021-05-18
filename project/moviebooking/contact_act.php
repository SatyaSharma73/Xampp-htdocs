
<?php
    require "config.php";
    if(isset($_POST['submit']))
    {
    $message= "";
    $name = mysqli_real_escape_string($con,trim($_POST['name']));
    $email = mysqli_real_escape_string($con,trim($_POST['email']));
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];
    $name_valid=$email_valid=false;
    if(preg_match('/[^a-zA-Z\s]/',$name))
    {
        $message .= "only alphabets are allowed as name<br>";
    }
    else
    {
        //echo "name accepted";
        $name_valid=true;
    }
    if(filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        //echo "email address accepted";
        $email_valid=true;
    }
    else{
        $message .= "invalid email address<br>";
    }

    if($name_valid && $email_valid){
    $sql = "INSERT INTO `sampleform`.`tbl_contact` (`Name`, `Email`, `Phone`,`msg`) VALUES ('$name', '$email', '$phone','$msg');";
    
    if($con->query($sql) == true)
    {
        // "Successfully inserted";

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
else{
    header("Location: contact.php?msg=".$message);
}
}
    
?>