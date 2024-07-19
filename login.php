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

$error_message = '';

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
            $error_message = "Invalid password!";
        }
    } else {
        $error_message = "No account found with that email!";
    }
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - TechCare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
 
    .modal-body{
        background-color:pink;
        border: 5px solid white; /* White border */
        border-radius: 1rem; /* Rounded corners */
    }

</style>
</head>
<body>
    <div class="login-container">
        <div class="login-image">
            <img src="images/v78_4.png" alt="Father and child" />
        </div>
        <div class="login-form">
            <h2>Login</h2>
            <p>Enter your details to login</p>
            <form action="login.php" method="post">
                <input type="text" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <div class="center">
                    <a href="Forgot.html">Forgot Password?</a>
                </div>
                <button type="submit">Login</button>
                <div class="create-account">
                    <p>Or</p>
                    <a href="Caccount.html">Create new account</a>
                </div>
            </form>
        </div>
    </div>

    <?php if (!empty($error_message)): ?>
    <!-- Error Modal -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body d-flex flex-column align-items-center">
                <img src="images/smile-sad.svg" style="width: 100%; max-width: 200px; height: auto;" class="img-fluid mb-3" alt="Error Image">
                <h1 style="font-size:50px">Oops!</h1>
                <p style="font-size:20px"><?php echo $error_message; ?></p>
                <button type="button" class="btn btn-light btn-lg" style="color:#333" data-bs-dismiss="modal" id="closeModalBtn">Try Again</button>
            </div>
        </div>
    </div>
</div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            var errorModal = new bootstrap.Modal(document.getElementById('errorModal'), {});
            errorModal.show();

            // Redirect to index.html when the modal is closed
            document.getElementById('closeModalBtn').addEventListener('click', function() {
                window.location.href = 'index.html';
            });
        });
    </script>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
