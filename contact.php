<?php
// Hostinger SMTP setup (required)
ini_set("SMTP", "smtp.hostinger.com");
ini_set("smtp_port", "587");
ini_set("sendmail_from", "info@haya.properties");

// Initialize form data array
$formData = [
    'name' => '',
    'email' => '',
    'phone' => '',
    'message' => '',
    'how_did_you_hear_about_us' => '',
    'subscribe_to_our_newsletter' => false
];

// Initialize feedback variable
$feedback = null;

if (isset($_POST['submit'])) {

    $name  = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    $how = isset($_POST['how_did_you_hear_about_us']) ? $_POST['how_did_you_hear_about_us'] : '';
    $subscribe = isset($_POST['subscribe_to_our_newsletter']) ? "Yes" : "No";

    // Store form data for repopulation
    $formData = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'message' => $message,
        'how_did_you_hear_about_us' => $how,
        'subscribe_to_our_newsletter' => isset($_POST['subscribe_to_our_newsletter'])
    ];

    // Receiver email (your Gmail)
    $to = "hayaaproperties@gmail.com";
    $subject = "New Enquiry from Haya Properties";

    // Email content
    $body  = "A new enquiry has been received:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "How did you hear about us: $how\n";
    $body .= "Subscribed to Newsletter: $subscribe\n\n";
    $body .= "Message:\n$message\n";

    // Correct headers
    $headers  = "From: Haya Properties <info@haya.properties>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        // Set success feedback
        $feedback = [
            'type' => 'success',
            'message' => 'Message sent successfully!'
        ];
        // Reset form data after successful submission
        $formData = [
            'name' => '',
            'email' => '',
            'phone' => '',
            'message' => '',
            'how_did_you_hear_about_us' => '',
            'subscribe_to_our_newsletter' => false
        ];
    } else {
        // Set error feedback
        $feedback = [
            'type' => 'error',
            'message' => 'Email sending failed. Please try again later.'
        ];
    }
}
?>


<!DOCTYPE html>
<html class="no-js" lang="ZXX">

<head>
        <!-- Meta Tags -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="facebook-domain-verification" content="fs4qsprlvohda0lf08ya52m7zxra86" />
        <meta name="google-site-verification" content="4h-lac_qRW3luXZKH_iQGjF4kcoyBgIPB77HZ4ASsAY" />
        <meta name="robots" content="all" />

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico" />

        <!-- Site Title -->
        <title>Haya Properties - Contact Us</title>

        <meta name="description" content="Boost your brand with our cutting-edge digital solutions. We create stunning websites, engaging content, and innovative marketing strategies to elevate your business." />
        <meta name="keywords" content="creative digital agency, web design, branding, digital marketing, SEO, social media marketing, UI/UX design, content creation, business growth" />

        <!-- Meta OG Tags -->
        <meta property="og:site_name" content="Haya Properties - Contact Us" />
        <meta property="og:title" content="Haya Properties -    Contact Us" />
        <meta property="og:description" content="Contact Haya Properties for inquiries, site visits, or general information. Our team is here to help you with your real estate needs and answer any questions you may have." />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="en" />
        <meta property="og:url" content="https://haya-properties.com/contact" />
        <meta property="og:image" content="https://haya-properties.com/assets/images/projects/front.jpg" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <meta property="og:image:alt" content="Haya Properties - Contact Us" />

        <!-- All CSS -->
        <link rel="stylesheet" href="assets/plugins/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/plugins/css/animate.min.css" />
        <link rel="stylesheet" href="assets/plugins/css/404.html" />
        <link rel="stylesheet" href="assets/plugins/css/swiper-bundle.min.css" />
        <link rel="stylesheet" href="assets/plugins/css/maginific-popup.min.css" />
        <link rel="stylesheet" href="assets/plugins/css/nice-select.min.css" />
        <link rel="stylesheet" href="assets/plugins/css/fancybox.min.css" />
        <link rel="stylesheet" href="assets/plugins/css/uicons.min.css" />
        <script src="https://kit.fontawesome.com/555d59b0c9.js" crossorigin="anonymous"></script>
        <!-- Main CSS -->
        <link rel="stylesheet" href="style.css" />
    </head>

    <body class="element-wrapper">

    <?php require_once 'elements/header.php'; ?>
    
        <!-- End Sidebar  -->

      
        <!-- End Search Popup -->

        <div id="smooth-wrapper">
            <div id="smooth-content">
                <main>
                    <div class="inner-page">
                        <!-- Start Contact Area -->
                        <section class="tc-contact section-gap">
                            <div class="container">
                                <div class="tc-contact__inner">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <!-- Section Head  -->
                                            <div class="tc-sec-head">
                                                <p class="tc-sec-head__sm-title"><span class="dot"></span>Contact Us</p>
                                                <h3 class="tc-sec-head__title">
                                                    Let’s talk and create something cool.
                                                </h3>
                                            </div>
                                        </div>
                                    </div>

                                    <form class="tc-contact__form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" novalidate>
                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                                <div class="form-group">
                                                    <input type="text" name="name" placeholder="Name" value="<?php echo htmlspecialchars($formData['name']); ?>" required />
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-12">
                                                <div class="form-group">
                                                    <input type="email" name="email" placeholder="Email Address" value="<?php echo htmlspecialchars($formData['email']); ?>" required />
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-12">
                                                <div class="form-group">
                                                    <input type="tel" name="phone" placeholder="Phone (Optional)" value="<?php echo htmlspecialchars($formData['phone']); ?>" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="form-group">
                                                    <select name="how_did_you_hear_about_us" required>
                                                        <option value="" disabled <?php echo $formData['how_did_you_hear_about_us'] === '' ? 'selected' : ''; ?>>
                                                            How did you hear about us?
                                                        </option>
                                                        <option value="google" <?php echo $formData['how_did_you_hear_about_us'] === 'google' ? 'selected' : ''; ?>>Google Search</option>
                                                        <option value="facebook" <?php echo $formData['how_did_you_hear_about_us'] === 'facebook' ? 'selected' : ''; ?>>Facebook</option>
                                                        <option value="friend" <?php echo $formData['how_did_you_hear_about_us'] === 'friend' ? 'selected' : ''; ?>>Friend or Family</option>
                                                        <option value="other" <?php echo $formData['how_did_you_hear_about_us'] === 'other' ? 'selected' : ''; ?>>Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea name="message" placeholder="Tell us about your project" required><?php echo htmlspecialchars($formData['message']); ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <label for="flexCheckDefault">
                                                        <input class="form-check-input" type="checkbox" name="subscribe_to_our_newsletter" value="1" id="flexCheckDefault" <?php echo $formData['subscribe_to_our_newsletter'] ? 'checked' : ''; ?> />
                                                        Subscribe to our newsletter for all the latest updates!
                                                    </label>
                                                </div>
                                                <p class="contact-form-text">
                                                    By submitting this for I accept the Privacy Policy of this site.
                                                </p>
                                            </div>

                                            <div class="contact-form-btn">
                                            <button type="submit" name="submit" class="theme-btn">
    Send Message
</button>

                                            </div>
                                            <?php if ($feedback) : ?>
                                            <div class="contact-response mt-3 <?php echo $feedback['type']; ?>">
                                                <?php echo htmlspecialchars($feedback['message']); ?>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                        <!-- End Contact Area -->

                        <!-- Start Faq Area -->
                        <section class="faq-area section-gap pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12">
                <!-- Section Head  -->
                <div class="tc-sec-head">
                    <p class="tc-sec-head__sm-title"><span class="dot"></span>FAQs</p>
                    <h3 class="tc-sec-head__title">
                        Everything you need <br />
                        to know about Haya Properties.
                    </h3>
                </div>
            </div>

            <div class="col-lg-7 col-12">
                <!-- FAQ Content -->
                <div class="faq-content mt-0">
                    <div class="faq-inner accordion" id="hayaFaqAccordion">
                        <div class="row">

                            <!-- FAQ 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        What types of projects does Haya Properties develop?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="faqOne"
                                    data-bs-parent="#hayaFaqAccordion">
                                    <div class="accordion-body">
                                        <p class="accordion-text">
                                            We specialize in both residential and commercial developments built with modern design,
                                            premium materials, and long-term value in mind.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Where is your latest project “Palm Haya” located?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo"
                                    data-bs-parent="#hayaFaqAccordion">
                                    <div class="accordion-body">
                                        <p class="accordion-text">
                                            Palm Haya is located in a rapidly developing area of Ahmedabad with excellent connectivity,
                                            easy access to essentials, and strong future growth potential.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What amenities do your projects include?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree"
                                    data-bs-parent="#hayaFaqAccordion">
                                    <div class="accordion-body">
                                        <p class="accordion-text">
                                            Our projects include CCTV surveillance, high-speed elevators, power backup,
                                            fire safety systems, parking spaces, landscaped areas, and modern building features.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        How can I book a unit at Palm Haya or any project?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="faqFour"
                                    data-bs-parent="#hayaFaqAccordion">
                                    <div class="accordion-body">
                                        <p class="accordion-text">
                                            You can book by contacting us through phone, email, or website inquiry.
                                            Our team will guide you through booking, documentation, and payment steps.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Do you provide site visits before booking?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="faqFive"
                                    data-bs-parent="#hayaFaqAccordion">
                                    <div class="accordion-body">
                                        <p class="accordion-text">
                                            Yes, we arrange guided site visits so you can explore the project location,
                                            construction progress, and actual layout before making any decision.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 6 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Are your projects RERA registered?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="faqSix"
                                    data-bs-parent="#hayaFaqAccordion">
                                    <div class="accordion-body">
                                        <p class="accordion-text">
                                            Yes, all our projects follow full RERA compliance to ensure transparency,
                                            legal safety, and peace of mind for every buyer.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 7 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        What payment options do you offer?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="faqSeven"
                                    data-bs-parent="#hayaFaqAccordion">
                                    <div class="accordion-body">
                                        <p class="accordion-text">
                                            We provide flexible payment plans linked with construction stages.
                                            Our team can recommend the best plan as per your needs and budget.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 8 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        How do I stay updated with construction progress?
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="faqEight"
                                    data-bs-parent="#hayaFaqAccordion">
                                    <div class="accordion-body">
                                        <p class="accordion-text">
                                            We provide regular updates through monthly reports, progress photos,
                                            milestone updates, and direct communication from our team.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div><!-- row end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

                        <!-- End Faq Area -->
                    </div>
                </main>

                <!-- Start Footer -->
                <?php require_once 'elements/footer.php'; ?>
                <!-- End Footer -->
            </div>
        </div>

        <!-- Start Back To Top  -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- End Back To Top -->

        <!-- All JS -->
        <script src="assets/plugins/js/jquery.min.js"></script>
        <script src="assets/plugins/js/jquery-migrate.js"></script>
        <script src="assets/plugins/js/modernizer.min.js"></script>
        <script src="assets/plugins/js/bootstrap.min.js"></script>
        <script src="assets/plugins/js/gsap/gsap.js"></script>
        <script src="assets/plugins/js/gsap/gsap-scroll-to-plugin.js"></script>
        <script src="assets/plugins/js/gsap/gsap-scroll-smoother.js"></script>
        <script src="assets/plugins/js/gsap/gsap-scroll-trigger.js"></script>
        <script src="assets/plugins/js/gsap/gsap-split-text.js"></script>
        <script src="assets/plugins/js/wow.min.js"></script>
        <script src="assets/plugins/js/swiper-bundle.min.js"></script>
        <script src="assets/plugins/js/magnific-popup.min.js"></script>
        <script src="assets/plugins/js/jquery.counterup.min.js"></script>
        <script src="assets/plugins/js/waypoints.min.js"></script>
        <script src="assets/plugins/js/nice-select.min.js"></script>
        <script src="assets/plugins/js/fancybox.min.js"></script>
        <script src="assets/plugins/js/isotope.pkgd.min.js"></script>
        <script src="assets/plugins/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/plugins/js/meanmenu.min.js"></script>
        <script src="assets/plugins/js/backToTop.js"></script>
        <!-- Int JS -->
        <script src="assets/plugins/js/active.js"></script>
    </body>

</html>
