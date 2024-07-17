<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
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
                    <a class="nav-link" href="index.html">
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
                    <img src="images/health.svg" alt="health" style="width:100px; height:auto;">
                    <p style="color:white">Health is a state of complete physical, mental, and social well-being, not merely the absence of disease or infirmity. It encompasses a balanced lifestyle that includes proper nutrition, regular physical activity, adequate rest, and mental and emotional stability. Maintaining good health is essential for a fulfilling and productive life.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 border border-secondary-subtle d-flex flex-column align-items-center">
                    <img src="images/nurse.svg" alt="health" style="width:100px; height:auto;">
                    <p style="color:white">Health workers are dedicated professionals who provide essential medical and care services to individuals and communities. They include doctors, nurses, midwives, community health workers, and other healthcare practitioners who diagnose and treat illnesses, promote wellness, and support patients through preventive and curative measures. Their tireless efforts and expertise are vital in ensuring public health and improving the quality of life for people everywhere.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 border border-secondary-subtle d-flex flex-column align-items-center">
                    <img src="images/immunize.svg" alt="health" style="width:100px; height:auto;">
                    <p style="color:white">Immunizations, or vaccinations, protect individuals from infectious diseases by stimulating the immune system to develop immunity. They introduce a harmless part of a pathogen, prompting the body to produce antibodies. Immunizations are crucial for preventing disease outbreaks and safeguarding public health.</p>
                </div>
            </div>
        </div>
    </div>


<div class="container my-5">
    <div class="row announcement-card">
        <div class="col-md-4"  data-aos="slide-right">
            <img src="images/apple.jpg" alt="An apple a day" class="announcement-img">
        </div>
        <div class="col-md-8 announcement-content">
            <div class="announcement-header">An apple a day, keeps the doctor away</div>
            <div class="announcement-date">2024-05-27, 10:00 am</div>
            <p>The saying "an apple a day keeps the doctor away" isn't meant to be literal. Apples won't magically prevent all illness. However, apples are packed with nutrients that contribute to overall good health, which can help you avoid getting sick in the first place.</p>
            <p>For one thing, apples are a good source of fiber, both soluble and insoluble. Fiber keeps you feeling full, which can aid in weight management. It also promotes healthy digestion and gut health, which can prevent constipation and other digestive issues. Additionally, soluble fiber in apples like pectin can help lower cholesterol levels, reducing the risk of heart disease.</p>
            <p>On top of that, apples are loaded with vitamins and antioxidants. Vitamin C, for instance, supports your immune system, making you less susceptible to infections.  Antioxidants in apples fight free radicals in your body, which can damage cells and contribute to chronic diseases. So, by incorporating apples into your diet, you're giving your body a natural boost to fight off illness.</p>        
          </div>
    </div>

    <div class="row announcement-card">
        <div class="col-md-4 order-md-2" data-aos="slide-left">
            <img src="images/water.jpg" alt="Drink Water Everyday" class="announcement-img">
        </div>
        <div class="col-md-8 announcement-content order-md-1">
            <div class="announcement-header">Drink Water Everyday</div>
            <div class="announcement-date">2024-05-27, 10:00 am</div>
            <p>Our bodies are about 60% water, and that water is vital for practically every function. Drinking water daily is crucial for good health. It aids digestion, nutrient absorption, and even regulates body temperature. Water also lubricates joints and flushes waste products out through sweat and urine. When dehydrated, these processes become less efficient, leading to problems like constipation, fatigue, and even kidney stones.  Staying hydrated is key for both physical and mental performance. Dehydration can cloud your thinking and zap your energy, while proper hydration keeps your brain sharp and your body functioning at its best. So, reach for that water bottle throughout the day – your body will thank you for it.</p>
        </div>
    </div>

    <div class="row announcement-card">
        <div class="col-md-4" data-aos="slide-right">
            <img src="images/granpaVaccine.jpg" alt="Free Vaccine for the Elderly" class="announcement-img">
        </div>
        <div class="col-md-8 announcement-content">
            <div class="announcement-header">Free Vaccine for the Elderly</div>
            <div class="announcement-date">2024-05-27, 10:00 am</div>
            <p>Vaccines are especially important for grandpa for a few key reasons. As we age, our immune system naturally weakens. This makes grandpa more susceptible to catching illnesses, and even a common cold can be more serious for him. Vaccines work by training his body to recognize and fight off specific diseases. By getting vaccinated, grandpa builds up immunity without having to experience the full-blown illness itself. This significantly reduces his risk of getting sick, and even if he does catch something, it's likely to be milder and cause fewer complications.</p>
            <p>Vaccines also help protect those around grandpa, like you! This concept is called herd immunity. When a high percentage of the population is vaccinated against a disease, it becomes less likely for that disease to spread in the community. This is especially important for protecting vulnerable people like grandpa, who may not have a strong enough immune response from the vaccine itself. By getting vaccinated, you're not just protecting yourself, you're also helping to create a protective barrier around grandpa and others who are at high risk.</p>
        </div>
    </div>
</div>

<div class="container-fluid contact-section">
    <h1>Contact Us</h1>
<p>Whether you have a question about our products, services, or just want to chat, our contact us page is your one-stop shop for getting in touch. We value your feedback and inquiries, and we offer a variety of ways to connect with us at your convenience.  Feel free to browse our FAQ section for answers to common questions, or reach out to our friendly customer service team directly through our contact form, email address, or phone number. We're always happy to hear from you!</p>
    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="bi bi-facebook"></i>
                </div>
                <p>You can also connect with us on Facebook for casual inquiries or to join our community.</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="bi bi-twitter"></i>
                </div>
                <p>Our friendly customer service team can also be reached on Twitter for quick updates and support inquiries.</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="bi bi-instagram"></i>
                </div>
                <p>For a more visual approach to connecting with us, follow us on Instagram or send us a direct message for any questions.</p>
            </div>
        </div>
    </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
