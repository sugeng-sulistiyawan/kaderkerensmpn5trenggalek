<?php

use app\Config;

$config = new Config();

?>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mx-auto nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="#Products">Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#Features">Features</a>
    </li>
    <li class="nav-item dropdown dropdown-hover dropdown_full position-static">
      <a class="nav-link dropdown-toggle dropdown_menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        elements

        <div class="icon_arrow">
          <i class="tio chevron_right"></i>
        </div>

      </a>
      <div class="dropdown-menu w-100 single-drop" aria-labelledby="navbarDropdown">
        <div class="dropdown_menu_nav">
          <!-- menu #1 -->
          <div class="item_colume">
            <span class="sub_title">Content</span>
            <div class="sub_nav_menu">
              <ul class="nav_meun">
                <li>
                  <a href="../elements/accordion.html" class="dropdown-item">Accordion</a>
                </li>
                <li>
                  <a href="../elements/carousel.html" class="dropdown-item">Carousel</a>
                </li>
                <li>
                  <a href="../pricing/pricing-list.html" class="dropdown-item">Pricing List</a>
                </li>
                <li>
                  <a href="../elements/pricing-table.html" class="dropdown-item">Pricing Table</a>
                </li>
                <li>
                  <a href="../elements/tabs.html" class="dropdown-item">Tabs</a>
                </li>
              </ul>
            </div>
          </div>

          <!-- menu #2 -->
          <div class="item_colume">
            <span class="sub_title">Presentational</span>
            <div class="sub_nav_menu">
              <ul class="nav_meun">
                <li>
                  <a href="../elements/blog-posts.html" class="dropdown-item">Blog Posts
                    <span class="item_new">New</span>
                  </a>
                </li>
                <li>
                  <a href="../elements/parallax.html" class="dropdown-item">Parallax</a>
                </li>

                <li>
                  <a href="../elements/team.html" class="dropdown-item">Team Member</a>
                </li>
                <li>
                  <a href="../elements/video.html" class="dropdown-item">Video</a>
                </li>
              </ul>
            </div>
          </div>

          <!-- menu #3 -->
          <div class="item_colume">
            <span class="sub_title">Typography</span>
            <div class="sub_nav_menu">
              <ul class="nav_meun">
                <li>
                  <a href="../elements/call-to-action.html" class="dropdown-item">Call to Action</a>
                </li>
                <li>
                  <a href="../elements/grid.html" class="dropdown-item">Grid</a>
                </li>
                <li>
                  <a href="../elements/heading.html" class="dropdown-item">Heading</a>
                </li>
                <li>
                  <a href="../elements/alert.html" class="dropdown-item">Alerts</a>
                </li>
                <li>
                  <a href="../elements/testimonial.html" class="dropdown-item">Testimonials</a>
                </li>
              </ul>
            </div>
          </div>

          <!-- menu #4 -->
          <div class="item_colume">
            <span class="sub_title">Basic</span>
            <div class="sub_nav_menu">
              <ul class="nav_meun">
                <li>
                  <a href="../elements/button.html" class="dropdown-item">Button</a>
                </li>
                <li>
                  <a href="../elements/contact-form.html" class="dropdown-item">Contact Form</a>
                </li>
                <li>
                  <a href="../elements/clients-logo.html" class="dropdown-item">Clients Logo</a>
                </li>
                <li>
                  <a href="../elements/social-networks.html" class="dropdown-item">Social
                    Networks</a>
                </li>
              </ul>
            </div>
          </div>

          <!-- menu #5 -->
          <div class="item_colume">
            <span class="sub_title">Infographic</span>
            <div class="sub_nav_menu">
              <ul class="nav_meun">
                <li>
                  <a href="../elements/countdown.html" class="dropdown-item">Countdown</a>
                </li>
                <li>
                  <a href="../elements/counter.html" class="dropdown-item">Counter</a>
                </li>
                <li>
                  <a href="../elements/iconbox.html" class="dropdown-item">Icon Box</a>
                </li>
                <li>
                  <a href="../elements/process.html" class="dropdown-item">Process</a>
                </li>
                <li>
                  <a href="../elements/services.html" class="dropdown-item">Service Box</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </li>

    <li class="nav-item dropdown dropdown-hover">
      <a class="nav-link dropdown-toggle dropdown_menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Blog

        <div class="icon_arrow">
          <i class="tio chevron_right"></i>
        </div>

      </a>
      <div class="dropdown-menu single-drop sm_dropdown" aria-labelledby="navbarDropdown">
        <ul class="dropdown_menu_nav">

          <li class="dropdown-submenu dropdown-hover"><a class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="#">
              Grid Layout
              <div class="icon_arrow">
                <i class="tio chevron_right"></i>
              </div>
            </a>
            <ul class="dropdown-menu sec-drop">
              <li><a class="dropdown-item" href="../blog/blog-classic.html">Blog: Classic</a></li>
              <li><a class="dropdown-item" href="../blog/blog-classic-three-columen.html">
                  Blog: Classic 3 Column</a></li>
              <li><a class="dropdown-item" href="../blog/blog-creative.html">Blog: Creative</a></li>
              <li><a class="dropdown-item" href="../blog/blog-standard.html">Blog: Standard</a></li>
            </ul>
          </li>

          <li class="dropdown-submenu dropdown-hover"><a class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="#">
              Single Post
              <div class="icon_arrow">
                <i class="tio chevron_right"></i>
              </div>
            </a>
            <ul class="dropdown-menu sec-drop">
              <li><a class="dropdown-item" href="single-blog.html">Creative</a></li>
              <li><a class="dropdown-item" href="single-featured-image.html">Featured Image</a></li>
              <li><a class="dropdown-item" href="single-background-color.html">Background Color</a>
              </li>
            </ul>
          </li>

        </ul>

      </div>
    </li>

    <li class="nav-item dropdown dropdown-hover">
      <a class="nav-link dropdown-toggle dropdown_menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Pages

        <div class="icon_arrow">
          <i class="tio chevron_right"></i>
        </div>

      </a>
      <div class="dropdown-menu single-drop sm_dropdown" aria-labelledby="navbarDropdown">
        <ul class="dropdown_menu_nav">

          <li class="dropdown-submenu dropdown-hover"><a class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="#">
              About
              <div class="icon_arrow">
                <i class="tio chevron_right"></i>
              </div>
            </a>
            <ul class="dropdown-menu sec-drop">
              <li><a class="dropdown-item" href="../about/about.html">About Us</a></li>
              <li><a class="dropdown-item" href="../about/about-2.html">Our Studio</a></li>
              <li><a class="dropdown-item" href="../about/about-3.html">Our Creative</a></li>
            </ul>
          </li>

          <li class="dropdown-submenu dropdown-hover"><a class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="#">
              Contact
              <div class="icon_arrow">
                <i class="tio chevron_right"></i>
              </div>
            </a>
            <ul class="dropdown-menu sec-drop">
              <li><a class="dropdown-item" href="../contact/contact-agency.html">Contact: Agency</a></li>
              <li><a class="dropdown-item" href="../contact/contact-blocks.html">Contact: Blocks</a></li>
              <li><a class="dropdown-item" href="../contact/contact-classic.html">Contact: Classic</a></li>
              <li><a class="dropdown-item" href="../contact/contact-corporate.html">Contact: Corporate</a>
              </li>
              <li><a class="dropdown-item" href="../contact/contact-simple.html">Contact: Simple</a></li>
              <li><a class="dropdown-item" href="../contact/contact-creative.html">Contact: Creative</a>
              </li>
            </ul>
          </li>

          <li class="dropdown-submenu dropdown-hover"><a class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="#">
              Account
              <div class="icon_arrow">
                <i class="tio chevron_right"></i>
              </div>
            </a>
            <ul class="dropdown-menu sec-drop">
              <li><a class="dropdown-item" href="../account/signin-2.html">Sign in 1</a></li>
              <li><a class="dropdown-item" href="../account/signin-3.html">Sign in 2</a></li>
              <li><a class="dropdown-item" href="../account/signup.html">Sign up 1</a></li>
              <li><a class="dropdown-item" href="../account/signup-2.html">Sign up 2</a></li>
              <li><a class="dropdown-item" href="../account/signup-3.html">Sign up 3</a></li>
              <li><a class="dropdown-item" href="../account/forgot-2.html">forgot 1</a></li>
              <li><a class="dropdown-item" href="../account/forgot-3.html">forgot 2</a></li>
            </ul>
          </li>

        </ul>

      </div>
    </li>

  </ul>
  <div class="nav_account btn_demo3">
    <a href="#Products" class="btn btn_sm_primary c-dark effect-letter rounded-8">
      Download
    </a>
  </div>
</div>
</nav>
<!-- End Navbar -->
</div>
<!-- end container -->
</header>
<!-- End header -->

<!-- Stat main -->
<main data-spy="scroll" data-target="#navbar-example2" data-offset="0">
  <!-- Start Banner Section -->
  <section class="demo_1 banner_section banner_demo8">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-5 order-2 order-lg-1">
          <div class="banner_title">
            <h1>
              Save Big On Every Order.
              <span class="c-purple">Join Rakon.</span>
            </h1>
            <p>
              Rakon. free deliveries. Reduced fees on eligible orders.
              Exclusive deals. Try Postmates Rakon now for
              <span class="c-aquamarine">free</span>, cancel anytime.
            </p>
            <div class="subscribe_phone">
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <input type="text" class="form-control rounded-8" placeholder="Enter your phone number" />
                  </div>
                  <div class="button--click">
                    <button type="button" class="btn btn_app btn_xl_primary scale c-gradient">
                      Get the app
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 mx-auto order-1 order-lg-1">
          <div class="ill_appMobile">
            <img class="ill_app" src="<?= $config->assets ?>/img/app/c_app.svg" />
            <img class="ill_bg" src="<?= $config->assets ?>/img/app/background.svg" />
            <img class="ill_user" src="<?= $config->assets ?>/img/app/user.svg" />
            <a href="#" class="btn btn_lg_primary effect-letter try_it bg-gold c-dark rounded-8">Try it free</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Banner -->

  <!-- Start Services -->
  <section class="services_section service_demo5 padding-t-12">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8 col-lg-6 text-center">
          <div class="title_sections">
            <div class="before_title">
              <span>Our</span>
              <span class="c-gold">Services</span>
            </div>
            <h2>Featured Service that We Provide</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 beta">
          <div class="items_serv" data-aos="fade-up" data-aos-delay="0">
            <div class="media">
              <div class="item-img">
                <img src="<?= $config->assets ?>/img/icons/Miso-soup.svg" alt="" />
              </div>
              <div class="media-body my-auto">
                <h3>Food delivery, now u can stay home and dig in.</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 beta">
          <div class="items_serv selected" data-aos="fade-up" data-aos-delay="100">
            <div class="media">
              <div class="item-img">
                <img src="<?= $config->assets ?>/img/icons/Direction.svg" alt="" />
              </div>
              <div class="media-body">
                <h3>We are Coming to you with delivery service.</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 beta">
          <div class="items_serv" data-aos="fade-up" data-aos-delay="200">
            <div class="media">
              <div class="item-img">
                <img src="<?= $config->assets ?>/img/icons/Thunder-white.svg" alt="" />
              </div>
              <div class="media-body">
                <h3>Fast and free delivery- open 24 hours.</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Services -->

  <!-- Start feature_app -->
  <section class="feature_app feature_demo2 margin-t-12 padding-t-12" id="Products">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-10 col-lg-6 text-center">
          <div class="title_sections">
            <div class="before_title">
              <span>Rakon.</span>
              <span class="c-gold">Products</span>
            </div>
            <h2>Start your experience with Rakon.</h2>
            <p>
              Duis aute irure dolor in reprehenderit in voluptate velit
              esse cillum dolore eu fugiat nulla pariatur.
            </p>
            <div class="z_apps">
              <a href="#" target="_blank" class="item__app bg_apple mb-3 mb-sm-0">
                <div class="media">
                  <i class="tio apple icon"></i>
                  <div class="media-body">
                    <div class="txt">
                      <span>Available on the</span>
                      <h4>App Store</h4>
                    </div>
                  </div>
                </div>
              </a>
              <a href="#" target="_blank" class="item__app bg_google">
                <div class="media">
                  <img class="icon" src="<?= $config->assets ?>/img/icons/google-play.svg" />
                  <div class="media-body">
                    <div class="txt">
                      <span>Get it on</span>
                      <h4>Google Play</h4>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row d-flex">
        <div class="col-md-6 col-lg-4 d-none d-sm-block order-1 order-sm-1">
          <div class="item_box item_one">
            <div class="img_bbo">
              <img src="<?= $config->assets ?>/img/app/01.png" />
            </div>
            <h3>Multigrain Hot Cereal</h3>
            <p class="c-blue">
              $14
            </p>
          </div>
          <div class="item_box item_two">
            <div class="img_bbo">
              <img src="<?= $config->assets ?>/img/app/02.png" />
            </div>
            <h3>Branch Special</h3>
            <p class="c-green">
              $27
            </p>
          </div>
          <div class="item_box item_three">
            <div class="img_bbo">
              <img src="<?= $config->assets ?>/img/app/03.png" />
            </div>
            <h3>French Crostini</h3>
            <p class="c-red">
              $22
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 order-3 order-sm-2" data-aos="fade-up" data-aos-delay="0">
          <div class="app_mobile">
            <img class="apoo" src="<?= $config->assets ?>/img/app/app.png" />
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-none d-sm-block order-2 order-sm-3">
          <div class="item_box item_four">
            <div class="img_bbo">
              <img src="<?= $config->assets ?>/img/app/04.png" />
            </div>
            <h3>Fried Egg Sandwich</h3>
            <p class="c-aquamarine">
              $25
            </p>
          </div>
          <div class="item_box item_five">
            <div class="img_bbo">
              <img src="<?= $config->assets ?>/img/app/05.png" />
            </div>
            <h3>Branch Special</h3>
            <p class="c-blue">
              $14
            </p>
          </div>
          <div class="item_box item_six">
            <div class="img_bbo">
              <img src="<?= $config->assets ?>/img/app/06.png" />
            </div>
            <h3>Lemon Yogurt Parfait</h3>
            <p class="c-orange">
              $29
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End. feature_app -->

  <!-- Start logos 3 -->
  <section class="logos_section logos_demo3 padding-py-5 text-center">
    <div class="container">
      <h3 class="margin-b-4">
        Trusted by content creators across the world
      </h3>
      <div class="row justify-content-md-center">
        <div class="col-md-12">
          <div class="items_loog">
            <div class="item-client mb-3 mb-lg-0">
              <img width="130" src="<?= $config->assets ?>/img/logos/j1.png" alt="" />
            </div>
            <div class="item-client mb-3 mb-lg-0">
              <img width="130" src="<?= $config->assets ?>/img/logos/w1.png" alt="" />
            </div>
            <div class="item-client mb-3 mb-lg-0">
              <img width="130" src="<?= $config->assets ?>/img/logos/o1.png" alt="" />
            </div>
            <div class="item-client mb-3 mb-lg-0">
              <img width="130" src="<?= $config->assets ?>/img/logos/h1.png" alt="" />
            </div>
            <div class="item-client mb-3 mb-lg-0">
              <img width="130" src="<?= $config->assets ?>/img/logos/n1.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div id="trigger2"></div>
  <!-- Section Service -->
  <section class="serv_app padding-t-12">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 mb-4 mb-lg-0">
          <div class="amo_pic">
            <img id="animate2" src="<?= $config->assets ?>/img/app/s10-ss0.png" />
          </div>
        </div>
        <div class="col-lg-5 my-auto mx-auto">
          <div class="title_sections mb-0">
            <div class="before_title">
              <span>Save</span>
              <span class="c-gold">Money</span>
            </div>
            <h2>Save big on every order. Join Orino.</h2>
            <p>
              Unlimited free deliveries. Reduced fees on eligible
              orders. Exclusive deals. Try Postmates Unlimited now for
              free, cancel anytime.
            </p>
            <a href="#" class="btn btn_lg_primary effect-letter rounded-8 margin-t-4 bg-gold c-dark">
              Try it free</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End. serv_app -->

  <div id="trigger3"></div>
  <!-- Section Service -->
  <section class="serv_app padding-t-12">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 my-auto order-2 order-lg-1">
          <div class="title_sections mb-0">
            <div class="before_title">
              <span>Google</span>
              <span class="c-gold">Map</span>
            </div>
            <h2>Order from local favorites near you.</h2>
            <p>
              Whatever you want, we get it. Order delivery for yourself
              or with friends and watch in real-time as your Postmate
              brings you all the things you love.
            </p>
            <div class="app_smartphone margin-t-4">
              <div class="btn--app mb-3 d-block">
                <a class="media" href="#" target="_blank">
                  <div class="icon dark">
                    <i class="tio apple"></i>
                  </div>
                  <div class="media-body txt">
                    <div>
                      <span class="c-light">Download</span>
                    </div>
                    <h4 class="c-dark">App Store</h4>
                  </div>
                </a>
              </div>
              <div class="btn--app">
                <a class="media" href="#" target="_blank">
                  <div class="icon blue">
                    <img width="20" src="<?= $config->assets ?>/img/icons/google-play.svg" />
                  </div>
                  <div class="media-body txt">
                    <div>
                      <span class="c-light">Download</span>
                    </div>
                    <h4 class="c-dark">App Store</h4>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 mx-auto mb-4 mb-lg-0 order-1 order-lg-1">
          <div class="amo_pic">
            <img id="animate3" src="<?= $config->assets ?>/img/app/s10-ss03.png" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End. serv_app -->

  <!-- feature_dem3 -->
  <section class="feature_dem3 padding-t-12 margin-t-12" id="Features">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-8 col-lg-6">
          <div class="title_sections">
            <div class="before_title">
              <span>Our</span>
              <span class="c-gold">Features</span>
            </div>
            <h2>Why you choose our app</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 Oitem margin-b-5">
          <div class="item_feth" data-aos="fade-up" data-aos-delay="0">
            <div class="media">
              <div class="icon_fr">
                <img src="<?= $config->assets ?>/img/icons/Dial-numbers.svg" />
              </div>
              <div class="media-body">
                <div class="za_tzt">
                  <h3>App Development</h3>
                  <p>
                    Get your proof tests delivered home collect a sample
                    from the news get design.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 Oitem margin-b-5">
          <div class="item_feth" data-aos="fade-up" data-aos-delay="100">
            <div class="media">
              <div class="icon_fr">
                <img src="<?= $config->assets ?>/img/icons/Crown.svg" />
              </div>
              <div class="media-body">
                <div class="za_tzt">
                  <h3>10 Times Award</h3>
                  <p>
                    Get your proof tests delivered home collect a sample
                    from the news get design.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 Oitem margin-b-5">
          <div class="item_feth" data-aos="fade-up" data-aos-delay="200">
            <div class="media">
              <div class="icon_fr">
                <img src="<?= $config->assets ?>/img/icons/Cloud-upload.svg" />
              </div>
              <div class="media-body">
                <div class="za_tzt">
                  <h3>Cloud Storage</h3>
                  <p>
                    Get your proof tests delivered home collect a sample
                    from the news get design.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 Oitem">
          <div class="item_feth" data-aos="fade-up" data-aos-delay="0">
            <div class="media">
              <div class="icon_fr">
                <img src="<?= $config->assets ?>/img/icons/Settings-white.svg" />
              </div>
              <div class="media-body">
                <div class="za_tzt">
                  <h3>Customization</h3>
                  <p>
                    Get your proof tests delivered home collect a sample
                    from the news get design.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 Oitem">
          <div class="item_feth" data-aos="fade-up" data-aos-delay="100">
            <div class="media">
              <div class="icon_fr">
                <img src="<?= $config->assets ?>/img/icons/Pen&ruller.svg" />
              </div>
              <div class="media-body">
                <div class="za_tzt">
                  <h3>UX Planning</h3>
                  <p>
                    Get your proof tests delivered home collect a sample
                    from the news get design.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 Oitem">
          <div class="item_feth" data-aos="fade-up" data-aos-delay="200">
            <div class="media">
              <div class="icon_fr">
                <img src="<?= $config->assets ?>/img/icons/Headphones-white.svg" />
              </div>
              <div class="media-body">
                <div class="za_tzt">
                  <h3>Customer Support</h3>
                  <p>
                    Get your proof tests delivered home collect a sample
                    from the news get design.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End. feature_dem3 -->

  <!-- Start FAQ -->
  <section class="faq_demo2 faq_demo4 padding-t-12" id="FAQ">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8 col-lg-6 text-center">
          <div class="title_sections">
            <div class="before_title">
              <span>Frequently Asked</span>
              <span class="c-gold">Questions</span>
            </div>
            <h2>Want to ask something <br />from us?</h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div class="col-md-10 col-lg-5 pr-lg-5">
          <div class="item_list">
            <h4>
              <span class="hline"></span>How do I make a yearly payment?
            </h4>
            <p>
              Serenity Is Multi-Faceted Blockchain Based Ecosystem,
              Energy Retailer For The People, Focusing On The Promotion
              Of Sustainable Living, Renewable Energy Production And
              Smart Energy Grid Utility Services.
            </p>
          </div>
          <div class="item_list">
            <h4>How do I make a yearly payment?</h4>
            <p>
              Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit
              Esse Cillum Dolore Eu Fugiat Nulla Pariatur.
            </p>
          </div>
          <div class="item_list">
            <h4>How this technology works?</h4>
            <p>
              Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit
              Esse Cillum Dolore Eu Fugiat Nulla Pariatur.
            </p>
          </div>
        </div>
        <div class="col-md-10 col-lg-5">
          <div class="item_list">
            <h4>How to contact with Customer Service?</h4>
            <p>
              Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit
              Esse Cillum Dolore Eu Fugiat Nulla Pariatur.
            </p>
          </div>
          <div class="item_list">
            <h4>Website reponse taking time, how to improve?</h4>
            <p>
              Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit
              Esse Cillum Dolore Eu Fugiat Nulla Pariatur.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End FAQ -->

  <!-- Start Statistic -->
  <section class="padding-t-12 section_state state_demo2" id="Statistic">
    <!-- particle background -->
    <div id="particles-js"></div>
    <div class="container">
      <div id="triggerBlur"></div>
      <div class="row justify-content-center text-center">
        <div class="col-md-8 col-lg-6">
          <div class="title_sections">
            <div class="before_title">
              <span>Clients</span>
              <span class="c-gold">Trust</span>
            </div>
            <h2>Trust us and feel free to try our service</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="bb_qgency_state">
            <div class="number_state">
              <div class="txt">
                185 000
              </div>
            </div>
            <div class="blur_item"></div>
            <div class="content_state">
              <div class="row justify-content-md-center">
                <div class="col-md-2">
                  <div class="it__em">
                    <div class="icon">
                      <img src="<?= $config->assets ?>/img/icons/1f469.png" />
                    </div>
                    <div class="info_txt">
                      <h4>25 000</h4>
                      <p>
                        Followers from all countries of the world
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="it__em">
                    <div class="icon">
                      <img src="<?= $config->assets ?>/img/icons/2665.png" />
                    </div>
                    <div class="info_txt">
                      <h4>130 000</h4>
                      <p>
                        Likes and encouragement
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="it__em">
                    <div class="icon">
                      <img src="<?= $config->assets ?>/img/icons/1f58c.png" />
                    </div>
                    <div class="info_txt">
                      <h4>7 200</h4>
                      <p>
                        Agency designs from 2012
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="it__em">
                    <div class="icon">
                      <img src="<?= $config->assets ?>/img/icons/1f647-2640.png" />
                    </div>
                    <div class="info_txt">
                      <h4>15 320</h4>
                      <p>
                        Discussions and business requests
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="users_profile">
              <img src="<?= $config->assets ?>/img/persons/02.png" />
              <img src="<?= $config->assets ?>/img/persons/03.png" />
              <img src="<?= $config->assets ?>/img/persons/05.png" />
              <img src="<?= $config->assets ?>/img/persons/15.png" />
              <img src="<?= $config->assets ?>/img/persons/08.png" />
              <img src="<?= $config->assets ?>/img/persons/06.png" />
              <img src="<?= $config->assets ?>/img/persons/01.png" />
            </div>
            <div class="link_state">
              <a href="#" class="btn btn_xl_primary btn_join bg-gold c-dark effect-letter rounded-8 mb-3 mb-sm-0">
                Join The Agency</a>
              <a href="#" class="btn btn_xl_primary btn_touch rounded-8">
                <img src="<?= $config->assets ?>/img/icons/1f607.png" />
                Get a touch
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>