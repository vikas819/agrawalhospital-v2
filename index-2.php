<?php
require_once __DIR__ . '/home-data.php';
$pageTitle = 'Home Design 2 — Editorial';
$pageStyles = ['https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,600;9..144,700&family=Inter:wght@400;500;600&display=swap', 'css/home-2.css'];
include __DIR__ . '/header.php';
?>

        <main class="hv-page hv-2">
<section class="hero">
    <div class="wrap">
        <div class="hero-top">
            <h1>Expert care,<br><i>delivered with</i><br>compassion.</h1>
            <div class="hero-side">
                <div class="kicker">Bhopal · Since 16 August 2002</div>
                <p>Providing the best and the latest in diagnosis and treatment of obstetric, gynaecological, respiratory, surgical and critically ill patients, in a homely and friendly atmosphere.</p>
                <div class="hero-actions">
                    <a class="pill" href="contact.php">Book an appointment</a>
                    <a class="link-arrow" href="our-experts.php">Meet our doctors →</a>
                </div>
            </div>
        </div>
        <div class="hero-img">
            <img src="image/banner01_4k.png" alt="Agrawal Hospital, NABH accredited, Arera Colony Bhopal">
            <div class="caption">E-3/34, Arera Colony — near Veer Savarkar Flyover</div>
        </div>
    </div>
    <div class="ticker" aria-hidden="true">
        <div>
            <?php foreach (array_merge($highlights, $highlights) as $h): ?><span><?= $h ?></span><?php endforeach; ?>
        </div>
    </div>
</section>

<section class="story">
    <div class="wrap">
        <div>
            <div class="kicker">Our Story</div>
            <h2>A trusted name, built one patient at a time.</h2>
        </div>
        <div class="body">
            <p class="lead">Started in the heart of Arera Colony, Agrawal Hospital has grown into a name that generates confidence among patients from all walks of life, and from across the country.</p>
            <div class="facts">
                <?php foreach ($stats as $s): ?>
                    <div><strong><?= $s['value'] ?></strong><span><?= $s['label'] ?></span></div>
                <?php endforeach; ?>
            </div>
            <p class="more"><a class="link-arrow" href="about.php">Read our full story →</a></p>
        </div>
    </div>
</section>

<section class="depts">
    <div class="wrap">
        <div class="depts-head">
            <div>
                <div class="kicker">Departments</div>
                <h2>Eight specialities,<br>one roof.</h2>
            </div>
            <p>Comprehensive healthcare services across multiple specialities, backed by advanced technology and expert medical professionals.</p>
        </div>
        <?php foreach ($departments as $i => $d): ?>
            <a class="dept-row" href="<?= $d['url'] ?>">
                <span class="num"><?= sprintf('%02d', $i + 1) ?></span>
                <h3><?= htmlspecialchars($d['name']) ?></h3>
                <p><?= $d['desc'] ?></p>
                <span class="go">→</span>
                <img class="preview" src="<?= $d['img'] ?>" alt="" loading="lazy">
            </a>
        <?php endforeach; ?>
    </div>
</section>

<section class="founders">
    <div class="wrap">
        <div class="kicker">The People</div>
        <h2>Led by doctors,<br>not by departments.</h2>
        <div class="founders-grid">
            <?php foreach (array_slice($doctors, 0, 2) as $i => $doc): ?>
                <div class="founder">
                    <img src="<?= img($doc['img']) ?>" alt="<?= $doc['name'] ?>" loading="lazy">
                    <div>
                        <div class="role"><?= $i === 0 ? 'Founder & Director' : 'Managing Director' ?></div>
                        <h3><?= $doc['name'] ?></h3>
                        <p><?= htmlspecialchars($doc['role']) ?></p>
                        <a class="link-arrow" href="<?= $doc['url'] ?>">Profile →</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="team-list">
            <?php foreach (array_slice($doctors, 2) as $doc): ?>
                <div class="member">
                    <img src="<?= img($doc['img']) ?>" alt="<?= $doc['name'] ?>" loading="lazy">
                    <h4><?= $doc['name'] ?></h4>
                    <span><?= htmlspecialchars($doc['role']) ?></span>
                </div>
            <?php endforeach; ?>
        </div>
        <p class="more more-lg"><a class="pill" href="our-experts.php">All our experts</a></p>
    </div>
</section>

<section class="index">
    <div class="wrap">
        <div class="intro">
            <div class="kicker">Respiratory Expertise</div>
            <h2>Conditions we treat.</h2>
            <p>Comprehensive diagnosis and treatment of all respiratory diseases under the expertise of Dr. P. N. Agrawal.</p>
            <a class="link-arrow" href="respiratory-medicine.php">Respiratory Medicine →</a>
        </div>
        <ol>
            <?php foreach ($conditions as $c): ?>
                <li><strong><?= $c[0] ?></strong><span><?= $c[1] ?></span></li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>

<section class="facilities">
    <div class="wrap">
        <div class="kicker">Facilities</div>
        <h2>Built for critical moments.</h2>
        <div class="facility-grid">
            <?php foreach ($facilityPhotos as $f): ?>
                <figure><img src="<?= $f[1] ?>" alt="<?= $f[0] ?>" loading="lazy"><figcaption><?= $f[0] ?></figcaption></figure>
            <?php endforeach; ?>
            <figure><img src="image/hospital.jpg" alt="Hospital building" loading="lazy"><figcaption>Arera Colony, Bhopal</figcaption></figure>
        </div>
        <div class="highlight-list">
            <?php foreach ($highlights as $h): ?><span><?= $h ?></span><?php endforeach; ?>
        </div>
    </div>
</section>

<section class="reviews">
    <div class="wrap">
        <div class="kicker">In their words</div>
        <h2>Hear from our patients.</h2>
        <div class="quotes">
            <div>
                <div class="quote-stage">
                    <?php foreach ($testimonials as $i => $t): ?>
                        <figure class="quote<?= $i === 0 ? ' active' : '' ?>" data-quote="<?= $i ?>">
                            <div class="mark">“</div>
                            <blockquote><em><?= $t['headline'] ?>.</em> <?= $t['text'] ?></blockquote>
                            <figcaption class="by">
                                <span class="line"></span>
                                <div><strong><?= $t['name'] ?></strong><span><?= $t['topic'] ?><?= $t['doctor'] ? ' · Treated by ' . $t['doctor'] : '' ?></span></div>
                            </figcaption>
                        </figure>
                    <?php endforeach; ?>
                </div>
                <div class="quote-nav">
                    <button aria-label="Previous story" data-step="-1">←</button>
                    <button aria-label="Next story" data-step="1">→</button>
                    <span class="count"><b id="qNow">01</b> / <?= sprintf('%02d', count($testimonials)) ?></span>
                    <span class="bar"><i id="qBar"></i></span>
                </div>
            </div>
            <ol class="quote-index">
                <?php foreach ($testimonials as $i => $t): ?>
                    <li><button class="<?= $i === 0 ? 'active' : '' ?>" data-go="<?= $i ?>"><strong><?= $t['name'] ?></strong><small><?= $t['topic'] ?></small></button></li>
                <?php endforeach; ?>
            </ol>
        </div>
    </div>
</section>

<section class="insurance">
    <div class="wrap">
        <div class="kicker">TPA Empanelment</div>
        <h2>Cashless, with nearly every major insurer.</h2>
        <div class="logos">
            <?php foreach ($partners as $p): ?><div><img src="<?= $p ?>" alt="Insurance partner" loading="lazy"></div><?php endforeach; ?>
        </div>
    </div>
</section>
        </main>

<script>
    (function () {
        var quotes = document.querySelectorAll('[data-quote]'), links = document.querySelectorAll('[data-go]');
        var current = 0, total = quotes.length, timer;
        function show(i) {
            current = (i + total) % total;
            quotes.forEach(function (q, n) { q.classList.toggle('active', n === current); });
            links.forEach(function (l, n) { l.classList.toggle('active', n === current); });
            document.getElementById('qNow').textContent = String(current + 1).padStart(2, '0');
            document.getElementById('qBar').style.width = ((current + 1) / total * 100) + '%';
            clearInterval(timer);
            timer = setInterval(function () { show(current + 1); }, 9000);
        }
        document.querySelectorAll('[data-step]').forEach(function (b) { b.addEventListener('click', function () { show(current + +b.dataset.step); }); });
        links.forEach(function (l) { l.addEventListener('click', function () { show(+l.dataset.go); }); });
        show(0);
    })();
</script>

<?php include __DIR__ . '/footer.php'; ?>
