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
include __DIR__ . '/header.php';
?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
        <style>
        /* Shared header/footer come from the site template; reset template element styles inside this design. */
        .hv-4 :is(h1, h2, h3, h4, h5, h6, button, input, select, textarea) { font-family: inherit; }
        .hv-4 .lead { font-weight: inherit; }
        .hv-4 { --bg: #fffaf5;
            --ink: #1e1b4b;
            --muted: #64627d;
            --violet: #6d5dfc;
            --violet-soft: #efedff;
            --peach: #ffe8d9;
            --sky: #e3f2ff;
            --mint: #defbe9;
            --green: #5fae3c;
            --red: #ef4444;
            --line: #ece8f3;
            --white: #fff; }
        .hv-4 * { box-sizing: border-box; margin: 0; padding: 0; }
        .hv-4 { scroll-behavior: smooth; }
        .hv-4 { font-family: 'Nunito', system-ui, sans-serif; background: var(--bg); color: var(--ink); line-height: 1.6; padding-bottom: 0; }
        .hv-4 img { max-width: 100%; display: block; }
        .hv-4 a { color: inherit; text-decoration: none; }
        .hv-4 button, .hv-4 input { font: inherit; }
        .hv-4 .wrap { width: min(1200px, 100% - 32px); margin-inline: auto; }
        .hv-4 h1, .hv-4 h2, .hv-4 h3 { line-height: 1.15; font-weight: 900; }
        .hv-4 h2 { font-size: clamp(28px, 4vw, 44px); }
        .hv-4 .sub { color: var(--muted); font-size: 17px; margin-top: 10px; }
        .hv-4 section { padding: 80px 0; }
        .hv-4 .btn { display: inline-flex; align-items: center; gap: 8px; padding: 14px 24px; border-radius: 16px; font-weight: 800; transition: .2s; border: 0; cursor: pointer; }
        .hv-4 .btn-violet { background: var(--violet); color: #fff; box-shadow: 0 8px 20px rgba(109,93,252,.3); }
        .hv-4 .btn-violet:hover { transform: translateY(-2px); }
        .hv-4 .btn-soft { background: var(--violet-soft); color: var(--violet); }
        @keyframes blink { 50% { opacity: .2; } }
        .hv-4 .hero { padding: 50px 0 70px; position: relative; overflow: hidden; }
        .hv-4 .blob { position: absolute; border-radius: 50%; filter: blur(60px); opacity: .7; z-index: -1; }
        .hv-4 .blob.a { width: 420px; height: 420px; background: #d9d4ff; top: -100px; right: -80px; }
        .hv-4 .blob.b { width: 360px; height: 360px; background: var(--peach); bottom: -120px; left: -100px; }
        .hv-4 .hero-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; }
        .hv-4 .hello { display: inline-flex; gap: 8px; align-items: center; background: #fff; border: 1px solid var(--line); padding: 8px 14px; border-radius: 999px; font-weight: 700; font-size: 14px; }
        .hv-4 .hero h1 { font-size: clamp(38px, 5.5vw, 64px); margin: 18px 0 14px; }
        .hv-4 .hero h1 span { color: var(--violet); }
        .hv-4 .search { position: relative; margin-top: 26px; max-width: 520px; }
        .hv-4 .search input { width: 100%; padding: 18px 22px 18px 54px; border-radius: 20px; border: 2px solid var(--line); background: #fff; font-size: 16px; outline: none; transition: .2s; }
        .hv-4 .search input:focus { border-color: var(--violet); box-shadow: 0 0 0 5px var(--violet-soft); }
        .hv-4 .search::before { content: '🔍'; position: absolute; left: 20px; top: 17px; font-size: 18px; }
        .hv-4 .results { position: absolute; top: calc(100% + 8px); left: 0; right: 0; background: #fff; border-radius: 18px; box-shadow: 0 20px 40px rgba(30,27,75,.15); overflow: hidden; display: none; z-index: 10; max-height: 340px; overflow-y: auto; }
        .hv-4 .results.show { display: block; }
        .hv-4 .results a { display: block; padding: 12px 20px; border-bottom: 1px solid var(--line); }
        .hv-4 .results a:hover { background: var(--violet-soft); }
        .hv-4 .results a b { display: block; }
        .hv-4 .results a small { color: var(--muted); }
        .hv-4 .results .empty { padding: 16px 20px; color: var(--muted); }
        .hv-4 .try { margin-top: 12px; font-size: 14px; color: var(--muted); }
        .hv-4 .try button { background: none; border: 0; color: var(--violet); font-weight: 700; cursor: pointer; text-decoration: underline; }
        .hv-4 .help-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
        .hv-4 .help { border-radius: 26px; padding: 26px; min-height: 180px; display: flex; flex-direction: column; justify-content: space-between; transition: .25s; position: relative; overflow: hidden; }
        .hv-4 .help:hover { transform: translateY(-5px) rotate(-.5deg); }
        .hv-4 .help .ico { font-size: 34px; }
        .hv-4 .help h3 { font-size: 20px; }
        .hv-4 .help p { font-size: 14px; opacity: .8; }
        .hv-4 .help.e { background: var(--red); color: #fff; }
        .hv-4 .help.b { background: var(--violet); color: #fff; }
        .hv-4 .help.d { background: var(--mint); }
        .hv-4 .help.i { background: var(--peach); }
        .hv-4 .trust { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; background: #fff; border: 1px solid var(--line); border-radius: 26px; padding: 26px; }
        .hv-4 .trust div { text-align: center; }
        .hv-4 .trust strong { font-size: 32px; font-weight: 900; color: var(--violet); display: block; }
        .hv-4 .trust span { font-size: 14px; color: var(--muted); }
        .hv-4 .center { text-align: center; max-width: 640px; margin: 0 auto 44px; }
        .hv-4 .dept-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
        .hv-4 .dept { background: #fff; border: 1px solid var(--line); border-radius: 24px; padding: 26px; transition: .25s; display: flex; flex-direction: column; }
        .hv-4 .dept:hover { box-shadow: 0 16px 36px rgba(30,27,75,.08); transform: translateY(-4px); }
        .hv-4 .dept .ic { width: 60px; height: 60px; border-radius: 18px; display: grid; place-items: center; font-size: 28px; margin-bottom: 18px; }
        .hv-4 .dept h3 { font-size: 18px; margin-bottom: 8px; }
        .hv-4 .dept p { font-size: 14px; color: var(--muted); flex: 1; }
        .hv-4 .dept .go { margin-top: 14px; font-weight: 800; font-size: 14px; }
        .hv-4 .about { background: var(--sky); border-radius: 40px; margin: 0 16px; }
        .hv-4 .about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; }
        .hv-4 .collage { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
        .hv-4 .collage img { border-radius: 24px; width: 100%; height: 220px; object-fit: cover; }
        .hv-4 .collage img:first-child { grid-column: span 2; height: 260px; }
        .hv-4 .about p { color: var(--muted); margin-top: 14px; }
        .hv-4 .tags { display: flex; flex-wrap: wrap; gap: 8px; margin: 24px 0; }
        .hv-4 .tags span { background: #fff; padding: 8px 14px; border-radius: 999px; font-weight: 700; font-size: 14px; }
        .hv-4 .tags span::before { content: '✔ '; color: var(--green); }
        .hv-4 .filters { display: flex; flex-wrap: wrap; gap: 8px; justify-content: center; margin-bottom: 30px; }
        .hv-4 .filters button { border: 2px solid var(--line); background: #fff; padding: 9px 18px; border-radius: 999px; font-weight: 800; cursor: pointer; color: var(--muted); }
        .hv-4 .filters button.on { background: var(--ink); border-color: var(--ink); color: #fff; }
        .hv-4 .doc-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 18px; }
        .hv-4 .doc { background: #fff; border-radius: 24px; padding: 12px; border: 1px solid var(--line); text-align: center; transition: .25s; }
        .hv-4 .doc:hover { transform: translateY(-4px); }
        .hv-4 .doc img { border-radius: 18px; aspect-ratio: 1/1; object-fit: cover; object-position: top; width: 100%; background: var(--violet-soft); }
        .hv-4 .doc h3 { font-size: 16px; margin-top: 12px; }
        .hv-4 .doc span { font-size: 13px; color: var(--muted); display: block; }
        .hv-4 .doc .pill { display: inline-block; margin: 8px 0 4px; font-size: 12px; font-weight: 800; background: var(--violet-soft); color: var(--violet); padding: 3px 10px; border-radius: 999px; }
        .hv-4 .doc.hide { display: none; }
        .hv-4 .cond-wrap { background: #fff; border: 1px solid var(--line); border-radius: 32px; padding: 40px; display: grid; grid-template-columns: .9fr 1.1fr; gap: 40px; }
        .hv-4 .cond-list { display: flex; flex-wrap: wrap; gap: 8px; max-height: 320px; overflow-y: auto; align-content: flex-start; }
        .hv-4 .cond-list button { border: 0; background: var(--sky); padding: 9px 14px; border-radius: 12px; font-weight: 700; font-size: 14px; cursor: pointer; color: #0c4a6e; }
        .hv-4 .cond-list button.on { background: #0369a1; color: #fff; }
        .hv-4 .cond-card { background: var(--sky); border-radius: 24px; padding: 30px; margin-top: 24px; }
        .hv-4 .cond-card h3 { font-size: 24px; color: #0c4a6e; }
        .hv-4 .cond-card p { color: #335c7a; margin: 10px 0 18px; }
        .hv-4 .story-tabs { display: flex; flex-wrap: wrap; gap: 8px; justify-content: center; margin-bottom: 34px; }
        .hv-4 .story-tabs button { border: 2px solid var(--line); background: #fff; padding: 9px 18px; border-radius: 999px; font-weight: 800; cursor: pointer; color: var(--muted); }
        .hv-4 .story-tabs button.on { background: var(--violet); border-color: var(--violet); color: #fff; }
        .hv-4 .stories { columns: 3; column-gap: 22px; }
        .hv-4 .story { break-inside: avoid; margin-bottom: 26px; display: inline-block; width: 100%; }
        .hv-4 .story.hide { display: none; }
        .hv-4 .bubble { position: relative; border-radius: 26px 26px 26px 6px; padding: 24px 24px 22px; background: var(--tone); }
        .hv-4 .bubble::after { content: ''; position: absolute; left: 0; bottom: -14px; border-left: 18px solid var(--tone); border-bottom: 14px solid transparent; }
        .hv-4 .bubble .stars { color: #f59e0b; font-size: 15px; letter-spacing: 2px; }
        .hv-4 .bubble h3 { font-size: 19px; margin: 6px 0 8px; color: var(--deep); }
        .hv-4 .bubble p { font-size: 15px; color: #3f3d56; }
        .hv-4 .story .who { display: flex; align-items: center; gap: 10px; margin: 22px 0 0 6px; }
        .hv-4 .story .av { width: 42px; height: 42px; border-radius: 50%; display: grid; place-items: center; font-weight: 900; color: #fff; background: var(--deep); font-size: 15px; }
        .hv-4 .story .who b { display: block; font-size: 15px; }
        .hv-4 .story .who small { color: var(--muted); font-size: 13px; }
        .hv-4 .visit-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 30px; }
        .hv-4 details { background: #fff; border: 1px solid var(--line); border-radius: 20px; padding: 18px 22px; margin-bottom: 12px; }
        .hv-4 summary { font-weight: 800; cursor: pointer; list-style: none; display: flex; justify-content: space-between; gap: 12px; }
        .hv-4 summary::after { content: '+'; font-size: 22px; line-height: 1; color: var(--violet); }
        .hv-4 details[open] summary::after { content: '–'; }
        .hv-4 details p { color: var(--muted); margin-top: 10px; }
        .hv-4 .map { border-radius: 28px; overflow: hidden; border: 1px solid var(--line); min-height: 380px; }
        .hv-4 .map iframe { width: 100%; height: 100%; min-height: 380px; border: 0; }
        .hv-4 .logos { display: flex; gap: 14px; flex-wrap: wrap; justify-content: center; margin-top: 30px; }
        .hv-4 .logos img { height: 60px; width: auto; background: #fff; border-radius: 14px; padding: 8px 12px; border: 1px solid var(--line); }
        .hv-4 .mobile-bar { display: none; }
        @media (max-width: 1000px) {
        .hv-4 .hero-grid, .hv-4 .about-grid, .hv-4 .cond-wrap, .hv-4 .visit-grid { grid-template-columns: 1fr; }
        .hv-4 .dept-grid { grid-template-columns: 1fr 1fr; }
        .hv-4 .doc-grid { grid-template-columns: repeat(3, 1fr); }
        .hv-4 .trust { grid-template-columns: 1fr 1fr; }
        .hv-4 .stories { columns: 2; }
        }
        @media (max-width: 600px) {
        .hv-4 { padding-bottom: 72px; }
        .hv-4 section { padding: 60px 0; }
        .hv-4 .dept-grid { grid-template-columns: 1fr; }
        .hv-4 .doc-grid { grid-template-columns: 1fr 1fr; }
        .hv-4 .help { min-height: 150px; padding: 20px; }
        .hv-4 .cond-wrap { padding: 24px; }
        .hv-4 .stories { columns: 1; }
        .hv-4 .about { margin: 0; border-radius: 28px; }
        .hv-4 .collage img, .hv-4 .collage img:first-child { height: 160px; }
        .hv-4 .mobile-bar { display: grid; grid-template-columns: repeat(3, 1fr); position: fixed; left: 0; right: 0; bottom: 0; background: #fff; border-top: 1px solid var(--line); z-index: 60; }
        .hv-4 .mobile-bar a { text-align: center; padding: 10px 4px; font-size: 12px; font-weight: 800; }
        .hv-4 .mobile-bar a span { display: block; font-size: 20px; }
        .hv-4 .mobile-bar a.call { color: var(--red); }
        }
        .hv-4 .map { height: auto; }
        </style>

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
        <div class="center" style="margin:36px auto 0"><a class="btn btn-soft" href="our-experts.php">See all doctors →</a></div>
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

<section style="padding-top:0">
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

<section id="visit" style="padding-top:0">
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
