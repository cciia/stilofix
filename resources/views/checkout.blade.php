<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stilo - Checkout</title>
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
            background-color: #f8f9fa;
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

        .logo {
            font-size: 20px;
            font-weight: 700;
            text-decoration: none;
            color: #333;
        }

        .checkout-steps {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .step {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            color: #666;
        }

        .step.active {
            color: #333;
            font-weight: 600;
        }

        .step-number {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #e5e5e5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 600;
        }

        .step.active .step-number {
            background: #333;
            color: white;
        }

        .step.completed .step-number {
            background: #10b981;
            color: white;
        }

        .step-arrow {
            color: #ccc;
        }

        /* Main Content */
        .main-content {
            padding: 40px 0;
        }

        .checkout-container {
            display: grid;
            grid-template-columns: 1fr 400px;
            gap: 40px;
        }

        .checkout-form {
            background: white;
            border-radius: 12px;
            padding: 32px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .form-section {
            margin-bottom: 32px;
        }

        .form-section:last-child {
            margin-bottom: 0;
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #333;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 6px;
            color: #333;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.2s;
        }

        .form-input:focus {
            outline: none;
            border-color: #333;
        }

        .form-select {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            font-size: 14px;
            background: white;
            cursor: pointer;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 16px;
        }

        .checkbox {
            width: 16px;
            height: 16px;
            cursor: pointer;
        }

        .checkbox-label {
            font-size: 14px;
            cursor: pointer;
        }

        /* Payment Methods */
        .payment-methods {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .payment-method {
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            padding: 16px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .payment-method:hover {
            border-color: #333;
        }

        .payment-method.selected {
            border-color: #333;
            background: #f8f9fa;
        }

        .payment-option {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .payment-radio {
            width: 16px;
            height: 16px;
            cursor: pointer;
        }

        .payment-info {
            flex: 1;
        }

        .payment-name {
            font-weight: 500;
            margin-bottom: 4px;
        }

        .payment-desc {
            font-size: 12px;
            color: #666;
        }

        .payment-icon {
            width: 40px;
            height: 28px;
            background: #f0f0f0;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            color: #666;
        }

        .card-details {
            margin-top: 16px;
            padding-top: 16px;
            border-top: 1px solid #e5e5e5;
            display: none;
        }

        .payment-method.selected .card-details {
            display: block;
        }

        /* Order Summary */
        .order-summary {
            background: white;
            border-radius: 12px;
            padding: 32px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            height: fit-content;
            position: sticky;
            top: 100px;
        }

        .summary-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #333;
        }

        .order-items {
            margin-bottom: 24px;
        }

        .order-item {
            display: flex;
            gap: 12px;
            margin-bottom: 16px;
            padding-bottom: 16px;
            border-bottom: 1px solid #f0f0f0;
        }

        .order-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .item-image {
            width: 60px;
            height: 60px;
            background: #f5f5f5;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            color: #999;
        }

        .item-details {
            flex: 1;
        }

        .item-name {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 4px;
        }

        .item-variant {
            font-size: 12px;
            color: #666;
            margin-bottom: 4px;
        }

        .item-quantity {
            font-size: 12px;
            color: #666;
        }

        .item-price {
            font-size: 14px;
            font-weight: 600;
            color: #333;
        }

        /* Promo Code */
        .promo-section {
            margin-bottom: 24px;
            padding-bottom: 24px;
            border-bottom: 1px solid #f0f0f0;
        }

        .promo-input-group {
            display: flex;
            gap: 8px;
        }

        .promo-input {
            flex: 1;
            padding: 10px 12px;
            border: 1px solid #e5e5e5;
            border-radius: 6px;
            font-size: 14px;
        }

        .promo-btn {
            padding: 10px 16px;
            background: #333;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .promo-btn:hover {
            background: #555;
        }

        /* Order Total */
        .order-total {
            margin-bottom: 24px;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .total-row.subtotal {
            color: #666;
        }

        .total-row.shipping {
            color: #666;
        }

        .total-row.discount {
            color: #10b981;
        }

        .total-row.final {
            font-size: 16px;
            font-weight: 600;
            padding-top: 12px;
            border-top: 1px solid #e5e5e5;
            margin-top: 12px;
        }

        /* Buttons */
        .btn {
            padding: 14px 24px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-primary {
            background: #333;
            color: white;
            width: 100%;
        }

        .btn-primary:hover {
            background: #555;
        }

        .btn-secondary {
            background: transparent;
            color: #333;
            border: 1px solid #e5e5e5;
        }

        .btn-secondary:hover {
            background: #f5f5f5;
        }

        .button-group {
            display: flex;
            gap: 12px;
            margin-top: 24px;
        }

        /* Security Badge */
        .security-badge {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 16px;
            padding: 12px;
            background: #f8f9fa;
            border-radius: 8px;
            font-size: 12px;
            color: #666;
        }

        .security-icon {
            width: 16px;
            height: 16px;
            background: #10b981;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 10px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .checkout-container {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .order-summary {
                order: -1;
                position: static;
            }

            .checkout-form,
            .order-summary {
                padding: 20px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .checkout-steps {
                display: none;
            }

            .button-group {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 16px;
            }

            .main-content {
                padding: 20px 0;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <a href="#" class="logo">Guza</a>
                <div class="checkout-steps">
                    <div class="step completed">
                        <span class="step-number">1</span>
                        <span>Cart</span>
                    </div>
                    <span class="step-arrow">→</span>
                    <div class="step active">
                        <span class="step-number">2</span>
                        <span>Checkout</span>
                    </div>
                    <span class="step-arrow">→</span>
                    <div class="step">
                        <span class="step-number">3</span>
                        <span>Payment</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <div class="checkout-container">
                <!-- Checkout Form -->
                <div class="checkout-form">
                    <!-- Shipping Information -->
                    <div class="form-section">
                        <h2 class="section-title">Shipping Information</h2>
                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label" for="firstName">First Name</label>
                                <input type="text" id="firstName" class="form-input" placeholder="John" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="lastName">Last Name</label>
                                <input type="text" id="lastName" class="form-input" placeholder="Doe" required>
                            </div>
                            <div class="form-group full-width">
                                <label class="form-label" for="email">Email Address</label>
                                <input type="email" id="email" class="form-input" placeholder="john.doe@example.com" required>
                            </div>
                            <div class="form-group full-width">
                                <label class="form-label" for="phone">Phone Number</label>
                                <input type="tel" id="phone" class="form-input" placeholder="+1 (555) 123-4567" required>
                            </div>
                            <div class="form-group full-width">
                                <label class="form-label" for="address">Street Address</label>
                                <input type="text" id="address" class="form-input" placeholder="123 Main Street" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="city">City</label>
                                <input type="text" id="city" class="form-input" placeholder="New York" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="state">State</label>
                                <select id="state" class="form-select" required>
                                    <option value="">Select State</option>
                                    <option value="NY">New York</option>
                                    <option value="CA">California</option>
                                    <option value="TX">Texas</option>
                                    <option value="FL">Florida</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="zipCode">ZIP Code</label>
                                <input type="text" id="zipCode" class="form-input" placeholder="10001" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="country">Country</label>
                                <select id="country" class="form-select" required>
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="UK">United Kingdom</option>
                                </select>
                            </div>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="saveAddress" class="checkbox">
                            <label for="saveAddress" class="checkbox-label">Save this address for future orders</label>
                        </div>
                    </div>

                    <!-- Payment Method -->
                    <div class="form-section">
                        <h2 class="section-title">Payment Method</h2>
                        <div class="payment-methods">
                            <div class="payment-method selected" data-method="card">
                                <div class="payment-option">
                                    <input type="radio" name="payment" value="card" class="payment-radio" checked>
                                    <div class="payment-info">
                                        <div class="payment-name">Credit/Debit Card</div>
                                        <div class="payment-desc">Visa, Mastercard, American Express</div>
                                    </div>
                                    <div class="payment-icon">CARD</div>
                                </div>
                                <div class="card-details">
                                    <div class="form-grid">
                                        <div class="form-group full-width">
                                            <label class="form-label" for="cardNumber">Card Number</label>
                                            <input type="text" id="cardNumber" class="form-input" placeholder="1234 5678 9012 3456" maxlength="19">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="expiryDate">Expiry Date</label>
                                            <input type="text" id="expiryDate" class="form-input" placeholder="MM/YY" maxlength="5">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="cvv">CVV</label>
                                            <input type="text" id="cvv" class="form-input" placeholder="123" maxlength="4">
                                        </div>
                                        <div class="form-group full-width">
                                            <label class="form-label" for="cardName">Name on Card</label>
                                            <input type="text" id="cardName" class="form-input" placeholder="John Doe">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="payment-method" data-method="paypal">
                                <div class="payment-option">
                                    <input type="radio" name="payment" value="paypal" class="payment-radio">
                                    <div class="payment-info">
                                        <div class="payment-name">PayPal</div>
                                        <div class="payment-desc">Pay with your PayPal account</div>
                                    </div>
                                    <div class="payment-icon">PP</div>
                                </div>
                            </div>

                            <div class="payment-method" data-method="apple">
                                <div class="payment-option">
                                    <input type="radio" name="payment" value="apple" class="payment-radio">
                                    <div class="payment-info">
                                        <div class="payment-name">Apple Pay</div>
                                        <div class="payment-desc">Pay with Touch ID or Face ID</div>
                                    </div>
                                    <div class="payment-icon">AP</div>
                                </div>
                            </div>

                            <div class="payment-method" data-method="google">
                                <div class="payment-option">
                                    <input type="radio" name="payment" value="google" class="payment-radio">
                                    <div class="payment-info">
                                        <div class="payment-name">Google Pay</div>
                                        <div class="payment-desc">Pay with Google Pay</div>
                                    </div>
                                    <div class="payment-icon">GP</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Order Notes -->
                    <div class="form-section">
                        <h2 class="section-title">Order Notes (Optional)</h2>
                        <div class="form-group">
                            <label class="form-label" for="orderNotes">Special instructions for your order</label>
                            <textarea id="orderNotes" class="form-input" rows="4" placeholder="Any special requests or delivery instructions..."></textarea>
                        </div>
                    </div>

                    <div class="button-group">
                        <a href="#" class="btn btn-secondary">← Back to Cart</a>
                        <button type="submit" class="btn btn-primary">Complete Order</button>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="order-summary">
                    <h2 class="summary-title">Order Summary</h2>
                    
                    <div class="order-items">
                        <div class="order-item">
                            <div class="item-image">IMG</div>
                            <div class="item-details">
                                <div class="item-name">Lane Shirt Cut II</div>
                                <div class="item-variant">Color: Brown, Size: M</div>
                                <div class="item-quantity">Qty: 1</div>
                            </div>
                            <div class="item-price">$16.00</div>
                        </div>
                        
                        <div class="order-item">
                            <div class="item-image">IMG</div>
                            <div class="item-details">
                                <div class="item-name">Lane Shirt Cut II</div>
                                <div class="item-variant">Color: Blue, Size: L</div>
                                <div class="item-quantity">Qty: 2</div>
                            </div>
                            <div class="item-price">$32.00</div>
                        </div>
                    </div>

                    <div class="promo-section">
                        <div class="form-group">
                            <label class="form-label">Promo Code</label>
                            <div class="promo-input-group">
                                <input type="text" class="promo-input" placeholder="Enter code">
                                <button class="promo-btn">Apply</button>
                            </div>
                        </div>
                    </div>

                    <div class="order-total">
                        <div class="total-row subtotal">
                            <span>Subtotal</span>
                            <span>$48.00</span>
                        </div>
                        <div class="total-row shipping">
                            <span>Shipping</span>
                            <span>$5.99</span>
                        </div>
                        <div class="total-row discount">
                            <span>Discount (SAVE20)</span>
                            <span>-$9.60</span>
                        </div>
                        <div class="total-row final">
                            <span>Total</span>
                            <span>$44.39</span>
                        </div>
                    </div>

                    <div class="security-badge">
                        <div class="security-icon">✓</div>
                        <span>Your payment information is secure and encrypted</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Payment method selection
            const paymentMethods = document.querySelectorAll('.payment-method');
            const paymentRadios = document.querySelectorAll('.payment-radio');

            paymentMethods.forEach(method => {
                method.addEventListener('click', function() {
                    // Remove selected class from all methods
                    paymentMethods.forEach(m => m.classList.remove('selected'));
                    
                    // Add selected class to clicked method
                    this.classList.add('selected');
                    
                    // Check the radio button
                    const radio = this.querySelector('.payment-radio');
                    radio.checked = true;
                });
            });

            // Card number formatting
            const cardNumberInput = document.getElementById('cardNumber');
            if (cardNumberInput) {
                cardNumberInput.addEventListener('input', function(e) {
                    let value = e.target.value.replace(/\s/g, '').replace(/[^0-9]/gi, '');
                    let formattedValue = value.match(/.{1,4}/g)?.join(' ') || value;
                    e.target.value = formattedValue;
                });
            }

            // Expiry date formatting
            const expiryInput = document.getElementById('expiryDate');
            if (expiryInput) {
                expiryInput.addEventListener('input', function(e) {
                    let value = e.target.value.replace(/\D/g, '');
                    if (value.length >= 2) {
                        value = value.substring(0, 2) + '/' + value.substring(2, 4);
                    }
                    e.target.value = value;
                });
            }

            // CVV input restriction
            const cvvInput = document.getElementById('cvv');
            if (cvvInput) {
                cvvInput.addEventListener('input', function(e) {
                    e.target.value = e.target.value.replace(/[^0-9]/g, '');
                });
            }

            // Promo code application
            const promoBtn = document.querySelector('.promo-btn');
            const promoInput = document.querySelector('.promo-input');
            
            if (promoBtn && promoInput) {
                promoBtn.addEventListener('click', function() {
                    const code = promoInput.value.trim().toUpperCase();
                    if (code === 'SAVE20') {
                        alert('Promo code applied! You saved $9.60');
                    } else if (code === '') {
                        alert('Please enter a promo code');
                    } else {
                        alert('Invalid promo code');
                    }
                });
            }

            // Form submission
            const form = document.querySelector('.checkout-form');
            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Basic validation
                    const requiredFields = form.querySelectorAll('[required]');
                    let isValid = true;
                    
                    requiredFields.forEach(field => {
                        if (!field.value.trim()) {
                            field.style.borderColor = '#ef4444';
                            isValid = false;
                        } else {
                            field.style.borderColor = '#e5e5e5';
                        }
                    });
                    
                    if (isValid) {
                        // Simulate order processing
                        const submitBtn = form.querySelector('.btn-primary');
                        const originalText = submitBtn.textContent;
                        
                        submitBtn.textContent = 'Processing...';
                        submitBtn.disabled = true;
                        
                        setTimeout(() => {
                            alert('Order placed successfully! You will receive a confirmation email shortly.');
                            submitBtn.textContent = originalText;
                            submitBtn.disabled = false;
                        }, 2000);
                    } else {
                        alert('Please fill in all required fields');
                    }
                });
            }

            // Auto-fill card name from shipping name
            const firstNameInput = document.getElementById('firstName');
            const lastNameInput = document.getElementById('lastName');
            const cardNameInput = document.getElementById('cardName');
            
            function updateCardName() {
                if (firstNameInput && lastNameInput && cardNameInput) {
                    const fullName = ${firstNameInput.value} ${lastNameInput.value}.trim();
                    if (fullName.length > 1) {
                        cardNameInput.value = fullName;
                    }
                }
            }
            
            if (firstNameInput) firstNameInput.addEventListener('blur', updateCardName);
            if (lastNameInput) lastNameInput.addEventListener('blur', updateCardName);
        });
    </script>
</body>
</html>