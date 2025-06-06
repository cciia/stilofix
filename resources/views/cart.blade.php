<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - stilo</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
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
            background: #f8f9fa;
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

        /* Breadcrumb */
        .breadcrumb {
            background: white;
            padding: 20px 0;
            font-size: 14px;
            color: #666;
            border-bottom: 1px solid #e5e5e5;
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

        /* Cart Section */
        .cart-section {
            padding: 40px 0;
        }

        .cart-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 32px;
            color: #333;
        }

        .cart-container {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        /* Cart Items */
        .cart-items {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .cart-items-header {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr auto;
            gap: 20px;
            padding: 16px 0;
            border-bottom: 1px solid #e5e5e5;
            margin-bottom: 20px;
            font-weight: 600;
            color: #666;
            font-size: 14px;
            text-transform: uppercase;
        }

        .cart-item {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr auto;
            gap: 20px;
            align-items: center;
            padding: 20px 0;
            border-bottom: 1px solid #f5f5f5;
            transition: background-color 0.2s;
        }

        .cart-item:hover {
            background: #f8f9fa;
            border-radius: 8px;
            margin: 0 -12px;
            padding: 20px 12px;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .item-info {
            display: flex;
            gap: 16px;
            align-items: center;
        }

        .item-image {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            color: #999;
            flex-shrink: 0;
        }

        .item-details h3 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 4px;
            color: #333;
        }

        .item-details p {
            font-size: 14px;
            color: #666;
            margin-bottom: 2px;
        }

        .item-price {
            font-size: 16px;
            font-weight: 600;
            color: #333;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            border: 1px solid #e5e5e5;
            border-radius: 6px;
            overflow: hidden;
            background: white;
            width: fit-content;
        }

        .quantity-btn {
            background: none;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.2s;
            font-weight: 600;
            color: #666;
        }

        .quantity-btn:hover {
            background: #f5f5f5;
            color: #333;
        }

        .quantity-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .quantity-input {
            border: none;
            padding: 8px 12px;
            width: 50px;
            text-align: center;
            font-size: 14px;
            background: #f8f9fa;
            font-weight: 500;
        }

        .item-total {
            font-size: 16px;
            font-weight: 600;
            color: #333;
        }

        .remove-btn {
            background: none;
            border: none;
            color: #ef4444;
            cursor: pointer;
            padding: 8px;
            border-radius: 4px;
            transition: all 0.2s;
        }

        .remove-btn:hover {
            background: #fef2f2;
            transform: scale(1.1);
        }

        /* Cart Summary */
        .cart-summary {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            height: fit-content;
            position: sticky;
            top: 100px;
        }

        .summary-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #f5f5f5;
        }

        .summary-row:last-child {
            border-bottom: none;
            border-top: 2px solid #e5e5e5;
            margin-top: 12px;
            padding-top: 16px;
            font-weight: 700;
            font-size: 18px;
        }

        .summary-label {
            color: #666;
            font-size: 14px;
        }

        .summary-value {
            font-weight: 600;
            color: #333;
        }

        .shipping-options {
            margin: 20px 0;
        }

        .shipping-option {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 0;
        }

        .shipping-option input[type="radio"] {
            margin: 0;
        }

        .shipping-option label {
            font-size: 14px;
            color: #666;
            cursor: pointer;
            flex: 1;
        }

        .promo-code {
            margin: 20px 0;
        }

        .promo-input {
            display: flex;
            gap: 8px;
            margin-top: 8px;
        }

        .promo-input input {
            flex: 1;
            padding: 12px;
            border: 1px solid #e5e5e5;
            border-radius: 6px;
            font-size: 14px;
        }

        .promo-input button {
            padding: 12px 16px;
            background: #333;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            transition: background-color 0.2s;
        }

        .promo-input button:hover {
            background: #555;
        }

        /* Action Buttons */
        .cart-actions {
            display: flex;
            gap: 16px;
            margin-top: 24px;
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
        }

        .btn-secondary:hover {
            background: #f5f5f5;
            border-color: #333;
        }

        /* Empty Cart */
        .empty-cart {
            text-align: center;
            padding: 80px 20px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .empty-cart-icon {
            width: 120px;
            height: 120px;
            background: #f5f5f5;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            font-size: 48px;
            color: #999;
        }

        .empty-cart h2 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 12px;
            color: #333;
        }

        .empty-cart p {
            font-size: 16px;
            color: #666;
            margin-bottom: 32px;
        }

        /* Continue Shopping */
        .continue-shopping {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-top: 32px;
        }

        .continue-shopping h3 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 16px;
            color: #333;
        }

        .suggested-products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .suggested-item {
            cursor: pointer;
            transition: transform 0.2s;
            background: #f8f9fa;
            border-radius: 8px;
            overflow: hidden;
        }

        .suggested-item:hover {
            transform: translateY(-2px);
        }

        .suggested-image {
            width: 100%;
            height: 150px;
            background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-size: 12px;
        }

        .suggested-content {
            padding: 12px;
        }

        .suggested-name {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 4px;
            color: #333;
        }

        .suggested-price {
            font-size: 14px;
            color: #666;
            font-weight: 600;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .cart-container {
                grid-template-columns: 1fr;
                gap: 24px;
            }

            .cart-items-header {
                display: none;
            }

            .cart-item {
                grid-template-columns: 1fr;
                gap: 16px;
                padding: 20px;
                background: #f8f9fa;
                border-radius: 8px;
                margin-bottom: 16px;
                border: none;
            }

            .cart-item:hover {
                margin-bottom: 16px;
            }

            .item-info {
                grid-column: 1;
            }

            .item-price,
            .quantity-controls,
            .item-total {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .item-price::before {
                content: "Price: ";
                color: #666;
                font-weight: 500;
            }

            .quantity-controls::before {
                content: "Quantity: ";
                color: #666;
                font-weight: 500;
            }

            .item-total::before {
                content: "Total: ";
                color: #666;
                font-weight: 500;
            }

            .remove-btn {
                justify-self: end;
            }

            .nav {
                display: none;
            }

            .cart-actions {
                flex-direction: column;
            }

            .suggested-products {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 16px;
            }

            .cart-title {
                font-size: 24px;
            }

            .suggested-products {
                grid-template-columns: 1fr;
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

        .notification.error {
            background: #ef4444;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="header-left">
                    <a href="#" class="logo">Guza</a>
                    <nav class="nav">
                        <a href="#" class="nav-link">Home</a>
                        <a href="#" class="nav-link">Shop</a>
                        <a href="#" class="nav-link">Products</a>
                        <a href="#" class="nav-link">Pages</a>
                        <a href="#" class="nav-link">Blog</a>
                        <a href="#" class="nav-link">Elements</a>
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
                        <span class="cart-badge" id="cartBadge">3</span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <div class="container">
            <a href="#">Home</a>
            <span>/</span>
            <a href="#">Shop</a>
            <span>/</span>
            <span>Shopping Cart</span>
        </div>
    </div>

    <!-- Cart Section -->
    <section class="cart-section">
        <div class="container">
            <h1 class="cart-title">Shopping Cart</h1>
            
            <div id="cartContent">
                <div class="cart-container">
                    <!-- Cart Items -->
                    <div class="cart-items">
                        <div class="cart-items-header">
                            <div>Product</div>
                            <div>Price</div>
                            <div>Quantity</div>
                            <div>Total</div>
                            <div></div>
                        </div>
                        
                        <div id="cartItemsList">
                            <!-- Cart items will be populated by JavaScript -->
                        </div>
                    </div>

                    <!-- Cart Summary -->
                    <div class="cart-summary">
                        <h3 class="summary-title">Order Summary</h3>
                        
                        <div class="summary-row">
                            <span class="summary-label">Subtotal</span>
                            <span class="summary-value" id="subtotal">$48.00</span>
                        </div>
                        
                        <div class="shipping-options">
                            <div class="summary-label" style="margin-bottom: 12px;">Shipping</div>
                            <div class="shipping-option">
                                <input type="radio" id="standard" name="shipping" value="0" checked>
                                <label for="standard">Standard Shipping (Free)</label>
                            </div>
                            <div class="shipping-option">
                                <input type="radio" id="express" name="shipping" value="9.99">
                                <label for="express">Express Shipping ($9.99)</label>
                            </div>
                            <div class="shipping-option">
                                <input type="radio" id="overnight" name="shipping" value="19.99">
                                <label for="overnight">Overnight Shipping ($19.99)</label>
                            </div>
                        </div>
                        
                        <div class="summary-row">
                            <span class="summary-label">Shipping</span>
                            <span class="summary-value" id="shipping">Free</span>
                        </div>
                        
                        <div class="summary-row">
                            <span class="summary-label">Tax</span>
                            <span class="summary-value" id="tax">$3.84</span>
                        </div>
                        
                        <div class="promo-code">
                            <div class="summary-label">Promo Code</div>
                            <div class="promo-input">
                                <input type="text" placeholder="Enter promo code" id="promoInput">
                                <button onclick="applyPromo()">Apply</button>
                            </div>
                        </div>
                        
                        <div class="summary-row">
                            <span class="summary-label">Total</span>
                            <span class="summary-value" id="total">$51.84</span>
                        </div>
                        
                        <div class="cart-actions">
                            <a href="checkout.html" class="btn btn-primary">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                Proceed to Checkout
                            </a>
                            <a href="index.html" class="btn btn-secondary">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Empty Cart State -->
            <div id="emptyCart" class="empty-cart" style="display: none;">
                <div class="empty-cart-icon">🛒</div>
                <h2>Your cart is empty</h2>
                <p>Looks like you haven't added any items to your cart yet.</p>
                <a href="index.html" class="btn btn-primary">Start Shopping</a>
            </div>

            <!-- Continue Shopping Section -->
            <div class="continue-shopping">
                <h3>You might also like</h3>
                <div class="suggested-products">
                    <div class="suggested-item">
                        <div class="suggested-image">Product Image</div>
                        <div class="suggested-content">
                            <div class="suggested-name">Classic Cotton Tee</div>
                            <div class="suggested-price">$14.00</div>
                        </div>
                    </div>
                    <div class="suggested-item">
                        <div class="suggested-image">Product Image</div>
                        <div class="suggested-content">
                            <div class="suggested-name">Casual Button Down</div>
                            <div class="suggested-price">$22.00</div>
                        </div>
                    </div>
                    <div class="suggested-item">
                        <div class="suggested-image">Product Image</div>
                        <div class="suggested-content">
                            <div class="suggested-name">Premium Polo Shirt</div>
                            <div class="suggested-price">$18.00</div>
                        </div>
                    </div>
                    <div class="suggested-item">
                        <div class="suggested-image">Product Image</div>
                        <div class="suggested-content">
                            <div class="suggested-name">Vintage Henley</div>
                            <div class="suggested-price">$16.00</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Notification -->
    <div class="notification" id="notification">
        Item updated!
    </div>

    <script>
        // Sample cart data
        let cartItems = [
            {
                id: 1,
                name: "Lane Shirt Cut II",
                color: "Brown",
                size: "M",
                price: 16.00,
                quantity: 2,
                image: "Product Image 1"
            },
            {
                id: 2,
                name: "Classic Cotton Tee",
                color: "White",
                size: "L",
                price: 14.00,
                quantity: 1,
                image: "Product Image 2"
            },
            {
                id: 3,
                name: "Premium Polo Shirt",
                color: "Navy",
                size: "M",
                price: 18.00,
                quantity: 1,
                image: "Product Image 3"
            }
        ];

        let shippingCost = 0;
        let taxRate = 0.08;

        function renderCartItems() {
            const cartItemsList = document.getElementById('cartItemsList');
            const cartContent = document.getElementById('cartContent');
            const emptyCart = document.getElementById('emptyCart');
            
            if (cartItems.length === 0) {
                cartContent.style.display = 'none';
                emptyCart.style.display = 'block';
                return;
            }
            
            cartContent.style.display = 'block';
            emptyCart.style.display = 'none';
            
            cartItemsList.innerHTML = cartItems.map(item => `
                <div class="cart-item" data-id="${item.id}">
                    <div class="item-info">
                        <div class="item-image">${item.image}</div>
                        <div class="item-details">
                            <h3>${item.name}</h3>
                            <p>Color: ${item.color}</p>
                            <p>Size: ${item.size}</p>
                        </div>
                    </div>
                    <div class="item-price">$${item.price.toFixed(2)}</div>
                    <div class="quantity-controls">
                        <button class="quantity-btn" onclick="updateQuantity(${item.id}, ${item.quantity - 1})" ${item.quantity <= 1 ? 'disabled' : ''}>-</button>
                        <input type="number" class="quantity-input" value="${item.quantity}" min="1" max="10" onchange="updateQuantity(${item.id}, this.value)">
                        <button class="quantity-btn" onclick="updateQuantity(${item.id}, ${item.quantity + 1})" ${item.quantity >= 10 ? 'disabled' : ''}>+</button>
                    </div>
                    <div class="item-total">$${(item.price * item.quantity).toFixed(2)}</div>
                    <button class="remove-btn" onclick="removeItem(${item.id})">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="3,6 5,6 21,6"></polyline>
                            <path d="M19,6V20a2,2,0,0,1-2,2H7a2,2,0,0,1-2-2V6M8,6V4a2,2,0,0,1,2-2h4a2,2,0,0,1,2,2V6"></path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>
                    </button>
                </div>
            `).join('');
            
            updateCartSummary();
        }

        function updateQuantity(itemId, newQuantity) {
            newQuantity = parseInt(newQuantity);
            if (newQuantity < 1 || newQuantity > 10) return;
            
            const item = cartItems.find(item => item.id === itemId);
            if (item) {
                item.quantity = newQuantity;
                renderCartItems();
                updateCartBadge();
                showNotification('Quantity updated!');
            }
        }

        function removeItem(itemId) {
            cartItems = cartItems.filter(item => item.id !== itemId);
            renderCartItems();
            updateCartBadge();
            showNotification('Item removed from cart!', 'error');
        }

        function updateCartSummary() {
            const subtotal = cartItems.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const tax = subtotal * taxRate;
            const total = subtotal + shippingCost + tax;
            
            document.getElementById('subtotal').textContent = $${subtotal.toFixed(2)};
            document.getElementById('tax').textContent = $${tax.toFixed(2)};
            document.getElementById('total').textContent = $${total.toFixed(2)};
            
            const shippingElement = document.getElementById('shipping');
            shippingElement.textContent = shippingCost === 0 ? 'Free' : $${shippingCost.toFixed(2)};
        }

        function updateCartBadge() {
            const totalItems = cartItems.reduce((sum, item) => sum + item.quantity, 0);
            document.getElementById('cartBadge').textContent = totalItems;
        }

        function showNotification(message, type = 'success') {
            const notification = document.getElementById('notification');
            notification.textContent = message;
            notification.className = notification ${type};
            notification.classList.add('show');
            
            setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }

        function applyPromo() {
            const promoInput = document.getElementById('promoInput');
            const promoCode = promoInput.value.trim().toUpperCase();
            
            if (promoCode === 'SAVE10') {
                showNotification('Promo code applied! 10% discount');
                // Apply discount logic here
            } else if (promoCode === 'FREESHIP') {
                shippingCost = 0;
                document.querySelector('input[name="shipping"]').checked = true;
                updateCartSummary();
                showNotification('Free shipping applied!');
            } else if (promoCode === '') {
                showNotification('Please enter a promo code', 'error');
            } else {
                showNotification('Invalid promo code', 'error');
            }
            
            promoInput.value = '';
        }

        // Shipping option change handler
        document.addEventListener('change', function(e) {
            if (e.target.name === 'shipping') {
                shippingCost = parseFloat(e.target.value);
                updateCartSummary();
            }
        });

        // Initialize cart
        document.addEventListener('DOMContentLoaded', function() {
            renderCartItems();
            updateCartBadge();
            
            // Add click handlers for suggested products
            document.querySelectorAll('.suggested-item').forEach(item => {
                item.addEventListener('click', function() {
                    showNotification('Redirecting to product page...');
                    // Redirect to product page
                });
            });
        });

        // Promo code input enter key handler
        document.getElementById('promoInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                applyPromo();
            }
        });
    </script>
</body>
</html>