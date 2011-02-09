<?php global $soup; ?>
<div id="footer"><footer>
	<div id="footNavWrap" class="nav" role="navigation"><nav>
		<ul id="footNav">
		<?php
			if (function_exists('wp_nav_menu')) {
				wp_nav_menu(array(
						'menu' => 'footer',
						'container' => 'ul',
						'container_id' => 'footNavWrap',
						'menu_class' => '',
						'menu_id' => 'footNav',
						'depth' => 1,
						'show_home' => 1,
						'fallback_cb' => array(&$soup,'listPages')
						
					));
			}
			else {
				$soup->listPages();
			}
			
		?>
		</ul>
	</nav></div>
	
	<div id="footWidgets" role="complementary"><?php
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) {
			//insert static sidebar
			echo '<!' . '-- no footer widgets --' . '>';
		}
	?></div>
	<!-- //#footWidgets -->

	<ul id="footLegal" role="contentinfo">
		<li class="copyright">Copyright &copy; 2011 <?php bloginfo('name'); ?></li>
		<li class="credits">Site design by ???, developed by <a href="http://soupgiant.com">Soupgiant</a></li>
		<li class="powered">Powered by <a href="http://wordpress.org">WordPress</a></li>
	</ul>
	<!-- //#footLegal -->



</footer></div>
<!-- //#footer -->
</div> 
<!-- //#pageWrap -->
<?php wp_footer(); ?>
</body>
</html>