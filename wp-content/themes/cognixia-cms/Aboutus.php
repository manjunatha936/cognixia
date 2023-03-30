<?php /*Template Name:Aboutus*/
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
      </div>
            <section class="cog-banner cog-bg-info">
                <div class="cog-banner__figwrap ms-auto"><img class="cog-img-blendmode cogximg650"
                        src="<?php echo get_field('banner_section_image'); ?>" alt="Banner"></div>
                <div class="cog-bg-gradient cog-bg-gradient--pri"></div>
                <!--Banner content-->
                <div class="cog-banner-content cog-vr-flexcenter">
                    <div class="container cog-banner-content__container">
                        <div class="row">
                            <div class="col-12 col-xl-9 col-xxl-8 me-auto offset-xl-1"><span class="cog-leadtitle mb-3">
                                    <?php echo get_field('banner_section_short_heading'); ?>
                                </span>
                                <h1 class="h1 fw-normal mb-3 mb-md-4">
                                    <?php echo get_field('banner_section_thin_heading'); ?><small
                                        class="cog-txt-muted fs-64 fw-xbold me-1">
                                        <?php echo get_field('banner_section_thick_heading'); ?>
                                    </small>
                                </h1>
                                <p class="cog-lead fs-24 text-white pb-2">
                                    <?php echo get_field('banner_section_description'); ?>
                                </p>
                                <?php
                                $link = get_field('banner_section_button');
                                if ($link):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="cog-btn cog-btn--white" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- We are best-->
            <section class="section-padding100 pb-0">
                <div class="container">
                    <div class="row">
                        <h2 class="fw-bold text-center mb-md-5">
                            <?php echo get_field('why_cognixia__heading'); ?>
                        </h2>
                        <div class="col-lg-10 mx-auto">
                            <div class="row align-items-md-center">
                                <div class="col-md-5"><img class="cog-imgfit cogximg345 cog-rounded-reg"
                                        src="<?php echo get_field('why_cognixia_image'); ?>" alt="Figure"></div>
                                <div class="col-md-7 ps-md-5">
                                    <p class="fw-xbold fs-18 cog-clr-darkgray">
                                        <?php echo get_field('why_cognixia_thick_description'); ?>
                                    </p>
                                    <ul class="cog-content-list mt-4">
                                        <li class="cog-content-list__item">
                                            <?php echo get_field('why_cognixia_thin_description'); ?>
                                        </li>
                                        <li class="cog-content-list__item">
                                            <?php echo get_field('why_cognixia_thin_description_one'); ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center section-padding80">
                        <div class="col-xl-8 mx-auto">
                            <h2 class="fw-bold text-center mb-4 pb-md-2">
                                <?php echo get_field('who_we_are__heading'); ?>
                            </h2>
                            <p class="fs-18 cog-clr-darkgray">
                                <?php echo get_field('who_we_are_description'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!--Our DNA-->
            <section class="section-padding100 pt-0">
                <div class="container">
                    <h2 class="h3 fw-bold text-center mb-md-5"><?php echo get_field('meet_our_leadership_heading');?></h2>
                    <div class="row">
                        <div class="col-lg-10 col-xl-8 mx-auto">
                            <div class="row gy-3 pt-3">
                                <!--member-->
                                <?php if (have_rows('meet_our_leadership_repeater')):
                                    while (have_rows('meet_our_leadership_repeater')):
                                        the_row(); ?>
                                        <div class="col-md-4">
                                            <figure class="cog-figthumbnail"><img class="cog-imgfit cogximg345 cog-rounded-reg"
                                                    src="<?php echo get_sub_field('meet_our_leadership_image');?>" alt="<?php echo get_sub_field('meet_our_leader_name');?>">
                                                <div class="cog-overlay-blue"></div>
                                                <figcaption class="cog-figthumbnail__content">
                                                    <h5 class="fs-20 mb-1 mb-md-0"><?php echo get_sub_field('meet_our_leader_name');?></h5>
                                                    <p class="fs-16 text-white"><?php echo get_sub_field('meet_our_leader_designation');?></p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    <?php endwhile; endif; ?>
                                <!--member2-->

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Our DNA-->
            <section class="section-padding100 pt-0">
                <div class="container">
                    <h2 class="h3 fw-bold text-center mb-md-5">
                        <?php echo get_field('industry_service_heading'); ?>
                    </h2>
                    <div class="row">
                        <div class="col-12">
                            <h3 class="cog-gradient-heading text-center"><span class="cog-text-gradient">
                                    <?php echo get_field('consumer_products_heading'); ?>
                                </span></h3>
                        </div>
                    </div>
                </div>
            </section>
            <!--IT-->
            <?php include_once 'inc/ReadyTransform.php'; ?>
        </main>
    </div>
    <?php include_once 'footer.php'; ?>
</body>

</html>