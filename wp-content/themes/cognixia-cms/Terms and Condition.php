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
      <div class="cog-bg-gradient cog-bg-  gradient--lght"></div>
      <section class="cog-content-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-xl-10 mx-auto">
              <h1 class="h2 fw-xbold mb-3 mb-md-4 pb-md-2 cog-clr-darkgray"><?php  echo get_field('terms_and_condition_heading');?></h1>
              
              <?php  echo get_field('terms_and_condition_description');?>
            </div>
          </div>
        </div>
      </section>
    </main>
    </div>
    <?php include_once 'footer.php'; ?>
</body>

</html>