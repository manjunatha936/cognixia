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
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/success_arrw.webp" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="success_rght text-center">

                            <img src="<?php echo get_template_directory_uri();?>/assets/dist/img/icons/success_tick.png" class="mb-4" alt="check-img">
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
                                    <a class="cog-btn cog-btn--white mt-4" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#exampleModal"><?php echo esc_html($link_title); ?></a>
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