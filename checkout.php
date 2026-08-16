<?php
include __DIR__ . '/components/data.php';

function formatINR(float $amount): string {
    $amount = (int) round($amount);
    $isNegative = $amount < 0;
    $amount = abs($amount);
    $str = (string) $amount;
    if (strlen($str) > 3) {
        $lastThree = substr($str, -3);
        $rest = substr($str, 0, -3);
        $rest = preg_replace('/\B(?=(\d{2})+(?!\d))/', ',', $rest);
        $str = $rest . ',' . $lastThree;
    }
    return ($isNegative ? '-' : '') . '₹' . $str;
}

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
if ($id < 0 || $id >= count($productsList)) {
    $id = 0;
}
$product = $productsList[$id];

$qty = isset($_GET['qty']) ? (int) $_GET['qty'] : 1;
if ($qty < 1) $qty = 1;

$unitPrice = (int) preg_replace('/[^0-9]/', '', $product['price']);
$subtotal  = $unitPrice * $qty;
$total     = $subtotal;

$pageTitle       = 'Checkout | Aman India';
$pageDescription = 'Securely complete your purchase at Aman India. Enter your billing and shipping details and pay by Credit Card, Debit Card or NetBanking through Razorpay.';
$pageKeywords    = 'Aman India checkout, buy online India, secure payment, Razorpay checkout';
$pageCanonical   = 'https://www.amanindia.com/checkout.php';
$pageRobots      = 'noindex, nofollow';
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/components/head.php'; ?>
<body>
    <!-- page loader -->
    <div id="load" class="page-loader">
        <img src="img/logo.png" alt="Aman India" class="page-loader-logo">
        <span class="page-loader-spinner" aria-hidden="true"></span>
    </div>
    <!--/ page loader -->

    <?php include __DIR__ . '/components/header.php'; ?>

    <!-- main -->
    <main class="sub-page-main">
        <!-- checkout -->
        <section class="checkout-section">
            <div class="header-container">
                <nav class="breadcrumb" aria-label="Breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="breadcrumb-sep">/</span>
                    <a href="product-detail.php?id=<?= $id ?>"><?= htmlspecialchars($product['name']) ?></a>
                    <span class="breadcrumb-sep">/</span>
                    <span class="breadcrumb-current">Checkout</span>
                </nav>

                <form class="checkout-grid" id="checkoutForm" novalidate>
                    <div class="checkout-billing">
                        <h2 class="checkout-heading">Billing Address</h2>

                        <div class="checkout-form-row">
                            <div class="form-field">
                                <label for="billingFirstName">First name <span class="required">*</span></label>
                                <input type="text" id="billingFirstName" name="billing_first_name" required>
                            </div>
                            <div class="form-field">
                                <label for="billingLastName">Last name <span class="required">*</span></label>
                                <input type="text" id="billingLastName" name="billing_last_name" required>
                            </div>
                        </div>

                        <div class="form-field">
                            <label for="billingCompany">Company name (optional)</label>
                            <input type="text" id="billingCompany" name="billing_company">
                        </div>

                        <div class="form-field">
                            <label for="billingCountry">Country / Region <span class="required">*</span></label>
                            <select id="billingCountry" name="billing_country" required>
                                <option value="India" selected>India</option>
                            </select>
                        </div>

                        <div class="form-field">
                            <label for="billingAddress1">Street address <span class="required">*</span></label>
                            <input type="text" id="billingAddress1" name="billing_address_1" placeholder="House number and street name" required>
                        </div>
                        <div class="form-field">
                            <label for="billingAddress2" class="visually-hidden">Apartment, suite, unit, etc.</label>
                            <input type="text" id="billingAddress2" name="billing_address_2" placeholder="Apartment, suite, unit, etc. (optional)">
                        </div>

                        <div class="checkout-form-row">
                            <div class="form-field">
                                <label for="billingCity">Town / City <span class="required">*</span></label>
                                <input type="text" id="billingCity" name="billing_city" required>
                            </div>
                            <div class="form-field">
                                <label for="billingState">State <span class="required">*</span></label>
                                <input type="text" id="billingState" name="billing_state" required>
                            </div>
                        </div>

                        <div class="checkout-form-row">
                            <div class="form-field">
                                <label for="billingPin">PIN / ZIP Code <span class="required">*</span></label>
                                <input type="text" id="billingPin" name="billing_pin" inputmode="numeric" required>
                            </div>
                            <div class="form-field">
                                <label for="billingPhone">Phone <span class="required">*</span></label>
                                <input type="tel" id="billingPhone" name="billing_phone" required>
                            </div>
                        </div>

                        <div class="form-field">
                            <label for="billingEmail">Email address <span class="required">*</span></label>
                            <input type="email" id="billingEmail" name="billing_email" required>
                        </div>

                        <div class="form-field">
                            <label for="referralCode">Referral code (optional)</label>
                            <input type="text" id="referralCode" name="referral_code">
                        </div>

                        <label class="checkout-checkbox">
                            <input type="checkbox" id="shipToDifferent">
                            <span>Ship to a different address?</span>
                        </label>

                        <div class="checkout-shipping" id="shippingFields" hidden>
                            <h2 class="checkout-heading">Shipping Address</h2>

                            <div class="checkout-form-row">
                                <div class="form-field">
                                    <label for="shippingFirstName">First name <span class="required">*</span></label>
                                    <input type="text" id="shippingFirstName" name="shipping_first_name">
                                </div>
                                <div class="form-field">
                                    <label for="shippingLastName">Last name <span class="required">*</span></label>
                                    <input type="text" id="shippingLastName" name="shipping_last_name">
                                </div>
                            </div>

                            <div class="form-field">
                                <label for="shippingAddress1">Street address <span class="required">*</span></label>
                                <input type="text" id="shippingAddress1" name="shipping_address_1" placeholder="House number and street name">
                            </div>
                            <div class="form-field">
                                <label for="shippingAddress2" class="visually-hidden">Apartment, suite, unit, etc.</label>
                                <input type="text" id="shippingAddress2" name="shipping_address_2" placeholder="Apartment, suite, unit, etc. (optional)">
                            </div>

                            <div class="checkout-form-row">
                                <div class="form-field">
                                    <label for="shippingCity">Town / City <span class="required">*</span></label>
                                    <input type="text" id="shippingCity" name="shipping_city">
                                </div>
                                <div class="form-field">
                                    <label for="shippingState">State <span class="required">*</span></label>
                                    <input type="text" id="shippingState" name="shipping_state">
                                </div>
                            </div>

                            <div class="form-field">
                                <label for="shippingPin">PIN / ZIP Code <span class="required">*</span></label>
                                <input type="text" id="shippingPin" name="shipping_pin" inputmode="numeric">
                            </div>
                        </div>
                    </div>

                    <aside class="checkout-summary" id="checkoutSummary" data-unit-price="<?= $unitPrice ?>">
                        <h2 class="checkout-heading">Your Order</h2>

                        <div class="order-item">
                            <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['alt']) ?>" class="order-item-thumb">
                            <div class="order-item-info">
                                <span class="order-item-name"><?= htmlspecialchars($product['name']) ?></span>
                                <span class="order-item-qty">&times; <span id="qtyDisplay"><?= $qty ?></span></span>
                            </div>
                            <span class="order-item-price" id="lineTotal"><?= formatINR($subtotal) ?></span>
                        </div>

                        <div class="order-row">
                            <span>Quantity</span>
                            <input type="number" id="qtyInput" name="quantity" min="1" max="10" value="<?= $qty ?>" class="qty-input">
                        </div>

                        <div class="order-row">
                            <span>Subtotal</span>
                            <span id="subtotalDisplay"><?= formatINR($subtotal) ?></span>
                        </div>

                        <div class="order-row order-row--total">
                            <span>Total</span>
                            <span id="totalDisplay"><?= formatINR($total) ?></span>
                        </div>

                        <div class="payment-method">
                            <span class="icon-check" aria-hidden="true"></span>
                            <div>
                                <strong>Credit Card / Debit Card / NetBanking — Pay by Razorpay</strong>
                                <p>Pay securely by Credit or Debit card or Internet Banking through Razorpay.</p>
                            </div>
                        </div>

                        <button type="submit" class="place-order-btn">Place Order</button>
                    </aside>
                </form>

                <div class="order-success" id="orderSuccess" hidden>
                    <span class="icon-check icon-check--lg" aria-hidden="true"></span>
                    <h2>Thank you! Your order has been placed.</h2>
                    <div class="order-success-number">Order Number: <strong id="successOrderNumber"></strong></div>
                    <p>A confirmation email will be sent to your email address shortly.</p>
                    <div class="order-success-actions">
                        <a href="track-order.php" id="trackOrderBtn" class="buy-now-btn">Track Order</a>
                        <a href="products-list.php" class="view-more-btn">Continue Shopping <i class="fi fi-rs-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!--/ checkout -->
    </main>
    <!--/ main-->

    <?php include __DIR__ . '/components/footer.php'; ?>
</body>
</html>
