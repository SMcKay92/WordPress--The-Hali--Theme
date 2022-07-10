<?php  

get_header(); 

if ( have_posts() ) :  

    while ( have_posts() ) : the_post(); 
    ?> 
        <h2><?php the_title(); ?></h2>
        <p><?php the_category();?></p>
        <p><?php the_author();?></p>
        <?php the_content(); ?> 
        <p><?php the_date();?>  <?php the_time();?></p> 
    <?php 
        endwhile; 
    else : 
    _e( 'Sorry, no posts here.', 'textdomain' ); 
endif; 

get_footer(); 

?> 