<?php
include __DIR__ . '/components/data.php';

$pageTitle       = 'Contact Us | Aman India';
$pageDescription = 'Get in touch with Aman India. Call or email our support team, visit our store, or send us an enquiry and we will get back to you shortly.';
$pageKeywords    = 'contact Aman India, Aman India phone number, Aman India email, Aman India store address, Aman India customer support, enquiry form';
$pageCanonical   = 'https://www.amanindia.com/contact.php';
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

        <!-- contact intro -->
        <section class="contact-intro-section">
            <div class="header-container">
                <div class="contact-intro-wrap">
                    <span class="cat-eyebrow">Get In Touch</span>
                    <h1>We'd love to hear from you</h1>
                    <p>Have a question about an order, a product or anything else? Reach us directly using the details below, or send us a message and our team will get back to you shortly.</p>
                </div>
            </div>
        </section>
        <!--/ contact intro -->

        <!-- contact info -->
        <section class="contact-info-section">
            <div class="header-container">
                <div class="contact-info-grid">
                    <div class="value-card">
                        <span class="value-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0122 16.92z"></path>
                            </svg>
                        </span>
                        <h3>Call Us</h3>
                        <p>Mon - Sat, 9:00 AM - 7:00 PM IST</p>
                        <a href="tel:+9118001234567">+91 1800-123-4567</a>
                    </div>

                    <div class="value-card">
                        <span class="value-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16a2 2 0 012 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2z"></path>
                                <path d="M22 6l-10 7L2 6"></path>
                            </svg>
                        </span>
                        <h3>Email Us</h3>
                        <p>We usually reply within 24 hours</p>
                        <a href="mailto:support@amanindia.com">support@amanindia.com</a>
                    </div>

                    <div class="value-card">
                        <span class="value-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </span>
                        <h3>Visit Us</h3>
                        <p>Our flagship store &amp; corporate office</p>
                        <span class="contact-info-text">4th Floor, Cyber Towers, HITEC City, Hyderabad, Telangana 500081, India</span>
                    </div>
                </div>
            </div>
        </section>
        <!--/ contact info -->

        <!-- contact map + enquiry form -->
        <section class="contact-main-section">
            <div class="header-container">
                <div class="contact-main-grid">
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps?q=HITEC+City,+Hyderabad,+Telangana+500081,+India&output=embed"
                            title="Aman India store location"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            allowfullscreen></iframe>
                    </div>

                    <div class="contact-form-wrap">
                        <h2>Send Us a Message</h2>
                        <p>Fill out the form and our team will get back to you shortly.</p>

                        <form id="enquiryForm" class="enquiry-form" novalidate>
                            <div class="checkout-form-row">
                                <div class="form-field">
                                    <label for="enquiryName">Full name <span class="required">*</span></label>
                                    <input type="text" id="enquiryName" name="enquiry_name" required>
                                </div>
                                <div class="form-field">
                                    <label for="enquiryPhone">Phone number <span class="required">*</span></label>
                                    <input type="tel" id="enquiryPhone" name="enquiry_phone" required>
                                </div>
                            </div>

                            <div class="form-field">
                                <label for="enquiryEmail">Email address <span class="required">*</span></label>
                                <input type="email" id="enquiryEmail" name="enquiry_email" required>
                            </div>

                            <div class="form-field">
                                <label for="enquirySubject">Subject <span class="required">*</span></label>
                                <input type="text" id="enquirySubject" name="enquiry_subject" required>
                            </div>

                            <div class="form-field">
                                <label for="enquiryMessage">Message <span class="required">*</span></label>
                                <textarea id="enquiryMessage" name="enquiry_message" rows="5" required></textarea>
                            </div>

                            <button type="submit" class="place-order-btn">Send Message</button>
                        </form>

                        <div class="enquiry-success" id="enquirySuccess" hidden>
                            <span class="icon-check icon-check--lg" aria-hidden="true"></span>
                            <h3>Thank you! Your message has been sent.</h3>
                            <p>Our team will get back to you shortly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ contact map + enquiry form -->

    </main>
    <!--/ main-->

    <?php include __DIR__ . '/components/footer.php'; ?>
</body>
</html>
