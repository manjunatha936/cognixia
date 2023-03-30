<?php /*Template Name:Jump*/
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
                    <div class="col-md-4"><h6><?php echo ot_get_option('contact_information_headquaters') ?></h6></div>
                    <div class="col-md-4 ps-4"><h6>Phone <a href="<?php echo ot_get_option('contact_form_footer_phone_link') ?>"><?php echo ot_get_option('contact_form_footer_no') ?></a></h6></div>
                    <div class="col-md-4"><h6>Email<a href="<?php echo ot_get_option('contact_form_footer_Email_link') ?>"><?php echo ot_get_option('contact_form_footer_Email') ?></a></h6></div>
                  </div>
                </div>
            </div>
            <div id="successfull_msg" class="successfull_msg">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="row">
                    <div class="col-md-5" >
                        <div class=" success_lft position-relative"style="background-image: url(../dist/img/icons/modal_successlft.svg);background-repeat: no-repeat;border-bottom-left-radius:16px;border-top-left-radius:16px;">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/success_tick.webp" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="success_rght text-center">

                            <img src="<?php echo get_template_directory_uri();?>/assets/img/icons/success_tick.png" class="mb-4" alt="check-img">
                           <h1 class="modal_h1 success_h1">Perfect. <br>
                            We will be in touch soon.</h1>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          
        </div>
      <!--Banner-->
      <section class="cog-banner cog-bg-info">
        <div class="cog-banner__figwrap ms-auto"><img class="cog-img-blendmode cogximg650"
            src="<?php echo get_field('banner_section_baground_image'); ?>" alt="Banner"></div>
        <div class="cog-bg-gradient cog-bg-gradient--pri"></div>
        <!--Banner content-->
        <div class="cog-banner-content cog-vr-flexcenter">
          <div class="container cog-banner-content__container">
            <div class="row">
              <div class="col-12 col-md-7 col-xl-6 me-auto offset-md-1"><img class="mb-2 mb-md-4"
                  src="<?php echo get_field('banner_section_logo'); ?>" alt="Jump illustyration">
                <h1 class="h1 fw-normal mb-3 mb-md-4">
                  <?php echo get_field('banner_section_thin_heading'); ?> <small class="cog-txt-muted fw-bold me-1">
                    <?php echo get_field('banner_section_dark_heading'); ?>
                  </small>of <small class="cog-txt-muted fw-bold">
                    <?php echo get_field('banner_section_dark_heading_one'); ?>
                  </small>
                </h1>
                <?php
                $link = get_field('banner_section_button');
                if ($link):
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                  <!-- href="javascript:void(0);" -->
                  <a class="cog-btn cog-btn--white" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- We are best-->
      <section class="section-padding100 position-relative">
        <div class="cog-bg-shape cog-bg-shape--top"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 mx-auto text-center mb-md-5 pb-md-4">
              <h3 class="h3 fw-bold mb-2 mb-md-4">
                <?php echo get_field('jump_section_heading'); ?>
              </h3>
              <p class="cog-lead">
                <?php echo get_field('jump_section_description'); ?>
              </p>
            </div>
            <div class="col-12 col-lg-10 mx-auto">
              <!-- card1-->
              <?php $q = 0;
              while (have_rows('jump_section_repeater')) {
                the_row();
                if ($q % 2 == 0) {
                  echo $q;
                  ?>
                  <div class="row cog-card-vr cog-flexcenter">
                    <div class="col-md-6">
                      <img class="cog-imgfit cog-rounded-reg w-100"
                        src="<?php echo get_sub_field('jump_diff_section_image'); ?>" alt="Effort figure">
                    </div>
                    <div class="col-md-6">
                      <div class="cog-card-vr__body">
                        <h4 class="h4 fw-bold mb-2 mb-md-4">
                          <?php echo get_sub_field('jump_diff_section_heading'); ?>
                        </h4>
                        <p>
                          <?php echo get_sub_field('jump_diff_section_description'); ?>
                        </p>
                      </div>
                    </div>
                  </div>
                <?php } else { ?>
                  <!-- card2-->
                  <div class="row cog-card-vr cog-flexcenter">
                    <div class="col-md-6">
                      <div class="cog-card-vr__body text-end">
                        <h4 class="h4 fw-bold mb-2 mb-md-4">
                          <?php echo get_sub_field('jump_diff_section_heading'); ?>
                        </h4>
                        <p>
                          <?php echo get_sub_field('jump_diff_section_description'); ?>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <img class="cog-imgfit cog-rounded-reg w-100"
                        src="<?php echo get_sub_field('jump_diff_section_image'); ?>" alt="Effort figure">
                    </div>
                  </div>
                  <!-- card3-->
                <?php }
                $q++;
              } ?>
              <!-- <div class="row cog-card-vr cog-flexcenter">
                <div class="col-md-5"><img class="cog-imgfit cog-rounded-reg w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/jump/difference/low-effort.webp" alt="Effort figure"></div>
                <div class="col-md-6">
                  <div class="cog-card-vr__body">
                    <h4 class="h4 fw-bold mb-2 mb-md-4">Global Scale</h4>
                    <p>Global scale that brings a depth & breadth of expertise with over 4,000 expert educators in our global network, we offer both depth and breadth of learning capabilities across the most highly demanded skills and competencies.</p>
                  </div>
                </div>
              </div> -->

            </div>
          </div>
        </div>
        <div class="cog-patter-dotline">
          <div class="cog-patter-dotline__figure"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/patterns/vector-bend-line.svg"
              alt="Dotted line"></div>
        </div>
      </section>
      <!--IT-->
      <section class="py-md-5 my-md-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="cog-heropanel cog-bg-gradient--pri cog-rounded-reg text-white">
                <div class="cog-w-750 mw-100 mx-auto cog-heropanel__cnt text-center">
                  <h3 class="h3 fw-bold mb-3 mb-md-4 pb-2-md-0">
                    <?php echo get_field('ready_to_transform_heading'); ?>
                  </h3>
                  <?php
                  $link = get_field('ready_to_transform_button');
                  if ($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="cog-btn cog-btn--white mx-auto" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                  <?php endif; ?>
                </div>
                <!-- Image pattern-->
                <div class="cog-pattern-figwrap --left">
                  <div class="cog-pattern-fig bottom-0 start-0"><img class="cogximg198 max-h-100"
                      src="<?php echo get_field('ready_to_transform_image'); ?>" alt="Pattern figure"></div>
                </div>
                <div class="cog-pattern-figwrap">
                  <div class="cog-pattern-fig bottom-0 end-0"><img class="cogximgh330 max-h-100"
                      src="<?php echo get_template_directory_uri(); ?>/assets/img/riple-waves.svg" alt="Ripple wave">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
  <?php include_once 'footer.php'; ?>
</body>

</html>