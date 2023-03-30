<?php /*Template Name:Terms and Condition*/
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


    <main class="position-relative">
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
                  <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>

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
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/inc/Theme-control/assets/images/success_arrw.png"
                      class="img-fluid" alt="">
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="success_rght text-center">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dist/img/icons/success_tick.png"
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
      <div class="cog-bg-gradient cog-bg-  gradient--lght"></div>
      <section class="cog-content-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-xl-10 mx-auto">
              <h1 class="h2 fw-xbold mb-3 mb-md-4 pb-md-2 cog-clr-darkgray">
                <?php echo get_field('terms_and_condition_heading'); ?>
              </h1>

              <?php echo get_field('terms_and_condition_description'); ?>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
  <?php include_once 'footer.php'; ?>
</body>

</html>