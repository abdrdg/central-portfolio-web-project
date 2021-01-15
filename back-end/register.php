<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") 
    { 
        include("../dbconnection-fileupload/db_connection.php"); //Includes db_connection
        $con = OpenCon(); //Assigns connection to $con

        $query = "SELECT * from users";
        $results = mysqli_query($con, $query); //Query the users table
        
        while($row = mysqli_fetch_array($results)) //display all rows from query
        { 
            $existing_username = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished 
            $existing_email = $row['email'];

            if($username == $existing_username) // checks if there are any matching fields
            { 
                $user_unique = false; // sets bool to false
                Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
                Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
            } 

            if($email == $existing_email) // checks if there are any matching fields
            { 
                $user_unique = false; // sets bool to false
                Print '<script>alert("Email has already been registerd! Please try again.");</script>'; //Prompts the user
                Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
            } 
        } 
        
        if($user_unique) // checks if bool is true
        { 
            mysqli_query($con, "INSERT INTO users (name, username, email, password) VALUES ('$name', '$username', '$email', '$password')"); //Inserts the value to table users
            Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
            Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
        }  
    } 
?>