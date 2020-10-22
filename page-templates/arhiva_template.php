<?php
/*Template Name: arhiva_template */?>
<?php get_header();?> 
<main class="list">
	<?php
	$temp = $wp_query; $wp_query= null;
	$wp_query = new WP_Query(); $wp_query->query('posts_per_page=10' . '&paged='.$paged);
	while (have_posts()) { the_post(); ?>
		<section id="articles" class="section-padding container">
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
			<?php } ?>
			<?php if ($paged > 1) { ?>
				<div style="display:inline-block; margin-top: 50px;"><?php next_posts_link('&laquo; Starije obavijesti'); ?></div><div style="display:inline-block; float: right; margin-top: 50px;"><?php previous_posts_link('Novije obavijesti &raquo;'); ?></div>
			<?php } else { ?>
				<div style="display:inline-block; margin-top: 50px;"><?php next_posts_link('&laquo; Starije obavijesti'); ?></div>
			<?php } ?>
        </section>
</main>
<?php wp_reset_postdata(); ?>
<?php get_footer();?>