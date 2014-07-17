  <footer>
    <div class="footer dbms-footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-3">
            <h5><?php _e('Localisation settings', 'devdmbootstrap3'); ?></h5>

            <form action="javascript;" method="POST">
              <div class="language">
                <?php get_template_part('template-part', 'language-switcher-nav'); ?>
                <div class="icon"><i class="fa fa-globe"></i></div>
              </div>

              <div class="currency" >
                <select name='currency'>
                  <option value="EUR">&euro; - EUR</option>
                  <option value="USD">$ - USD</option>
                  <option value="GBP">£ - GBP</option>
                  <option value="JPY">¥ - JPY</option>
              </select>

              <div class="icon"><i class="fa"></i></div>
          </div>
      </form>

      <div class="footer-lang">
          <a href="https://worldcraze.com/en"><?php _e('WorldCraze.com in English', 'devdmbootstrap3'); ?></a>
      </div>

  </div>

  <div class="col-xs-3">
    <h5><?php _e('Society', 'devdmbootstrap3'); ?></h5>

    <ul>
      <li><a href="https://worldcraze.com/aboutus"><?php _e('Who are we?', 'devdmbootstrap3'); ?></a></li>
      <li><a href="https://worldcraze.com/faq"><?php _e('FAQ', 'devdmbootstrap3'); ?></a></li>
      <li><a href="https://worldcraze.com/customs"><?php _e('Customs', 'devdmbootstrap3'); ?></a></li>
      <li><a href="https://worldcraze.com/community"><?php _e('Our rules', 'devdmbootstrap3'); ?></a></li>
      <li><a href="https://worldcraze.com/terms"><?php _e('Terms and conditions', 'devdmbootstrap3'); ?></a></li>
  </ul>

</div>

<div class="col-xs-2">
    <h5><?php _e('Follow us', 'devdmbootstrap3'); ?></h5>

    <ul>
      <li><a target="_blank" href="https://twitter.com/worldcraze"><?php _e('Twitter', 'devdmbootstrap3'); ?></a></li>
      <li><a target="_blank" href="https://facebook.com/worldcraze"><?php _e('Facebook', 'devdmbootstrap3'); ?></a></li>
      <li><a target="_blank" href="https://plus.google.com/+Worldcraze"><?php _e('Google +', 'devdmbootstrap3'); ?></a></li>
      <li><a target="_blank" href="http://laviedansunestartup.tumblr.com"><?php _e('Tumblr', 'devdmbootstrap3'); ?></a></li>
      <li><a target="_blank" href="http://www.pinterest.com/worldcraze/"><?php _e('Pinterest', 'devdmbootstrap3'); ?></a></li>
      <li><a target="_blank" href="https://www.linkedin.com/company/3514483"><?php _e('Linkedin', 'devdmbootstrap3'); ?></a></li>
  </ul>
</div>

<div class="col-xs-4">
    <?php get_template_part('template-part', 'sidebar-footer-widget'); ?>
</div>

</div>
</div>
</div>
</footer>