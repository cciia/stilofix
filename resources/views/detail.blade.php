@php
    use Illuminate\Support\Str;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->nama_produk }} - stilo</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        .header {
            background: white;
            border-bottom: 1px solid #e5e5e5;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 64px;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .logo {
            font-size: 20px;
            font-weight: 700;
            text-decoration: none;
            color: #333;
        }

        .nav {
            display: flex;
            gap: 24px;
        }

        .nav-link {
            text-decoration: none;
            color: #666;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.2s;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #333;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .icon-btn {
            background: none;
            border: none;
            padding: 8px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.2s;
        }

        .icon-btn:hover {
            background-color: #f5f5f5;
        }

        .cart-btn {
            position: relative;
        }

        .cart-badge {
            position: absolute;
            top: 0;
            right: 0;
            background: #333;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Back to Home Button */
        .back-to-home {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 10px;
            background: #333;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s;
            margin-bottom: 10px;
            margin-top: 20px;
        }

        .back-to-home:hover {
            background: #555;
            transform: translateX(-2px);
        }

        /* Breadcrumb */
        .breadcrumb {
            padding: 20px 0;
            font-size: 14px;
            color: #666;
        }

        .breadcrumb a {
            color: #666;
            text-decoration: none;
            transition: color 0.2s;
        }

        .breadcrumb a:hover {
            color: #333;
        }

        .breadcrumb span {
            margin: 0 8px;
        }

        /* Product Section */
        .product-section {
            padding: 40px 0;
        }

        .product-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            margin-bottom: 60px;
        }

        /* Product Images - Modified for single image */
        .product-images {
            display: flex;
            justify-content: center;
        }

        .main-image {
            width: 100%;
            height: 600px;
            background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            color: #999;
            position: relative;
            overflow: hidden;
        }

        .main-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
        }

        .zoom-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.2s;
        }

        .zoom-btn:hover {
            transform: scale(1.1);
        }

        /* Product Info */
        .product-info {
            padding-top: 20px;
        }

        .product-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 12px;
            color: #333;
        }

        .product-price {
            font-size: 24px;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }

        .price-original {
            font-size: 18px;
            color: #999;
            text-decoration: line-through;
            margin-left: 12px;
        }

        .discount-badge {
            display: inline-block;
            background: #ef4444;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
            margin-left: 12px;
        }

        .product-rating {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
        }

        .stars {
            display: flex;
            gap: 2px;
        }

        .star {
            color: #fbbf24;
            font-size: 16px;
        }

        .star.empty {
            color: #e5e5e5;
        }

        .rating-text {
            font-size: 14px;
            color: #666;
        }

        .product-description {
            font-size: 16px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 32px;
        }

        /* Product Options */
        .product-options {
            margin-bottom: 32px;
        }

        .option-group {
            margin-bottom: 24px;
        }

        .option-label {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 12px;
            color: #333;
        }

        .color-options {
            display: flex;
            gap: 12px;
        }

        .color-option {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            border: 3px solid transparent;
            transition: all 0.2s;
            position: relative;
        }

        .color-option:hover {
            transform: scale(1.1);
        }

        .color-option.selected {
            border-color: #333;
            transform: scale(1.1);
        }

        .color-option.brown { background-color: #92400e; }
        .color-option.blue { background-color: #3b82f6; }
        .color-option.black { background-color: #1f2937; }
        .color-option.grey { background-color: #6b7280; }
        .color-option.red { background-color: #ef4444; }

        .size-options {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .size-option {
            padding: 12px 20px;
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s;
            min-width: 50px;
            text-align: center;
            background: white;
        }

        .size-option:hover {
            border-color: #333;
            background: #f8f9fa;
        }

        .size-option.selected {
            background: #333;
            color: white;
            border-color: #333;
        }

        .size-option.unavailable {
            background: #f5f5f5;
            color: #999;
            cursor: not-allowed;
            position: relative;
        }

        .size-option.unavailable::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 10%;
            right: 10%;
            height: 1px;
            background: #999;
            transform: rotate(-15deg);
        }

        /* Quantity & Actions */
        .quantity-section {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 32px;
            flex-wrap: wrap;
        }

        .quantity-label {
            font-size: 16px;
            font-weight: 600;
            color: #333;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            overflow: hidden;
            background: white;
        }

        .quantity-btn {
            background: none;
            border: none;
            padding: 12px 16px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.2s;
            font-weight: 600;
        }

        .quantity-btn:hover {
            background: #f5f5f5;
        }

        .quantity-input {
            border: none;
            padding: 12px 16px;
            width: 60px;
            text-align: center;
            font-size: 16px;
            background: #f8f9fa;
            font-weight: 500;
        }

        .stock-info {
            font-size: 14px;
            color: #10b981;
            font-weight: 500;
        }

        .stock-info.low {
            color: #f59e0b;
        }

        .stock-info.out {
            color: #ef4444;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 16px;
            margin-bottom: 32px;
        }

        .btn {
            padding: 16px 32px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-primary {
            background: #333;
            color: white;
            flex: 1;
        }

        .btn-primary:hover {
            background: #555;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: transparent;
            color: #333;
            border: 1px solid #e5e5e5;
            flex: 1;
        }

        .btn-secondary:hover {
            background: #f5f5f5;
            border-color: #333;
        }

        .btn-icon {
            background: transparent;
            color: #666;
            border: 1px solid #e5e5e5;
            padding: 16px;
            width: 56px;
        }

        .btn-icon:hover {
            background: #f5f5f5;
            color: #333;
            border-color: #333;
        }

        .btn-buy-now {
            background: #10b981;
            color: white;
            flex: 1;
        }

        .btn-buy-now:hover {
            background: #059669;
            transform: translateY(-2px);
        }

        /* Product Features */
        .product-features {
            border-top: 1px solid #e5e5e5;
            padding-top: 32px;
        }

        .feature-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 16px;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .feature-icon {
            width: 32px;
            height: 32px;
            background: #333;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            flex-shrink: 0;
        }

        .feature-text {
            font-size: 14px;
            color: #666;
            font-weight: 500;
        }

        /* Product Tabs */
        .product-tabs {
            margin-top: 60px;
        }

        .tab-nav {
            display: flex;
            border-bottom: 1px solid #e5e5e5;
            margin-bottom: 32px;
            overflow-x: auto;
        }

        .tab-btn {
            background: none;
            border: none;
            padding: 16px 24px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            color: #666;
            border-bottom: 2px solid transparent;
            transition: all 0.2s;
            white-space: nowrap;
        }

        .tab-btn:hover,
        .tab-btn.active {
            color: #333;
            border-bottom-color: #333;
        }

        .tab-content {
            display: none;
            animation: fadeIn 0.3s ease-in;
        }

        .tab-content.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .tab-content h3 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 16px;
        }

        .tab-content p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 16px;
        }

        .tab-content ul {
            margin-left: 20px;
            color: #666;
        }

        .tab-content li {
            margin-bottom: 8px;
        }

        .size-chart {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .size-chart th,
        .size-chart td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid #e5e5e5;
        }

        .size-chart th {
            background: #f8f9fa;
            font-weight: 600;
            color: #333;
        }

        .size-chart tr:last-child td {
            border-bottom: none;
        }

        .size-chart tr:hover {
            background: #f8f9fa;
        }

        /* Reviews */
        .review-item {
            margin-top: 20px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid #333;
        }

        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 8px;
        }

        .reviewer-name {
            font-weight: 600;
            color: #333;
        }

        .review-rating {
            color: #fbbf24;
        }

        .review-text {
            color: #666;
            font-style: italic;
            line-height: 1.6;
        }

        /* Related Products */
        .related-products {
            margin-top: 80px;
            padding-top: 40px;
            border-top: 1px solid #e5e5e5;
        }

        .section-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 32px;
            text-align: center;
        }

        .related-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 32px;
        }

        .related-item {
            cursor: pointer;
            transition: transform 0.2s;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .related-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
        }

        .related-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-size: 14px;
        }

        .related-content {
            padding: 16px;
        }

        .related-name {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 4px;
            color: #333;
        }

        .related-price {
            font-size: 14px;
            color: #666;
            font-weight: 600;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .product-container {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .main-image {
                height: 400px;
            }

            .product-title {
                font-size: 24px;
            }

            .action-buttons {
                flex-direction: column;
            }

            .nav {
                display: none;
            }

            .feature-list {
                grid-template-columns: 1fr;
            }

            .related-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }

            .quantity-section {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }

            .tab-nav {
                justify-content: flex-start;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 16px;
            }

            .color-options,
            .size-options {
                flex-wrap: wrap;
            }

            .related-grid {
                grid-template-columns: 1fr;
            }

            .product-price {
                font-size: 20px;
            }

            .btn {
                padding: 14px 24px;
                font-size: 14px;
            }
        }

        /* Notification */
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background: #10b981;
            color: white;
            padding: 16px 24px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transform: translateX(100%);
            transition: transform 0.3s;
            z-index: 1000;
        }

        .notification.show {
            transform: translateX(0);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="header-left">
                    <a href="#" class="logo">Stilo</a>
                    <nav class="nav">
                        <a href="/" class="nav-link">Home</a>
                        <a href="{{ route('about') }}" class="nav-link">About</a>
                        <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                        <a href="{{ route('elements') }}" class="nav-link">Elements</a>
                    </nav>
                </div>
                <div class="header-right">
                    <button class="icon-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.35-4.35"></path>
                        </svg>
                    </button>
                    <button class="icon-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </button>
                    <button class="icon-btn cart-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg>
                        <span class="cart-badge">0</span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Back to Home Button -->
    <div class="container">
        <a href="/" class="back-to-home">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M19 12H5M12 19l-7-7 7-7"/>
            </svg>
            Kembali
        </a>
    </div>

   <!-- Breadcrumb -->
    <div class="container">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="#">{{ $product->kategori ?? 'Kategori Tidak Diketahui' }}</a>
            <span>/</span>
            <span>{{ $product->nama_produk }}</span>
        </div>
    </div>
    
    <!-- Product Section -->
    <section class="product-section">
        <div class="container">
            <div class="product-container">
                <div class="product-images">
                    <div class="main-image">
                        @if(isset($product->image) && $product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->nama_produk }}">
                        @else
                            Main Product Image
                        @endif
                        <button class="zoom-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="11" cy="11" r="8"></circle>
                                <path d="m21 21-4.35-4.35"></path>
                                <path d="M11 8v6M8 11h6"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="product-info">
                    <h1 class="product-title">{{ $product->nama_produk }}</h1>

                    <div class="product-price">
                        Rp{{ number_format($product->harga) }}
                        <span class="discount-badge">20% OFF</span>
                    </div>

                    <div class="product-rating">
                        <div class="stars">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star empty">★</span>
                        </div>
                        <span class="rating-text">4.0 (128 reviews)</span>
                    </div>
                    <p class="product-description">
                        {{ \Illuminate\Support\Str::words($product->deskripsi, 20, '...') }}
                    </p>

                    <!-- Product Options -->
                    <div class="product-options">
                        <div class="option-group">
                            <div class="option-label">Color</div>
                            <div class="color-options">
                                <div class="color-option brown selected"></div>
                                <div class="color-option blue"></div>
                                <div class="color-option black"></div>
                                <div class="color-option grey"></div>
                                <div class="color-option red"></div>
                            </div>
                        </div>

                    <!-- Quantity -->
                        <div class="quantity-section">
                            <span class="quantity-label">Quantity</span>
                            <div class="quantity-controls">
                                <button class="quantity-btn" id="decreaseBtn">-</button>
                                <input type="number" class="quantity-input" id="quantityInput" value="1" min="1" max="3" readonly>
                                <button class="quantity-btn" id="increaseBtn">+</button>
                            </div>
                            <span class="stock-info">
                                {{ $product->status === 'Tersedia' ? 'In stock' : 'Out of stock' }}
                            </span>
                        </div>

                        <!-- Action Buttons -->
                        <div class="action-buttons">
                            <a 
                            href="https://web.whatsapp.com/send?phone=6282131447400&text={{ urlencode('Halo, saya mau beli produk ' . $product->nama_produk . '. Apakah masih tersedia? Saya ingin beli.') }}" 
                            class="btn btn-buy-now" 
                            target="_blank">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                Chat & Beli Via Whatsapp
                            </a>
                            <button class="btn btn-secondary">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                                </svg>
                                Add to Cart
                            </button>
                            <button class="btn btn-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                </svg>
                            </button>
                        </div>

                    <!-- Product Features -->
                    <div class="product-features">
                        <div class="feature-list">
                            <div class="feature-item">
                                <div class="feature-icon">🚚</div>
                                <span class="feature-text">Free shipping on orders over Rp 50.000</span>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">↩</div>
                                <span class="feature-text">30-day return policy</span>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">🔒</div>
                                <span class="feature-text">Secure payment</span>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">📞</div>
                                <span class="feature-text">24/7 customer support</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Tabs -->
            <div class="product-tabs">
                <div class="tab-nav">
                    <button class="tab-btn active">Description</button> 
                    <button class="tab-btn">Care Instructions</button>
                    <button class="tab-btn">Reviews (128)</button>
                </div>

                <div class="tab-content active">
                    <h3>Product Description</h3>
                    @foreach(explode('|', $product->deskripsi) as $desc)
                    <p>{{ $desc }}</p>
                    @endforeach
                </div>

                <div class="tab-content">
                    <h3>Care Instructions</h3>
                    <p>To maintain the quality and longevity of your product:</p>
                    <ul>
                        <li>Machine wash cold with like colors</li>
                        <li>Use mild detergent</li>
                        <li>Tumble dry low heat</li>
                        <li>Iron on medium heat if needed</li>
                        <li>Do not bleach</li>
                        <li>Do not dry clean</li>
                        <li>Wash inside out to preserve color</li>
                    </ul>
                </div>

                <div class="tab-content">
                    <h3>Customer Reviews</h3>
                    <p>See what our customers are saying about this product:</p>
                    
                    <div class="review-item">
                        <div class="review-header">
                            <span class="reviewer-name">Sarah M.</span>
                            <span class="review-rating">⭐⭐⭐⭐⭐</span>
                        </div>
                        <p class="review-text">"Perfect fit and great quality! The fabric is so soft and comfortable. I've washed it several times and it still looks brand new."</p>
                    </div>

                    <div class="review-item">
                        <div class="review-header">
                            <span class="reviewer-name">Mike R.</span>
                            <span class="review-rating">⭐⭐⭐⭐⭐</span>
                        </div>
                        <p class="review-text">"Excellent product for the price. Washes well and maintains its shape. The color is exactly as shown in the pictures."</p>
                    </div>

                    <div class="review-item">
                        <div class="review-header">
                            <span class="reviewer-name">Jessica L.</span>
                            <span class="review-rating">⭐⭐⭐⭐☆</span>
                        </div>
                        <p class="review-text">"Good quality product, fits true to size. Only wish there were more color options available. Fast shipping too!"</p>
                    </div>
                </div>
            </div>

           <!-- Related Products -->
            <div class="related-products">
                <h2 class="section-title">You Might Also Like</h2>
                <div class="related-grid">
                    @if(isset($relatedProducts))
                        @foreach($relatedProducts as $related)
                            <div class="related-item">
                                <div class="related-image">
                                    @if(isset($related->image) && $related->image)
                                        <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->nama_produk }}">
                                    @else
                                        Product Image
                                    @endif
                                </div>
                                <div class="related-content">
                                    <div class="related-name">{{ $related->nama_produk }}</div>
                                    <div class="related-price">Rp{{ number_format($related->harga) }}</div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
</body>
</html>