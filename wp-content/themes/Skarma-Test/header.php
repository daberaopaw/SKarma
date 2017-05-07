<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head();  ?>
 </head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <?php
                wp_nav_menu( $arg = array(  
                    'menu_class' => 'nav-1',
                    'theme_location' => 'primary'
                    
                ));
            ?>
            
        </div>
        <!-- /.container -->
    </nav>
