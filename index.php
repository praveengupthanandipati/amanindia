<?php include __DIR__ . '/components/data.php'; ?>
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
    <main>
        <!-- carousel -->
         <section class="carousel hero-carousel">
            <div class="swiper heroSwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($heroSlides as $slide): ?>
                    <div class="swiper-slide" style="background-image:url(<?= $slide['image'] ?>)">
                        <div class="slide-overlay"></div>
                        <div class="header-container">
                            <div class="slide-content">
                                <span class="slide-eyebrow"><?= htmlspecialchars($slide['eyebrow']) ?></span>
                                <h2 class="slide-title"><?= implode('<br>', array_map('htmlspecialchars', $slide['titleLines'])) ?></h2>
                                <p class="slide-desc"><?= htmlspecialchars($slide['desc']) ?></p>
                                <a href="<?= htmlspecialchars($slide['link']) ?>" class="slide-cta"><?= htmlspecialchars($slide['cta']) ?> <i class="fi fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
         </section>
         <!--/ carousel -->

         <!-- categories -->
         <section class="categories-section">
            <div class="header-container">
                <div class="section-heading">
                    <span class="cat-eyebrow">Browse</span>
                    <h2>Shop by Category</h2>
                </div>

                <div class="category-grid">

                    <?php foreach ($categories as $cat): ?>
                    <a href="<?= htmlspecialchars(categoryShopUrl($cat)) ?>" class="category-card">
                        <span class="category-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <?= $cat['icon'] ?>
                            </svg>
                        </span>
                        <span class="category-name"><?= htmlspecialchars($cat['name']) ?></span>
                    </a>
                    <?php endforeach; ?>

                </div>
            </div>
         </section>
          <!--/ categories-->

          <!-- columns img -->
           <section class="columnsimg-section">
                <div class="header-container">
                    <div class="promo-columns">

                        <?php foreach ($promoColumns as $promo): ?>
                        <a href="<?= htmlspecialchars($promo['link']) ?>" class="promo-col promo-col--<?= htmlspecialchars($promo['variant']) ?>">
                            <div class="promo-text">
                                <span class="promo-eyebrow"><?= htmlspecialchars($promo['eyebrow']) ?></span>
                                <h3 class="promo-title"><?= htmlspecialchars($promo['title']) ?></h3>
                                <div class="promo-discount">
                                    <span class="discount-label">Weekend Discount</span>
                                    <div class="price-row">
                                        <span class="price-now"><?= $promo['priceNow'] ?></span>
                                        <span class="price-old"><?= $promo['priceOld'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <span class="promo-media"><?= $promo['media'] ?></span>
                        </a>
                        <?php endforeach; ?>

                    </div>
                </div>
           </section>
        <!--/ columns img -->

        <!-- featured products -->
         <section class="featured-products">
            <div class="header-container">
                <div class="section-heading pb-3">
                    <span class="cat-eyebrow">Handpicked For You</span>
                    <h2>Featured Products</h2>
                </div>

                <div class="product-grid">

                    <?php foreach ($featuredProducts as $p): ?>
                    <a href="#" class="product-card<?= !empty($p['oos']) ? ' product-card--oos' : '' ?>">
                        <div class="product-card-top">
                            <span class="product-category"><?= htmlspecialchars($p['category']) ?></span>
                            <?php if (!empty($p['oos'])): ?>
                            <span class="product-quick-actions">
                                <span class="quick-btn quick-btn--disabled" aria-label="Out of stock"><i class="fi fi-rs-ban"></i></span>
                            </span>
                            <?php endif; ?>
                        </div>
                        <span class="product-thumb">
                            <img src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['alt']) ?>" loading="lazy">
                            <?php if (!empty($p['oos'])): ?><span class="oos-badge">Out Of Stock</span><?php endif; ?>
                        </span>
                        <span class="product-name"><?= htmlspecialchars($p['name']) ?></span>
                        <span class="product-price"><?= $p['price'] ?></span>
                    </a>
                    <?php endforeach; ?>

                </div>

                <div class="view-more-wrap">
                    <a href="products-list.php" class="view-more-btn">View More Products <i class="fi fi-rs-arrow-right"></i></a>
                </div>
            </div>
         </section>
         <!--/ featured products-->

         <!-- store -->
          <section class="store-section">
            <div class="store-grid">
                <div class="store-text">
                    <h2>This is Our Store!<br>Together We Shine.</h2>
                    <p>Step into a space built around you — expert guidance, hands-on demos, and the latest tech curated for every home. Discover why shoppers keep coming back to Aman India.</p>
                    <a href="products-list.php" class="store-cta">Shop Now</a>
                </div>

                <div class="store-media">
                    <img src="img/h4-img-4.jpg" alt="Inside the Aman India store" loading="lazy">

                    <div class="store-media-actions">
                        <a href="#" class="store-action store-action--primary" aria-label="Find a store near you"><i class="fi fi-rs-marker"></i></a>
                    </div>

                    <span class="store-expand" aria-hidden="true"><i class="fi fi-rs-expand"></i></span>
                </div>
            </div>
          </section>
          <!--/ store-->

          <!-- tab products -->
           <section class="tab-products-section">
            <div class="header-container">
                <div class="section-heading pb-4">
                    <span class="cat-eyebrow">Trending</span>
                    <h2>Explore By Category</h2>
                </div>

                <div class="tab-products" data-active="all">

                    <?php
                    $tabs = [['slug' => 'all', 'name' => 'All']];
                    foreach ($categories as $cat) {
                        $tabs[] = ['slug' => $cat['slug'], 'name' => $cat['name']];
                    }
                    $categoriesBySlug = [];
                    foreach ($categories as $cat) {
                        $categoriesBySlug[$cat['slug']] = $cat;
                    }
                    ?>

                    <div class="tabs-nav-wrap">
                        <nav class="tabs-nav">
                            <?php foreach ($tabs as $i => $tab): ?>
                            <button type="button" class="tab-btn<?= $i === 0 ? ' is-active' : '' ?>" data-target="<?= $tab['slug'] ?>"><?= htmlspecialchars($tab['name']) ?></button>
                            <?php endforeach; ?>
                        </nav>
                    </div>

                    <?php foreach ($tabs as $tab):
                        $slug = $tab['slug'];
                        $isAll = $slug === 'all';
                        $products = $tabProducts[$slug] ?? [];
                        $cat = $categoriesBySlug[$slug] ?? null;

                        $groupClasses = 'tab-group';
                        if ($isAll) $groupClasses .= ' tab-group--all';
                        if (!empty($cat['tabOpen'])) $groupClasses .= ' is-open';
                    ?>
                    <div class="<?= $groupClasses ?>" data-category="<?= $slug ?>">
                        <?php if (!$isAll): ?>
                        <button type="button" class="accordion-header">
                            <span><?= htmlspecialchars($tab['name']) ?></span>
                            <i class="fi fi-rs-angle-down"></i>
                        </button>
                        <?php endif; ?>

                        <?php if (count($products) > 0): ?>
                        <div class="product-grid tab-panel-grid">

                            <?php foreach ($products as $p): ?>
                            <a href="#" class="product-card">
                                <div class="product-card-top">
                                    <span class="product-category<?= !empty($p['isNew']) ? ' product-category--new' : '' ?>"><?= !empty($p['isNew']) ? 'New' : htmlspecialchars($p['category']) ?></span>
                                    <span class="product-quick-actions">
                                        <span class="quick-btn" aria-label="Compare"><i class="fi fi-rs-settings-sliders"></i></span>
                                        <span class="quick-btn" aria-label="Add to wishlist"><i class="fi fi-rs-heart"></i></span>
                                    </span>
                                </div>
                                <span class="product-thumb">
                                    <img src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['alt']) ?>" loading="lazy">
                                    <span class="thumb-cart" aria-hidden="true"><i class="fi fi-rs-shopping-cart"></i></span>
                                </span>
                                <span class="product-name"><?= htmlspecialchars($p['name']) ?></span>
                                <?php if (!empty($p['priceOld'])): ?>
                                <span class="product-price product-price--offer">
                                    <span class="price-old"><?= $p['priceOld'] ?></span>
                                    <span class="price-now"><?= $p['price'] ?></span>
                                </span>
                                <?php else: ?>
                                <span class="product-price"><?= $p['price'] ?></span>
                                <?php endif; ?>
                            </a>
                            <?php endforeach; ?>

                        </div>
                        <?php else: ?>
                        <div class="tab-panel-grid">
                            <div class="tab-empty-state">
                                <span class="tab-empty-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                        <?= $cat['icon'] ?? '' ?>
                                    </svg>
                                </span>
                                <h3>New <?= htmlspecialchars($tab['name']) ?> Launching Soon</h3>
                                <p>We're curating the best <?= strtolower(htmlspecialchars($tab['name'])) ?> for you. Check back shortly.</p>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>

                </div>

                <div class="view-more-wrap">
                    <a href="products-list.php" class="view-more-btn">View All Products <i class="fi fi-rs-arrow-right"></i></a>
                </div>
            </div>
           </section>
           <!--/ tab products-->

           <!-- brands -->
            <section class="shopby-brand-section">
                <div class="header-container">
                    <div class="section-heading">
                        <span class="cat-eyebrow">Our Partners</span>
                        <h2>Shop by Brand</h2>
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
            <!--/ brands-->
    </main>
    <!--/ main-->

    <?php include __DIR__ . '/components/footer.php'; ?>
</body>
</html>
