<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <title>Stilo - About</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }
        
        body {
            color: #333;
            line-height: 1.6;
        }
        
        a {
            text-decoration: none;
            color: inherit;
        }
        
        ul {
            list-style: none;
        }
        
        img {
            max-width: 100%;
            height: auto;
            display: block;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Header Styles */
        header {
            background-color: #f5f5f0;
            padding: 20px 0;
            border-bottom: 1px solid #eee;
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 24px;
            font-weight: 700;
        }
        
        .nav-menu {
            display: flex;
            gap: 20px;
        }
        
        .nav-menu a {
            font-size: 14px;
        }
        
        .nav-menu a:hover {
            color: #666;
        }
        
        .nav-menu a.active {
            font-weight: 600;
        }
        
        .header-icons {
            display: flex;
            gap: 15px;
            align-items: center;
        }
        
        .icon {
            position: relative;
            cursor: pointer;
        }
        
        .icon-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: #000;
            color: #fff;
            font-size: 10px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Page Banner */
        .page-banner {
            background-color: #f5f5f0;
            padding: 40px 0;
        }
        
        .page-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .breadcrumb {
            display: flex;
            gap: 10px;
            font-size: 14px;
            color: #666;
        }
        
        .breadcrumb a:hover {
            text-decoration: underline;
        }
        
        /* Pages Content */
        .pages-content {
            padding: 60px 0;
        }
        
        .pages-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }
        
        .page-card {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .page-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .page-card-image {
            height: 200px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 48px;
        }
        
        .page-card-content {
            padding: 25px;
        }
        
        .page-card-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .page-card-description {
            color: #666;
            margin-bottom: 20px;
        }
        
        .page-card-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #000;
            font-weight: 500;
            transition: color 0.2s;
        }
        
        .page-card-link:hover {
            color: #666;
        }
        
        /* Page Sections */
        .page-section {
            margin-bottom: 80px;
        }
        
        .section-title {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 30px;
            text-align: center;
        }
        
        .section-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        
        /* About Us Section */
        .about-section {
            background-color: #f9f9f9;
            padding: 60px 0;
            margin: 60px 0;
        }
        
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }
        
        .about-text h3 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        .about-text p {
            margin-bottom: 15px;
            color: #666;
        }
        
        .about-image {
            height: 300px;
            background-color: #ddd;
            border-radius: 8px;
        }
        
        /* Contact Section */
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        
        .form-group textarea {
            height: 120px;
            resize: vertical;
        }
        
        .submit-btn {
            background-color: #000;
            color: #fff;
            padding: 12px 30px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
        }
        
        .submit-btn:hover {
            background-color: #333;
        }
        
        /* FAQ Section */
        .faq-item {
            border-bottom: 1px solid #eee;
            margin-bottom: 20px;
        }
        
        .faq-question {
            padding: 20px 0;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 500;
        }
        
        .faq-answer {
            padding-bottom: 20px;
            color: #666;
            display: none;
        }
        
        .faq-answer.active {
            display: block;
        }
        
        .faq-icon {
            transition: transform 0.3s;
        }
        
        .faq-icon.active {
            transform: rotate(45deg);
        }
        
        /* Size Guide */
        .size-table {
            width: 100%;
            border-collapse: collapse;
            margin: 30px 0;
        }
        
        .size-table th,
        .size-table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }
        
        .size-table th {
            background-color: #f5f5f5;
            font-weight: 600;
        }
        
        /* Testimonials */
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .testimonial-card {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            color: #666;
        }
        
        .testimonial-author {
            font-weight: 600;
        }
        
        .testimonial-rating {
            color: #FFD700;
            margin-bottom: 15px;
        }
        
        /* Footer */
        footer {
            background-color: #1a1a1a;
            color: #fff;
            padding: 50px 0 20px;
        }
        
        .footer-top {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
        }
        
        .footer-newsletter {
            max-width: 300px;
        }
        
        .footer-newsletter h3 {
            font-size: 16px;
            margin-bottom: 15px;
        }
        
        .discount-highlight {
            color: #ff6b6b;
        }
        
        .newsletter-form {
            display: flex;
            margin-top: 15px;
        }
        
        .newsletter-input {
            flex: 1;
            padding: 10px;
            border: none;
            background-color: #333;
            color: #fff;
        }
        
        .newsletter-button {
            padding: 10px 15px;
            background-color: #fff;
            color: #000;
            border: none;
            cursor: pointer;
        }
        
        .footer-links {
            display: flex;
            gap: 50px;
        }
        
        .footer-column h4 {
            font-size: 14px;
            margin-bottom: 20px;
        }
        
        .footer-column ul {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .footer-column a {
            font-size: 14px;
            color: #aaa;
        }
        
        .footer-column a:hover {
            color: #fff;
        }
        
        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            border-top: 1px solid #333;
            font-size: 12px;
            color: #aaa;
        }
        
        .payment-methods {
            display: flex;
            gap: 10px;
        }
        
        .payment-icon {
            width: 30px;
            height: 20px;
            background-color: #fff;
            border-radius: 3px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            color: #000;
        }
        
        .language-selector {
            display: flex;
            gap: 15px;
        }
        
        .selector {
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }
        
        .selector::after {
            content: "";
            display: inline-block;
            width: 6px;
            height: 6px;
            border-right: 1px solid #aaa;
            border-bottom: 1px solid #aaa;
            transform: rotate(45deg);
            margin-top: -3px;
        }

        @media (max-width: 768px) {
            .pages-grid {
                grid-template-columns: 1fr;
            }
            
            .about-content {
                grid-template-columns: 1fr;
            }
            
            .testimonials-grid {
                grid-template-columns: 1fr;
            }
            
            .footer-top {
                flex-direction: column;
                gap: 30px;
            }
            
            .footer-links {
                flex-wrap: wrap;
                gap: 30px;
            }
        }
        
        @media (max-width: 576px) {
            .nav-menu {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">Stilo</div>
            <nav class="nav-menu">
                <a href="/">Home</a>
                <a href="{{ route('about') }}" class="active">About</a>
                <a href="{{ route('blog') }}">Blog</a>
                <a href="{{ route('elements') }}">Elements</a>
            </nav>
            <div class="header-icons">
                <div class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
                <div class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <div class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                    <span class="icon-badge">0</span>
                </div>
                <div class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                    <span class="icon-badge">0</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Banner -->
    <section class="page-banner">
        <div class="container">
            <h1 class="page-title">Pages</h1>
            <div class="breadcrumb">
                <a href="index.html">Home</a>
                <span>/</span>
                <span>Pages</span>
            </div>
        </div>
    </section>

    <!-- Pages Content -->
    <section class="pages-content">
        <div class="container">
            <!-- Pages Grid -->
            <div class="pages-grid">
                <!-- About Us Card -->
                <div class="page-card">
                    <div class="page-card-image">
                        👥
                    </div>
                    <div class="page-card-content">
                        <h3 class="page-card-title">About Us</h3>
                        <p class="page-card-description">Discover our story, mission, and the passion behind Stilo. Learn about our journey in creating quality fashion for everyone.</p>
                        <a href="#about" class="page-card-link">
                            Learn More
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Contact Card -->
                <div class="page-card">
                    <div class="page-card-image">
                        📞
                    </div>
                    <div class="page-card-content">
                        <h3 class="page-card-title">Contact</h3>
                        <p class="page-card-description">Get in touch with us. We're here to help with any questions about our products or services.</p>
                        <a href="#contact" class="page-card-link">
                            Contact Us
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- FAQ Card -->
                <div class="page-card">
                    <div class="page-card-image">
                        ❓
                    </div>
                    <div class="page-card-content">
                        <h3 class="page-card-title">FAQ</h3>
                        <p class="page-card-description">Find answers to frequently asked questions about ordering, shipping, returns, and more.</p>
                        <a href="#faq" class="page-card-link">
                            View FAQ
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Size Guide Card -->
                <div class="page-card">
                    <div class="page-card-image">
                        📏
                    </div>
                    <div class="page-card-content">
                        <h3 class="page-card-title">Size Guide</h3>
                        <p class="page-card-description">Find your perfect fit with our comprehensive size guide and measurement instructions.</p>
                        <a href="#size-guide" class="page-card-link">
                            View Guide
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Shipping & Returns Card -->
                <div class="page-card">
                    <div class="page-card-image">
                        🚚
                    </div>
                    <div class="page-card-content">
                        <h3 class="page-card-title">Shipping & Returns</h3>
                        <p class="page-card-description">Learn about our shipping options, delivery times, and hassle-free return policy.</p>
                        <a href="#shipping" class="page-card-link">
                            Learn More
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Testimonials Card -->
                <div class="page-card">
                    <div class="page-card-image">
                        ⭐
                    </div>
                    <div class="page-card-content">
                        <h3 class="page-card-title">Testimonials</h3>
                        <p class="page-card-description">Read what our customers say about their experience with Stilo products and service.</p>
                        <a href="#testimonials" class="page-card-link">
                            Read Reviews
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- About Us Section -->
            <section id="about" class="page-section">
                <div class="about-section">
                    <div class="container">
                        <h2 class="section-title">About Stilo</h2>
                        <div class="about-content">
                            <div class="about-text">
                                <h3>Our Story</h3>
                                <p>Founded in 2020, Stilo was born from a passion for creating timeless, quality fashion that speaks to the modern individual. We believe that great style shouldn't come at the expense of comfort or sustainability.</p>
                                <p>Our mission is to provide carefully curated pieces that blend contemporary design with classic elegance, ensuring that every item in your wardrobe tells a story of quality and conscious choice.</p>
                                <p>From our humble beginnings as a small online boutique to becoming a trusted name in fashion, we've remained committed to our core values: quality, sustainability, and exceptional customer service.</p>
                            </div>
                            <div class="about-image">
                                <img src="/placeholder.svg?height=300&width=400&text=About+Stilo" alt="About Stilo">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="page-section">
                <h2 class="section-title">Contact Us</h2>
                <div class="section-content">
                    <p>We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
                </div>
                <form class="contact-form">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </section>

            <!-- FAQ Section -->
            <section id="faq" class="page-section">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <div class="faq-container">
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How do I track my order?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            Once your order ships, you'll receive a tracking number via email. You can use this number to track your package on our website or the carrier's website.
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What is your return policy?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            We offer a 30-day return policy for unworn items with original tags. Returns are free for customers in the United States.
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Do you ship internationally?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            Yes, we ship to most countries worldwide. International shipping rates and delivery times vary by location.
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How do I care for my Stilo products?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            Care instructions are included with each product. Generally, we recommend machine washing cold and air drying to maintain quality and longevity.
                        </div>
                    </div>
                </div>
            </section>

            <!-- Size Guide Section -->
            <section id="size-guide" class="page-section">
                <h2 class="section-title">Size Guide</h2>
                <div class="section-content">
                    <p>Find your perfect fit with our size guide. All measurements are in inches.</p>
                </div>
                <table class="size-table">
                    <thead>
                        <tr>
                            <th>Size</th>
                            <th>Chest</th>
                            <th>Waist</th>
                            <th>Hips</th>
                            <th>Length</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>XS</td>
                            <td>32-34</td>
                            <td>26-28</td>
                            <td>34-36</td>
                            <td>26</td>
                        </tr>
                        <tr>
                            <td>S</td>
                            <td>34-36</td>
                            <td>28-30</td>
                            <td>36-38</td>
                            <td>27</td>
                        </tr>
                        <tr>
                            <td>M</td>
                            <td>36-38</td>
                            <td>30-32</td>
                            <td>38-40</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>L</td>
                            <td>38-40</td>
                            <td>32-34</td>
                            <td>40-42</td>
                            <td>29</td>
                        </tr>
                        <tr>
                            <td>XL</td>
                            <td>40-42</td>
                            <td>34-36</td>
                            <td>42-44</td>
                            <td>30</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- Shipping & Returns Section -->
            <section id="shipping" class="page-section">
                <h2 class="section-title">Shipping & Returns</h2>
                <div class="section-content">
                    <h3>Shipping Information</h3>
                    <p>We offer free standard shipping on orders over $100. Orders under $100 will be charged $7.95 for standard shipping.</p>
                    <p>Express shipping is available for $15.95 and typically delivers within 1-2 business days.</p>
                    
                    <h3>Return Policy</h3>
                    <p>We want you to love your Stilo purchase. If you're not completely satisfied, you can return unworn items within 30 days of purchase for a full refund.</p>
                    <p>Items must be in original condition with all tags attached. Return shipping is free for US customers.</p>
                </div>
            </section>

            <!-- Testimonials Section -->
            <section id="testimonials" class="page-section">
                <h2 class="section-title">What Our Customers Say</h2>
                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">★★★★★</div>
                        <p class="testimonial-text">"Amazing quality and perfect fit! The jacket I ordered exceeded my expectations. Will definitely be ordering more from Stilo."</p>
                        <div class="testimonial-author">- Sarah M.</div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-rating">★★★★★</div>
                        <p class="testimonial-text">"Fast shipping and excellent customer service. The clothes are exactly as described and the quality is outstanding."</p>
                        <div class="testimonial-author">- Michael R.</div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-rating">★★★★★</div>
                        <p class="testimonial-text">"I love the sustainable approach and the timeless designs. Stilo has become my go-to brand for quality fashion."</p>
                        <div class="testimonial-author">- Emma L.</div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-top">
                <div class="footer-newsletter">
                    <h3>Receive an exclusive <span class="discount-highlight">20%</span> discount code when you signup.</h3>
                    <div class="newsletter-form">
                        <input type="email" class="newsletter-input" placeholder="Enter your email">
                        <button class="newsletter-button">Subscribe</button>
                    </div>
                </div>
                <div class="footer-links">
                    <div class="footer-column">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Locations</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Customer Care</h4>
                        <ul>
                            <li><a href="#">Size Guide</a></li>
                            <li><a href="#">Help & FAQs</a></li>
                            <li><a href="#">Return My Order</a></li>
                            <li><a href="#">Refer a Friend</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Terms & Policies</h4>
                        <ul>
                            <li><a href="#">Duties & Taxes</a></li>
                            <li><a href="#">Shipping Info</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms Conditions</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Follow us</h4>
                        <ul>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Pinterest</a></li>
                            <li><a href="#">TikTok</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="copyright">
                    <div class="logo">Stilo</div>
                    <p>©2025 June. All rights reserved</p>
                </div>
                <div class="footer-right">
                    <div class="payment-methods">
                        <div class="payment-icon">BCA</div>
                        <div class="payment-icon">BRI</div>
                        <div class="payment-icon">BSI</div>
                        <div class="payment-icon">MANDIRI</div>
                    </div>
                    <div class="language-selector">
                        <div class="selector">ID</div>
                        <div class="selector">Rp</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // FAQ Toggle
            const faqQuestions = document.querySelectorAll('.faq-question');
            
            faqQuestions.forEach(question => {
                question.addEventListener('click', function() {
                    const answer = this.nextElementSibling;
                    const icon = this.querySelector('.faq-icon');
                    
                    // Close all other FAQ items
                    faqQuestions.forEach(otherQuestion => {
                        if (otherQuestion !== this) {
                            otherQuestion.nextElementSibling.classList.remove('active');
                            otherQuestion.querySelector('.faq-icon').classList.remove('active');
                        }
                    });
                    
                    // Toggle current FAQ item
                    answer.classList.toggle('active');
                    icon.classList.toggle('active');
                });
            });
            
            // Contact Form
            const contactForm = document.querySelector('.contact-form');
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Thank you for your message! We\'ll get back to you soon.');
                this.reset();
            });
            
            // Smooth scrolling for anchor links
            const anchorLinks = document.querySelectorAll('a[href^="#"]');
            anchorLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);
                    
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>