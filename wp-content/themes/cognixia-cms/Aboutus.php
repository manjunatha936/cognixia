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
                                    <a class="cog-btn cog-btn--white mt-4" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
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