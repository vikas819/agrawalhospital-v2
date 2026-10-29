<?php
require_once __DIR__ . '/home-data.php';
$pageTitle = 'Home Design 1 — Clinical';
$pageStyles = ['https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap', 'css/home-1.css'];
include __DIR__ . '/header.php';
?>

        <main class="hv-page hv-1">
<section class="hero">
    <div class="container">
        <div>
            <span class="eyebrow">NABH Accredited · Since 2002</span>
            <h1>Quality medical care for a <em>healthier tomorrow</em></h1>
            <p class="lead"><?= $hospital['about'] ?></p>
            <div class="actions">
                <a class="btn btn-green" href="contact.php">Book an Appointment →</a>
                <a class="btn btn-outline" href="our-experts.php">Meet our Doctors</a>
            </div>
            <div class="trust">
                <?php foreach (array_slice($stats, 0, 3) as $s): ?>
                    <div><strong><?= $s['value'] ?></strong><span><?= $s['label'] ?></span></div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="hero-media">
            <div class="photo"><img src="image/hospital.jpg" alt="Agrawal Hospital building, Arera Colony, Bhopal"></div>
            <div class="float-card f1"><div class="ic">🏅</div><div><strong>NABH Accredited</strong>Quality & patient safety</div></div>
            <div class="float-card f2"><div class="ic">🚑</div><div><strong>24/7 Emergency</strong>ICU & ambulance</div></div>
        </div>
    </div>
</section>

<section class="quick">
    <div class="container grid">
        <?php foreach ($quickHelp as $i => $q): ?>
            <div class="quick-card<?= $i === 2 ? ' alert' : '' ?>">
                <div class="no"><?= $q['no'] ?></div>
                <h3><?= $q['title'] ?></h3>
                <p><?= $q['desc'] ?></p>
                <a href="<?= $q['url'] ?>"><?= $q['cta'] ?> →</a>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="about" id="about">
    <div class="container">
        <div class="about-img">
            <img src="image/icu.jpg" alt="ICU bed with ventilator at Agrawal Hospital">
            <div class="badge"><strong><?= date('Y') - $hospital['since'] ?>+</strong><span>Years of care</span></div>
        </div>
        <div>
            <span class="eyebrow">About Agrawal Hospital</span>
            <h2>Where expert care meets compassion</h2>
            <p><?= $hospital['story'] ?></p>
            <ul class="checks">
                <?php foreach ($highlights as $h): ?><li><?= $h ?></li><?php endforeach; ?>
            </ul>
            <a class="btn btn-green" href="about.php">Learn More About Us</a>
        </div>
    </div>
</section>

<section class="departments" id="departments">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Departments</span>
            <h2>Specialised care across every stage of life</h2>
            <p>Comprehensive healthcare services across multiple specialities, backed by advanced technology and expert medical professionals.</p>
        </div>
        <div class="dept-grid">
            <?php foreach ($departments as $d): ?>
                <a class="dept-card" href="<?= $d['url'] ?>">
                    <div class="thumb"><img src="<?= $d['img'] ?>" alt="<?= htmlspecialchars($d['name']) ?>" loading="lazy"></div>
                    <div class="body">
                        <h3><?= htmlspecialchars($d['name']) ?></h3>
                        <p><?= $d['desc'] ?></p>
                        <span class="more">Read more →</span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<div class="stats">
    <div class="container grid">
        <?php foreach ($stats as $s): ?>
            <div><strong><?= $s['value'] ?></strong><span><?= $s['label'] ?></span></div>
        <?php endforeach; ?>
    </div>
</div>

<section class="conditions">
    <div class="container layout">
        <div class="intro">
            <span class="eyebrow">Respiratory Expertise</span>
            <h2>Conditions we treat</h2>
            <p>Comprehensive diagnosis and treatment of all respiratory diseases under the expertise of Dr. P. N. Agrawal.</p>
            <img src="image/respiratory.jpg" alt="Respiratory medicine" loading="lazy">
        </div>
        <div>
            <div class="chip-grid">
                <?php foreach ($conditions as $c): ?>
                    <button class="chip" data-desc="<?= htmlspecialchars($c[1]) ?>"><?= $c[0] ?></button>
                <?php endforeach; ?>
            </div>
            <div class="chip-detail" id="chipDetail">
                <strong><?= $conditions[0][0] ?></strong>
                <span><?= $conditions[0][1] ?></span>
            </div>
            <div class="more"><a class="btn btn-outline" href="respiratory-medicine.php">Respiratory Medicine →</a></div>
        </div>
    </div>
</section>

<section class="doctors" id="doctors">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Our Experts</span>
            <h2>Meet our experienced doctors</h2>
            <p>Our specialists provide expert care across a wide range of medical departments.</p>
        </div>
        <div class="doc-grid">
            <?php foreach ($doctors as $doc): ?>
                <a class="doc-card" href="<?= $doc['url'] ?? 'our-experts.php' ?>">
                    <div class="ph"><img src="<?= img($doc['img']) ?>" alt="<?= $doc['name'] ?>" loading="lazy"></div>
                    <div class="info"><h3><?= $doc['name'] ?></h3><span><?= htmlspecialchars($doc['role']) ?></span></div>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="center"><a class="btn btn-green" href="our-experts.php">View All Doctors</a></div>
    </div>
</section>

<section class="reviews">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Patient Testimonials</span>
            <h2>Hear from our happy patients</h2>
        </div>
        <?php $feature = $testimonials[0]; ?>
        <div class="t-top">
            <div class="t-feature">
                <div class="stars"><?= stars($feature['rating']) ?></div>
                <h3>“<?= $feature['headline'] ?>”</h3>
                <p><?= $feature['text'] ?></p>
                <div class="who">
                    <div class="av"><?= initials($feature['name']) ?></div>
                    <div><strong><?= $feature['name'] ?></strong><small><?= $feature['topic'] ?> · Treated by <?= $feature['doctor'] ?></small></div>
                </div>
            </div>
            <div class="t-summary">
                <h3>What patients mention most</h3>
                <ul>
                    <li>Caring, polite staff <span>Most mentioned</span></li>
                    <li>Hygiene & cleanliness <span>✓</span></li>
                    <li>Experienced doctors <span>✓</span></li>
                    <li>Feels like home <span>✓</span></li>
                </ul>
                <a class="btn btn-green" href="reviews.php">Read all reviews →</a>
            </div>
        </div>
        <div class="t-grid">
            <?php foreach (array_slice($testimonials, 1, 6) as $t): ?>
                <div class="t-card">
                    <div class="head"><span class="stars"><?= stars($t['rating']) ?></span><span class="topic"><?= $t['topic'] ?></span></div>
                    <h4><?= $t['headline'] ?></h4>
                    <p><?= $t['text'] ?></p>
                    <div class="who">
                        <div class="av"><?= initials($t['name']) ?></div>
                        <div><strong><?= $t['name'] ?></strong><small><?= $t['doctor'] ? 'Treated by ' . $t['doctor'] : 'Patient' ?></small></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="partners">
    <div class="container section-head section-head-sm">
        <span class="eyebrow">TPA Empanelment</span>
        <h2>Cashless treatment</h2>
        <p>Cashless facility available for nearly all major TPA providers and insurance companies.</p>
    </div>
    <div class="marquee">
        <?php foreach (array_merge($partners, $partners) as $i => $p): ?>
            <img src="<?= $p ?>" alt="Insurance partner" loading="lazy">
        <?php endforeach; ?>
    </div>
</section>

<section class="cta">
    <div class="container">
        <div class="box">
            <div>
                <h2>Need medical help? We're here 24 hours, 7 days a week.</h2>
                <p><?= $hospital['opd'] ?> · Emergency & ICU always open.</p>
            </div>
            <div class="phones">
                <?php foreach ($hospital['phones'] as $p): ?>
                    <a href="<?= tel($p) ?>">📞 <?= $p ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
        </main>

<script>
    document.querySelectorAll('.chip').forEach(function (chip) {
        chip.addEventListener('mouseenter', show);
        chip.addEventListener('click', show);
        function show() {
            var box = document.getElementById('chipDetail');
            box.innerHTML = '<strong>' + chip.textContent + '</strong><span>' + chip.dataset.desc + '</span>';
        }
    });
</script>

<?php include __DIR__ . '/footer.php'; ?>
