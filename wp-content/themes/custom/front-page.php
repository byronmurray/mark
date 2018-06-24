<?php get_header(); ?>        <!--HOME-->
        <section class="home" id="home">
                <div class="home-content">
                    <div class="container">
                        <h1>I am <span class="element" data-text1="a street artist" data-text2="RAS for live" data-loop="true" data-backdelay="3000"></span></h1>
                        <div class="social">
                            <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i>  </a>
                            <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>  </a>
                            <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
                            <a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i>  </a>
                            <a href="#"><i class="fab fa-behance" aria-hidden="true"></i>  </a>
                            <a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i>  </a>
                        </div>
                        <a class="home-down bounce" href="#about"><i class="fas fa-angle-down"></i></a>
                    </div>
                </div>
            <svg class="diagonal home-left" width="21%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
                <path d="M0 100 L100 100 L0 10 Z"></path>
            </svg>
            <svg class="diagonal home-right" width="80%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
                <path d="M0 100 L100 100 L100 10 Z"></path>
            </svg>
        </section>

        <!--ABOUT-->
        <section class="about dgray-bg" id="about">
            <div class="about type-1 padbot_120">
                <div class="container">
                    <!-- about image -->
                    <div class="col-md-4 col-sm-12 about-image top_30 wow fadeInUp"  data-wow-delay="0.4s">
                        <div class="row">
                            <img src="<?= get_template_directory_uri() ?>/images/profile.jpg" alt="">
                        </div>
                    </div>
                    <!-- about text -->
                    <div class="col-md-7 col-md-offset-1 col-sm-12 about-text wow fadeInUp"  data-wow-delay="0.6s">
                        <div class="section-title dleft bottom_30">
                          <br>
                            <h2>ABOUT ME</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <b>incididunt ut labore</b> et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><br><br>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <b>commodo consequat</b> cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>

                    <!-- work areas -->
                    <div class="owl-carousel work-areas top_120 bottom_120 wow fadeInUp" data-pagination="false" data-autoplay="3000" data-items-desktop="3" data-items-desktop-small="3" data-items-tablet="2" data-items-tablet-small="1"  data-wow-delay="0.4s">
                        <!-- an area -->
                        <div class="area col-md-12 item">
                            <div class="icon">
                                <i data-icon="1" class="icon"></i>
                            </div>
                            <div class="text">
                                <h6>Street Art</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!-- an area -->
                        <div class="area col-md-12 item">
                            <div class="icon">
                                <i data-icon="!" class="icon"></i>
                            </div>
                            <div class="text">
                              <h6>Murals</h6>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!-- an area -->
                        <div class="area col-md-12 item">
                            <div class="icon">
                                <i data-icon="#" class="icon"></i>
                            </div>
                            <div class="text">
                                <h6>Prints</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!-- an area -->
                        <div class="area col-md-12 item">
                            <div class="icon">
                                <i data-icon="1" class="icon"></i>
                            </div>
                            <div class="text">
                                <h6>Photography</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!-- an area -->
                        <div class="area col-md-12 item">
                            <div class="icon">
                                <i data-icon="!" class="icon"></i>
                            </div>
                            <div class="text">
                                <h6>Design</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!-- an area -->
                        <div class="area col-md-12 item">
                            <div class="icon">
                                <i data-icon="#" class="icon"></i>
                            </div>
                            <div class="text">
                                <h6>Illustrator</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>

                </div>
            <svg class="diagonal-gray" width="100%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
                <path d="M0 0 L70 100 L100 0 Z"></path>
            </svg>
            </div>
        </section>

        <!--PORTFOLIO-->
        <section class="portfolio" id="portfolio">
            <div class="container">
                <div class="section-title dleft top_120 bottom_90">
                    <h2>PORTFOLIO</h2>
                    <div class="portfolio_filter">
                        <ul>
                            <li class="select-cat" data-filter="*">All</li>
                            <li data-filter=".commission">Commission</li>
                            <li data-filter=".mural">Mural</li>
                            <li data-filter=".prints">Prints</li>
                        </ul>
                    </div>
                </div>
                <!--Portfolio Items-->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="isotope_items row">
                            <!-- Item -->
                            <a href="<?= get_template_directory_uri() ?>/images/prints-1.jpg" class="single_item link prints col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                <img src="<?= get_template_directory_uri() ?>/images/prints-1.jpg" alt="">
                            </a>
                            <!-- Item -->
                            <a href="<?= get_template_directory_uri() ?>/images/mural-1.jpg" class="single_item link mural col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                                <img src="<?= get_template_directory_uri() ?>/images/mural-1.jpg" alt="">
                            </a>
                            <!-- Item -->
                            <a href="<?= get_template_directory_uri() ?>/images/prints-2.jpg" class="single_item link prints col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                                <img src="<?= get_template_directory_uri() ?>/images/prints-2.jpg" alt="">
                            </a>
                            <!-- Item -->
                            <a href="<?= get_template_directory_uri() ?>/images/commission-1.jpg" class="single_item link commission col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.2s">
                                <img src="<?= get_template_directory_uri() ?>/images/commission-1.jpg" alt="">
                            </a>
                            <!-- Item -->
                            <a href="<?= get_template_directory_uri() ?>/images/mural-2.jpg" class="single_item link mural commission col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.5s">
                                <img src="<?= get_template_directory_uri() ?>/images/mural-2.jpg" alt="">
                            </a>
                            <!-- Item -->
                            <a href="<?= get_template_directory_uri() ?>/images/commission-2.jpg" class="single_item link commission col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.8s">
                                <img src="<?= get_template_directory_uri() ?>/images/commission-2.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <svg class="diagonal-white" width="100%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
                <path d="M0 0 L30 100 L100 0 Z"></path>
            </svg>
        </section>

        <!-- BLOG -->
        <section class="blog" id="shop">
            <div class="container-fluid dgray-bg padbot_200">
                <div class="container">
                    <div class="section-title dright top_120 bottom_45">
                        <h2>ART WORK FOR SALE</h2>
                    </div>
                    <!-- Blogs -->
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-content wow fadeInUp" data-wow-delay="0.4s">
                            <div class="blog-image">
                                <img src="<?= get_template_directory_uri() ?>/images/sale-1.jpg">
                            </div>
                            <h2 class="blog-title">Lake and Create</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-content wow fadeInUp" data-wow-delay="0.6s">
                            <div class="blog-image">
                                <img src="<?= get_template_directory_uri() ?>/images/sale-2.jpg">
                            </div>
                            <h2 class="blog-title">Services Garden</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-content wow hidden-sm fadeInUp" data-wow-delay="0.8s">
                            <div class="blog-image">
                                <img src="<?= get_template_directory_uri() ?>/images/sale-3.jpg">
                            </div>
                            <h2 class="blog-title">Auckland Hospital - youth space</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        </div>

                    </div>
                </div>
                <svg class="diagonal-gray" width="100%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
                    <path d="M0 0 L70 100 L100 0 Z"></path>
                </svg>
            </div>
        </section>

        <!-- CONTACT -->
        <section class="contact" id="contact">
            <div class="container">

                <div class="section-title dleft top_120">
                    <h2 class="bottom_30">REACH OUT AND TOUCH ME</h2>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- Contact Info -->
                    <ul class="contact-info row">
                        <li>313 backstreet boyz drive,</li>
                        <li><br>iloveboyz@gmail.com</li>
                        <li>0800 123 456789</li>
                    </ul>
                    <div class="social-icons top_60 row">
                        <a class="fb" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                        <a class="tw" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a class="ins" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        <a class="bh" href="#"><i class="fab fa-behance" aria-hidden="true"></i></a>
                        <a class="dr" href="#"><i class="fab fa-dribbble" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-7 col-md-offset-2 form top_30 bottom_90 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="page-title sub">
                            <h5>leave a message</h5>
                        </div>
                        <form class="contact-form top_60" method="POST" action="mail.php">
                            <div class="row">
                                <!--Name-->
                                <div class="col-md-6">
                                    <input id="con_name" name="con_name" class="form-inp requie" type="text" placeholder="Name">
                                </div>
                                <!--Email-->
                                <div class="col-md-6">
                                    <input id="con_email" name="con_email" class="form-inp requie" type="text" placeholder="Email">
                                </div>
                                <div class="col-md-12">
                                    <!--Message-->
                                    <textarea name="con_message" id="con_message" class="requie" placeholder="How can I help you?" rows="8"></textarea>
                                    <button id="con_submit" class="sitebtn top_30 pull-right" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </section>

<?php get_footer(); ?>
