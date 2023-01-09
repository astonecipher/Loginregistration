<?php
// use a config file for env variables. 
// Connect to the database
$conn = mysqli_connect('localhost', 'root', 'junior@2013', 'norushzone');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// these variables already exist and are not needed
// Get the form data
// $username = $_POST['username'];
// $email = $_POST['email'];
// $password = $_POST['password'];
// $confirm_password = $_POST['confirm_password'];

// Validate the form data
if (empty($username)) {
    $error_message = 'Username is required';
} else if (empty($password)) {
    $error_message = 'Password is required';
} else if ($password != $confirm_password) {
    $error_message = 'Passwords do not match';
} else if (empty($email)) {
    $error_message = 'Email is required';
} else { 
    // Insert the form data into the database
    $sql = "INSERT INTO userregistration (`username`, `email`, `password`) VALUES (?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $_POST['username'], $_POST['email'], $_POST['password']);
    
    if ($stmt->execute()) {
        // query was successful
        echo "Registration successful!";
    } else {
        // query has failed
        echo "Error: " . mysqli_error($conn);
    }
}

?>
