<?php
global $dm_settings;
if (isset($_COOKIE["ui"])) {
  $url = trim($_COOKIE['ui'],'\"');
}
?>

<?php if ($dm_settings['show_header'] != 0 && isset($_COOKIE["un"])) : ?>
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container"><!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header"><a class="navbar-brand" href="https://worldcraze.com">WorldCraze</a></div><!-- Collect the nav links, forms, and other content for toggling -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/"><i class="glyphicon glyphicon-edit"></i> <?php _e('Blog', 'devdmbootstrap3'); ?></a></li>
          <li class="divider-vertical"></li>
          <li><a href="https://worldcraze.com/tasks"><i class="glyphicon glyphicon-edit"></i> <?php _e('Tasks', 'devdmbootstrap3'); ?></a></li>
          <li class="divider-vertical"></li>
          <li><a href="https://worldcraze.com/catalog"><button class="btn btn-default find-product"><?php _e('Search an item', 'devdmbootstrap3'); ?></button></a></li>
          <li class="divider-vertical"></li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img alt="avatar" src="<?php echo $url; ?>"> <?php echo $_COOKIE["un"]; ?> <b class="glyphicon glyphicon-chevron-down caretx"></b></a>
            <ul class="dropdown-menu">
              <li><a href="https://worldcraze.com/dashboard"><i class="fa fa-dashboard"></i><?php _e('Dashboard', 'devdmbootstrap3'); ?></a></li>
              <li><a href="https://worldcraze.com/add-travel"><i class="fa fa-paper-plane"></i><?php _e('Add your travel', 'devdmbootstrap3'); ?></a></li>
              <li class="divider"></li>
              <li><a href="https://worldcraze.com/logout"><i class="fa fa-sign-out"></i><?php _e('Log out', 'devdmbootstrap3'); ?></a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  <?php elseif ($dm_settings['show_header'] != 0): ?>
    <nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
      <div class="logo smaller">
        <a href="https://worldcraze.com">
    <img src="<?php echo get_template_directory_uri() ?>/img/logo-big.png" alt="logo" />
  </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="https://worldcraze.com/signup"><?php _e('Subscribe now', 'devdmbootstrap3'); ?></a></li>
          <li><a href="https://worldcraze.com/connexion"><?php _e('Sign in', 'devdmbootstrap3'); ?></a></li>
  </ul>
      </div>
    </div>
  </nav>
<?php endif; ?>


<div class="container dmbs-container">
