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
            background-color: #fff;
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
        
        /* Page Banner with Image */
        .page-banner {
            position: relative;
            background-color: #f5f5f0;
            padding: 0;
            overflow: hidden;
            height: 400px;
        }
        
        .banner-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        
        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .banner-content {
            text-align: center;
            color: white;
            z-index: 2;
        }
        
        .page-title {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        .breadcrumb {
            display: flex;
            gap: 10px;
            font-size: 16px;
            color: rgba(255, 255, 255, 0.9);
            justify-content: center;
            align-items: center;
        }
        
        .breadcrumb a {
            color: rgba(255, 255, 255, 0.9);
            transition: color 0.2s;
        }
        
        .breadcrumb a:hover {
            color: white;
            text-decoration: underline;
        }
        
        .breadcrumb span {
            color: rgba(255, 255, 255, 0.7);
        }
        
        /* Pages Content */
        .pages-content {
            padding: 60px 0;
            background-color: #fff;
        }
        
        .pages-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }
        
        .page-card {
            background: #fff;
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .page-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        
        .page-card-image {
            height: 200px;
            background: linear-gradient(135deg, #333 0%, #555 100%);
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
            color: #333;
        }
        
        .page-card-description {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        
        .page-card-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #333;
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
            color: #333;
        }
        
        .section-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            color: #666;
        }
        
        /* About Us Section */
        .about-section {
            background-color: #f8f9fa;
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
            color: #333;
        }
        
        .about-text p {
            margin-bottom: 15px;
            color: #666;
            line-height: 1.7;
        }
        
        .about-image {
            height: 400px;
            background-color: #ddd;
            border-radius: 12px;
            overflow: hidden;
            position: relative;
        }
        
        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
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
            color: #333;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.2s;
        }
        
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #333;
        }
        
        .form-group textarea {
            height: 120px;
            resize: vertical;
        }
        
        .submit-btn {
            background-color: #333;
            color: #fff;
            padding: 12px 30px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            transition: background-color 0.2s;
        }
        
        .submit-btn:hover {
            background-color: #555;
        }
        
        /* FAQ Section */
        .faq-item {
            border-bottom: 1px solid #e5e5e5;
            margin-bottom: 20px;
        }
        
        .faq-question {
            padding: 20px 0;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 500;
            color: #333;
        }
        
        .faq-answer {
            padding-bottom: 20px;
            color: #666;
            display: none;
            line-height: 1.6;
        }
        
        .faq-answer.active {
            display: block;
        }
        
        .faq-icon {
            transition: transform 0.3s;
            font-size: 20px;
            color: #333;
        }
        
        .faq-icon.active {
            transform: rotate(45deg);
        }
        
        /* Size Guide */
        .size-table {
            width: 100%;
            border-collapse: collapse;
            margin: 30px 0;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .size-table th,
        .size-table td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #e5e5e5;
        }
        
        .size-table th {
            background-color: #f8f9fa;
            font-weight: 600;
            color: #333;
        }
        
        .size-table tr:last-child td {
            border-bottom: none;
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
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border: 1px solid #e5e5e5;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            color: #666;
            line-height: 1.6;
        }
        
        .testimonial-author {
            font-weight: 600;
            color: #333;
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
            
            .page-title {
                font-size: 36px;
            }
            
            .page-banner {
                height: 300px;
            }
        }
        
        @media (max-width: 576px) {
            .nav-menu {
                display: none;
            }
            
            .page-title {
                font-size: 28px;
            }
            
            .page-banner {
                height: 250px;
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

    <!-- Page Banner with Image -->
    <section class="page-banner">
        <img src="/images/bannerabout.jpg" alt="Pages Banner" class="banner-image">
        <div class="banner-overlay">
            <div class="banner-content">
                <h1 class="page-title">About</h1>
                <div class="breadcrumb">
                    <a href="/">Home</a>
                    <span>/</span>
                    <span>Pages</span>
                </div>
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
                        <p class="page-card-description">Discover our story, mission, and the passion behind Stilo. Learn about our journey in creating quality branded fashion for everyone.</p>
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
                                <p>Didirikan pada tahun 2025, Stilo hadir sebagai destinasi terpercaya untuk produk branded berkualitas tinggi. Kami memahami bahwa setiap pelanggan menginginkan produk original dengan kualitas terbaik dan harga yang kompetitif.</p>
                                <p>Misi kami adalah menyediakan koleksi produk branded pilihan dari berbagai kategori, mulai dari fashion, aksesoris, hingga lifestyle products. Setiap item yang kami jual telah melalui proses kurasi ketat untuk memastikan keaslian dan kualitasnya.</p>
                                <p>Dengan komitmen terhadap kepuasan pelanggan, Stilo terus berinovasi dalam memberikan pengalaman berbelanja yang mudah, aman, dan menyenangkan. Kami percaya bahwa produk berkualitas tinggi harus dapat diakses oleh semua kalangan.</p>
                                <p>Tim Stilo terdiri dari para profesional berpengalaman yang memiliki passion dalam dunia retail dan fashion. Kami selalu mengutamakan pelayanan terbaik dan kepercayaan pelanggan sebagai fondasi utama bisnis kami.</p>
                            </div>
                            <div class="about-image">
                                <img src="/images/aboutstilo.jpg" alt="About Stilo Team">
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
                            <span>Bagaimana cara melacak pesanan saya?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            Setelah pesanan Anda dikirim, Anda akan menerima nomor resi melalui email atau WhatsApp. Anda dapat menggunakan nomor ini untuk melacak paket di website kurir yang bersangkutan.
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Bagaimana kebijakan pengembalian barang?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            Kami menerima pengembalian barang dalam 7 hari untuk produk yang belum digunakan dengan kondisi dan kemasan asli. Biaya pengembalian ditanggung pembeli.
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Apakah produk yang dijual original?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            Ya, semua produk yang kami jual adalah 100% original dan bergaransi. Kami bekerja sama langsung dengan distributor resmi dan authorized dealer.
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Bagaimana cara pembayaran yang tersedia?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            Kami menerima pembayaran melalui transfer bank (BCA, BRI, BSI, Mandiri), e-wallet, dan COD untuk area tertentu. Semua metode pembayaran aman dan terpercaya.
                        </div>
                    </div>
                </div>
            </section>

            <!-- Size Guide Section -->
            <section id="size-guide" class="page-section">
                <h2 class="section-title">Size Guide</h2>
                <div class="section-content">
                    <p>Find your perfect fit with our size guide. All measurements are in centimeters.</p>
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
                            <td>S</td>
                            <td>86-91</td>
                            <td>71-76</td>
                            <td>86-91</td>
                            <td>66</td>
                        </tr>
                        <tr>
                            <td>M</td>
                            <td>91-96</td>
                            <td>76-81</td>
                            <td>91-96</td>
                            <td>68</td>
                        </tr>
                        <tr>
                            <td>L</td>
                            <td>96-101</td>
                            <td>81-86</td>
                            <td>96-101</td>
                            <td>70</td>
                        </tr>
                        <tr>
                            <td>XL</td>
                            <td>101-106</td>
                            <td>86-91</td>
                            <td>101-106</td>
                            <td>72</td>
                        </tr>
                        <tr>
                            <td>XXL</td>
                            <td>106-111</td>
                            <td>91-96</td>
                            <td>106-111</td>
                            <td>74</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- Shipping & Returns Section -->
            <section id="shipping" class="page-section">
                <h2 class="section-title">Shipping & Returns</h2>
                <div class="section-content">
                    <h3>Informasi Pengiriman</h3>
                    <p>Kami menyediakan gratis ongkir untuk pembelian di atas Rp 500.000. Untuk pembelian di bawah Rp 500.000 akan dikenakan biaya ongkir sesuai tarif kurir.</p>
                    <p>Pengiriman express tersedia dengan biaya tambahan dan biasanya sampai dalam 1-2 hari kerja untuk area Jabodetabek.</p>
                    
                    <h3>Kebijakan Pengembalian</h3>
                    <p>Kami ingin Anda puas dengan pembelian Stilo. Jika tidak sepenuhnya puas, Anda dapat mengembalikan barang yang belum digunakan dalam 7 hari setelah pembelian.</p>
                    <p>Barang harus dalam kondisi asli dengan semua tag dan kemasan. Biaya pengembalian ditanggung oleh pembeli.</p>
                </div>
            </section>

            <!-- Testimonials Section -->
            <section id="testimonials" class="page-section">
                <h2 class="section-title">What Our Customers Say</h2>
                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">★★★★★</div>
                        <p class="testimonial-text">"Kualitas produk sangat bagus dan original! Pengiriman cepat dan packaging rapi. Pasti akan belanja lagi di Stilo."</p>
                        <div class="testimonial-author">- Sarah M.</div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-rating">★★★★★</div>
                        <p class="testimonial-text">"Pelayanan customer service sangat responsif dan membantu. Produk sesuai deskripsi dan kualitasnya memuaskan."</p>
                        <div class="testimonial-author">- Michael R.</div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-rating">★★★★★</div>
                        <p class="testimonial-text">"Stilo jadi tempat belanja online favorit saya. Produk branded original dengan harga yang kompetitif. Recommended!"</p>
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
                        <div class="payment-icon">Mandiri</div>
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
                alert('Terima kasih atas pesan Anda! Kami akan segera menghubungi Anda.');
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