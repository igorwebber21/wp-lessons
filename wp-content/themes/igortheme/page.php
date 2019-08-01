<?php 
//подключаем header
get_header(); 

?>
<div class="content-wrapper">
	<div class="content-main">
    	<div class="content">
        
        	
            <?php if(have_posts()): 
                    while(have_posts()):
            ?>
                <?php the_post();?>
                <div class="articles">
        
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                </div>

            <?php   endwhile;
                  endif;
            ?>
            
               
        </div>        
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>