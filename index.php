<?php get_header(); ?>
		<div id="glavni-dio-sa-obavijestima">
			<?php while (have_posts()) { the_post(); ?>
			<article>
				<h2><?php the_title(); ?></h2>
				<div class="clearfix">
					<div class="vijest">
						<?php the_content(); ?>
					</div>
				</div>
			</article>
			<?php } ?>
		</div>
		<aside>
			<div id="sponzori">
				<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/stari-logo.jpg">
			</div>
		</aside>
<?php get_footer(); ?>