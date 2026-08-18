<?php
include __DIR__ . '/components/data.php';

$pageTitle       = 'Terms and Conditions | Aman India';
$pageDescription = 'Read the Aman India Terms and Conditions covering website use, orders, payments, shipping, returns, warranty and your rights as a customer.';
$pageKeywords    = 'Aman India terms and conditions, terms of use, terms of service, purchase terms, return policy, warranty terms';
$pageCanonical   = 'https://www.amanindia.com/terms.php';

$lastUpdated = 'August 18, 2026';

$sections = [
    [
        'slug'  => 'acceptance-of-terms',
        'title' => 'Acceptance of Terms',
        'paragraphs' => [
            'These Terms and Conditions ("Terms") govern your use of the Aman India website and your purchase of any products through it. By accessing our website or placing an order, you agree to be bound by these Terms. If you do not agree with any part of these Terms, please do not use our website.',
        ],
    ],
    [
        'slug'  => 'use-of-website',
        'title' => 'Use of Website',
        'paragraphs' => [
            'You agree to use our website only for lawful purposes and in a way that does not infringe the rights of, or restrict or inhibit the use and enjoyment of, this website by anyone else.',
        ],
        'items' => [
            'You will not attempt to gain unauthorized access to any part of the website, other accounts, or computer systems connected to it.',
            'You will not use automated tools to scrape, copy or reproduce content from the website without our permission.',
            'You will not upload or transmit viruses, malicious code, or any content that is unlawful, offensive or infringes on third-party rights.',
        ],
    ],
    [
        'slug'  => 'account-registration',
        'title' => 'Account Registration',
        'paragraphs' => [
            'You may browse and check out as a guest, or create an account for a faster checkout experience. If you create an account, you are responsible for maintaining the confidentiality of your login details and for all activity that occurs under your account. Please notify us immediately if you suspect any unauthorized use of your account.',
        ],
    ],
    [
        'slug'  => 'products-pricing',
        'title' => 'Products, Pricing & Availability',
        'paragraphs' => [
            'We make every effort to display accurate product information, images and pricing. However:',
        ],
        'items' => [
            'Product images are for illustrative purposes and actual products may vary slightly in appearance.',
            'Prices are listed in Indian Rupees (INR) and are subject to change without prior notice.',
            'All products are subject to availability. We reserve the right to limit quantities or discontinue any product at any time.',
            'In the event of a pricing or listing error, we reserve the right to cancel the affected order and issue a full refund.',
        ],
    ],
    [
        'slug'  => 'orders-payments',
        'title' => 'Orders & Payments',
        'paragraphs' => [
            'When you place an order, you are making an offer to purchase the selected products. An order is confirmed only once payment has been successfully processed.',
        ],
        'items' => [
            'Payments are accepted via Credit Card, Debit Card and NetBanking, processed securely through Razorpay.',
            'We do not store your card details on our servers.',
            'We may cancel or refuse any order at our discretion, including in cases of suspected fraud, pricing errors, or stock unavailability.',
        ],
    ],
    [
        'slug'  => 'shipping-delivery',
        'title' => 'Shipping & Delivery',
        'paragraphs' => [
            'We deliver to 50+ cities across India. Delivery timelines shown at checkout are estimates and may vary due to location, courier delays or circumstances beyond our control. You can track the status of your order at any time using the Order Tracking page.',
        ],
    ],
    [
        'slug'  => 'returns-refunds',
        'title' => 'Returns, Refunds & Cancellations',
        'paragraphs' => [
            'Most products can be returned within 7 days of delivery if unused, in original packaging, and accompanied by all accessories and invoices. Certain categories may be excluded from returns for hygiene or safety reasons — refer to the individual product page for eligibility.',
            'Once a returned product is received and inspected, approved refunds are processed to the original payment method within 5-7 business days. Orders can be cancelled before they are dispatched by contacting our support team; orders already dispatched cannot be cancelled.',
        ],
    ],
    [
        'slug'  => 'warranty',
        'title' => 'Warranty',
        'paragraphs' => [
            'All products sold on Aman India are 100% genuine and covered by the manufacturer\'s warranty, where applicable. Warranty service is provided directly by the brand or its authorized service centers. Please retain your invoice and warranty card, as they may be required to raise a claim.',
        ],
    ],
    [
        'slug'  => 'intellectual-property',
        'title' => 'Intellectual Property',
        'paragraphs' => [
            'All content on this website, including text, graphics, logos, images and software, is the property of Aman India or its licensors and is protected by applicable intellectual property laws. You may not reproduce, distribute or create derivative works from this content without our prior written consent.',
        ],
    ],
    [
        'slug'  => 'limitation-of-liability',
        'title' => 'Limitation of Liability',
        'paragraphs' => [
            'To the fullest extent permitted by law, Aman India shall not be liable for any indirect, incidental or consequential damages arising from your use of this website or the products purchased through it. Our total liability for any claim relating to an order shall not exceed the amount you paid for that order.',
        ],
    ],
    [
        'slug'  => 'governing-law',
        'title' => 'Governing Law',
        'paragraphs' => [
            'These Terms are governed by the laws of India. Any disputes arising out of or relating to these Terms or your use of the website shall be subject to the exclusive jurisdiction of the courts of Hyderabad, Telangana.',
        ],
    ],
    [
        'slug'  => 'changes-to-terms',
        'title' => 'Changes to These Terms',
        'paragraphs' => [
            'We may update these Terms from time to time to reflect changes in our practices or for legal reasons. Any updates will be posted on this page along with a revised "last updated" date. Continued use of the website after changes are posted constitutes your acceptance of the revised Terms.',
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

        <!-- terms intro -->
        <section class="about-intro-section">
            <div class="header-container">
                <div class="about-intro-wrap">
                    <span class="cat-eyebrow">Legal</span>
                    <h1>Terms and Conditions</h1>
                    <p>Please read these terms carefully before using our website or placing an order with Aman India.</p>
                </div>
            </div>
        </section>
        <!--/ terms intro -->

        <!-- terms content -->
        <section class="legal-page-section">
            <div class="header-container">
                <p class="legal-updated">Last updated: <?= htmlspecialchars($lastUpdated) ?></p>

                <nav class="faq-quicknav" aria-label="Terms and conditions sections">
                    <?php foreach ($sections as $section): ?>
                    <a href="#<?= htmlspecialchars($section['slug']) ?>"><?= htmlspecialchars($section['title']) ?></a>
                    <?php endforeach; ?>
                    <a href="#contact-us">Contact Us</a>
                </nav>

                <div class="legal-content">
                    <?php foreach ($sections as $section): ?>
                    <div class="legal-block" id="<?= htmlspecialchars($section['slug']) ?>">
                        <h2><?= htmlspecialchars($section['title']) ?></h2>
                        <?php foreach ($section['paragraphs'] as $paragraph): ?>
                        <p><?= htmlspecialchars($paragraph) ?></p>
                        <?php endforeach; ?>
                        <?php if (!empty($section['items'])): ?>
                        <ul>
                            <?php foreach ($section['items'] as $item): ?>
                            <li><?= htmlspecialchars($item) ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>

                    <div class="legal-block" id="contact-us">
                        <h2>Contact Us</h2>
                        <p>If you have any questions about these Terms and Conditions, reach out to us:</p>
                        <ul>
                            <li>Phone: <a href="<?= htmlspecialchars($footerContact['phone']['href']) ?>"><?= htmlspecialchars($footerContact['phone']['label']) ?></a></li>
                            <li>Email: <a href="<?= htmlspecialchars($footerContact['email']['href']) ?>"><?= htmlspecialchars($footerContact['email']['label']) ?></a></li>
                            <li>Address: <?= htmlspecialchars($footerContact['address']) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--/ terms content -->

    </main>
    <!--/ main-->

    <?php include __DIR__ . '/components/footer.php'; ?>
</body>
</html>
