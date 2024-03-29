<?php /*Template Name:Chnages and Adoption */
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

<body>
  <div class="wrapper">
    <?php include_once 'inc/nav.php' ?>
    <div class="empty-div"></div>

    <main>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div id="modal_cnt">
              <div class="modal_scrl ">

                <div class="modal-header p-sm-0">
                  <h1 class="modal-title fs-5 my-md-4 modal_h1 pt-md-5" id="exampleModalLabel">How can we help you?</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                 <?php echo do_shortcode( '[contact-form-7 id="7" title="Contact form 1"]');?> 

                </div>
              </div>
              <div class="modal-footer d-md-block d-none">
                <h4 class="mb-4">Contact Information</h4>
                <div class="row g-0 align-items-end">
                  <div class="col-md-4">
                    <h6>Headquarters:
                      110 Allen Road,Basking Ridge,NJ 07920</h6>
                  </div>
                  <div class="col-md-4 ps-4">
                    <h6>Phone <a href="javascript:void(0);">+1-877-264-6424</a></h6>
                  </div>
                  <div class="col-md-4">
                    <h6>Email<a href="javascript:void(0);"> info@cognixia.com</a></h6>
                  </div>
                </div>
              </div>
            </div>
            <div id="successfull_msg" class="successfull_msg">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="row">
                <div class="col-md-5">
                  <div class=" success_lft position-relative"
                    style="background-image: url(../dist/img/icons/modal_successlft.svg);background-repeat: no-repeat;border-bottom-left-radius:16px;border-top-left-radius:16px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/success_arrw.webp"
                      class="img-fluid" alt="">
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="success_rght text-center">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icons/success_tick.png"
                      class="mb-4" alt="check-img">
                    <h1 class="modal_h1 success_h1">Perfect. <br>
                      We will be in touch soon.</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!--01-->
      <section class="cog-banner cog-bg-info">
        <div class="cog-banner__figwrap ms-auto"><img class="cog-img-blendmode cogximg650"
            src="<?php echo get_field('banner_section_image'); ?>" alt="Banner"></div>
        <div class="cog-bg-gradient cog-bg-gradient--pri"></div>
        <!--Banner content-->
        <div class="cog-banner-content cog-vr-flexcenter">
          <div class="container cog-banner-content__container">
            <div class="row">
              <div class="col-12 col-lg-8 col-xl-7 col-xxl-6 me-auto offset-xl-1"><span class="cog-leadtitle mb-3">
                  <?php echo get_field('banner_section_short__heading'); ?>
                </span>
                <h1 class="h1 fw-normal mb-3 mb-md-4">
                  <?php echo get_field('banner_section_thin_heading'); ?><small
                    class="cog-txt-muted fs-64 fw-xbold me-1">
                    <?php echo get_field('banner_section_thick_heading'); ?>
                  </small>
                </h1>
                <?php
                $link = get_field('banner_section_button');
                if ($link):
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                  <a class="cog-btn cog-btn--white mb-4" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>

                <p class="cog-lead fs-24 text-white pt-2">
                  <?php echo get_field('banner_section_short_description'); ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--02-->
      <section class="section-padding100 cog-bg-primary">
        <div class="container">
          <div class="row text-center section-padding80 pt-0 mb-md-4">
            <div class="col-12 col-lg-10 col-xl-8 mx-auto">
              <h2 class="fw-bold mb-md-4">
                <?php echo get_field('change_management_heading'); ?>
              </h2>
              <p class="px-md-4">
                <?php echo get_field('change_management_description'); ?>
              </p>
            </div>
          </div>
          <div class="row gx-3">
            <?php if (have_rows('change_management_section_repeater')):
              while (have_rows('change_management_section_repeater')):
                the_row(); ?>

                <div class="col-md-3">
                  <div class="cog-card cog-card-h240 bg-white text-center">
                    <div class="cog-card__figwrap">
                      <div class="cog-circle-lg cog-flexcenter mx-auto"><img
                          src="<?php echo get_sub_field('change_management_repeater_logo'); ?>" alt="Lacking icon"></div>
                    </div>
                    <div class="cog-card__body">
                      <p class="fs-24 cog-clr-secondary">
                        <?php echo get_sub_field('change_management_repeater_content'); ?>
                      </p>
                    </div>
                  </div>
                </div>
              <?php endwhile; endif; ?>

          </div>
        </div>
      </section>
      <!--02-->
      <section class="section-padding100 position-relative">
        <div class="cog-bg-shape cog-bg-shape--top"></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-10 mx-auto text-center mb-md-5 pb-md-4">
              <h3 class="h3 fw-bold mb-2 mb-md-4">
                <?php echo get_field('we_help_you_section_heading'); ?>
              </h3>
            </div>
            <div class="col-12 col-lg-10 mx-auto">
              <!-- card1-->
              <?php $q = 0;
              while (have_rows('we_help_you_section_repeater')) {
                the_row();
                if ($q % 2 == 0) {
                  //echo $q;
                  ?>
                  <div class="row cog-card-vr cog-flexcenter">
                    <div class="col-md-5 col-lg-5"><img class="cog-imgfit cog-rounded-reg w-100"
                        src="<?php echo get_sub_field('we_help_you_section_repeater_image'); ?>" alt="Effort figure"></div>
                    <div class="col-md-6 col-lg-7">
                      <div class="cog-card-vr__body">
                        <h4 class="h4 fw-bold mb-2 mb-md-4">
                          <?php echo get_sub_field('we_help_you_section_repeater_heading'); ?>
                        </h4>
                        <p>
                          <?php echo get_sub_field('we_help_you_section__repeater_content'); ?>
                        </p>
                      </div>
                    </div>
                  </div>
                <?php } else { ?>
                  <!-- card2-->
                  <div class="row cog-card-vr cog-flexcenter">
                    <div class="col-md-6 col-lg-7">
                      <div class="cog-card-vr__body text-end">
                        <h4 class="h4 fw-bold mb-2 mb-md-4">
                          <?php echo get_sub_field('we_help_you_section_repeater_heading'); ?>
                        </h4>
                        <p>
                          <?php echo get_sub_field('we_help_you_section__repeater_content'); ?>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-5 col-lg-5"><img class="cog-imgfit cog-rounded-reg w-100"
                        src="<?php echo get_sub_field('we_help_you_section_repeater_image'); ?>" alt="Effort figure"></div>
                  </div>
                <?php }
                $q++;
              } ?>
              <!-- card3-->

            </div>
          </div>
        </div>
        <div class="cog-patter-dotline cog-patter-dotline--btm"><img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/patterns/vector-double-bend-line.svg"
            alt="Dotted line"></div>
      </section>
      <!--IT-->
      <?php include_once 'inc/ReadyTransform.php'; ?>
    </main>

    </main>




  </div>
  <?php include_once 'footer.php'; ?>
</body>

</html>