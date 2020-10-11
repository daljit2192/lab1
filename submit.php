<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lab1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    $error_message = "";
    $success_message = "";

    // Register user
    if (isset($_POST['signup']))
    {

        //check if any space is coming in data or not
        $fname = trim($_POST['firstname']);
        $lname = trim($_POST['lastname']);
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $phone_number = trim($_POST['phone_number']);
        $bdate = trim($_POST['bday']);
        $profile_pic = trim($_POST['profile_pic']);
        $url = trim($_POST['url']);
        $password = trim($_POST['password']);
        $confirmpassword = trim($_POST['confirm_password']);
        $isValid = true;

        // Check fields are empty or not
        if ($fname == '' || $lname == '' || $username == '' || $email == '' || $phone_number == '' || $bdate == '' || $profile_pic == '' || $url == '' || $password == '' || $confirmpassword == '')
        {
            $isValid = false;
            $error_message = "Please fill all fields.";
        }

        // Check if confirm password matching or not
        if ($isValid && ($password != $confirmpassword))
        {
            $isValid = false;
            $error_message = "Confirm password not matching";
        }
        // Check if Email-ID is valid or not
        if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $isValid = false;
            $error_message = "Invalid Email-ID.";
        }

        //check if phone number is having any string or not
        if($isValid && !is_numeric($phone_number) ){
            $isValid = false;
            $error_message = "Confirm password not matching";
        }

        //check if username is having any special symbol
        if(!ctype_alnum($username)){
            $isValid = false;
            $error_message = "No special symbol allowed in username";
        }
        
        $conn->close();
    }
?>
