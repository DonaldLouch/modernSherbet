<?php

function modernsherbet_add_admin_page() {

	//Creates the settings page in the WordPress Dashboard
	add_theme_page( 'modernSherbet', 'modernSherbet', 'manage_options', 'modernsherbet_settings', 'modernsherbet_theme_create_page' );

	//Activate custom settings
	add_action( 'admin_init', 'modernsherbet_custom_settings' );

}
add_action( 'admin_menu', 'modernsherbet_add_admin_page' );

function modernsherbet_theme_create_page() {
	require_once ( get_template_directory(). '/inc/templates/modernsherbet-settings.php' );
}

function modernsherbet_custom_settings() {
	//Register the settings for use in the database + to be used in the theme
	register_setting( 'modernsherbet-settings', 'site_title' );
	register_setting( 'modernsherbet-settings', 'site_link' );
	register_setting( 'modernsherbet-settings', 'start_year' );
	register_setting( 'modernsherbet-settings', 'company_link' );
	register_setting( 'modernsherbet-settings', 'company_name' );

	//Adds setting sections
	add_settings_section( 'modernsherbet-settings-header', 'Header Settings', 'modernsherbet_settings_header', 'modernsherbet_settings' );
	add_settings_section( 'modernsherbet-settings-footer', 'Footer Setting', 'modernsherbet_settings_footer', 'modernsherbet_settings' );
	add_settings_section( 'modernsherbet-settings-links', 'Links', 'modernsherbet_settings_links', 'modernsherbet_settings' );

	//Add "rows"
	add_settings_field( 'site-title', 'Site Title', 'modernsherbet_title', 'modernsherbet_settings', 'modernsherbet-settings-header');
	add_settings_field( 'site-link', 'Site Link', 'modernsherbet_link', 'modernsherbet_settings', 'modernsherbet-settings-header');
	add_settings_field( 'footer-text', 'Footer Text', 'modernsherbet_footer', 'modernsherbet_settings', 'modernsherbet-settings-footer');
}

function modernsherbet_settings_header(){
	echo 'Enter your site title and URL to allow for the best SEO results; and for proper linking for the header logo!';
}

function modernsherbet_settings_footer(){
	echo 'Enter your footer infomation!';
}

function modernsherbet_title(){
	$siteTitle = esc_attr( get_option( 'site_title' ) );
	echo '<input type="text" name="site_title" value="'.$siteTitle.'" placeholder="modernSherbet Theme" />';
}

function modernsherbet_link(){
	$siteLink = esc_attr( get_option( 'site_link' ) );
	echo '<input type="text" name="site_link" value="'.$siteLink.'" placeholder="https://sherbet.theme.donaldlouch.ca/" />';
}

function modernsherbet_footer(){
	$startYear= esc_attr( get_option( 'start_year' ) );
	$companyLink= esc_attr( get_option( 'company_link' ) );
	$companyName= esc_attr( get_option( 'company_name' ) );
	echo '<input type="text" name="start_year" value="'.$startYear.'" placeholder="2013" /> <input type="text" name="company_link" value="'.$companyLink.'" placeholder="https://donaldlouch.ca" /> <input type="text" name="company_name" value="'.$companyName.'" placeholder="Donald Louch Productions" />';
}

function modernsherbet_settings_links(){
	echo '
	<p>For resources in regards to modernSherbet; here are some helpful links:</p>
	<ul>
		<li><a href="https://github.com/DonaldLouch/modernSherbetChild/releases">Download Child Theme</a></li>
		<li><a href="https://github.com/DonaldLouch/modernSherbetShortcode/releases">Download Shortcode Plugin</a></li>
		<li><a href="https://sherbet.theme.donaldlouch.ca/documentation/">Documentation</a></li>
		<li><a href="https://sherbet.theme.donaldlouch.ca/change-log/">Changelog</a></li>
		<li><a href="https://dlproductions.freshdesk.com/support/home">HELP!</a></li>
	</ul>
	';
}
