<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg p-3" style="background-color: #CDE8E5;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="images/message.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        TechCare
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav me-auto">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">About</a>
            <a class="nav-link" href="#">Announcement</a>
            <a class="nav-link" href="#">Contact Us</a>
          </div>
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="#">
              <img src="images/message.svg" alt="User Icon" width="30" height="24" class="d-inline-block align-text-top">
            </a>
            <a class="nav-link" href="index.html">
              <img src="images/logout.svg"  alt="logout Icon" width="30" height="24" class="d-inline-block align-text-top">
            </a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
      <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="welcomeModalLabel">Welcome</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Welcome message will be inserted here by PHP -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Enter</button>
          </div>
        </div>
      </div>
    </div>

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
                echo '<script>
                        document.addEventListener("DOMContentLoaded", function() {
                          var modalBody = document.querySelector("#welcomeModal .modal-body");
                          modalBody.innerHTML = "Login successful! Welcome ' . $row['first_name'] . ' ' . $row['last_name'] . '";
                          var welcomeModal = new bootstrap.Modal(document.getElementById("welcomeModal"));
                          welcomeModal.show();
                        });
                      </script>';
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
