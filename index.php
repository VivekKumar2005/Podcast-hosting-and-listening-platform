<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PodcastPro - Make Your Show Stand Out</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Add this line -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="chatbot.css">
</head>
<body>
    <nav>
        <div class="logo">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                <circle cx="20" cy="20" r="18" stroke="#FF4081" stroke-width="4"/>
                <rect x="15" y="12" width="4" height="16" rx="2" fill="#FF4081"/>
                <rect x="21" y="8" width="4" height="24" rx="2" fill="#FF4081"/>
            </svg>
            <span>PodcastPro</span>
        </div>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="#about">About Us</a>
            <a href="#features">Features</a>
            <a href="#how-it-works">How It Works</a>
            <a href="#contact">Contact Us</a>
        </div>
        <div class="auth-buttons">
            <button class="login" onclick="window.location.href='signin.php'">Log in</button>
            <button class="signup" onclick="window.location.href='signup.php'">Sign up</button>
        </div>
    </nav>

    <main>
        <div class="hero">
            <div class="hero-content">
                <h1>Make your show the next big thing</h1>
                <p>Powerful tools to manage and grow your audio or video podcast.</p>
                <button class="get-started " onclick="window.location.href='signup.php'">Get started</button>
            </div>
        </div>

       

        <section class="features" id="features">
            <div class="features-content">
                <h2>Powerful Features</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <circle cx="20" cy="20" r="16" stroke="#D76D77" stroke-width="2"/>
                            <path d="M16 14L28 20L16 26V14Z" fill="#D76D77"/>
                        </svg>
                        <h3>High-Quality Recording</h3>
                        <p>Professional-grade audio capture with noise reduction technology.</p>
                    </div>
                    <div class="feature-card">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <rect x="8" y="8" width="24" height="24" rx="2" stroke="#D76D77" stroke-width="2"/>
                            <path d="M14 20H26M20 14V26" stroke="#D76D77" stroke-width="2"/>
                        </svg>
                        <h3>Easy Editing</h3>
                        <p>Intuitive tools for seamless content editing and enhancement.</p>
                    </div>
                    <div class="feature-card">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <path d="M20 8L32 32H8L20 8Z" stroke="#D76D77" stroke-width="2"/>
                            <circle cx="20" cy="28" r="2" fill="#D76D77"/>
                            <rect x="19" y="16" width="2" height="8" rx="1" fill="#D76D77"/>
                        </svg>
                        <h3>Analytics Dashboard</h3>
                        <p>Detailed insights into your audience and content performance.</p>
                    </div>
                    <div class="feature-card">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <path d="M8 14C8 12.8954 8.89543 12 10 12H30C31.1046 12 32 12.8954 32 14V26C32 27.1046 31.1046 28 30 28H10C8.89543 28 8 27.1046 8 26V14Z" stroke="#D76D77" stroke-width="2"/>
                            <path d="M12 16L20 22L28 16" stroke="#D76D77" stroke-width="2"/>
                        </svg>
                        <h3>Multi-Platform Distribution</h3>
                        <p>Publish your content across all major podcast platforms.</p>
                    </div>
                </div>
            </div>
        </section>
    </section>
        
    <section class="how-it-works" id="how-it-works">
        <div class="how-content">
            <h2>How It Works</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Record Your Content</h3>
                        <p>Use our professional-grade recording tools to capture high-quality audio.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Edit and Enhance</h3>
                        <p>Polish your content with our intuitive editing suite and enhancement tools.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Distribute Everywhere</h3>
                        <p>Publish your podcast across all major platforms with one click.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Track Performance</h3>
                        <p>Monitor your growth with detailed analytics and insights.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="contact-content">
            <h2>Contact Us</h2>
            <form class="contact-form" id="contactForm">
                <div class="form-row">
                    <input type="text" name="name" placeholder="name" required>
                    <input type="email" name="email" placeholder="email" required>
                </div>
                <div class="form-row">
                    <input type="tel" name="number" placeholder="number">
                    <input type="text" name="subject" placeholder="subject">
                </div>
                <textarea name="message" placeholder="your message" required></textarea>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </section>
        <section class="brief-about" id="about">
            <div class="about-content">
                <div class="about-text">
                    <h2>About Us</h2>
                    <p>Discover the latest trends and innovations in podcasting technology, design, and more. Our team of experts brings you the best content and insights to help you stay ahead of the curve</p><br>
                    <button onclick="window.location.href='about.html'" class="more-info-btn">More Info <i class="fas fa-arrow-right"></i></button>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1589903308904-1010c2294adc?ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80" alt="Professional Podcast Studio">
                </div>
            </div>
        </section>
        
        <footer class="footer">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Contact Info</h3>
                    <div class="contact-info">
                        <p><i class="fas fa-phone"></i> +123-456-7890</p>
                        <p><i class="fas fa-phone"></i> +111-222-3333</p>
                        <p><i class="fas fa-envelope"></i> podcastpro@gmail.com</p>
                        <p><i class="fas fa-map-marker-alt"></i> Mumbai, Indai - 400104</p>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Follow Us</h3>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook"></i> Facebook</a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i> Twitter</a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i> Instagram</a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i> LinkedIn</a>
                        <a href="#" class="social-link"><i class="fab fa-pinterest"></i> Pinterest</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>Created By PodcastPro | All Rights Reserved</p>
            </div>
        </footer>
        <script src="contact.js"></script>
        <div id="chatbot-container"></div>
        <script src="chatbot.js"></script>
    </body>
</html>