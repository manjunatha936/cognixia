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