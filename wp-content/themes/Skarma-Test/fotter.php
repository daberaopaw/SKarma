<?php /*  Main Footer File  */ ?>

      <footer>
          <nav>
          <?php 
        wp_nav_menu( $arg = array(
        
        'menu_class' =>  'footer-navigation',
            'theam_location' => 'footer'  
        ));
        
        
        ?>
        <p>© Company 2012</p>
              </nav>
      </footer>

    </div> <!-- /container -->

    <?php wp_footer(); ?>
 
  </body>
</html>