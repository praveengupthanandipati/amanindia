<?php
include __DIR__ . '/components/data.php';

$pageTitle       = 'FAQs | Aman India';
$pageDescription = 'Answers to frequently asked questions about ordering, payments, shipping, delivery, returns, refunds, product warranty and your Aman India account.';
$pageKeywords    = 'Aman India FAQ, Aman India help center, order questions, delivery questions, return policy, refund policy, payment methods, track order help';
$pageCanonical   = 'https://www.amanindia.com/faq.php';

$faqCategories = [
    [
        'slug'  => 'orders-payments',
        'title' => 'Orders & Payments',
        'items' => [
            ['q' => 'How do I place an order on Aman India?', 'a' => 'Browse our catalog, open any product page and click "Buy Now" to go to checkout. Fill in your billing details, review your order summary, and click "Place Order" to confirm.'],
            ['q' => 'What payment methods do you accept?', 'a' => 'We accept Credit Card, Debit Card and NetBanking, all processed securely through Razorpay.'],
            ['q' => 'Is it safe to pay online on Aman India?', 'a' => 'Yes. All payments are processed through Razorpay\'s secure, PCI-DSS compliant payment gateway. We never store your card details on our servers.'],
            ['q' => 'Can I change or cancel my order after placing it?', 'a' => 'Contact our support team as soon as possible after placing your order. Once an order has been dispatched, it can no longer be modified or cancelled.'],
            ['q' => "I didn't receive an order confirmation. What should I do?", 'a' => 'Note the order number shown on the checkout confirmation screen and use it on the Order Tracking page to check its status, or contact our support team for help.'],
        ],
    ],
    [
        'slug'  => 'shipping-delivery',
        'title' => 'Shipping & Delivery',
        'items' => [
            ['q' => 'How can I track my order?', 'a' => 'Go to the Order Tracking page and enter the order number from your checkout confirmation to see its current status.'],
            ['q' => 'How long does delivery take?', 'a' => 'Delivery timelines vary by location, but most orders reach customers within 5-7 days of being placed.'],
            ['q' => 'Do you deliver across all of India?', 'a' => 'Yes, we deliver to 50+ cities across India, including major metros and smaller towns.'],
            ['q' => 'What do the order statuses mean?', 'a' => '"Order Placed" means we\'ve received your order. "Dispatched" means it has left our warehouse. "Out for Delivery" means it\'s with the courier for final delivery. "Delivered" means it has reached you.'],
            ['q' => 'Is delivery free?', 'a' => 'Delivery charges, if any, are calculated at checkout based on your order value and location.'],
        ],
    ],
    [
        'slug'  => 'returns-refunds',
        'title' => 'Returns & Refunds',
        'items' => [
            ['q' => 'What is your return policy?', 'a' => 'Most products can be returned within 7 days of delivery if they are unused, in original packaging, and accompanied by all accessories and invoices.'],
            ['q' => 'How do I request a return or refund?', 'a' => "Contact our support team with your order number and reason for return. We'll guide you through pickup and refund from there."],
            ['q' => 'How long does a refund take?', 'a' => 'Once we receive and inspect the returned product, refunds are processed within 5-7 business days to your original payment method.'],
            ['q' => 'Are all products eligible for return?', 'a' => 'Certain categories may not be eligible for return due to hygiene or safety reasons. Check the individual product page for specific return eligibility.'],
        ],
    ],
    [
        'slug'  => 'product-warranty',
        'title' => 'Product & Warranty',
        'items' => [
            ['q' => 'Are the products sold on Aman India genuine?', 'a' => 'Yes. We source every product directly from authorized brands and distributors, so everything you buy is 100% genuine and covered by manufacturer warranty.'],
            ['q' => 'How do I claim a product warranty?', 'a' => "Warranty is provided directly by the manufacturer. Keep your invoice and warranty card safe, and contact the brand's authorized service center for claims."],
            ['q' => 'Where can I find product specifications?', 'a' => 'Each product page includes a Highlights section and a details table with brand, category and availability information.'],
            ['q' => 'Do you sell refurbished products?', 'a' => 'A small number of listings, clearly marked as "Refurbished" in the product name, are certified refurbished and tested products offered at a discounted price.'],
        ],
    ],
    [
        'slug'  => 'account-support',
        'title' => 'Account & Support',
        'items' => [
            ['q' => 'Do I need an account to place an order?', 'a' => 'No — you can browse and check out as a guest by filling in your billing details at checkout.'],
            ['q' => 'How do I contact customer support?', 'a' => 'Reach out to our support team via the Support option in the site header.'],
            ['q' => 'Where can I see my order history?', 'a' => 'Use the Order Tracking page with your order number to check the latest status of any order.'],
            ['q' => 'I have a referral code. Where do I enter it?', 'a' => 'You can enter your referral code in the optional "Referral code" field during checkout.'],
        ],
    ],
];
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
        <!-- faq -->
        <section class="faq-section">
            <div class="header-container">
                <div class="section-heading pb-3">
                    <span class="cat-eyebrow">Help Center</span>
                    <h1>Frequently Asked Questions</h1>
                </div>

                <nav class="faq-quicknav" aria-label="FAQ categories">
                    <?php foreach ($faqCategories as $cat): ?>
                    <a href="#<?= htmlspecialchars($cat['slug']) ?>"><?= htmlspecialchars($cat['title']) ?></a>
                    <?php endforeach; ?>
                </nav>

                <?php foreach ($faqCategories as $cat): ?>
                <div class="faq-category" id="<?= htmlspecialchars($cat['slug']) ?>">
                    <h2 class="faq-category-title"><?= htmlspecialchars($cat['title']) ?></h2>
                    <div class="faq-list">
                        <?php foreach ($cat['items'] as $item): ?>
                        <div class="faq-item">
                            <button type="button" class="faq-question">
                                <span><?= htmlspecialchars($item['q']) ?></span>
                                <i class="fi fi-rs-angle-down"></i>
                            </button>
                            <div class="faq-answer">
                                <p><?= htmlspecialchars($item['a']) ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        <!--/ faq -->
    </main>
    <!--/ main-->

    <?php include __DIR__ . '/components/footer.php'; ?>
</body>
</html>
