<?php global $dm_settings; ?>
<?php if ($dm_settings['show_header'] != 0) : ?>

    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container"><!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header"><a class="navbar-brand" href="https://worldcraze.com">WorldCraze</a></div><!-- Collect the nav links, forms, and other content for toggling -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/"><i class="glyphicon glyphicon-edit"></i> Blog</a></li>
          <li class="divider-vertical"></li>
          <li><a href="https://worldcraze.com/tasks"><i class="glyphicon glyphicon-edit"></i> Tâches</a></li>
          <li class="divider-vertical"></li>
          <li><a href="https://worldcraze.com/catalog"><button class="btn btn-default find-product">Rechercher un produit</button></a></li>
          <li class="divider-vertical"></li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img alt="avatar" src="https://s3-eu-west-1.amazonaws.com/worldcraze.com/prod/images-profile/facebook/guirect_thumbnail.jpeg"> Guirec <b class="glyphicon glyphicon-chevron-down caretx"></b></a>
            <ul class="dropdown-menu">
              <li><a href="https://worldcraze.com/dashboard"><i class="fa fa-dashboard"></i> Tableau de Bord</a></li>
              <li><a href="https://worldcraze.com/add-travel"><i class="fa fa-paper-plane"></i> Ajouter votre voyage</a></li>
              <li class="divider"></li>
              <li><a href="https://worldcraze.com/logout"><i class="fa fa-sign-out"></i> Déconnexion</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

<?php endif; ?>


<div class="container dmbs-container">
