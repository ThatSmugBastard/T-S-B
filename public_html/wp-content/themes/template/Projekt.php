<?php /* Template Name: Projekt */ ?>
<?php get_header(); ?>
<div class="webtype">
    <div class="buttons">
	    <button class="buttonstyle"><a href="/">Om The Farm</a> </button> 
	    <button class="buttonstyle"><a href="/projekt">Projekt</a></button> 
	    <button class="buttonstyle"><a href="/jobba-hos-oss">Jobba hos oss</a></button>
    </div>
		<ul>
			<li><a href="/?filter=webb">Webb</a></li>
			<li><a href="/?filter=android">Android</a></li>				<li><a href="/?filter=ios">iOS</a></li>
		</ul>
    </div>
    	<?php
		    $posts_array = get_posts(array('numberposts' => -1, 'tag' => $_GET['filter']));
	    ?>
	<div class=" wrapper">
		<div class="donken">
			<?php foreach($posts_array as $post): ?>
				<div class="post"></a>
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
<?php get_footer(); ?>