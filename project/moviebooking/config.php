<?php
    
    define("SERVER","localhost");
    define("USERNAME","root");
    define("PASSWORD","");
    define("DBNAME","sampleform");
    $con = mysqli_connect(SERVER ,USERNAME, PASSWORD, DBNAME);

    if(!$con)
    {
        die("Connection to this db is not established ". mysqli_connect_error());
    }
?>
