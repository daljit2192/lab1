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

        $conn->close();
    }
}
?>
