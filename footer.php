			<?php
				$startYear= esc_attr( get_option( 'start_year' ) );
				$companyLink= esc_attr( get_option( 'company_link' ) );
				$companyName= esc_attr( get_option( 'company_name' ) );
			?> <!-- Listens for the settings for year, link, and company name -->
		<footer role="contentinfo">
			<p>&copy; <?php print $startYear; ?> - <?php echo date('Y'); ?> <span class="footerButton"><a href="<?php print $companyLink; ?>"><?php print $companyName; ?></a> | Website is Proudly Powered by <a href="https://wordpress.org/" alt="Wordpress">WordPress</a></span></p>
		</footer>

</div>
<?php wp_footer(); ?>

	</body>
</html>
