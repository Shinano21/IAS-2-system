<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .navbar-custom {
            background-color: #CDE8E5;
        }
        .nav-link {
            color: #000;
        }
        .nav-link:hover {
            color: #000;
        }
        .card {
        width: 500px;
        height: 90%;
        border-radius: 30px;
        background: #e0e0e0;
        box-shadow: 15px 15px 30px #bebebe,
                    -15px -15px 30px #ffffff;
        }
    </style>
</head>
<body>
  <!--Navbar-->
    <nav class="navbar navbar-expand-lg p-3 navbar-custom">
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
                        <img src="images/logout.svg" alt="Logout Icon" width="30" height="24" class="d-inline-block align-text-top">
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container text-center" >
  <div class="row mt-5" style="height:600px;">
    <div class="col" style="display:flex; justify-content:center; align-items:center;">
    <div class="card p-3">
    <h1>TechCare</h1>
    <h5 style="color:grey;">"Empowering barangay residents through accessible health support and community connections."</h5>
    <p class="p-3">Welcome to TechCare, a dedicated platform aimed at empowering the residents of our barangay through innovative health solutions and community support. With the invaluable assistance of barangay health workers, TechCare bridges the gap between accessible healthcare and the local community, ensuring that everyone has the resources and information they need for a healthier life. Together, we strive to create a healthier, more connected barangay where every resident can thrive.</p>
</div>
    </div>
    <div class="col" style="display:flex; justify-content:center; align-items:center;">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/hands.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/cuteHeart.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/wheelChair.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/whiteHold.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
    </div>
  </div>
</div>
<div class="container-fluid border border-primary mt-3" style="height:600px; background-color: #4D869C;">
<h1 class="mt-3" style="color:white; display:flex; justify-content:center">Announcement</h1>
<div class="container text-center" style="color:white">
<p>We are excited to announce that our barangay will be hosting a community health fair this weekend, aimed at promoting wellness and providing essential health services to all residents. With the support of our dedicated barangay health workers, the event will feature free medical check-ups, vaccination drives, nutritional counseling, and health education workshops. We encourage everyone to participate and take advantage of these valuable resources to improve their well-being. Join us at the barangay hall from 8 AM to 5 PM on Saturday and Sunday for a healthier, happier community!</p>
</div>

<div class="container text-center mt-5 border border-secondary-subtle" >
  <div class="row align-items-center">
    <div class="col border border-secondary-subtle">
      <img src="images/health.svg" alt="health" style="width:100px; height:auto;">
      <p>Health is a state of complete physical, mental, and social well-being, not merely the absence of disease or infirmity. It encompasses a balanced lifestyle that includes proper nutrition, regular physical activity, adequate rest, and mental and emotional stability. Maintaining good health is essential for a fulfilling and productive life.</p>
    </div>
    <div class="col border border-secondary-subtle">
    <img src="images/nurse.svg" alt="health" style="width:100px; height:auto;">
    <p>Health workers are dedicated professionals who provide essential medical and care services to individuals and communities. They include doctors, nurses, midwives, community health workers, and other healthcare practitioners who diagnose and treat illnesses, promote wellness, and support patients through preventive and curative measures. Their tireless efforts and expertise are vital in ensuring public health and improving the quality of life for people everywhere.</p>
    </div>
    <div class="col border border-secondary-subtle">
      <img src="images/immunize.svg" alt="health" style="width:100px; height:auto;">
      <p>Immunizations, or vaccinations, protect individuals from infectious diseases by stimulating the immune system to develop immunity. They introduce a harmless part of a pathogen, prompting the body to produce antibodies. Immunizations are crucial for preventing disease outbreaks and safeguarding public health.</p>
    </div>
  </div>
</div>
</div>

<div class="container border border-primary" style="height:500px">

</div>


    <!-- Bootstrap Modal -->
    <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
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
