<?php
session_start();
if (!isset($_SESSION['first_name'])) {
    // Redirect to login page if session variable is not set
    header("Location: login.html");
    exit();
}
$first_name = $_SESSION['first_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TechCare</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background-color: #e0f7fa;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        header .logo {
            font-size: 24px;
            font-weight: bold;
        }

        header nav ul {
            list-style: none;
            display: flex;
            gap: 15px;
        }

        header nav ul li {
            margin: 0;
        }

        header nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .hero {
            display: flex;
            background-color: #80deea;
            padding: 20px;
        }

        .hero-text {
            flex: 1;
        }

        .hero-text h1 {
            font-size: 36px;
        }

        .hero-text p {
            font-size: 18px;
        }

        .hero-image img {
            width: 100%;
            max-width: 300px;
            border-radius: 10px;
        }

        .announcements {
            text-align: center;
            padding: 20px;
            background-color: #b2ebf2;
        }

        .announcements h2 {
            font-size: 28px;
        }

        .announcements .icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding-top: 20px;
        }

        .announcements .icon {
            text-align: center;
            width: 150px;
        }

        .announcements .icon img {
            width: 50px;
            height: 50px;
        }

        .articles {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
            background-color: #ffffff;
        }

        .articles article {
            width: 30%;
            background-color: #f0f0f0;
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 10px;
        }

        .articles article h3 {
            font-size: 20px;
        }

        .articles article img {
            width: 100%;
            border-radius: 10px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #e0f7fa;
        }

        footer h2 {
            font-size: 28px;
        }

        footer .contact-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding-top: 20px;
        }

        footer .contact-icon {
            text-align: center;
            width: 150px;
        }

        footer .contact-icon img {
            width: 50px;
            height: 50px;
        }

        /* Popup Notification Styles */
        .popup {
            display: none;
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            z-index: 1000;
        }

        .popup.show {
            display: block;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">TechCare</div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Announcements</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-text">
            <h1>TechCare</h1>
            <p>Lorem ipsum dolor sit amet. Quo possimus doloribus non</p>
            <p>
                Lorem ipsum dolor sit amet. Quo possimus doloribus non sequi adipisci
                aut mollitia excepturi!
            </p>
        </div>
        <div class="hero-image">
            <img src="hero.jpg" alt="Elderly couple on bench" />
        </div>
    </section>

    <section class="announcements">
        <h2>Announcement</h2>
        <p>
            Lorem ipsum dolor sit amet. Quo possimus doloribus non sequi adipisci
            aut mollitia excepturi!
        </p>
        <div class="icons">
            <div class="icon">
                <img src="icon1.png" alt="" />
                <p>
                    Lorem ipsum dolor sit amet. Quo possimus doloribus non sequi
                    adipisci aut mollitia excepturi! Qui
                </p>
            </div>
            <div class="icon">
                <img src="icon2.png" alt="" />
                <p>
                    Lorem ipsum dolor sit amet. Quo possimus doloribus non sequi
                    adipisci aut mollitia excepturi! Qui
                </p>
            </div>
            <div class="icon">
                <img src="icon3.png" alt="" />
                <p>
                    Lorem ipsum dolor sit amet. Quo possimus doloribus non sequi
                    adipisci aut mollitia excepturi! Qui
                </p>
            </div>
        </div>
    </section>

    <section class="articles">
        <article>
            <h3>An apple a day, keeps the doctor away</h3>
            <p>2024-05-27, 10:00 am</p>
            <img src="apple.jpg" alt="Doctor with apple" />
            <p>
                Lorem ipsum dolor sit amet. Quo possimus doloribus non sequi adipisci
                aut mollitia excepturi! Qui doloribus molestias qui debitis
                perspiciatis ab sequi nostrum eos iure iste sed doloremque maiores quo
                quia re
            </p>
        </article>
        <article>
            <h3>Drink Water Everyday</h3>
            <p>2024-05-27, 10:00 am</p>
            <img src="water.jpg" alt="Man with water bottle" />
            <p>
                Lorem ipsum dolor sit amet. Quo possimus doloribus non sequi adipisci
                aut mollitia excepturi! Qui doloribus molestias qui debitis
                perspiciatis ab sequi nostrum eos dasdakdsjdsk jfdjfkld jkdjfkjdkf
            </p>
        </article>
        <article>
            <h3>Free Vaccine for the elderly</h3>
            <p>2024-05-27, 10:00 am</p>
            <img src="vaccine.jpg" alt="Elderly person" />
            <p>
                Lorem ipsum dolor sit amet. Quo possimus doloribus non sequi adipisci
                aut mollitia excepturi! Qui doloribus molestias qui debitis
                perspiciatis ab sequi nostrum eos iure iste sed doloremque maiores quo
                quia re
            </p>
        </article>
    </section>

    <footer>
        <h2>Contact Us</h2>
        <p>
            Lorem ipsum dolor sit amet. Quo possimus doloribus non sequi adipisci
            aut mollitia excepturi!
        </p>
        <div class="contact-icons">
            <div class="contact-icon">
                <img src="facebook.png" alt="Facebook" />
                <p>
                    Lorem ipsum dolor sit amet. Quo possimus doloribus non sequi
                    adipisci aut mollitia excepturi! Qui
                </p>
            </div>
            <div class="contact-icon">
                <img src="email.png" alt="Email" />
                <p>
                    Lorem ipsum dolor sit amet. Quo possimus doloribus non sequi
                    adipisci aut mollitia excepturi! Qui
                </p>
            </div>
            <div class="contact-icon">
                <img src="instagram.png" alt="Instagram" />
                <p>
                    Lorem ipsum dolor sit amet. Quo possimus doloribus non sequi
                    adipisci aut mollitia excepturi! Qui
                </p>
            </div>
        </div>
    </footer>

    <div class="popup" id="popup">
        <p>Welcome <?php echo $first_name; ?> to the Main page!</p>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var popup = document.getElementById("popup");
            popup.classList.add("show");

            // Hide the popup after 3 seconds
            setTimeout(function() {
                popup.classList.remove("show");
            }, 5000);
        });
    </script>
</body>
</html>
