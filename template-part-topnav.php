
<?php if ( has_nav_menu( 'main_menu' ) ) : ?>

    <div class="row dmbs-top-menu">
     <nav class="navbar navbar-default navbaroutbordure fontnavbar" role="navigation">
        <div class="container-fluid navbarsection">
            <!-- Brand and toggle get grouped for better mobile display -->
            <nav class="nav navbar-nav navbar-right">
                        <form method="get" class="form-inline spaceforsearch" role="form" action="<?php bloginfo('home'); ?>/">
                            <div class="form-group">
                                <input type="text" class="form-control searchbar" placeholder="Search" value="<?php echo esc_html($s, 1); ?>" name="s" id="s">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-link noneborder-button"><span class="glyphicon glyphicon-search loupe"></span></button>
                            </div>
                        </form>
                    </nav>
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'main_menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse navbar-1-collapse',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
            ?>
        </nav>
  </div>

<?php endif; ?>


