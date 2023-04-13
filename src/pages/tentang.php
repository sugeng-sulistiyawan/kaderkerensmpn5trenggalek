<?php

use app\Config;

$config = new Config();

?>

<!-- Start banner_about -->
<section class="pt_banner_inner banner_px_image" id="Discover">
  <div class="parallax_cover">
    <img class="cover-parallax" src="<?= $config->assets ?>/img/inner/about.jpg" alt="image">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-lg-6">
        <div class="banner_title_inner c-white">
          <h1 data-aos="fade-up" data-aos-delay="0">
            Tentang Kami
          </h1>
          <p data-aos="fade-up" data-aos-delay="100" class="banner_title_inner c-yollow">
            KADEr KEREN - SMP Negeri 5 Trenggalek
          </p>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- End banner_about -->

<!-- Start about_cc_grid -->
<section class="about_cc_grid padding-py-12" id="About">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="title_sections_inner mb-0">
          <div class="before_title">
            <span class="c-orange-red">About Us</span>
          </div>
          <h2>We're Rakon, a creative studio that loves to learn, collaborate, and create.</h2>
        </div>
      </div>
      <div class="col-lg-6 ml-auto">
        <div class="title_sections_inner mb-0">
          <p>Hi! We Are Annette Collier And Francis Ericksen, Two Individuals With A Passion For Creativity —
            Creativity Makes Us Happy. We Truly Believe In The Transformative Power Of Illustration And Design
            And Their Ability To Simplify Communications, Elevate Experiences, Engage And Inspire People
            Everywhere.
            <br>
            <br>
            Good Design And Good Relationships Come From Collaboration. We're Excited To Start A Visual
            Dialogue, Learn About You, And Make Something Beautiful Together.
          </p>
        </div>
      </div>
    </div>

    <div class="row justify-content-center margin-t-12" data-aos="fade-up" data-aos-delay="0">
      <div class="col-lg-5 text-right">
        <div class="group_img">
          <img src="<?= $config->assets ?>/img/inner/a01.png" alt="">
          <img src="<?= $config->assets ?>/img/inner/a03.png" alt="">
        </div>
      </div>
      <div class="col-lg-7 text-left">
        <div class="group_img_two">
          <img src="<?= $config->assets ?>/img/inner/a02.png" alt="">
          <img src="<?= $config->assets ?>/img/inner/a04.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End. about_cc_grid -->

<!-- Start group_logo_list -->
<section class="group_logo_list margin-b-12" data-aos="fade-up" data-aos-delay="0">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 my-auto">
        <div class="title_section mb-0">
          <p>Trusted by content creators across the world</p>
        </div>
      </div>
      <div class="col-lg-9 ml-auto my-auto">
        <div class="item_tto">
          <img src="<?= $config->assets ?>/img/logos/uber.png" alt="">
          <img src="<?= $config->assets ?>/img/logos/netflix.png" alt="">
          <img src="<?= $config->assets ?>/img/logos/google.png" alt="">
          <img src="<?= $config->assets ?>/img/logos/aust.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End. group_logo_list -->

<!-- Start features__workspace -->
<section class="service__workspace features__workspace padding-py-12" id="Services">
  <div class="container">

    <div class="row">
      <div class="col-md-8 col-lg-4">
        <div class="title_sections_inner mb-0">
          <div class="before_title">
            <span class="c-orange-red">Our Promise</span>
          </div>
          <h2>Leading with our guiding principles</h2>
          <p> Rakon was developed to automate these everyday tasks and help other coworking spaces to run
            effortlessly.
          </p>
          <a href="" class="btn btn_md_primary sweep_top sweep_letter bg-orange-red c-white rounded-8">
            <div class="inside_item">
              <span data-hover="Welcome !">Join us now</span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-6 ml-auto mt-4 mt-lg-0">
        <div class="row">
          <div class="col-md-6 fa_item">
            <div class="inside__zoop" data-aos="fade-up" data-aos-delay="0">
              <div class="media">
                <div class="ico">
                  <i class="tio dashboard_outlined"></i>
                </div>
                <div class="media-body">
                  <div class="t_xt">
                    <h4>We Commit To Our Craft.</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 fa_item">
            <div class="inside__zoop" data-aos="fade-up" data-aos-delay="100">
              <div class="media">
                <div class="ico">
                  <i class="tio face_id"></i>
                </div>
                <div class="media-body">
                  <div class="t_xt">
                    <h4>We Dig Deeper In Workspace</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 fa_item">
            <div class="inside__zoop" data-aos="fade-up" data-aos-delay="200">
              <div class="media">
                <div class="ico">
                  <i class="tio account_square_outlined"></i>
                </div>
                <div class="media-body">
                  <div class="t_xt">
                    <h4>We Minimize Waste.</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 fa_item">
            <div class="inside__zoop" data-aos="fade-up" data-aos-delay="300">
              <div class="media">
                <div class="ico">
                  <i class="tio file_text_outlined"></i>
                </div>
                <div class="media-body">
                  <div class="t_xt">
                    <h4>We Lead With Optimism.</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 fa_item">
            <div class="inside__zoop" data-aos="fade-up" data-aos-delay="400">
              <div class="media">
                <div class="ico">
                  <i class="tio credit_card_outlined"></i>
                </div>
                <div class="media-body">
                  <div class="t_xt">
                    <h4>We Embrace Differences.</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>
<!-- End. features__workspace -->

<!-- Start faq_one_inner -->
<section class="faq_one_inner mt-0 w-100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="features_points mb-4 mb-lg-0">
          <div class="title_sections_inner">
            <h2>With Rakon you can</h2>
          </div>
          <ul class="list-group list_feat">
            <li class="list-group-item border-0" data-aos="fade-up" data-aos-delay="0">
              <i class="tio checkmark_circle_outlined"></i>
              <p>
                Focus critical developer resources on your core business
              </p>
            </li>
            <li class="list-group-item border-0" data-aos="fade-up" data-aos-delay="100">
              <i class="tio checkmark_circle_outlined"></i>
              <p>
                Launch new products faster with less payments code
              </p>
            </li>
            <li class="list-group-item border-0" data-aos="fade-up" data-aos-delay="200">
              <i class="tio checkmark_circle_outlined"></i>
              <p>
                Improve conversion from international customers
              </p>
            </li>
          </ul>
        </div>
        <div class="information__contact mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
          <div class="media">
            <div class="icon">
              <i class="tio support_vs c-orange"></i>
            </div>
            <div class="media-body my-auto">
              <div class="txt">
                <h4>Technical or account support</h4>
                <p>We're here to help! If you have technical issues,
                  <a href="#" class="c-green2">contact support</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 ml-auto">
        <!-- block Collapse -->
        <div class="faq_section faq_demo3 faq_with_icon">
          <div class="block_faq">
            <div class="accordion" id="accordionExample">
              <div class="card" data-aos="fade-up" data-aos-delay="0">
                <div class="card-header active" id="headingOne">
                  <h3 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      How do I make a yearly payment?
                    </button>
                  </h3>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    <p class="mb-0">
                      Serenity Is Multi-Faceted Blockchain Based
                      Ecosystem, Energy Retailer For The People,
                      Focusing On The Promotion Of Sustainable Living,
                      Renewable Energy Production And Smart Energy
                      Grid Utility Services.
                    </p>
                  </div>
                </div>
              </div>
              <div class="card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-header" id="headingTwo">
                  <h3 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      How this technology works?
                    </button>
                  </h3>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    <p>
                      Serenity Is Multi-Faceted Blockchain Based
                      Ecosystem, Energy Retailer For The People,
                      Focusing On The Promotion Of Sustainable Living,
                      Renewable Energy Production And Smart Energy
                      Grid Utility Services.
                    </p>
                  </div>
                </div>
              </div>
              <div class="card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-header" id="headingThree">
                  <h3 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      What is the comunity benefit?
                    </button>
                  </h3>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    <p>
                      We Aim To Become The Incubator For New Renewable
                      Energy-Related Projects By Using The Power Of
                      Crowd.
                    </p>
                  </div>
                </div>
              </div>
              <div class="card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-header" id="headingFour">
                  <h3 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      What is the comunity benefit?
                    </button>
                  </h3>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                  <div class="card-body">
                    <p>
                      We Aim To Become The Incubator For New Renewable
                      Energy-Related Projects By Using The Power Of
                      Crowd.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End. faq_one_inner -->

<!-- Start team_overlay_style -->
<section class="team_overlay_style margin-b-7">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="title_sections_inner margin-b-5">
          <h2>People who work at Rakon share the vision of our community.</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3">
        <div class="item_group" data-aos="fade-up" data-aos-delay="0">
          <div class="image_ps">
            <img src="<?= $config->assets ?>/img/persons/17.jpg" alt="">
          </div>
          <div class="share_soisal">
            <a href="">
              <i class="tio instagram"></i>
            </a>
            <a href="">
              <i class="tio twitter"></i>
            </a>
            <a href="">
              <i class="tio messenger_outlined"></i>
            </a>
          </div>
          <div class="content_txt">
            <h3>Christopher L. Belle</h3>
            <p>Co-Founder & CEO</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="item_group" data-aos="fade-up" data-aos-delay="100">
          <div class="image_ps">
            <img src="<?= $config->assets ?>/img/persons/20.jpg" alt="">
          </div>
          <div class="share_soisal">
            <a href="">
              <i class="tio instagram"></i>
            </a>
            <a href="">
              <i class="tio twitter"></i>
            </a>
            <a href="">
              <i class="tio messenger_outlined"></i>
            </a>
          </div>
          <div class="content_txt">
            <h3>CLee Carter </h3>
            <p>Managing Partner</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="item_group" data-aos="fade-up" data-aos-delay="200">
          <div class="image_ps">
            <img src="<?= $config->assets ?>/img/persons/19.jpg" alt="">
          </div>
          <div class="share_soisal">
            <a href="">
              <i class="tio instagram"></i>
            </a>
            <a href="">
              <i class="tio twitter"></i>
            </a>
            <a href="">
              <i class="tio messenger_outlined"></i>
            </a>
          </div>
          <div class="content_txt">
            <h3>Mary Merrill </h3>
            <p>Operations Director</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="item_group" data-aos="fade-up" data-aos-delay="300">
          <div class="image_ps">
            <img src="<?= $config->assets ?>/img/persons/22.jpg" alt="">
          </div>
          <div class="share_soisal">
            <a href="">
              <i class="tio instagram"></i>
            </a>
            <a href="">
              <i class="tio twitter"></i>
            </a>
            <a href="">
              <i class="tio messenger_outlined"></i>
            </a>
          </div>
          <div class="content_txt">
            <h3>John Myers </h3>
            <p>Operations Director</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="item_group" data-aos="fade-up" data-aos-delay="0">
          <div class="image_ps">
            <img src="<?= $config->assets ?>/img/persons/16.png" alt="">
          </div>
          <div class="share_soisal">
            <a href="">
              <i class="tio instagram"></i>
            </a>
            <a href="">
              <i class="tio twitter"></i>
            </a>
            <a href="">
              <i class="tio messenger_outlined"></i>
            </a>
          </div>
          <div class="content_txt">
            <h3>Christopher L. Belle</h3>
            <p>Co-Founder & CEO</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="item_group" data-aos="fade-up" data-aos-delay="100">
          <div class="image_ps">
            <img src="<?= $config->assets ?>/img/persons/18.png" alt="">
          </div>
          <div class="share_soisal">
            <a href="">
              <i class="tio instagram"></i>
            </a>
            <a href="">
              <i class="tio twitter"></i>
            </a>
            <a href="">
              <i class="tio messenger_outlined"></i>
            </a>
          </div>
          <div class="content_txt">
            <h3>CLee Carter </h3>
            <p>Managing Partner</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="item_group" data-aos="fade-up" data-aos-delay="200">
          <div class="image_ps">
            <img src="<?= $config->assets ?>/img/persons/23.jpg" alt="">
          </div>
          <div class="share_soisal">
            <a href="">
              <i class="tio instagram"></i>
            </a>
            <a href="">
              <i class="tio twitter"></i>
            </a>
            <a href="">
              <i class="tio messenger_outlined"></i>
            </a>
          </div>
          <div class="content_txt">
            <h3>Mary Merrill </h3>
            <p>Operations Director</p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 my-auto mx-auto" data-aos="fade-up" data-aos-delay="200">
        <p class="font-s-20 c-dark font-w-600">You'll work with creative people.</p>
        <a href="" class="btn btn_md_primary sweep_top sweep_letter bg-orange-red c-white rounded-8">
          <div class="inside_item">
            <span data-hover="Welcome !">Join us now</span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- End. team_overlay_style -->