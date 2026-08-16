<?php
include __DIR__ . '/components/data.php';

$pageTitle       = 'All Products | Buy Mobiles, Laptops, Audio & Wearables Online - Aman India';
$pageDescription = 'Browse the full Aman India product catalog. Filter by category, brand, price and availability, and sort by price or popularity to find mobiles, laptops, tablets, audio and wearables at the best prices.';
$pageKeywords    = 'Aman India products, buy electronics online India, mobile price list, laptop price list, tablet price list, shop by brand, filter products by price, sort by price low to high, sort by price high to low, popular products India, best online electronics deals, buy iPhone online, buy Samsung Galaxy online, buy ASUS laptop online, wireless earbuds online, smartwatch price India';
$pageCanonical   = 'https://www.amanindia.com/products-list.php';

function slugify(string $str): string {
    $str = strtolower($str);
    $str = preg_replace('/[^a-z0-9]+/', '-', $str);
    return trim($str, '-');
}

$productCategories = array_values(array_unique(array_column($productsList, 'category')));
$productBrands = array_values(array_unique(array_column($productsList, 'brand')));
sort($productBrands);

$initialCategory = isset($_GET['category']) ? slugify((string) $_GET['category']) : '';
$initialBrand     = isset($_GET['brand']) ? slugify((string) $_GET['brand']) : '';
$pageSize         = 10;
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
        <!-- shop listing -->
        <section class="shop-listing-section">
            <div class="header-container">
                <div class="section-heading pb-3">
                    <span class="cat-eyebrow">Full Catalog</span>
                    <h1>All Products</h1>
                </div>

                <div class="shop-toolbar">
                    <div class="shop-filters">
                        <div class="filter-group">
                            <label for="filterCategory">Category</label>
                            <div class="select-wrap">
                                <select id="filterCategory" class="filter-select">
                                    <option value="">All Categories</option>
                                    <?php foreach ($productCategories as $cat): ?>
                                    <option value="<?= slugify($cat) ?>"<?= $initialCategory === slugify($cat) ? ' selected' : '' ?>><?= htmlspecialchars($cat) ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <i class="fi fi-rs-angle-down"></i>
                            </div>
                        </div>

                        <div class="filter-group">
                            <label for="filterBrand">Brand</label>
                            <div class="select-wrap">
                                <select id="filterBrand" class="filter-select">
                                    <option value="">All Brands</option>
                                    <?php foreach ($productBrands as $brand): ?>
                                    <option value="<?= slugify($brand) ?>"<?= $initialBrand === slugify($brand) ? ' selected' : '' ?>><?= htmlspecialchars($brand) ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <i class="fi fi-rs-angle-down"></i>
                            </div>
                        </div>

                        <div class="filter-group">
                            <label for="filterPrice">Price</label>
                            <div class="select-wrap">
                                <select id="filterPrice" class="filter-select">
                                    <option value="">Any Price</option>
                                    <option value="0-5000">Under ₹5,000</option>
                                    <option value="5000-25000">₹5,000 - ₹25,000</option>
                                    <option value="25000-75000">₹25,000 - ₹75,000</option>
                                    <option value="75000-999999">Above ₹75,000</option>
                                </select>
                                <i class="fi fi-rs-angle-down"></i>
                            </div>
                        </div>

                        <div class="filter-group">
                            <label for="filterAvailability">Availability</label>
                            <div class="select-wrap">
                                <select id="filterAvailability" class="filter-select">
                                    <option value="">All</option>
                                    <option value="in-stock">In Stock</option>
                                    <option value="out-of-stock">Out of Stock</option>
                                </select>
                                <i class="fi fi-rs-angle-down"></i>
                            </div>
                        </div>

                        <button type="button" class="filter-reset" id="filterReset">Clear Filters</button>
                    </div>

                    <div class="shop-sort">
                        <label for="sortBy">Sort by</label>
                        <div class="select-wrap">
                            <select id="sortBy" class="sort-select">
                                <option value="popular">Popular</option>
                                <option value="price-low-high">Price: Low to High</option>
                                <option value="price-high-low">Price: High to Low</option>
                            </select>
                            <i class="fi fi-rs-angle-down"></i>
                        </div>
                    </div>
                </div>

                <p class="shop-results-count" id="shopResultsCount"><?= count($productsList) ?> products</p>

                <div class="product-grid" id="productGrid" data-page-size="<?= (int) $pageSize ?>">
                    <?php foreach ($productsList as $i => $p): ?>
                    <a href="product-detail.php?id=<?= $i ?>" class="product-card<?= $p['stock'] === 'out-of-stock' ? ' product-card--oos' : '' ?>"
                       data-index="<?= $i ?>"
                       data-category="<?= slugify($p['category']) ?>"
                       data-brand="<?= slugify($p['brand']) ?>"
                       data-price="<?= preg_replace('/[^0-9]/', '', $p['price']) ?>"
                       data-stock="<?= $p['stock'] ?>">
                        <div class="product-card-top">
                            <span class="product-category"><?= htmlspecialchars($p['category']) ?></span>
                            <?php if ($p['stock'] === 'out-of-stock'): ?>
                            <span class="product-quick-actions">
                                <span class="quick-btn quick-btn--disabled" aria-label="Out of stock"><i class="fi fi-rs-ban"></i></span>
                            </span>
                            <?php endif; ?>
                        </div>
                        <span class="product-thumb">
                            <img src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['alt']) ?>" loading="lazy">
                            <?php if ($p['stock'] === 'out-of-stock'): ?><span class="oos-badge">Out Of Stock</span><?php endif; ?>
                        </span>
                        <span class="product-name"><?= htmlspecialchars($p['name']) ?></span>
                        <span class="product-price"><?= $p['price'] ?></span>
                    </a>
                    <?php endforeach; ?>
                </div>

                <p class="shop-empty-state" id="shopEmptyState" hidden>No products match the selected filters.</p>

                <div class="view-more-wrap">
                    <button type="button" class="view-more-btn" id="loadMoreBtn">Load More <i class="fi fi-rs-arrow-right"></i></button>
                </div>
            </div>
        </section>
        <!--/ shop listing -->
    </main>
    <!--/ main-->

    <?php include __DIR__ . '/components/footer.php'; ?>
</body>
</html>
