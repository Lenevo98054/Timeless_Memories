<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills & Experience | Timeless Photography</title>
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

        /* Skills & Experience Section */
        .skills-section {
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

        .skills-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .skills-category {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .skills-category h3 {
            font-size: 1.8rem;
            margin-bottom: 25px;
            color: var(--primary-color);
            display: flex;
            align-items: center;
        }

        .skills-category h3 i {
            margin-right: 15px;
            color: var(--secondary-color);
        }

        .skill-item {
            margin-bottom: 25px;
        }

        .skill-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .skill-name {
            font-weight: 600;
        }

        .skill-percent {
            color: var(--text-light);
        }

        .skill-bar {
            height: 10px;
            background-color: #eee;
            border-radius: 5px;
            overflow: hidden;
        }

        .skill-progress {
            height: 100%;
            background-color: var(--secondary-color);
            border-radius: 5px;
            transition: width 1s ease-in-out;
        }

        /* Experience Timeline */
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 40px auto;
        }

        .timeline::before {
            content: '';
            position: absolute;
            width: 2px;
            background-color: var(--secondary-color);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -1px;
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }

        .timeline-item:nth-child(odd) {
            left: 0;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
        }

        .timeline-content {
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            position: relative;
        }

        .timeline-content::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: white;
            border: 3px solid var(--secondary-color);
            border-radius: 50%;
            top: 30px;
        }

        .timeline-item:nth-child(odd) .timeline-content::after {
            right: -10px;
        }

        .timeline-item:nth-child(even) .timeline-content::after {
            left: -10px;
        }

        .timeline-date {
            font-weight: 600;
            color: var(--secondary-color);
            margin-bottom: 10px;
        }

        .timeline-title {
            font-size: 1.3rem;
            margin-bottom: 10px;
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

            .timeline::before {
                left: 31px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            .timeline-item:nth-child(even) {
                left: 0;
            }

            .timeline-content::after {
                left: 21px !important;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="header-container container">
            <a href="index.html" class="logo">Timeless</a>
            <nav id="mainNav">
                <ul>
                    <li><a href="home.php">Portfolio</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="photographer.php">Photographers</a></li>
                    <li><a href="experience.php">Skills & Experience</a></li>
                    
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

    <section class="skills-section">
        <div class="container">
            <div class="section-title">
                <h2>Skills & Experience</h2>
                <p>Our team's expertise and professional journey in photography</p>
            </div>

            <div class="skills-container">
                <div class="skills-category">
                    <h3><i class="fas fa-camera"></i> Photography Skills</h3>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">Portrait Photography</span>
                            <span class="skill-percent">95%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">Landscape Photography</span>
                            <span class="skill-percent">90%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">Wedding Photography</span>
                            <span class="skill-percent">98%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 98%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">Commercial Photography</span>
                            <span class="skill-percent">85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 85%"></div>
                        </div>
                    </div>
                </div>

                <div class="skills-category">
                    <h3><i class="fas fa-sliders-h"></i> Technical Skills</h3>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">Lightroom</span>
                            <span class="skill-percent">100%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 100%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">Photoshop</span>
                            <span class="skill-percent">95%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">Lighting Setup</span>
                            <span class="skill-percent">92%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 92%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">Drone Photography</span>
                            <span class="skill-percent">88%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 88%"></div>
                        </div>
                    </div>
                </div>

                <div class="skills-category">
                    <h3><i class="fas fa-users"></i> Soft Skills</h3>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">Client Communication</span>
                            <span class="skill-percent">97%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 97%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">Creativity</span>
                            <span class="skill-percent">99%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 99%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">Time Management</span>
                            <span class="skill-percent">94%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 94%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">Team Leadership</span>
                            <span class="skill-percent">90%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-title" style="margin-top: 80px;">
                <h2>Our Experience</h2>
                <p>Professional journey and milestones of our team</p>
            </div>

            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">2020 - Present</div>
                        <h3 class="timeline-title">Timeless Photography Studio</h3>
                        <p>Founded our own studio focusing on artistic and commercial photography. Expanded to a team of 12 photographers serving clients worldwide.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">2016 - 2020</div>
                        <h3 class="timeline-title">Lead Photographer at Urban Shots</h3>
                        <p>Directed photography projects for major brands and publications. Mentored junior photographers and developed new shooting techniques.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">2012 - 2016</div>
                        <h3 class="timeline-title">Freelance Photographer</h3>
                        <p>Worked with various clients in wedding, portrait, and commercial photography. Developed unique style and built professional network.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">2008 - 2012</div>
                        <h3 class="timeline-title">Photography Education</h3>
                        <p>Completed Bachelor's degree in Visual Arts with photography specialization. Attended numerous workshops and masterclasses.</p>
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
                    <a href="index.html">Home</a>
                    <a href="gallery.html">Gallery</a>
                    <a href="skills.html">Skills & Experience</a>
                    <a href="contact.html">Contact</a>
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

        // Animate skill bars on scroll
        const animateSkills = () => {
            const skillBars = document.querySelectorAll('.skill-progress');
            skillBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0';
                setTimeout(() => {
                    bar.style.width = width;
                }, 100);
            });
        };

        // Check if skills section is in view
        const skillsSection = document.querySelector('.skills-section');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateSkills();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });

        observer.observe(skillsSection);

        // Current year for copyright
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
</body>
</html>