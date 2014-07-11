<?php global $dm_settings; ?>
<?php if ($dm_settings['show_header'] != 0) : ?>

    <nav class="navbar navbar-inverse ng-scope" role="navigation" ng-if="currentUser">
      <div class="container"><!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header"><a class="navbar-brand" href="/">WorldCraze</a></div><!-- Collect the nav links, forms, and other content for toggling -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="" class="ng-binding"><i class="glyphicon glyphicon-edit"></i> Blog <span class="label label-danger ng-binding" ng-show="nbNewTasks" style="display: none;">0</span></a></li>
          <li class="divider-vertical"></li>
          <li><a href="/tasks" class="ng-binding"><i class="glyphicon glyphicon-edit"></i> Tâches <span class="label label-danger ng-binding" ng-show="nbNewTasks" style="display: none;">0</span></a></li>
          <li class="divider-vertical"></li>
          <li><a href="/catalog"><button class="btn btn-default find-product ng-binding">Rechercher un produit</button></a></li>
          <li class="divider-vertical"></li>
          <li class="dropdown"><a href="#" class="dropdown-toggle ng-binding" data-toggle="dropdown"><img ng-src="https://s3-eu-west-1.amazonaws.com/worldcraze.com/prod/images-profile/facebook/guirect_thumbnail.jpeg" alt="avatar" src="https://s3-eu-west-1.amazonaws.com/worldcraze.com/prod/images-profile/facebook/guirect_thumbnail.jpeg"> Guirec <b class="glyphicon glyphicon-chevron-down caretx"></b></a>
            <ul class="dropdown-menu">
              <li><a href="/dashboard" class="ng-binding"><i class="fa fa-dashboard"></i> Tableau de Bord</a></li>
              <li><a href="/add-travel" class="ng-binding"><i class="fa fa-paper-plane"></i> Ajouter votre voyage</a></li>
              <li class="divider"></li>
              <li><a href="/logout" class="ng-binding"><i class="fa fa-sign-out"></i> Déconnexion</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

<?php endif; ?>


<div class="container dmbs-container">
