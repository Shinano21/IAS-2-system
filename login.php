<?php
session_start(); // Start the session

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
    $password = $_POST['password'];

    // Check if user exists
    $sql = "SELECT * FROM accounts WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $row['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            
            // Redirect to landing page
            header("Location: landing.php");
            exit();
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No account found with that email!";
    }
    $stmt->close();
}

$conn->close();
?>
