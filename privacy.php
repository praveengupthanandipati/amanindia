<?php
include __DIR__ . '/components/data.php';

$pageTitle       = 'Privacy Policy | Aman India';
$pageDescription = 'Read the Aman India Privacy Policy to learn what information we collect, how we use it, and the choices you have when you shop with us online.';
$pageKeywords    = 'Aman India privacy policy, data protection, cookies, personal information, customer data';
$pageCanonical   = 'https://www.amanindia.com/privacy.php';

$lastUpdated = 'August 18, 2026';

$sections = [
    [
        'slug'  => 'introduction',
        'title' => 'Introduction',
        'paragraphs' => [
            'Aman India ("we", "our", "us") operates this website to sell mobiles, laptops, televisions, home appliances and other electronics online. This Privacy Policy explains what information we collect, how we use it, and the choices you have. By using our website, you agree to the practices described in this policy.',
        ],
    ],
    [
        'slug'  => 'information-we-collect',
        'title' => 'Information We Collect',
        'paragraphs' => [
            'We collect information you provide directly to us, and information gathered automatically when you use our website.',
        ],
        'items' => [
            'Contact details such as your name, email address, phone number and delivery address.',
            'Order information, including products purchased, billing details and payment confirmation.',
            'Account information, if you create one, such as your login details and order history.',
            'Technical information, such as your IP address, browser type, device information and pages visited, collected through cookies and similar technologies.',
        ],
    ],
    [
        'slug'  => 'how-we-use-information',
        'title' => 'How We Use Your Information',
        'paragraphs' => [
            'We use the information we collect to:',
        ],
        'items' => [
            'Process and deliver your orders, and keep you updated on their status.',
            'Provide customer support and respond to your enquiries.',
            'Send order confirmations, shipping updates and, where you\'ve opted in, promotional offers.',
            'Improve our website, products and services based on how they are used.',
            'Detect and prevent fraud, and comply with our legal obligations.',
        ],
    ],
    [
        'slug'  => 'cookies',
        'title' => 'Cookies & Tracking',
        'paragraphs' => [
            'We use cookies and similar technologies to keep you signed in, remember items in your cart, and understand how our website is used. You can control or disable cookies through your browser settings, though some parts of the site may not work as intended without them.',
        ],
    ],
    [
        'slug'  => 'sharing-of-information',
        'title' => 'How We Share Information',
        'paragraphs' => [
            'We do not sell your personal information. We may share it with:',
        ],
        'items' => [
            'Delivery and logistics partners, to get your order to you.',
            'Payment processors, to securely process your payment. Aman India does not store your card details.',
            'Service providers who help us operate our website, such as hosting and analytics providers.',
            'Authorities, where required by law or to protect our rights and the safety of our users.',
        ],
    ],
    [
        'slug'  => 'data-security',
        'title' => 'Data Security',
        'paragraphs' => [
            'We use reasonable technical and organizational measures to protect your information from unauthorized access, alteration or disclosure. Payment transactions are processed through secure, PCI-DSS compliant gateways. That said, no method of transmission over the internet is completely secure, and we cannot guarantee absolute security.',
        ],
    ],
    [
        'slug'  => 'your-rights',
        'title' => 'Your Rights & Choices',
        'paragraphs' => [
            'You can:',
        ],
        'items' => [
            'Access, update or correct your account and order details.',
            'Request deletion of your personal information, subject to legal and operational requirements.',
            'Opt out of marketing emails at any time using the unsubscribe link in those emails.',
            'Contact us with any privacy-related questions or requests.',
        ],
    ],
    [
        'slug'  => 'childrens-privacy',
        'title' => "Children's Privacy",
        'paragraphs' => [
            'Our website is not directed at children under 18. We do not knowingly collect personal information from children. If you believe a child has provided us with personal information, please contact us and we will remove it.',
        ],
    ],
    [
        'slug'  => 'changes-to-policy',
        'title' => 'Changes to This Policy',
        'paragraphs' => [
            'We may update this Privacy Policy from time to time to reflect changes in our practices or for legal reasons. Any updates will be posted on this page along with a revised "last updated" date.',
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

        <!-- privacy intro -->
        <section class="about-intro-section">
            <div class="header-container">
                <div class="about-intro-wrap">
                    <span class="cat-eyebrow">Legal</span>
                    <h1>Privacy Policy</h1>
                    <p>Your privacy matters to us. Here's what information we collect, how we use it, and the choices you have.</p>
                </div>
            </div>
        </section>
        <!--/ privacy intro -->

        <!-- privacy content -->
        <section class="legal-page-section">
            <div class="header-container">
                <p class="legal-updated">Last updated: <?= htmlspecialchars($lastUpdated) ?></p>

                <nav class="faq-quicknav" aria-label="Privacy policy sections">
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
                        <p>If you have any questions about this Privacy Policy or how we handle your information, reach out to us:</p>
                        <ul>
                            <li>Phone: <a href="<?= htmlspecialchars($footerContact['phone']['href']) ?>"><?= htmlspecialchars($footerContact['phone']['label']) ?></a></li>
                            <li>Email: <a href="<?= htmlspecialchars($footerContact['email']['href']) ?>"><?= htmlspecialchars($footerContact['email']['label']) ?></a></li>
                            <li>Address: <?= htmlspecialchars($footerContact['address']) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--/ privacy content -->

    </main>
    <!--/ main-->

    <?php include __DIR__ . '/components/footer.php'; ?>
</body>
</html>
