<?php
// Shared layout for the Explore photo galleries. Each page file (camp.php, hospital.php, ...) just includes this;
// the content is looked up in gallery-data.php by the page's file name.
require_once __DIR__ . '/gallery-data.php';

$gallery = $galleries[basename($_SERVER['SCRIPT_NAME'])];
$photos = array_map(
    fn($path) => $gallery['dir'] . '/' . basename($path),
    glob(dirname(__DIR__) . '/' . $gallery['dir'] . '/*.jpg')
);
$pageTitle = html_entity_decode($gallery['title']);
include __DIR__ . '/../header.php';
?>
    <div class="page-title mt-30">
        <div class="mx-30">
            <div class="page-title-content paralax-bg">
                <h1 class="title">
                    <?= $gallery['title'] ?>
                </h1>
                <div class="breadkcum">
                    <h3><a href="index.php" class="link-breadkcum">Home</a></h3>
                    <span class="dot bg-white mx-25"></span>
                    <h3 class="page-breadkcum pl-0"><?= $gallery['title'] ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content">
        <section class="ev-page tf-spacing-2 mx-30">
            <div class="tf-container">
                <div class="media-head">
                    <div class="heading-section">
                        <span class="label"><?= $gallery['title'] ?></span>
                        <div class="title text-anime">
                            <h2><?= $gallery['heading'] ?></h2>
                        </div>
                        <p class="desc color-paragraph">
                            <?= $gallery['desc'] ?>
                        </p>
                        <p class="media-count mt-10"><strong><?= count($photos) ?></strong> photos</p>
                    </div>
                    <div class="media-actions">
                        <a href="events-and-news.php" class="tf-btn style-border hover-bg-black-4">
                            <span>Events &amp; News</span>
                        </a>
                    </div>
                </div>

                <div class="ev-grid js-ev-gallery">
                    <?php foreach ($photos as $i => $src): ?>
                        <a href="<?= $src ?>" class="ev-item" title="Agrawal Hospital <?= $gallery['title'] ?>">
                            <img src="<?= $src ?>" alt="Agrawal Hospital <?= $gallery['title'] ?> photo <?= $i + 1 ?>" loading="lazy">
                            <span class="ev-zoom" aria-hidden="true">+</span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>

    <?php include __DIR__ . '/../footer.php'; ?>
