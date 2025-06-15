<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <title>Stilo</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }
        
        body {
            color: #333;
            line-height: 1.5;
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
            position: relative;
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
            align-items: center;
        }
        
        .nav-menu a {
            font-size: 14px;
            position: relative;
            padding: 10px 0;
        }
        
        .nav-menu a:hover {
            color: #666;
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
        
        /* Shop Banner */
        .shop-banner {
            position: relative;
            background-color: #f5f5f0;
            padding: 0;
            overflow: hidden;
        }
        
        .banner-image {
            width: 100%;
            height: 400px;
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
        
        .shop-title {
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
        
        /* Shop Content */
        .shop-content {
            padding: 40px 0;
        }
        
        /* Filter Bar */
        .filter-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .filters {
            display: flex;
            gap: 15px;
            align-items: center;
        }
        
        .filter-item {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 14px;
            cursor: pointer;
            position: relative;
        }
        
        .filter-item::after {
            content: "";
            display: inline-block;
            width: 8px;
            height: 8px;
            border-right: 1.5px solid #333;
            border-bottom: 1.5px solid #333;
            transform: rotate(45deg);
            margin-top: -4px;
        }
        
        .view-options {
            display: flex;
            gap: 10px;
        }
        
        .view-option {
            cursor: pointer;
            padding: 5px;
        }
        
        /* Product Grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
        
        .product-card {
            margin-bottom: 30px;
        }
        
        /* Product card untuk yang tidak tersedia */
        .product-card.unavailable {
            opacity: 0.7;
        }
        
        .product-image {
            background-color: #f9f9f9;
            margin-bottom: 10px;
            position: relative;
            overflow: hidden;
            aspect-ratio: 1/1.2;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .product-image:hover img {
            transform: scale(1.05);
        }
        
        /* Tidak Tersedia Overlay */
        .tidak-tersedia-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(248, 249, 250, 0.95);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #dc3545;
            font-size: 16px;
            font-weight: 600;
            text-align: center;
            border: 2px solid #dc3545;
            z-index: 2;
        }
        
        /* Tidak Tersedia Text untuk produk tanpa gambar */
        .tidak-tersedia {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            background-color: #f8f9fa;
            color: #dc3545;
            font-size: 16px;
            font-weight: 600;
            border: 2px solid #dc3545;
            text-align: center;
        }
        
        .product-title {
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .product-title.unavailable {
            color: #6c757d;
        }
        
        .product-price {
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .product-price.unavailable {
            color: #6c757d;
            text-decoration: line-through;
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

        /* Mobile Menu */
        .mobile-menu-toggle {
            display: none;
            cursor: pointer;
        }
        
        /* Logout Button Styling */
        .logout-btn {
            background: none;
            border: none;
            color: #333;
            cursor: pointer;
            font-size: 14px;
            padding: 10px 0;
            transition: color 0.2s;
        }
        
        .logout-btn:hover {
            color: #666;
        }
        
        @media (max-width: 992px) {
            .product-grid {
                grid-template-columns: repeat(3, 1fr);
            }
            
            .shop-title {
                font-size: 36px;
            }
        }
        
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }
            
            .mobile-menu-toggle {
                display: block;
            }
            
            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .banner-image {
                height: 300px;
            }
            
            .shop-title {
                font-size: 28px;
            }
            
            .breadcrumb {
                font-size: 14px;
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
            .product-grid {
                grid-template-columns: 1fr;
            }
            
            .filter-bar {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .banner-image {
                height: 250px;
            }
            
            .shop-title {
                font-size: 24px;
            }
            
            .tidak-tersedia,
            .tidak-tersedia-overlay {
                font-size: 14px;
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
                <div class="mobile-menu-toggle">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </div>
            </div>
        </div>
    </header>

    <!-- Shop Banner -->
    <section class="shop-banner">
        <img src="/images/headerhome.jpg" alt="Banner Toko" class="banner-image">
        <div class="banner-overlay">
            <div class="banner-content">
                <h1 class="shop-title">Shop</h1>
                <div class="breadcrumb">
                    <a href="/">Home</a>
                    <span>/</span>
                    <span>Stilo</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Content -->
    <section class="shop-content">
        <div class="container">
            <!-- Filter Bar -->
            <div class="filter-bar">
                <div class="filters">
                    <div class="filter-item">
                        <span>Filter by</span>
                    </div>
                    <div class="filter-item">
                        <span>Categories</span>
                    </div>
                    <div class="filter-item">
                        <span>Price</span>
                    </div>
                </div>
                <div class="sorting">
                    <div class="filter-item">
                        <span>Default Sorting</span>
                    </div>
                    <div class="view-options">
                        <div class="view-option">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                            </svg>
                        </div>
                        <div class="view-option">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="8" y1="6" x2="21" y2="6"></line>
                                <line x1="8" y1="12" x2="21" y2="12"></line>
                                <line x1="8" y1="18" x2="21" y2="18"></line>
                                <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                <line x1="3" y1="18" x2="3.01" y2="18"></line>
                            </svg>
                        </div>
                        <div class="view-option">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Grid -->
            <div class="product-grid">
                @foreach ($products as $product)
                    <a href="{{ route('products.show', $product->id) }}">
                        <div class="product-card {{ $product->status == 'Tidak Tersedia' ? 'unavailable' : '' }}">
                            <div class="product-image">
                                @if($product->status == 'Tidak Tersedia')
                                    @if($product->gambar)
                                        <img src="{{ $product->gambar }}" alt="{{ $product->nama_produk }}">
                                        <div class="tidak-tersedia-overlay">
                                            Tidak Tersedia
                                        </div>
                                    @else
                                        <div class="tidak-tersedia">
                                            Tidak Tersedia
                                        </div>
                                    @endif
                                @else
                                    @if($product->gambar)
                                        <img src="{{ $product->gambar }}" alt="{{ $product->nama_produk }}">
                                    @else
                                        <div class="tidak-tersedia">
                                            Gambar Tidak Ada
                                        </div>
                                    @endif
                                @endif
                            </div>
                            <h3 class="product-title {{ $product->status == 'Tidak Tersedia' ? 'unavailable' : '' }}">{{ $product->nama_produk }}</h3>
                            <div class="product-price {{ $product->status == 'Tidak Tersedia' ? 'unavailable' : '' }}">Rp{{ number_format($product->harga) }}</div>
                        </div>
                    </a>
                @endforeach
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