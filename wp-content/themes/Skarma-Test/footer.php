
    
    	<footer>
            <div class="Rectangle-1-copy-3">
                <i class="fa fa-facebook-square" aria-hidden="true" style="font-size: 30px; color: #FF7612; margin-right: 20px"></i>
                
                <i class="fa fa-instagram" aria-hidden="true" style="font-size: 30px; color: #FF7612;  margin-right: 20px"></i>
                
                <i class="fa fa-twitter-square" aria-hidden="true" style="font-size: 30px; color: #FF7612;  margin-right: 20px"></i>
                <i class="fa fa-youtube-play" aria-hidden="true" style="font-size: 30px; color: #FF7612; margin-right: 20px"></i>
            
            
            </div>
            <div style="color: white;">
            <div class="Rectangle-1-copy-4">
            <div class="footer-menu-bg">
            <nav>
                <?php
                        wp_nav_menu( $arg = array(  
                                'menu_class' => 'Rectangle-1-copy-4',
                                'theme_location' => 'footer',
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'navbar nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker())

                );
            ?>
                </nav>
</div>
                        </div>
            </div>
	</footer>
	<?php wp_footer(); ?>
</body>

</html>