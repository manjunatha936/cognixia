<?php /*Template Name:Rewire*/
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
                        <form id="form" data-parsley-validate="">
                            <div class="row ">
                                <div class="col-md-6 col-11 form_group">
                                    <label for="fullname">Name</label>
                                    <input type="text" class="form-control" name="fullname" data-parsley-required  placeholder="Enter Name">
                                </div>
                                <div class="col-md-6 col-11 form_group">
                                    <label for="company">Company</label>
                                    <input type="company" class="form-control" name="company"  data-parsley-required placeholder="Enter company name">
                                </div>
                                <div class="col-md-6 col-11 form_group">
                                    <label for="phone">Phone Number</label>
                                    <input id="phone" type="tel" class="form-control" data-parsley-type="number" name="phone" validateNumber data-parsley-maxlength="10" data-parsley-required placeholder="Enter mobile number">
                                </div>
                                <div class="col-md-6 col-11 form_group">
                                    <label for="email">Email</label>
                                    <input  type="email" class="form-control" name="email" data-parsley-type="email"data-parsley-required placeholder="Enter email address">
                                </div>
                           
                            <div class="col-11 col-md-12 form_group">
                                <div class="row g-0">
    
                                    <label for="what">What digital solutions are interested in?</label>
                                    <select id="what" data-parsley-required>
                                        <option value=""></option>
                                      <option value="JUMP">JUMP</option>
                                      <option value="ReWire">ReWire</option>
                                      <option value="org">Organization Transformation</option>
                                      <option value="digital">Digital Mindset & Culture</option>
                                      <option value="change">Change & Adoption</option>
                                      <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-11 col-md-12 form_group">
                                <label class="form-label">How can we help you?</label>
                                <textarea class="form-control" name="message" placeholder="Please enter your message"  rows="4" cols="50"></textarea>
                            </div>
                        </div>
                            <h6 class="mb-4 text-center by_txt d-md-block d-none"> By filling out this form and clicking submit, you acknowledge our privacy policy.</h6>
                            <p id="error" class="parsley-error mb-4">Please fill all the mandatory fields to continue.</p>
                            <button  class="modal_submit cog-btn cog-btn--default mx-auto"   type="submit">Submit</button>
                          </form>
                           
                    </div>
                  </div>
                    <div class="modal-footer d-md-block d-none">
                      <h4 class="mb-4">Contact Information</h4>
                      <div class="row g-0 align-items-end">
                        <div class="col-md-4"><h6>Headquarters:
                            110 Allen Road,Basking Ridge,NJ 07920</h6></div>
                        <div class="col-md-4 ps-4"><h6>Phone <a href="javascript:void(0);">+1-877-264-6424</a></h6></div>
                        <div class="col-md-4"><h6>Email<a href="javascript:void(0);"> info@cognixia.com</a></h6></div>
                      </div>
                    </div>
                </div>
                <div id="successfull_msg" class="successfull_msg">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-5" >
                            <div class=" success_lft position-relative"style="background-image: url(../dist/img/icons/modal_successlft.svg);background-repeat: no-repeat;border-bottom-left-radius:16px;border-top-left-radius:16px;">
                                <img src="images/success_arrw.webp" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="success_rght text-center">

                                <img src="../dist/img/icons/success_tick.png" class="mb-4" alt="check-img">
                               <h1 class="modal_h1 success_h1">Perfect. <br>
                                We will be in touch soon.</h1>
                            </div>
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
                                    <?php echo get_field('banner_section_thin_heading'); ?> <small
                                        class="cog-txt-muted fw-bold me-1">
                                        <?php echo get_field('banner_section_dark_heading'); ?>
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
                                    //echo $q;
                                    ?>
                                    <div class="row cog-card-vr cog-flexcenter">
                                        <div class="col-md-6">
                                            <img class="cog-imgfit cog-rounded-reg w-100"
                                                src="<?php echo get_sub_field('jump_diff_section_image'); ?>"
                                                alt="Effort figure">
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
                                                src="<?php echo get_sub_field('jump_diff_section_image'); ?>"
                                                alt="Effort figure">
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
            <section class="section-padding100 position-relative pt-5">
                <div class="container">
                    <div class="row text-center mb-md-4 pb-5">
                        <div class="col-12 col-lg-10 col-xxl-8 mx-auto">
                            <h3 class="h3 fw-bold">
                                <?php echo get_field('training_area_section_heading'); ?>
                            </h3>
                            <p class="cog-lead">
                                <?php echo get_field('training_area_section_description'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid px-0 position-relative px-5 px-md-0">
                    <div class="cog-shape-ellipse cog-top"></div>
                    <div class="row px-3 px-md-0">
                        <div class="swiper Myswiper-rewire">
                            <div class="swiper-wrapper">
                                <?php if (have_rows('training_area_section_repeater')):
                                    while (have_rows('training_area_section_repeater')):
                                        the_row(); ?>
                                        <div class="swiper-slide">
                                            <div class="cog-card cog-card--cover rounded-0 border-0 no-hover cog-flexcenter cog-bg-theme"
                                                style="background-image: url('<?php echo get_sub_field('training_area_section_repeater'); ?>');">
                                                <div class="cog-card--cover__body text-white cog-flexcenter text-center">
                                                    <h4 class="fs-32 fw-xbold">
                                                        <?php echo get_sub_field('training_area_section_repeater_content'); ?>
                                                    </h4>
                                                    <p class="cog-lead text-white fs-18">
                                                        <?php echo get_sub_field('training_area_section_repeater_description'); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    <?php endwhile; endif; ?>
                            </div>
                        </div>
                        <div class="swiper-pagination cog-pagination-btm d-block d-md-none"></div>
                        <!-- Swiper paginatin arrows-->
                        <div class="cog-arrows-container">
                            <div class="cog-btn-circle swiper-button-prev"><svg class="cog-icon-arrow" width="16"
                                    height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.06688 0.641346L15.6669 7.24135C15.7669 7.34135 15.8379 7.44968 15.8799 7.56635C15.9219 7.68301 15.9425 7.80801 15.9419 7.94135C15.9419 8.07468 15.9209 8.19968 15.8789 8.31635C15.8369 8.43301 15.7662 8.54135 15.6669 8.64135L9.06688 15.2413C8.88355 15.4247 8.65421 15.5203 8.37888 15.5283C8.10355 15.5363 7.86621 15.4407 7.66688 15.2413C7.46688 15.058 7.36255 14.8287 7.35388 14.5533C7.34521 14.278 7.44121 14.0407 7.64188 13.8413L12.5419 8.94135H1.36688C1.08354 8.94135 0.84588 8.84535 0.653879 8.65335C0.461879 8.46135 0.366212 8.22401 0.366879 7.94135C0.366879 7.65801 0.462545 7.42035 0.653879 7.22835C0.845213 7.03635 1.08288 6.94068 1.36688 6.94135H12.5419L7.64188 2.04135C7.45855 1.85801 7.36255 1.62468 7.35388 1.34135C7.34521 1.05801 7.44121 0.824679 7.64188 0.641346C7.82521 0.441346 8.05855 0.341347 8.34188 0.341347C8.62521 0.341347 8.86688 0.441346 9.06688 0.641346Z"
                                        fill="#0952A9"></path>
                                </svg>
                            </div>
                            <div class="cog-btn-circle swiper-button-next"><svg class="cog-icon-arrow" width="16"
                                    height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.06688 0.641346L15.6669 7.24135C15.7669 7.34135 15.8379 7.44968 15.8799 7.56635C15.9219 7.68301 15.9425 7.80801 15.9419 7.94135C15.9419 8.07468 15.9209 8.19968 15.8789 8.31635C15.8369 8.43301 15.7662 8.54135 15.6669 8.64135L9.06688 15.2413C8.88355 15.4247 8.65421 15.5203 8.37888 15.5283C8.10355 15.5363 7.86621 15.4407 7.66688 15.2413C7.46688 15.058 7.36255 14.8287 7.35388 14.5533C7.34521 14.278 7.44121 14.0407 7.64188 13.8413L12.5419 8.94135H1.36688C1.08354 8.94135 0.84588 8.84535 0.653879 8.65335C0.461879 8.46135 0.366212 8.22401 0.366879 7.94135C0.366879 7.65801 0.462545 7.42035 0.653879 7.22835C0.845213 7.03635 1.08288 6.94068 1.36688 6.94135H12.5419L7.64188 2.04135C7.45855 1.85801 7.36255 1.62468 7.35388 1.34135C7.34521 1.05801 7.44121 0.824679 7.64188 0.641346C7.82521 0.441346 8.05855 0.341347 8.34188 0.341347C8.62521 0.341347 8.86688 0.441346 9.06688 0.641346Z"
                                        fill="#0952A9"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="cog-shape-ellipse cog-bottom"></div>
                </div>
            </section>
            <!--04-->
            <section class="cog-bg-primary section-padding100">
                <div class="container">
                    <div class="col-11 mx-auto col-md-12 col-lg-10 col-xxl-8 text-center mb-md-5">
                        <h3 class="h3 fw-bold mb-4">
                            <?php echo get_field('certification_section_heading'); ?>
                        </h3>
                        <p class="cog-lead fs-24">
                            <?php echo get_field('certification_section_description'); ?>
                        </p>
                    </div>
                    <div class="col-xl-10 mx-auto">
                        <ul class="row cog-client-listbox row-cols-lg-3 text-center">
                            <?php if (have_rows('certification_section_repeater')):
                                while (have_rows('certification_section_repeater')):
                                    the_row(); ?>
                                    <li class="col-md-4">
                                        <div class="cog-client-listbox__item cog-flexcenter m-2"><img
                                                src="<?php echo get_sub_field('certification_section_repester_image');?>"
                                                alt="service-now Logo"></div>
                                    </li>
                                <?php endwhile; endif; ?>
                           
                        </ul>
                    </div>
                </div>
            </section>
            <!--05-->
            <section class="section-padding100 position-relative">
                <div class="container">
                    <h3 class="h3 fw-bold text-center mb-md-4 pb-5"><?php  echo get_field('our_impact_heading');?></h3>
                    <div class="row">
                        <div class="col-lg-10 col-xxl-8 mx-auto">
                            <div class="row row-cols-lg-4 text-center g-3">
                            <?php if (have_rows('our_span_section_repeater_')):
                                while (have_rows('our_span_section_repeater_')):
                                    the_row(); ?>
                                <div class="col">
                                    <figure class="cog-feature"><img
                                            src="<?php  echo get_sub_field('our_span_section_image')?>"
                                            alt="countries icon">
                                        <figcaption class="mt-3"><span class="fs-32 fw-xbold"><?php  echo get_sub_field('our_span_section_repeater_no')?></span>
                                            <p class="cog-clr-black fs-18 mt-1"><?php  echo get_sub_field('our_span_section_content')?></p>
                                        </figcaption>
                                    </figure>
                                </div>

                               
                                <?php endwhile; endif; ?> 
                               
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