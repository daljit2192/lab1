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
        $profile_pic = $_FILES['profile_pic']['name'];
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
        // check file extension
        $allowed = array('png', 'jpg');
        $ext = pathinfo($profile_pic, PATHINFO_EXTENSION);
        if (!in_array($ext, $allowed)) {
            $isValid = false;
            $error_message = "Only jpg and png files are allowed to upload";
        }

        // check file size
        if ($_FILES['profile_pic']['size'] > 2000000) {
            $isValid = false;
            $error_message = 'Exceeded filesize limit.';
        }

        if($isValid){
            // check if username already exists or not
            $sql = "SELECT * FROM signup WHERE username = '".$username."'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $error_message = "Username already exists! Choose another one and try again.";
            }
            else {
                if($isValid){
                    try{
                        $password = md5($password);
                        $sql = "INSERT INTO signup(firstname,lastname,username,email,phone_number,bdate,profile_pic,reference_url,password ) values('$fname','$lname','$username','$email','$phone_number','$bdate','$profile_pic','$url','$password')";
                        if ($conn->query($sql) === TRUE) {
                            $success_message = "Account created successfully.";
                        } else {
                            $error_message = "Please try again.";
                        }
                    } catch (Exception $e){
                        echo "".$e->getMessage();
                    }
                }
            }
        }
        $conn->close();
    }
?>
