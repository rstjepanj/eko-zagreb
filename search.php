<?php get_header(); ?>
<main class="search">


	<?php if ( have_posts() ) : ?>

		<section id="articles" class="section-padding container">
			<h2 style="margin-bottom: 60px;"><?php printf('Rezultati pretraživanja za: ' . '<strong>' . get_search_query() . '</strong>' ); ?></h2>
            <div id="articles-container">
				<?php while (have_posts()) { the_post(); ?>
				<a href="<?php the_permalink(); ?>" class="article">
                    <h2 class="subtitle"><?php the_title(); ?></h2>
                    <div class="article-text clearfix">
						<?php if ( has_post_thumbnail() ) { ?>
						<img src="<?php the_post_thumbnail_url(); ?>" alt="">
						<?php } ?>
                        <?php echo '<p>'.get_the_excerpt().'</p>' ?>
                    </div>
                </a>
				<?php } ?>
            </div>
        </section>

	<?php else : ?>

		<section id="articles" class="section-padding container">
			<h2 style="margin-bottom: 60px;"><?php printf('Rezultati pretraživanja za: ' . '<strong>' . get_search_query() . '</strong>' ); ?></h2>
            <div id="articles-container">
				<div class="article">
                    <h2 class="subtitle">Nema rezultata</h2>
                    <div class="article-text clearfix">
						<p>Nažalost, ništa nije pronađeno.</p>
                    </div>
				</div>
            </div>
        </section>

	<?php endif; ?>

</main>
<?php get_footer(); ?>