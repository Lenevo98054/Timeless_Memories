<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeless Photography</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
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

        /* Hero Section */
        .hero {
            height: 100vh;
            background: url('https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
            position: relative;
            margin-top: 70px;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            width: 100%;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }

        /* Portfolio Section */
        .portfolio-section {
            padding: 100px 0;
            text-align: center;
        }

        .portfolio-section h2 {
            font-size: 2.5rem;
            margin-bottom: 50px;
            position: relative;
        }

        .portfolio-section h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--secondary-color);
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .portfolio-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            height: 300px;
        }

        .portfolio-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .portfolio-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            color: white;
            padding: 20px;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .portfolio-item:hover .portfolio-overlay {
            transform: translateY(0);
        }

        .portfolio-item:hover .portfolio-img {
            transform: scale(1.1);
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

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container container">
            <a href="#" class="logo">Timeless</a>
            <nav id="mainNav">
                <ul>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="photographer.php">Photographers</a></li>
                    <li><a href="experience.php">Experience and skill</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
            <div class="mobile-menu-btn" id="mobileMenuBtn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Capturing Timeless Moments</h1>
            <p>A collection of beautiful photographs that tell stories and preserve memories</p>
            <a href="inquiry.php" class="btn">Inquiry Now</a>
        </div>
    </section>

    <section class="portfolio-section" id="portfolio">
        <div class="container">
            <h2>OUR PORTFOLIO</h2>
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="Nature" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Nature Photography</h3>
                        <p>Breathtaking landscapes and natural wonders</p>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308" alt="Portrait" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Portrait Photography</h3>
                        <p>Capturing the essence of personality</p>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1" alt="Urban" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Urban Photography</h3>
                        <p>Cityscapes and architectural marvels</p>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1504208434309-cb69f4fe52b0" alt="Wedding" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Wedding Photography</h3>
                        <p>Timeless memories of your special day</p>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1515895309288-a3815ab7cf81" alt="Wildlife" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Wildlife Photography</h3>
                        <p>Nature's most magnificent creatures</p>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f8e1c1" alt="Architecture" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Architecture Photography</h3>
                        <p>Design and structure in perfect harmony</p>
                    </div>
                </div>
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
                    <a href="#home">Home</a>
                    <a href="#portfolio">Portfolio</a>
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

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Close mobile menu if open
                mobileMenuBtn.classList.remove('active');
                mainNav.classList.remove('active');
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Current year for copyright
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
</body>
</html>