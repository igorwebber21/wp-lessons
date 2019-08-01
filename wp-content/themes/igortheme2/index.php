<?php get_header(); ?>
    <div class="content-main">
    
        <?php if(!dynamic_sidebar("slider_index")):?>
            <ul id="carousel" class="elastislide-list">
                <li>
                <p class="attention-no-data">Выберите виджет слайдера в админке</p>
                </li>
            </ul>
        <?php endif; ?>
    	<!-- Elastislide Carousel
		    <ul id="carousel" class="elastislide-list">
			<li><a href="#"><img src="http://wordpress-lessons/wp-content/uploads/2019/02/karusel1.png" alt="image01" /></a></li>
            <li><a href="#"><img src="http://wordpress-lessons/wp-content/uploads/2019/02/karusel3.png" alt="image03" /></a></li>
			<li><a href="#"><img src="http://wordpress-lessons/wp-content/uploads/2019/02/karusel2.png" alt="image02" /></a></li>			
			<li><a href="#"><img src="http://wordpress-lessons/wp-content/uploads/2019/02/karusel4.png" alt="image04" /></a></li>
            <li><a href="#"><img src="http://wordpress-lessons/wp-content/uploads/2019/02/karusel1.png" alt="image01" /></a></li>
            <li><a href="#"><img src="http://wordpress-lessons/wp-content/uploads/2019/02/karusel3.png" alt="image03" /></a></li>
			<li><a href="#"><img src="http://wordpress-lessons/wp-content/uploads/2019/02/karusel2.png" alt="image02" /></a></li>			
			<li><a href="#"><img src="http://wordpress-lessons/wp-content/uploads/2019/02/karusel4.png" alt="image04" /></a></li>
            <li><a href="#"><img src="http://wordpress-lessons/wp-content/uploads/2019/02/karusel1.png" alt="image01" /></a></li>
            <li><a href="#"><img src="http://wordpress-lessons/wp-content/uploads/2019/02/karusel3.png" alt="image03" /></a></li>
			<li><a href="#"><img src="http://wordpress-lessons/wp-content/uploads/2019/02/karusel2.png" alt="image02" /></a></li>			
			<li><a href="#"><img src="http://wordpress-lessons/wp-content/uploads/2019/02/karusel4.png" alt="image04" /></a></li>		
		    </ul>
		End Elastislide Carousel -->
                
    	<div class="content-main-blocks">

            <?php 
                $page_index = new WP_Query(array(
                                            "post_type" => array("post", "page"),
                                            "meta_key" => "order", // order или title - произв поле
                                            "orderby" => "meta_value_num",
                                            "order" => "ASC",
                                            "post_per_page" => 3
                                        ));

                if($page_index->have_posts()): //$page_index->the_post();
                    while($page_index->have_posts()): 
                        $page_index->the_post(); ?>
                        
                        <div>
                            <a href="#"><?php the_post_thumbnail('full'); ?></a>
                            <h1><a href="<?php the_permalink(); ?>">
                                <?php echo get_post_meta(get_the_ID(), "title", true); ?>
                            </h1>
                            <p><?php the_excerpt(); ?></p>
                            <p><a href="<?php the_permalink(); ?>" class="read-more">read more</a></p>
                        </div>

                    <?php
                    endwhile;
                    else:?>
                    <div class="attention-no-data">
                        Добавьте к страницам произвольное поле "ORDER"/"TITLE" для вывода на
                        главную страницу
                    </div>
        <?php  endif;
            ?>
        <!-- 
        	<div>
            	<a href="#"><img src="<?php bloginfo('template_url') ?>/images/mail-news1.jpg" alt="" /></a>
                <h1><a href="#">Hi, My Name Is Anne Photographer</a></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisi odio, sollicitudin at condimentum at, mattis a ligula. </p>

				<p>Ut vitae urna quis massa consectetur cursus ultricies in tellus. Aliquam sed odio in neque mattis laoreet. Cras lacus purus,</p>
                <p><a href="#" class="read-more">read more</a></p>
            </div>
            
            <div>
            	<a href="#"><img src="<?php bloginfo('template_url') ?>/images/mail-news2.jpg" alt="" /></a>
                <h1><a href="#">Exhibition Now On</a></h1>
                <p>Nam egestas sapien molestie lorem auctor eget scelerisque neque tincidunt. Ut iaculis leo non sem can <a href="#">this is an inline link</a>. Maecenas mi massa, interdum at sagittis eu, imperdiet a dui. Duis sit amet tortor leo. Fusce tempor pellentesque mollis. Sed tincidunt elit sit amet ipsum fermentum venenatis.</p>
                <p><a href="#" class="read-more">read more</a></p>
            </div>
            
            <div>
            	<a href="#"><img src="<?php bloginfo('template_url') ?>/images/mail-news3.jpg" alt="" /></a>
                <h1><a href="#">Latest Photo Shoot</a></h1>
                <p>Donec mollis suscipit nisi, vitae sagittis arcu euismod at. In at turpis vel odio fringilla vulputate at ac tellus. Phasellus nulla leo, vehicula sit amet congue eget, viverra ut augue epharetra aliquet turpis vel scelerisque. 
Nullam ut enim nisi. Vivamus ut neque nulla. est aliquam consectetur augue et est dapibus ;</p>
                <p><a href="#" class="read-more">read more</a></p>
            </div>
            -->
        </div>
    </div>  
</div>
<?php get_footer(); ?>