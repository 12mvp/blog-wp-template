<?php global $dm_settings; ?>
<?php if ($dm_settings['show_postmeta'] != 0) : ?>
    <div class="meta">
        <div class="author-article">
            <span class="glyphicon glyphicon-user"></span> <?php the_author_posts_link(); ?>
        </div>
        <div class="info-article">
            <span class="glyphicon glyphicon-time"></span>  <span class="one-meta"><?php the_time('F jS, Y'); ?></span>
            <span class="glyphicon glyphicon-edit"></span> <span class="one-meta"><?php edit_post_link(__('Edit','devdmbootstrap3')); ?></span>
            <span class="glyphicon glyphicon-circle-arrow-right"></span> <span class="one-meta"><?php _e('Posted In','devdmbootstrap3'); ?>: <?php the_category(', '); ?></span>
            <?php if( has_tag() ) : ?>
                <span class="glyphicon glyphicon-tags"></span>
                <?php the_tags(); ?>
            <?php endif; ?>
            <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
        </div>
    </div>
<?php endif; ?>