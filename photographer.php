<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photography";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch photographers from the database
$sql = "SELECT * FROM photographers";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photographers | Timeless Photography</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Global Styles */
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --text-color: #333;
            --text-light: #777;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: #f9f9f9;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        a {
            text-decoration: none;
            color: var(--primary-color);
            transition: all 0.3s ease;
        }

        a:hover {
            color: var(--secondary-color);
        }

        .btn {
            display: inline-block;
            padding: 10px 25px;
            background-color: var(--secondary-color);
            color: white;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #c0392b;
            color: white;
            transform: translateY(-2px);
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        /* Header Styles */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            padding: 15px 0;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 30px;
        }

        nav ul li a {
            font-weight: 600;
        }

        .mobile-menu-btn {
            display: none;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 21px;
            cursor: pointer;
        }

        .mobile-menu-btn span {
            height: 3px;
            width: 100%;
            background-color: var(--primary-color);
            border-radius: 3px;
            transition: all 0.3s ease;
        }

        /* Photographers Grid */
        .photographers-section {
            padding: 100px 0;
            margin-top: 70px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--secondary-color);
        }

        .photographers-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .photographer-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .photographer-card:hover {
            transform: translateY(-10px);
        }

        .photographer-img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .photographer-info {
            padding: 20px;
            text-align: center;
        }

        .photographer-info h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .photographer-info p {
            color: var(--text-light);
            margin-bottom: 8px;
            font-size: 0.9rem;
        }

        .social-links {
            display: flex;
            justify-content: center;
            margin-top: 15px;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            background-color: var(--light-color);
            border-radius: 50%;
            margin: 0 5px;
            color: var(--primary-color);
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background-color: var(--secondary-color);
            color: white;
        }

        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 60px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .footer-section h3 {
            color: white;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .footer-section p, .footer-section a {
            color: var(--light-color);
            margin-bottom: 10px;
            display: block;
        }

        .footer-section a:hover {
            color: var(--secondary-color);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--light-color);
            font-size: 0.9rem;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            nav {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 80%;
                height: calc(100vh - 70px);
                background-color: white;
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
                padding-top: 30px;
                transition: all 0.3s ease;
                box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            }

            nav.active {
                left: 0;
            }

            nav ul {
                flex-direction: column;
                width: 100%;
            }

            nav ul li {
                margin: 0;
                width: 100%;
                text-align: center;
                padding: 15px 0;
                border-bottom: 1px solid #eee;
            }

            .mobile-menu-btn {
                display: flex;
            }

            .mobile-menu-btn.active span:nth-child(1) {
                transform: rotate(45deg) translate(5px, 5px);
            }

            .mobile-menu-btn.active span:nth-child(2) {
                opacity: 0;
            }

            .mobile-menu-btn.active span:nth-child(3) {
                transform: rotate(-45deg) translate(7px, -6px);
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container container">
            <a href="index.php" class="logo">Timeless</a>
            <nav id="mainNav">
                <ul>
                    <li><a href="home.php">Portfolio</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="photographer.php">Photographers</a></li>
                    <li><a href="experience.php">Skills & Experience</a></li>
                    
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">login</a></li>
                </ul>
            </nav>
            <div class="mobile-menu-btn" id="mobileMenuBtn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <section class="photographers-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Photographers</h2>
                <p>Meet our talented team of professional photographers</p>
            </div>

            <div class="photographers-grid">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="photographer-card">';
                        echo '<img src="uploads/' . $row["photo"] . '" alt="' . $row["name"] . '" class="photographer-img">';
                        echo '<div class="photographer-info">';
                        echo '<h3>' . $row["name"] . '</h3>';
                        echo '<p>' . $row["speciality"] . '</p>';
                        echo '<p>' . $row["email"] . '</p>';
                        echo '<div class="social-links">';
                        echo '<a href="#"><i class="fab fa-instagram"></i></a>';
                        echo '<a href="#"><i class="fab fa-facebook-f"></i></a>';
                        echo '<a href="#"><i class="fab fa-twitter"></i></a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p class="text-center">No photographers found.</p>';
                }
                $conn->close();
                ?>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Timeless</h3>
                    <p>Capturing moments that last forever.</p>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <a href="index.php">Home</a>
                    <a href="gallery.php">Gallery</a>
                    <a href="photographers.php">Photographers</a>
                    <a href="contact.php">Contact</a>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>info@timeless.com</p>
                    <p>+1 (555) 123-4567</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; <script>document.write(new Date().getFullYear())</script> Timeless Photography. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mainNav = document.getElementById('mainNav');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenuBtn.classList.toggle('active');
            mainNav.classList.toggle('active');
        });

        // Current year for copyright
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
</body>
</html>