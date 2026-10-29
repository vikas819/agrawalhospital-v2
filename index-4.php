<?php
require_once __DIR__ . '/home-data.php';

$deptStyle = [
    ['🫁', '#e0f2fe', '#0369a1'], ['🤰', '#fce7f3', '#be185d'], ['🚑', '#fee2e2', '#b91c1c'], ['🩺', '#ede9fe', '#6d28d9'],
    ['💊', '#dcfce7', '#15803d'], ['🩸', '#ffe4e6', '#be123c'], ['👂', '#fef3c7', '#b45309'], ['💉', '#e0e7ff', '#4338ca'],
];

// Group doctors by speciality for the filter chips.
function speciality($role)
{
    $map = ['Pulmonology' => 'Respiratory', 'Gynaecology' => 'Maternity', 'Anaesthesia' => 'Anaesthesia', 'Surgeon' => 'Surgery',
            'Pathologist' => 'Diagnostics', 'Radiologist' => 'Diagnostics', 'Cardiologist' => 'Cardiology'];
    foreach ($map as $needle => $group) {
        if (stripos($role, $needle) !== false) {
            return $group;
        }
    }
    return 'Other';
}
$specialities = array_values(array_unique(array_map(fn($d) => speciality($d['role']), $doctors)));

$searchIndex = [];
foreach ($departments as $d) {
    $searchIndex[] = ['t' => $d['name'], 'k' => 'Department', 'u' => $d['url']];
}
foreach ($conditions as $c) {
    $searchIndex[] = ['t' => $c[0], 'k' => 'Condition · Respiratory', 'u' => 'respiratory-medicine.php'];
}
foreach ($doctors as $d) {
    $searchIndex[] = ['t' => $d['name'], 'k' => 'Doctor · ' . $d['role'], 'u' => $d['url'] ?? 'our-experts.php'];
}
foreach ($services as $s) {
    $searchIndex[] = ['t' => $s[0], 'k' => 'Test / Diagnostic', 'u' => $s[1]];
}

$pageTitle = 'Home Design 4 — Friendly';
$pageStyles = ['https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap', 'css/home-4.css'];
include __DIR__ . '/header.php';
?>

        <main class="hv-page hv-4">
<section class="hero">
    <div class="blob a"></div><div class="blob b"></div>
    <div class="wrap hero-grid">
        <div>
            <span class="hello">👋 Namaste! Welcome to Agrawal Hospital</span>
            <h1>How can we <span>help you</span> today?</h1>
            <p class="sub">Search for a doctor, department, condition or test — or pick an option to get started.</p>
            <div class="search">
                <input id="q" type="search" placeholder="e.g. asthma, pregnancy, Dr. Agrawal, X-ray…" autocomplete="off" aria-label="Search">
                <div class="results" id="results"></div>
            </div>
            <p class="try">Try: <button data-try="Asthma">Asthma</button> <button data-try="Sleep">Sleep study</button> <button data-try="Surgery">Surgery</button></p>
        </div>
        <div class="help-grid">
            <a class="help e" href="<?= tel($hospital['emergency']) ?>"><div class="ico">🚑</div><div><h3>Emergency</h3><p>Ambulance & ICU, 24/7</p></div></a>
            <a class="help b" href="contact.php"><div class="ico">📅</div><div><h3>Book OPD</h3><p>Mon–Sat, 10 AM – 7 PM</p></div></a>
            <a class="help d" href="#doctors"><div class="ico">👩‍⚕️</div><div><h3>Find a Doctor</h3><p>Meet our specialists</p></div></a>
            <a class="help i" href="#visit"><div class="ico">💳</div><div><h3>Cashless</h3><p>Major TPAs & insurers</p></div></a>
        </div>
    </div>
</section>

<div class="wrap trust">
    <?php foreach ($stats as $s): ?><div><strong><?= $s['value'] ?></strong><span><?= $s['label'] ?></span></div><?php endforeach; ?>
</div>

<section id="departments">
    <div class="wrap">
        <div class="center">
            <h2>Care for every stage of life 💜</h2>
            <p class="sub">Comprehensive healthcare services across multiple specialities, backed by advanced technology and expert medical professionals.</p>
        </div>
        <div class="dept-grid">
            <?php foreach ($departments as $i => $d): [$emoji, $soft, $strong] = $deptStyle[$i]; ?>
                <a class="dept" href="<?= $d['url'] ?>">
                    <div class="ic" style="background:<?= $soft ?>"><?= $emoji ?></div>
                    <h3><?= htmlspecialchars($d['name']) ?></h3>
                    <p><?= $d['desc'] ?></p>
                    <span class="go" style="color:<?= $strong ?>">Learn more →</span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="about">
    <div class="wrap about-grid">
        <div class="collage">
            <img src="image/hospital.jpg" alt="Agrawal Hospital building" loading="lazy">
            <img src="image/icu.jpg" alt="ICU" loading="lazy">
            <img src="image/ward.jpg" alt="Ward" loading="lazy">
        </div>
        <div>
            <h2>A hospital that feels like home 🏡</h2>
            <p><?= $hospital['about'] ?></p>
            <p><?= $hospital['story'] ?></p>
            <div class="tags"><?php foreach ($highlights as $h): ?><span><?= $h ?></span><?php endforeach; ?></div>
            <a class="btn btn-violet" href="about.php">Our Story</a>
        </div>
    </div>
</section>

<section id="doctors">
    <div class="wrap">
        <div class="center">
            <h2>Meet your doctors</h2>
            <p class="sub">Friendly, experienced specialists who listen carefully and explain things clearly.</p>
        </div>
        <div class="filters">
            <button class="on" data-filter="all">All</button>
            <?php foreach ($specialities as $s): ?><button data-filter="<?= $s ?>"><?= $s ?></button><?php endforeach; ?>
        </div>
        <div class="doc-grid">
            <?php foreach ($doctors as $doc): ?>
                <a class="doc" data-spec="<?= speciality($doc['role']) ?>" href="<?= $doc['url'] ?? 'our-experts.php' ?>">
                    <img src="<?= img($doc['img']) ?>" alt="<?= $doc['name'] ?>" loading="lazy">
                    <span class="pill"><?= speciality($doc['role']) ?></span>
                    <h3><?= $doc['name'] ?></h3>
                    <span><?= htmlspecialchars($doc['role']) ?></span>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="center more"><a class="btn btn-soft" href="our-experts.php">See all doctors →</a></div>
    </div>
</section>

<section>
    <div class="wrap cond-wrap">
        <div>
            <h2>Breathing trouble? We can help. 🫁</h2>
            <p class="sub">Comprehensive diagnosis and treatment of all respiratory diseases under the expertise of Dr. P. N. Agrawal. Tap a condition to learn more.</p>
            <div class="cond-card" id="condCard">
                <h3><?= $conditions[0][0] ?></h3>
                <p><?= $conditions[0][1] ?></p>
                <a class="btn btn-violet" href="respiratory-medicine.php">Consult a specialist</a>
            </div>
        </div>
        <div class="cond-list">
            <?php foreach ($conditions as $i => $c): ?>
                <button class="<?= $i === 0 ? 'on' : '' ?>" data-desc="<?= htmlspecialchars($c[1]) ?>"><?= $c[0] ?></button>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section-flush">
    <div class="wrap">
        <div class="center"><h2>Smiles from our patients 😊</h2><p class="sub">Real stories from families we've cared for.</p></div>
        <?php $tones = ['Respiratory' => ['#e3f2ff', '#0369a1'], 'Maternity' => ['#fce7f3', '#be185d'], 'Critical Care' => ['#ffe8d9', '#c2410c'], 'Hospital Care' => ['#defbe9', '#15803d']]; ?>
        <div class="story-tabs">
            <button class="on" data-story="all">All stories</button>
            <?php foreach (array_keys($tones) as $topic): ?><button data-story="<?= $topic ?>"><?= $topic ?></button><?php endforeach; ?>
        </div>
        <div class="stories">
            <?php foreach ($testimonials as $t): [$tone, $deep] = $tones[$t['topic']]; ?>
                <div class="story" data-topic="<?= $t['topic'] ?>" style="--tone:<?= $tone ?>;--deep:<?= $deep ?>">
                    <div class="bubble">
                        <div class="stars"><?= stars($t['rating']) ?></div>
                        <h3><?= $t['headline'] ?></h3>
                        <p><?= $t['text'] ?></p>
                    </div>
                    <div class="who">
                        <div class="av"><?= initials($t['name']) ?></div>
                        <div><b><?= $t['name'] ?></b><small><?= $t['topic'] ?><?= $t['doctor'] ? ' · ' . $t['doctor'] : '' ?></small></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="visit" class="section-flush">
    <div class="wrap">
        <div class="center"><h2>Planning your visit</h2><p class="sub">Everything you need to know before you come in.</p></div>
        <div class="visit-grid">
            <div>
                <details open><summary>Where is the hospital?</summary><p><?= $hospital['address'] ?></p></details>
                <details><summary>What are the OPD timings?</summary><p><?= $hospital['opd'] ?>. Emergency, ICU and admissions are <?= strtolower($hospital['hours']) ?>.</p></details>
                <details><summary>Who do I call in an emergency?</summary><p>Call <a href="<?= tel($hospital['emergency']) ?>"><b><?= $hospital['emergency'] ?></b></a> for ambulance and emergency care. You can also reach us on <?= $hospital['phones'][0] ?> or <?= $hospital['phones'][1] ?>.</p></details>
                <details><summary>Is cashless treatment available?</summary><p>Yes. Cashless facility is available for nearly all major TPA providers and insurance companies.</p></details>
                <details><summary>Is the hospital accredited?</summary><p>Agrawal Hospital is NABH accredited, and is also authorised by BSNL & RBI.</p></details>
                <details><summary>How do I contact you by email?</summary><p>Write to us at <a href="mailto:<?= $hospital['email'] ?>"><b><?= $hospital['email'] ?></b></a>.</p></details>
            </div>
            <div class="map">
                <iframe loading="lazy" title="Agrawal Hospital location" src="https://maps.google.com/maps?q=<?= rawurlencode('Agrawal Hospital, E-3/34 Arera Colony, Bhopal') ?>&output=embed"></iframe>
            </div>
        </div>
        <div class="logos"><?php foreach ($partners as $p): ?><img src="<?= $p ?>" alt="Insurance partner" loading="lazy"><?php endforeach; ?></div>
    </div>
</section>

<div class="mobile-bar">
    <a class="call" href="<?= tel($hospital['emergency']) ?>"><span>📞</span>Emergency</a>
    <a href="contact.php"><span>📅</span>Book</a>
    <a href="https://maps.google.com/?q=<?= rawurlencode('Agrawal Hospital, Arera Colony, Bhopal') ?>" target="_blank" rel="noopener"><span>📍</span>Directions</a>
</div>
        </main>

<script>
    var index = <?= json_encode($searchIndex) ?>;
    var q = document.getElementById('q'), results = document.getElementById('results');

    function esc(s) { var d = document.createElement('div'); d.textContent = s; return d.innerHTML; }

    function search() {
        var term = q.value.trim().toLowerCase();
        if (!term) { results.classList.remove('show'); return; }
        var hits = index.filter(function (i) { return (i.t + ' ' + i.k).toLowerCase().indexOf(term) !== -1; }).slice(0, 8);
        results.innerHTML = hits.length
            ? hits.map(function (h) { return '<a href="' + h.u + '"><b>' + esc(h.t) + '</b><small>' + esc(h.k) + '</small></a>'; }).join('')
            : '<div class="empty">No match — call us on <?= $hospital['phones'][0] ?> and we will guide you.</div>';
        results.classList.add('show');
    }
    q.addEventListener('input', search);
    document.addEventListener('click', function (e) { if (!e.target.closest('.search') && !e.target.dataset.try) results.classList.remove('show'); });
    document.querySelectorAll('[data-try]').forEach(function (b) {
        b.addEventListener('click', function () { q.value = b.dataset.try; search(); q.focus(); });
    });

    document.querySelectorAll('[data-filter]').forEach(function (b) {
        b.addEventListener('click', function () {
            document.querySelectorAll('[data-filter]').forEach(function (x) { x.classList.remove('on'); });
            b.classList.add('on');
            document.querySelectorAll('.doc').forEach(function (d) {
                d.classList.toggle('hide', b.dataset.filter !== 'all' && d.dataset.spec !== b.dataset.filter);
            });
        });
    });

    document.querySelectorAll('[data-story]').forEach(function (b) {
        b.addEventListener('click', function () {
            document.querySelectorAll('[data-story]').forEach(function (x) { x.classList.remove('on'); });
            b.classList.add('on');
            document.querySelectorAll('.story').forEach(function (s) {
                s.classList.toggle('hide', b.dataset.story !== 'all' && s.dataset.topic !== b.dataset.story);
            });
        });
    });

    document.querySelectorAll('.cond-list button').forEach(function (b) {
        b.addEventListener('click', function () {
            document.querySelectorAll('.cond-list button').forEach(function (x) { x.classList.remove('on'); });
            b.classList.add('on');
            var card = document.getElementById('condCard');
            card.querySelector('h3').textContent = b.textContent;
            card.querySelector('p').textContent = b.dataset.desc;
        });
    });
</script>

<?php include __DIR__ . '/footer.php'; ?>
