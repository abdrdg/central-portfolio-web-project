<?php
    function OpenCon(){
        //place database credentials here.
        $dbhost = "";
        $dbuser = "";
        $dbpass = "";
        $db = "";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

        return $conn;
    }

    function CloseCon($conn){
        $conn -> close();
    }

?>