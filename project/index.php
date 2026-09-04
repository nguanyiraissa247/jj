<?php
declare(strict_types=1);

require_once __DIR__ . '/../CRUD/database.php';

$approvedRatings = [];
try {
    $approvedRatings = db()->query('SELECT name, rating, feedback FROM ratings WHERE is_approved = 1 ORDER BY created_at DESC LIMIT 6')->fetchAll();
} catch (Throwable $exception) {
    $approvedRatings = [];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Raissa | Web Design Portfolio</title>
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../style.css" rel="stylesheet" />

</head>

<body>

    <!-- Header / Navbar -->
    <header class="header">
        <a class="logo" href="index.php#home">RAISSA</a>

        <!-- Mobile Hamburger Icon -->
        <div class="menu-icon" id="menu-icon">
            <i class='bx bx-menu'></i>
        </div>

        <!-- Navigation Bar Links & Theme Toggle Button -->
        <nav class="navbar" id="nav-links">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#projects">Projects</a>
            <a href="#testimonials">Testimonials</a>
            <a href="#contact">Contact</a>

            <!-- Dark / Light Theme Toggle -->
            <button id="theme-toggle" class="theme-toggle-btn" type="button">
                <span id="theme-icon">🌙</span> <span id="theme-text">Dark</span>
            </button>
        </nav>
    </header>

    <!-- Home Section -->
    <section class="home" id="home">
        <div class="home-img">
            <img alt="Raissa Profile" src="../profile.jpg/1000170453.jpg" />
        </div>
        <div class="home-content">
            <h3>Hello, I'm</h3>
            <h1>Raissa</h1>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <p>Creative web designer who builds simple, beautiful, and useful websites for people, small businesses, and personal brands.</p>
            <div class="social-media">
                <a href="https://github.com" target="_blank" aria-label="GitHub"><i class="bx bxl-github"></i></a>
                <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn"><i class="bx bxl-linkedin"></i></a>
                <a href="#" aria-label="Facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" aria-label="Instagram"><i class="bx bxl-instagram"></i></a>
            </div>
            <a class="btn" href="#contact">Get In Touch</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>I'm a <span>Creative Web Designer</span></h3>
            <p>I create easy-to-use websites that help people share their work, promote their services, sell products, and connect with customers online.</p>
            <a class="btn" href="../readmi/readmi.php">Read More Details</a>
        </div>
        <div class="about-img">
            <img alt="About Raissa" src="../profile.jpg/1000139627.jpg" />
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <h2 class="heading">My <span>Services</span></h2>
        <div class="services-container">
            <div class="services-box">
                <i class="bx bx-code-alt"></i>
                <h3>Personal Websites</h3>
                <p>Clean profile, portfolio, and CV websites that show your story and your work beautifully.</p>
                <a class="btn" href="#contact">Choose This</a>
            </div>
            <div class="services-box">
                <i class="bx bx-diagram"></i>
                <h3>Small Business Pages</h3>
                <p>Simple websites for shops, salons, boutiques, food businesses, and personal brands.</p>
                <a class="btn" href="#contact">Choose This</a>
            </div>
            <div class="services-box">
                <i class="bx bxl-android"></i>
                <h3>Booking & Contact</h3>
                <p>Helpful contact, appointment, and enquiry forms that make it easy for customers to reach you.</p>
                <a class="btn" href="#contact">Choose This</a>
            </div>
        </div>
    </section>

    <!-- Interactive Projects Showcase Section -->
    <section class="projects" id="projects">
        <h2 class="heading">Featured <span>Projects</span></h2>

        <!-- Featured Projects Section Links -->
        <div class="filter-buttons">
            <a href="#projects" class="filter-btn active" data-filter="all">All</a>
            <a href="web-projects.php" class="filter-btn">Websites</a>
            <a href="uml-projects.php" class="filter-btn">Design Plans</a>
            <a href="c-projects.php" class="filter-btn">Simple Tools</a>

            <!-- Insert project cards below the buttons -->
            <div class="projects-container">
                <div class="project-card">
                    <h3>Raissa's Portfolio</h3>
                    <p>A friendly personal website for sharing skills, work, and contact details.</p>
                    <a href="#contact" class="btn">Start Similar</a>
                </div>

                <div class="project-card">
                    <h3>Client Enquiry Dashboard</h3>
                    <p>A PHP and MySQL dashboard for saving, viewing, editing, and deleting client requests.</p>
                    <a href="../CRUD/index.php" class="btn" target="_blank">Open CRUD Demo</a>
                </div>

                <div class="project-card">
                    <h3>Simple Online Shop</h3>
                    <p>A neat product page that helps customers browse items and send enquiries.</p>
                </div>

                <div class="project-card">
                    <h3>Real Estate Management System</h3>
                    <p>A simple property dashboard for adding homes, tracking availability, and managing client enquiries.</p>
                    <a href="web-projects.php#real-estate" class="btn">View Details</a>
                </div>

                <div class="project-card">
                    <h3>Inventory Management System</h3>
                    <p>A practical stock tracker for adding products, updating quantities, and viewing low-stock items.</p>
                    <a href="web-projects.php#inventory" class="btn">View Details</a>
                </div>
            </div>
            <div class="projects-container">
    <!-- Web Apps -->
    
   

    <!-- Easy tools -->
    <div class="project-card">
        <h3>Booking Page</h3>
        <p>A simple appointment page for beauty, wellness, tutoring, or creative services.</p>
    </div>

    <!-- C Programs -->
    <div class="project-card">
        <h3>Contact Form</h3>
        <p>A straightforward way for visitors and customers to send you a message.</p>
    </div>
      <div class="project-card">
        <h3>Product Showcase</h3>
        <p>A bright, organized page for displaying products, prices, and important details.</p>
    </div>
</div>


    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" id="testimonials">
        <h2 class="heading">Client <span>Testimonials</span></h2>
        <a class="btn" href="/JJ/CRUD/rating.php">Rate My Work</a>
        <div class="testimonials-container">
            <?php if ($approvedRatings === []): ?>
                <div class="testimonial-card">
                    <h3>Your feedback can be here</h3>
                    <p>Submit a rating and Raissa can approve it from the enquiries dashboard.</p>
                </div>
            <?php else: ?>
                <?php foreach ($approvedRatings as $testimonial): ?>
                    <div class="testimonial-card">
                        <h3><?= e((string) $testimonial['name']) ?></h3>
                        <div class="stars" aria-label="<?= (int) $testimonial['rating'] ?> out of 5 stars"><?= str_repeat('★', (int) $testimonial['rating']) . str_repeat('☆', 5 - (int) $testimonial['rating']) ?></div>
                        <p><?= e((string) $testimonial['feedback']) ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>

    <!-- Live Contact Form Section -->
    <section id="contact" class="contact-section">
        <h2 class="heading">Get In <span>Touch</span></h2>

        <form id="contact-form" action="/JJ/CRUD/create.php" method="POST" class="contact-form">
            <div class="form-group">
                <input type="text" name="name" placeholder="Your Full Name" required class="form-input">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Your Email Address" required class="form-input">
            </div>
            <div class="form-group">
                <select name="service" required class="form-input">
                    <option value="">Choose a service</option>
                    <option value="Personal website">Personal website</option>
                    <option value="Small business page">Small business page</option>
                    <option value="Online shop">Online shop</option>
                    <option value="Booking page">Booking page</option>
                    <option value="Contact form">Contact form</option>
                </select>
            </div>
            <div class="form-group">
                <textarea name="message" rows="5" placeholder="Your Message" required class="form-input textarea-input"></textarea>
            </div>

            <button type="submit" id="form-submit-btn" class="btn">Send Message</button>
            <a class="btn" href="/JJ/CRUD/index.php">Manage Enquiries</a>
            <p id="form-status" class="form-status-msg"></p>
        </form>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="social">
            <a href="https://github.com" target="_blank" aria-label="GitHub"><i class="bx bxl-github"></i></a>
            <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn"><i class="bx bxl-linkedin"></i></a>
            <a href="#" aria-label="Facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" aria-label="Instagram"><i class="bx bxl-instagram"></i></a>
        </div>
        <p class="copyright">© 2026 Raissa | All Rights Reserved</p>
    </footer>

    <!-- Typed.js Dynamic Text Library -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <!-- Custom JS -->
    <script src="../JS/script.js?v=2"></script>
</body>

</html>