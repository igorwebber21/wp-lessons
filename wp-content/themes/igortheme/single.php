<?php

    //echo get_template_directory_uri();
    //echo bloginfo("template_url");
?>

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
                        
                        <div class="articles-head">
                            <span class="articles-date"><img src="<?php bloginfo("template_url"); ?>/images/articles-autor.jpg" alt="" /> <span><?php the_author(); ?></span> - <?php the_time('F j, Y'); ?></span>
                            <span class="articles-comments"><img src="<?php bloginfo("template_url"); ?>/images/articles-comment.jpg" alt="" /> <a href="#"><?php comments_popup_link(); ?></a></span>
                        </div>
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                </div>

            <?php   endwhile;
                  endif;
            ?>

              <div class="pager">
                <?php previous_post_link("<span>&laquo</span> %link"); next_post_link("%link <span>&raquo</span>"); ?>
                <!--
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <span>of</span>
                <a href="#">75</a>
                <a href="#" class="prev-next">Next</a>
            -->
            </div>

            <?php comments_template(); ?>
            
               
        </div>        
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>