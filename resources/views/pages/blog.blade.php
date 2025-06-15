<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <title>Stilo - Blog</title>
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
        
        /* Blog Content */
        .blog-content {
            padding: 60px 0;
            background-color: #fff;
        }
        
        .blog-layout {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
        }
        
        /* Blog Posts */
        .blog-posts {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }
        
        .blog-post {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border: 1px solid #e5e5e5;
            transition: transform 0.3s ease;
        }
        
        .blog-post:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        
        .blog-post-image {
            height: 250px;
            background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-size: 18px;
        }
        
        .blog-post-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .blog-post-content {
            padding: 25px;
        }
        
        .blog-post-meta {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            font-size: 14px;
            color: #666;
            flex-wrap: wrap;
        }
        
        .blog-post-category {
            background-color: #333;
            color: #fff;
            padding: 4px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 500;
        }
        
        .blog-post-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
            line-height: 1.3;
            color: #333;
        }
        
        .blog-post-excerpt {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        
        .blog-post-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #333;
            font-weight: 500;
            transition: color 0.2s;
        }
        
        .blog-post-link:hover {
            color: #666;
        }
        
        /* Sidebar */
        .blog-sidebar {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }
        
        .sidebar-widget {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border: 1px solid #e5e5e5;
        }
        
        .widget-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #333;
        }
        
        /* Categories Widget */
        .categories-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .category-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0;
            border-bottom: 1px solid #e5e5e5;
            transition: color 0.2s;
            cursor: pointer;
        }
        
        .category-item:last-child {
            border-bottom: none;
        }
        
        .category-item:hover {
            color: #666;
        }
        
        .category-count {
            background-color: #f8f9fa;
            color: #666;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
        }
        
        /* Recent Posts Widget */
        .recent-posts {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .recent-post {
            display: flex;
            gap: 15px;
            cursor: pointer;
            transition: opacity 0.2s;
        }
        
        .recent-post:hover {
            opacity: 0.8;
        }
        
        .recent-post-image {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-size: 12px;
            flex-shrink: 0;
        }
        
        .recent-post-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .recent-post-content {
            flex: 1;
        }
        
        .recent-post-title {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 5px;
            line-height: 1.3;
            color: #333;
        }
        
        .recent-post-date {
            font-size: 12px;
            color: #666;
        }
        
        /* Tags Widget */
        .tags-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }
        
        .tag {
            background-color: #f8f9fa;
            color: #666;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
            transition: all 0.2s;
            cursor: pointer;
            border: 1px solid #e5e5e5;
        }
        
        .tag:hover {
            background-color: #333;
            color: #fff;
            border-color: #333;
        }
        
        /* Newsletter Widget */
        .newsletter-widget {
            background: linear-gradient(135deg, #333 0%, #555 100%);
            color: #fff;
        }
        
        .newsletter-widget .widget-title {
            color: #fff;
        }
        
        .newsletter-widget p {
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 20px;
        }
        
        .newsletter-form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .newsletter-input {
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            transition: box-shadow 0.2s;
        }
        
        .newsletter-input:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.3);
        }
        
        .newsletter-button {
            padding: 12px;
            background-color: #fff;
            color: #333;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.2s;
        }
        
        .newsletter-button:hover {
            background-color: #f8f9fa;
            transform: translateY(-1px);
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
        
        .footer-newsletter .newsletter-form {
            display: flex;
            margin-top: 15px;
        }
        
        .footer-newsletter .newsletter-input {
            flex: 1;
            padding: 10px;
            border: none;
            background-color: #333;
            color: #fff;
        }
        
        .footer-newsletter .newsletter-button {
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
            .blog-layout {
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
            
            .blog-post-meta {
                flex-direction: column;
                gap: 8px;
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
            
            .blog-post-title {
                font-size: 20px;
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
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('blog') }}" class="active">Blog</a>
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
        <img src="/images/bannerblog.jpg" alt="Blog Banner" class="banner-image">
        <div class="banner-overlay">
            <div class="banner-content">
                <h1 class="page-title">Blog</h1>
                <div class="breadcrumb">
                    <a href="/">Home</a>
                    <span>/</span>
                    <span>Blog</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Konten Blog -->
    <section class="blog-content">
        <div class="container">
            <div class="blog-layout">
                <!-- Postingan Blog -->
                <div class="blog-posts">
                    <!-- Blog Post 1 -->
                    <article class="blog-post">
                        <div class="blog-post-image">
                            <img src="/images/blog1.jpg" alt="Tips Fashion">
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-post-meta">
                                <span class="blog-post-category">Tips Fashion</span>
                                <span>15 Juni 2025</span>
                                <span>Oleh Admin</span>
                            </div>
                            <h2 class="blog-post-title">10 Tips Penting untuk Membangun Lemari Pakaian yang Timeless</h2>
                            <p class="blog-post-excerpt">Pelajari cara membuat lemari pakaian yang fleksibel dan tidak lekang oleh waktu. Temukan item kunci yang wajib dimiliki dan bagaimana cara memadupadankannya untuk berbagai gaya.</p>
                            <a href="#" class="blog-post-link">
                                Baca Selengkapnya
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                        </div>
                    </article>

                    <!-- Blog Post 2 -->
                    <article class="blog-post">
                        <div class="blog-post-image">
                            <img src="/images/blog2.jpg" alt="Di Balik Layar">
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-post-meta">
                                <span class="blog-post-category">Di Balik Layar</span>
                                <span>12 Juni 2025</span>
                                <span>Oleh Sarah</span>
                            </div>
                            <h2 class="blog-post-title">Di Balik Layar: Pemotretan Koleksi Terbaru Kami</h2>
                            <p class="blog-post-excerpt">Intip proses kreatif di balik pemotretan koleksi terbaru kami. Dari konsep hingga hasil akhir, saksikan bagaimana tim kami mewujudkan visi fashion secara kolaboratif dan detail.</p>
                            <a href="#" class="blog-post-link">
                                Baca Selengkapnya
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                        </div>
                    </article>

                    <!-- Blog Post 3 -->
                    <article class="blog-post">
                        <div class="blog-post-image">
                            <img src="/images/blog3.jpg" alt="Keberlanjutan">
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-post-meta">
                                <span class="blog-post-category">Keberlanjutan</span>
                                <span>10 Juni 2025</span>
                                <span>Oleh Emma</span>
                            </div>
                            <h2 class="blog-post-title">Komitmen Kami terhadap Fashion Berkelanjutan</h2>
                            <p class="blog-post-excerpt">Pelajari upaya kami dalam menerapkan praktik berkelanjutan. Mulai dari bahan ramah lingkungan hingga produksi yang etis, kami berkomitmen untuk mengurangi dampak terhadap lingkungan tanpa mengorbankan kualitas.</p>
                            <a href="#" class="blog-post-link">
                                Baca Selengkapnya
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Sidebar -->
                <aside class="blog-sidebar">
                    <!-- Widget Kategori -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Kategori</h3>
                        <div class="categories-list">
                            <div class="category-item">
                                <span>Tips Fashion</span>
                                <span class="category-count">8</span>
                            </div>
                            <div class="category-item">
                                <span>Di Balik Layar</span>
                                <span class="category-count">5</span>
                            </div>
                            <div class="category-item">
                                <span>Event & Promo</span>
                                <span class="category-count">12</span>
                            </div>
                            <div class="category-item">
                                <span>Keberlanjutan</span>
                                <span class="category-count">6</span>
                            </div>
                            <div class="category-item">
                                <span>Cerita Brand</span>
                                <span class="category-count">4</span>
                            </div>
                            <div class="category-item">
                                <span>Review Produk</span>
                                <span class="category-count">9</span>
                            </div>
                        </div>
                    </div>

                    <!-- Widget Postingan Terbaru -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Postingan Terbaru</h3>
                        <div class="recent-posts">
                            <div class="recent-post">
                                <div class="recent-post-image">
                                    <img src="/images/headerhome.jpg" alt="Postingan Terbaru">
                                </div>
                                <div class="recent-post-content">
                                    <h4 class="recent-post-title">Tren Fashion Musim Dingin 2025</h4>
                                    <div class="recent-post-date">15 Juni 2025</div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post-image">
                                    <img src="/images/bannerabout.jpg" alt="Postingan Terbaru">
                                </div>
                                <div class="recent-post-content">
                                    <h4 class="recent-post-title">Cara Merawat Produk Branded Agar Awet</h4>
                                    <div class="recent-post-date">13 Juni 2025</div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post-image">
                                    <img src="/images/bannerelement.jpg" alt="Postingan Terbaru">
                                </div>
                                <div class="recent-post-content">
                                    <h4 class="recent-post-title">Koleksi Limited Edition Terbaru</h4>
                                    <div class="recent-post-date">11 Juni 2025</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Widget Tag -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Tag Populer</h3>
                        <div class="tags-list">
                            <span class="tag">Fashion</span>
                            <span class="tag">Branded</span>
                            <span class="tag">Style</span>
                            <span class="tag">Outfit</span>
                            <span class="tag">Premium</span>
                            <span class="tag">Quality</span>
                            <span class="tag">Tips</span>
                            <span class="tag">Trend</span>
                            <span class="tag">Authentic</span>
                            <span class="tag">Original</span>
                            <span class="tag">Luxury</span>
                            <span class="tag">Collection</span>
                        </div>
                    </div>

                    <!-- Widget Newsletter -->
                    <div class="sidebar-widget newsletter-widget">
                        <h3 class="widget-title">Berlangganan Newsletter</h3>
                        <p>Dapatkan tips fashion terbaru, info produk baru, dan promo eksklusif langsung ke email Anda.</p>
                        <form class="newsletter-form">
                            <input type="email" class="newsletter-input" placeholder="Alamat email kamu" required>
                            <button type="submit" class="newsletter-button">Berlangganan</button>
                        </form>
                    </div>
                </aside>
            </div>
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
</body>
</html>