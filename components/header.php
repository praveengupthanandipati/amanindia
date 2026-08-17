<?php include __DIR__ . '/data.php'; ?>
<!-- header -->
<header class="site-header">
    <div class="header-utility">
        <div class="header-container">
            <ul class="utility-links-left">
                <li><a href="about.php">About Us</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <ul class="utility-links-right">
                <li><a href="track-order.php">Order Tracking</a></li>
            </ul>
        </div>
    </div>

    <div class="header-top">
        <div class="header-container">
            <button type="button" class="menu-toggle" id="menuToggle" aria-label="Open menu" aria-expanded="false" aria-controls="mobileCategoryDrawer">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <a href="index.php" class="header-logo">
                <img src="img/logo.png" alt="Aman India" />
            </a>

            <div class="search-wrap">
                <form class="header-search" role="search" onsubmit="return false;" autocomplete="off">
                    <input type="text" id="headerSearchInput" class="search-input" placeholder="Search for products" aria-label="Search for products" />
                    <button type="submit" class="search-btn" aria-label="Search">
                        <i class="fi fi-rs-search"></i>
                    </button>
                </form>
                <div class="search-suggestions" id="searchSuggestions"></div>
            </div>

            <div class="header-actions">
                <a href="contact.php" class="header-action-link">
                    <i class="fi fi-rs-headset"></i>
                    <span>Support</span>
                </a>
            </div>
        </div>
    </div>

    <nav class="header-categories">
        <div class="header-container">
            <ul class="category-list">
                <?php foreach ($categories as $cat): ?>
                <li><a href="<?= htmlspecialchars(categoryShopUrl($cat)) ?>"><?= htmlspecialchars($cat['name']) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>
</header>
<!-- header -->

<!-- mobile category drawer -->
<div class="mobile-drawer-backdrop" id="mobileDrawerBackdrop"></div>
<aside class="mobile-drawer" id="mobileCategoryDrawer" aria-hidden="true">
    <div class="mobile-drawer-header">
        <span>Categories</span>
        <button type="button" class="mobile-drawer-close" id="mobileDrawerClose" aria-label="Close menu">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                <line x1="5" y1="5" x2="19" y2="19"></line>
                <line x1="19" y1="5" x2="5" y2="19"></line>
            </svg>
        </button>
    </div>
    <ul class="mobile-drawer-list">
        <?php foreach ($categories as $cat): ?>
        <li><a href="<?= htmlspecialchars(categoryShopUrl($cat)) ?>"><?= htmlspecialchars($cat['name']) ?></a></li>
        <?php endforeach; ?>
    </ul>
</aside>
<!--/ mobile category drawer -->
