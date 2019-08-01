<?php 
//подключаем header
get_header(); 

?>
<div class="content-wrapper">
	<div class="content-main">
    	<div class="content">
        
        	<div class="content-left">
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
                
            <div class="sidebar">
                <?php 
                    $args = array(   
                                 "post-type" => "post", // выбираем из записей
                                 "orderby" => "rand", // выбираем из случайную запись
                                 "category_name" => "photo-shoot, exhibitions", // в рубриках
                                 "posts_per_page" => 1
                             ); 

                    $rand_post = new WP_Query($args);

                    if($rand_post->have_posts()): //$page_index->the_post();
                    while($rand_post->have_posts()): 
                        $rand_post->the_post(); ?>
                        
                        
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                            <h1><a href="<?php the_permalink(); ?>">
                                <?php echo the_title(); ?>
                                </a>
                            </h1>
                            <p><?php the_excerpt(); ?></p>
                            <p><a href="<?php the_permalink(); ?>" class="read-more">read more</a></p>
                   

                    <?php
                    endwhile;
                    else:?>
                    <div class="attention-no-data">
                        Добавьте запись в категорию photo-shoot, exhibitions
                    </div>
        <?php  endif;

                ?>
                <!--
                    <div>
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/side-img1.jpg" alt="" /></a>
                        <h1><a href="#">Skill Set</a></h1>
                        <p>Sed dolor ligula, tempus vitae malesuada utescu
                           congue vitae diam. Integer non nisl est. Suspen
                           isse at diam turpis, ut mattis velit. Praesent vel est non augue pretium condimentum at in mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in varius ante. Etiam et nisi eget velit dignissim gravida ac nec quam. Aenean imperdiet massa quis diam tempunec.
                        </p>
                        <p><a href="#" class="read-more">read more</a></p>
                    </div>
                -->
            </div>
                
            
               
        </div>        
    </div>
</div>

<?php get_footer(); ?>