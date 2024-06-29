<?php
session_start();
header("Content-Security-Policy: default-src 'self'");
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: DENY");
header("X-XSS-Protection: 1; mode=block");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ias2";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        die("Invalid email format");
    }

    $stmt = $conn->prepare("SELECT * FROM accounts WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $otp = generateOTP();

        $stmt = $conn->prepare("INSERT INTO otp (email, otp_number, created_at) VALUES (?, ?, NOW())");
        $stmt->bind_param("ss", $email, $otp);
        $stmt->execute();
        $stmt->close();

        $_SESSION['otp_email'] = $email;

        header("Location: otp.html?email=" . urlencode($email));
        exit();
    } else {
        echo 'Email not found in our database.';
    }

    $conn->close();
}

function generateOTP() {
    return mt_rand(100000, 999999);
}
?>
