<?php include 'header.php'; ?>

        <div class="page-title mt-30">
             <div class="mx-30">
                <div class="page-title-content paralax-bg">
                    <h1 class="title">
                        Contacts us
                    </h1>
                    <div class="breadkcum">
                        <h3><a href="index.html" class="link-breadkcum">Home</a></h3>
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
                                    <h6 class="title wow fadeInUp"><a href="#">Address</a></h6>
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
                                    <h6 class="title wow fadeInUp" data-wow-delay=".1s"><a href="#">Contacts:</a></h6>
                                    <ul>
                                        <li class="wow fadeInUp" data-wow-delay=".1s"><span class="color-paragraph">Email : </span> <a href="#" class="fw7">info@agrawalhospital.com</a></li>
                                        <li class="wow fadeInUp" data-wow-delay=".1s"><span class="color-paragraph">Phone : </span> <a href="#" class="fw7">+91-755-4283383, +91-755-4278190, +91 8959444999</a></li>
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
                                    <h6 class="title wow fadeInUp" data-wow-delay=".2s"><a href="#">Working hours:</a></h6>
                                    <ul>
                                        <li class="flex justify-content-between align-items-center flex-wrap wow fadeInUp" data-wow-delay=".2s"><span class="fw7">Open 24 Hours — 7 Days a Week</li>
                                        <li class="flex justify-content-between align-items-center flex-wrap wow fadeInUp" data-wow-delay=".2s"><span class="fw7">OPD: Mon–Sat, 10:00 AM – 7:00 PM</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tf-container w-1740" style="display: none;">
                    <div class="bottom-section flex justify-content-between g-30">
                        <div class="image img-item img-1 tf-animate-1">
                            <img src="image/section/img-p-contact-1.jpg" data-src="image/section/img-p-contact-1.jpg" alt="" class="lazyload">
                        </div>

                        <form id="contactform" class="form-contact-us style-white-3 px-mobile-sm" method="post" action="./contact/contact-process.php">
                            <div class="heading-form text-center mb-42">
                                <div class="title text-anime">
                                    Send Us Message
                                </div>
                                <div class="desc text-anime">Strong communication teamwork skills enable collaboration</div>
                            </div>

                            <fieldset class="item mb-20">
                                <i class="icon-user"></i>
                                <input type="text" name="name" id="name" placeholder="Name" required>
                            </fieldset>

                            <fieldset class="item mb-20">
                                <i class="icon-envelope"></i>
                                <input type="email" name="mail" id="mail" placeholder="Email Address" required>
                            </fieldset>

                            <fieldset class="item mb-20">
                                <i class="icon-phone-volume-2"></i>
                                <input type="number" name="phone" id="phone" placeholder="Phone no" required>
                            </fieldset>

                            <fieldset class="item mb-20">
                                <i class="icon-globe"></i>
                                <input type="text" name="website" id="website" placeholder="Website" required>
                            </fieldset>

                            <fieldset class="item-textarea mb-25">
                                <i class="icon-envelope-2"></i>
                                <textarea name="message" id="message" placeholder="Write message..." required></textarea>
                            </fieldset>

                            <fieldset class="radio-box mb-30">
                                <input type="checkbox" name="ship" id="ship">
                                <label class="mb-0 color-paragraph" for="ship">I agree with company terms & condition.</label>
                            </fieldset>

                            <button type="submit" class="tf-btn">
                                <span>Send Message</span>
                                <i class="icon-arrow-right"></i>
                            </button>

                        </form>

                        <div class="image img-item img-2 tf-animate-4">
                            <img src="image/section/img-p-contact-2.jpg" data-src="image/section/img-p-contact-2.jpg" alt="" class="lazyload">
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