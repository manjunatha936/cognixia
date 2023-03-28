<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>


<footer class="cog-footer pb-3 pb-md-4">


      <div class="container">
        <div class="row">
          <div class="col-12 text-center"><img class="mb-3 mb-md-4" src="<?php echo ot_get_option('footer_logo') ?>" alt="Brand logo">
            <ul class="nav cog-nav justify-content-center pb-3 my-3">
            <?php  $tree = wpse_nav_menu_3_tree( 'Footer Menu' );
                                if(!empty($tree)) { 
                                    $inc=1; foreach ($tree as $headmenu) {
                                    $childmenu=$headmenu->wpse_children; 
                                     //var_dump($headmenu);
                                           ?> 
              <li class="cog-nav-item"><a class="cog-nav-link mx-3 mx-md-5" href="<?php echo $headmenu->url?>"><?php echo $headmenu->title?> </a></li>
              <!-- <li class="cog-nav-item"><a class="cog-nav-link mx-3 mx-md-5" href="#">Individuals</a></li>
              <li class="cog-nav-item"><a class="cog-nav-link mx-3 mx-md-5" href="#">About Us</a></li>
              <li class="cog-nav-item"><a class="cog-nav-link mx-3 mx-md-5" href="#">Contact Us</a></li> -->
              <?php } } ?>
            </ul>
          </div>
        </div>
      </div>

      
      <hr class="cog-border-pri">
      <div class="container pt-1">
        <div class="row">
          <div class="col-12 mx-auto d-flex justify-content-center">
            <div class="hstack gap-2 mx-3 mx-md-5"><a class="cog-nav-link" href="<?php echo ot_get_option('term_condition_link') ?>"><?php echo ot_get_option('term_condition_text') ?></a>
              <div class="vr vr-black cog-nostrech"></div><a class="cog-nav-link" href="<?php echo ot_get_option('privacy_policy_link') ?>"><?php echo ot_get_option('privacy_policy_text') ?></a>
              <div class="vr vr-black cog-nostrech"></div><a class="cog-nav-link" href="<?php echo ot_get_option('Sitemap_link') ?>"><?php echo ot_get_option('Sitemap_text') ?></a>
            </div>
            <p class="fs-16 cog-clr-black mx-3 mx-md-5"><?php echo ot_get_option('footer_description') ?></p>
          </div>
        </div>
      </div>
    </footer>
    <!--scripts-->
    <!-- Begin WebTrax-->
    <script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script><script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script><script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script defer src="<?php echo get_template_directory_uri();?>/assets/js/home.js"></script>
    <script defer src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
    <script defer src="<?php echo get_template_directory_uri();?>/assets/js/rewire.js"></script>
    <script defer src="<?php echo get_template_directory_uri();?>/assets/js/DMC.js"></script>
			
<?php wp_footer(); ?>

