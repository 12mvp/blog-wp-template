  <footer>
    <div class="footer dbms-footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-3">
            <h5>{{ 'HOME_LOCALISATION_PARAMS' | translate }}</h5>
            <form action="javascript;" method="POST">
              <div class="language">
                <select name="language" ng-model="selectedLanguage" ng-change="selectLanguage(selectedLanguage)">
                  <option value="en">English</option>
                  <option value="fr">Français</option>
                  <option value="br">Brazilian / Portuguese</option>
              </select>
              <div class="icon"><i class="fa fa-globe"></i></div>
              </div
              >

              <div class="currency" >
                <select name='currency' ng-model="selectedCurrency" ng-change="selectCurrency(selectedCurrency)">
                  <option value="EUR">&euro; - EUR</option>
                  <option value="USD">$ - USD</option>
                  <option value="GBP">£ - GBP</option>
                  <option value="JPY">¥ - JPY</option>
              </select>

              <div class="icon"><i class="fa" ng-class="'fa-' + defaultToCurrency.code|lowercase"></i></div>
          </div>
      </form>

      <div class="footer-lang">
          <a href="/en">WorldCraze.com in English</a>
      </div>

  </div>

  <div class="col-xs-3">
    <h5>{{ 'HOME_SOCIETY' | translate }}</h5>

    <ul>
      <li><a href="/aboutus" translate>PANE_ABOUTUS</a></li>
      <li><a href="/faq" translate>PANE_FAQ</a></li>
      <li><a href="/customs" translate>PANE_CUSTOMS</a></li>
      <!--<li><a href="/tutorial">Tutoriel</a></li>-->
      <li><a href="/community" translate>PANE_COMMUNITY</a></li>
      <li><a href="/terms" translate>PANE_TERMS</a></li>
  </ul>

</div>

<div class="col-xs-2">
    <h5>{{ 'HOME_FOLLOW_US' | translate }}</h5>

    <ul>
      <li><a target="_blank" href="https://twitter.com/worldcraze">Twitter</a></li>
      <li><a target="_blank" href="https://facebook.com/worldcraze">Facebook</a></li>
      <li><a target="_blank" href="https://plus.google.com/+Worldcraze">Google+</a></li>
      <li><a target="_blank" href="http://laviedansunestartup.tumblr.com">Tumblr</a></li>
      <li><a target="_blank" href="http://www.pinterest.com/worldcraze/">Pinterest</a></li>
      <li><a target="_blank" href="https://www.linkedin.com/company/3514483">Linkedin</a></li>
  </ul>
</div>

<div class="col-xs-4">
    <div class="fb-like-box" data-href="https://www.facebook.com/WorldCraze" data-width="360" data-height="200" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
</div>

</div>
</div>
</div>
</footer>