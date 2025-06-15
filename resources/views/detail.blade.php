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

        /* Product Images */
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
            font-size: 24px;
            font-weight: 700;
            text-align: center;
            border: 3px solid #dc3545;
            z-index: 2;
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

        .product-title.unavailable {
            color: #6c757d;
        }

        .product-price {
            font-size: 24px;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }

        .product-price.unavailable {
            color: #6c757d;
            text-decoration: line-through;
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

        /* Product Description - Short version */
        .product-description {
            font-size: 16px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 32px;
            background: #f8f9fa;
            padding: 16px 20px;
            border-radius: 8px;
            border-left: 4px solid #333;
        }

        .product-description p {
            margin-bottom: 0;
        }

        /* Stock Info */
        .stock-section {
            margin-bottom: 32px;
            padding: 16px;
            border-radius: 8px;
            text-align: center;
        }

        .stock-section.available {
            background: #d1fae5;
            color: #065f46;
            border: 1px solid #10b981;
        }

        .stock-section.unavailable {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #ef4444;
        }

        .stock-text {
            font-size: 18px;
            font-weight: 600;
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

        .btn-disabled {
            background: #f5f5f5;
            color: #999;
            cursor: not-allowed;
            flex: 1;
        }

        .btn-disabled:hover {
            background: #f5f5f5;
            transform: none;
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
            text-decoration: none;
            color: inherit;
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
            overflow: hidden;
        }

        .related-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Removed zoom effect */
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

            .tab-nav {
                justify-content: flex-start;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 16px;
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
                        @if(isset($product->gambar) && $product->gambar)
                            <img src="{{ $product->gambar }}" alt="{{ $product->nama_produk }}">
                            @if($product->status == 'Tidak Tersedia')
                                <div class="tidak-tersedia-overlay">
                                    TIDAK TERSEDIA
                                </div>
                            @endif
                        @else
                            <div style="color: #999; font-size: 18px;">Main Product Image</div>
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
                    <h1 class="product-title {{ $product->status == 'Tidak Tersedia' ? 'unavailable' : '' }}">{{ $product->nama_produk }}</h1>

                    <div class="product-price {{ $product->status == 'Tidak Tersedia' ? 'unavailable' : '' }}">
                        Rp{{ number_format($product->harga) }}
                        @if($product->status == 'Tersedia')
                            <span class="discount-badge">20% OFF</span>
                        @endif
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

                    <!-- Short Description -->
                    <div class="product-description">
                        @if($product->deskripsi)
                            <p>{{ \Illuminate\Support\Str::words($product->deskripsi, 8, '...') }}</p>
                        @else
                            <p>Deskripsi produk tidak tersedia.</p>
                        @endif
                    </div>

                    <!-- Stock Status -->
                    <div class="stock-section {{ $product->status == 'Tersedia' ? 'available' : 'unavailable' }}">
                        <div class="stock-text">
                            {{ $product->status == 'Tersedia' ? '✓ Tersedia' : '✗ Tidak Tersedia' }}
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="action-buttons">
                        @if($product->status == 'Tersedia')
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
                        @else
                            <button class="btn btn-disabled" disabled>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="15" y1="9" x2="9" y2="15"></line>
                                    <line x1="9" y1="9" x2="15" y2="15"></line>
                                </svg>
                                Tidak Tersedia
                            </button>
                        @endif
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
                    @if($product->deskripsi)
                        @foreach(explode('.', $product->deskripsi) as $sentence)
                            @if(trim($sentence))
                                <p>{{ trim($sentence) }}.</p>
                            @endif
                        @endforeach
                    @else
                        <p>Deskripsi produk tidak tersedia.</p>
                    @endif
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
                        <a href="{{ route('products.show', $related->id) }}" class="related-item">
                            <div class="related-image">
                                @if(isset($related->gambar) && $related->gambar)
                                    <img src="{{ $related->gambar }}" alt="{{ $related->nama_produk }}">
                                @else
                                    Product Image
                                @endif
                            </div>
                            <div class="related-content">
                                <div class="related-name">{{ $related->nama_produk }}</div>
                                <div class="related-price">Rp{{ number_format($related->harga) }}</div>
                            </div>
                        </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    <script>
        // Tab functionality
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all tabs and contents
                document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
                
                // Add active class to clicked tab
                btn.classList.add('active');
                
                // Show corresponding content
                const index = Array.from(document.querySelectorAll('.tab-btn')).indexOf(btn);
                document.querySelectorAll('.tab-content')[index].classList.add('active');
            });
        });
    </script>
</body>
</html>