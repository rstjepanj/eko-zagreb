<?php get_header(); ?>
	<main class="homepage">
        <section id="hero" style="background-image: url(<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/hero.jpg);">
            <div id="call-to-action-container">
                <div id="call-to-action-text">Zaštitom okoliša stvaramo bolju budućnost</div>
                <a href="#donate" class="button-transparent">Uključi se</a>
            </div>
        </section>
        <section id="statistics" class="section-padding container">
            <h1 class="title">U Republici Hrvatskoj</h1>
            <div id="statistics-container" class="row">
                <div class="col-md mb-5 mb-md-0">
                    <div class="statistic">
                        <div class="statistic-number">11</div>
                        <div class="statistic-text">milijuna tona otpada se godišnje baca lorem ipsum dolor</div>
                    </div>
                </div>
                <div class="col-md mb-5 mb-md-0">
                    <div class="statistic">
                        <div class="statistic-number">22%</div>
                        <div class="statistic-text">svog komunalnog otpada se ne reciklira</div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="statistic">
                        <div class="statistic-number">3,1</div>
                        <div class="statistic-text">milijun plastičnih boca završi u moru lorem ipsum</div>
                    </div>
                </div>
            </div>
        </section>
        <section id="issues" class="section-padding container">
            <h1 class="title">Pitanja danas</h1>
            <div id="issues-container">
                <div class="issue">
                    <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/ekologija.jpg" alt="" />
                    <div class="issue-text">
                        <h2 class="subtitle">Ekologija</h2>
                        <p>Znanost o međusobnim ovisnostima i utjecajima živih organizama i njihova živog i neživog okoliša. Pojam ekologija (oekologie) prvi put spominje i uvodi njemački zoolog Ernst Haeckel 1869. godine i opisuje ju kao cjelokupnu znanost
                            o odnosima organizama spram svijeta koji ih okružuje, dijelom organske, dijelom anorganske prirode. </p>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/pitanja-danas/ekologija" class="read-more">Pročitaj više</a>
                    </div>
                </div>
                <div class="issue">
                    <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/vode.jpg" alt="" />
                    <div class="issue-text">
                        <h2 class="subtitle">Vode</h2>
                        <p>Voda je najrasprostranjenija kapljevina (tekućina) na Zemlji (obujma ~1500 x 109 km3) i najvažnije (polarno) otapalo koje otapa kapljevine, plinove i mnogobrojne krutine. Voda zbog polarnosti posjeduje izvrstan kapacitet da otapa
                            različite vrste tvari. Molekula vode (H2O) sastoji se od dvaju atoma vodika i atoma kisika. </p>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/pitanja-danas/vode" class="read-more">Pročitaj više</a>
                    </div>
                </div>
                <div class="issue">
                    <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/gospodarenje-otpadom.jpg" alt="" />
                    <div class="issue-text">
                        <h2 class="subtitle">Gospodarenje otpadom</h2>
                        <p>Eko otok Krk je ekološki zasnovan sustav zbrinjavanja komunalnoga otpada. Uveden 2005. godine, sustav je s početnih 16% odvojeno prikupljenog otpada u 2015. dosegnuo 50%. Cilj je do 2020. stupanj odvojenog prikupljanja otpada povećati
                            na 80%. Kućni otpad se odvojeno prikuplja u u pet spremnika (biootpad, papir, PET, staklo, ostalo). </p>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/pitanja-danas/gospodarenje-otpadom" class="read-more">Pročitaj više</a>
                    </div>
                </div>
                <div class="issue">
                    <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/odrzivi-razvoj.png" alt="" />
                    <div class="issue-text">
                        <h2 class="subtitle">Održivi razvoj</h2>
                        <p>Održivi razvoj je okvir za oblikovanje politika i strategija kontinuiranog gospodarskog i socijalnog napretka, bez štete za okoliš i prirodne izvore bitne za ljudske djelatnosti u budućnosti. Oslanja se na ideju prema kojoj razvoj
                            ne smije ugrožavati budućnost dolazećih naraštaja trošenjem neobnovljivih izvora i dugoročnim devastiranjem i zagađivanjem okoliša. </p>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/pitanja-danas/odrzivi-razvoj" class="read-more">Pročitaj više</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="articles" class="section-padding container">
            <h1 class="title">Najnovije vijesti</h1>
            <div id="articles-container">
				<?php for ($x = 0; $x < 4 && have_posts(); $x++) { the_post(); ?>
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
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>arhiva/" class="lime-button">Sve vijesti</a>
            </div>
        </section>
        <section id="events" class="section-padding container">
            <h1 class="title">Aktualna događanja</h1>
            <div id="events-container">
				<?php
				$temp = $wp_query; $wp_query= null;
				$wp_query = new WP_Query(array('posts_per_page'=>4, 'tag' => 'aktualno'));
				if (have_posts()) : 
					while (have_posts()) { the_post(); ?>
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
				<?php else : ?>
					<p style="text-align: center; margin-bottom: 45px;">Trenutno nema aktualnih dogadanja</p>
				<?php endif; ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>edukacije" class="lime-button">Sva događanja</a>
            </div>
        </section>
        <section id="donate" class="section-padding container">
            <h1 class="title">Podržite rad udruge</h1>
            <p>
                Udruga uvijek traži nove članove koji su voljni odvojiti svoje vrijeme za dobrobit našeg okoliša. <br />Ako ste zainteresirani možete nam se javiti na email adresu <br /><a href="mailto:udrugaekozagreb@gmail.com" class="lime-color bold">udrugaekozagreb@gmail.com</a><br
                /> ili telefonom na <br /><a href="tel:+385955252287" class="lime-color bold">+385 95 525 22 87</a> <br />Ukoliko biste radije podržali rad udruge novčanom donacijom to možete učiniti uplatom na IBAN <br /><strong>HR25 2390 0011 1003 5345 3</strong>
            </p>
        </section>
    </main>
	
<?php get_footer(); ?>