<?php /* this is header file */ ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Squada+One" rel="stylesheet">
<?php wp_head();  ?>
 </head>

<body>

    <header>
        <div class="rectangle-2" style="text-align: center;">
        
        <div class="top-menu" style="color:#000">
        <?php wp_nav_menu( $arg = array(
    
                                
                                'menu_class' => 'navbar navbar-nav',
                                'theme_location' => 'top-menu',
                                'container'         => 'div',
                                'menu_class'        => 'top-menu',
                                
                                ) ); ?>
        </div>
        </div>
        <div class="rectangle-2">
        <nav class="main-navigation navigation-bg-color">
                    
        
                    <?php wp_nav_menu( $arg = array(
    
                                
                                'menu_class' => 'main-navigation',
                                'theme_location' => 'primary',
                                'container'         => 'div',
                                'menu_class'        => 'main-navigation',
                                ) ); ?>
            
            </nav>
        </div>
        
        
            
    </header>