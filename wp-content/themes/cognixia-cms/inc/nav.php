<header class="header-pin" id="header">
  <div class="nav navbar navbar-expand-lg navbar-overide">
    <div class="container">
      <!-- brand logo--><a class="navbar-brand" href="index.html"><img class="cog-brand-logo"
          src="<?php echo ot_get_option('header_logo') ?>" alt="Brand logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>
      <!--Header nav-list-->
      <div class="collapse navbar-collapse" id="navbarText">

        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-5">
          <?php $tree = wpse_nav_menu_2_tree('Header menu');
          if (!empty($tree)) {
            $inc = 1;
            foreach ($tree as $headmenu) {
              $childmenu = $headmenu->wpse_children;
              //var_dump($headmenu);
              ?>
              <li class="nav-item">
                <a class="cog-nav-link active" aria-current="page" href="<?php echo $headmenu->url ?>"> <?php echo $headmenu->title ?></a>
              </li>

              <!-- <li class="nav-item"><a class="cog-nav-link" href="javascript:void(0);">About Us</a></li> -->
              <?php $inc++;
            }
          } ?>
        </ul>

        <a class="cog-btn cog-btn--pri ms-md-5" href="<?php echo ot_get_option('get_in_touch_link') ?>"><?php echo ot_get_option('get_in_touch_text') ?></a>

      </div>
    </div>
  </div>
</header>