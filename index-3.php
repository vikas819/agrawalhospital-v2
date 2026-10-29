<?php
require_once __DIR__ . '/home-data.php';
$pageTitle = 'Home Design 3 — Dark';
$pageStyles = ['https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Manrope:wght@400;500;600;700&display=swap', 'css/home-3.css'];
include __DIR__ . '/header.php';
?>

        <main class="hv-page hv-3">
<section class="hero">
    <div class="wrap">
        <div>
            <span class="tag">NABH Accredited · Bhopal</span>
            <h1>Every breath.<br>Every life.<br><span class="grad">Every second.</span></h1>
            <p class="lead">Advanced respiratory, maternity, surgical and critical care — with a fully-equipped ICU, ventilator support at each bed, and specialists on call around the clock.</p>
            <div class="actions">
                <a class="btn btn-teal" href="contact.php">Book an Appointment →</a>
                <a class="btn btn-ghost" href="#departments">Explore Departments</a>
            </div>
            <div class="live"><span class="pulse"></span><span>Emergency & ICU <b>open now</b> · <span id="clock"></span> IST</span></div>
        </div>
        <div class="er-card">
            <div class="label">● Medical Emergency</div>
            <h3>Need an ambulance?</h3>
            <p class="muted">In an emergency every second counts. Our fully-equipped ambulance and ICU team are ready 24/7.</p>
            <a class="num" href="<?= tel($hospital['emergency']) ?>"><?= $hospital['emergency'] ?></a>
            <a class="btn btn-red btn-block" href="<?= tel($hospital['emergency']) ?>">Call Emergency Now</a>
            <ul class="more">
                <li>Central oxygen & suction at every bed</li>
                <li>Central monitoring ICU</li>
                <li>Modular operation theatres</li>
            </ul>
        </div>
    </div>
</section>

<section class="section-tight">
    <div class="wrap bento">
        <div class="tile big">
            <div>
                <span class="tag">Since 16 Aug 2002</span>
                <h2 class="h2-sm">Where expert care meets compassion</h2>
            </div>
            <p><?= $hospital['about'] ?></p>
            <div class="badges"><?php foreach ($highlights as $h): ?><span><?= $h ?></span><?php endforeach; ?></div>
        </div>
        <div class="tile accent"><strong>1.5L+</strong><span>Patients treated</span></div>
        <div class="tile"><strong class="grad">350+</strong><span>Lives saved on mechanical ventilation</span></div>
        <div class="tile photo wide"><img src="image/hospital.jpg" alt="Agrawal Hospital building" loading="lazy"><div class="cap">📍 Arera Colony, Bhopal</div></div>
        <div class="tile photo wide"><img src="image/ward.jpg" alt="Patient ward" loading="lazy"><div class="cap">Comfortable patient wards</div></div>
        <div class="tile"><strong><?= date('Y') - $hospital['since'] ?>+</strong><span>Years of medical service</span></div>
        <div class="tile"><strong>24/7</strong><span>Emergency, ICU & pharmacy</span></div>
    </div>
</section>

<section class="dept" id="departments">
    <div class="wrap">
        <div class="dept-head">
            <div><span class="tag">Departments</span><h2>Specialised care,<br><span class="grad">one hospital.</span></h2></div>
            <p class="muted">Comprehensive healthcare services across multiple specialities, backed by advanced technology and expert medical professionals.</p>
        </div>
        <div class="tabs">
            <div class="tab-list" role="tablist">
                <?php foreach ($departments as $i => $d): ?>
                    <button role="tab" data-tab="<?= $i ?>" class="<?= $i === 0 ? 'active' : '' ?>"><?= htmlspecialchars($d['name']) ?></button>
                <?php endforeach; ?>
            </div>
            <div>
                <?php foreach ($departments as $i => $d): ?>
                    <div class="panel<?= $i === 0 ? ' active' : '' ?>" data-panel="<?= $i ?>">
                        <img src="<?= $d['img'] ?>" alt="<?= htmlspecialchars($d['name']) ?>" loading="lazy">
                        <div class="over">
                            <h3><?= htmlspecialchars($d['name']) ?></h3>
                            <p><?= $d['desc'] ?></p>
                            <a class="btn btn-teal" href="<?= $d['url'] ?>">View Department →</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="wrap">
        <span class="tag">Diagnostics & Tests</span>
        <h2>In-house diagnostics,<br>faster answers.</h2>
        <div class="diag-grid">
            <?php foreach ($services as $i => $s): ?>
                <div><small><?= sprintf('%02d', $i + 1) ?></small><?= $s[0] ?></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<div class="conds">
    <div class="wrap">
        <div><span class="tag">Respiratory Expertise</span><h2>Conditions we treat</h2></div>
        <p class="muted narrow">Comprehensive diagnosis and treatment of all respiratory diseases under the expertise of Dr. P. N. Agrawal.</p>
    </div>
    <?php $half = array_chunk(array_column($conditions, 0), 12); ?>
    <div class="lane"><?php foreach (array_merge($half[0], $half[0]) as $c): ?><span><?= $c ?></span><?php endforeach; ?></div>
    <div class="lane rev"><?php foreach (array_merge($half[1], $half[1]) as $c): ?><span><?= $c ?></span><?php endforeach; ?></div>
</div>

<section id="doctors">
    <div class="wrap">
        <div class="doc-head">
            <div><span class="tag">Our Experts</span><h2>Meet the specialists</h2></div>
            <div class="arrows"><button aria-label="Previous" data-dir="-1">←</button><button aria-label="Next" data-dir="1">→</button></div>
        </div>
        <div class="doc-track" id="docTrack">
            <?php foreach ($doctors as $doc): ?>
                <a class="doc" href="<?= $doc['url'] ?? 'our-experts.php' ?>">
                    <img src="<?= img($doc['img']) ?>" alt="<?= $doc['name'] ?>" loading="lazy">
                    <div class="meta"><h4><?= $doc['name'] ?></h4><span><?= htmlspecialchars($doc['role']) ?></span></div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="reviews">
    <div class="wrap rev-head">
        <div><span class="tag">Patient Testimonials</span><h2>Trusted by families<br><span class="grad">across the country.</span></h2></div>
        <div class="rev-topics"><?php foreach (array_unique(array_column($testimonials, 'topic')) as $topic): ?><span><?= $topic ?></span><?php endforeach; ?></div>
    </div>
    <div class="rev-lanes">
        <?php foreach (array_chunk($testimonials, 6) as $n => $lane): ?>
            <div class="rev-lane<?= $n ? ' rev' : '' ?>">
                <?php foreach (array_merge($lane, $lane) as $t): ?>
                    <article class="rcard">
                        <div class="top"><span class="stars"><?= stars($t['rating']) ?></span><span class="chip"><?= $t['topic'] ?></span></div>
                        <h4><?= $t['headline'] ?></h4>
                        <p><?= $t['text'] ?></p>
                        <div class="who">
                            <div class="av"><?= initials($t['name']) ?></div>
                            <div><strong><?= $t['name'] ?></strong><small><?= $t['doctor'] ? 'Treated by ' . $t['doctor'] : 'Patient' ?></small></div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<div class="ins">
    <div class="wrap"><span class="tag">TPA Empanelment</span><h2 class="h2-xs">Cashless with nearly all major TPAs & insurers</h2></div>
    <div class="ins-row"><?php foreach (array_merge($partners, $partners) as $p): ?><img src="<?= $p ?>" alt="Insurance partner" loading="lazy"><?php endforeach; ?></div>
</div>
        </main>

<script>

    function tick() {
        document.getElementById('clock').textContent = new Date().toLocaleTimeString('en-IN', { timeZone: 'Asia/Kolkata', hour: '2-digit', minute: '2-digit' });
    }
    tick(); setInterval(tick, 30000);

    document.querySelectorAll('[data-tab]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            document.querySelectorAll('[data-tab]').forEach(function (b) { b.classList.remove('active'); });
            document.querySelectorAll('[data-panel]').forEach(function (p) { p.classList.remove('active'); });
            btn.classList.add('active');
            document.querySelector('[data-panel="' + btn.dataset.tab + '"]').classList.add('active');
        });
    });

    var track = document.getElementById('docTrack');
    document.querySelectorAll('[data-dir]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            track.scrollBy({ left: track.clientWidth * 0.8 * btn.dataset.dir });
        });
    });
</script>

<?php include __DIR__ . '/footer.php'; ?>
