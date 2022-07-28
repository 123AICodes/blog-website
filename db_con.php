<?php

    #Connecting application to database
    define("server",  "localhost");
    define("username", "root");
    define("password", "");
    define("database", "myblog_db");

    #creating a connection variable 
    $con = mysqli_connect( server, username, password, database);

    #performing authentication
    if ($con) { 
        // echo'<script>';
        // echo "alert('Connection Succeeded')";
        // echo"</script>";
    } 
    else {
    // echo'<script>';
    //     echo "alert('Connection failed!!')";
    //      echo"</script>";
    }
    



?>