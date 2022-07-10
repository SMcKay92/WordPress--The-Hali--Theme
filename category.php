<?php  

get_header(); 
?>

<h1><?php the_category();?>

<?php
if ( have_posts() ) :  
    
    while ( have_posts() ) : the_post(); 
    ?> 
        
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <?php the_excerpt(); ?> 
    <?php 
        endwhile; 
    else : 
    _e( 'Sorry, no posts here.', 'textdomain' ); 
endif; 

get_footer(); 

?> 