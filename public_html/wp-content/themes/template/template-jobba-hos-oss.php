<?php /* Template Name: Jobba Hos Oss */ ?>
<?php get_header(); ?>

<div class="yamato">
    <div class="buttons">
	    <button class="buttonstyle"><a href="/">Om The Farm</a> </button> 
	    <button class="buttonstyle"><a href="/projekt">Projekt</a></button> 
	    <button class="buttonstyle"><a href="/jobba-hos-oss">Jobba hos oss</a></button>
    </div>
			<div>
			  <h2>Arbeta hos oss</h2>
			  <p>Vi växer och söker alltid nya duktiga medarbetare.</p>
			  <h4>Kontakta oss på <a href="https://jobb.thefarm.se">jobba@thefarm.se</a>.</h4>
			</div>
			<?php
		    $posts_array = get_posts(array('numberposts' => -1, 'post_type' => 'employee'));
	    ?>
				<div>
					<h2>Anställda</h2>
					<div class="yamatobox">
						<?php foreach($posts_array as $post): ?>
							<h3> <?php echo $post->post_title; ?> </h3>
							<p> <?php echo  $post->post_content; ?></p>
						<?php endforeach; ?>
					</div>
				</div>
    </div>
<?php get_footer(); ?>