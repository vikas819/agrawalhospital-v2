<?php
// Shared layout for the Diagnostics pages. Each page file (x-ray.php, ecg.php, ...) just includes this;
// the content is looked up in diagnostics-data.php by the page's file name.
require_once __DIR__ . '/diagnostics-data.php';

$diagnostic = $diagnostics[basename($_SERVER['SCRIPT_NAME'])];
$pageTitle = $diagnostic['title'];
include __DIR__ . '/../header.php';
?>
        <div class="page-title mt-30">
             <div class="mx-30">
                <div class="page-title-content paralax-bg">
                    <h1 class="title">
                        <?= $diagnostic['title'] ?>
                    </h1>
                    <div class="breadkcum">
                        <h3><a href="index.php" class="link-breadkcum">Home</a></h3>
                        <span class="dot bg-white mx-25"></span>
                        <h3 class="page-breadkcum pl-0">Diagnostics</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="wg-services-details tf-spacing-1">
                <div class="tf-container">
                    <div class="row rg-30">
                        <div class="col-lg-4">
                            <div class="tf-sidebar">

                                <div class="sidebar-item sidebar-style-2 sidebar-content sidebar-categories px-mobile-sm">
                                    <h4 class="title-content">
                                        Diagnostic Services
                                    </h4>
                                    <ul class="list">
                                        <?php foreach ($diagnostics as $url => $item): ?>
                                            <li class="item<?= $item === $diagnostic ? ' active' : '' ?>">
                                                <a href="<?= $url ?>" class="title"><?= $item['title'] ?></a>
                                                <i class="icon-arrow-right"></i>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <div class="sidebar-item sidebar-banner">
                                    <h6 class="sub-title lsp-0">
                                        Book a Test ?
                                    </h6>
                                    <div class="title">
                                        Looking for Expert
                                        medical healthcare?
                                    </div>
                                    <div class="benefit-list">
                                        <div class="benefit-items body-2">
                                            <i class="icon-check"></i>
                                            <span class="body-2">Advanced Medical Technology</span>
                                        </div>
                                        <div class="benefit-items body-2">
                                            <i class="icon-check"></i>
                                            <span class="body-2">Treatments &amp; Services</span>
                                        </div>
                                    </div>
                                    <h5 class="number-phone">
                                        <i class="icon-phone"></i>
                                        <a href="tel:+917554283383">+91-755-4283383</a>
                                    </h5>
                                    <h5 class="number-phone">
                                        <i class="icon-phone"></i>
                                        <a href="tel:+917554278190">+91-755-4278190</a>
                                    </h5>
                                    <h5 class="number-phone">
                                        <i class="icon-phone"></i>
                                        <a href="tel:+918959444999">+91-8959444999</a>
                                    </h5>

                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="details-content services-details-content">

                                <div class="image-details mb-40">
                                    <img src="<?= $diagnostic['image'] ?>" alt="<?= $diagnostic['title'] ?>">
                                </div>

                                <div class="mb-44">
                                    <h3 class="title mb-20">
                                        <?= $diagnostic['title'] ?>
                                    </h3>
                                    <?php foreach ($diagnostic['blocks'] as [$type, $content]): ?>
                                        <?php if ($type === 'p'): ?>
                                            <div class="desc"><?= $content ?></div>
                                        <?php elseif ($type === 'h'): ?>
                                            <h4 class="title mb-20 mt-30"><?= $content ?></h4>
                                        <?php else: ?>
                                            <ul class="check-list">
                                                <?php foreach ($content as $li): ?>
                                                    <li><i class="icon-check" aria-hidden="true"></i><span><?= $li ?></span></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php include __DIR__ . '/../footer.php'; ?>
