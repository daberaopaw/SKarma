
    
    	<footer>
            
            
            
            <div class="navbar navbar-default Rectangle-1-copy-3">
            <nav>
                <?php
                        wp_nav_menu( $arg = array(  
                                'menu_class' => 'Rectangle-1-copy-4',
                                'theme_location' => 'footer',
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker())

                );
            ?>
                </nav>
</div>
            
	</footer>
	<?php wp_footer(); ?>
</body>

</html>