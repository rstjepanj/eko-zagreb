<?php get_header(); ?>

		<div id="linkovi-galerija" class="clearfix">
			<div id="korisni-linkovi">
				<h1><a href="#">Ekologija</a></h1>
				<?php wp_nav_menu(array('menu' => 'Sekundarni', 'menu_id' => 'sekundarni', 'container' => false)); ?>
			</div>
			<div class="galerija">
				<div><div class="slika-galerija" style="background-image: url(<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/1.jpg);"></div></div>
				<div><div class="slika-galerija" style="background-image: url(<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2.jpg);"></div></div>
				<div><div class="slika-galerija" style="background-image: url(<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/3.jpg);"></div></div>
				<div><div class="slika-galerija" style="background-image: url(<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/4.jpg);"></div></div>
				<div><div class="slika-galerija" style="background-image: url(<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/5.jpg);"></div></div>
			</div>
		</div>
		<div id="glavni-dio-sa-obavijestima">
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>arhiva">Obavijesti</a></h1>
			<?php for ($x = 0; $x < 4 && have_posts(); $x++) { the_post(); ?>
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
			<br>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>arhiva">Arhiva obavijesti</a>
		</div>
		<aside>
			<div id="sponzori">
				<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/stari-logo.jpg">
			</div>
		</aside>
	
<?php get_footer(); ?>