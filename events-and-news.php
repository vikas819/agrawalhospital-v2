    <?php
    $pageTitle = 'Events & News';
    include "header.php";
    require_once __DIR__ . '/includes/media-data.php';
    ?>
    <div class="page-title mt-30">
        <div class="mx-30">
            <div class="page-title-content paralax-bg">
                <h1 class="title">
                    Events &amp; News
                </h1>
                <div class="breadkcum">
                    <h3><a href="index.php" class="link-breadkcum">Home</a></h3>
                    <span class="dot bg-white mx-25"></span>
                    <h3 class="page-breadkcum pl-0">Events &amp; News</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content">
        <section class="ev-page tf-spacing-2 mx-30">
            <div class="tf-container">
                <div class="media-head">
                    <div class="heading-section">
                        <span class="label">Events &amp; News</span>
                        <div class="title text-anime">
                            <h2>Life at Agrawal Hospital</h2>
                        </div>
                        <p class="desc color-paragraph">
                            Health camps, expert talks, awareness programmes, celebrations and news coverage from Agrawal Hospital, Bhopal.
                        </p>
                        <p class="media-count mt-10"><strong><?= count($eventPhotos) ?></strong> photos</p>
                    </div>
                    <div class="media-actions">
                        <a href="video-gallery.php" class="tf-btn style-border hover-bg-black-4">
                            <span>Watch Our Videos</span>
                        </a>
                    </div>
                </div>

                <div class="ev-grid js-ev-gallery">
                    <?php foreach ($eventPhotos as $i => $src): ?>
                        <a href="<?= $src ?>" class="ev-item" title="Agrawal Hospital Events &amp; News">
                            <img src="<?= $src ?>" alt="Agrawal Hospital event photo <?= $i + 1 ?>" loading="lazy">
                            <span class="ev-zoom" aria-hidden="true">+</span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>

    <?php include "footer.php"; ?>
