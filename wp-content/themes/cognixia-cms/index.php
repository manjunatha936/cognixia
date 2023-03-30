<?php /*Template Name:Home*/
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
        <?php include_once 'inc/nav.php'?> 
            <div class="empty-div"></div>
          

			<!--Banner--> <div class="modal-dialog modal-dialog-centered">
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
			<section class="cog-banner cog-bg-info">
        <div class="cog-banner__figwrap ms-auto"><img class="cog-img-blendmode cogximg650" src="<?php echo get_field('cognixia_banner_image')?>" alt="Banner"></div>
        <div class="cog-bg-gradient cog-bg-gradient--pri"></div>
        <!--Banner content-->
        <div class="cog-banner-content cog-vr-flexcenter">
          <div class="container cog-banner-content__container">
            <div class="row">
              <div class="col-12 col-md-7 col-xl-6 me-auto offset-md-1">
                <h1 class="h1 fw-normal mb-3 mb-md-4"><?php echo get_field('cognixia_banner_heading')?> <small class="cog-txt-muted fw-xbold"><?php echo get_field('cognixia_digital_part')?> </small>your <small class="cog-txt-muted fw-xbold"><?php echo get_field('cognixia_digital_dna')?></small></h1>
				<?php 
                                                $learnmorelink = get_field('cognixia_banner_link');
                                                if( $learnmorelink ): 
                                                    $link_url = $learnmorelink['url'];
                                                    $link_title = $learnmorelink['title'];
                                                    $link_target = $learnmorelink['target'] ? $learnmorelink['target'] : '_self';
                                                    ?>
				<a class="cog-btn cog-btn--lg cog-btn--white" href="<?=$link_url?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/icons/play-button.svg" alt="play button"><span class="fs-18 cog-play-txt ms-2"><?php echo $link_title?></span></a>
				<?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- We are best-->
      <section class="section-padding100">
        <div class="container">
          <div class="row">
            <div class="col-md-10 mx-auto text-center">
              <h2 class="h2 fw-bold mb-4"><?php echo get_field('we_unlock_title')?><small class="cog-txt-muted cog-clr-primary"><?php echo get_field('we_unlock_blue_text')?> </small><?php echo get_field('we_unlock_digital')?></h2>
			  <?php 
                                                $learnmorelink = get_field('we_unlock_link');
                                                if( $learnmorelink ): 
                                                    $link_url = $learnmorelink['url'];
                                                    $link_title = $learnmorelink['title'];
                                                    $link_target = $learnmorelink['target'] ? $learnmorelink['target'] : '_self';
                                                    ?>
			  <a class="cog-btn cog-btn--default mx-auto" href="<?=$link_url?>"><?php echo $link_title?></a>
			  <?php endif; ?>
            </div>
          </div>
          <div class="row text-center pt-md-5 mt-md-5">
            <div class="col-12 col-md-9 mx-md-auto">
              <h3 class="h3 fw-bold mb-md-4 pb-4"><?php echo get_field('we_unlock_heading')?></h3>
              <ul class="row cog-client-list row-cols-4">
			  <?php while(have_rows('we_unlock_repeater')){the_row();?> 
                <li class="col cog-client-list__item"><img src="<?php echo get_sub_field('we_unlock_logo')?>" alt="Client logo"></li>
				<?php } ?>
                <!-- <li class="col cog-client-list__item"><img src="<?php echo get_template_directory_uri();?>/assets/img/home/clients/credit.svg" alt="Client logo"></li>
                <li class="col cog-client-list__item"><img src="<?php echo get_template_directory_uri();?>/assets/img/home/clients/exceleon.svg" alt="Client logo"></li>
                <li class="col cog-client-list__item"><img src="<?php echo get_template_directory_uri();?>/assets/img/home/clients/kaser.svg" alt="Client logo"></li>
                <li class="col cog-client-list__item"><img src="<?php echo get_template_directory_uri();?>/assets/img/home/clients/metlife.svg" alt="Client logo"></li>
                <li class="col cog-client-list__item"><img src="<?php echo get_template_directory_uri();?>/assets/img/home/clients/paypal.svg" alt="Client logo"></li>
                <li class="col cog-client-list__item"><img src="<?php echo get_template_directory_uri();?>/assets/img/home/clients/vmcare.svg" alt="Client logo"></li>
                <li class="col cog-client-list__item"><img src="<?php echo get_template_directory_uri();?>/assets/img/home/clients/metlife.svg" alt="Client logo"></li> -->

              </ul>
            </div>
          </div>
        </div>
      </section>
      <!--Our DNA-->
      <section class="cog-bg-primary section-padding100">
        <div class="container">
          <div class="row text-center">
            <h3 class="h3 fw-bold"><?php echo get_field('we_specialize__heading')?></h3>
            <p class="cog-lead"><?php echo get_field('we_specialize_title')?> </p>
          </div>
          <div class="row mt-md-5 pt-3 px-lg-5">
		  <?php while(have_rows('we_specialize_repeater')){the_row();?> 
            <div class="col-md-4">
              <div class="cog-card bg-white">
                <div class="cog-card__body">
                  <p class="cog-card-text mb-3 mb-md-4"><?php echo get_sub_field('we_specialize_text')?></p>
				  <a class="cog-card-link cog-circle ms-auto" href="<?php echo get_sub_field('we_specialize_link')?>"><svg class="cog-icon-arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.06688 0.641346L15.6669 7.24135C15.7669 7.34135 15.8379 7.44968 15.8799 7.56635C15.9219 7.68301 15.9425 7.80801 15.9419 7.94135C15.9419 8.07468 15.9209 8.19968 15.8789 8.31635C15.8369 8.43301 15.7662 8.54135 15.6669 8.64135L9.06688 15.2413C8.88355 15.4247 8.65421 15.5203 8.37888 15.5283C8.10355 15.5363 7.86621 15.4407 7.66688 15.2413C7.46688 15.058 7.36255 14.8287 7.35388 14.5533C7.34521 14.278 7.44121 14.0407 7.64188 13.8413L12.5419 8.94135H1.36688C1.08354 8.94135 0.84588 8.84535 0.653879 8.65335C0.461879 8.46135 0.366212 8.22401 0.366879 7.94135C0.366879 7.65801 0.462545 7.42035 0.653879 7.22835C0.845213 7.03635 1.08288 6.94068 1.36688 6.94135H12.5419L7.64188 2.04135C7.45855 1.85801 7.36255 1.62468 7.35388 1.34135C7.34521 1.05801 7.44121 0.824679 7.64188 0.641346C7.82521 0.441346 8.05855 0.341347 8.34188 0.341347C8.62521 0.341347 8.86688 0.441346 9.06688 0.641346Z" fill="#0952A9"/>
</svg></a>
                </div>
              </div>
            </div> 
			<?php } ?>
            <!-- <div class="col-md-4">
              <div class="cog-card bg-white">
                <div class="cog-card__body">
                  <p class="cog-card-text mb-3 mb-md-4">Embedding emerging, skilled, and diverse digital talent into your key projects</p><a class="cog-card-link cog-circle ms-auto" href="javascript:void(0);"><svg class="cog-icon-arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.06688 0.641346L15.6669 7.24135C15.7669 7.34135 15.8379 7.44968 15.8799 7.56635C15.9219 7.68301 15.9425 7.80801 15.9419 7.94135C15.9419 8.07468 15.9209 8.19968 15.8789 8.31635C15.8369 8.43301 15.7662 8.54135 15.6669 8.64135L9.06688 15.2413C8.88355 15.4247 8.65421 15.5203 8.37888 15.5283C8.10355 15.5363 7.86621 15.4407 7.66688 15.2413C7.46688 15.058 7.36255 14.8287 7.35388 14.5533C7.34521 14.278 7.44121 14.0407 7.64188 13.8413L12.5419 8.94135H1.36688C1.08354 8.94135 0.84588 8.84535 0.653879 8.65335C0.461879 8.46135 0.366212 8.22401 0.366879 7.94135C0.366879 7.65801 0.462545 7.42035 0.653879 7.22835C0.845213 7.03635 1.08288 6.94068 1.36688 6.94135H12.5419L7.64188 2.04135C7.45855 1.85801 7.36255 1.62468 7.35388 1.34135C7.34521 1.05801 7.44121 0.824679 7.64188 0.641346C7.82521 0.441346 8.05855 0.341347 8.34188 0.341347C8.62521 0.341347 8.86688 0.441346 9.06688 0.641346Z" fill="#0952A9"/>
</svg></a>
                </div>
              </div>
            </div> -->

            <!-- <div class="col-md-4">
              <div class="cog-card bg-white">
                <div class="cog-card__body">
                  <p class="cog-card-text mb-3 mb-md-4">Ensuring you have the right digital technology, vision, and solutions for a digital world</p><a class="cog-card-link cog-circle ms-auto" href="javascript:void(0);"><svg class="cog-icon-arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.06688 0.641346L15.6669 7.24135C15.7669 7.34135 15.8379 7.44968 15.8799 7.56635C15.9219 7.68301 15.9425 7.80801 15.9419 7.94135C15.9419 8.07468 15.9209 8.19968 15.8789 8.31635C15.8369 8.43301 15.7662 8.54135 15.6669 8.64135L9.06688 15.2413C8.88355 15.4247 8.65421 15.5203 8.37888 15.5283C8.10355 15.5363 7.86621 15.4407 7.66688 15.2413C7.46688 15.058 7.36255 14.8287 7.35388 14.5533C7.34521 14.278 7.44121 14.0407 7.64188 13.8413L12.5419 8.94135H1.36688C1.08354 8.94135 0.84588 8.84535 0.653879 8.65335C0.461879 8.46135 0.366212 8.22401 0.366879 7.94135C0.366879 7.65801 0.462545 7.42035 0.653879 7.22835C0.845213 7.03635 1.08288 6.94068 1.36688 6.94135H12.5419L7.64188 2.04135C7.45855 1.85801 7.36255 1.62468 7.35388 1.34135C7.34521 1.05801 7.44121 0.824679 7.64188 0.641346C7.82521 0.441346 8.05855 0.341347 8.34188 0.341347C8.62521 0.341347 8.86688 0.441346 9.06688 0.641346Z" fill="#0952A9"/>
</svg></a>
                </div>
              </div>
            </div> -->

          </div>
        </div>
      </section>
      <!--Our clients-->
      <section class="section-padding100 position-relative">
        <div class="container">
          <div class="row text-center mb-3 mb-md-4 pb-md-5">
            <h3 class="h3 fw-bold"> <?php echo get_field('our_solutions_heading')?> </h3>
            <p class="cog-lead"> <?php echo get_field('our_solutions_title')?> </p>
          </div>
        </div>
        <div class="container-fluid px-0 position-relative">
          <div class="cog-shape-ellipse cog-top"></div>
          <div class="row">
            <div class="swiper Myswiper">
              <div class="swiper-wrapper">
			  <?php while(have_rows('our_solutions_repeater')){the_row();?> 
                <div class="swiper-slide">
                                    <div class="cog-card cog-card--cover rounded-0 border-0 no-hover cog-flexcenter cog-bg-theme" style="background-image: url(' <?php echo get_sub_field('our_solutions_image')?> ">
                                      <div class="cog-card--cover__body text-white cog-flexcenter text-center">
                                        <h4 class="fs-32 fw-xbold"> <?php echo get_sub_field('our_solutions_image_title')?> </h4>
                                        <p class="cog-lead text-white fs-18"> <?php echo get_sub_field('our_solutions_image_decription')?> </p>
                                      </div>
                                    </div>
                </div>
				<?php } ?>
                <!-- <div class="swiper-slide">
                                    <div class="cog-card cog-card--cover rounded-0 border-0 no-hover cog-flexcenter cog-bg-theme" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/home/solution/digital-minder.png');">
                                      <div class="cog-card--cover__body text-white cog-flexcenter text-center">
                                        <h4 class="fs-32 fw-xbold">Digital Mindset &amp; Culture</h4>
                                        <p class="cog-lead text-white fs-18">Transforming your people and culture for digital</p>
                                      </div>
                                    </div>
                </div> -->

                <!-- <div class="swiper-slide">
                                    <div class="cog-card cog-card--cover rounded-0 border-0 no-hover cog-flexcenter cog-bg-theme" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/home/solution/change-adoption.png');">
                                      <div class="cog-card--cover__body text-white cog-flexcenter text-center">
                                        <h4 class="fs-32 fw-xbold">Change &amp; Adoption</h4>
                                        <p class="cog-lead text-white fs-18">Accelerating, cost optimizing, de-risking and adopting digital work</p>
                                      </div>
                                    </div>
                </div> -->

                <!-- <div class="swiper-slide">
                                    <div class="cog-card cog-card--cover rounded-0 border-0 no-hover cog-flexcenter cog-bg-theme" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/home/solution/digital-minder.png');">
                                      <div class="cog-card--cover__body text-white cog-flexcenter text-center">
                                        <h4 class="fs-32 fw-xbold">Organization Transformation</h4>
                                        <p class="cog-lead text-white fs-18">Infuse new digital-ready talent</p>
                                      </div>
                                    </div>
                </div> -->

                <!-- <div class="swiper-slide">
                                    <div class="cog-card cog-card--cover rounded-0 border-0 no-hover cog-flexcenter cog-bg-theme" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/home/solution/organization.png');">
                                      <div class="cog-card--cover__body text-white cog-flexcenter text-center">
                                        <h4 class="fs-32 fw-xbold">Organization Transformation</h4>
                                        <p class="cog-lead text-white fs-18">Infuse new digital-ready talent</p>
                                      </div>
                                    </div>
                </div> -->

                <!-- <div class="swiper-slide">
                                    <div class="cog-card cog-card--cover rounded-0 border-0 no-hover cog-flexcenter cog-bg-theme" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/home/solution/change-adoption.png');">
                                      <div class="cog-card--cover__body text-white cog-flexcenter text-center">
                                        <h4 class="fs-32 fw-xbold">Organization Transformation</h4>
                                        <p class="cog-lead text-white fs-18">Infuse new digital-ready talent</p>
                                      </div>
                                    </div>
                </div> -->

                <!-- <div class="swiper-slide">
                                    <div class="cog-card cog-card--cover rounded-0 border-0 no-hover cog-flexcenter cog-bg-theme" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/home/solution/digital-minder.png');">
                                      <div class="cog-card--cover__body text-white cog-flexcenter text-center">
                                        <h4 class="fs-32 fw-xbold">Organization Transformation</h4>
                                        <p class="cog-lead text-white fs-18">Infuse new digital-ready talent</p>
                                      </div>
                                    </div>
                </div> -->

              </div>
            </div>
            <!-- Swiper paginatin arrows-->
            <div class="cog-arrows-container">
              <div class="cog-btn-circle swiper-button-prev"><svg class="cog-icon-arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.06688 0.641346L15.6669 7.24135C15.7669 7.34135 15.8379 7.44968 15.8799 7.56635C15.9219 7.68301 15.9425 7.80801 15.9419 7.94135C15.9419 8.07468 15.9209 8.19968 15.8789 8.31635C15.8369 8.43301 15.7662 8.54135 15.6669 8.64135L9.06688 15.2413C8.88355 15.4247 8.65421 15.5203 8.37888 15.5283C8.10355 15.5363 7.86621 15.4407 7.66688 15.2413C7.46688 15.058 7.36255 14.8287 7.35388 14.5533C7.34521 14.278 7.44121 14.0407 7.64188 13.8413L12.5419 8.94135H1.36688C1.08354 8.94135 0.84588 8.84535 0.653879 8.65335C0.461879 8.46135 0.366212 8.22401 0.366879 7.94135C0.366879 7.65801 0.462545 7.42035 0.653879 7.22835C0.845213 7.03635 1.08288 6.94068 1.36688 6.94135H12.5419L7.64188 2.04135C7.45855 1.85801 7.36255 1.62468 7.35388 1.34135C7.34521 1.05801 7.44121 0.824679 7.64188 0.641346C7.82521 0.441346 8.05855 0.341347 8.34188 0.341347C8.62521 0.341347 8.86688 0.441346 9.06688 0.641346Z" fill="#0952A9"></path>
</svg>
              </div>
              <div class="cog-btn-circle swiper-button-next"><svg class="cog-icon-arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.06688 0.641346L15.6669 7.24135C15.7669 7.34135 15.8379 7.44968 15.8799 7.56635C15.9219 7.68301 15.9425 7.80801 15.9419 7.94135C15.9419 8.07468 15.9209 8.19968 15.8789 8.31635C15.8369 8.43301 15.7662 8.54135 15.6669 8.64135L9.06688 15.2413C8.88355 15.4247 8.65421 15.5203 8.37888 15.5283C8.10355 15.5363 7.86621 15.4407 7.66688 15.2413C7.46688 15.058 7.36255 14.8287 7.35388 14.5533C7.34521 14.278 7.44121 14.0407 7.64188 13.8413L12.5419 8.94135H1.36688C1.08354 8.94135 0.84588 8.84535 0.653879 8.65335C0.461879 8.46135 0.366212 8.22401 0.366879 7.94135C0.366879 7.65801 0.462545 7.42035 0.653879 7.22835C0.845213 7.03635 1.08288 6.94068 1.36688 6.94135H12.5419L7.64188 2.04135C7.45855 1.85801 7.36255 1.62468 7.35388 1.34135C7.34521 1.05801 7.44121 0.824679 7.64188 0.641346C7.82521 0.441346 8.05855 0.341347 8.34188 0.341347C8.62521 0.341347 8.86688 0.441346 9.06688 0.641346Z" fill="#0952A9"></path>
</svg>
              </div>
            </div>
          </div>
          <div class="cog-shape-ellipse cog-bottom"></div>
        </div>
      </section>
      <!--IT-->
      <section class="py-md-5 my-md-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="cog-heropanel cog-bg-gradient--pri cog-rounded-reg text-white">
                <div class="cog-w-750 mw-100 mx-auto cog-heropanel__cnt text-center">
                  <h3 class="h3 fw-bold mb-3 mb-md-4 pb-2-md-0"> <?php echo get_field('ready_to_heading')?></h3>
				  <?php 
                                                $learnmorelink = get_field('ready_to_link');
                                                if( $learnmorelink ): 
                                                    $link_url = $learnmorelink['url'];
                                                    $link_title = $learnmorelink['title'];
                                                    $link_target = $learnmorelink['target'] ? $learnmorelink['target'] : '_self';
                                                    ?>
				  <a class="cog-btn cog-btn--white mx-auto" href="<?=$link_url?>"><?php echo $link_title?></a>
				  <?php endif; ?>
                </div>
                <!-- Image pattern-->
                <div class="cog-pattern-figwrap --left">
                  <div class="cog-pattern-fig bottom-0 start-0"><img class="cogximg198 max-h-100" src="<?php echo get_template_directory_uri();?>/assets/img/symbol-figure.webp" alt="Pattern figure"></div>
                </div>
                <div class="cog-pattern-figwrap">
                  <div class="cog-pattern-fig bottom-0 end-0"><img class="cogximgh330 max-h-100" src="<?php echo get_template_directory_uri();?>/assets/img/riple-waves.svg" alt="Ripple wave"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </section>
        </div>
        <?php include_once 'footer.php';?>
 </body>
 </html>