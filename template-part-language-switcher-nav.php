<?php if ( has_nav_menu( 'footer_menu' ) ) : ?>
   <?php
//         wp_nav_menu( array(
//             'theme_location'    => 'footer_menu',
//             'depth'             => 2,
//             'container'         => '',
//             'container_class'   => '',
//             'menu_class'        => '',
//             'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
//             'walker'            => new wp_bootstrap_navwalker()),
//             'items_wrap'     => '<select id="drop-nav"><option value="">Select a page...</option>%3$s</select>',
//             'walker'  => new Walker_Nav_Menu_Dropdown()));
//         );
    ?>

<?php endif; ?>

<?php dynamic_sidebar( 'language-widget' ); ?>