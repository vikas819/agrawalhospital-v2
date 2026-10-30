    <?php
    $pageTitle = 'Reviews';
    $pageStyles = ['css/home.css'];
    include "header.php";
    require_once __DIR__ . '/home-data.php';
    ?>
    <div class="page-title mt-30">
        <div class="mx-30">
            <div class="page-title-content paralax-bg">
                <h1 class="title">
                    Reviews
                </h1>
                <div class="breadkcum">
                    <h3><a href="index.php" class="link-breadkcum">Home</a></h3>
                    <span class="dot bg-white mx-25"></span>
                    <h3 class="page-breadkcum pl-0">Reviews</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content">
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
            <div class="tf-container">
                <div class="happy-patients is-page">
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
                            <a href="contact.php" class="tf-btn">
                                <span>Book Appointment</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="hp-grid">
                        <?php foreach ($testimonials as $t): ?>
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
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include "footer.php"; ?>
