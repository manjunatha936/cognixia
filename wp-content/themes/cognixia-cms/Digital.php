<?php /*Template Name:Digital Mindset & Culture*/
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
      <!-- Banner-->
      <section class="cog-banner cog-bg-info">
        <div class="cog-banner__figwrap ms-auto">
          <img
            class="cog-img-blendmode cogximg650"
            src="<?php echo get_field('banner_section_image');?>"
            alt="Banner"
          />
        </div>
        <div class="cog-bg-gradient cog-bg-gradient--pri"></div>
        <!--Banner content-->
        <div class="cog-banner-content cog-vr-flexcenter">
          <div class="container cog-banner-content__container">
            <div class="row">
              <div class="col-12 col-lg-9 col-xl-7 me-auto offset-lg-1">
                <span class="cog-leadtitle mb-3"
                  ><?php echo get_field('banner_section_short_heading');?></span>
                
                <h1 class="h1 fw-normal mb-3 mb-md-4">
                 <?php echo get_field('banner_section_thin_heading');?>
                  <small class="cog-txt-muted fs-64 fw-xbold me-2"
                    ><?php echo get_field('banner_section_thick_heading');?></small
                  >
                </h1>
                <?php
                                $link = get_field('banner_section_button');
                                if ($link):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="cog-btn cog-btn--white mt-4" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                                <?php endif; ?>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- We are best-->
      <section class="section-padding100">
        <div class="container">
          <div class="col-md-8 mx-auto text-center mb-md-5 pb-md-4">
            <h3 class="h3 fw-bold mb-2 mb-md-4">Digital Mindset &amp; Culture </h3>
            <p class="cog-lead">Creating success in a digital transformation comes down to ensuring that your people have the right mindset for operating in a digital environment. Ensuring that your culture is set up to enable, not disable, digital innovations.</p>
          </div>
          <div class="row position-relative pb-md-5">
        
            <div class="swiper DigitalSlider text-center swiper-initialized swiper-horizontal swiper-backface-hidden">
           
              <div class="swiper-wrapper" id="swiper-wrapper-61fb4f4b110e8718b" aria-live="polite" style="cursor: grab; transition-duration: 0ms; transform: translate3d(-327.75px, 0px, 0px);">
              
              <?php $i = 1;
								if (have_rows('digital_mindset_repeater')):
									while (have_rows('digital_mindset_repeater')):
										the_row();?>
                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 4" style="width: 394.688px; margin-right: 15px;">
                  <div class="cog-card cog-card--pri">
                    <div class="cog-card-pattern"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/patterns/logo-transparent.svg" alt="logo pattern"></div>
                    <div class="cog-card__body cog-flexcenter p-0">
                      <h4 class="fw-normal fs-32"><?php echo get_sub_field('digital_mindset__card_heading');?></h4>
                    </div>
                  </div>
                </div>
               <?php endwhile;endif;?>
              
                
              </div>
              
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <div class="swiper-pagination cog-pagination-btm d-block d-md-none swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" aria-current="true"></span></div>
            <!-- Swiper paginatin arrows-->
            <div class="cog-arrows-container">
              <div class="cog-btn-circle swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-61fb4f4b110e8718b" aria-disabled="false"><svg class="cog-icon-arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.06688 0.641346L15.6669 7.24135C15.7669 7.34135 15.8379 7.44968 15.8799 7.56635C15.9219 7.68301 15.9425 7.80801 15.9419 7.94135C15.9419 8.07468 15.9209 8.19968 15.8789 8.31635C15.8369 8.43301 15.7662 8.54135 15.6669 8.64135L9.06688 15.2413C8.88355 15.4247 8.65421 15.5203 8.37888 15.5283C8.10355 15.5363 7.86621 15.4407 7.66688 15.2413C7.46688 15.058 7.36255 14.8287 7.35388 14.5533C7.34521 14.278 7.44121 14.0407 7.64188 13.8413L12.5419 8.94135H1.36688C1.08354 8.94135 0.84588 8.84535 0.653879 8.65335C0.461879 8.46135 0.366212 8.22401 0.366879 7.94135C0.366879 7.65801 0.462545 7.42035 0.653879 7.22835C0.845213 7.03635 1.08288 6.94068 1.36688 6.94135H12.5419L7.64188 2.04135C7.45855 1.85801 7.36255 1.62468 7.35388 1.34135C7.34521 1.05801 7.44121 0.824679 7.64188 0.641346C7.82521 0.441346 8.05855 0.341347 8.34188 0.341347C8.62521 0.341347 8.86688 0.441346 9.06688 0.641346Z" fill="#0952A9"></path>
</svg>
              </div>
              <div class="cog-btn-circle swiper-button-next swiper-button-disabled" tabindex="-1" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-61fb4f4b110e8718b" aria-disabled="true"><svg class="cog-icon-arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.06688 0.641346L15.6669 7.24135C15.7669 7.34135 15.8379 7.44968 15.8799 7.56635C15.9219 7.68301 15.9425 7.80801 15.9419 7.94135C15.9419 8.07468 15.9209 8.19968 15.8789 8.31635C15.8369 8.43301 15.7662 8.54135 15.6669 8.64135L9.06688 15.2413C8.88355 15.4247 8.65421 15.5203 8.37888 15.5283C8.10355 15.5363 7.86621 15.4407 7.66688 15.2413C7.46688 15.058 7.36255 14.8287 7.35388 14.5533C7.34521 14.278 7.44121 14.0407 7.64188 13.8413L12.5419 8.94135H1.36688C1.08354 8.94135 0.84588 8.84535 0.653879 8.65335C0.461879 8.46135 0.366212 8.22401 0.366879 7.94135C0.366879 7.65801 0.462545 7.42035 0.653879 7.22835C0.845213 7.03635 1.08288 6.94068 1.36688 6.94135H12.5419L7.64188 2.04135C7.45855 1.85801 7.36255 1.62468 7.35388 1.34135C7.34521 1.05801 7.44121 0.824679 7.64188 0.641346C7.82521 0.441346 8.05855 0.341347 8.34188 0.341347C8.62521 0.341347 8.86688 0.441346 9.06688 0.641346Z" fill="#0952A9"></path>
</svg>
              </div>
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