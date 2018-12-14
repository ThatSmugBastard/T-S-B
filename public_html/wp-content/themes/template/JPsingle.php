<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 
get_header(); ?>
 <p>Tjenare</p>
  <main class="single">
    <div class="buttons">
		<button class="singlebuttonstyle"><a href="localhost:8000/jpfotvard">Tillbaks till Projekt</a></button> 
    </div>
    <div class="farm">
            <img src="<?php echo get_template_directory_uri(); ?>/the_farm_logo_text.svg" alt="the_farm_logo_text.svg"></img>
    </div>
    <div class="title">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
        the_post_thumbnail('thumbnail');
        
        ?>
            <h1> <?php the_title(); ?> </h1>
            <p> <?php the_content(); ?> </p>
    </div>
    <div class="container">

        <?php

        // check if the repeater field has rows of data
        if( have_rows('slides') ):

            // loop through the rows of data
            while ( have_rows('slides') ) : the_row();

                // display a sub field value
                ?>
                    <img src="<?php the_sub_field('image'); ?>" alt="">
                <?php
            endwhile;

        endif;

        ?>

    </div>        

        <?php
        // End the loop.
        endwhile;
        ?>
 
   </main>
 
<?php get_footer(); ?>