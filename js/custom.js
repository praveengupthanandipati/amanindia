// Home hero carousel
var heroSwiper = new Swiper('.heroSwiper', {
  loop: true,
  effect: 'fade',
  fadeEffect: {
    crossFade: true,
  },
  speed: 1000,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },
  pagination: {
    el: '.hero-carousel .swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.hero-carousel .swiper-button-next',
    prevEl: '.hero-carousel .swiper-button-prev',
  },
  keyboard: {
    enabled: true,
  },
});

var swiper = new Swiper('.swiper-testimonials-home', {
      slidesPerView: 1,
      spaceBetween: 10,
	   autoplay: {
        delay: 5000,
        disableOnInteraction: true,
      },
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
      }
    });
// Custom Marquee JS for immediate repeat and pause on hover
document.addEventListener('DOMContentLoaded', function() {
  var marquee = document.querySelector('.custom-marquee');
  if (marquee) {
    // Duplicate content for seamless loop
    marquee.innerHTML += marquee.innerHTML;
  }
});

     var swiper = new Swiper(".mySwiper-hero", {
      slidesPerView: 1,
      spaceBetween: 2,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".hero-swiper-next",
        prevEl: ".hero-swiper-prev",
      },
      loop: true,
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
      },
    });


    var swiper = new Swiper(".mySwiper-hero-right", {
      spaceBetween: 30,
       autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      effect: "fade",
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });



// Ensure header class toggling works correctly
$(function () {
  const $header = $(".fixed-top");
  function toggleHeaderClass() {
    if ($(window).scrollTop() > 10) {
      $header.addClass("fixed-top-nav");
    } else {
      $header.removeClass("fixed-top-nav");
    }
  }
  $(window).on('scroll', toggleHeaderClass);
  toggleHeaderClass(); // Run on page load
  
  // Initialize AOS with premium settings
  if (typeof AOS !== 'undefined') {
    AOS.init({
      duration: 900,
      once: true,
      offset: 80,
      easing: 'ease-out-cubic',
      anchorPlacement: 'top-bottom',
      disable: false
    });
  }

  // Scroll-triggered number counter animation
  function animateCounters() {
    var counters = document.querySelectorAll('.safety-col .number');
    var observer = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var el = entry.target;
          var target = parseInt(el.textContent);
          var count = 0;
          var increment = 1;
          var timer = setInterval(function() {
            count += increment;
            el.textContent = count < 10 ? '0' + count : count;
            if (count >= target) {
              clearInterval(timer);
              el.textContent = target < 10 ? '0' + target : target;
            }
          }, 150);
          observer.unobserve(el);
        }
      });
    }, { threshold: 0.5 });
    counters.forEach(function(counter) {
      observer.observe(counter);
    });
  }
  animateCounters();

  // Subtle parallax for decorative icons on scroll
  $(window).on('scroll', function() {
    var scrollTop = $(window).scrollTop();
    $('.whovr01icon').css('transform', 'translateY(' + (scrollTop * 0.04) + 'px)');
    $('.whovr02icon').css('transform', 'translateY(' + (scrollTop * -0.03) + 'px)');
    $('.reachicon01').css('transform', 'translateY(' + (scrollTop * 0.05) + 'px) rotate(' + (scrollTop * 0.02) + 'deg)');
    $('.reachicon02').css('transform', 'translateY(' + (scrollTop * -0.04) + 'px) rotate(' + (scrollTop * -0.015) + 'deg)');
    $('.zoneicon01').css('transform', 'translateY(' + (scrollTop * 0.03) + 'px)');
  });
});
// Only handle mobile: remove styles on resize to mobile
$(function () {
  function handleDropdownMobile() {
    if (window.innerWidth <= 991) {
      $(".navbar-nav .dropdown").off('mouseenter mouseleave');
      $(".navbar-nav .dropdown-menu").removeAttr('style');
    }
  }
  handleDropdownMobile();
  $(window).on('resize', handleDropdownMobile);
});


//on click move to browser top
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $("#movetop").fadeIn();
    } else {
      $("#movetop").fadeOut();
    }
  });
  //click event to scroll to top
  $("#movetop").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 200);
  });
});

//swiper home banmner
var swiper = new Swiper(".homeSwiper", {
  slidesPerView: 1,
  spaceBetween: 0,
  speed: 1200,
  // effect: "cube",
  // cubeEffect: {
  //   slideShadows: false,
  // },
  // effect: "flip",
  // flipEffect: {
  //   slideShadows: false,
  // },
  // Boolean: true,
  parallax: true,
  autoplay: {
    delay: 8000,
    disableOnInteraction: true,
  },
  loop: true,
  keyboard: {
    enabled: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".testimonials-swiper", {
  spaceBetween: 0,
  centeredSlides: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

//speakers
var swiper = new Swiper(".swiper-speakers", {
  slidesPerView: 1,
  spaceBetween: 10,
  // loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: true,
  },
  // init: false,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 6,
      spaceBetween: 10,
    },
    1500: {
      slidesPerView: 7,
      spaceBetween: 10,
    },
  },
});

document.onreadystatechange = function () {
  var state = document.readyState;
  if (state == "complete") {
    setTimeout(function () {
      var loader = document.getElementById("load");
      if (loader) loader.classList.add("is-hidden");
    }, 500);
  }
};


// Mobile category drawer (off-canvas)
$(function () {
  var $toggle = $('#menuToggle');
  var $drawer = $('#mobileCategoryDrawer');
  var $backdrop = $('#mobileDrawerBackdrop');
  var $closeBtn = $('#mobileDrawerClose');
  if (!$toggle.length || !$drawer.length) return;

  function openDrawer() {
    $drawer.addClass('is-active').attr('aria-hidden', 'false');
    $backdrop.addClass('is-active');
    $toggle.addClass('is-active').attr('aria-expanded', 'true');
    $('body').addClass('drawer-open');
  }

  function closeDrawer() {
    $drawer.removeClass('is-active').attr('aria-hidden', 'true');
    $backdrop.removeClass('is-active');
    $toggle.removeClass('is-active').attr('aria-expanded', 'false');
    $('body').removeClass('drawer-open');
  }

  $toggle.on('click', function () {
    if ($drawer.hasClass('is-active')) {
      closeDrawer();
    } else {
      openDrawer();
    }
  });

  $closeBtn.on('click', closeDrawer);
  $backdrop.on('click', closeDrawer);

  $(document).on('keyup', function (e) {
    if (e.key === 'Escape') closeDrawer();
  });
});

// Tab Products - desktop tabs / mobile accordion
$(function () {
  var $tabProducts = $('.tab-products');
  if (!$tabProducts.length) return;

  function setActiveTab(target) {
    $tabProducts.attr('data-active', target);
    $tabProducts.find('.tab-group').removeClass('is-current');
    $tabProducts.find('.tab-group[data-category="' + target + '"]').addClass('is-current');
  }

  // Desktop tabs
  setActiveTab($tabProducts.attr('data-active') || 'all');

  $tabProducts.on('click', '.tab-btn', function () {
    var target = $(this).data('target');
    $(this).addClass('is-active').siblings('.tab-btn').removeClass('is-active');
    setActiveTab(target);
  });

  // Mobile accordion (single-open)
  $tabProducts.on('click', '.accordion-header', function () {
    var $group = $(this).closest('.tab-group');
    var isOpen = $group.hasClass('is-open');
    $group.siblings('.tab-group').removeClass('is-open');
    $group.toggleClass('is-open', !isOpen);
  });
});

// Header search - autocomplete with sample product catalog
$(function () {
  var products = [
    { name: "iPhone 15 Pro Max 256GB", category: "Mobiles" },
    { name: "Samsung Galaxy S24 Ultra", category: "Mobiles" },
    { name: "OnePlus 12R 5G", category: "Mobiles" },
    { name: "Samsung 55\" Crystal 4K Smart TV", category: "Televisions" },
    { name: "LG 65\" OLED Smart TV", category: "Televisions" },
    { name: "Sony Bravia 43\" Full HD LED TV", category: "Televisions" },
    { name: "LG 260L Double Door Refrigerator", category: "Refrigerators" },
    { name: "Samsung 653L French Door Refrigerator", category: "Refrigerators" },
    { name: "Whirlpool 1.5 Ton 5 Star Split AC", category: "Air Conditioners" },
    { name: "Daikin 1 Ton Inverter Split AC", category: "Air Conditioners" },
    { name: "LG 7Kg Front Load Washing Machine", category: "Washing Machines" },
    { name: "Samsung 8Kg Top Load Washing Machine", category: "Washing Machines" },
    { name: "Dell XPS 13 Laptop", category: "Laptops" },
    { name: "HP Pavilion 15 Laptop", category: "Laptops" },
    { name: "Apple MacBook Air M2", category: "Laptops" },
    { name: "JBL Flip 6 Bluetooth Speaker", category: "Speakers" },
    { name: "Sony SRS-XB100 Party Speaker", category: "Speakers" },
    { name: "Kent Grand Plus Water Purifier", category: "Water Purifiers" },
    { name: "Aquaguard Aura RO+UV Water Purifier", category: "Water Purifiers" }
  ];

  var $input = $('#headerSearchInput');
  var $box = $('#searchSuggestions');
  var activeIndex = -1;

  if (!$input.length || !$box.length) return;

  function escapeRegExp(str) {
    return str.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
  }

  function renderList(list, query) {
    $box.empty();
    activeIndex = -1;

    if (!list.length) {
      $box.append('<div class="no-results">No products found</div>');
      $box.addClass('active');
      return;
    }

    if (!query) {
      $box.append('<div class="suggestion-label">Popular products</div>');
    }

    list.forEach(function (p) {
      var label = p.name;
      if (query) {
        var re = new RegExp('(' + escapeRegExp(query) + ')', 'ig');
        label = p.name.replace(re, '<strong>$1</strong>');
      }
      var $item = $(
        '<div class="suggestion-item">' +
          '<i class="fi fi-rs-search"></i>' +
          '<span class="item-name">' + label + '</span>' +
          '<span class="item-category">' + p.category + '</span>' +
        '</div>'
      );
      $item.attr('data-name', p.name);
      $box.append($item);
    });

    $box.addClass('active');
  }

  function filterProducts(val) {
    var q = val.toLowerCase();
    return products.filter(function (p) {
      return p.name.toLowerCase().indexOf(q) !== -1;
    });
  }

  function refresh() {
    var val = $input.val().trim();
    if (!val) {
      renderList(products.slice(0, 10), '');
    } else {
      renderList(filterProducts(val), val);
    }
  }

  $input.on('focus input', refresh);

  $box.on('click', '.suggestion-item', function () {
    $input.val($(this).attr('data-name'));
    $box.removeClass('active');
  });

  $input.on('keydown', function (e) {
    var $items = $box.find('.suggestion-item');
    if (!$items.length) return;

    if (e.key === 'ArrowDown') {
      e.preventDefault();
      activeIndex = (activeIndex + 1) % $items.length;
      $items.removeClass('active-item').eq(activeIndex).addClass('active-item');
    } else if (e.key === 'ArrowUp') {
      e.preventDefault();
      activeIndex = (activeIndex - 1 + $items.length) % $items.length;
      $items.removeClass('active-item').eq(activeIndex).addClass('active-item');
    } else if (e.key === 'Enter') {
      if (activeIndex > -1) {
        e.preventDefault();
        $items.eq(activeIndex).trigger('click');
      }
    } else if (e.key === 'Escape') {
      $box.removeClass('active');
    }
  });

  $(document).on('click', function (e) {
    if (!$(e.target).closest('.search-wrap').length) {
      $box.removeClass('active');
    }
  });
});

// Shop listing page - filter + sort + load more
$(function () {
  var $grid = $('#productGrid');
  if (!$grid.length) return;

  var $allCards = $grid.find('.product-card').get();
  var $count = $('#shopResultsCount');
  var $empty = $('#shopEmptyState');
  var $loadMore = $('#loadMoreBtn');
  var pageSize = parseInt($grid.data('page-size'), 10) || 10;
  var visibleCount = pageSize;

  function getMatches() {
    var category = $('#filterCategory').val();
    var brand = $('#filterBrand').val();
    var stock = $('#filterAvailability').val();
    var priceRange = $('#filterPrice').val();
    var sortBy = $('#sortBy').val();
    var priceMin = 0, priceMax = Infinity;

    if (priceRange) {
      var parts = priceRange.split('-');
      priceMin = parseInt(parts[0], 10);
      priceMax = parseInt(parts[1], 10);
    }

    var matches = $allCards.filter(function (el) {
      var $card = $(el);
      var price = $card.data('price');
      return (!category || $card.data('category') === category) &&
        (!brand || $card.data('brand') === brand) &&
        (!stock || $card.data('stock') === stock) &&
        (price >= priceMin && price <= priceMax);
    });

    matches.sort(function (a, b) {
      if (sortBy === 'price-low-high') {
        return $(a).data('price') - $(b).data('price');
      }
      if (sortBy === 'price-high-low') {
        return $(b).data('price') - $(a).data('price');
      }
      return $(a).data('index') - $(b).data('index');
    });

    return matches;
  }

  function render() {
    var matches = getMatches();
    var toShow = matches.slice(0, visibleCount);
    var toShowSet = toShow;

    // Hide everything, then re-append the visible slice in sorted order
    // so the CSS grid flows in the correct visual order.
    $($allCards).hide();
    toShowSet.forEach(function (el) {
      $grid.append(el);
      $(el).show();
    });

    if ($count.length) {
      $count.text(toShow.length + ' of ' + matches.length + (matches.length === 1 ? ' product' : ' products'));
    }
    if ($empty.length) {
      $empty.attr('hidden', matches.length > 0);
    }
    if ($loadMore.length) {
      $loadMore.toggle(visibleCount < matches.length);
    }
  }

  $('#sortBy').on('change', function () {
    visibleCount = pageSize;
    render();
  });

  $('#filterCategory, #filterBrand, #filterPrice, #filterAvailability').on('change', function () {
    visibleCount = pageSize;
    render();
  });

  $('#filterReset').on('click', function () {
    $('#filterCategory, #filterBrand, #filterPrice, #filterAvailability').val('');
    visibleCount = pageSize;
    render();
  });

  $loadMore.on('click', function () {
    visibleCount += pageSize;
    render();
  });

  render();
});

// Checkout page - shipping toggle, live totals, order submit
$(function () {
  var $form = $('#checkoutForm');
  if (!$form.length) return;

  function formatINR(amount) {
    amount = Math.round(amount);
    var isNegative = amount < 0;
    amount = Math.abs(amount);
    var str = String(amount);
    if (str.length > 3) {
      var lastThree = str.slice(-3);
      var rest = str.slice(0, -3).replace(/\B(?=(\d{2})+(?!\d))/g, ',');
      str = rest + ',' + lastThree;
    }
    return (isNegative ? '-' : '') + '₹' + str;
  }

  // Ship to a different address toggle
  var $shipToggle = $('#shipToDifferent');
  var $shippingFields = $('#shippingFields');
  $shipToggle.on('change', function () {
    var isChecked = $(this).is(':checked');
    $shippingFields.attr('hidden', !isChecked);
    $shippingFields.find('input[name="shipping_first_name"], input[name="shipping_last_name"], input[name="shipping_address_1"], input[name="shipping_city"], input[name="shipping_state"], input[name="shipping_pin"]')
      .prop('required', isChecked);
  });

  // Live quantity / totals
  var $summary = $('#checkoutSummary');
  var unitPrice = parseInt($summary.data('unit-price'), 10) || 0;
  var $qtyInput = $('#qtyInput');

  function updateTotals() {
    var qty = parseInt($qtyInput.val(), 10);
    if (!qty || qty < 1) qty = 1;
    if (qty > 10) qty = 10;
    $qtyInput.val(qty);

    var subtotal = unitPrice * qty;
    $('#qtyDisplay').text(qty);
    $('#lineTotal').text(formatINR(subtotal));
    $('#subtotalDisplay').text(formatINR(subtotal));
    $('#totalDisplay').text(formatINR(subtotal));
  }

  $qtyInput.on('input change', updateTotals);

  function generateOrderNumber() {
    var now = new Date();
    var pad = function (n, len) {
      return String(n).padStart(len || 2, '0');
    };
    var stamp = now.getFullYear() + pad(now.getMonth() + 1) + pad(now.getDate()) +
      pad(now.getHours()) + pad(now.getMinutes()) + pad(now.getSeconds());
    var suffix = pad(Math.floor(Math.random() * 10000), 4);
    return 'ORD-' + stamp + '-' + suffix;
  }

  // Submit
  $form.on('submit', function (e) {
    e.preventDefault();
    if (!this.checkValidity()) {
      this.reportValidity();
      return;
    }

    var orderNumber = generateOrderNumber();
    $('#successOrderNumber').text(orderNumber);
    $('#trackOrderBtn').attr('href', 'track-order.php?order=' + encodeURIComponent(orderNumber));

    $form.hide();
    $('#orderSuccess').removeAttr('hidden');
    $('html, body').animate({ scrollTop: $('#orderSuccess').offset().top - 100 }, 300);
  });
});

// Track order page - order number lookup
$(function () {
  var $form = $('#trackOrderForm');
  if (!$form.length) return;

  var steps = ['Order Placed', 'Dispatched', 'Out for Delivery', 'Delivered'];
  var $result = $('#trackOrderResult');
  var $error = $('#trackOrderError');

  function simpleHash(str) {
    var hash = 0;
    for (var i = 0; i < str.length; i++) {
      hash = (hash * 31 + str.charCodeAt(i)) >>> 0;
    }
    return hash;
  }

  function formatDate(d) {
    var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    return d.getDate() + ' ' + months[d.getMonth()] + ' ' + d.getFullYear();
  }

  // Orders generated at checkout embed a real timestamp: ORD-YYYYMMDDHHMMSS-XXXX.
  // Parse it so a just-placed order reliably shows "Order Placed", not a random step.
  function parseOrderTimestamp(orderNumber) {
    var match = /^ORD-(\d{4})(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})-\d+$/.exec(orderNumber);
    if (!match) return null;
    var d = new Date(
      parseInt(match[1], 10), parseInt(match[2], 10) - 1, parseInt(match[3], 10),
      parseInt(match[4], 10), parseInt(match[5], 10), parseInt(match[6], 10)
    );
    return isNaN(d.getTime()) ? null : d;
  }

  $form.on('submit', function (e) {
    e.preventDefault();
    var orderNumber = $('#orderNumber').val().trim().toUpperCase();

    if (!orderNumber) {
      $error.removeAttr('hidden');
      $result.attr('hidden', true);
      return;
    }
    $error.attr('hidden', true);

    var msPerDay = 24 * 60 * 60 * 1000;
    var today = new Date();
    var orderDate = parseOrderTimestamp(orderNumber);
    var stepIndex, dateLabel, dateValue;

    if (orderDate) {
      var daysSince = Math.floor((today - orderDate) / msPerDay);
      if (daysSince < 1) stepIndex = 0;
      else if (daysSince < 2) stepIndex = 1;
      else if (daysSince < 4) stepIndex = 2;
      else stepIndex = 3;

      if (stepIndex === steps.length - 1) {
        dateLabel = 'Delivered On';
        dateValue = formatDate(new Date(orderDate.getTime() + 4 * msPerDay));
      } else {
        dateLabel = 'Expected Delivery By';
        dateValue = formatDate(new Date(orderDate.getTime() + 5 * msPerDay));
      }
    } else {
      var hash = simpleHash(orderNumber);
      stepIndex = hash % steps.length;

      if (stepIndex === steps.length - 1) {
        var deliveredDaysAgo = (hash % 3) + 1;
        dateLabel = 'Delivered On';
        dateValue = formatDate(new Date(today.getTime() - deliveredDaysAgo * msPerDay));
      } else {
        var remainingSteps = steps.length - 1 - stepIndex;
        var etaDays = remainingSteps * 2 + (hash % 2);
        dateLabel = 'Expected Delivery By';
        dateValue = formatDate(new Date(today.getTime() + etaDays * msPerDay));
      }
    }

    var status = steps[stepIndex];

    $('#resultOrderNumber').text(orderNumber);
    $('#resultStatus').text(status).attr('class', 'track-status-badge' + (stepIndex === steps.length - 1 ? ' track-status-badge--delivered' : ''));
    $('#resultDateLabel').text(dateLabel);
    $('#resultDateValue').text(dateValue);

    $('#trackSteps .track-step').each(function (i) {
      $(this).toggleClass('is-complete', i < stepIndex);
      $(this).toggleClass('is-current', i === stepIndex);
    });
    $('#trackStepsProgress').css('width', (stepIndex / (steps.length - 1)) * 100 + '%');

    $result.removeAttr('hidden');
  });

  // Auto-check when arriving with a prefilled order number (e.g. from checkout)
  if ($('#orderNumber').val().trim()) {
    $form.trigger('submit');
  }
});

// About page - scroll-triggered stat counters
document.addEventListener('DOMContentLoaded', function () {
  var counters = document.querySelectorAll('.stat-count');
  if (!counters.length) return;

  var duration = 1200;

  function animateCounter(el) {
    var target = parseInt(el.dataset.target, 10) || 0;
    var startTime = null;

    function step(timestamp) {
      if (!startTime) startTime = timestamp;
      var progress = Math.min((timestamp - startTime) / duration, 1);
      el.textContent = Math.floor(progress * target);
      if (progress < 1) {
        requestAnimationFrame(step);
      } else {
        el.textContent = target;
      }
    }
    requestAnimationFrame(step);
  }

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(function (counter) {
    observer.observe(counter);
  });
});

// FAQ page - accordion toggle (one open at a time per category)
$(function () {
  var $faqList = $('.faq-list');
  if (!$faqList.length) return;

  $faqList.on('click', '.faq-question', function () {
    var $item = $(this).closest('.faq-item');
    var $list = $item.closest('.faq-list');
    var isOpen = $item.hasClass('is-open');

    $list.find('.faq-item.is-open').not($item).removeClass('is-open').find('.faq-answer').slideUp(200);

    $item.toggleClass('is-open', !isOpen);
    $item.find('.faq-answer').slideToggle(200);
  });
});

// Load download links only when user scrolls near them
document.addEventListener('DOMContentLoaded', function() {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const link = entry.target;
        link.href = link.dataset.src;
        observer.unobserve(link);
      }
    });
  });

  document.querySelectorAll('[data-src]').forEach(el => {
    observer.observe(el);
  });
});
