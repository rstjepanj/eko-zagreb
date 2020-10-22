<?php get_header(); ?>
<main class="indexpage">
	<section id="articles" class="section-padding container">
		<div id="articles-container">
			<?php while (have_posts()) { the_post(); ?>
			<div class="article">
				<h2 class="subtitle"><?php the_title(); ?></h2>
				<div class="article-text clearfix">
					<?php the_content(); ?>
				</div>
			</div>
			<?php } ?>
		</div>
	</section>
</main>
<?php get_footer(); ?>