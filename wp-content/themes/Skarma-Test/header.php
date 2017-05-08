<?php /* this is header file */ ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head();  ?>
 </head>

<body>

    <header class="top-navigation-bg-color text-center">
        
        <div class="container">
        <?php wp_nav_menu( $arg = array(
    
                                
                                'menu_class' => 'top-menu',
                                'theme_location' => 'top-menu',
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker()) ); ?>
        </div>
        
        <div>
        <nav class="main-navigation navigation-bg-color">
                    
        
                    <?php wp_nav_menu( $arg = array(
    
                                
                                'menu_class' => 'main-navigation',
                                'theme_location' => 'primary',
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker()) ); ?>
            
            </nav>
        </div>
        
        
            
    </header>