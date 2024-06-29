<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ias2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Check if email exists
    $sql = "SELECT * FROM accounts WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Call the stored procedure to generate and insert OTP
        $sql = "CALL generate_and_insert_otp(?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();

        echo "OTP has been generated and sent to your email.";
    } else {
        echo "No account found with that email!";
    }
    $stmt->close();
}

$conn->close();
?>
