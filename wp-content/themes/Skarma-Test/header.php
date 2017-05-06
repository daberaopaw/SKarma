<?php     

/*  header templet  */
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <link href=<?php bloginfo('templet_url') ?>"/style.css" type="text/css" rel="stylesheet">
    
    <?php wp_head(); ?>
    </head>

  <body>
<header class="header">
  
    <nav class="nav-2">
        <?php 
        wp_nav_menu( $arg = array(
        
        'menu_class' =>  'main-navigation',
            'theam_location' => 'primary'  
        ));
        
        
        ?>
    
    </nav>
    
</header>
  