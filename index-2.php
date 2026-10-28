<?php
require_once __DIR__ . '/home-data.php';
$pageTitle = 'Home Design 2 — Editorial';
include __DIR__ . '/header.php';
?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,600;9..144,700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
        <style>
        /* Shared header/footer come from the site template; reset template element styles inside this design. */
        .hv-2 :is(h1, h2, h3, h4, h5, h6, button, input, select, textarea) { font-family: inherit; }
        .hv-2 .lead { font-weight: inherit; }
        .hv-2 { --cream: #f6f1e8;
            --paper: #fbf8f2;
            --forest: #1f3b2d;
            --forest-2: #2c5440;
            --clay: #c8643b;
            --ink: #22231f;
            --muted: #6b6a62;
            --line: #ddd5c6; }
        .hv-2 * { box-sizing: border-box; margin: 0; padding: 0; }
        .hv-2 { scroll-behavior: smooth; }
        .hv-2 { font-family: 'Inter', system-ui, sans-serif; background: var(--cream); color: var(--ink); line-height: 1.65; }
        .hv-2 img { max-width: 100%; display: block; }
        .hv-2 a { color: inherit; text-decoration: none; }
        .hv-2 .wrap { width: min(1240px, 100% - 32px); margin-inline: auto; }
        .hv-2 .serif { font-family: 'Fraunces', Georgia, serif; }
        .hv-2 h1, .hv-2 h2, .hv-2 h3 { font-family: 'Fraunces', Georgia, serif; font-weight: 600; color: var(--forest); line-height: 1.08; letter-spacing: -.01em; }
        .hv-2 h2 { font-size: clamp(34px, 5vw, 60px); }
        .hv-2 .kicker { font-size: 12px; letter-spacing: .2em; text-transform: uppercase; color: var(--clay); font-weight: 600; display: flex; align-items: center; gap: 12px; margin-bottom: 18px; }
        .hv-2 .kicker::before { content: ''; width: 34px; height: 1px; background: var(--clay); }
        .hv-2 section { padding: 110px 0; }
        .hv-2 .link-arrow { display: inline-flex; gap: 10px; align-items: center; font-weight: 600; border-bottom: 1px solid currentColor; padding-bottom: 3px; }
        .hv-2 .link-arrow:hover { color: var(--clay); }
        .hv-2 .pill { display: inline-block; background: var(--forest); color: var(--cream); padding: 15px 28px; border-radius: 999px; font-weight: 600; transition: .25s; }
        .hv-2 .pill:hover { background: var(--clay); }
        .hv-2 .hero { padding: 80px 0 0; }
        .hv-2 .hero-top { display: grid; grid-template-columns: 1.5fr 1fr; gap: 60px; align-items: end; }
        .hv-2 .hero h1 { font-size: clamp(46px, 8vw, 112px); font-weight: 600; }
        .hv-2 .hero h1 i { color: var(--clay); font-weight: 400; }
        .hv-2 .hero-side p { color: var(--muted); font-size: 17px; margin-bottom: 26px; }
        .hv-2 .hero-side .hero-actions { display: flex; gap: 20px; align-items: center; flex-wrap: wrap; }
        .hv-2 .hero-img { margin-top: 64px; position: relative; border-radius: 6px; overflow: hidden; }
        .hv-2 .hero-img img { width: 100%; aspect-ratio: 21/8; object-fit: cover; }
        .hv-2 .hero-img .caption { position: absolute; left: 0; bottom: 0; background: var(--cream); padding: 16px 26px 0 0; font-size: 13px; color: var(--muted); }
        .hv-2 .ticker { border-block: 1px solid var(--line); padding: 22px 0; overflow: hidden; white-space: nowrap; margin-top: 60px; }
        .hv-2 .ticker div { display: inline-flex; gap: 50px; animation: tick 40s linear infinite; font-family: 'Fraunces', serif; font-size: 26px; color: var(--forest); }
        .hv-2 .ticker span::after { content: '✦'; color: var(--clay); margin-left: 50px; font-size: 16px; vertical-align: middle; }
        @keyframes tick { to { transform: translateX(-50%); } }
        .hv-2 .story .wrap { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; }
        .hv-2 .story .lead { font-family: 'Fraunces', serif; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.4; color: var(--forest); }
        .hv-2 .story .body p { color: var(--muted); margin-bottom: 18px; }
        .hv-2 .facts { display: grid; grid-template-columns: 1fr 1fr; border-top: 1px solid var(--line); margin-top: 40px; }
        .hv-2 .facts div { padding: 26px 0; border-bottom: 1px solid var(--line); }
        .hv-2 .facts div:nth-child(odd) { border-right: 1px solid var(--line); padding-right: 20px; }
        .hv-2 .facts div:nth-child(even) { padding-left: 24px; }
        .hv-2 .facts strong { font-family: 'Fraunces', serif; font-size: 44px; color: var(--clay); font-weight: 600; display: block; line-height: 1; }
        .hv-2 .facts span { font-size: 14px; color: var(--muted); }
        .hv-2 .depts { background: var(--forest); color: var(--cream); }
        .hv-2 .depts h2, .hv-2 .depts h3 { color: var(--cream); }
        .hv-2 .depts .kicker { color: #e9a07f; }
        .hv-2 .depts .kicker::before { background: #e9a07f; }
        .hv-2 .depts-head { display: flex; justify-content: space-between; align-items: end; gap: 30px; margin-bottom: 50px; flex-wrap: wrap; }
        .hv-2 .depts-head p { max-width: 420px; color: #c7d3cb; }
        .hv-2 .dept-row { display: grid; grid-template-columns: 80px 1.1fr 1.4fr 60px; gap: 30px; align-items: center; padding: 30px 0; border-top: 1px solid rgba(246, 241, 232, .18); position: relative; transition: .3s; }
        .hv-2 .dept-row:last-child { border-bottom: 1px solid rgba(246, 241, 232, .18); }
        .hv-2 .dept-row .num { font-family: 'Fraunces', serif; font-size: 20px; color: #e9a07f; }
        .hv-2 .dept-row h3 { font-size: clamp(22px, 2.6vw, 34px); font-weight: 400; transition: .3s; }
        .hv-2 .dept-row p { color: #c7d3cb; font-size: 15px; }
        .hv-2 .dept-row .go { width: 52px; height: 52px; border-radius: 50%; border: 1px solid rgba(246,241,232,.3); display: grid; place-items: center; transition: .3s; }
        .hv-2 .dept-row .preview { position: absolute; right: 120px; top: 50%; width: 220px; aspect-ratio: 4/3; object-fit: cover; border-radius: 6px; transform: translateY(-50%) rotate(-3deg) scale(.85); opacity: 0; pointer-events: none; transition: .35s; z-index: 2; }
        .hv-2 .dept-row:hover h3 { color: #e9a07f; padding-left: 10px; }
        .hv-2 .dept-row:hover .go { background: var(--clay); border-color: var(--clay); }
        .hv-2 .dept-row:hover .preview { opacity: 1; transform: translateY(-50%) rotate(-3deg) scale(1); }
        .hv-2 .founders-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-top: 50px; }
        .hv-2 .founder { display: grid; grid-template-columns: 1fr 1.1fr; gap: 28px; align-items: end; }
        .hv-2 .founder img { aspect-ratio: 3/4; object-fit: cover; object-position: top; border-radius: 4px; filter: saturate(.9); }
        .hv-2 .founder .role { color: var(--clay); font-size: 13px; letter-spacing: .1em; text-transform: uppercase; font-weight: 600; }
        .hv-2 .founder h3 { font-size: 32px; margin: 8px 0 14px; }
        .hv-2 .founder p { color: var(--muted); font-size: 15px; margin-bottom: 18px; }
        .hv-2 .team-list { margin-top: 80px; display: grid; grid-template-columns: repeat(4, 1fr); gap: 34px 26px; }
        .hv-2 .member img { aspect-ratio: 1/1.1; object-fit: cover; object-position: top; border-radius: 4px; margin-bottom: 14px; filter: grayscale(.35); transition: .3s; }
        .hv-2 .member:hover img { filter: none; }
        .hv-2 .member h4 { font-family: 'Fraunces', serif; font-size: 20px; font-weight: 600; color: var(--forest); }
        .hv-2 .member span { font-size: 14px; color: var(--muted); }
        .hv-2 .index { background: var(--paper); border-block: 1px solid var(--line); }
        .hv-2 .index .wrap { display: grid; grid-template-columns: 1fr 2fr; gap: 70px; }
        .hv-2 .index .intro p { color: var(--muted); margin: 18px 0 28px; }
        .hv-2 .index ol { columns: 2; column-gap: 40px; list-style: none; counter-reset: c; }
        .hv-2 .index li { break-inside: avoid; padding: 14px 0; border-bottom: 1px dashed var(--line); counter-increment: c; }
        .hv-2 .index li strong { font-family: 'Fraunces', serif; font-weight: 600; font-size: 19px; color: var(--forest); display: flex; gap: 12px; }
        .hv-2 .index li strong::before { content: counter(c, decimal-leading-zero); font-family: 'Inter', sans-serif; font-size: 12px; color: var(--clay); padding-top: 6px; }
        .hv-2 .index li span { font-size: 14px; color: var(--muted); display: block; padding-left: 30px; }
        .hv-2 .facility-grid { display: grid; grid-template-columns: 2fr 1fr 1fr; grid-template-rows: 260px 260px; gap: 16px; margin-top: 50px; }
        .hv-2 .facility-grid figure { position: relative; overflow: hidden; border-radius: 4px; }
        .hv-2 .facility-grid figure:first-child { grid-row: span 2; }
        .hv-2 .facility-grid img { width: 100%; height: 100%; object-fit: cover; transition: .6s; }
        .hv-2 .facility-grid figure:hover img { transform: scale(1.05); }
        .hv-2 .facility-grid figcaption { position: absolute; left: 14px; bottom: 14px; background: var(--cream); padding: 6px 12px; font-size: 13px; border-radius: 3px; }
        .hv-2 .highlight-list { display: flex; flex-wrap: wrap; gap: 10px 36px; margin-top: 40px; }
        .hv-2 .highlight-list span { font-family: 'Fraunces', serif; font-size: 20px; color: var(--forest); }
        .hv-2 .highlight-list span::before { content: '— '; color: var(--clay); }
        .hv-2 .reviews { background: var(--paper); }
        .hv-2 .quotes { display: grid; grid-template-columns: 1.6fr 1fr; gap: 70px; margin-top: 60px; align-items: start; }
        .hv-2 .quote-stage { position: relative; min-height: 420px; }
        .hv-2 .quote { display: none; animation: rise .6s ease; }
        .hv-2 .quote.active { display: block; }
        @keyframes rise { from { opacity: 0; transform: translateY(14px); } }
        .hv-2 .quote .mark { font-family: 'Fraunces', serif; font-size: 140px; line-height: .6; color: var(--clay); height: 60px; }
        .hv-2 .quote blockquote { font-family: 'Fraunces', serif; font-size: clamp(22px, 2.7vw, 32px); line-height: 1.4; color: var(--forest); font-weight: 400; }
        .hv-2 .quote blockquote em { color: var(--clay); }
        .hv-2 .quote .by { margin-top: 30px; display: flex; align-items: center; gap: 16px; }
        .hv-2 .quote .by .line { width: 40px; height: 1px; background: var(--forest); }
        .hv-2 .quote .by strong { font-family: 'Fraunces', serif; font-size: 20px; color: var(--forest); font-weight: 600; }
        .hv-2 .quote .by span { display: block; font-size: 13px; color: var(--muted); letter-spacing: .04em; }
        .hv-2 .quote-nav { display: flex; align-items: center; gap: 18px; margin-top: 44px; }
        .hv-2 .quote-nav button { width: 54px; height: 54px; border-radius: 50%; border: 1px solid var(--forest); background: none; cursor: pointer; font-size: 18px; color: var(--forest); transition: .25s; }
        .hv-2 .quote-nav button:hover { background: var(--forest); color: var(--cream); }
        .hv-2 .quote-nav .count { font-family: 'Fraunces', serif; font-size: 18px; color: var(--muted); }
        .hv-2 .quote-nav .count b { color: var(--forest); font-weight: 600; }
        .hv-2 .quote-nav .bar { flex: 1; height: 1px; background: var(--line); position: relative; }
        .hv-2 .quote-nav .bar i { position: absolute; left: 0; top: -1px; height: 3px; background: var(--clay); transition: width .5s; }
        .hv-2 .quote-index { list-style: none; border-top: 1px solid var(--line); }
        .hv-2 .quote-index li { border-bottom: 1px solid var(--line); }
        .hv-2 .quote-index button { width: 100%; text-align: left; background: none; border: 0; padding: 16px 0; cursor: pointer; display: flex; justify-content: space-between; align-items: baseline; gap: 12px; font: inherit; color: var(--muted); transition: .25s; }
        .hv-2 .quote-index button strong { font-family: 'Fraunces', serif; font-weight: 400; font-size: 19px; color: var(--ink); transition: .25s; }
        .hv-2 .quote-index button small { font-size: 12px; letter-spacing: .1em; text-transform: uppercase; }
        .hv-2 .quote-index button:hover strong, .hv-2 .quote-index button.active strong { color: var(--clay); }
        .hv-2 .quote-index button.active strong { font-style: italic; padding-left: 10px; }
        .hv-2 .insurance .logos { display: grid; grid-template-columns: repeat(auto-fill, minmax(120px, 1fr)); gap: 0; margin-top: 40px; border-top: 1px solid var(--line); border-left: 1px solid var(--line); }
        .hv-2 .insurance .logos div { border-right: 1px solid var(--line); border-bottom: 1px solid var(--line); padding: 16px; display: grid; place-items: center; background: var(--paper); }
        .hv-2 .insurance .logos img { max-height: 54px; width: auto; mix-blend-mode: multiply; }
        @media (max-width: 1000px) {
        .hv-2 .hero-top, .hv-2 .story .wrap, .hv-2 .index .wrap { grid-template-columns: 1fr; gap: 36px; }
        .hv-2 .founders-grid { grid-template-columns: 1fr; }
        .hv-2 .team-list { grid-template-columns: repeat(2, 1fr); }
        .hv-2 .dept-row { grid-template-columns: 50px 1fr 52px; }
        .hv-2 .dept-row p, .hv-2 .dept-row .preview { display: none; }
        .hv-2 .quotes { grid-template-columns: 1fr; gap: 40px; }
        .hv-2 .quote-stage { min-height: 0; }
        }
        @media (max-width: 600px) {
        .hv-2 section { padding: 72px 0; }
        .hv-2 .hero-img img { aspect-ratio: 4/3; }
        .hv-2 .founder { grid-template-columns: 1fr; }
        .hv-2 .index ol { columns: 1; }
        .hv-2 .quote-index { display: none; }
        .hv-2 .facility-grid { grid-template-columns: 1fr 1fr; grid-template-rows: 220px 160px 160px; }
        .hv-2 .facility-grid figure:first-child { grid-column: span 2; grid-row: auto; }
        .hv-2 .facts strong { font-size: 34px; }
        }
        .hv-2 .quote .mark { background: none; padding: 0; }
        </style>

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
            <p style="margin-top:28px"><a class="link-arrow" href="about.php">Read our full story →</a></p>
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
        <p style="margin-top:50px"><a class="pill" href="our-experts.php">All our experts</a></p>
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
