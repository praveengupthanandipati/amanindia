<?php
include __DIR__ . '/components/data.php';

$pageTitle       = 'About Us | Aman India';
$pageDescription = 'Learn about Aman India — an online electronics retailer built on genuine products, honest pricing and reliable delivery for mobiles, laptops, TVs and home appliances across India.';
$pageKeywords    = 'about Aman India, Aman India electronics store, who is Aman India, Aman India company, genuine electronics online India, trusted electronics retailer India';
$pageCanonical   = 'https://www.amanindia.com/about.php';

$values = [
    [
        'title' => '100% Genuine Products',
        'desc'  => 'Every product is sourced directly from authorized brands and distributors, so you always get what you paid for, backed by full manufacturer warranty.',
        'icon'  => "<path d='M12 3l7 3v5c0 4.5-3 8-7 9-4-1-7-4.5-7-9V6z'></path><path d='M9 12l2 2 4-4'></path>",
    ],
    [
        'title' => 'Honest, Competitive Pricing',
        'desc'  => 'No inflated MRPs or fake discounts — just fair, transparent prices on the products you actually want to buy.',
        'icon'  => "<path d='M2.5 11.5V4a1.5 1.5 0 011.5-1.5h7.5L21 12l-9 9-9.5-9.5z'></path><circle cx='7' cy='7' r='1.5'></circle>",
    ],
    [
        'title' => 'Fast, Reliable Delivery',
        'desc'  => 'From metro cities to smaller towns, we get your order to you quickly and keep you updated at every step.',
        'icon'  => "<rect x='1' y='7' width='13' height='9'></rect><path d='M14 10h4l3 3v3h-7z'></path><circle cx='6' cy='18' r='1.6'></circle><circle cx='17' cy='18' r='1.6'></circle>",
    ],
    [
        'title' => 'Support That Actually Helps',
        'desc'  => 'Our support team is available before and after your purchase — for setup help, order tracking or returns.',
        'icon'  => "<path d='M4 13v-1a8 8 0 0116 0v1'></path><rect x='2.5' y='12' width='4' height='6' rx='1.5'></rect><rect x='17.5' y='12' width='4' height='6' rx='1.5'></rect><path d='M19.5 18v1a3 3 0 01-3 3h-2'></path>",
    ],
];

$stats = [
    ['target' => 10, 'suffix' => '+', 'label' => 'Years Serving Customers'],
    ['target' => 8,  'suffix' => '',  'label' => 'Product Categories'],
    ['target' => 50, 'suffix' => '+', 'label' => 'Cities Delivered To'],
    ['target' => 25, 'suffix' => '+', 'label' => 'Trusted Brand Partners'],
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

        <!-- about intro -->
        <section class="about-intro-section">
            <div class="header-container">
                <div class="about-intro-wrap">
                    <span class="cat-eyebrow">About Aman India</span>
                    <h1>India's trusted destination for the latest electronics</h1>
                    <p>We help millions of shoppers find genuine mobiles, laptops, televisions and home appliances at honest prices — backed by real customer support, from checkout to delivery.</p>
                </div>
            </div>
        </section>
        <!--/ about intro -->

        <!-- about story -->
        <section class="about-story-section">
            <div class="header-container">
                <div class="about-story-grid">
                    <div class="about-story-media">
                        <img src="img/h4-img-4.jpg" alt="Inside the Aman India store" loading="lazy">
                    </div>
                    <div class="about-story-text">
                        <span class="cat-eyebrow">Our Story</span>
                        <h2>Built on a simple promise</h2>
                        <p>Aman India began as a single electronics store, built on a simple promise: sell only genuine products, at fair prices, backed by real service. Today, that same promise powers our online store, where customers across India shop for the latest mobiles, laptops, televisions, home appliances and audio gear from brands they already trust.</p>
                        <p>We work directly with authorized brand partners, so every product that reaches your door is genuine and covered by manufacturer warranty. From our fulfillment centers to your home, we're focused on getting the right product to you — on time, every time.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--/ about story -->

        <!-- about values -->
        <section class="about-values-section">
            <div class="header-container">
                <div class="section-heading pb-3">
                    <span class="cat-eyebrow">Why Shop With Us</span>
                    <h2>What We Stand For</h2>
                </div>

                <div class="about-values-grid">
                    <?php foreach ($values as $value): ?>
                    <div class="value-card">
                        <span class="value-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <?= $value['icon'] ?>
                            </svg>
                        </span>
                        <h3><?= htmlspecialchars($value['title']) ?></h3>
                        <p><?= htmlspecialchars($value['desc']) ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--/ about values -->

        <!-- about stats -->
        <section class="about-stats-section">
            <div class="header-container">
                <div class="about-stats-grid">
                    <?php foreach ($stats as $stat): ?>
                    <div class="stat-item">
                        <span class="stat-number"><span class="stat-count" data-target="<?= (int) $stat['target'] ?>">0</span><?= htmlspecialchars($stat['suffix']) ?></span>
                        <span class="stat-label"><?= htmlspecialchars($stat['label']) ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--/ about stats -->

        <!-- about brands -->
        <section class="about-brands-section">
            <div class="header-container">
                <div class="section-heading pb-3">
                    <span class="cat-eyebrow">Our Partners</span>
                    <h2>Brands We Carry</h2>
                </div>

                <div class="brand-grid">
                    <?php foreach ($brands as $brand): ?>
                    <a href="<?= htmlspecialchars(brandShopUrl($brand)) ?>" class="brand-card">
                        <img src="<?= htmlspecialchars($brand['image']) ?>" alt="<?= htmlspecialchars($brand['alt']) ?>" loading="lazy">
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--/ about brands -->

        <!-- about cta -->
        <section class="about-cta-section">
            <div class="header-container">
                <div class="about-cta-box">
                    <h2>Ready to find your next favourite gadget?</h2>
                    <p>Browse mobiles, laptops, audio and wearables — all in one place.</p>
                    <a href="products-list.php" class="view-more-btn">Browse All Products <i class="fi fi-rs-arrow-right"></i></a>
                </div>
            </div>
        </section>
        <!--/ about cta -->

    </main>
    <!--/ main-->

    <?php include __DIR__ . '/components/footer.php'; ?>
</body>
</html>
