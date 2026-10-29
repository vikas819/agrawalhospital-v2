<?php
$pageStyles = ['css/map.min.css'];
include 'header.php';
?>

        <div class="page-title mt-30">
             <div class="mx-30">
                <div class="page-title-content paralax-bg">
                    <h1 class="title">
                        Contacts us
                    </h1>
                    <div class="breadkcum">
                        <h3><a href="index.php" class="link-breadkcum">Home</a></h3>
                        <span class="dot bg-white"></span>
                        <h3 class="page-breadkcum">Contacts</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="section-contact p-contact tf-spacing-1">
                <div class="tf-container">
                    <div class="heading-section mb-70 text-center">
                        <h6 class="sub-title mb-10 text-anime">
                            Contact Us
                        </h6>
                        <h2 class="title text-anime">
                            Connect with Our Medical Team
                            <br>for Personalized Care
                        </h2>
                    </div>
                </div>
                <div class="tf-container tf-spacing-3">
                    <div class="row rg-30">
                        <div class="col-lg-4">
                            <div class="box-icon style-list px-mobile-sm">
                                <div class="wow fadeInUp">
                                    <div class="icon">
                                        <i class="icon-address"></i>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <h6 class="title wow fadeInUp"><a href="https://maps.google.com/?q=Agrawal+Hospital,+E-3/34+Arera+Colony,+Bhopal" target="_blank" rel="noopener">Address</a></h6>
                                    <div class="wow fadeInUp">
                                        <p class="fw7">34, Arera Colony, (Near Veer Saverkar Flyover and Ganesh Temple), Bhopal (M.P.)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="box-icon style-list px-mobile-sm">
                                <div class="wow fadeInUp" data-wow-delay=".1s">
                                    <div class="icon">
                                        <i class="icon-contacts"></i>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <h6 class="title wow fadeInUp" data-wow-delay=".1s"><a href="tel:+917554283383">Contacts:</a></h6>
                                    <ul>
                                        <li class="wow fadeInUp" data-wow-delay=".1s"><span class="color-paragraph">Email : </span> <a href="mailto:info@agrawalhospital.com" class="fw7">info@agrawalhospital.com</a></li>
                                        <li class="wow fadeInUp" data-wow-delay=".1s"><span class="color-paragraph">Phone : </span> <a href="tel:+917554283383" class="fw7">+91-755-4283383</a>, <a href="tel:+917554278190" class="fw7">+91-755-4278190</a>, <a href="tel:+918959444999" class="fw7">+91-8959444999</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="box-icon style-list px-mobile-sm">
                                <div class= "wow fadeInUp" data-wow-delay=".2s">
                                    <div class="icon">
                                        <i class="icon-working-hours"></i>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <h6 class="title wow fadeInUp" data-wow-delay=".2s"><a href="tel:+918959444999">Working hours:</a></h6>
                                    <ul>
                                        <li class="flex justify-content-between align-items-center flex-wrap wow fadeInUp" data-wow-delay=".2s"><span class="fw7">Open 24 Hours — 7 Days a Week</li>
                                        <li class="flex justify-content-between align-items-center flex-wrap wow fadeInUp" data-wow-delay=".2s"><span class="fw7">OPD: Mon–Sat, 10:00 AM – 7:00 PM</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="section-map">
                <div class="tf-container">
                    <div class="wg-map tf-spacing-11">
                        <div class="box-map">
                            <div id="map" class="map map-1"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
<?php include 'footer.php'; ?>