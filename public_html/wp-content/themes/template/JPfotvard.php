<?php /* Template Name: JPfotvard */ ?>
<?php get_header(); ?>
<title>JP Fotvård</title>
<div class="JPbackground">


    <div class="JPlogo"> 
        <image src="<?php echo get_template_directory_uri(); ?>/JP_Fotvard_logo.jpg" alt="JP_Fotvard_logo.jpg"/>
    </div>    
    <div class="JPtext">
        <h3>Information</h3>
        <p>Välkommen till JP Fotvård AB på Rådmansgatan 24 i Skövde.</p>
        <p>Jag heter Jenny Palmborg och är diplomerad medicinsk fotterapeut. Jag hjälper dig som behöver fotvård och behandlar fotproblem som exempelvis
        hälsprickor, nageltrång eller nagel och fotsvamp. Jag erbjuder även välgörande fotmassage, underbensmassage och fotspa.</p>
        <div class="JPpostwrap">
		<div class="JPpostdonk">
        <?php
		    $posts_array = get_posts(array('numberposts' => -1, 'post_type' => 'service'));
	    ?>
			<?php foreach($posts_array as $post): ?>
				<div class="post">
                    <a href="<?php echo $post->guid; ?>" >
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </a>
					<h1><?php echo $post->post_title; ?></h1>
					<p><?php echo $post->post_content; ?></p>	
					<a href="<?php echo get_post_meta($post->ID, 'project link', true);?>"><?php echo get_post_meta($post->ID, 'project link text', true);?> </a>
				</div>
			<?php endforeach; ?>
        </div>
	</div>
            	<?php
		    $posts_array = get_posts(array('post_type' => 'service', 'limit' => -1));
	    ?>
            <div class="JPfooter">
                <p><span>Telefon:</span><a href="tel:0500440644">0500-44 06 44</a></p>
                <p><span>Epost:</span><a href="mailto:jpfotvard@gmail.com">jpfotvard@gmail.com</a></p>
            </div>
            <div class="JPfooter">
                <p><span>Facebook:</span><a href="https://sv-se.facebook.com/JP-Fotv%C3%A5rd-AB-866174246829752/">JP Fotvård AB</a></p>
                <p><span>Boka Direkt:</span><a href="https://www.bokadirekt.se/places/jp-fotv%C3%A5rd-ab-14239/">Boka Direkt</a></p>
            </div>
            <div class="JPfooter">
                <p><span>Adress:</span> <a>Rådmansgatan 24, 541 45 Skövde</a></p>

            </div>
            <div class="JPfooter">
                <p><span>Jenny Palmborg;</span> <a>2015-2019</a></p>
            </div>
  
	
    </div>
<?php wp_footer(); ?>

</div><!--JPbackground-->