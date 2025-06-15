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
        
        /* Elements Content */
        .elements-content {
            padding: 60px 0;
        }
        
        .section {
            margin-bottom: 80px;
        }
        
        .section-title {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 30px;
            text-align: center;
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
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .style-card h3 {
            margin-bottom: 20px;
            font-size: 20px;
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
        }
        
        .color-name {
            font-size: 14px;
            font-weight: 500;
        }
        
        .color-code {
            font-size: 12px;
            color: #666;
        }
        
        /* Primary Colors */
        .primary-black { background-color: #000; }
        .primary-white { background-color: #fff; border: 1px solid #ddd; }
        .primary-grey { background-color: #666; }
        
        /* Accent Colors */
        .accent-blue { background-color: #4169E1; }
        .accent-red { background-color: #FF6B6B; }
        .accent-green { background-color: #4CAF50; }
        
        /* Typography */
        .typography-examples {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .typography-item {
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }
        
        .typography-item:last-child {
            border-bottom: none;
        }
        
        .typography-label {
            font-size: 12px;
            color: #666;
            margin-bottom: 5px;
        }
        
        .heading-1 { font-size: 36px; font-weight: 700; }
        .heading-2 { font-size: 28px; font-weight: 600; }
        .heading-3 { font-size: 24px; font-weight: 600; }
        .body-text { font-size: 16px; font-weight: 400; }
        .small-text { font-size: 14px; font-weight: 400; }
        
        /* Outfit Components */
        .outfit-components {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .component-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .component-card:hover {
            transform: translateY(-5px);
        }
        
        .component-image {
            height: 200px;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
        }
        
        .component-content {
            padding: 20px;
        }
        
        .component-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .component-description {
            color: #666;
            font-size: 14px;
        }
        
        /* Style Collections */
        .style-collections {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .collection-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .collection-card:hover {
            transform: translateY(-5px);
        }
        
        .collection-image {
            height: 250px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
        }
        
        .collection-description {
            color: #666;
            margin-bottom: 15px;
        }
        
        .collection-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #000;
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
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .ui-card h3 {
            margin-bottom: 20px;
            font-size: 18px;
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
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s;
            text-align: center;
            display: inline-block;
        }
        
        .btn-primary {
            background-color: #000;
            color: #fff;
        }
        
        .btn-primary:hover {
            background-color: #333;
        }
        
        .btn-secondary {
            background-color: transparent;
            color: #000;
            border: 1px solid #000;
        }
        
        .btn-secondary:hover {
            background-color: #000;
            color: #fff;
        }
        
        .btn-outline {
            background-color: transparent;
            color: #666;
            border: 1px solid #ddd;
        }
        
        .btn-outline:hover {
            background-color: #f5f5f5;
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
        }
        
        .form-input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #000;
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
            background-color: #f5f5f5;
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
            .outfit-components,
            .style-collections,
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

    <!-- Page Banner -->
    <section class="page-banner">
        <div class="container">
            <h1 class="page-title">Elements</h1>
            <div class="breadcrumb">
                <a href="index.html">Home</a>
                <span>/</span>
                <span>Elements</span>
            </div>
        </div>
    </section>

    <!-- Elements Content -->
    <section class="elements-content">
        <div class="container">
            <!-- Style Guide Section -->
            <div class="section">
                <h2 class="section-title">Style Guide</h2>
                <div class="style-guide">
                    <!-- Color Palette -->
                    <div class="style-card">
                        <h3>Color Palette</h3>
                        <div class="color-palette">
                            <div class="color-item">
                                <div class="color-swatch primary-black"></div>
                                <div class="color-name">Primary Black</div>
                                <div class="color-code">#000000</div>
                            </div>
                            <div class="color-item">
                                <div class="color-swatch primary-white"></div>
                                <div class="color-name">Primary White</div>
                                <div class="color-code">#FFFFFF</div>
                            </div>
                            <div class="color-item">
                                <div class="color-swatch primary-grey"></div>
                                <div class="color-name">Primary Grey</div>
                                <div class="color-code">#666666</div>
                            </div>
                            <div class="color-item">
                                <div class="color-swatch accent-blue"></div>
                                <div class="color-name">Accent Blue</div>
                                <div class="color-code">#4169E1</div>
                            </div>
                            <div class="color-item">
                                <div class="color-swatch accent-red"></div>
                                <div class="color-name">Accent Red</div>
                                <div class="color-code">#FF6B6B</div>
                            </div>
                            <div class="color-item">
                                <div class="color-swatch accent-green"></div>
                                <div class="color-name">Accent Green</div>
                                <div class="color-code">#4CAF50</div>
                            </div>
                        </div>
                    </div>

                    <!-- Typography -->
                    <div class="style-card">
                        <h3>Typography</h3>
                        <div class="typography-examples">
                            <div class="typography-item">
                                <div class="typography-label">Heading 1 - 36px Bold</div>
                                <div class="heading-1">The quick brown fox</div>
                            </div>
                            <div class="typography-item">
                                <div class="typography-label">Heading 2 - 28px Semibold</div>
                                <div class="heading-2">The quick brown fox</div>
                            </div>
                            <div class="typography-item">
                                <div class="typography-label">Heading 3 - 24px Semibold</div>
                                <div class="heading-3">The quick brown fox</div>
                            </div>
                            <div class="typography-item">
                                <div class="typography-label">Body Text - 16px Regular</div>
                                <div class="body-text">The quick brown fox jumps over the lazy dog</div>
                            </div>
                            <div class="typography-item">
                                <div class="typography-label">Small Text - 14px Regular</div>
                                <div class="small-text">The quick brown fox jumps over the lazy dog</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Outfit Components Section -->
            <div class="section">
                <h2 class="section-title">Outfit Components</h2>
                <div class="outfit-components">
                    <div class="component-card">
                        <div class="component-image">👕</div>
                        <div class="component-content">
                            <h3 class="component-title">Tops</h3>
                            <p class="component-description">T-shirts, shirts, blouses, sweaters, and all upper body garments.</p>
                        </div>
                    </div>
                    <div class="component-card">
                        <div class="component-image">👖</div>
                        <div class="component-content">
                            <h3 class="component-title">Bottoms</h3>
                            <p class="component-description">Pants, jeans, shorts, skirts, and all lower body garments.</p>
                        </div>
                    </div>
                    <div class="component-card">
                        <div class="component-image">🧥</div>
                        <div class="component-content">
                            <h3 class="component-title">Outerwear</h3>
                            <p class="component-description">Jackets, coats, blazers, and all outer layer garments.</p>
                        </div>
                    </div>
                    <div class="component-card">
                        <div class="component-image">👟</div>
                        <div class="component-content">
                            <h3 class="component-title">Footwear</h3>
                            <p class="component-description">Shoes, boots, sneakers, and all types of footwear.</p>
                        </div>
                    </div>
                    <div class="component-card">
                        <div class="component-image">👜</div>
                        <div class="component-content">
                            <h3 class="component-title">Accessories</h3>
                            <p class="component-description">Bags, belts, jewelry, hats, and all fashion accessories.</p>
                        </div>
                    </div>
                    <div class="component-card">
                        <div class="component-image">🕶️</div>
                        <div class="component-content">
                            <h3 class="component-title">Eyewear</h3>
                            <p class="component-description">Sunglasses, glasses, and all types of eyewear accessories.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Style Collections Section -->
            <div class="section">
                <h2 class="section-title">Style Collections</h2>
                <div class="style-collections">
                    <div class="collection-card">
                        <div class="collection-image">STREETWEAR</div>
                        <div class="collection-content">
                            <h3 class="collection-title">Streetwear</h3>
                            <p class="collection-description">Urban-inspired fashion with a focus on comfort and contemporary style. Perfect for casual everyday wear.</p>
                            <a href="#" class="collection-link">
                                Explore Collection
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="collection-card">
                        <div class="collection-image">CASUAL</div>
                        <div class="collection-content">
                            <h3 class="collection-title">Casual</h3>
                            <p class="collection-description">Relaxed and comfortable pieces for everyday activities. Effortless style that doesn't compromise on quality.</p>
                            <a href="#" class="collection-link">
                                Explore Collection
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="collection-card">
                        <div class="collection-image">FORMAL</div>
                        <div class="collection-content">
                            <h3 class="collection-title">Formal</h3>
                            <p class="collection-description">Sophisticated and elegant pieces for professional and special occasions. Timeless designs with modern touches.</p>
                            <a href="#" class="collection-link">
                                Explore Collection
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="collection-card">
                        <div class="collection-image">VINTAGE</div>
                        <div class="collection-content">
                            <h3 class="collection-title">Vintage</h3>
                            <p class="collection-description">Classic styles with a nostalgic touch. Timeless pieces that never go out of fashion.</p>
                            <a href="#" class="collection-link">
                                Explore Collection
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="collection-card">
                        <div class="collection-image">MINIMALIST</div>
                        <div class="collection-content">
                            <h3 class="collection-title">Minimalist</h3>
                            <p class="collection-description">Clean lines and simple designs. Less is more philosophy with focus on quality and functionality.</p>
                            <a href="#" class="collection-link">
                                Explore Collection
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="collection-card">
                        <div class="collection-image">BOHEMIAN</div>
                        <div class="collection-content">
                            <h3 class="collection-title">Bohemian</h3>
                            <p class="collection-description">Free-spirited and artistic styles with flowing fabrics and unique patterns. Express your creativity.</p>
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
                            <button class="btn btn-primary">Primary Button</button>
                            <button class="btn btn-secondary">Secondary Button</button>
                            <button class="btn btn-outline">Outline Button</button>
                        </div>
                    </div>

                    <!-- Form Elements -->
                    <div class="ui-card">
                        <h3>Form Elements</h3>
                        <div class="form-examples">
                            <div class="form-group">
                                <label class="form-label">Text Input</label>
                                <input type="text" class="form-input" placeholder="Enter text here">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email Input</label>
                                <input type="email" class="form-input" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Select Dropdown</label>
                                <select class="form-input">
                                    <option>Choose an option</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
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
                                <span class="icon-name">User</span>
                            </div>
                            <div class="icon-item">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                </svg>
                                <span class="icon-name">Heart</span>
                            </div>
                            <div class="icon-item">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                                </svg>
                                <span class="icon-name">Cart</span>
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
</body>
</html>