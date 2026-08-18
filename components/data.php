<?php
if (!isset($siteData)) {
    $siteData = json_decode(file_get_contents(__DIR__ . '/../data/site-data.json'), true);
}

$productsList  = $siteData['productsList'];
$heroSlides    = $siteData['heroSlides'];
$categories    = $siteData['categories'];
$promoColumns  = $siteData['promoColumns'];
$featuredProducts = $siteData['featuredProducts'];
$tabProducts   = $siteData['tabProducts'];
$brands        = $siteData['brands'];
$footerLinks   = $siteData['footerLinks'];
$footerContact = $siteData['footerContact'];
$footerSocial  = $siteData['footerSocial'];
$paymentBadges = $siteData['paymentBadges'];

if (!function_exists('categoryShopUrl')) {
    function categoryShopUrl(array $category): string {
        if (!empty($category['shopCategory'])) {
            return 'products-list.php?category=' . urlencode($category['shopCategory']);
        }
        return 'products-list.php';
    }
}

if (!function_exists('brandShopUrl')) {
    function brandShopUrl(array $brand): string {
        if (!empty($brand['shopBrand'])) {
            return 'products-list.php?brand=' . urlencode($brand['shopBrand']);
        }
        return 'products-list.php';
    }
}
