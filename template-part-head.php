<?php global $dm_settings; ?>
<?php if ($dm_settings['show_header'] != 0) : ?>

    <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
      <div class="navbar-header">

        <a class="navbar-brand" href="<?php echo home_url(); ?>">WorldCraze</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse">
       <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Blog</a></li>
        <li class="divider-vertical"></li>
        <li><a href="#"><span class="glyphicon glyphicon-edit"></span>Tâches</a></li>
        <li class="divider-vertical"></li>
        <li><a href="#"><button type="button" class="btn btn-success">Rechercher un produit</button></a></li>
        <li class="divider-vertical"></li>
        <li class="dropdown">
          <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
            Hugo
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tableau de bord</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Ajouter votre voyage</a></li>
            <li role="presentation" class="divider"></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Déconnexion</a></li>
          </ul>
        </li>
      </ul> 
      
    </div>
  </div>
  <!-- /.navbar-collapse -->
</nav>

<?php endif; ?>
<div class="container dmbs-container">

