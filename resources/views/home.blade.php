<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stilo</title>
    <style>
        /* Reset and Base Styles */
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
        
        /* Products Dropdown Menu */
        .nav-item {
            position: relative;
        }
        
        .nav-item.has-dropdown:hover .dropdown-menu {
            display: flex;
        }
        
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: -20px;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            width: 800px;
            padding: 30px;
            display: none;
            z-index: 100;
            border-radius: 4px;
            margin-top: 10px;
        }
        
        .dropdown-menu::before {
            content: '';
            position: absolute;
            top: -10px;
            left: 30px;
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 10px solid white;
        }
        
        .dropdown-content {
            display: flex;
            width: 100%;
        }
        
        .dropdown-column {
            flex: 1;
            padding: 0 15px;
        }
        
        .dropdown-column h3 {
            font-size: 16px;
            margin-bottom: 15px;
            font-weight: 600;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        
        .dropdown-links {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .dropdown-links a {
            font-size: 14px;
            color: #666;
            transition: color 0.2s;
            padding: 5px 0;
        }
        
        .dropdown-links a:hover {
            color: #000;
        }
        
        .featured-products {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }
        
        .featured-product {
            display: flex;
            flex-direction: column;
        }
        
        .featured-product-image {
            width: 100%;
            height: 120px;
            background-color: #f9f9f9;
            margin-bottom: 10px;
            overflow: hidden;
        }
        
        .featured-product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }
        
        .featured-product:hover img {
            transform: scale(1.05);
        }
        
        .featured-product-title {
            font-size: 13px;
            margin-bottom: 5px;
        }
        
        .featured-product-price {
            font-size: 13px;
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
        
        /* Shop Banner */
        .shop-banner {
            background-color: #f5f5f0;
            padding: 40px 0;
        }
        
        .shop-title {
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
        
        /* Color Filter Popup */
        .color-filter {
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            border: 1px solid #eee;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            padding: 15px;
            width: 200px;
            z-index: 10;
            display: none; /* Hide by default */
        }
        
        .color-filter.active {
            display: block; /* Show when active class is added */
        }
        
        .color-filter h3 {
            margin-bottom: 10px;
            font-size: 16px;
        }
        
        .color-options {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .color-option {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
        }
        
        .color-dot {
            width: 16px;
            height: 16px;
            border-radius: 50%;
        }
        
        .blue { background-color: #4169E1; }
        .grey { background-color: #808080; }
        .red { background-color: #FF6B6B; }
        .yellow { background-color: #FFD700; }
        
        /* Product Grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
        
        .product-card {
            margin-bottom: 30px;
        }
        
        .product-image {
            background-color: #f9f9f9;
            margin-bottom: 10px;
            position: relative;
            overflow: hidden;
            aspect-ratio: 1/1.2;
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
        
        .product-title {
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .product-price {
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .product-colors {
            display: flex;
            gap: 5px;
        }
        
        .product-color {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            cursor: pointer;
        }
        
        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 40px 0;
        }
        
        .page-item {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            cursor: pointer;
            font-size: 14px;
        }
        
        .page-item.active {
            background-color: #000;
            color: #fff;
        }
        
        .page-item:hover:not(.active) {
            background-color: #f5f5f5;
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
        
        @media (max-width: 992px) {
            .dropdown-menu {
                width: 600px;
            }
            
            .product-grid {
                grid-template-columns: repeat(3, 1fr);
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
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">Stilo</div>
            <nav class="nav-menu">
                <a href="#">Home</a>
                <a href="#">Shop</a>
                <div class="nav-item has-dropdown">
                    <a href="#">Products</a>
                    <!-- Products Dropdown Menu -->
                    <div class="dropdown-menu">
                        <div class="dropdown-content">
                            <div class="dropdown-column">
                                <h3>Categories</h3>
                                <div class="dropdown-links">
                                    <a href="#">T-Shirts</a>
                                    <a href="#">Sweaters</a>
                                    <a href="#">Jackets</a>
                                    <a href="#">Coats</a>
                                    <a href="#">Pants</a>
                                    <a href="#">Shorts</a>
                                    <a href="#">Accessories</a>
                                </div>
                            </div>
                            <div class="dropdown-column">
                                <h3>Collections</h3>
                                <div class="dropdown-links">
                                    <a href="#">New Arrivals</a>
                                    <a href="#">Summer Collection</a>
                                    <a href="#">Winter Essentials</a>
                                    <a href="#">Casual Wear</a>
                                    <a href="#">Formal Attire</a>
                                    <a href="#">Limited Edition</a>
                                    <a href="#">Sale Items</a>
                                </div>
                            </div>
                            <div class="dropdown-column">
                                <h3>Featured Products</h3>
                                <div class="featured-products">
                                    <div class="featured-product">
                                        <div class="featured-product-image">
                                            <img src="/placeholder.svg?height=120&width=150" alt="Featured Product 1">
                                        </div>
                                        <div class="featured-product-title">Premium Cotton Shirt</div>
                                        <div class="featured-product-price">$24.99</div>
                                    </div>
                                    <div class="featured-product">
                                        <div class="featured-product-image">
                                            <img src="/placeholder.svg?height=120&width=150" alt="Featured Product 2">
                                        </div>
                                        <div class="featured-product-title">Wool Blend Coat</div>
                                        <div class="featured-product-price">$89.99</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#">Pages</a>
                <a href="#">Blog</a>
                <a href="#">Elements</a>
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
        <div class="container">
            <h1 class="shop-title">Shop</h1>
            <div class="breadcrumb">
                <a href="#">Home</a>
                <span>/</span>
                <span>Shop</span>
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
                    <div class="filter-item" id="color-filter-toggle">
                        <span>Color</span>
                        <!-- Color Filter Popup -->
                        <div class="color-filter" id="color-filter-popup">
                            <h3>Colors</h3>
                            <div class="color-options">
                                <div class="color-option">
                                    <span class="color-dot blue"></span>
                                    <span>Blue</span>
                                </div>
                                <div class="color-option">
                                    <span class="color-dot grey"></span>
                                    <span>Grey</span>
                                </div>
                                <div class="color-option">
                                    <span class="color-dot red"></span>
                                    <span>Red</span>
                                </div>
                                <div class="color-option">
                                    <span class="color-dot yellow"></span>
                                    <span>Yellow</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item">
                        <span>Size</span>
                    </div>
                    <div class="filter-item">
                        <span>Brand</span>
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
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="/placeholder.svg?height=300&width=250" alt="Brown Jacket">
                    </div>
                    <h3 class="product-title">Lace Shirt Cut II</h3>
                    <div class="product-price">$16.00</div>
                    <div class="product-colors">
                        <span class="product-color blue"></span>
                        <span class="product-color grey"></span>
                        <span class="product-color red"></span>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="/placeholder.svg?height=300&width=250" alt="Pink Hoodie">
                    </div>
                    <h3 class="product-title">Lace Shirt Cut II</h3>
                    <div class="product-price">$16.00</div>
                    <div class="product-colors">
                        <span class="product-color blue"></span>
                        <span class="product-color grey"></span>
                        <span class="product-color red"></span>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="/placeholder.svg?height=300&width=250" alt="Black Jacket">
                    </div>
                    <h3 class="product-title">Lace Shirt Cut II</h3>
                    <div class="product-price">$16.00</div>
                    <div class="product-colors">
                        <span class="product-color blue"></span>
                        <span class="product-color grey"></span>
                        <span class="product-color red"></span>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="/placeholder.svg?height=300&width=250" alt="Blue Sweater">
                    </div>
                    <h3 class="product-title">Lace Shirt Cut II</h3>
                    <div class="product-price">$16.00</div>
                    <div class="product-colors">
                        <span class="product-color blue"></span>
                        <span class="product-color grey"></span>
                        <span class="product-color red"></span>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="/placeholder.svg?height=300&width=250" alt="Floral Jacket">
                    </div>
                    <h3 class="product-title">Lace Shirt Cut II</h3>
                    <div class="product-price">$16.00</div>
                    <div class="product-colors">
                        <span class="product-color blue"></span>
                        <span class="product-color grey"></span>
                        <span class="product-color red"></span>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="/placeholder.svg?height=300&width=250" alt="Brown Coat">
                    </div>
                    <h3 class="product-title">Lace Shirt Cut II</h3>
                    <div class="product-price">$16.00</div>
                    <div class="product-colors">
                        <span class="product-color blue"></span>
                        <span class="product-color grey"></span>
                        <span class="product-color red"></span>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="/placeholder.svg?height=300&width=250" alt="Plaid Shirt">
                    </div>
                    <h3 class="product-title">Lace Shirt Cut II</h3>
                    <div class="product-price">$16.00</div>
                    <div class="product-colors">
                        <span class="product-color blue"></span>
                        <span class="product-color grey"></span>
                        <span class="product-color red"></span>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="/placeholder.svg?height=300&width=250" alt="Beige Coat">
                    </div>
                    <h3 class="product-title">Lace Shirt Cut II</h3>
                    <div class="product-price">$16.00</div>
                    <div class="product-colors">
                        <span class="product-color blue"></span>
                        <span class="product-color grey"></span>
                        <span class="product-color red"></span>
                    </div>
                </div>

                <!-- Product 9 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="/placeholder.svg?height=300&width=250" alt="Beige Shirt">
                    </div>
                    <h3 class="product-title">Lace Shirt Cut II</h3>
                    <div class="product-price">$16.00</div>
                    <div class="product-colors">
                        <span class="product-color blue"></span>
                        <span class="product-color grey"></span>
                        <span class="product-color red"></span>
                    </div>
                </div>

                <!-- Product 10 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="/placeholder.svg?height=300&width=250" alt="Pink Shirt">
                    </div>
                    <h3 class="product-title">Lace Shirt Cut II</h3>
                    <div class="product-price">$16.00</div>
                    <div class="product-colors">
                        <span class="product-color blue"></span>
                        <span class="product-color grey"></span>
                        <span class="product-color red"></span>
                    </div>
                </div>

                <!-- Product 11 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="/placeholder.svg?height=300&width=250" alt="Beige Shorts">
                    </div>
                    <h3 class="product-title">Lace Shirt Cut II</h3>
                    <div class="product-price">$16.00</div>
                    <div class="product-colors">
                        <span class="product-color blue"></span>
                        <span class="product-color grey"></span>
                        <span class="product-color red"></span>
                    </div>
                </div>

                <!-- Product 12 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="/placeholder.svg?height=300&width=250" alt="Grey Blazer">
                    </div>
                    <h3 class="product-title">Lace Shirt Cut II</h3>
                    <div class="product-price">$16.00</div>
                    <div class="product-colors">
                        <span class="product-color blue"></span>
                        <span class="product-color grey"></span>
                        <span class="product-color red"></span>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <div class="page-item active">1</div>
                <div class="page-item">2</div>
                <div class="page-item">3</div>
                <div class="page-item">4</div>
                <div class="page-item">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
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
                    <p>©2023 July. All rights reserved</p>
                </div>
                <div class="footer-right">
                    <div class="payment-methods">
                        <div class="payment-icon">VISA</div>
                        <div class="payment-icon">MC</div>
                        <div class="payment-icon">AMEX</div>
                        <div class="payment-icon">PP</div>
                    </div>
                    <div class="language-selector">
                        <div class="selector">EN</div>
                        <div class="selector">USD</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript for toggling color filter -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const colorFilterToggle = document.getElementById('color-filter-toggle');
            const colorFilterPopup = document.getElementById('color-filter-popup');
            
            // Toggle color filter popup when clicking on the color filter item
            colorFilterToggle.addEventListener('click', function(e) {
                colorFilterPopup.classList.toggle('active');
                e.stopPropagation(); // Prevent the click from bubbling up to the document
            });
            
            // Close color filter popup when clicking outside of it
            document.addEventListener('click', function(e) {
                if (!colorFilterToggle.contains(e.target)) {
                    colorFilterPopup.classList.remove('active');
                }
            });
        });
    </script>
</body>
</html>