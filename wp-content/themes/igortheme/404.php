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
        
            <div class="not-found">
                <h2>Такой страницы не существует</h2>
            </div>
            
        </div>
               
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>