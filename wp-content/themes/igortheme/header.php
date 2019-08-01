<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php wp_head(); ?>
<title><?php bloginfo("title"); wp_title(); ?></title>
</head>

<body>
<div class="head-wrapper">
	<div class="head">
    	<div class="head-logo">
            <a href="/">
                <img src="<?php bloginfo("template_url"); ?>/images/logo.jpg" alt="" />
            </a>
        </div>
        <div class="head-banner">
        <!--<img src="<?php bloginfo("template_url"); ?>/images/head-banner.jpg" alt="" 
            style="display: inline-block!important;" />-->
        <?php 

            $banner = new WP_Query(array("post_type" => "banner",
                                        "posts_per_page" => 1));

            if($banner->have_posts()): 
                while($banner->have_posts()): 
                    $banner->the_post(); ?>
                  <?php 
                the_post_thumbnail(); 
                //the_title();
                  //the_post_thumbnail('post-medium'); 
                //'thumbnail', array( 'class' => 'banner-header' ) 
                ?>
                <?php endwhile;
            endif;
        ?>
        </div>
    </div>
</div>
<div class="menu-wrapper">
	<div class="menu-main">

        <?php if(!dynamic_sidebar("menu_header")): ?>
            <div class="sidebar-widget">
                <h3>Это область меню, добавляемой с виджетов</h3>
            </div>
        <?php endif; ?>
        
        <ul class="ico-social">
        	<li><a href="#"><img src="<?php bloginfo("template_url"); ?>/images/ico-vk.png" alt="мы вконтакте"/></a></li>
            <li><a href="#"><img src="<?php bloginfo("template_url"); ?>/images/ico-youtobe.png" alt="" /></a></li>
            <li><a href="#"><img src="<?php bloginfo("template_url"); ?>/images/ico-facebook.png" alt="" /></a></li>
            <li><a href="#"><img src="<?php bloginfo("template_url"); ?>/images/ico-twitter.png" alt="" /></a></li>
        </ul>   
    </div>
</div>