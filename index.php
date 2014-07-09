<?php get_header(); ?>
<body <?php body_class(); ?>>
  <?php get_template_part('template-part', 'facebook-init'); ?>
  <?php get_template_part('template-part', 'head'); ?>
  <?php get_template_part('template-part', 'topnav'); ?>
  <?php get_template_part('template-part', 'navigation'); ?>
  <!-- start content container -->
  <div class="row dmbs-content">
    <?php //left sidebar ?>
    <?php get_sidebar( 'left' ); ?>
    <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">
      <?php // theloop
      if ( have_posts() ) : while ( have_posts() ) : the_post();

                    // single post
      if ( is_single() ) : ?>
      <div <?php post_class(); ?>>
        <div class="post">
          <h3 class="page-header"><?php the_title() ;?></h3>
        </div>

        <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail("large");?>
        <div class="clear"></div>
      <?php endif; ?>
      <?php the_content(); ?>
      <?php wp_link_pages(); ?>
      <?php get_template_part('template-part', 'postmeta'); ?>
      <?php comments_template(); ?>
    </div>
    <?php
                    // list of posts
    else : ?>
    <div <?php post_class(); ?>>
      <h3 class="page-header">
        <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'devdmbootstrap3' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
      </h3>
      <div class="center-img">
        <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( array(447,260) ) ?>
        <?php the_post_thumbnail_caption(); ?>
      <?php endif; ?>
    </div>
    <div class="paragraph-article">
      <?php the_content(); ?>
    </div>
    <?php wp_link_pages(); ?>
    <?php get_template_part('template-part', 'postmeta'); ?>
    <?php  if ( comments_open() ) : ?> 
    <a class="btn btn-success comment-article" href="<?php the_permalink(); ?>#comments"><?php comments_number(__('Leave a Comment','devdmbootstrap3'), __('One Comment','devdmbootstrap3'), '%' . __(' Comments','devdmbootstrap3') );?> <span class="glyphicon glyphicon-comment"></span></a>
  <?php endif; ?>
</div>

<?php  endif; ?>

<?php endwhile; ?>
<?php posts_nav_link(); ?>
<?php
if ( function_exists('wp_bootstrap_pagination') )
wp_bootstrap_pagination();
?>
<?php else: ?>

  <?php get_404_template(); ?>

<?php endif; ?>

</div> <?php //end main content ?>

<?php get_sidebar( 'right' ); ?>
</div> <?php //end row ?>

</div>

<?php get_footer(); ?>

<?php
/* Always have wp_footer() just before the closing </body>
* tag of your theme, or you will break many plugins, which
* generally use this hook to reference JavaScript files.
*/
wp_footer();
?>

</body>
</html>
