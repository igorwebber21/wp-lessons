<div class="sidebar-main">
        	
            <div class="sidebar-widget">
            	<div class="search-main">
                	<form action="" method="get">
                    	<input class="search-txt" type="text" name="s" value="Поиск" onfocus="if(this.value=='Поиск')this.value=''" onblur="if(this.value=='')this.value='Поиск'" />
                        <input type="image" src="<?php bloginfo("template_url"); ?>/images/search-btn.jpg" />
                    </form>
                </div>
            </div>
            <!--
            <div class="sidebar-widget">

            	<ul class="item-main" style="display: block!important;">
                	<li><a href="#"><img src="<?php bloginfo("template_url"); ?>/images/item1.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="<?php bloginfo("template_url"); ?>/images/item2.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="<?php bloginfo("template_url"); ?>/images/item3.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="<?php bloginfo("template_url"); ?>/images/item4.jpg" alt="" /></a></li>
                </ul>
            </div>
            
            <div class="sidebar-widget">
            	<h3>Категории</h3>
                <ul class="side-categories">
                	<li><a href="#">Backgrounds</a></li>
                    <li><a href="#">Brushes</a></li>
                    <li><a href="#">Design Articles</a></li>
                    <li><a href="#">Fonts</a></li>
                    <li><a href="#">Free PSD Files</a></li>
                    <li><a href="#">Icons</a></li>
                    <li><a href="#">Logos</a></li>
                    <li><a href="#">Patterns</a></li>
                    <li><a href="#">Textures</a></li>
                    <li><a href="#">Tools & Utilities</a></li>               
                </ul>
                <ul class="side-categories">
                	<li><a href="#">Backgrounds</a></li>
                    <li><a href="#">Brushes</a></li>
                    <li><a href="#">Design Articles</a></li>
                    <li><a href="#">Fonts</a></li>
                    <li><a href="#">Free PSD Files</a></li>
                    <li><a href="#">Icons</a></li>
                    <li><a href="#">Logos</a></li>
                    <li><a href="#">Patterns</a></li>
                    <li><a href="#">Textures</a></li>
                    <li><a href="#">Tools & Utilities</a></li>               
                </ul>
            </div>
            
            <div class="sidebar-widget">
            	<h3>Последние записи</h3>
                <p class="latest-post">
                	<img src="<?php bloginfo("template_url"); ?>/images/latest-post1.jpg" alt="" />
                    <a href="#">Thanksgiving greeting card PSD
</a>
                </p>
                <p class="latest-post">
                	<img src="<?php bloginfo("template_url"); ?>/images/latest-post1.jpg" alt="" />
                    <a href="#">Thanksgiving greeting card PSD
</a>
                </p>
                <p class="latest-post">
                	<img src="<?php bloginfo("template_url"); ?>/images/latest-post1.jpg" alt="" />
                    <a href="#">Thanksgiving greeting card PSD
</a>
                </p>
                <p class="latest-post">
                	<img src="<?php bloginfo("template_url"); ?>/images/latest-post1.jpg" alt="" />
                    <a href="#">Thanksgiving greeting card PSD
</a>
                </p>
                <p class="latest-post">
                	<img src="<?php bloginfo("template_url"); ?>/images/latest-post1.jpg" alt="" />
                    <a href="#">Thanksgiving greeting card PSD
</a>
                </p>
                <p class="latest-post">
                	<img src="<?php bloginfo("template_url"); ?>/images/latest-post1.jpg" alt="" />
                    <a href="#">Thanksgiving greeting card PSD
</a>
                </p>
            </div>    
              -->

            <?php if(!dynamic_sidebar("sidebar")): ?>
                <div class="sidebar-widget">
                     <h3>Это область сайдбар виджетов</h3>
                </div>
            <?php endif; ?>

            <div class="sidebar-widget">
            	<div class="facebook">
                	<img src="<?php bloginfo("template_url"); ?>/images/facebook.jpg" alt="" />
                </div>
            </div>
            
        </div>