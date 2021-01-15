<?php
    function OpenCon(){
        //place database credentials here.
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "central-portfolio"; // Name of our database. Make sure to use this name when creating your database on phpMyAdmin
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

        return $conn;
    }

    function CloseCon($conn){
        $conn -> close();
    }

?>