<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>

		<div id="glavni-dio-sa-obavijestima">
			<h1><?php printf('Rezultati pretraživanja za: ' . '<span>' . get_search_query() . '</span>' ); ?></h1>
			<?php while (have_posts()) { the_post(); ?>
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
		</div>
		<aside>
			<div id="sponzori">
				<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/stari-logo.jpg">
			</div>
		</aside>

	<?php else : ?>
		<div id="glavni-dio-sa-obavijestima">
			<article>
				<h2>Nema rezultata</h2>
				<div class="clearfix">
					<div class="vijest">
						<p>Nažalost, ništa nije pronađeno.</p>
					</div>
				</div>
			</article>
		</div>
		<aside>
			<div id="sponzori">
				<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/stari-logo.jpg">
			</div>
		</aside>
	<?php endif; ?>
<?php get_footer(); ?>