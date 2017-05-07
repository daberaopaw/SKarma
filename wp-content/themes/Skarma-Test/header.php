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

    <header class="container">
        <nav class="navbar collapse">
            <?php
                wp_nav_menu( $arg = array(  
                    'menu_class' => 'navbar-default',
                    'theme_location' => 'primary'
                ));
            ?>
        </nav>
</header>