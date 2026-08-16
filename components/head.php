<?php
$pageTitle       = $pageTitle       ?? 'Aman India | Online Shopping for Mobiles, TVs, Laptops & Home Appliances';
$pageDescription = $pageDescription ?? 'Shop the latest mobiles, televisions, refrigerators, air conditioners, washing machines, laptops, speakers and water purifiers online at Aman India. Best prices, top brands like Apple, Samsung, LG & Bosch, and fast delivery across India.';
$pageKeywords    = $pageKeywords    ?? 'Aman India, online shopping India, buy mobiles online, smartphones online, iPhone price India, Samsung Galaxy online, buy laptops online, LED TV online, smart TV price, refrigerator online, air conditioner online, split AC price, washing machine online, wireless earbuds, bluetooth speakers, water purifier online, electronics store India, home appliances online, best online electronics shop';
$pageCanonical   = $pageCanonical   ?? 'https://www.amanindia.com/';
$pageRobots      = $pageRobots      ?? 'index, follow';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- primary meta tags -->
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($pageKeywords) ?>">
    <meta name="author" content="Aman India">
    <meta name="robots" content="<?= htmlspecialchars($pageRobots) ?>">
    <meta name="revisit-after" content="7 days">
    <meta name="language" content="English">
    <meta name="theme-color" content="#E4002B">
    <link rel="canonical" href="<?= htmlspecialchars($pageCanonical) ?>" />

    <!-- open graph / facebook -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Aman India">
    <meta property="og:url" content="<?= htmlspecialchars($pageCanonical) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta property="og:image" content="https://www.amanindia.com/img/logo.png">
    <meta property="og:locale" content="en_IN">

    <!-- twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?= htmlspecialchars($pageCanonical) ?>">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta name="twitter:image" content="https://www.amanindia.com/img/logo.png">

    <link rel="icon" type="image/png" sizes="32x32" href="img/fav.png" />

    <!-- structured data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "OnlineStore",
        "name": "Aman India",
        "url": "https://www.amanindia.com/",
        "logo": "https://www.amanindia.com/img/logo.png",
        "description": "Aman India is an online electronics store offering mobiles, televisions, refrigerators, air conditioners, washing machines, laptops, speakers and water purifiers at the best prices.",
        "sameAs": [
            "https://www.facebook.com/",
            "https://www.twitter.com/",
            "https://www.instagram.com/",
            "https://www.linkedin.com/"
        ],
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://www.amanindia.com/search?q={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>

     <!-- styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/swiper.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
