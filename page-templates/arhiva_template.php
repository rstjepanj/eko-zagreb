<?php
/*Template Name: arhiva_template */?>
<?php get_header();?> 
    	<div id="glavni-dio-sa-obavijestima">
    	<?php
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=10' . '&paged='.$paged);
		while (have_posts()) { the_post(); ?>
			<article>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="clearfix">
					<?php if ( has_post_thumbnail() ) { ?>
					<img class="slika-za-vijest" src="<?php the_post_thumbnail_url(); ?>">
					<?php } ?>
					<div class="vijest">
						<?php echo '<p>'.get_the_excerpt().' <a href="' . get_the_permalink() . '">Pročitajte više</a></p>' ?>
					</div>
				</div>
			</article>
		<?php } ?>
		<?php if ($paged > 1) { ?>
			<div style="display:inline-block; margin-top: 50px;"><?php next_posts_link('&laquo; Starije obavijesti'); ?></div><div style="display:inline-block; float: right; margin-top: 50px;"><?php previous_posts_link('Novije obavijesti &raquo;'); ?></div>
		<?php } else { ?>
			<div style="display:inline-block; margin-top: 50px;"><?php next_posts_link('&laquo; Starije obavijesti'); ?></div>
		<?php } ?>
		</div>
		<aside>
			<div id="sponzori">
				<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/stari-logo.jpg">
			</div>
		</aside>

<?php wp_reset_postdata(); ?>
<?php get_footer();?>