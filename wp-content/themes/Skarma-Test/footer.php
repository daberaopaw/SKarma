
    
    	<footer>
            
            <div class="container text-center Rectangle-1-copy-4">
            <span class="fa-facebook-square" style="font-size: 60px"></span>
                <span class="fa fa-plus"></span>
            </div>
            
            <span class="fa fa-plus"></span>
		            <?php
                wp_nav_menu( $arg = array(  
                    'menu_class' => 'Rectangle-1-copy-4',
                    'theme_location' => 'footer'
                ));
            ?>
	</footer>
	<?php wp_footer(); ?>
</body>

</html>