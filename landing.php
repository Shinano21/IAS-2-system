<?php
session_start(); // Start the session

// Redirect to login page if session variables are not set
if (!isset($_SESSION['first_name']) || !isset($_SESSION['last_name'])) {
    header("Location: index.html");
    exit();
}

$firstName = $_SESSION['first_name'];
$lastName = $_SESSION['last_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }
        .navbar-custom {
            background-color: #CDE8E5;
        }
        .nav-link {
            color: #000;
        }
        .nav-link:hover {
            color: #fff;
        }
        .card {
            width: 100%;
            max-width: 500px;
            border-radius: 30px;
            background: #e0e0e0;
            box-shadow: 15px 15px 30px #bebebe, -15px -15px 30px #ffffff;
        }
        .container-increased-height {
            height: 600px; /* Adjust this value to increase or decrease the height */
            padding: 50px;
            margin-bottom:70px;
        }
        @media (max-width: 768px) {
            .container-increased-height {
                height: auto; /* Auto height for smaller screens */
                padding-bottom: 20px; /* Add some bottom padding */
            }
            .carousel-item img {
                object-fit: cover; /* Ensure images cover the fixed height */
            }
        }
        .announcement-card {
            margin-bottom: 30px;
        }
        .announcement-img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .announcement-content {
            padding-left: 20px;
        }
        .announcement-header {
            font-weight: bold;
            font-size: 2.5rem;
        }
        .announcement-date {
            color: grey;
            font-size: 0.875rem;
            margin-bottom:50px;
        }
        .contact-section {
            background-color: #7AB2B2;
            color: black;
            padding: 60px;
            text-align: center;
        }
        .contact-icon {
            font-size: 50px;
            margin-bottom: 15px;
        }
        .contact-item {
            border: 1px solid #78A6A8;
            border-radius: 10px;
            padding: 20px;
            transition: transform 0.2s;
        }
        .contact-item:hover {
            transform: scale(1.05);
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
                    <a class="nav-link" href="javascript:void(0);" onclick="showLogoutModal()">
                        <img src="images/logout.svg" alt="Logout Icon" width="30" height="24" class="d-inline-block align-text-top">
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container text-center container-increased-height">
        <div class="row mt-5">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="card p-3">
                    <h1>TechCare</h1>
                    <h5 style="color:grey;">"Empowering barangay residents through accessible health support and community connections."</h5>
                    <p class="p-3">Welcome to TechCare, a dedicated platform aimed at empowering the residents of our barangay through innovative health solutions and community support. With the invaluable assistance of barangay health workers, TechCare bridges the gap between accessible healthcare and the local community, ensuring that everyone has the resources and information they need for a healthier life. Together, we strive to create a healthier, more connected barangay where every resident can thrive.</p>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center mt-3 mt-md-0">
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

    <div class="container-fluid border border-primary mt-3" style="background-color: #4D869C;">
        <h1 class="mt-3" style="color:white; display:flex; justify-content:center">Announcement</h1>
        <div class="container text-center" style="color:white">
            <p>We are excited to announce that our barangay will be hosting a community health fair this weekend, aimed at promoting wellness and providing essential health services to all residents. With the support of our dedicated barangay health workers, the event will feature free medical check-ups, vaccination drives, nutritional counseling, and health education workshops. We encourage everyone to participate and take advantage of these valuable resources to improve their well-being. Join us at the barangay hall from 8 AM to 5 PM on Saturday and Sunday for a healthier, happier community!</p>
        </div>

        <div class="container text-center mt-5 border border-secondary-subtle mb-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 border border-secondary-subtle d-flex flex-column align-items-center">
                    <img src="images/health.svg" alt="health" style="width:100px; height:auto; padding:10px">
                    <p style="color:white">Health is a state of complete physical, mental, and social well-being, not merely the absence of disease or infirmity. It encompasses a balanced lifestyle that includes proper nutrition, regular physical activity, adequate rest, and emotional well-being.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 border border-secondary-subtle d-flex flex-column align-items-center">
                    <img src="images/news.svg" alt="news" style="width:100px; height:auto; padding:10px">
                    <p style="color:white">TechCare is dedicated to keeping barangay residents informed with the latest news and updates on health, wellness, and community events. Stay connected with us for valuable insights, tips, and stories that matter to you and your loved ones.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 border border-secondary-subtle d-flex flex-column align-items-center">
                    <img src="images/community.svg" alt="community" style="width:100px; height:auto; padding:10px">
                    <p style="color:white">At TechCare, we believe in the power of community and the importance of fostering strong connections among residents. Our platform encourages engagement, support, and collaboration to build a healthier and more united barangay, where everyone can thrive.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid contact-section">
        <h2>Contact Us</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 contact-item">
                <div class="contact-icon">
                    <i class="bi bi-geo-alt"></i>
                </div>
                <h4>Address</h4>
                <p>123 Barangay Road, City, Province</p>
            </div>
            <div class="col-lg-4 col-md-6 col-12 contact-item">
                <div class="contact-icon">
                    <i class="bi bi-envelope"></i>
                </div>
                <h4>Email</h4>
                <p>info@techcare.com</p>
            </div>
            <div class="col-lg-4 col-md-6 col-12 contact-item">
                <div class="contact-icon">
                    <i class="bi bi-phone"></i>
                </div>
                <h4>Phone</h4>
                <p>(123) 456-7890</p>
            </div>
        </div>
    </div>

    <!--Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Logout Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to log out?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a href="logout.php" class="btn btn-primary">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showLogoutModal() {
            var logoutModal = new bootstrap.Modal(document.getElementById('logoutModal'), {
                backdrop: 'static'
            });
            logoutModal.show();
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzBM1HBI6KtY5E7I5C/nj2NfIRmUfc+RAeF4iMCw9xof" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-rbNODz3aJhKTBE9p1zKvU7lA3BgRKLmjjLkXHviO45gVJTHfH3jzRTOvxVi6d7z0" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
