<?php
require_once __DIR__ . '/home-data.php';
$pageTitle = 'Home Design 3 — Dark';
include __DIR__ . '/header.php';
?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
        <style>
        /* Shared header/footer come from the site template; reset template element styles inside this design. */
        .hv-3 :is(h1, h2, h3, h4, h5, h6, button, input, select, textarea) { font-family: inherit; }
        .hv-3 .lead { font-weight: inherit; }
        .hv-3 { --bg: #06111f;
            --bg-2: #0b1a2e;
            --card: rgba(255, 255, 255, .04);
            --card-2: rgba(255, 255, 255, .07);
            --line: rgba(255, 255, 255, .1);
            --text: #e6edf6;
            --muted: #8fa2b8;
            --teal: #2ee6c5;
            --teal-dim: rgba(46, 230, 197, .14);
            --lime: #a3e635;
            --red: #ff4d5e; }
        .hv-3 * { box-sizing: border-box; margin: 0; padding: 0; }
        .hv-3 { scroll-behavior: smooth; }
        .hv-3 { font-family: 'Manrope', system-ui, sans-serif; background: var(--bg); color: var(--text); line-height: 1.6; overflow-x: hidden; }
        .hv-3 img { max-width: 100%; display: block; }
        .hv-3 a { color: inherit; text-decoration: none; }
        .hv-3 button { font: inherit; }
        .hv-3 .wrap { width: min(1240px, 100% - 32px); margin-inline: auto; }
        .hv-3 h1, .hv-3 h2, .hv-3 h3, .hv-3 h4 { font-family: 'Space Grotesk', sans-serif; line-height: 1.1; letter-spacing: -.02em; }
        .hv-3 h2 { font-size: clamp(30px, 4.4vw, 52px); }
        .hv-3 .grad { background: linear-gradient(90deg, var(--teal), var(--lime)); -webkit-background-clip: text; background-clip: text; color: transparent; }
        .hv-3 .tag { display: inline-flex; align-items: center; gap: 8px; font-size: 12px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: var(--teal); border: 1px solid rgba(46,230,197,.35); padding: 6px 12px; border-radius: 999px; margin-bottom: 18px; }
        .hv-3 .tag::before { content: ''; width: 6px; height: 6px; border-radius: 50%; background: var(--teal); box-shadow: 0 0 10px var(--teal); }
        .hv-3 section { padding: 100px 0; }
        .hv-3 .btn { display: inline-flex; align-items: center; gap: 10px; padding: 15px 26px; border-radius: 12px; font-weight: 700; font-size: 15px; transition: .25s; cursor: pointer; border: 0; }
        .hv-3 .btn-teal { background: var(--teal); color: #032019; }
        .hv-3 .btn-teal:hover { box-shadow: 0 0 30px rgba(46,230,197,.5); }
        .hv-3 .btn-ghost { border: 1px solid var(--line); color: var(--text); background: var(--card); }
        .hv-3 .btn-ghost:hover { border-color: var(--teal); }
        .hv-3 .btn-red { background: var(--red); color: #fff; }
        .hv-3 .muted { color: var(--muted); }
        .hv-3 .hero { min-height: 100vh; display: flex; align-items: center; position: relative; padding: 140px 0 80px; isolation: isolate; }
        .hv-3 .hero::before { content: ''; position: absolute; inset: 0; background: url('image/icu.jpg') center/cover; opacity: .22; z-index: -2; }
        .hv-3 .hero::after { content: ''; position: absolute; inset: 0; background: radial-gradient(ellipse at 70% 30%, rgba(46,230,197,.18), transparent 55%), linear-gradient(180deg, rgba(6,17,31,.4), var(--bg) 92%); z-index: -1; }
        .hv-3 .hero .wrap { display: grid; grid-template-columns: 1.2fr .8fr; gap: 50px; align-items: center; }
        .hv-3 .hero h1 { font-size: clamp(42px, 6.6vw, 88px); font-weight: 700; }
        .hv-3 .hero p.lead { color: var(--muted); font-size: 18px; max-width: 560px; margin: 24px 0 34px; }
        .hv-3 .hero .actions { display: flex; gap: 12px; flex-wrap: wrap; }
        .hv-3 .live { display: inline-flex; align-items: center; gap: 10px; margin-top: 34px; font-size: 14px; color: var(--muted); }
        .hv-3 .live b { color: var(--lime); }
        .hv-3 .pulse { width: 10px; height: 10px; border-radius: 50%; background: var(--lime); animation: pulse 1.6s infinite; }
        @keyframes pulse { 0% { box-shadow: 0 0 0 0 rgba(163,230,53,.6); } 100% { box-shadow: 0 0 0 14px rgba(163,230,53,0); } }
        .hv-3 .er-card { background: linear-gradient(160deg, rgba(255,77,94,.16), rgba(255,255,255,.03)); border: 1px solid rgba(255,77,94,.35); border-radius: 22px; padding: 30px; backdrop-filter: blur(10px); }
        .hv-3 .er-card .label { font-size: 12px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #ff97a1; }
        .hv-3 .er-card h3 { font-size: 28px; margin: 10px 0 8px; }
        .hv-3 .er-card .num { font-family: 'Space Grotesk', sans-serif; font-size: 30px; font-weight: 700; display: block; margin: 16px 0 20px; }
        .hv-3 .er-card ul { list-style: none; border-top: 1px solid var(--line); padding-top: 18px; display: grid; gap: 10px; font-size: 14px; color: var(--muted); }
        .hv-3 .er-card li::before { content: '→ '; color: var(--teal); }
        .hv-3 .bento { display: grid; grid-template-columns: repeat(4, 1fr); grid-auto-rows: 180px; gap: 16px; }
        .hv-3 .tile { background: var(--card); border: 1px solid var(--line); border-radius: 20px; padding: 26px; position: relative; overflow: hidden; display: flex; flex-direction: column; justify-content: flex-end; }
        .hv-3 .tile strong { font-family: 'Space Grotesk', sans-serif; font-size: 44px; line-height: 1; }
        .hv-3 .tile span { color: var(--muted); font-size: 14px; margin-top: 6px; }
        .hv-3 .tile.big { grid-column: span 2; grid-row: span 2; justify-content: space-between; }
        .hv-3 .tile.big p { color: var(--muted); }
        .hv-3 .tile.wide { grid-column: span 2; }
        .hv-3 .tile.photo { padding: 0; }
        .hv-3 .tile.photo img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; opacity: .75; }
        .hv-3 .tile.photo .cap { position: relative; margin: 18px; background: rgba(6,17,31,.75); backdrop-filter: blur(6px); padding: 8px 14px; border-radius: 10px; font-size: 14px; font-weight: 600; align-self: flex-start; }
        .hv-3 .tile.accent { background: var(--teal); color: #032019; }
        .hv-3 .tile.accent span { color: #064d40; }
        .hv-3 .badges { display: flex; flex-wrap: wrap; gap: 8px; }
        .hv-3 .badges span { margin: 0; background: var(--teal-dim); color: var(--teal); padding: 6px 12px; border-radius: 8px; font-size: 13px; font-weight: 600; }
        .hv-3 .dept { background: var(--bg-2); }
        .hv-3 .dept-head { display: flex; justify-content: space-between; align-items: end; gap: 20px; flex-wrap: wrap; margin-bottom: 40px; }
        .hv-3 .dept-head p { max-width: 440px; }
        .hv-3 .tabs { display: grid; grid-template-columns: 340px 1fr; gap: 24px; }
        .hv-3 .tab-list { display: flex; flex-direction: column; gap: 8px; }
        .hv-3 .tab-list button { text-align: left; background: transparent; border: 1px solid transparent; color: var(--muted); padding: 16px 18px; border-radius: 14px; cursor: pointer; font-weight: 600; font-size: 16px; display: flex; justify-content: space-between; transition: .2s; }
        .hv-3 .tab-list button:hover { color: var(--text); background: var(--card); }
        .hv-3 .tab-list button.active { color: var(--text); background: var(--card-2); border-color: rgba(46,230,197,.4); }
        .hv-3 .tab-list button.active::after { content: '●'; color: var(--teal); font-size: 10px; align-self: center; }
        .hv-3 .panel { display: none; border-radius: 22px; overflow: hidden; border: 1px solid var(--line); position: relative; min-height: 480px; }
        .hv-3 .panel.active { display: block; animation: fade .4s; }
        @keyframes fade { from { opacity: 0; transform: translateY(8px); } }
        .hv-3 .panel img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
        .hv-3 .panel .over { position: absolute; inset: auto 0 0 0; padding: 36px; background: linear-gradient(0deg, rgba(6,17,31,.95) 30%, transparent); }
        .hv-3 .panel h3 { font-size: 34px; margin-bottom: 12px; }
        .hv-3 .panel p { color: #c3d0de; max-width: 560px; margin-bottom: 20px; }
        .hv-3 .diag-grid { display: grid; grid-template-columns: repeat(6, 1fr); gap: 12px; margin-top: 40px; }
        .hv-3 .diag-grid div { background: var(--card); border: 1px solid var(--line); border-radius: 14px; padding: 22px 16px; font-weight: 600; font-size: 15px; display: flex; flex-direction: column; gap: 18px; }
        .hv-3 .diag-grid div small { color: var(--teal); font-family: 'Space Grotesk', sans-serif; }
        .hv-3 .conds { padding: 80px 0; border-block: 1px solid var(--line); overflow: hidden; }
        .hv-3 .conds .wrap { margin-bottom: 36px; display: flex; justify-content: space-between; align-items: end; gap: 20px; flex-wrap: wrap; }
        .hv-3 .lane { display: flex; gap: 12px; width: max-content; animation: lane 60s linear infinite; margin-bottom: 12px; }
        .hv-3 .lane.rev { animation-direction: reverse; }
        .hv-3 .lane span { border: 1px solid var(--line); background: var(--card); padding: 12px 20px; border-radius: 999px; font-weight: 600; white-space: nowrap; }
        .hv-3 .lane span:nth-child(3n) { border-color: rgba(46,230,197,.4); color: var(--teal); }
        .hv-3 .conds:hover .lane { animation-play-state: paused; }
        @keyframes lane { to { transform: translateX(-50%); } }
        .hv-3 .doc-head { display: flex; justify-content: space-between; align-items: end; gap: 20px; margin-bottom: 40px; flex-wrap: wrap; }
        .hv-3 .arrows { display: flex; gap: 10px; }
        .hv-3 .arrows button { width: 52px; height: 52px; border-radius: 50%; border: 1px solid var(--line); background: var(--card); color: var(--text); cursor: pointer; font-size: 18px; }
        .hv-3 .arrows button:hover { border-color: var(--teal); color: var(--teal); }
        .hv-3 .doc-track { display: grid; grid-auto-flow: column; grid-auto-columns: calc((100% - 60px) / 4); gap: 20px; overflow-x: auto; scroll-snap-type: x mandatory; scrollbar-width: none; scroll-behavior: smooth; }
        .hv-3 .doc-track::-webkit-scrollbar { display: none; }
        .hv-3 .doc { scroll-snap-align: start; border-radius: 20px; overflow: hidden; position: relative; aspect-ratio: 3/4; border: 1px solid var(--line); }
        .hv-3 .doc img { width: 100%; height: 100%; object-fit: cover; object-position: top; transition: .5s; }
        .hv-3 .doc:hover img { transform: scale(1.05); }
        .hv-3 .doc .meta { position: absolute; inset: auto 12px 12px 12px; background: rgba(6,17,31,.82); backdrop-filter: blur(8px); border: 1px solid var(--line); padding: 14px 16px; border-radius: 14px; }
        .hv-3 .doc h4 { font-size: 18px; }
        .hv-3 .doc span { font-size: 13px; color: var(--teal); }
        .hv-3 .reviews { background: var(--bg-2); }
        .hv-3 .reviews { overflow: hidden; }
        .hv-3 .rev-head { display: flex; justify-content: space-between; align-items: end; gap: 20px; flex-wrap: wrap; margin-bottom: 44px; }
        .hv-3 .rev-topics { display: flex; gap: 8px; flex-wrap: wrap; }
        .hv-3 .rev-topics span { font-size: 13px; font-weight: 600; padding: 7px 14px; border-radius: 999px; background: var(--card); border: 1px solid var(--line); color: var(--muted); }
        .hv-3 .rev-lanes { -webkit-mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent); mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent); }
        .hv-3 .rev-lane { display: flex; gap: 18px; width: max-content; animation: lane 70s linear infinite; margin-bottom: 18px; }
        .hv-3 .rev-lane.rev { animation-direction: reverse; animation-duration: 80s; }
        .hv-3 .rev-lanes:hover .rev-lane { animation-play-state: paused; }
        .hv-3 .rcard { width: 380px; flex: none; background: linear-gradient(160deg, rgba(255,255,255,.07), rgba(255,255,255,.02)); border: 1px solid var(--line); border-radius: 22px; padding: 26px; display: flex; flex-direction: column; gap: 14px; transition: border-color .3s; }
        .hv-3 .rcard:hover { border-color: rgba(46,230,197,.5); }
        .hv-3 .rcard .top { display: flex; justify-content: space-between; align-items: center; }
        .hv-3 .rcard .stars { color: var(--teal); letter-spacing: 2px; font-size: 15px; }
        .hv-3 .rcard .chip { font-size: 11px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: var(--lime); }
        .hv-3 .rcard h4 { font-size: 20px; }
        .hv-3 .rcard p { color: #b4c3d3; font-size: 15px; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; }
        .hv-3 .rcard .who { display: flex; align-items: center; gap: 12px; margin-top: auto; padding-top: 14px; border-top: 1px solid var(--line); }
        .hv-3 .rcard .av { width: 42px; height: 42px; border-radius: 12px; display: grid; place-items: center; font-family: 'Space Grotesk', sans-serif; font-weight: 700; color: #032019; background: linear-gradient(135deg, var(--teal), var(--lime)); }
        .hv-3 .rcard .who strong { display: block; font-size: 15px; }
        .hv-3 .rcard .who small { color: var(--muted); font-size: 13px; }
        .hv-3 .ins { padding: 70px 0; }
        .hv-3 .ins-row { display: flex; gap: 14px; width: max-content; animation: lane 50s linear infinite; margin-top: 30px; }
        .hv-3 .ins-row img { height: 64px; width: auto; background: #fff; border-radius: 12px; padding: 8px 12px; }
        @media (max-width: 1080px) {
        .hv-3 .hero .wrap, .hv-3 .tabs { grid-template-columns: 1fr; }
        .hv-3 .tab-list { flex-direction: row; overflow-x: auto; scrollbar-width: none; }
        .hv-3 .tab-list button { white-space: nowrap; flex: none; }
        .hv-3 .bento { grid-template-columns: repeat(2, 1fr); }
        .hv-3 .diag-grid { grid-template-columns: repeat(3, 1fr); }
        .hv-3 .doc-track { grid-auto-columns: calc((100% - 20px) / 2.3); }
        }
        @media (max-width: 600px) {
        .hv-3 section { padding: 70px 0; }
        .hv-3 .bento { grid-template-columns: 1fr; grid-auto-rows: auto; }
        .hv-3 .tile { min-height: 150px; }
        .hv-3 .tile.big, .hv-3 .tile.wide { grid-column: auto; grid-row: auto; gap: 20px; }
        .hv-3 .tile.photo { min-height: 220px; }
        .hv-3 .diag-grid { grid-template-columns: 1fr 1fr; }
        .hv-3 .doc-track { grid-auto-columns: 78%; }
        .hv-3 .rcard { width: 300px; padding: 22px; }
        .hv-3 .panel { min-height: 420px; }
        .hv-3 .panel .over { padding: 24px; }
        .hv-3 .panel h3 { font-size: 26px; }
        }
        .hv-3 { margin: 30px 30px 0; border-radius: 24px; overflow: hidden; }
        .hv-3 .hero { min-height: 0; padding: 90px 0 80px; }
        @media (max-width: 767px) { .hv-3 { margin: 16px 12px 0; } .hv-3 .hero { padding: 60px 0; } }
        </style>

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
            <a class="btn btn-red" href="<?= tel($hospital['emergency']) ?>" style="width:100%;justify-content:center">Call Emergency Now</a>
            <ul style="margin-top:20px">
                <li>Central oxygen & suction at every bed</li>
                <li>Central monitoring ICU</li>
                <li>Modular operation theatres</li>
            </ul>
        </div>
    </div>
</section>

<section style="padding-top:20px">
    <div class="wrap bento">
        <div class="tile big">
            <div>
                <span class="tag">Since 16 Aug 2002</span>
                <h2 style="font-size:clamp(26px,3vw,38px)">Where expert care meets compassion</h2>
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
        <p class="muted" style="max-width:420px">Comprehensive diagnosis and treatment of all respiratory diseases under the expertise of Dr. P. N. Agrawal.</p>
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
    <div class="wrap"><span class="tag">TPA Empanelment</span><h2 style="font-size:clamp(24px,3vw,34px)">Cashless with nearly all major TPAs & insurers</h2></div>
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
