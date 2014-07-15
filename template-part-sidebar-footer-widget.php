<?php
global $dm_settings;
if ($dm_settings['show_footer_widget'] != 0) : ?>
    <?php dynamic_sidebar( 'footer-widget' ); ?>
<?php else: ?>
	<div class="fb-like-box" data-href="https://www.facebook.com/worldcraze" data-height="200" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>	    </div>
<?php endif; ?>