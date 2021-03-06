<?php
get_header();
?>


	<div id="content">
		<div id="contentHeadA" class="section" role="main">
		
			<div id="contentHead" class="header">
				<h1 id="pageName">
				<?php if ( is_day() ) : ?>
					Daily Archives: <span><?php the_time(get_option('date_format')); ?></span>
				<?php elseif ( is_month() ) : ?>
					Monthly Archives: <span><?php the_time('F Y'); ?></span>
				<?php elseif ( is_year() ) : ?>
					Annual Archives: <span><?php the_time('Y'); ?></span>
				<?php elseif ( is_tag() ) : ?>
					Tag Archives: <span><?php bigRed_multiTagTitle(); ?></span>
				<?php elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) : ?>
					Blog Archives
				<?php endif; ?>				
				</h1>
			</div>

			<div id="contentA" class="hfeed">

				<?php get_template_part( 'template-parts/loop', 'archive' ); ?>
			
				<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div id="page-nav" class="page-nav nav">
					<div class="page-nav-older"><?php next_posts_link('Older posts') ?></div>
					<div class="page-nav-newer"><?php previous_posts_link('Newer posts') ?></div>
				</div>
				<!-- //#page-nav -->
				<?php endif; ?>
			
			
			</div>
			<!-- //#contentA -->
		</div>
		<!-- //#contentHeadA -->
		<?php get_sidebar('a'); ?>
	</div><!-- //#content -->
<?php 
get_sidebar('b'); 
get_footer();
?>