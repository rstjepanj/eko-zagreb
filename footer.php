</main>
	<footer>
		<div class="clearfix">
			<div>
				<h3>Kontakt</h3>
				<p>Telefon: +385 95 525 22 87</p>
				<p>Email: udrugaekozagreb@gmail.com</p>
				<p>Sjedište: Vlaška 46, Zagreb, 10 000</p>
				<p>IBAN: HR25 2390 0011 1003 5345 3</p>
			</div>
			<div id="srednji-div-footera">
				<h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>multimedija">Multimedija</a></h3>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>fotografije">Fotografije</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>video">Video</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>dokumenti">Dokumenti</a></li>
				</ul>
			</div>
			<div>
				<h3>Za medije</h3>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>priopcenja">Priopćenja</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/stari-logo.jpg">Logo</a></li>
				</ul>
			</div>
		</div>
	</footer>
	</div>
	<script type="text/javascript">
		function hamburgerFunction() {
		    var x = document.getElementById("myTopnav");
		    if (x.className === "topnav") {
		        x.className += " responsive";
		    } else {
		        x.className = "topnav";
		    }
		}
		function searchFunction() {
		    var x = document.getElementById("mobile-search-button");
		    if (x.className === "") {
		        x.className += "hide-button";
		    } else {
		        x.className = "";
		    }
		    x = document.getElementById("search");
		    if (x.className === "") {
		        x.className += "show-search";
		        document.getElementById("search-text").focus();
		    } else {
		        x.className = "";
		    }
		}
	</script>
	<?php if (is_front_page()) : ?>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		  $('.galerija').slick({
		  	dots: false,
			infinite: true,
			speed: 500,
			autoplaySpeed: 5000,
			fade: true,
			cssEase: 'linear',
			autoplay:true,
			arrows:false
		  });
		});
	</script>
	<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>