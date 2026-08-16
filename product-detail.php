<?php
include __DIR__ . '/components/data.php';

function slugify(string $str): string {
    $str = strtolower($str);
    $str = preg_replace('/[^a-z0-9]+/', '-', $str);
    return trim($str, '-');
}

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
if ($id < 0 || $id >= count($productsList)) {
    $id = 0;
}
$product = $productsList[$id];
$isOutOfStock = $product['stock'] === 'out-of-stock';

$relatedProducts = [];
foreach ($productsList as $index => $candidate) {
    if ($index === $id) continue;
    if ($candidate['category'] !== $product['category']) continue;
    $relatedProducts[] = ['index' => $index, 'product' => $candidate];
    if (count($relatedProducts) >= 5) break;
}

$pageTitle       = $product['name'] . ' | Buy Online at Best Price - Aman India';
$pageDescription = $product['description'] . ' Price ' . $product['price'] . '. Shop ' . $product['name'] . ' online at Aman India with the best deals on ' . $product['brand'] . ' ' . $product['category'] . '.';
$pageKeywords    = $product['name'] . ', buy ' . $product['name'] . ' online, ' . $product['brand'] . ' ' . $product['category'] . ' price India, ' . $product['category'] . ' online India, ' . $product['brand'] . ' online India, Aman India';
$pageCanonical   = 'https://www.amanindia.com/product-detail.php?id=' . $id;
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
        <!-- product detail -->
        <section class="product-detail-section">
            <div class="header-container">
                <nav class="breadcrumb" aria-label="Breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="breadcrumb-sep">/</span>
                    <a href="products-list.php?category=<?= htmlspecialchars(slugify($product['category'])) ?>"><?= htmlspecialchars($product['category']) ?></a>
                    <span class="breadcrumb-sep">/</span>
                    <span class="breadcrumb-current"><?= htmlspecialchars($product['name']) ?></span>
                </nav>

                <div class="product-detail-grid">
                    <div class="product-detail-media">
                        <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['alt']) ?>">
                        <?php if ($isOutOfStock): ?><span class="oos-badge">Out Of Stock</span><?php endif; ?>
                    </div>

                    <div class="product-detail-info">
                        <span class="product-detail-category"><?= htmlspecialchars($product['category']) ?></span>
                        <h1 class="product-detail-name"><?= htmlspecialchars($product['name']) ?></h1>

                        <div class="product-detail-price">
                            <span class="price-now"><?= $product['price'] ?></span>
                        </div>

                        <p class="product-detail-desc"><?= htmlspecialchars($product['description']) ?></p>

                        <?php if (!empty($product['highlights'])): ?>
                        <div class="product-detail-highlights-block">
                            <span class="product-detail-subheading">Highlights</span>
                            <ul class="product-detail-highlights">
                                <?php foreach ($product['highlights'] as $highlight): ?>
                                <li><?= htmlspecialchars($highlight) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>

                        <ul class="product-detail-meta">
                            <li><span>Brand</span><span><?= htmlspecialchars($product['brand']) ?></span></li>
                            <li><span>Category</span><span><?= htmlspecialchars($product['category']) ?></span></li>
                            <li><span>Availability</span><span class="stock-<?= $product['stock'] ?>"><?= $isOutOfStock ? 'Out of Stock' : 'In Stock' ?></span></li>
                        </ul>

                        <?php if ($isOutOfStock): ?>
                        <span class="buy-now-btn buy-now-btn--disabled">Out of Stock</span>
                        <?php else: ?>
                        <a href="checkout.php?id=<?= $id ?>" class="buy-now-btn">Buy Now</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <!--/ product detail -->

        <?php if (!empty($relatedProducts)): ?>
        <!-- related products -->
        <section class="related-products-section">
            <div class="header-container">
                <div class="section-heading pb-3">
                    <span class="cat-eyebrow">You May Also Like</span>
                    <h2>Related Products</h2>
                </div>

                <div class="product-grid related-products-grid">
                    <?php foreach ($relatedProducts as $related): ?>
                    <?php $rp = $related['product']; ?>
                    <a href="product-detail.php?id=<?= $related['index'] ?>" class="product-card<?= $rp['stock'] === 'out-of-stock' ? ' product-card--oos' : '' ?>">
                        <div class="product-card-top">
                            <span class="product-category"><?= htmlspecialchars($rp['category']) ?></span>
                            <?php if ($rp['stock'] === 'out-of-stock'): ?>
                            <span class="product-quick-actions">
                                <span class="quick-btn quick-btn--disabled" aria-label="Out of stock"><i class="fi fi-rs-ban"></i></span>
                            </span>
                            <?php endif; ?>
                        </div>
                        <span class="product-thumb">
                            <img src="<?= htmlspecialchars($rp['image']) ?>" alt="<?= htmlspecialchars($rp['alt']) ?>" loading="lazy">
                            <?php if ($rp['stock'] === 'out-of-stock'): ?><span class="oos-badge">Out Of Stock</span><?php endif; ?>
                        </span>
                        <span class="product-name"><?= htmlspecialchars($rp['name']) ?></span>
                        <span class="product-price"><?= $rp['price'] ?></span>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--/ related products -->
        <?php endif; ?>
    </main>
    <!--/ main-->

    <?php include __DIR__ . '/components/footer.php'; ?>
</body>
</html>
