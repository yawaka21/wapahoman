<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "testingdb";
    $conn = "";

    $conn = mysqli_connect($hostname,$username,$password,$database);

    try{
        if($conn)
        {
           
        }
    }
    catch(mysqli_sql_exception)
    {
            echo "connot Connect";
    }
   
?>