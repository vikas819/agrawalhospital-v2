    <?php
    $pageTitle = 'Video Gallery';
    include "header.php";
    require_once __DIR__ . '/includes/media-data.php';
    ?>
    <div class="page-title mt-30">
        <div class="mx-30">
            <div class="page-title-content paralax-bg">
                <h1 class="title">
                    Video Gallery
                </h1>
                <div class="breadkcum">
                    <h3><a href="index.php" class="link-breadkcum">Home</a></h3>
                    <span class="dot bg-white mx-25"></span>
                    <h3 class="page-breadkcum pl-0">Video Gallery</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content">
        <section class="tf-spacing-2 mx-30">
            <div class="tf-container">
                <div class="media-head">
                    <div class="heading-section">
                        <span class="label">YouTube Channel</span>
                        <div class="title text-anime">
                            <h2>Health Talks by Our Experts</h2>
                        </div>
                        <p class="desc color-paragraph">
                            Talks, interviews and live procedure demonstrations by Dr. P. N. Agrawal and the Agrawal Hospital team on asthma, COPD, lung health, critical care and more.
                        </p>
                        <p class="media-count mt-10"><strong><?= count($videos) ?></strong> videos</p>
                    </div>
                    <div class="media-actions">
                        <a href="<?= $youtubeChannel ?>" class="tf-btn" target="_blank" rel="noopener">
                            <span>Subscribe on YouTube</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="yt-grid">
                    <?php foreach ($videos as [$id, $title]): ?>
                        <?php $watch = 'https://www.youtube.com/watch?v=' . $id; ?>
                        <article class="yt-card">
                            <a href="<?= $watch ?>" class="yt-thumb js-yt-popup" aria-label="Play: <?= htmlspecialchars($title) ?>">
                                <img src="https://i.ytimg.com/vi/<?= $id ?>/hqdefault.jpg" alt="" loading="lazy">
                                <span class="yt-play"></span>
                            </a>
                            <div class="yt-body">
                                <h3><a href="<?= $watch ?>" class="js-yt-popup"><?= htmlspecialchars($title) ?></a></h3>
                                <span class="yt-meta">Agrawal Hospital Bhopal</span>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>

    <?php include "footer.php"; ?>
