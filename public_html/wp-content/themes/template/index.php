<?php get_header(); ?>

<div class="background">
	<div class="buttons">
		<button><a href="https://thefarm.se/">Om The Farm</a> </button> 
		<button><a href="https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX8577137.jpg">Projekt</a></button> 
		<button><a href="https://www.farming-simulator.com/">Jobba hos oss</a></button>
	</div>
	<head>
		<div class="Txex">
		<img src="<?php echo get_template_directory_uri(); ?>/the_farm_logo_text.svg" alt="the_farm_logo_text.svg">
			<h2>Tel: 08-528 000 00</h2>
			<h2>hej@thefarm.se</h3>
		</div>
	</head>
	<body>
		<div class="ndtext">
			<h2>OM OSS </h2>
			<p>The Farm är en digital teknikbyrå som hjälper start-ups, reklambyråer och företag med att utveckla tjänster inom digitala plattformar.</p>
			<p>Vi erbjuder webbutveckling, systemutveckling, iOS-appar, backend, frontend, hosting och drift.</p>
			<p>Vi är 13 anställda och har kontor i Stockholm och Falköping.</p>
			<p>Vi kan ta på oss hela uppdrag, eller stödja er med en eller flera konsulter som jobbar med ert team.</p>
		</div>
		<div class="webtype">
			<ul>
				<li><a href="/?filter=webb">Webb</a></li>
				<li><a href="/?filter=android">Android</a></li>
				<li><a href="/?filter=ios">iOS</a></li>
			</ul>
		</div>
		<?php
			$posts_array = get_posts(array('numberposts' => -1, 'tag' => $_GET['filter']));
		?>
		<div class=" wrapper">
			<?php foreach($posts_array as $post): ?>
				<div class="post">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
					<h1><?php echo $post->post_title; ?></h1>
					<p><?php echo $post->post_content; ?></p>	
					<a href="<?php echo get_post_meta($post->ID, 'project link', true);?>">test</a>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="yamato">
			<div class="yamatobox">
			  <h2>Arbeta hos oss</h2>
			  <p>Vi växer och söker alltid nya duktiga medarbetare.</p>
			  <h4>Kontakta oss på <a href="https://jobb.thefarm.se">jobba@thefarm.se</a>.</h4>
			</div>
		</div>
	</body>
	<div class="footer">
		<p><a href="mailto:joakim.eriksson@thefarm.se">Tf. VD: Joakim Eriksson,</a> <a href="tel:0708773361">tel: 070-877 33 61</a></p>
		<p><a href="mailto:magnus@thefarm.se">CTO: Magnus Knutas,</a> <a href="tel:0735016017">tel: 073-501 60 17</a></p>
		<p><a href="mailto:anna@thefarm.se">Förfrågningar: Anna Dahlgren,</a> <a href="tel:0702487887">tel: 070-248 78 87</a></p>
		<p><a href="mailto:support@thefarm.se">Support 9:00-15:00,</a> <a href="tel:0739827857">tel: 073-982 78 57</a></p>
		<p>Birger Jarlsgatan 9, 111 45 Stockholm</p>
		<p>Göteborgsvägen 5, 521 30 Falköping</p>
		<img src="<?php echo get_template_directory_uri(); ?>/the_farm_logo_cube.svg" alt="the_farm_logo_cube.svg">
	</div>
</div>

<?php get_footer(); ?>
