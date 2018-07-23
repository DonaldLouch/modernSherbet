<h1>modernSherbet Settings</h1>
<h3>Installed Version 1.1.1</h3>
<?php settings_errors(); ?>
  <form method="post" action="options.php">
    <?php settings_fields( 'modernsherbet-settings' ); ?>
    <?php do_settings_sections( 'modernsherbet_settings' ); ?>
    <?php submit_button( 'Save Settings' );  ?>
  </form>
