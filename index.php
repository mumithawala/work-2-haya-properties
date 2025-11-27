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
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <!-- Site Title -->
    <title>Haya Properties</title>

    <meta name="description"
        content="Haya Properties is a growing real estate development company based in Ahmedabad, established in 2020 with a commitment to building modern, sustainable, and value-driven properties. We specialize in both residential and commercial developments, focusing on architectural excellence, premium materials, and long-term quality." />
    <meta name="keywords"
        content="Haya Properties, real estate, Ahmedabad, residential, commercial, development, architecture, premium materials, long-term quality" />

    <!-- Meta OG Tags -->
    <meta property="og:site_name" content="Haya Properties" />
    <meta property="og:title" content="Haya Properties" />
    <meta property="og:description"
        content="Haya Properties is a growing real estate development company based in Ahmedabad, established in 2020 with a commitment to building modern, sustainable, and value-driven properties. We specialize in both residential and commercial developments, focusing on architectural excellence, premium materials, and long-term quality." />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en" />
    <meta property="og:url" content="https://haya-properties.com" />
    <meta property="og:image" content="https://haya-properties.com/assets/images/logo.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="Haya Properties" />

    <!-- All CSS -->
    <link rel="stylesheet" href="assets/plugins/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/plugins/css/animate.min.css" />
    <link rel="stylesheet" href="assets/plugins/css/404.html" />
    <link rel="stylesheet" href="assets/plugins/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/plugins/css/maginific-popup.min.css" />
    <link rel="stylesheet" href="assets/plugins/css/nice-select.min.css" />
    <link rel="stylesheet" href="assets/plugins/css/fancybox.min.css" />
    <link rel="stylesheet" href="assets/plugins/css/uicons.min.css" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="style.css" />
    <script>
/* Latest Launch: vertical auto-scrolling thumbnail column + update hero */
(function(){
  const thumbTrack = document.getElementById('thumbTrack');
  const heroImage = document.getElementById('heroImage');
  const heroTitle = document.getElementById('heroTitle');
  if(!thumbTrack) return;

  // clone for loop effect
  const thumbs = Array.from(thumbTrack.children);
  thumbs.forEach(n => thumbTrack.appendChild(n.cloneNode(true)));

  // scroll config
  let speed = 28; // px per second
  let pos = 0;
  let last = null;
  let paused = false;

  // select first
  function clearSelected(){ thumbTrack.querySelectorAll('.thumb-item').forEach(t => t.classList.remove('selected')); }
  function selectThumb(btn){
    clearSelected();
    btn.classList.add('selected');
    const full = btn.dataset.full;
    if(full) heroImage.src = full;
    const title = btn.querySelector('.thumb-title')?.textContent || '';
    if(title) heroTitle.textContent = (title.toUpperCase() + ' BY YOUR BRAND');
  }

  // attach click handlers (use event delegation)
  thumbTrack.addEventListener('click', e => {
    const btn = e.target.closest('.thumb-item');
    if(!btn) return;
    paused = true;
    selectThumb(btn);
    setTimeout(()=> paused = false, 1800); // resume after short pause
  });

  // pause on hover
  const wrapper = thumbTrack.parentElement;
  wrapper.addEventListener('mouseenter', ()=> paused = true);
  wrapper.addEventListener('mouseleave', ()=> paused = false);
  wrapper.addEventListener('touchstart', ()=> paused = true, {passive:true});
  wrapper.addEventListener('touchend', ()=> paused = false, {passive:true});

  // set initial selected
  selectThumb(thumbTrack.querySelector('.thumb-item'));

  // animation loop
  function step(ts){
    if(last === null) last = ts;
    const dt = (ts - last) / 1000;
    last = ts;
    if(!paused){
      pos += speed * dt;
      // when pos > scrollHeight/2 (we cloned), reset
      const half = thumbTrack.scrollHeight / 2;
      if(pos >= half) pos -= half;
      thumbTrack.scrollTop = pos;
    }
    requestAnimationFrame(step);
  }

  // wait images then start
  function imgsLoaded(parent, cb){
    const imgs = parent.querySelectorAll('img');
    if(imgs.length === 0) return cb();
    let c=0, n=imgs.length;
    imgs.forEach(i=>{
      if(i.complete) { c++; if(c===n) cb(); }
      else { i.onload = i.onerror = ()=>{ c++; if(c===n) cb(); } }
    });
  }

  imgsLoaded(thumbTrack, ()=> requestAnimationFrame(step));
})();

/* Parallax subtle effect on project cards while scrolling (CSS already handles hover),
   below adds tiny translate based on scroll for a soft effect */
(function(){
  const cards = document.querySelectorAll('.project-card .card-bg');
  if(!cards.length) return;
  function onScroll(){
    const viewportCenter = window.scrollY + window.innerHeight/2;
    cards.forEach(bg=>{
      const parent = bg.closest('.project-card');
      const rect = parent.getBoundingClientRect();
      const elCenter = rect.top + window.scrollY + rect.height/2;
      const diff = (viewportCenter - elCenter) / window.innerHeight;
      const translate = Math.max(Math.min(diff * 6, 8), -8); // clamp
      bg.style.transform = `translateY(${translate}%)`;
    });
  }
  window.addEventListener('scroll', onScroll, {passive:true});
  window.addEventListener('resize', onScroll);
  onScroll();
})();
</script>

</head>

<body class="element-wrapper">
    <!-- Preloder  -->
    <?php  require_once 'elements/header.php' ?>


    <!-- End Search Popup -->

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <section class="hero-section">
                    <video autoplay muted loop playsinline class="hero-video">
                        <source src="assets/videos/v2.mp4" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>

                    <div class="hero-overlay"></div>

                    <div class="hero-content tc-hero-cont ">
                        <h1 class="tc-hero-cont__title">Building the Future, One Structure at a Time</h1>
                        <p>Innovative. Sustainable. Reliable. We shape tomorrow’s infrastructure today.</p>
                        <a href="#about" class="hero-btn">Explore More</a>
                    </div>
                </section>
                <!-- Start Hero Area -->
               

               

                <!-- Start About Area -->
                <section class="tc-about section-gap">
                    <div class="container">
                        <!-- Section Head -->
                        <div class="tc-sec-head">
                            <p class="tc-sec-head__sm-title mb-0"><span class="dot"></span>Who we are</p>
                            <h3 class="tc-sec-head__title has_word_anim" style="color:#e7c954">
                            Transforming Ideas into Iconic Structures.                            </h3>
                        </div>

                        <div class="tc-about__inner">
                            <!-- Bubble  -->
                            <div class="tc-about-bubble">
                                <img class="spinner-ani" src="assets/images/about/bubble.svg" alt="bubble" />
                            </div>

                            <!-- Content  -->
                            <div class="tc-about-cont">
                                <div class="tc-about-cont__widget wow fadeInUp" data-wow-delay=".3s"
                                    data-wow-duration="1s">
                                    <div class="tc-about-number">
                                        <h2 class="big-number"><span class="counter">15</span><small>+</small></h2>
                                        <p class="number-text">
                                        Successfully handed over 15+ quality real estate projects.
                                        </p>
                                    </div>
                                </div>
                                <div class="seperator-line"></div>
                                <div class="tc-about-cont__widget wow fadeInUp" data-wow-delay=".5s"
                                    data-wow-duration="1s">
                                    <div class="tc-about-desc">
                                        <p class="desc-text">
                                        Haya Properties is a growing real estate development company based in Ahmedabad, established in 2020 with a commitment to building modern, sustainable, and value-driven properties. We specialize in both residential and commercial developments, focusing on architectural excellence, premium materials, and long-term quality.
                                        </p>
                                        <div class="tc-about-btn">
                                            <a href="about.php" class="theme-btn">Know More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


       
                <!-- End About Area -->

                <!-- Start Latest Project Area -->
                <section class="tc-latest-project section-gap">
                    <!-- Section Head -->
                    <div class="tc-latest-project__header">
                        <div class="tc-sec-head text-center">
                            <p class="tc-sec-head__sm-title mb-0"><span class="dot"></span>Our Latest Project</p>
                            <h3 class="tc-sec-head__title has_word_anim" style="color:#e7c954">
                            Turning Blueprints Into Reality
                            </h3>
                        </div>
                    </div>

                    <!-- Full Width Slider -->
                    <div class="tc-latest-project__slider-wrapper">
                        <div class="swiper tc-latest-project__slider">
                            <div class="swiper-wrapper">
                                <!-- Single Slide -->
                                <div class="swiper-slide">
                                    <div class="tc-latest-project__item bg-img" style="background-image: url('assets/images/projects/front.jpg');">
                                        <span class="tc-latest-project__badge exterior">Exterior</span>
                                        <div class="tc-latest-project__content">
                                            <p class="tc-latest-project__label">
                                                <span> </span>
                                                <span>Technology</span>
                                            </p>
                                            <h4 class="tc-latest-project__title">Palm Haya</h4>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Slide -->
                                <div class="swiper-slide">
                                    <div class="tc-latest-project__item bg-img" style="background-image: url('assets/images/projects/top.jpg');">
                                        <span class="tc-latest-project__badge exterior">Exterior</span>
                                        <div class="tc-latest-project__content">
                                            <p class="tc-latest-project__label">
                                                <span>Experiment</span>
                                                <span>Technology</span>
                                            </p>
                                            <h4 class="tc-latest-project__title">Aurora Transit Hub Facade</h4>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Slide -->
                                <div class="swiper-slide">
                                    <div class="tc-latest-project__item bg-img" style="background-image: url('assets/images/projects/entry.jpg');">
                                        <span class="tc-latest-project__badge interior">Interior</span>
                                        <div class="tc-latest-project__content">
                                            <p class="tc-latest-project__label">
                                                <span>Experiment</span>
                                                <span>Technology</span>
                                            </p>
                                            <h4 class="tc-latest-project__title">Boutique Atrium Lounge</h4>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Slide -->
                                <div class="swiper-slide">
                                    <div class="tc-latest-project__item bg-img" style="background-image: url('assets/images/projects/play.jpg');">
                                        <span class="tc-latest-project__badge exterior">Exterior</span>
                                        <div class="tc-latest-project__content">
                                            <p class="tc-latest-project__label">
                                                <span>Experiment</span>
                                                <span>Technology</span>
                                            </p>
                                            <h4 class="tc-latest-project__title">Crescent Bridge Promenade</h4>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Slide -->
                                <div class="swiper-slide">
                                    <div class="tc-latest-project__item bg-img" style="background-image: url('assets/images/projects/play.jpg');">
                                        <span class="tc-latest-project__badge interior">Interior</span>
                                        <div class="tc-latest-project__content">
                                            <p class="tc-latest-project__label">
                                                <span>Experiment</span>
                                                <span>Technology</span>
                                            </p>
                                            <h4 class="tc-latest-project__title">Vertex Studio Workspace</h4>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Slide -->
                                <div class="swiper-slide">
                                    <div class="tc-latest-project__item bg-img" style="background-image: url('assets/images/projects/play.jpg');">
                                        <span class="tc-latest-project__badge exterior">Exterior</span>
                                        <div class="tc-latest-project__content">
                                            <p class="tc-latest-project__label">
                                                <span>Experiment</span>
                                                <span>Technology</span>
                                            </p>
                                            <h4 class="tc-latest-project__title">Harborline Cultural Deck</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Latest Project Area -->


                <!-- Start Feature Highlight Area -->
                <section class="tc-feature-highlight section-gap">
                    <div class="container">
                        <div class="tc-feature-highlight__head tc-sec-head text-center">
                            <p class="tc-sec-head__sm-title mb-0"><span class="dot"></span>Why Choose Us</p>
                            <h3 class="tc-sec-head__title has_word_anim">
                            Experience Living with Thoughtful Features That Matter.
                            </h3>
                            <p class="tc-sec-head__text">
                                Thoughtfully curated amenities that balance aesthetics, comfort, and performance for your next landmark project.
                            </p>
                        </div>

                        <div class="tc-feature-highlight__grid">
                            <article class="tc-feature-highlight__card">
                                <div class="tc-feature-highlight__icon">🏢</div>
                                <span class="tc-feature-highlight__badge">Quality</span>
                                <h4 class="tc-feature-highlight__title">Premium Construction Quality</h4>
                                <p class="tc-feature-highlight__text">
                                    High-grade materials and modern engineering practices ensure rock-solid strength, stability, and longevity.
                                </p>
                            </article>

                            <article class="tc-feature-highlight__card">
                                <div class="tc-feature-highlight__icon">🎨</div>
                                <span class="tc-feature-highlight__badge">Design</span>
                                <h4 class="tc-feature-highlight__title">Modern Architectural Design</h4>
                                <p class="tc-feature-highlight__text">
                                    Contemporary elevations and intuitive layouts merge visual appeal with practical day-to-day convenience.
                                </p>
                            </article>

                            <article class="tc-feature-highlight__card">
                                <div class="tc-feature-highlight__icon">🌿</div>
                                <span class="tc-feature-highlight__badge">Green</span>
                                <h4 class="tc-feature-highlight__title">Sustainable &amp; Eco-Friendly Spaces</h4>
                                <p class="tc-feature-highlight__text">
                                    Energy-efficient lighting, natural ventilation, and curated green pockets foster healthier lifestyles.
                                </p>
                            </article>

                            <article class="tc-feature-highlight__card">
                                <div class="tc-feature-highlight__icon">🛡</div>
                                <span class="tc-feature-highlight__badge">Security</span>
                                <h4 class="tc-feature-highlight__title">Advanced Security Systems</h4>
                                <p class="tc-feature-highlight__text">
                                    Controlled entry points, CCTV coverage, and on-ground surveillance deliver peace of mind 24/7.
                                </p>
                            </article>

                            <article class="tc-feature-highlight__card">
                                <div class="tc-feature-highlight__icon">🚗</div>
                                <span class="tc-feature-highlight__badge">Access</span>
                                <h4 class="tc-feature-highlight__title">Ample Parking Facility</h4>
                                <p class="tc-feature-highlight__text">
                                    Multi-level, well-planned parking layouts simplify vehicular movement and improve visitor flow.
                                </p>
                            </article>

                          

                            <article class="tc-feature-highlight__card">
                                <div class="tc-feature-highlight__icon">⚡</div>
                                <span class="tc-feature-highlight__badge">Smart</span>
                                <h4 class="tc-feature-highlight__title">Smart Living Amenities</h4>
                                <p class="tc-feature-highlight__text">
                                    Smart switches, high-speed connectivity, elevators, and intercoms future-proof everyday operations.
                                </p>
                            </article>

                            <article class="tc-feature-highlight__card">
                                <div class="tc-feature-highlight__icon">💧</div>
                                <span class="tc-feature-highlight__badge">Utilities</span>
                                <h4 class="tc-feature-highlight__title">Reliable Utilities &amp; Infrastructure</h4>
                                <p class="tc-feature-highlight__text">
                                    Assured water supply, power backup, and precision MEP systems keep every floor running seamlessly.
                                </p>
                            </article>

                            <article class="tc-feature-highlight__card">
                                <div class="tc-feature-highlight__icon">🎯</div>
                                <span class="tc-feature-highlight__badge">Location</span>
                                <h4 class="tc-feature-highlight__title">Prime &amp; Connected Location</h4>
                                <p class="tc-feature-highlight__text">
                                    Strategically positioned developments enhance connectivity, growth potential, and asset value.
                                </p>
                            </article>

                         
                        </div>
                    </div>
                </section>
                <!-- End Feature Highlight Area -->

                <!-- Start Video Area -->
                <!-- <section class="tc-video wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                    <div class="container">
                        <div class="tc-video__inner bg-img"
                            style="background-image: url('assets/images/video/video-bg.png');">
                           
                            <div class="tc-video__content">
                                <img class="text-bg" src="assets/images/video/text-bg.png" alt="text-bg" />
                                <h3 class="tc-video-title">
                                    <span>
                                        <svg width="19" height="12" viewBox="0 0 19 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_505_2455)">
                                                <path
                                                    d="M0.212891 7.24996C0.212891 3.38923 2.97398 1.09287 4.69653 0.0346882C4.91471 -0.0994936 5.15034 0.179779 4.98235 0.375052C4.30437 1.16119 3.76838 2.05932 3.39834 3.02923C4.28302 2.77701 5.22459 2.80917 6.08999 3.12115C6.9554 3.43313 7.7009 4.00916 8.22114 4.76785C8.74138 5.52655 9.01006 6.42954 8.98922 7.34923C8.96837 8.26892 8.65906 9.15881 8.10498 9.89315C7.5509 10.6275 6.78007 11.1692 5.90142 11.4416C5.02277 11.7141 4.08071 11.7035 3.20837 11.4115C2.33603 11.1195 1.57751 10.5607 1.04 9.81412C0.502487 9.06756 0.213156 8.16989 0.212891 7.24996ZM9.98198 7.24996C9.98198 3.38923 12.7431 1.09287 14.4656 0.0357791C14.6838 -0.0984027 14.9194 0.179779 14.7525 0.373961C14.0737 1.16026 13.5369 2.05878 13.1663 3.02923C14.051 2.77701 14.9926 2.80917 15.858 3.12115C16.7234 3.43313 17.4689 4.00916 17.9891 4.76785C18.5094 5.52655 18.7781 6.42954 18.7572 7.34923C18.7364 8.26892 18.4271 9.15881 17.873 9.89315C17.3189 10.6275 16.5481 11.1692 15.6694 11.4416C14.7908 11.7141 13.8487 11.7035 12.9764 11.4115C12.104 11.1195 11.3455 10.5607 10.808 9.81412C10.2705 9.06756 9.98116 8.17098 9.98089 7.25105L9.98198 7.24996Z"
                                                    fill="#1A55F9" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_505_2455">
                                                    <rect width="18.5455" height="12" fill="white"
                                                        transform="translate(0.212891)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        Hulo created
                                    </span>
                                    something better than I ever <br />
                                    could have imagined
                                </h3>
                            </div>

                            
                            <div class="tc-video-action">
                                <a href="https://www.youtube.com/watch?v=gyGsPlt06bo" class="tc-video-btn popup-video">
                                    <img src="assets/images/video/video-btn-img.png" alt="video-btn-img" />
                                    <svg width="13" height="17" viewBox="0 0 13 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_506_3001)">
                                            <path d="M12.8008 8.8252L0.800781 1.8252V15.8252L12.8008 8.8252Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_506_3001">
                                                <rect width="12" height="16" fill="white"
                                                    transform="translate(0.800781 0.825195)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>

                                <div class="tc-video-btn__info">
                                    <h5>Hear from Andy</h5>
                                    <p>Co-Founder of Hulo Agency</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
                <!-- End Video Area -->

                <!-- Start Partner Area -->
                <section class="tc-partner section-gap-3">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-12">
                                <div class="tc-sec-head text-center">
                                    <h3 class="tc-sec-head__title has_word_anim">
                                        Worlds Most Popular Companies Trust Us
                                    </h3>
                                    <p class="tc-sec-head__text has_word_anim">
                                        Connect with us & let’s build something cool together
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tc-partner__inner">
                            <div class="swiper tc-partner__slider">
                                <div class="swiper-wrapper">
                                    <!-- Single Slider -->
                                    <div class="swiper-slide">
                                        <img src="assets/images/partners/partner-1.svg" alt="partner" />
                                    </div>

                                    <!-- Single Slider -->
                                    <div class="swiper-slide">
                                        <img src="assets/images/partners/partner-2.svg" alt="partner" />
                                    </div>

                                    <!-- Single Slider -->
                                    <div class="swiper-slide">
                                        <img src="assets/images/partners/partner-3.svg" alt="partner" />
                                    </div>

                                    <!-- Single Slider -->
                                    <div class="swiper-slide">
                                        <img src="assets/images/partners/partner-4.svg" alt="partner" />
                                    </div>

                                    <!-- Single Slider -->
                                    <div class="swiper-slide">
                                        <img src="assets/images/partners/partner-5.svg" alt="partner" />
                                    </div>

                                    <!-- Single Slider -->
                                    <div class="swiper-slide">
                                        <img src="assets/images/partners/partner-6.svg" alt="partner" />
                                    </div>

                                    <!-- Single Slider -->
                                    <div class="swiper-slide">
                                        <img src="assets/images/partners/partner-7.svg" alt="partner" />
                                    </div>

                                    <!-- Single Slider -->
                                    <div class="swiper-slide">
                                        <img src="assets/images/partners/partner-2.svg" alt="partner" />
                                    </div>

                                    <!-- Single Slider -->
                                    <div class="swiper-slide">
                                        <img src="assets/images/partners/partner-3.svg" alt="partner" />
                                    </div>

                                    <!-- Single Slider -->
                                    <div class="swiper-slide">
                                        <img src="assets/images/partners/partner-4.svg" alt="partner" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Partner Area -->

                <!-- Start Portfolio Area -->
                <section class="tc-portfolio">
                    <div class="container">
                        <div class="tc-portfolio__inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- Single Portfolio  -->
                                    <div class="tc-portfolio__item item-1 hobble wow fadeInUp" data-wow-delay=".3s"
                                        data-wow-duration="1s">
                                        <div class="tc-portfolio__cover hover-layer-1">
                                            <!-- Image  -->
                                            <div class="tc-portfolio__img">
                                                <img src="assets/images/portfolio/portfolio-1.png"
                                                    alt="portfolio-img" />
                                            </div>

                                            <!-- Category  -->
                                            <div class="tc-portfolio__category">
                                                <a href="portfolio-details.html">Experiment</a>
                                                <a href="portfolio-details.html">Technology</a>
                                            </div>

                                            <!-- Action  -->
                                            <a href="portfolio-details.html" class="tc-portfolio__btn">
                                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.3008 30.1748L30.3008 10.1748M30.3008 10.1748H15.3008M30.3008 10.1748V25.1748"
                                                        stroke="black" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>

                                        <!-- Content  -->
                                        <div class="tc-portfolio__content">
                                            <ul class="tc-portfolio__meta">
                                                <li>2026</li>
                                                <li>Gary Neville</li>
                                            </ul>
                                            <a href="portfolio-details.html" class="tc-portfolio__title">Refreshing Gary
                                                Neville's Digital Presence</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12 order-class">
                                    <!-- Section Head -->
                                    <div class="tc-sec-head">
                                        <p class="tc-sec-head__sm-title"><span class="dot"></span>Our Project Portfolio</p>
                                        <h3 class="tc-sec-head__title has_word_anim">
                                        A Complete Showcase <br> of Our Excellence
                                        </h3>
                                    </div>

                                    <!-- Single Portfolio  -->
                                    <div class="tc-portfolio__item item-2 hobble wow fadeInUp" data-wow-delay=".5s"
                                        data-wow-duration="1s">
                                        <div class="tc-portfolio__cover hover-layer-1">
                                            <!-- Image  -->
                                            <div class="tc-portfolio__img">
                                                <img src="assets/images/portfolio/portfolio-2.png"
                                                    alt="portfolio-img" />
                                            </div>

                                            <!-- Category  -->
                                            <div class="tc-portfolio__category">
                                                <a href="portfolio-details.html">Experiment</a>
                                                <a href="portfolio-details.html">Technology</a>
                                            </div>

                                            <!-- Action  -->
                                            <a href="portfolio-details.html" class="tc-portfolio__btn">
                                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.3008 30.1748L30.3008 10.1748M30.3008 10.1748H15.3008M30.3008 10.1748V25.1748"
                                                        stroke="black" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>

                                        <!-- Content  -->
                                        <div class="tc-portfolio__content">
                                            <ul class="tc-portfolio__meta">
                                                <li>2026</li>
                                                <li>Gary Neville</li>
                                            </ul>
                                            <a href="portfolio-details.html" class="tc-portfolio__title">Bran Identity
                                                Design for Startup</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- Single Portfolio  -->
                                    <div class="tc-portfolio__item item-3 hobble wow fadeInUp" data-wow-delay=".3s"
                                        data-wow-duration="1s">
                                        <div class="tc-portfolio__cover hover-layer-1">
                                            <!-- Image  -->
                                            <div class="tc-portfolio__img">
                                                <img src="assets/images/portfolio/portfolio-3.png"
                                                    alt="portfolio-img" />
                                            </div>

                                            <!-- Category  -->
                                            <div class="tc-portfolio__category">
                                                <a href="portfolio-details.html">Experiment</a>
                                                <a href="portfolio-details.html">Technology</a>
                                            </div>

                                            <!-- Action  -->
                                            <a href="portfolio-details.html" class="tc-portfolio__btn">
                                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.3008 30.1748L30.3008 10.1748M30.3008 10.1748H15.3008M30.3008 10.1748V25.1748"
                                                        stroke="black" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>

                                        <!-- Content  -->
                                        <div class="tc-portfolio__content">
                                            <ul class="tc-portfolio__meta">
                                                <li>2026</li>
                                                <li>Zenifer Lofez</li>
                                            </ul>
                                            <a href="portfolio-details.html" class="tc-portfolio__title">Packaging
                                                Mockup for Startup</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- Single Portfolio  -->
                                    <div class="tc-portfolio__item item-4 hobble wow fadeInUp" data-wow-delay=".5s"
                                        data-wow-duration="1s">
                                        <div class="tc-portfolio__cover hover-layer-1">
                                            <!-- Image  -->
                                            <div class="tc-portfolio__img">
                                                <img src="assets/images/portfolio/portfolio-4.png"
                                                    alt="portfolio-img" />
                                            </div>

                                            <!-- Category  -->
                                            <div class="tc-portfolio__category">
                                                <a href="portfolio-details.html">Experiment</a>
                                                <a href="portfolio-details.html">Technology</a>
                                            </div>

                                            <!-- Action  -->
                                            <a href="portfolio-details.html" class="tc-portfolio__btn">
                                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.3008 30.1748L30.3008 10.1748M30.3008 10.1748H15.3008M30.3008 10.1748V25.1748"
                                                        stroke="black" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>

                                        <!-- Content  -->
                                        <div class="tc-portfolio__content">
                                            <ul class="tc-portfolio__meta">
                                                <li>2026</li>
                                                <li>Terio Zemip</li>
                                            </ul>
                                            <a href="portfolio-details.html" class="tc-portfolio__title">Crafted Payment
                                                Get-way</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- Single Portfolio  -->
                                    <div class="tc-portfolio__item item-5 hobble wow fadeInUp" data-wow-delay=".3s"
                                        data-wow-duration="1s">
                                        <div class="tc-portfolio__cover hover-layer-1">
                                            <!-- Image  -->
                                            <div class="tc-portfolio__img">
                                                <img src="assets/images/portfolio/portfolio-5.png"
                                                    alt="portfolio-img" />
                                            </div>

                                            <!-- Category  -->
                                            <div class="tc-portfolio__category">
                                                <a href="portfolio-details.html">Experiment</a>
                                                <a href="portfolio-details.html">Technology</a>
                                            </div>

                                            <!-- Action  -->
                                            <a href="portfolio-details.html" class="tc-portfolio__btn">
                                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.3008 30.1748L30.3008 10.1748M30.3008 10.1748H15.3008M30.3008 10.1748V25.1748"
                                                        stroke="black" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>

                                        <!-- Content  -->
                                        <div class="tc-portfolio__content">
                                            <ul class="tc-portfolio__meta">
                                                <li>2025</li>
                                                <li>Andrio Gethary</li>
                                            </ul>
                                            <a href="portfolio-details.html" class="tc-portfolio__title">Reimagining the
                                                built environment</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- Single Portfolio  -->
                                    <div class="tc-portfolio__item item-6 hobble wow fadeInUp" data-wow-delay=".5s"
                                        data-wow-duration="1s">
                                        <div class="tc-portfolio__cover hover-layer-1">
                                            <!-- Image  -->
                                            <div class="tc-portfolio__img">
                                                <img src="assets/images/portfolio/portfolio-6.png"
                                                    alt="portfolio-img" />
                                            </div>

                                            <!-- Category  -->
                                            <div class="tc-portfolio__category">
                                                <a href="portfolio-details.html">Experiment</a>
                                                <a href="portfolio-details.html">Technology</a>
                                            </div>

                                            <!-- Action  -->
                                            <a href="portfolio-details.html" class="tc-portfolio__btn">
                                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.3008 30.1748L30.3008 10.1748M30.3008 10.1748H15.3008M30.3008 10.1748V25.1748"
                                                        stroke="black" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>

                                        <!-- Content  -->
                                        <div class="tc-portfolio__content">
                                            <ul class="tc-portfolio__meta">
                                                <li>2025</li>
                                                <li>Mellar Pitter</li>
                                            </ul>
                                            <a href="portfolio-details.html" class="tc-portfolio__title">Forma bringing
                                                architectural ideas to life</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <!-- CTA  -->
                                    <div class="tc-portfolio-cta bg-img wow fadeInUp" data-wow-delay=".3s"
                                        data-wow-duration="1s"
                                        style="background-image: url('assets/images/cta/cta-bg.png');">
                                        <div class="tc-portfolio-cta__cont">
                                            <h4 class="tc-portfolio-cta__title">
                                                Like what you see?
                                            </h4>
                                            <p class="tc-portfolio-cta__text">
                                                Connect with us & let’s build something cool together
                                            </p>
                                            <div class="tc-portfolio-cta__btn">
                                                <a href="contact.html" class="theme-btn">Contact With Us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Portfolio Area -->

                <section class="tc-features tc-features--style2 py-3 pb-0">
                            <div class="container">
                                <div class="tc-features__wrapper">
                                    <!-- Single Features  -->
                                    <div class="tc-feature__item">
                                        <span class="tc-feature__label">Landmarks</span>
                                        <h3 class="tc-feature__title"><span class="counter">250</span>+</h3>
                                        <!-- <p class="tc-feature__text">
                                            With over a decade of experience, Shape is an energetic, fresh and vibrant team offering creative talent and industry knowledge.
                                        </p> -->
                                    </div>

                                    <!-- Single Features  -->
                                    <div class="tc-feature__item">
                                        <span class="tc-feature__label">Units Sold</span>
                                        <h3 class="tc-feature__title"><span class="counter">55</span>+</h3>
                                        <!-- <p class="tc-feature__text">
                                            Over 55% of our projects are referrals from clients already with us. Our clients love to spread the love far and wide.
                                        </p> -->
                                    </div>

                                    <!-- Single Features  -->
                                    <div class="tc-feature__item">
                                        <span class="tc-feature__label">Lacs of Sq.Ft. Developed</span>
                                        <h3 class="tc-feature__title"><span class="counter">30</span>+</h3>
                                        <!-- <p class="tc-feature__text">
                                            Recognizing extraordinary accomplishments, honoring remarkable milestones, celebrating exceptional excellence.
                                        </p> -->       
                                    </div>
                                </div>
                            </div>
                        </section>

                <!-- Start Team Area -->
                <section class="tc-team section-gap">
                    <div class="container">
                        <div class="tc-team__inner">
                            <!-- Section Head  -->
                            <div class="tc-sec-head">
                                <p class="tc-sec-head__sm-title"><span class="dot"></span>Our Awesome Team</p>
                                <h3 class="tc-sec-head__title has_word_anim">
                                    Meet the team
                                </h3>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Team  -->
                                    <div class="tc-team__item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                        <div class="tc-team__cover">
                                            <!-- Image  -->
                                            <div class="tc-team__img">
                                                <img src="assets/images/team/team-1.png" alt="team-img" />
                                            </div>

                                            <!-- Social  -->
                                            <ul class="tc-team__social">
                                                <li>
                                                    <a href="https://www.youtube.com/" target="_blank">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_503_2146)">
                                                                <path
                                                                    d="M12.1955 5.6001C12.6228 5.60245 13.6919 5.61279 14.8278 5.65828L15.2305 5.67584C16.3742 5.72999 17.5168 5.82249 18.0836 5.98051C18.8395 6.19288 19.4337 6.81255 19.6345 7.59804C19.9543 8.84537 19.9943 11.2799 19.9993 11.869L20 11.9911V11.9997C20 11.9997 20 12.0026 20 12.0083L19.9993 12.1304C19.9943 12.7195 19.9543 15.154 19.6345 16.4014C19.4309 17.1897 18.8367 17.8094 18.0836 18.0189C17.5168 18.1769 16.3742 18.2694 15.2305 18.3236L14.8278 18.3411C13.6919 18.3866 12.6228 18.3969 12.1955 18.3993L12.008 18.4H11.9996C11.9996 18.4 11.9968 18.4 11.9913 18.4L11.804 18.3993C10.8996 18.3944 7.11832 18.3535 5.91569 18.0189C5.15973 17.8065 4.56556 17.1869 4.36471 16.4014C4.04496 15.154 4.00499 12.7195 4 12.1304V11.869C4.00499 11.2799 4.04496 8.84537 4.36471 7.59804C4.56835 6.80964 5.16252 6.18998 5.91569 5.98051C7.11832 5.64588 10.8996 5.60507 11.804 5.6001H12.1955ZM10.3996 9.19957V14.7998L15.1998 11.9997L10.3996 9.19957Z"
                                                                    fill="#54595F" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_503_2146">
                                                                    <rect width="24" height="24" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="https://www.facebook.com/" target="_blank">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_503_2150)">
                                                                <path
                                                                    d="M13.4008 13.2H15.4008L16.2008 10H13.4008V8.4C13.4008 7.5765 13.4008 6.8 15.0008 6.8H16.2008V4.11208C15.9402 4.07748 14.9552 4 13.9151 4C11.7435 4 10.2008 5.32549 10.2008 7.75977V10H7.80078V13.2H10.2008V20H13.4008V13.2Z"
                                                                    fill="#54595F" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_503_2150">
                                                                    <rect width="24" height="24" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="https://x.com/" target="_blank">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_503_2154)">
                                                                <path
                                                                    d="M9.09091 4.72729H4L10.0079 12.7378L4.32724 19.2727H6.25453L10.9006 13.928L14.9091 19.2727H20L13.7394 10.9253L19.1273 4.72729H17.2001L12.8468 9.73514L9.09091 4.72729Z"
                                                                    fill="#54595F" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_503_2154">
                                                                    <rect width="24" height="24" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="https://linkedin.com/" target="_blank">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_503_2158)">
                                                                <path
                                                                    d="M7.35785 6.12424C7.35754 6.80782 6.94282 7.42295 6.30925 7.67958C5.67569 7.93622 4.94979 7.7831 4.47385 7.29244C3.9979 6.80177 3.86696 6.07154 4.14277 5.44608C4.41858 4.82063 5.04605 4.42483 5.72931 4.44534C6.63682 4.47258 7.35826 5.21633 7.35785 6.12424ZM7.40821 9.04553H4.05041V19.5554H7.40821V9.04553ZM12.7136 9.04553H9.37253V19.5554H12.68V14.0402C12.68 10.9679 16.6842 10.6824 16.6842 14.0402V19.5554H20V12.8986C20 7.7192 14.0735 7.91227 12.68 10.4558L12.7136 9.04553Z"
                                                                    fill="#54595F" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_503_2158">
                                                                    <rect width="24" height="24" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Info  -->
                                        <div class="tc-team__info">
                                            <a href="team-details.html" class="tc-team__name">Alan Begham</a>
                                            <p class="tc-team__designation">CEO Neuro</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Team  -->
                                    <div class="tc-team__item wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                        <div class="tc-team__cover">
                                            <!-- Image  -->
                                            <div class="tc-team__img">
                                                <img src="assets/images/team/team-2.png" alt="team-img" />
                                            </div>

                                            <!-- Social  -->
                                            <ul class="tc-team__social">
                                                <li>
                                                    <a href="https://www.youtube.com/" target="_blank">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_503_2146)">
                                                                <path
                                                                    d="M12.1955 5.6001C12.6228 5.60245 13.6919 5.61279 14.8278 5.65828L15.2305 5.67584C16.3742 5.72999 17.5168 5.82249 18.0836 5.98051C18.8395 6.19288 19.4337 6.81255 19.6345 7.59804C19.9543 8.84537 19.9943 11.2799 19.9993 11.869L20 11.9911V11.9997C20 11.9997 20 12.0026 20 12.0083L19.9993 12.1304C19.9943 12.7195 19.9543 15.154 19.6345 16.4014C19.4309 17.1897 18.8367 17.8094 18.0836 18.0189C17.5168 18.1769 16.3742 18.2694 15.2305 18.3236L14.8278 18.3411C13.6919 18.3866 12.6228 18.3969 12.1955 18.3993L12.008 18.4H11.9996C11.9996 18.4 11.9968 18.4 11.9913 18.4L11.804 18.3993C10.8996 18.3944 7.11832 18.3535 5.91569 18.0189C5.15973 17.8065 4.56556 17.1869 4.36471 16.4014C4.04496 15.154 4.00499 12.7195 4 12.1304V11.869C4.00499 11.2799 4.04496 8.84537 4.36471 7.59804C4.56835 6.80964 5.16252 6.18998 5.91569 5.98051C7.11832 5.64588 10.8996 5.60507 11.804 5.6001H12.1955ZM10.3996 9.19957V14.7998L15.1998 11.9997L10.3996 9.19957Z"
                                                                    fill="#54595F" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_503_2146">
                                                                    <rect width="24" height="24" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="https://www.facebook.com/" target="_blank">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_503_2150)">
                                                                <path
                                                                    d="M13.4008 13.2H15.4008L16.2008 10H13.4008V8.4C13.4008 7.5765 13.4008 6.8 15.0008 6.8H16.2008V4.11208C15.9402 4.07748 14.9552 4 13.9151 4C11.7435 4 10.2008 5.32549 10.2008 7.75977V10H7.80078V13.2H10.2008V20H13.4008V13.2Z"
                                                                    fill="#54595F" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_503_2150">
                                                                    <rect width="24" height="24" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="https://x.com/" target="_blank">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_503_2154)">
                                                                <path
                                                                    d="M9.09091 4.72729H4L10.0079 12.7378L4.32724 19.2727H6.25453L10.9006 13.928L14.9091 19.2727H20L13.7394 10.9253L19.1273 4.72729H17.2001L12.8468 9.73514L9.09091 4.72729Z"
                                                                    fill="#54595F" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_503_2154">
                                                                    <rect width="24" height="24" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="https://linkedin.com/" target="_blank">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_503_2158)">
                                                                <path
                                                                    d="M7.35785 6.12424C7.35754 6.80782 6.94282 7.42295 6.30925 7.67958C5.67569 7.93622 4.94979 7.7831 4.47385 7.29244C3.9979 6.80177 3.86696 6.07154 4.14277 5.44608C4.41858 4.82063 5.04605 4.42483 5.72931 4.44534C6.63682 4.47258 7.35826 5.21633 7.35785 6.12424ZM7.40821 9.04553H4.05041V19.5554H7.40821V9.04553ZM12.7136 9.04553H9.37253V19.5554H12.68V14.0402C12.68 10.9679 16.6842 10.6824 16.6842 14.0402V19.5554H20V12.8986C20 7.7192 14.0735 7.91227 12.68 10.4558L12.7136 9.04553Z"
                                                                    fill="#54595F" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_503_2158">
                                                                    <rect width="24" height="24" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Info  -->
                                        <div class="tc-team__info">
                                            <a href="team-details.html" class="tc-team__name">Dani Addam</a>
                                            <p class="tc-team__designation">CEO Adrov</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Team  -->
                                    <div class="tc-team__item wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                        <div class="tc-team__cover">
                                            <!-- Image  -->
                                            <div class="tc-team__img">
                                                <img src="assets/images/team/team-3.png" alt="team-img" />
                                            </div>

                                            <!-- Social  -->
                                            <ul class="tc-team__social">
                                                <li>
                                                    <a href="https://www.youtube.com/" target="_blank">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_503_2146)">
                                                                <path
                                                                    d="M12.1955 5.6001C12.6228 5.60245 13.6919 5.61279 14.8278 5.65828L15.2305 5.67584C16.3742 5.72999 17.5168 5.82249 18.0836 5.98051C18.8395 6.19288 19.4337 6.81255 19.6345 7.59804C19.9543 8.84537 19.9943 11.2799 19.9993 11.869L20 11.9911V11.9997C20 11.9997 20 12.0026 20 12.0083L19.9993 12.1304C19.9943 12.7195 19.9543 15.154 19.6345 16.4014C19.4309 17.1897 18.8367 17.8094 18.0836 18.0189C17.5168 18.1769 16.3742 18.2694 15.2305 18.3236L14.8278 18.3411C13.6919 18.3866 12.6228 18.3969 12.1955 18.3993L12.008 18.4H11.9996C11.9996 18.4 11.9968 18.4 11.9913 18.4L11.804 18.3993C10.8996 18.3944 7.11832 18.3535 5.91569 18.0189C5.15973 17.8065 4.56556 17.1869 4.36471 16.4014C4.04496 15.154 4.00499 12.7195 4 12.1304V11.869C4.00499 11.2799 4.04496 8.84537 4.36471 7.59804C4.56835 6.80964 5.16252 6.18998 5.91569 5.98051C7.11832 5.64588 10.8996 5.60507 11.804 5.6001H12.1955ZM10.3996 9.19957V14.7998L15.1998 11.9997L10.3996 9.19957Z"
                                                                    fill="#54595F" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_503_2146">
                                                                    <rect width="24" height="24" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="https://www.facebook.com/" target="_blank">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_503_2150)">
                                                                <path
                                                                    d="M13.4008 13.2H15.4008L16.2008 10H13.4008V8.4C13.4008 7.5765 13.4008 6.8 15.0008 6.8H16.2008V4.11208C15.9402 4.07748 14.9552 4 13.9151 4C11.7435 4 10.2008 5.32549 10.2008 7.75977V10H7.80078V13.2H10.2008V20H13.4008V13.2Z"
                                                                    fill="#54595F" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_503_2150">
                                                                    <rect width="24" height="24" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="https://x.com/" target="_blank">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_503_2154)">
                                                                <path
                                                                    d="M9.09091 4.72729H4L10.0079 12.7378L4.32724 19.2727H6.25453L10.9006 13.928L14.9091 19.2727H20L13.7394 10.9253L19.1273 4.72729H17.2001L12.8468 9.73514L9.09091 4.72729Z"
                                                                    fill="#54595F" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_503_2154">
                                                                    <rect width="24" height="24" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="https://linkedin.com/" target="_blank">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_503_2158)">
                                                                <path
                                                                    d="M7.35785 6.12424C7.35754 6.80782 6.94282 7.42295 6.30925 7.67958C5.67569 7.93622 4.94979 7.7831 4.47385 7.29244C3.9979 6.80177 3.86696 6.07154 4.14277 5.44608C4.41858 4.82063 5.04605 4.42483 5.72931 4.44534C6.63682 4.47258 7.35826 5.21633 7.35785 6.12424ZM7.40821 9.04553H4.05041V19.5554H7.40821V9.04553ZM12.7136 9.04553H9.37253V19.5554H12.68V14.0402C12.68 10.9679 16.6842 10.6824 16.6842 14.0402V19.5554H20V12.8986C20 7.7192 14.0735 7.91227 12.68 10.4558L12.7136 9.04553Z"
                                                                    fill="#54595F" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_503_2158">
                                                                    <rect width="24" height="24" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Info  -->
                                        <div class="tc-team__info">
                                            <a href="team-details.html" class="tc-team__name">Mark Henry</a>
                                            <p class="tc-team__designation">CEO Hulo</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Single Team  -->
                                    <div class="tc-team__item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                        <div class="tc-team__cover">
                                            <!-- Image  -->
                                            <div class="tc-team__img">
                                                <img src="assets/images/team/team-4.png" alt="team-img" />
                                            </div>

                                            <!-- Social  -->
                                            <ul class="tc-team__social">
                                                <li>
                                                    <a href="https://www.youtube.com/" target="_blank">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_503_2146)">
                                                                <path
                                                                    d="M12.1955 5.6001C12.6228 5.60245 13.6919 5.61279 14.8278 5.65828L15.2305 5.67584C16.3742 5.72999 17.5168 5.82249 18.0836 5.98051C18.8395 6.19288 19.4337 6.81255 19.6345 7.59804C19.9543 8.84537 19.9943 11.2799 19.9993 11.869L20 11.9911V11.9997C20 11.9997 20 12.0026 20 12.0083L19.9993 12.1304C19.9943 12.7195 19.9543 15.154 19.6345 16.4014C19.4309 17.1897 18.8367 17.8094 18.0836 18.0189C17.5168 18.1769 16.3742 18.2694 15.2305 18.3236L14.8278 18.3411C13.6919 18.3866 12.6228 18.3969 12.1955 18.3993L12.008 18.4H11.9996C11.9996 18.4 11.9968 18.4 11.9913 18.4L11.804 18.3993C10.8996 18.3944 7.11832 18.3535 5.91569 18.0189C5.15973 17.8065 4.56556 17.1869 4.36471 16.4014C4.04496 15.154 4.00499 12.7195 4 12.1304V11.869C4.00499 11.2799 4.04496 8.84537 4.36471 7.59804C4.56835 6.80964 5.16252 6.18998 5.91569 5.98051C7.11832 5.64588 10.8996 5.60507 11.804 5.6001H12.1955ZM10.3996 9.19957V14.7998L15.1998 11.9997L10.3996 9.19957Z"
                                                                    fill="#54595F" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_503_2146">
                                                                    <rect width="24" height="24" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="https://www.facebook.com/" target="_blank">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_503_2150)">
                                                                <path
                                                                    d="M13.4008 13.2H15.4008L16.2008 10H13.4008V8.4C13.4008 7.5765 13.4008 6.8 15.0008 6.8H16.2008V4.11208C15.9402 4.07748 14.9552 4 13.9151 4C11.7435 4 10.2008 5.32549 10.2008 7.75977V10H7.80078V13.2H10.2008V20H13.4008V13.2Z"
                                                                    fill="#54595F" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_503_2150">
                                                                    <rect width="24" height="24" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="https://x.com/" target="_blank">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_503_2154)">
                                                                <path
                                                                    d="M9.09091 4.72729H4L10.0079 12.7378L4.32724 19.2727H6.25453L10.9006 13.928L14.9091 19.2727H20L13.7394 10.9253L19.1273 4.72729H17.2001L12.8468 9.73514L9.09091 4.72729Z"
                                                                    fill="#54595F" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_503_2154">
                                                                    <rect width="24" height="24" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="https://linkedin.com/" target="_blank">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_503_2158)">
                                                                <path
                                                                    d="M7.35785 6.12424C7.35754 6.80782 6.94282 7.42295 6.30925 7.67958C5.67569 7.93622 4.94979 7.7831 4.47385 7.29244C3.9979 6.80177 3.86696 6.07154 4.14277 5.44608C4.41858 4.82063 5.04605 4.42483 5.72931 4.44534C6.63682 4.47258 7.35826 5.21633 7.35785 6.12424ZM7.40821 9.04553H4.05041V19.5554H7.40821V9.04553ZM12.7136 9.04553H9.37253V19.5554H12.68V14.0402C12.68 10.9679 16.6842 10.6824 16.6842 14.0402V19.5554H20V12.8986C20 7.7192 14.0735 7.91227 12.68 10.4558L12.7136 9.04553Z"
                                                                    fill="#54595F" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_503_2158">
                                                                    <rect width="24" height="24" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Info  -->
                                        <div class="tc-team__info">
                                            <a href="team-details.html" class="tc-team__name">Ruben Arcand</a>
                                            <p class="tc-team__designation">CEO Kenli corn</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-8 col-12">
                                    <!-- CTA  -->
                                    <div class="tc-team-cta bg-img wow fadeInUp" data-wow-delay=".5s"
                                        data-wow-duration="1s"
                                        style="background-image: url('assets/images/team/cta-bg.png');">
                                        <div class="tc-team-cta__cont">
                                            <div class="tc-team-cta__cont-top">
                                                <h4 class="tc-team-cta__title">Our Awesome Team</h4>
                                                <p class="tc-team-cta__text">
                                                    The Neural Network experts: uniting talent for intelligent solutions
                                                </p>
                                            </div>

                                            <div class="tc-team-cta__cont-btm">
                                                <!-- Number  -->
                                                <div class="tc-team-cta__number">
                                                    <h2 class="big-number"><span
                                                            class="counter">250</span><small>+</small></h2>
                                                    <p class="number-text">Awesome team members</p>
                                                </div>

                                                <!-- Button  -->
                                                <div class="tc-team-cta__btn">
                                                    <a href="team.html" class="theme-btn">Meet The Team</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Team Area -->

                <!-- Start Testimonial Area -->
                <section class="tc-testimonial bg-offwhite section-gap">
                    <div class="container">
                        <div class="tc-testimonial__inner">
                            <div class="row position-relative">
                                <div class="col-lg-6 col-12">
                                    <!-- Section Head  -->
                                    <div class="tc-sec-head">
                                        <p class="tc-sec-head__sm-title"><span class="dot"></span>Testimonials</p>
                                        <h3 class="tc-sec-head__title has_word_anim">
                                            What our users <br />
                                            say about us.
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="testimonial-slider-controls">
                                        <div class="swiper-button-next tc_next">
                                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.13477 10H17.4681M17.4681 10L12.4681 5M17.4681 10L12.4681 15"
                                                    stroke="#54595F" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>

                                        <div class="swiper-button-prev tc_prev">
                                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.4681 10H4.13477M4.13477 10L9.13477 5M4.13477 10L9.13477 15"
                                                    stroke="#54595F" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper tc-testimonial__slider">
                                <div class="swiper-wrapper">
                                    <!-- Single Testimonial  -->
                                    <div class="swiper-slide tc-testimonial__item">
                                        <div class="tc-testimonial__top">
                                            <svg width="26" height="16" viewBox="0 0 26 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_527_2929)">
                                                    <path
                                                        d="M0.800781 9.66702C0.800781 4.51938 4.48224 1.45757 6.77896 0.0466578C7.06987 -0.132251 7.38405 0.240112 7.16005 0.500476C6.25609 1.54866 5.54143 2.74616 5.04805 4.03939C6.22762 3.70309 7.48304 3.74596 8.63692 4.16194C9.7908 4.57791 10.7848 5.34596 11.4784 6.35755C12.1721 7.36914 12.5303 8.57312 12.5026 9.79938C12.4748 11.0256 12.0623 12.2121 11.3236 13.1913C10.5848 14.1704 9.55703 14.8926 8.38549 15.2559C7.21395 15.6192 5.95787 15.6051 4.79475 15.2157C3.63163 14.8263 2.62028 14.0813 1.90359 13.0859C1.18691 12.0905 0.801135 10.8936 0.800781 9.66702ZM13.8262 9.66702C13.8262 4.51938 17.5077 1.45757 19.8044 0.0481124C20.0953 -0.130797 20.4095 0.240112 20.187 0.499021C19.2818 1.54743 18.5662 2.74544 18.0721 4.03939C19.2516 3.70309 20.507 3.74596 21.6609 4.16194C22.8148 4.57791 23.8088 5.34596 24.5024 6.35755C25.1961 7.36914 25.5543 8.57312 25.5265 9.79938C25.4988 11.0256 25.0863 12.2121 24.3476 13.1913C23.6088 14.1704 22.581 14.8926 21.4095 15.2559C20.2379 15.6192 18.9819 15.6051 17.8188 15.2157C16.6556 14.8263 15.6443 14.0813 14.9276 13.0859C14.2109 12.0905 13.8251 10.895 13.8248 9.66848L13.8262 9.66702Z"
                                                        fill="black" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_527_2929">
                                                        <rect width="24.7273" height="16" fill="white"
                                                            transform="translate(0.800781)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <p class="tc-testimonial__text">
                                                Our content management system of choice is Craft CMS rather than
                                                WordPress, allowing you to manage your website pages
                                            </p>
                                        </div>
                                        <div class="tc-testimonial__btm">
                                            <!-- Author  -->
                                            <div class="tc-testimonial__author">
                                                <div class="tc-testimonial__author-img">
                                                    <img src="assets/images/testimonial/testimonial-1.png"
                                                        alt="testimonial-img" />
                                                </div>

                                                <div class="tc-testimonial__info">
                                                    <h5 class="tc-testimonial__name">
                                                        Assistant Manager
                                                    </h5>
                                                    <p class="tc-testimonial__designation">
                                                        Assistant Manager
                                                    </p>
                                                </div>
                                            </div>

                                            <!-- Rattings  -->
                                            <div class="tc-testimonial__rattings">
                                                <ul>
                                                    <li>
                                                        <img src="assets/images/icons/star.svg" alt="star" />
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/icons/star.svg" alt="star" />
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/icons/star.svg" alt="star" />
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/icons/star.svg" alt="star" />
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/icons/star.svg" alt="star" />
                                                    </li>
                                                </ul>
                                                <p class="tc-testimonial__rattings-text">
                                                    5 Start Rating
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Testimonial  -->
                                    <div class="swiper-slide tc-testimonial__item">
                                        <div class="tc-testimonial__top">
                                            <svg width="26" height="16" viewBox="0 0 26 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_527_2929)">
                                                    <path
                                                        d="M0.800781 9.66702C0.800781 4.51938 4.48224 1.45757 6.77896 0.0466578C7.06987 -0.132251 7.38405 0.240112 7.16005 0.500476C6.25609 1.54866 5.54143 2.74616 5.04805 4.03939C6.22762 3.70309 7.48304 3.74596 8.63692 4.16194C9.7908 4.57791 10.7848 5.34596 11.4784 6.35755C12.1721 7.36914 12.5303 8.57312 12.5026 9.79938C12.4748 11.0256 12.0623 12.2121 11.3236 13.1913C10.5848 14.1704 9.55703 14.8926 8.38549 15.2559C7.21395 15.6192 5.95787 15.6051 4.79475 15.2157C3.63163 14.8263 2.62028 14.0813 1.90359 13.0859C1.18691 12.0905 0.801135 10.8936 0.800781 9.66702ZM13.8262 9.66702C13.8262 4.51938 17.5077 1.45757 19.8044 0.0481124C20.0953 -0.130797 20.4095 0.240112 20.187 0.499021C19.2818 1.54743 18.5662 2.74544 18.0721 4.03939C19.2516 3.70309 20.507 3.74596 21.6609 4.16194C22.8148 4.57791 23.8088 5.34596 24.5024 6.35755C25.1961 7.36914 25.5543 8.57312 25.5265 9.79938C25.4988 11.0256 25.0863 12.2121 24.3476 13.1913C23.6088 14.1704 22.581 14.8926 21.4095 15.2559C20.2379 15.6192 18.9819 15.6051 17.8188 15.2157C16.6556 14.8263 15.6443 14.0813 14.9276 13.0859C14.2109 12.0905 13.8251 10.895 13.8248 9.66848L13.8262 9.66702Z"
                                                        fill="black" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_527_2929">
                                                        <rect width="24.7273" height="16" fill="white"
                                                            transform="translate(0.800781)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <p class="tc-testimonial__text">
                                                Our content management system of choice is Craft CMS rather than
                                                WordPress, allowing you to manage your website pages
                                            </p>
                                        </div>
                                        <div class="tc-testimonial__btm">
                                            <!-- Author  -->
                                            <div class="tc-testimonial__author">
                                                <div class="tc-testimonial__author-img">
                                                    <img src="assets/images/testimonial/testimonial-2.png"
                                                        alt="testimonial-img" />
                                                </div>

                                                <div class="tc-testimonial__info">
                                                    <h5 class="tc-testimonial__name">
                                                        Assistant Manager
                                                    </h5>
                                                    <p class="tc-testimonial__designation">
                                                        Assistant Manager
                                                    </p>
                                                </div>
                                            </div>

                                            <!-- Rattings  -->
                                            <div class="tc-testimonial__rattings">
                                                <ul>
                                                    <li>
                                                        <img src="assets/images/icons/star.svg" alt="star" />
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/icons/star.svg" alt="star" />
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/icons/star.svg" alt="star" />
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/icons/star.svg" alt="star" />
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/icons/star.svg" alt="star" />
                                                    </li>
                                                </ul>
                                                <p class="tc-testimonial__rattings-text">
                                                    5 Start Rating
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Testimonial  -->
                                    <div class="swiper-slide tc-testimonial__item">
                                        <div class="tc-testimonial__top">
                                            <svg width="26" height="16" viewBox="0 0 26 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_527_2929)">
                                                    <path
                                                        d="M0.800781 9.66702C0.800781 4.51938 4.48224 1.45757 6.77896 0.0466578C7.06987 -0.132251 7.38405 0.240112 7.16005 0.500476C6.25609 1.54866 5.54143 2.74616 5.04805 4.03939C6.22762 3.70309 7.48304 3.74596 8.63692 4.16194C9.7908 4.57791 10.7848 5.34596 11.4784 6.35755C12.1721 7.36914 12.5303 8.57312 12.5026 9.79938C12.4748 11.0256 12.0623 12.2121 11.3236 13.1913C10.5848 14.1704 9.55703 14.8926 8.38549 15.2559C7.21395 15.6192 5.95787 15.6051 4.79475 15.2157C3.63163 14.8263 2.62028 14.0813 1.90359 13.0859C1.18691 12.0905 0.801135 10.8936 0.800781 9.66702ZM13.8262 9.66702C13.8262 4.51938 17.5077 1.45757 19.8044 0.0481124C20.0953 -0.130797 20.4095 0.240112 20.187 0.499021C19.2818 1.54743 18.5662 2.74544 18.0721 4.03939C19.2516 3.70309 20.507 3.74596 21.6609 4.16194C22.8148 4.57791 23.8088 5.34596 24.5024 6.35755C25.1961 7.36914 25.5543 8.57312 25.5265 9.79938C25.4988 11.0256 25.0863 12.2121 24.3476 13.1913C23.6088 14.1704 22.581 14.8926 21.4095 15.2559C20.2379 15.6192 18.9819 15.6051 17.8188 15.2157C16.6556 14.8263 15.6443 14.0813 14.9276 13.0859C14.2109 12.0905 13.8251 10.895 13.8248 9.66848L13.8262 9.66702Z"
                                                        fill="black" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_527_2929">
                                                        <rect width="24.7273" height="16" fill="white"
                                                            transform="translate(0.800781)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <p class="tc-testimonial__text">
                                                Our content management system of choice is Craft CMS rather than
                                                WordPress, allowing you to manage your website pages
                                            </p>
                                        </div>
                                        <div class="tc-testimonial__btm">
                                            <!-- Author  -->
                                            <div class="tc-testimonial__author">
                                                <div class="tc-testimonial__author-img">
                                                    <img src="assets/images/testimonial/testimonial-1.png"
                                                        alt="testimonial-img" />
                                                </div>

                                                <div class="tc-testimonial__info">
                                                    <h5 class="tc-testimonial__name">
                                                        Assistant Manager
                                                    </h5>
                                                    <p class="tc-testimonial__designation">
                                                        Assistant Manager
                                                    </p>
                                                </div>
                                            </div>

                                            <!-- Rattings  -->
                                            <div class="tc-testimonial__rattings">
                                                <ul>
                                                    <li>
                                                        <img src="assets/images/icons/star.svg" alt="star" />
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/icons/star.svg" alt="star" />
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/icons/star.svg" alt="star" />
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/icons/star.svg" alt="star" />
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/icons/star.svg" alt="star" />
                                                    </li>
                                                </ul>
                                                <p class="tc-testimonial__rattings-text">
                                                    5 Start Rating
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Testimonial Area -->

             

                <!-- Start Text Move -->
                <section class="tc-text-move tc-text-move--style2 bg-white">
                    <div class="tc-text-move__wrapper">
                        <div class="swiper tc-text-move__slider--style2">
                            <div class="swiper-wrapper ease-linear">
                                <!-- Single Slider -->
                                <div class="swiper-slide">
                                    <div class="tc-text-slide hobble">
                                        <span class="tc-text-slide__title">We are here to help you.</span>
                                        <!-- Action Button  -->
                                        <div class="tc-text-slide__action">
                                            <a href="contact.html" class="tc-text-slide__btn hover-layer-2">
                                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.8008 30.8252L30.8008 10.8252M30.8008 10.8252H15.8008M30.8008 10.8252V25.8252"
                                                        stroke="black" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Slider -->
                                <div class="swiper-slide">
                                    <div class="tc-text-slide hobble">
                                        <span class="tc-text-slide__title">Creating Spaces That Inspire.</span>
                                        <!-- Action Button  -->
                                        <div class="tc-text-slide__action">
                                            <a href="contact.html" class="tc-text-slide__btn hover-layer-2">
                                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.8008 30.8252L30.8008 10.8252M30.8008 10.8252H15.8008M30.8008 10.8252V25.8252"
                                                        stroke="black" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Slider -->
                                <div class="swiper-slide">
                                    <div class="tc-text-slide hobble">
                                        <span class="tc-text-slide__title">Together We Build Futures.</span>
                                        <!-- Action Button  -->
                                        <div class="tc-text-slide__action">
                                            <a href="contact.html" class="tc-text-slide__btn hover-layer-2">
                                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.8008 30.8252L30.8008 10.8252M30.8008 10.8252H15.8008M30.8008 10.8252V25.8252"
                                                        stroke="black" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Slider -->
                                <div class="swiper-slide">
                                    <div class="tc-text-slide hobble">
                                        <span class="tc-text-slide__title">Shaping Dreams Into Reality.</span>
                                        <!-- Action Button  -->
                                        <div class="tc-text-slide__action">
                                            <a href="contact.html" class="tc-text-slide__btn hover-layer-2">
                                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.8008 30.8252L30.8008 10.8252M30.8008 10.8252H15.8008M30.8008 10.8252V25.8252"
                                                        stroke="black" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper tc-text-move__slider-reverse">
                            <div class="swiper-wrapper ease-linear">
                                <!-- Single Slider -->
                                <div class="swiper-slide">
                                    <div class="tc-text-slide hobble">
                                        <span class="tc-text-slide__title">We are here to help you.</span>

                                        <!-- Action Button  -->
                                        <div class="tc-text-slide__action">
                                            <a href="contact.html" class="tc-text-slide__btn hover-layer-2">
                                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.8008 30.8252L30.8008 10.8252M30.8008 10.8252H15.8008M30.8008 10.8252V25.8252"
                                                        stroke="black" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Slider -->
                                <div class="swiper-slide">
                                    <div class="tc-text-slide hobble">
                                        <span class="tc-text-slide__title">Creating Spaces That Inspire.</span>
                                        <!-- Action Button  -->
                                        <div class="tc-text-slide__action">
                                            <a href="contact.html" class="tc-text-slide__btn hover-layer-2">
                                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.8008 30.8252L30.8008 10.8252M30.8008 10.8252H15.8008M30.8008 10.8252V25.8252"
                                                        stroke="black" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Slider -->
                                <div class="swiper-slide">
                                    <div class="tc-text-slide hobble">
                                        <span class="tc-text-slide__title">We are here to help you.</span>
                                        <!-- Action Button  -->
                                        <div class="tc-text-slide__action">
                                            <a href="contact.html" class="tc-text-slide__btn hover-layer-2">
                                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.8008 30.8252L30.8008 10.8252M30.8008 10.8252H15.8008M30.8008 10.8252V25.8252"
                                                        stroke="black" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Slider -->
                                <div class="swiper-slide">
                                    <div class="tc-text-slide hobble">
                                        <span class="tc-text-slide__title">Together We Build Futures.</span>
                                        <!-- Action Button  -->
                                        <div class="tc-text-slide__action">
                                            <a href="contact.html" class="tc-text-slide__btn hover-layer-2">
                                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.8008 30.8252L30.8008 10.8252M30.8008 10.8252H15.8008M30.8008 10.8252V25.8252"
                                                        stroke="black" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Text Move -->
            </main>

            <!-- Start Footer -->
            <?php require_once 'elements/footer.php' ?>
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
    <!-- <script src="assets/plugins/js/custom.js"></script> -->
       <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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
    
    <!-- Latest Project Vertical Slider -->
    <script>
    (function(){
      // Wait for Swiper to be loaded
      function initLatestProjectSlider() {
        if(typeof Swiper === 'undefined') {
          setTimeout(initLatestProjectSlider, 100);
          return;
        }

        const latestProjectSlider = document.querySelector('.tc-latest-project__slider');
        if(!latestProjectSlider) return;

        const totalSlides = latestProjectSlider.querySelectorAll('.swiper-slide').length;
        
        let autoplayCompleted = false;

        const swiperInstance = new Swiper('.tc-latest-project__slider', {
          direction: 'vertical',
          slidesPerView: 1,
          spaceBetween: 30,
          loop: false,
          speed: 800,
          autoplay: {
            delay: 3000,
            disableOnInteraction: false,
          },
          effect: 'slide',
          allowTouchMove: true,
          mousewheel: {
            enabled: true,
            sensitivity: 1,
            releaseOnEdges: true,
          },
          on: {
            slideChange: function() {
              const currentSlide = this.activeIndex;
              // If we've reached the last slide, allow normal scrolling
              if(currentSlide >= totalSlides - 1) {
                // Stop autoplay when reaching the end
                this.autoplay.stop();
                autoplayCompleted = true;
              }
            },
            reachEnd: function() {
              // When slider reaches end, stop autoplay
              this.autoplay.stop();
              autoplayCompleted = true;
            }
          }
        });

        // Pause autoplay until section fully in view
        swiperInstance.autoplay.stop();

        const sliderSection = document.querySelector('.tc-latest-project');
        if(sliderSection && 'IntersectionObserver' in window) {
          const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
              if(entry.isIntersecting && entry.intersectionRatio >= 0.98) {
                if(!autoplayCompleted) {
                  swiperInstance.autoplay.start();
                }
              } else {
                swiperInstance.autoplay.stop();
              }
            });
          }, {
            threshold: [0.5, 0.75, 0.98]
          });

          observer.observe(sliderSection);
        } else {
          // Fallback: start autoplay after slight delay
          setTimeout(() => {
            if(!autoplayCompleted) swiperInstance.autoplay.start();
          }, 700);
        }
      }

      // Initialize after page load
      if(document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
          setTimeout(initLatestProjectSlider, 500);
        });
      } else {
        setTimeout(initLatestProjectSlider, 500);
      }
    })();
    </script>
</body>

</html>