        <?php include "header.php"; ?>
        
        <?php
        require_once __DIR__ . '/home-data.php';
        $heroSlides = [
            ['img' => 'image/banner01_4k.png', 'tab' => 'Agrawal Hospital', 'chip' => 'NABH Accredited · Since 2002',
             'title' => 'Quality medical care for a <span>healthier tomorrow</span>',
             'desc' => 'The best and the latest in diagnosis and treatment of obstetric, gynaecological, respiratory, surgical and critically ill patients — in a homely and friendly atmosphere.',
             'cta' => ['Explore Departments', 'respiratory-medicine.php'], 'cta2' => ['Meet our Doctors', 'our-experts.php']],
            ['img' => 'image/banner02_4k.png', 'tab' => 'Surgery', 'chip' => 'Modular Operation Theatres',
             'title' => 'Expert surgeons, <span>modern theatres</span>',
             'desc' => 'Laparoscopic and minimal access surgery in modular operation theatres furnished with ultra-modern facilities, backed by dedicated anaesthesia care.',
             'cta' => ['General Surgery', 'general-surgery.php'], 'cta2' => ['Book a Consultation', 'contact.php']],
            ['img' => 'image/gynaecology.jpg', 'tab' => 'Maternity', 'chip' => 'Obstetrics & Gynaecology',
             'title' => 'Caring for mothers, <span>welcoming new lives</span>',
             'desc' => 'Complete maternity care — normal and C-section delivery, high-risk pregnancy management, infertility treatment and laparoscopic gynaecology.',
             'cta' => ['Maternity Care', 'obstetrics-gynaecology.php'], 'cta2' => ['Meet Dr. Neelima Agrawal', 'cofounder.php']],
            ['img' => 'image/emergency.jpg', 'tab' => '24/7 Emergency', 'chip' => 'Emergency & Critical Care',
             'title' => 'Every second counts. <span>We are always open.</span>',
             'desc' => 'Fully-equipped ICU with central monitoring, central oxygen, central suction and ventilator support at each bed — with ambulance service round the clock.',
             'cta' => ['Call ' . $hospital['emergency'], tel($hospital['emergency'])], 'cta2' => ['Emergency & Critical Care', 'emergency-critical-care.php']],
        ];
        ?>
        <style>
            .ah-hero { position: relative; height: clamp(620px, 88vh, 840px); border-radius: 24px; overflow: hidden; background: var(--black-4); color: #fff; isolation: isolate; }
            .ah-slide { position: absolute; inset: 0; opacity: 0; visibility: hidden; transition: opacity 1s ease, visibility 1s; }
            .ah-slide.active { opacity: 1; visibility: visible; z-index: 1; }
            .ah-slide .bg { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; transform: scale(1.12); }
            .ah-slide.active .bg { animation: ahZoom 9s ease-out forwards; }
            @keyframes ahZoom { to { transform: scale(1); } }
            .ah-slide::after { content: ''; position: absolute; inset: 0; background: linear-gradient(90deg, rgba(17, 21, 56, .92) 0%, rgba(32, 38, 91, .7) 38%, rgba(32, 38, 91, .1) 72%), linear-gradient(0deg, rgba(17, 21, 56, .85) 0%, transparent 32%); }
            .ah-content { position: absolute; z-index: 2; left: 0; right: 0; top: 50%; transform: translateY(-58%); }
            .ah-content .inner { max-width: 660px; }
            .ah-content .inner > * { opacity: 0; transform: translateY(26px); }
            .ah-slide.active .inner > * { animation: ahUp .8s cubic-bezier(.2, .7, .2, 1) forwards; }
            .ah-slide.active .inner > *:nth-child(2) { animation-delay: .15s; }
            .ah-slide.active .inner > *:nth-child(3) { animation-delay: .3s; }
            .ah-slide.active .inner > *:nth-child(4) { animation-delay: .45s; }
            @keyframes ahUp { to { opacity: 1; transform: none; } }
            .ah-chip { display: inline-flex; align-items: center; gap: 10px; padding: 8px 16px; border-radius: 999px; background: rgba(255, 255, 255, .12); border: 1px solid rgba(255, 255, 255, .2); backdrop-filter: blur(8px); font-size: 14px; font-weight: 600; letter-spacing: .03em; margin-bottom: 22px; }
            .ah-chip::before { content: ''; width: 8px; height: 8px; border-radius: 50%; background: var(--global); box-shadow: 0 0 0 4px rgba(152, 202, 77, .3); }
            .ah-content .ah-title { color: #fff; font-size: clamp(38px, 5.4vw, 72px); line-height: 1.05; letter-spacing: -.02em; margin-bottom: 22px; }
            .ah-content .ah-title span { color: var(--global); display: block; }
            .ah-content p { color: rgba(255, 255, 255, .8); font-size: 18px; line-height: 1.6; max-width: 560px; margin-bottom: 34px; }
            .ah-btns { display: flex; flex-wrap: wrap; gap: 14px; }
            .ah-btn { display: inline-flex; align-items: center; gap: 10px; padding: 16px 28px; border-radius: 999px; font-weight: 700; transition: .3s; }
            .ah-btn.primary { background: var(--global); color: var(--black-4); }
            .ah-btn.primary:hover { background: #fff; }
            .ah-btn.ghost { border: 1px solid rgba(255, 255, 255, .45); color: #fff; }
            .ah-btn.ghost:hover { background: #fff; color: var(--black-4); }
            .ah-side { position: absolute; z-index: 3; right: 40px; top: 50%; transform: translateY(-62%); display: grid; gap: 14px; width: 250px; }
            .ah-stat { background: rgba(255, 255, 255, .1); border: 1px solid rgba(255, 255, 255, .18); backdrop-filter: blur(14px); border-radius: 20px; padding: 20px 22px; }
            .ah-stat strong { display: block; font-size: 34px; line-height: 1.1; color: #fff; }
            .ah-stat span { font-size: 14px; color: rgba(255, 255, 255, .75); }
            .ah-stat.call { background: #e5484d; border-color: #e5484d; display: flex; align-items: center; gap: 14px; }
            .ah-stat.call i { width: 44px; height: 44px; flex: none; border-radius: 50%; background: rgba(255, 255, 255, .2); display: grid; place-items: center; font-style: normal; font-size: 20px; animation: ahRing 1.8s infinite; }
            @keyframes ahRing { 0% { box-shadow: 0 0 0 0 rgba(255, 255, 255, .5); } 100% { box-shadow: 0 0 0 14px rgba(255, 255, 255, 0); } }
            .ah-stat.call b { display: block; font-size: 17px; }
            .ah-stat.call span { color: rgba(255, 255, 255, .9); }
            .ah-tabs { position: absolute; z-index: 3; left: 0; right: 0; bottom: 0; }
            .ah-tabs .tf-container { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; }
            .ah-tab { background: none; border: 0; color: rgba(255, 255, 255, .6); text-align: left; padding: 0 0 30px; cursor: pointer; font: inherit; transition: color .3s; }
            .ah-tab:hover, .ah-tab.active { color: #fff; }
            .ah-tab .bar { display: block; height: 3px; background: rgba(255, 255, 255, .22); border-radius: 3px; overflow: hidden; margin-bottom: 14px; }
            .ah-tab .bar i { display: block; height: 100%; width: 0; background: var(--global); }
            .ah-tab.done .bar i { width: 100%; }
            .ah-tab.active .bar i { animation: ahFill 7s linear forwards; }
            .ah-hero:hover .ah-tab.active .bar i { animation-play-state: paused; }
            @keyframes ahFill { from { width: 0; } to { width: 100%; } }
            .ah-tab small { font-size: 13px; font-weight: 700; color: var(--global); margin-right: 8px; }
            .ah-tab b { font-size: 16px; font-weight: 600; }
            @media (max-width: 1199px) {
                .ah-side { display: none; }
            }
            @media (max-width: 767px) {
                .ah-hero { height: 640px; border-radius: 18px; }
                .ah-slide::after { background: linear-gradient(0deg, rgba(17, 21, 56, .95) 10%, rgba(32, 38, 91, .6) 60%, rgba(32, 38, 91, .35) 100%); }
                .ah-content { top: auto; bottom: 80px; transform: none; }
                .ah-content p { font-size: 16px; margin-bottom: 26px; }
                .ah-btn { padding: 14px 22px; font-size: 15px; }
                .ah-tabs .tf-container { gap: 8px; }
                .ah-tab { padding-bottom: 24px; }
                .ah-tab b { display: none; }
                .ah-tab .bar { margin-bottom: 8px; }
            }
            @media (prefers-reduced-motion: reduce) {
                .ah-slide.active .bg { animation: none; transform: none; }
            }
        </style>

        <div class="mt-30 mx-30">
            <section class="ah-hero" id="ahHero" aria-roledescription="carousel" aria-label="Agrawal Hospital highlights">
                <?php foreach ($heroSlides as $i => $s): ?>
                    <div class="ah-slide<?= $i === 0 ? ' active' : '' ?>" aria-hidden="<?= $i === 0 ? 'false' : 'true' ?>">
                        <img class="bg" src="<?= $s['img'] ?>" alt="" <?= $i === 0 ? 'fetchpriority="high"' : 'loading="lazy"' ?>>
                        <div class="ah-content">
                            <div class="tf-container">
                                <div class="inner">
                                    <div class="ah-chip"><?= htmlspecialchars($s['chip']) ?></div>
                                    <?php $tag = $i === 0 ? 'h1' : 'h2'; ?>
                                    <<?= $tag ?> class="ah-title"><?= $s['title'] ?></<?= $tag ?>>
                                    <p><?= $s['desc'] ?></p>
                                    <div class="ah-btns">
                                        <a class="ah-btn primary" href="<?= $s['cta'][1] ?>"><?= $s['cta'][0] ?> <i class="icon-arrow-right"></i></a>
                                        <a class="ah-btn ghost" href="<?= $s['cta2'][1] ?>"><?= $s['cta2'][0] ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="ah-side">
                    <div class="ah-stat"><strong>1.5 Lakh+</strong><span>Patients treated</span></div>
                    <div class="ah-stat"><strong>350+</strong><span>Lives saved on mechanical ventilation</span></div>
                    <a class="ah-stat call" href="<?= tel($hospital['emergency']) ?>"><i>📞</i><div><span>24/7 Emergency</span><b><?= $hospital['emergency'] ?></b></div></a>
                </div>

                <div class="ah-tabs">
                    <div class="tf-container">
                        <?php foreach ($heroSlides as $i => $s): ?>
                            <button class="ah-tab<?= $i === 0 ? ' active' : '' ?>" data-slide="<?= $i ?>" aria-label="Show slide <?= $i + 1 ?>: <?= htmlspecialchars($s['tab']) ?>">
                                <span class="bar"><i></i></span>
                                <small><?= sprintf('%02d', $i + 1) ?></small><b><?= htmlspecialchars($s['tab']) ?></b>
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        </div>

        <script>
            (function () {
                var hero = document.getElementById('ahHero');
                var slides = hero.querySelectorAll('.ah-slide');
                var tabs = hero.querySelectorAll('.ah-tab');
                var current = 0;

                function go(n) {
                    current = (n + slides.length) % slides.length;
                    slides.forEach(function (s, i) {
                        s.classList.toggle('active', i === current);
                        s.setAttribute('aria-hidden', i === current ? 'false' : 'true');
                    });
                    tabs.forEach(function (t, i) {
                        t.classList.remove('active');
                        t.classList.toggle('done', i < current);
                    });
                    // Force reflow so the progress bar animation restarts on the new tab.
                    void tabs[current].offsetWidth;
                    tabs[current].classList.add('active');
                }

                // The progress bar drives autoplay, so pausing on hover also pauses the slider.
                tabs.forEach(function (t, i) {
                    t.addEventListener('click', function () { go(i); });
                    t.querySelector('.bar i').addEventListener('animationend', function () {
                        if (i === current) go(current + 1);
                    });
                });

                var startX = null;
                hero.addEventListener('touchstart', function (e) { startX = e.touches[0].clientX; }, { passive: true });
                hero.addEventListener('touchend', function (e) {
                    if (startX === null) return;
                    var dx = e.changedTouches[0].clientX - startX;
                    if (Math.abs(dx) > 50) go(current + (dx < 0 ? 1 : -1));
                    startX = null;
                });
            })();
        </script>

        <div class="main-content">

            <div class="features-list mt-30 mx-30">
                <div class="swiper tf-swiper sw-features" data-swiper='{
                    "slidesPerView": 1,
                    "spaceBetween": 30,
                    "pagination": { "el": ".sw-pagination-features", "clickable": true },
                    "breakpoints": {
                        "575": { "slidesPerView": 2, "slidesPerGroup": 1},
                        "1150": { "slidesPerView": 3, "slidesPerGroup": 1}
                        }
                    }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="features-item">
                                <svg class="number-features">
                                    <defs>
                                        <linearGradient id="textGradient1" x1="0%" y1="0%" x2="0%" y2="100%">
                                            <stop offset="0%" stop-color="rgba(12, 23, 26, 0.05)" />
                                            <stop offset="100%" stop-color="rgba(12, 23, 26, 0)" />
                                        </linearGradient>
                                    </defs>

                                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="none" stroke="url(#textGradient1)" stroke-width="2">
                                        01
                                    </text>
                                </svg>
                                <div class="icon">
                                    <i class="icon-looking"></i>
                                </div>
                                <h4 class="title">
                                    <a href="facilities.php">
                                        Looking For Medical & Health Care
                                    </a>
                                </h4>
                                <div class="desc">Your Health is your greatest asset, and finding trusted medical and healthcare services is essential for quality life.</div>
                                <a href="facilities.php" class="tf-btn no-bg">
                                    <span>Find Medical Services</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="features-item">
                                <svg class="number-features">
                                    <defs>
                                        <linearGradient id="textGradient2" x1="0%" y1="0%" x2="0%" y2="100%">
                                            <stop offset="0%" stop-color="rgba(12, 23, 26, 0.05)" />
                                            <stop offset="100%" stop-color="rgba(12, 23, 26, 0)" />
                                        </linearGradient>
                                    </defs>

                                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="none" stroke="url(#textGradient2)" stroke-width="2">
                                        02
                                    </text>
                                </svg>
                                <div class="icon">
                                    <i class="icon-find-professional"></i>
                                </div>
                                <h4 class="title">
                                    <a href="our-experts.php">
                                        Find Professional & Quality Doctors
                                    </a>
                                </h4>
                                <div class="desc">Finding professional, highly qualified, and experienced doctors is essential for receiving the best medical treatment.</div>
                                <a href="our-experts.php" class="tf-btn no-bg">
                                    <span>Find a Doctor</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="features-item">
                                <svg class="number-features">
                                    <defs>
                                        <linearGradient id="textGradient3" x1="0%" y1="0%" x2="0%" y2="100%">
                                            <stop offset="0%" stop-color="rgba(12, 23, 26, 0.05)" />
                                            <stop offset="100%" stop-color="rgba(12, 23, 26, 0)" />
                                        </linearGradient>
                                    </defs>

                                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="none" stroke="url(#textGradient3)" stroke-width="2">
                                        03
                                    </text>
                                </svg>
                                <div class="icon">
                                    <i class="icon-need-emergency"></i>
                                </div>
                                <h4 class="title">
                                    <a href="emergency-critical-care.php">
                                        Need Emergency Ambulance ?
                                    </a>
                                </h4>
                                <div class="desc">In a medical emergency, every second counts. If you need a fast, reliable, and fully equipped ambulance</div>
                                <a href="tel:+918959444999" class="tf-btn no-bg">
                                    <span>Call Ambulance: +91-8959444999</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="sw-pagination-features sw-pagination d-xl-none mt-15 justify-content-center"></div>
                </div>
            </div>

            <style>
                .benefit-items .benefit-link { color: inherit; border-bottom: 1px dashed currentColor; transition: color .2s; }
                .benefit-items .benefit-link:hover { color: var(--global); }
                .title-counter a { color: inherit; }
                .title-counter a:hover { color: var(--global); }
            </style>
            <section class="section-about h-3 tf-spacing-8 mx-30">
                <div class="tf-container">
                    <div class="row rg-30">
                        <div class="col-lg-7">
                            <div class="section-content">
                                <div class="heading-section mb-28">
                                    <div class="title mb-30 text-anime">
                                        <h2 class="fw4">
                                            Where Expert Care 
                                        </h2>
                                        <h2>
                                            Meets Compassion
                                        </h2>
                                    </div>
                                    <p class="desc fw4 color-paragraph wow fadeInUp" data-wow-delay=".2s">
                                        Agrawal Hospital is an effort towards providing the best and the latest in diagnosis and treatment of obstetric, gynaecological, respiratory, surgical and critically ill patients in a homely and friendly atmosphere.
                                    </p>
                                    <p class="desc fw4 color-paragraph wow fadeInUp" data-wow-delay=".2s">

                                        Started on 16th August 2002 in the centrally located Arera Colony of Bhopal city with excellent connectivity and easy approachability, we have grown into a trusted name that generates confidence amongst patients. Having treated over 1.5 lakh patients, we have saved more than 350 lives requiring mechanical ventilation. We provide health services to patients from all walks of life and from across the country.
                                    </p>
                                </div>
                                <div class="benefit-list">
                                    <div class="benefit-items style-color-title mb-10 wow fadeInUp" data-wow-delay=".2s">
                                        <i class="icon-check"></i>
                                        <span><a href="about.php" class="benefit-link">NABH Accredited</a></span>
                                    </div>
                                    <div class="benefit-items style-color-title mb-10 wow fadeInUp" data-wow-delay=".2s">
                                        <i class="icon-check"></i>
                                        <span><a href="emergency-critical-care.php" class="benefit-link">24/7 Emergency & ICU</a></span>
                                    </div>
                                    <div class="benefit-items style-color-title mb-10 wow fadeInUp" data-wow-delay=".2s">
                                        <i class="icon-check"></i>
                                        <span><a href="#tpa" class="benefit-link">Cashless TPA Facility</a></span>
                                    </div>
                                    <div class="benefit-items style-color-title mb-10 wow fadeInUp" data-wow-delay=".2s">
                                        <i class="icon-check"></i>
                                        <span><a href="general-surgery.php" class="benefit-link">Modular Operation Theatre</a></span>
                                    </div>
                                    <div class="benefit-items style-color-title mb-10 wow fadeInUp" data-wow-delay=".2s">
                                        <i class="icon-check"></i>
                                        <span><a href="radiology-radio-diagnosis.php" class="benefit-link">Advanced Diagnostics</a></span>
                                    </div>
                                    <div class="benefit-items style-color-title mb-10 wow fadeInUp" data-wow-delay=".2s">
                                        <i class="icon-check"></i>
                                        <span><a href="about.php" class="benefit-link">BSNL & RBI Authorized</a></span>
                                    </div>
                                </div>
                                <div class="wow fadeInUp" data-wow-delay=".2s">
                                    <a href="#departments" class="tf-btn">
                                        <span>Explore Our Departments</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="list-img  g-30 align-items-center">
                                <div class="image  tf-animate-2">
                                    <img src="image/banner00_1.jpg" data-src="image/banner00_1.jpg" alt="" class="lazyload">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <div class="line-h-3"></div> -->
            <section class="section-department h-1  mx-30" id="departments">
                <div class="section-department-inner tf-spacing-2">
                    <div class="tf-container">
                        <div class="heading-section mb-70 text-center">
                            <h6 class="sub-title mb-10 color-title text-anime">
                                Explore Medical Department
                            </h6>
                            <h2 class="title text-anime">
                                Providing Excellence Across
                                <br>Medical Fields Departments for
                                <br>Specialized Healthcare
                            </h2>
                        </div>
                    </div>

                    <div class="list-item-department">
                        <div class="swiper tf-swiper sw-department sw-grid" data-swiper='{
                            "slidesPerView": 1,
                            "spaceBetween": 0,
                            "observer": true,
                            "observeParents": true,
                             "navigation": {
                                "clickable": true,
                                "nextEl": ".department-next",
                                "prevEl": ".department-prev"
                            },
                            "pagination": { "el": ".sw-pagination-department", "clickable": true },
                            "breakpoints": {
                                "575": { "slidesPerView": 2, "slidesPerGroup": 2, "allowTouchMove": true},
                                "1150": { 
                                    "slidesPerView": 4, "slidesPerGroup": 1, "allowTouchMove": false, "spaceBetween": 0}
                                }
                            }'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="department-item style-1">
                                        <div class="top-item">
                                            <span class="sub-title text-anime-wave">Department</span>
                                            <h3 class="title wow fadeInUp"><a href="respiratory-medicine.php">Respiratory Medicine</a></h3>
                                        </div>
                                        <div class="department-icon-wrap wow fadeInUp">
                                            <div class="icon"><i class="icon-stethoscope" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="bottom-item">
                                            <div class="desc wow fadeInUp">Advanced pulmonology with video bronchoscopy, sleep studies, allergy testing, and comprehensive treatment of all respiratory diseases.</div>
                                            <div class="wow fadeInUp"><a href="respiratory-medicine.php" class="tf-btn no-bg"><span class="fw6 lsp-0">Read more</span><i class="icon-arrow-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="department-item style-1">
                                        <div class="top-item">
                                            <span class="sub-title wow fadeInUp" data-wow-delay=".2s">Department</span>
                                            <h3 class="title wow fadeInUp" data-wow-delay=".2s"><a href="obstetrics-gynaecology.php">Obstetrics &amp; Gynaecology</a></h3>
                                        </div>
                                        <div class="department-icon-wrap wow fadeInUp" data-wow-delay=".2s">
                                            <div class="icon"><i class="icon-maternity" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="bottom-item">
                                            <div class="desc wow fadeInUp" data-wow-delay=".2s">Complete maternity care including normal and C-section delivery, high-risk pregnancy management, infertility treatment, and laparoscopic gynaecology.</div>
                                            <div class="wow fadeInUp" data-wow-delay=".2s"><a href="obstetrics-gynaecology.php" class="tf-btn no-bg"><span class="fw6 lsp-0">Read more</span><i class="icon-arrow-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="department-item style-1">
                                        <div class="top-item">
                                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Department</span>
                                            <h3 class="title wow fadeInUp" data-wow-delay=".3s"><a href="emergency-critical-care.php">Emergency &amp; Critical Care</a></h3>
                                        </div>
                                        <div class="department-icon-wrap wow fadeInUp" data-wow-delay=".3s">
                                            <div class="icon"><i class="icon-emergency-ambulance" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="bottom-item">
                                            <div class="desc wow fadeInUp" data-wow-delay=".3s">24/7 emergency services with fully-equipped ICU featuring central monitoring, central oxygen, central suction, and ventilator support at each bed.</div>
                                            <div class="wow fadeInUp" data-wow-delay=".3s"><a href="emergency-critical-care.php" class="tf-btn no-bg"><span class="fw6 lsp-0">Read more</span><i class="icon-arrow-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="department-item style-1">
                                        <div class="top-item">
                                            <span class="sub-title wow fadeInUp" data-wow-delay=".4s">Department</span>
                                            <h3 class="title wow fadeInUp" data-wow-delay=".4s"><a href="general-surgery.php">General Surgery</a></h3>
                                        </div>
                                        <div class="department-icon-wrap wow fadeInUp" data-wow-delay=".4s">
                                            <div class="icon"><i class="icon-surgery-care" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="bottom-item">
                                            <div class="desc wow fadeInUp" data-wow-delay=".4s">Expert surgical services including laparoscopic and minimal access surgery, with modular operation theatres furnished with ultra-modern facilities.</div>
                                            <div class="wow fadeInUp" data-wow-delay=".4s"><a href="general-surgery.php" class="tf-btn no-bg"><span class="fw6 lsp-0">Read more</span><i class="icon-arrow-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="department-item style-1">
                                        <div class="top-item">
                                            <span class="sub-title wow fadeInUp" data-wow-delay=".2s">Department</span>
                                            <h3 class="title wow fadeInUp" data-wow-delay=".2s"><a href="general-medicine.php">General Medicine</a></h3>
                                        </div>
                                        <div class="department-icon-wrap wow fadeInUp" data-wow-delay=".2s">
                                            <div class="icon"><i class="icon-medicine-care" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="bottom-item">
                                            <div class="desc wow fadeInUp" data-wow-delay=".2s">Comprehensive medical care for a wide range of health conditions with expert diagnosis and personalized treatment plans.</div>
                                            <div class="wow fadeInUp" data-wow-delay=".2s"><a href="general-medicine.php" class="tf-btn no-bg"><span class="fw6 lsp-0">Read more</span><i class="icon-arrow-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="department-item style-1">
                                        <div class="top-item">
                                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Department</span>
                                            <h3 class="title wow fadeInUp" data-wow-delay=".3s"><a href="clinical-haematology.php">Clinical Haematology</a></h3>
                                        </div>
                                        <div class="department-icon-wrap wow fadeInUp" data-wow-delay=".3s">
                                            <div class="icon"><i class="icon-phlebotomy" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="bottom-item">
                                            <div class="desc wow fadeInUp" data-wow-delay=".3s">Specialized diagnosis and treatment of blood disorders with advanced laboratory testing and expert consultation.</div>
                                            <div class="wow fadeInUp" data-wow-delay=".3s"><a href="clinical-haematology.php" class="tf-btn no-bg"><span class="fw6 lsp-0">Read more</span><i class="icon-arrow-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="department-item style-1">
                                        <div class="top-item">
                                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Department</span>
                                            <h3 class="title wow fadeInUp" data-wow-delay=".3s"><a href="ent.php">ENT (Otorhinolaryngology)</a></h3>
                                        </div>
                                        <div class="department-icon-wrap wow fadeInUp" data-wow-delay=".3s">
                                            <div class="icon"><i class="icon-headphones-simple" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="bottom-item">
                                            <div class="desc wow fadeInUp" data-wow-delay=".3s">Expert treatment of ear, nose, and throat conditions with advanced audiometry and comprehensive ENT care.</div>
                                            <div class="wow fadeInUp" data-wow-delay=".3s"><a href="ent.php" class="tf-btn no-bg"><span class="fw6 lsp-0">Read more</span><i class="icon-arrow-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="department-item style-1">
                                        <div class="top-item">
                                            <span class="sub-title wow fadeInUp" data-wow-delay=".4s">Department</span>
                                            <h3 class="title wow fadeInUp" data-wow-delay=".4s"><a href="anaesthesiology.php">Anaesthesiology</a></h3>
                                        </div>
                                        <div class="department-icon-wrap wow fadeInUp" data-wow-delay=".4s">
                                            <div class="icon"><i class="icon-need-emergency" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="bottom-item">
                                            <div class="desc wow fadeInUp" data-wow-delay=".4s">Expert anaesthesia services for all surgical procedures with dedicated obstetric anaesthesia for safe deliveries and pain management.</div>
                                            <div class="wow fadeInUp" data-wow-delay=".4s"><a href="anaesthesiology.php" class="tf-btn no-bg"><span class="fw6 lsp-0">Read more</span><i class="icon-arrow-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sw-pagination-department sw-pagination d-xl-none mt-15 justify-content-center"></div>
                    </div>
                    <div class="tf-container">
                        <div class="treatment-links wow fadeInUp">
                            <span class="label">Treatments &amp; Services</span>
                            <a href="asthma-treatment.php">Asthma Treatment</a>
                            <a href="chest-specialist.php">Chest Specialist</a>
                            <a href="chest-respiratory.php">Chest &amp; Respiratory</a>
                            <a href="emergency-medicine.php">Emergency Medicine</a>
                            <a href="surgery.php">Surgery</a>
                            <a href="radiology-radio-diagnosis.php">Radiology &amp; Radio Diagnosis</a>
                            <a href="dietetics.php">Dietetics</a>
                            <a href="facilities.php">Facilities</a>
                        </div>
                    </div>
                    <style>
                        .treatment-links { display: flex; flex-wrap: wrap; align-items: center; gap: 10px; padding: 40px 0 10px; }
                        .treatment-links .label { font-weight: 700; color: var(--black-4); margin-right: 6px; }
                        .treatment-links a { padding: 9px 18px; border-radius: 999px; border: 1px solid rgba(32, 38, 91, .15); background: #fff; color: var(--black-4); font-weight: 500; font-size: 15px; transition: .25s; }
                        .treatment-links a:hover { background: var(--global); border-color: var(--global); color: var(--black-4); }
                    </style>
                </div>
            </section>

            <section class="section-appointment tf-spacing-2 h-1 mx-30">
                <div class="heading-section">
                    <div class="tf-container">
                        <div class="row rg-30">
                            <div class="col-xl-6">
                                <h2 class="title mb-30 text-anime-wave text-anime">
                                    Excellence in Healthcare
                                    <br>Compassion in Service
                                </h2>
                                <div class="text wow fadeInUp">We specialize in advanced hematology care, diagnosing and treating
                                    wide range of blood disorders and diseases. Our expert hematologists
                                    provide personalized treatment plans for conditions.
                                </div>
                                <div class="flex flex-wrap g-10 mt-30 wow fadeInUp">
                                    <a href="our-experts.php" class="tf-btn">
                                        <span>Meet Our Doctors</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                    <a href="contact.php" class="tf-btn style-border hover-bg-black-4">
                                        <span>Book Appointment</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="list-counter flex justify-content-between">
                                    <div class="counter-item">
                                        <div class="counter">
                                            <div class="number-counter flex fs-65 fw7">
                                                <span class="number odometer color-primary" data-to="35" data-inviewport="yes"> 0 </span>
                                                <span class="color-primary">+</span>
                                            </div>
                                            <p class="title-counter body-2 lh-30">
                                                <a href="our-experts.php">Experienced doctors<br>at your service</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="counter-item">
                                        <div class="counter">
                                            <div class="number-counter flex fs-65 fw7">
                                                <span class="number odometer color-primary" data-to="22" data-inviewport="yes"> 0 </span>
                                                <span class="color-primary">+</span>
                                            </div>
                                            <p class="title-counter body-2 lh-30">
                                                <a href="about.php">Years Of Experience<br>in Medical Services</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section class="section-services h-3 tf-spacing-8" style="display:none;">
                <div class="tf-container">
                    <div class="heading-section text-center mb-70">
                        <div class="title mb-30 text-anime">
                            <h2 class="fw4">Departments & Specialities</h2>
                            <!-- <h2>for Every Stage of Life</h2> -->
                        </div>
                        <h6 class="desc fw4 color-paragraph lsp-0 lh-30 wow fadeInUp" data-wow-delay=".2s">
                            Comprehensive healthcare services across multiple specialities, backed by <br/>advanced technology and expert medical professionals.
                        </h6>
                    </div>
                </div>

                <div class="tf-container">
                    <div class="swiper tf-swiper sw-services sw-grid" data-swiper='{
                            "slidesPerView": 1,
                            "spaceBetween": 30,
                            "observer": true,
                            "observeParents": true,
                            "pagination": { "el": ".sw-pagination-departments", "clickable": true },
                            "breakpoints": {
                                "767": { "slidesPerView": 2, "slidesPerGroup": 2, "spaceBetween": 30, "allowTouchMove": true},
                                "1150": { 
                                    "slidesPerView": 4, "slidesPerGroup": 4, "allowTouchMove": false, "spaceBetween": 0}
                                }
                            }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="services-item style-bg-black-3 px-mobile-sm wow fadeInUp">
                                    <div class="icon wow fadeInUp">
                                        <i class="icon-primary-care"></i>
                                    </div>
                                    <h4 class="wow fadeInUp">
                                        <a href="respiratory-medicine.php" class="title">Respiratory Medicine</a>
                                    </h4>
                                    <div class="desc wow fadeInUp">
                                        Advanced pulmonology with video bronchoscopy, sleep studies, allergy testing, and comprehensive treatment of all respiratory diseases.
                                    </div>
                                    <div class="bottom-btn wow fadeInUp">
                                        <a href="respiratory-medicine.php" class="tf-btn style-small style-yellow-2 hover-boder-white">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="services-item style-bg-gray-2 px-mobile-sm wow fadeInUp" data-wow-delay=".1s">
                                    <div class="icon wow fadeInUp" data-wow-delay=".1s">
                                        <i class="icon-maternity"></i>
                                    </div>
                                    <h4 class="wow fadeInUp" data-wow-delay=".1s">
                                        <a href="obstetrics-gynaecology.php" class="title">Obstetrics &amp; Gynaecology</a>
                                    </h4>
                                    <div class="desc wow fadeInUp" data-wow-delay=".1s">
                                        Complete maternity care including normal and C-section delivery, high-risk pregnancy management, infertility treatment, and laparoscopic gynaecology.
                                    </div>
                                    <div class="bottom-btn wow fadeInUp" data-wow-delay=".1s">
                                        <a href="obstetrics-gynaecology.php" class="tf-btn style-small style-white hover-boder-color-title">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="services-item style-bg-border-3 px-mobile-sm wow fadeInUp" data-wow-delay=".2s">
                                    <div class="icon wow fadeInUp" data-wow-delay=".2s">
                                        <i class="icon-emergency"></i>
                                    </div>
                                    <h4 class="wow fadeInUp" data-wow-delay=".2s">
                                        <a href="emergency-critical-care.php" class="title">Emergency &amp; Critical Care</a>
                                    </h4>
                                    <div class="desc wow fadeInUp" data-wow-delay=".2s">
                                        24/7 emergency services with fully-equipped ICU featuring central monitoring, central oxygen, central suction, and ventilator support at each bed.
                                    </div>
                                    <div class="bottom-btn wow fadeInUp" data-wow-delay=".2s">
                                        <a href="emergency-critical-care.php" class="tf-btn style-small style-white hover-boder-color-title">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="services-item style-bg-gray-3 px-mobile-sm wow fadeInUp">
                                    <div class="icon wow fadeInUp">
                                        <i class="icon-surgery-care"></i>
                                    </div>
                                    <h4 class="wow fadeInUp">
                                        <a href="general-surgery.php" class="title">General Surgery</a>
                                    </h4>
                                    <div class="desc wow fadeInUp">
                                        Expert surgical services including laparoscopic and minimal access surgery, with modular operation theatres furnished with ultra-modern facilities.
                                    </div>
                                    <div class="bottom-btn wow fadeInUp">
                                        <a href="general-surgery.php" class="tf-btn style-small style-white hover-boder-color-title">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="services-item style-bg-black-3 px-mobile-sm wow fadeInUp" data-wow-delay=".1s">
                                    <div class="icon wow fadeInUp" data-wow-delay=".1s">
                                        <i class="icon-primary-care"></i>
                                    </div>
                                    <h4 class="wow fadeInUp" data-wow-delay=".1s">
                                        <a href="general-medicine.php" class="title">General Medicine</a>
                                    </h4>
                                    <div class="desc wow fadeInUp" data-wow-delay=".1s">
                                        Comprehensive medical care for a wide range of health conditions with expert diagnosis and personalized treatment plans.
                                    </div>
                                    <div class="bottom-btn wow fadeInUp" data-wow-delay=".1s">
                                        <a href="general-medicine.php" class="tf-btn style-small style-yellow-2 hover-boder-white">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="services-item style-bg-gray-2 px-mobile-sm wow fadeInUp" data-wow-delay=".2s">
                                    <div class="icon wow fadeInUp" data-wow-delay=".2s">
                                        <i class="icon-diagnostic"></i>
                                    </div>
                                    <h4 class="wow fadeInUp" data-wow-delay=".2s">
                                        <a href="clinical-haematology.php" class="title">Clinical Haematology</a>
                                    </h4>
                                    <div class="desc wow fadeInUp" data-wow-delay=".2s">
                                        Specialized diagnosis and treatment of blood disorders with advanced laboratory testing and expert consultation.
                                    </div>
                                    <div class="bottom-btn wow fadeInUp" data-wow-delay=".2s">
                                        <a href="clinical-haematology.php" class="tf-btn style-small style-white hover-boder-color-title">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="services-item style-bg-border-3 px-mobile-sm wow fadeInUp">
                                    <div class="icon wow fadeInUp">
                                        <i class="icon-specialized"></i>
                                    </div>
                                    <h4 class="wow fadeInUp">
                                        <a href="ent.php" class="title">ENT (Otorhinolaryngology)</a>
                                    </h4>
                                    <div class="desc wow fadeInUp">
                                        Expert treatment of ear, nose, and throat conditions with advanced audiometry and comprehensive ENT care.
                                    </div>
                                    <div class="bottom-btn wow fadeInUp">
                                        <a href="ent.php" class="tf-btn style-small style-white hover-boder-color-title">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="services-item style-bg-gray-3 px-mobile-sm wow fadeInUp" data-wow-delay=".1s">
                                    <div class="icon wow fadeInUp" data-wow-delay=".1s">
                                        <i class="icon-surgery-care"></i>
                                    </div>
                                    <h4 class="wow fadeInUp" data-wow-delay=".1s">
                                        <a href="anaesthesiology.php" class="title">Anaesthesiology</a>
                                    </h4>
                                    <div class="desc wow fadeInUp" data-wow-delay=".1s">
                                        Expert anaesthesia services for all surgical procedures with dedicated obstetric anaesthesia for safe deliveries and pain management.
                                    </div>
                                    <div class="bottom-btn wow fadeInUp" data-wow-delay=".1s">
                                        <a href="anaesthesiology.php" class="tf-btn style-small style-white hover-boder-color-title">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sw-pagination-departments sw-pagination d-xl-none mt-15 justify-content-center"></div>
            </section>

            <section class="section-services h-5 tf-spacing-2 mx-30">
                <div class="heading-section style-3 mb-70 style-white">
                    <div class="tf-container">
                        <div class="row align-items-center rg-10">
                            <div class="col-lg-6">
                                <h6 class="sub-title mb-10 text-anime">Respiratory Expertise
                                </h6>
                                <h2 class="title text-anime">
                                    Conditions We Treat
                                </h2>
                            </div>
                            <div class="col-lg-6">
                                <div class="right flex align-items-center justify-content-between g-30">
                                    <div class="text wow fadeInUp" data-wow-delay=".2s">
                                        Comprehensive diagnosis and treatment of all respiratory diseases under the expertise of <a href="founder.php" style="color:inherit;text-decoration:underline">Dr. P. N. Agrawal</a>.
                                    </div>
                                    <div class="list-btn flex g-10">
                                    <div class="wow fadeInUp" data-wow-delay=".3s">
                                        <a href="respiratory-medicine.php" class="tf-btn style-small style-white hover-boder-color-title">
                                            <span>Respiratory Medicine</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                        <div class="wow fadeInUp" data-wow-delay=".4s">
                                            <a class="arrow-btn style-border style-border-3 hover-bg-purple arrow-next conditions-prev">
                                                <i class="icon-arrow-left"></i>
                                            </a>
                                        </div>
                                        <div class="wow fadeInUp" data-wow-delay=".6s">
                                            <a class="arrow-btn style-border style-border-3 hover-bg-purple arrow-prev conditions-next">
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tf-container">
                    <div class="swiper tf-swiper sw-services" data-swiper='{
                        "slidesPerView": 1,
                        "spaceBetween": 15,
                        "speed" : 800,
                        "navigation": {
                           "clickable": true,
                          "nextEl": ".conditions-next",
                          "prevEl": ".conditions-prev"
                        },  
                        "pagination": { "el": ".sw-pagination-conditions", "clickable": true },
                        "breakpoints": {
                            "575": { "slidesPerView": 2, "slidesPerGroup": 1, "spaceBetween": 15},
                             "767": { "slidesPerView": 3, "slidesPerGroup": 1,"spaceBetween": 15},
                            "1150": { "slidesPerView": 4, "slidesPerGroup": 1, "spaceBetween": 30}
                            }
                        }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="asthma-treatment.php">Asthma</a></h6>
                                        <div class="icon"><i class="icon-special-care" aria-hidden="true"></i></div>
                                        <div class="desc">Personalized assessment and care to help control asthma symptoms and support easier breathing.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition style-bg-green-3">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">COPD</a></h6>
                                        <div class="icon"><i class="icon-primary-care" aria-hidden="true"></i></div>
                                        <div class="desc">Comprehensive evaluation and ongoing support for chronic obstructive pulmonary disease.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition style-bg-blue-4">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">Lung Cancer</a></h6>
                                        <div class="icon"><i class="icon-diagnostic" aria-hidden="true"></i></div>
                                        <div class="desc">Expert investigation of lung concerns, with coordinated specialist care and guidance.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition style-bg-green-2">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">Pneumonia</a></h6>
                                        <div class="icon"><i class="icon-medicine-care" aria-hidden="true"></i></div>
                                        <div class="desc">Assessment and treatment planning for lung infections, including pneumonia.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">Tuberculosis</a></h6>
                                        <div class="icon"><i class="icon-specialized" aria-hidden="true"></i></div>
                                        <div class="desc">Specialist evaluation, testing, and care for tuberculosis and related lung concerns.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition style-bg-green-3">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">Lung Fibrosis</a></h6>
                                        <div class="icon"><i class="icon-physical-rehabilitation" aria-hidden="true"></i></div>
                                        <div class="desc">Care focused on evaluating lung scarring and helping manage breathing symptoms.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition style-bg-blue-4">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">Interstitial Lung Disease</a></h6>
                                        <div class="icon"><i class="icon-diagnostic" aria-hidden="true"></i></div>
                                        <div class="desc">Diagnostic assessment and specialist management for interstitial lung conditions.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition style-bg-green-2">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">Chronic Cough</a></h6>
                                        <div class="icon"><i class="icon-stethoscope" aria-hidden="true"></i></div>
                                        <div class="desc">Evaluation to help identify possible causes of a persistent cough and guide care.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">Airway Foreign Body</a></h6>
                                        <div class="icon"><i class="icon-emergency1" aria-hidden="true"></i></div>
                                        <div class="desc">Prompt specialist assessment and care for suspected objects in the airway.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition style-bg-green-3">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">Pleural Effusion</a></h6>
                                        <div class="icon"><i class="icon-surgery-care" aria-hidden="true"></i></div>
                                        <div class="desc">Assessment and treatment options for fluid accumulation around the lungs.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition style-bg-blue-4">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">Pulmonary Embolism</a></h6>
                                        <div class="icon"><i class="icon-emergency-ambulance" aria-hidden="true"></i></div>
                                        <div class="desc">Urgent specialist evaluation and coordinated care for blood clots affecting the lungs.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition style-bg-green-2">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">Pulmonary Hypertension</a></h6>
                                        <div class="icon"><i class="icon-heart" aria-hidden="true"></i></div>
                                        <div class="desc">Specialist evaluation and management of elevated pressure in the lung arteries.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">Respiratory Failure</a></h6>
                                        <div class="icon"><i class="icon-need-emergency" aria-hidden="true"></i></div>
                                        <div class="desc">Critical respiratory assessment and support tailored to each patient's needs.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition style-bg-green-3">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">Sleep Disorders</a></h6>
                                        <div class="icon"><i class="icon-schedule-hours" aria-hidden="true"></i></div>
                                        <div class="desc">Sleep assessment and testing to investigate disorders that affect breathing and rest.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition style-bg-blue-4">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">Allergic Rhinitis</a></h6>
                                        <div class="icon"><i class="icon-special-care" aria-hidden="true"></i></div>
                                        <div class="desc">Assessment and care for nasal allergy symptoms and related breathing concerns.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition style-bg-green-2">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">Sarcoidosis</a></h6>
                                        <div class="icon"><i class="icon-diagnostic" aria-hidden="true"></i></div>
                                        <div class="desc">Specialist assessment and follow-up for sarcoidosis affecting the lungs.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">Emphysema</a></h6>
                                        <div class="icon"><i class="icon-primary-care" aria-hidden="true"></i></div>
                                        <div class="desc">Personalized care to help manage emphysema and its impact on breathing.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition style-bg-green-3">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">Chronic Bronchitis</a></h6>
                                        <div class="icon"><i class="icon-medicine-care" aria-hidden="true"></i></div>
                                        <div class="desc">Evaluation and ongoing support for persistent bronchial inflammation and cough.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition style-bg-blue-4">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">Cystic Fibrosis</a></h6>
                                        <div class="icon"><i class="icon-advanced-medical-technology" aria-hidden="true"></i></div>
                                        <div class="desc">Coordinated respiratory care and monitoring for people living with cystic fibrosis.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition style-bg-green-2">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">Lung Nodules</a></h6>
                                        <div class="icon"><i class="icon-looking" aria-hidden="true"></i></div>
                                        <div class="desc">Imaging review and specialist assessment to monitor and evaluate lung nodules.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">Dyspnea</a></h6>
                                        <div class="icon"><i class="icon-stethoscope" aria-hidden="true"></i></div>
                                        <div class="desc">Assessment to investigate shortness of breath and determine appropriate next steps.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition style-bg-green-3">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">Eosinophilic Lung Disorders</a></h6>
                                        <div class="icon"><i class="icon-patient-centered" aria-hidden="true"></i></div>
                                        <div class="desc">Specialist investigation and care for eosinophilic conditions affecting the lungs.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 respiratory-condition style-bg-blue-4">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">Respiratory Care</div>
                                        <h6 class="title"><a href="respiratory-medicine.php">Vocal Cord Dysfunction</a></h6>
                                        <div class="icon"><i class="icon-user-doctor" aria-hidden="true"></i></div>
                                        <div class="desc">Evaluation of vocal cord-related breathing symptoms with specialist care planning.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-pagination-conditions sw-pagination mt-15 justify-content-center style-white"></div>
                </div>
            </section>
            
            <section class="section-team h-3 tf-spacing-2 mx-30">
                <div class="tf-container">
                    <div class="row rg-30">
                        <div class="col-xl-3">
                            <div class="heading-section mb-30">
                                <div class="title mb-30 text-anime">
                                    <!-- <h2 class="fw4">Agrawal Hospital</h2> -->
                                    <h2>Our Experienced Doctors</h2>
                                </div>
                                <p class="desc color-paragraph wow fadeInUp" data-wow-delay=".2s">
                                    Meet our specialists providing expert care across a wide range of medical departments.
                                </p>
                            </div>
                            <div class="list-btn flex align-items-center g-10">
                                <a class="arrow-btn style-border style-border-2 arrow-prev team-prev">
                                    <i class="icon-arrow-left"></i>
                                </a>
                                <a class="arrow-btn style-border style-border-2 arrow-next team-next">
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                            <a href="our-experts.php" class="tf-btn mt-30">
                                <span>View All Doctors</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-xl-9">
                            <div class="swiper tf-swiper sw-team-3" data-swiper='{
                                "slidesPerView": 1,
                                "spaceBetween": 30,
                                "speed": 800,
                                "navigation": {
                                    "clickable": true,
                                    "nextEl": ".team-next",
                                    "prevEl": ".team-prev"
                                },
                                "pagination": { "el": ".sw-pagination-team", "clickable": true },
                                "breakpoints": {
                                    "575": { "slidesPerView": 2, "slidesPerGroup": 2},
                                    "991": { "slidesPerView": 3, "slidesPerGroup": 1}
                                }
                                }'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="team-item hover-img style-2">
                                            <div class="top-item">
                                                <a href="founder.php" class="image">
                                                    <img src="image/team-item/Dr. P. N. Agrawal.JPG" data-src="image/team-item/Dr. P. N. Agrawal.JPG" alt="Dr. P. N. Agrawal" class="lazyload">
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h5 class="name-team">
                                                    <a href="founder.php">Dr. P. N. Agrawal</a>
                                                </h5>
                                                <a href="respiratory-medicine.php" class="position">
                                                    Pulmonology &amp; Critical Care, DM
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-item hover-img style-2">
                                            <div class="top-item">
                                                <a href="cofounder.php" class="image">
                                                    <img src="image/team-item/Dr. Neelima Agrawal.JPG" data-src="image/team-item/Dr. Neelima Agrawal.JPG" alt="Dr. Neelima Agrawal" class="lazyload">
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h5 class="name-team">
                                                    <a href="cofounder.php">Dr. Neelima Agrawal</a>
                                                </h5>
                                                <a href="obstetrics-gynaecology.php" class="position">
                                                    Obstetrics &amp; Gynaecology, DGO
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-item hover-img style-2">
                                            <div class="top-item">
                                                <a href="our-experts.php" class="image">
                                                    <img src="image/team-item/Dr. R.k jain.jpg" data-src="image/team-item/Dr. R.k jain.jpg" alt="Dr. R. K. Jain" class="lazyload">
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h5 class="name-team">
                                                    <a href="our-experts.php">Dr. R. K. Jain</a>
                                                </h5>
                                                <a href="anaesthesiology.php" class="position">
                                                    Anaesthesia, MD
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-item hover-img style-2">
                                            <div class="top-item">
                                                <a href="our-experts.php" class="image">
                                                    <img src="image/team-item/Dr S. S. Upasani.jpg" data-src="image/team-item/Dr S. S. Upasani.jpg" alt="Dr. Shirish Upasani" class="lazyload">
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h5 class="name-team">
                                                    <a href="our-experts.php">Dr. Shirish Upasani</a>
                                                </h5>
                                                <a href="general-surgery.php" class="position">
                                                    Surgeon, MS, FMAS
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-item hover-img style-2">
                                            <div class="top-item">
                                                <a href="our-experts.php" class="image">
                                                    <img src="image/team-item/Dr. Rajeev Sharda.jpg" data-src="image/team-item/Dr. Rajeev Sharda.jpg" alt="Dr. Rajeev Sharda" class="lazyload">
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h5 class="name-team">
                                                    <a href="our-experts.php">Dr. Rajeev Sharda</a>
                                                </h5>
                                                <a href="general-surgery.php" class="position">
                                                    Surgeon, MS, FMAS
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-item hover-img style-2">
                                            <div class="top-item">
                                                <a href="our-experts.php" class="image">
                                                    <img src="image/team-item/Dr R. K. Nigam.jpg" data-src="image/team-item/Dr R. K. Nigam.jpg" alt="Dr. Rishi Nigam" class="lazyload">
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h5 class="name-team">
                                                    <a href="our-experts.php">Dr. Rishi Nigam</a>
                                                </h5>
                                                <a href="clinical-haematology.php" class="position">
                                                    Pathologist
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-item hover-img style-2">
                                            <div class="top-item">
                                                <a href="our-experts.php" class="image">
                                                    <img src="image/team-item/Dr. Sandeep Dheer.jpg" data-src="image/team-item/Dr. Sandeep Dheer.jpg" alt="Dr. Sandeep Dheer" class="lazyload">
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h5 class="name-team">
                                                    <a href="our-experts.php">Dr. Sandeep Dheer</a>
                                                </h5>
                                                <a href="radiology-radio-diagnosis.php" class="position">
                                                    Radiologist, MD
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-item hover-img style-2">
                                            <div class="top-item">
                                                <a href="our-experts.php" class="image">
                                                    <img src="image/team-item/Dr. Sumeet Bhargava.jpg" data-src="image/team-item/Dr. Sumeet Bhargava.jpg" alt="Dr. Sumeet Bhargava" class="lazyload">
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h5 class="name-team">
                                                    <a href="our-experts.php">Dr. Sumeet Bhargava</a>
                                                </h5>
                                                <a href="anaesthesiology.php" class="position">
                                                    Anaesthesia, MD
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-item hover-img style-2">
                                            <div class="top-item">
                                                <a href="our-experts.php" class="image">
                                                    <img src="image/team-item/Dr Sudeep Bhargava.jpg" data-src="image/team-item/Dr Sudeep Bhargava.jpg" alt="Dr. Sudeep Bhargava" class="lazyload">
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h5 class="name-team">
                                                    <a href="our-experts.php">Dr. Sudeep Bhargava</a>
                                                </h5>
                                                <a href="anaesthesiology.php" class="position">
                                                    Anaesthesia, MD
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-item hover-img style-2">
                                            <div class="top-item">
                                                <a href="our-experts.php" class="image">
                                                    <img src="image/team-item/Dr. Apoorv Jain.jpg" data-src="image/team-item/Dr. Apoorv Jain.jpg" alt="Dr. Apoorv Jain" class="lazyload">
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h5 class="name-team">
                                                    <a href="our-experts.php">Dr. Apoorv Jain</a>
                                                </h5>
                                                <a href="our-experts.php" class="position">
                                                    Cardiologist, DM
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-pagination-team sw-pagination d-xl-none mt-15 justify-content-center"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-testimonials h-3 tf-spacing-10 mx-30">
                 <div class="list-text">
                    <div class="tf-marquee">
                        <div class="marquee-wrapper">
                            <div class="initial-child-container">
                                <div class="marquee-child-item">
                                     <div class="text-overlay text-2">patients testimonials</div>
                                </div>
                                <div class="marquee-child-item">
                                     <div class="text-overlay text-2">patients testimonials</div>
                                </div>
                                <div class="marquee-child-item">
                                     <div class="text-overlay text-2">patients testimonials</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php require_once __DIR__ . '/home-data.php'; ?>
                <style>
                    .happy-patients { display: grid; grid-template-columns: 380px minmax(0, 1fr); gap: 30px; align-items: stretch; }
                    .hp-intro { background: var(--black-4); color: #fff; border-radius: 24px; padding: 44px 36px; display: flex; flex-direction: column; position: relative; overflow: hidden; }
                    .hp-intro::after { content: '\201C'; position: absolute; right: 18px; bottom: -70px; font-size: 260px; line-height: 1; font-family: Georgia, serif; color: rgba(152, 202, 77, .15); }
                    .hp-intro .label { display: inline-block; align-self: flex-start; background: rgba(152, 202, 77, .18); color: var(--global); font-size: 13px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; padding: 6px 14px; border-radius: 999px; margin-bottom: 18px; }
                    .hp-intro h2 { color: #fff; font-size: 38px; line-height: 1.15; margin-bottom: 16px; }
                    .hp-intro p { color: rgba(255, 255, 255, .72); margin-bottom: 24px; }
                    .hp-intro ul { list-style: none; padding: 0; margin: 0 0 32px; display: grid; gap: 12px; }
                    .hp-intro li { display: flex; align-items: center; gap: 12px; color: #fff; font-weight: 500; }
                    .hp-intro li::before { content: '✓'; width: 26px; height: 26px; flex: none; border-radius: 50%; background: var(--global); color: var(--black-4); display: grid; place-items: center; font-size: 13px; font-weight: 800; }
                    .hp-nav { display: flex; gap: 12px; margin-top: auto; position: relative; z-index: 1; }
                    .hp-nav button { width: 54px; height: 54px; border-radius: 50%; border: 1px solid rgba(255, 255, 255, .3); background: transparent; color: #fff; font-size: 20px; cursor: pointer; transition: .3s; }
                    .hp-nav button:hover { background: var(--global); border-color: var(--global); color: var(--black-4); }
                    .hp-nav button.swiper-button-disabled { opacity: .35; cursor: default; }
                    .sw-happy { width: 100%; }
                    .sw-happy .swiper-slide { height: auto; }
                    .hp-card { height: 100%; background: #fff; border-radius: 24px; padding: 34px 30px 28px; display: flex; flex-direction: column; border: 1px solid transparent; transition: .3s; }
                    .hp-card:hover { border-color: var(--global); box-shadow: 0 18px 40px rgba(32, 38, 91, .08); }
                    .hp-card .top { display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px; }
                    .hp-card .stars { color: #f5a623; letter-spacing: 3px; font-size: 18px; }
                    .hp-card .topic { font-size: 12px; font-weight: 700; color: var(--black-4); background: var(--border-3); padding: 5px 12px; border-radius: 999px; }
                    .hp-card .quote-ic { width: 46px; height: 46px; border-radius: 14px; background: var(--global); color: #fff; display: grid; place-items: center; font-family: Georgia, serif; font-size: 34px; line-height: 1; padding-top: 12px; margin-bottom: 16px; }
                    .hp-card h4 { font-size: 21px; line-height: 1.3; color: var(--black-4); margin-bottom: 10px; }
                    .hp-card p { color: var(--color-paragraph); margin-bottom: 0; flex: 1; }
                    .hp-card .who { display: flex; align-items: center; gap: 12px; margin-top: 24px; padding-top: 20px; border-top: 1px dashed rgba(32, 38, 91, .15); }
                    .hp-card .av { width: 48px; height: 48px; flex: none; border-radius: 50%; background: var(--black-4); color: var(--global); display: grid; place-items: center; font-weight: 700; }
                    .hp-card .who strong { display: block; color: var(--black-4); }
                    .hp-card .who small { color: var(--color-paragraph); font-size: 13px; }
                    .sw-pagination-happy { margin-top: 24px; justify-content: center; }
                    @media (max-width: 1149px) {
                        .happy-patients { grid-template-columns: 1fr; }
                        .hp-intro { padding: 34px 26px; }
                        .hp-intro h2 { font-size: 30px; }
                        .hp-intro ul { grid-template-columns: 1fr 1fr; }
                    }
                    @media (max-width: 575px) {
                        .hp-intro ul { grid-template-columns: 1fr; }
                        .hp-card { padding: 28px 22px 24px; }
                    }
                </style>
                <div class="tf-container">
                    <div class="happy-patients">
                        <div class="hp-intro">
                            <span class="label">Patient Stories</span>
                            <h2 class="title">Hear from Our Happy Patients</h2>
                            <p>Families from across the country trust Agrawal Hospital with their care. Here is what they say about us.</p>
                            <ul>
                                <li>Caring &amp; polite staff</li>
                                <li>Hygienic &amp; clean hospital</li>
                                <li>Experienced doctors</li>
                                <li>Feels like home</li>
                            </ul>
                            <div class="hp-nav">
                                <button class="happy-prev" aria-label="Previous review">←</button>
                                <button class="happy-next" aria-label="Next review">→</button>
                            </div>
                        </div>
                        <div class="swiper tf-swiper sw-happy" data-swiper='{
                                "slidesPerView": 1,
                                "spaceBetween": 20,
                                "speed": 700,
                                "autoplay": { "delay": 6000, "disableOnInteraction": false, "pauseOnMouseEnter": true },
                                "navigation": { "nextEl": ".happy-next", "prevEl": ".happy-prev" },
                                "pagination": { "el": ".sw-pagination-happy", "clickable": true },
                                "breakpoints": {
                                    "768": { "slidesPerView": 2, "spaceBetween": 24 }
                                }
                            }'>
                            <div class="swiper-wrapper">
                                <?php foreach ($testimonials as $t): ?>
                                    <div class="swiper-slide">
                                        <div class="hp-card">
                                            <div class="top">
                                                <span class="stars"><?= stars($t['rating']) ?></span>
                                                <span class="topic"><?= $t['topic'] ?></span>
                                            </div>
                                            <div class="quote-ic">“</div>
                                            <h4><?= $t['headline'] ?></h4>
                                            <p><?= $t['text'] ?></p>
                                            <div class="who">
                                                <div class="av"><?= initials($t['name']) ?></div>
                                                <div>
                                                    <strong><?= $t['name'] ?></strong>
                                                    <small><?= $t['doctor'] ? 'Treated by ' . $t['doctor'] : 'Patient' ?></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="sw-pagination-happy sw-pagination d-flex"></div>
                        </div>
                    </div>
                </div>
            </section>

            <?php
            require_once __DIR__ . '/includes/media-data.php';
            $videoTitles = array_column($videos, 1, 0);
            ?>
            <div class="mx-30">
                <section class="yt-section" id="youtube">
                    <div class="tf-container">
                        <div class="media-head">
                            <div class="heading-section">
                                <span class="label">YouTube Channel</span>
                                <div class="title text-anime">
                                    <h2>Watch &amp; Learn from Our Experts</h2>
                                </div>
                                <p class="desc color-paragraph wow fadeInUp" data-wow-delay=".2s">
                                    Health talks, interviews and live procedure demonstrations on asthma, COPD, lung health and more.
                                </p>
                            </div>
                            <div class="media-actions">
                                <a href="video-gallery.php" class="tf-btn">
                                    <span>View All Videos</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                                <a href="<?= $youtubeChannel ?>" class="tf-btn style-border hover-bg-black-4" target="_blank" rel="noopener">
                                    <span>YouTube Channel</span>
                                </a>
                            </div>
                        </div>
                        <div class="yt-grid">
                            <?php foreach ($homeVideoIds as $id): ?>
                                <?php $watch = 'https://www.youtube.com/watch?v=' . $id; $title = htmlspecialchars($videoTitles[$id]); ?>
                                <article class="yt-card">
                                    <a href="<?= $watch ?>" class="yt-thumb js-yt-popup" aria-label="Play: <?= $title ?>">
                                        <img src="https://i.ytimg.com/vi/<?= $id ?>/hqdefault.jpg" alt="" loading="lazy">
                                        <span class="yt-play"></span>
                                    </a>
                                    <div class="yt-body">
                                        <h3><a href="<?= $watch ?>" class="js-yt-popup"><?= $title ?></a></h3>
                                        <span class="yt-meta">Agrawal Hospital Bhopal</span>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
            </div>

            <section class="tf-spacing-2 mx-30" id="events">
                <div class="tf-container">
                    <div class="media-head">
                        <div class="heading-section">
                            <span class="label">Event &amp; News</span>
                            <div class="title text-anime">
                                <h2>Camps, Talks &amp; Happenings</h2>
                            </div>
                            <p class="desc color-paragraph wow fadeInUp" data-wow-delay=".2s">
                                Free health camps, expert talks and community programmes by the Agrawal Hospital team.
                            </p>
                        </div>
                        <div class="media-actions">
                            <a href="events-and-news.php" class="tf-btn">
                                <span>View All Events</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ev-grid is-home js-ev-gallery">
                        <?php foreach ($newsHighlights as [$src, $tag]): ?>
                            <a href="<?= $src ?>" class="ev-item" title="<?= $tag ?>">
                                <img src="<?= $src ?>" alt="Agrawal Hospital <?= $tag ?>" loading="lazy">
                                <span class="ev-tag"><?= $tag ?></span>
                                <span class="ev-zoom" aria-hidden="true">+</span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <section class="client-partners-section tf-spacing-2 mx-30" id="tpa">
                <div class="tf-container">
                    <div class="heading-section mb-70 text-center">
                        <h2 class="title text-anime">TPA Empanelment</h2>
                        <p>Cashless facility available for nearly all major TPA providers and insurance companies.</p>
                        <div class="flex flex-wrap justify-content-center g-10 mt-30">
                            <a href="contact.php" class="tf-btn">
                                <span>Ask About Cashless Treatment</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                            <a href="tel:+917554283383" class="tf-btn style-border hover-bg-black-4">
                                <span>Call +91-755-4283383</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tf-container">
                    <div class="client-logo-row client-logo-row-right">
                        <div class="client-logo-track">
                            <div class="client-logo-group" role="list">
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-01.jpg" alt="Insurance partner 01"></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-02.jpg" alt="Insurance partner 02"></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-03.jpg" alt="Insurance partner 03"></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-04.jpg" alt="Insurance partner 04"></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-05.jpg" alt="Insurance partner 05"></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-06.jpg" alt="Insurance partner 06"></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-07.jpg" alt="Insurance partner 07"></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-08.jpg" alt="Insurance partner 08"></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-09.jpg" alt="Insurance partner 09"></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-10.jpg" alt="Insurance partner 10"></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-11.jpg" alt="Insurance partner 11"></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-12.jpg" alt="Insurance partner 12"></div>
                            </div>
                            <div class="client-logo-group" role="list" aria-hidden="true">
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-01.jpg" alt=""></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-02.jpg" alt=""></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-03.jpg" alt=""></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-04.jpg" alt=""></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-05.jpg" alt=""></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-06.jpg" alt=""></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-07.jpg" alt=""></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-08.jpg" alt=""></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-09.jpg" alt=""></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-10.jpg" alt=""></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-11.jpg" alt=""></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-12.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="client-logo-row client-logo-row-left">
                        <div class="client-logo-track">
                            <div class="client-logo-group" role="list">
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-13.jpg" alt="Insurance partner 13"></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-14.jpg" alt="Insurance partner 14"></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-15.jpg" alt="Insurance partner 15"></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-16.jpg" alt="Insurance partner 16"></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-17.jpg" alt="Insurance partner 17"></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-18.jpg" alt="Insurance partner 18"></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-19.jpg" alt="Insurance partner 19"></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-20.jpg" alt="Insurance partner 20"></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-21.jpg" alt="Insurance partner 21"></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-22.jpg" alt="Insurance partner 22"></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-23.jpg" alt="Insurance partner 23"></div>
                            </div>
                            <div class="client-logo-group" role="list" aria-hidden="true">
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-13.jpg" alt=""></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-14.jpg" alt=""></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-15.jpg" alt=""></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-16.jpg" alt=""></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-17.jpg" alt=""></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-18.jpg" alt=""></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-19.jpg" alt=""></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-20.jpg" alt=""></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-21.jpg" alt=""></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-22.jpg" alt=""></div>
                                <div class="client-logo-card" role="listitem"><img src="image/client/client-23.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php include "footer.php"; ?>