<?php
include __DIR__ . '/data.php';

$footerColumns = [
    'Make Money with Us' => $footerLinks['Make Money with Us'],
    'Product Categories'  => array_map(fn($cat) => ['label' => $cat['name'], 'href' => categoryShopUrl($cat)], $categories),
    'Let Us Help You'     => $footerLinks['Let Us Help You'],
    'Get to Know Us'      => $footerLinks['Get to Know Us'],
];
?>
<!-- footer -->
 <footer class="site-footer">

    <div class="footer-links-band">
        <div class="header-container">
            <div class="footer-links-grid">

                <?php foreach ($footerColumns as $columnTitle => $links): ?>
                <div class="footer-col">
                    <h4><?= htmlspecialchars($columnTitle) ?></h4>
                    <ul>
                        <?php foreach ($links as $link): ?>
                        <li><a href="<?= htmlspecialchars($link['href'] ?? '#') ?>"<?= !empty($link['current']) ? ' class="is-current"' : '' ?>><?= htmlspecialchars($link['label']) ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

    <div class="footer-mid-band">
        <div class="header-container">
            <div class="footer-mid-row">
                <a href="index.php" class="footer-logo">
                    <img src="img/logo.png" alt="Aman India" loading="lazy">
                </a>

                <div class="footer-social">
                    <?php foreach ($footerSocial as $social): ?>
                    <a href="#" class="footer-social-link" aria-label="<?= htmlspecialchars($social['name']) ?>">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <?= $social['icon'] ?>
                        </svg>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="footer-tags">
                <?php foreach ($footerTags as $tag): ?>
                <a href="<?= htmlspecialchars($tag['href']) ?>"><?= htmlspecialchars($tag['label']) ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="footer-bottom-band">
        <div class="header-container">
            <div class="footer-bottom-row">
                <p class="footer-copyright">Copyright 2026 &copy; Aman India. All rights reserved.</p>

                <div class="footer-payments">
                    <?php foreach ($paymentBadges as $badge): ?>
                    <span class="payment-badge"><?= htmlspecialchars($badge) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

 </footer>
 <!--/ footer -->

 <!-- script files-->
  <!--[if lte IE 9]>
  <script src="js/ie.lteIE9.js"></script>
<![endif]-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/custom.js"></script>
<script>
    var swiper = new Swiper(".mySwiper-offer", {});
</script>
  <!--/ scripts-->
