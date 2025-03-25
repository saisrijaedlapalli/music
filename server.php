<?php
session_start();
include('db.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate login (simplified for demonstration)
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user'] = mysqli_fetch_assoc($result);
        header("Location: dashboard.html");
    } else {
        echo "Invalid credentials.";
    }
}

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $profile_picture = $_FILES['profile_picture']['name'];

    // Save profile picture
    move_uploaded_file($_FILES['profile_picture']['tmp_name'], 'assets/images/' . $profile_picture);

    $query = "INSERT INTO users (username, email, password, profile_picture) VALUES ('$username', '$email', '$password', '$profile_picture')";
    if (mysqli_query($conn, $query)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
