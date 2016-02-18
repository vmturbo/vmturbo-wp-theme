<header class="banner">
  <div class="container">
	<div class="row">
	<nav class="navbar yamm navbar-inverse navbar-fixed-top" role="navigation" id="vmtnav">
	<?php if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>';?>
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
                    <img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/vmturbo-logo-header.png" alt="VMTurbo">
                </a>
            </div>
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
   <!-- <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>-->
  </div></div>
</header>
