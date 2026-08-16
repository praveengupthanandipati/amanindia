<?php
include __DIR__ . '/components/data.php';

$pageTitle       = 'Track Your Order | Aman India';
$pageDescription = 'Track your Aman India order. Enter your order number to check the latest status — Order Placed, Dispatched, Out for Delivery or Delivered — and expected delivery date.';
$pageKeywords    = 'track order Aman India, order status, order tracking, check delivery status, Aman India order number';
$pageCanonical   = 'https://www.amanindia.com/track-order.php';

$prefillOrder = isset($_GET['order']) ? trim((string) $_GET['order']) : '';
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
        <!-- track order -->
        <section class="track-order-section">
            <div class="header-container">
                <div class="track-order-wrap">
                    <h1>Track Your Order</h1>
                    <hr class="track-order-divider">
                    <p class="track-order-subtext">Enter the order number from your confirmation email.</p>

                    <div class="track-order-card">
                        <form id="trackOrderForm" class="track-order-form" novalidate>
                            <div class="track-order-field">
                                <label for="orderNumber">Order number</label>
                                <div class="track-order-input-row">
                                    <input type="text" id="orderNumber" name="order_number" placeholder="ORD-20260731123456-1234" value="<?= htmlspecialchars($prefillOrder) ?>" autocomplete="off">
                                    <button type="submit" class="track-order-btn"><i class="fi fi-rs-search"></i> Check status</button>
                                </div>
                            </div>
                        </form>

                        <p class="track-order-error" id="trackOrderError" hidden>Please enter your order number to check its status.</p>

                        <div class="track-order-result" id="trackOrderResult" hidden>
                            <div class="track-order-summary">
                                <div>
                                    <span class="track-order-summary-label">Order Number</span>
                                    <span class="track-order-summary-value" id="resultOrderNumber"></span>
                                </div>
                                <div>
                                    <span class="track-order-summary-label">Status</span>
                                    <span class="track-status-badge" id="resultStatus"></span>
                                </div>
                                <div>
                                    <span class="track-order-summary-label" id="resultDateLabel"></span>
                                    <span class="track-order-summary-value" id="resultDateValue"></span>
                                </div>
                            </div>

                            <ol class="track-steps" id="trackSteps">
                                <span class="track-steps-progress" id="trackStepsProgress"></span>
                                <li class="track-step" data-step="0">
                                    <span class="track-step-dot"></span>
                                    <span class="track-step-label">Order Placed</span>
                                </li>
                                <li class="track-step" data-step="1">
                                    <span class="track-step-dot"></span>
                                    <span class="track-step-label">Dispatched</span>
                                </li>
                                <li class="track-step" data-step="2">
                                    <span class="track-step-dot"></span>
                                    <span class="track-step-label">Out for Delivery</span>
                                </li>
                                <li class="track-step" data-step="3">
                                    <span class="track-step-dot"></span>
                                    <span class="track-step-label">Delivered</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ track order -->
    </main>
    <!--/ main-->

    <?php include __DIR__ . '/components/footer.php'; ?>
</body>
</html>
