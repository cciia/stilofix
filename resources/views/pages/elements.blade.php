<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <title>Stilo - Elements</title>
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
        
        /* Elements Content */
        .elements-content {
            padding: 60px 0;
            background-color: #fff;
        }
        
        .section {
            margin-bottom: 80px;
        }
        
        .section-title {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 30px;
            text-align: center;
            color: #333;
        }
        
        /* Style Guide Section */
        .style-guide {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .style-card {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border: 1px solid #e5e5e5;
        }
        
        .style-card h3 {
            margin-bottom: 20px;
            font-size: 20px;
            color: #333;
        }
        
        /* Color Palette */
        .color-palette {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            gap: 15px;
        }
        
        .color-item {
            text-align: center;
        }
        
        .color-swatch {
            width: 100%;
            height: 80px;
            border-radius: 8px;
            margin-bottom: 10px;
            border: 1px solid #e5e5e5;
        }
        
        .color-name {
            font-size: 14px;
            font-weight: 500;
            color: #333;
        }
        
        .color-code {
            font-size: 12px;
            color: #666;
        }
        
        /* Brand Colors */
        .brand-black { background-color: #333; }
        .brand-white { background-color: #fff; }
        .brand-grey { background-color: #666; }
        .brand-cream { background-color: #f5f5f0; }
        .brand-dark-grey { background-color: #1a1a1a; }
        .brand-light-grey { background-color: #f8f9fa; }
        
        /* Typography */
        .typography-examples {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .typography-item {
            padding: 15px 0;
            border-bottom: 1px solid #e5e5e5;
        }
        
        .typography-item:last-child {
            border-bottom: none;
        }
        
        .typography-label {
            font-size: 12px;
            color: #666;
            margin-bottom: 5px;
        }
        
        .heading-1 { font-size: 36px; font-weight: 700; color: #333; }
        .heading-2 { font-size: 28px; font-weight: 600; color: #333; }
        .heading-3 { font-size: 24px; font-weight: 600; color: #333; }
        .body-text { font-size: 16px; font-weight: 400; color: #666; }
        .small-text { font-size: 14px; font-weight: 400; color: #666; }
        
        /* Product Categories */
        .product-categories {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .category-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border: 1px solid #e5e5e5;
            transition: transform 0.3s ease;
        }
        
        .category-card:hover {
            transform: translateY(-5px);
        }
        
        .category-image {
            height: 200px;
            background: linear-gradient(135deg, #333 0%, #555 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            color: white;
        }
        
        .category-content {
            padding: 20px;
        }
        
        .category-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }
        
        .category-description {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }
        
        /* Brand Collections */
        .brand-collections {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .collection-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border: 1px solid #e5e5e5;
            transition: transform 0.3s ease;
        }
        
        .collection-card:hover {
            transform: translateY(-5px);
        }
        
        .collection-image {
            height: 250px;
            background: linear-gradient(135deg, #333 0%, #666 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            font-weight: 600;
        }
        
        .collection-content {
            padding: 25px;
        }
        
        .collection-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }
        
        .collection-description {
            color: #666;
            margin-bottom: 15px;
            line-height: 1.6;
        }
        
        .collection-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #333;
            font-weight: 500;
            transition: color 0.2s;
        }
        
        .collection-link:hover {
            color: #666;
        }
        
        /* UI Components */
        .ui-components {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .ui-card {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border: 1px solid #e5e5e5;
        }
        
        .ui-card h3 {
            margin-bottom: 20px;
            font-size: 18px;
            color: #333;
        }
        
        /* Buttons */
        .button-examples {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s;
            text-align: center;
            display: inline-block;
        }
        
        .btn-primary {
            background-color: #333;
            color: #fff;
        }
        
        .btn-primary:hover {
            background-color: #555;
        }
        
        .btn-secondary {
            background-color: transparent;
            color: #333;
            border: 1px solid #333;
        }
        
        .btn-secondary:hover {
            background-color: #333;
            color: #fff;
        }
        
        .btn-outline {
            background-color: transparent;
            color: #666;
            border: 1px solid #e5e5e5;
        }
        
        .btn-outline:hover {
            background-color: #f8f9fa;
            border-color: #333;
        }
        
        /* Form Elements */
        .form-examples {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        
        .form-label {
            font-size: 14px;
            font-weight: 500;
            color: #333;
        }
        
        .form-input {
            padding: 12px;
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.2s;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #333;
        }
        
        /* Icons */
        .icon-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));
            gap: 20px;
        }
        
        .icon-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            padding: 15px;
            border-radius: 8px;
            transition: background-color 0.2s;
        }
        
        .icon-item:hover {
            background-color: #f8f9fa;
        }
        
        .icon-name {
            font-size: 12px;
            color: #666;
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
            .style-guide,
            .product-categories,
            .brand-collections,
            .ui-components {
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
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('blog') }}">Blog</a>
                <a href="{{ route('elements') }}" class="active">Elements</a>
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
        <img src="/images/bannerelement.jpg" alt="Elements Banner" class="banner-image">
        <div class="banner-overlay">
            <div class="banner-content">
                <h1 class="page-title">Elements</h1>
                <div class="breadcrumb">
                    <a href="/">Home</a>
                    <span>/</span>
                    <span>Elements</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Elements Content -->
    <section class="elements-content">
        <div class="container">
            <!-- Brand Style Guide Section -->
            <div class="section">
                <h2 class="section-title">Brand Style Guide</h2>
                <div class="style-guide">
                    <!-- Brand Color Palette -->
                    <div class="style-card">
                        <h3>Brand Colors</h3>
                        <div class="color-palette">
                            <div class="color-item">
                                <div class="color-swatch brand-black"></div>
                                <div class="color-name">Brand Black</div>
                                <div class="color-code">#333333</div>
                            </div>
                            <div class="color-item">
                                <div class="color-swatch brand-white"></div>
                                <div class="color-name">Pure White</div>
                                <div class="color-code">#FFFFFF</div>
                            </div>
                            <div class="color-item">
                                <div class="color-swatch brand-grey"></div>
                                <div class="color-name">Medium Grey</div>
                                <div class="color-code">#666666</div>
                            </div>
                            <div class="color-item">
                                <div class="color-swatch brand-cream"></div>
                                <div class="color-name">Brand Cream</div>
                                <div class="color-code">#F5F5F0</div>
                            </div>
                            <div class="color-item">
                                <div class="color-swatch brand-dark-grey"></div>
                                <div class="color-name">Dark Grey</div>
                                <div class="color-code">#1A1A1A</div>
                            </div>
                            <div class="color-item">
                                <div class="color-swatch brand-light-grey"></div>
                                <div class="color-name">Light Grey</div>
                                <div class="color-code">#F8F9FA</div>
                            </div>
                        </div>
                    </div>

                    <!-- Typography -->
                    <div class="style-card">
                        <h3>Typography</h3>
                        <div class="typography-examples">
                            <div class="typography-item">
                                <div class="typography-label">Heading 1 - 36px Bold</div>
                                <div class="heading-1">Stilo Premium Collection</div>
                            </div>
                            <div class="typography-item">
                                <div class="typography-label">Heading 2 - 28px Semibold</div>
                                <div class="heading-2">Quality Branded Products</div>
                            </div>
                            <div class="typography-item">
                                <div class="typography-label">Heading 3 - 24px Semibold</div>
                                <div class="heading-3">Authentic & Original</div>
                            </div>
                            <div class="typography-item">
                                <div class="typography-label">Body Text - 16px Regular</div>
                                <div class="body-text">Discover our curated selection of premium branded products with guaranteed authenticity and exceptional quality.</div>
                            </div>
                            <div class="typography-item">
                                <div class="typography-label">Small Text - 14px Regular</div>
                                <div class="small-text">All products come with official warranty and authenticity guarantee.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Categories Section -->
            <div class="section">
                <h2 class="section-title">Product Categories</h2>
                <div class="product-categories">
                    <div class="category-card">
                        <div class="category-image">👕</div>
                        <div class="category-content">
                            <h3 class="category-title">Fashion & Apparel</h3>
                            <p class="category-description">Premium branded clothing from international and local designers. T-shirts, shirts, dresses, and more.</p>
                        </div>
                    </div>
                    <div class="category-card">
                        <div class="category-image">👟</div>
                        <div class="category-content">
                            <h3 class="category-title">Footwear</h3>
                            <p class="category-description">Authentic branded shoes, sneakers, boots, and sandals from top global brands.</p>
                        </div>
                    </div>
                    <div class="category-card">
                        <div class="category-image">👜</div>
                        <div class="category-content">
                            <h3 class="category-title">Bags & Accessories</h3>
                            <p class="category-description">Designer handbags, backpacks, wallets, and premium accessories for every occasion.</p>
                        </div>
                    </div>
                    <div class="category-card">
                        <div class="category-image">⌚</div>
                        <div class="category-content">
                            <h3 class="category-title">Watches & Jewelry</h3>
                            <p class="category-description">Luxury timepieces and fine jewelry from renowned brands with authenticity certificates.</p>
                        </div>
                    </div>
                    <div class="category-card">
                        <div class="category-image">🕶️</div>
                        <div class="category-content">
                            <h3 class="category-title">Eyewear</h3>
                            <p class="category-description">Designer sunglasses and optical frames from premium brands with UV protection.</p>
                        </div>
                    </div>
                    <div class="category-card">
                        <div class="category-image">💄</div>
                        <div class="category-content">
                            <h3 class="category-title">Beauty & Cosmetics</h3>
                            <p class="category-description">Authentic branded cosmetics, skincare, and beauty products from trusted manufacturers.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Brand Collections Section -->
            <div class="section">
                <h2 class="section-title">Brand Collections</h2>
                <div class="brand-collections">
                    <div class="collection-card">
                        <div class="collection-image">LUXURY</div>
                        <div class="collection-content">
                            <h3 class="collection-title">Luxury Collection</h3>
                            <p class="collection-description">Exclusive high-end branded products from world-renowned luxury brands. Premium quality with authentic certificates.</p>
                            <a href="#" class="collection-link">
                                Explore Collection
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="collection-card">
                        <div class="collection-image">PREMIUM</div>
                        <div class="collection-content">
                            <h3 class="collection-title">Premium Selection</h3>
                            <p class="collection-description">Carefully curated premium branded items that offer exceptional quality and style at competitive prices.</p>
                            <a href="#" class="collection-link">
                                Explore Collection
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="collection-card">
                        <div class="collection-image">TRENDING</div>
                        <div class="collection-content">
                            <h3 class="collection-title">Trending Now</h3>
                            <p class="collection-description">Latest trending branded products that are popular among fashion enthusiasts and style influencers.</p>
                            <a href="#" class="collection-link">
                                Explore Collection
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="collection-card">
                        <div class="collection-image">LIMITED</div>
                        <div class="collection-content">
                            <h3 class="collection-title">Limited Edition</h3>
                            <p class="collection-description">Exclusive limited edition branded items that are rare and highly sought after by collectors.</p>
                            <a href="#" class="collection-link">
                                Explore Collection
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="collection-card">
                        <div class="collection-image">BESTSELLER</div>
                        <div class="collection-content">
                            <h3 class="collection-title">Best Sellers</h3>
                            <p class="collection-description">Most popular branded products loved by our customers. Proven quality and style that never goes out of fashion.</p>
                            <a href="#" class="collection-link">
                                Explore Collection
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="collection-card">
                        <div class="collection-image">NEW ARRIVAL</div>
                        <div class="collection-content">
                            <h3 class="collection-title">New Arrivals</h3>
                            <p class="collection-description">Fresh branded products just arrived in our store. Be the first to get the latest collections from top brands.</p>
                            <a href="#" class="collection-link">
                                Explore Collection
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- UI Components Section -->
            <div class="section">
                <h2 class="section-title">UI Components</h2>
                <div class="ui-components">
                    <!-- Buttons -->
                    <div class="ui-card">
                        <h3>Buttons</h3>
                        <div class="button-examples">
                            <button class="btn btn-primary">Shop Now</button>
                            <button class="btn btn-secondary">Add to Cart</button>
                            <button class="btn btn-outline">View Details</button>
                        </div>
                    </div>

                    <!-- Form Elements -->
                    <div class="ui-card">
                        <h3>Form Elements</h3>
                        <div class="form-examples">
                            <div class="form-group">
                                <label class="form-label">Search Products</label>
                                <input type="text" class="form-input" placeholder="Search branded products...">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email Newsletter</label>
                                <input type="email" class="form-input" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Product Category</label>
                                <select class="form-input">
                                    <option>All Categories</option>
                                    <option>Fashion & Apparel</option>
                                    <option>Footwear</option>
                                    <option>Bags & Accessories</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Icons -->
                    <div class="ui-card">
                        <h3>Icons</h3>
                        <div class="icon-grid">
                            <div class="icon-item">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                                <span class="icon-name">Search</span>
                            </div>
                            <div class="icon-item">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span class="icon-name">Account</span>
                            </div>
                            <div class="icon-item">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                </svg>
                                <span class="icon-name">Wishlist</span>
                            </div>
                            <div class="icon-item">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                                </svg>
                                <span class="icon-name">Shopping</span>
                            </div>
                            <div class="icon-item">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 12l2 2 4-4"></path>
                                    <circle cx="12" cy="12" r="10"></circle>
                                </svg>
                                <span class="icon-name">Verified</span>
                            </div>
                            <div class="icon-item">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <span class="icon-name">Premium</span>
                            </div>
                        </div>
                    </div>
                </div>
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