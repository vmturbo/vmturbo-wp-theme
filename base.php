<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5H7WHH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-5H7WHH');</script>
    <?php
	do_action('get_header');
	if(is_page_template('temp-vmworld-sweepstakes.php') || is_page_template('temp-vmt-vs-vcops.php') || is_page_template('temp-sem-30day.php') || is_page_template('template-landingpage.php') || is_page_template('template-landingpage-product.php') || is_singular('partners')) {
      get_template_part('templates/header-minimal');
	} else {
      get_template_part('templates/header');
	};
    ?>
    <div class="wrap <?php if ( is_front_page() ) { ?>container-fluid<?php } elseif (is_page_template('temp-vmworld-sweepstakes.php') || is_page_template('temp-sem-30day.php') || is_page_template('temp-vmt-vs-vcops.php') || is_page_template('template-roi-calculator.php') || is_page_template('template-roi-results.php') || is_page_template('template-careers.php') || is_page_template('template-pressroom.php') || is_page_template('template-customer-index.php') || is_page_template('template-landingpage-product.php') || is_page_template('template-events-index.php') || is_page_template('template-custom.php') || is_page_template('template-blog.php') || is_page_template('template-landingpage.php') || is_page_template('template-resources.php') || is_singular('partners') || is_singular('events') || is_search()) {?>container-fluid<?php } else {?>container default-template<?php } ?>" role="document">
      <div class="content<?php if(is_page_template('template-blog.php') || in_category('blog')){} else { ?> row<?php } ?>">
        <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <!--<?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside>
        <?php endif; ?>-->
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
