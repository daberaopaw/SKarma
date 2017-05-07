<?php get_header();  ?>
<div class="container">

        <div class="row">
            <div class="col-md-4 article-intro">
                
                <h3>
                    <?php echo get_title() ?>
                </h3>
                <main class="artical-intro">
                        <?php  
                            if (have_post()) :
                                while (have_post()) :
                                    the_post();
                                        the_content();
                                endwhile;
                            endif;
        
                        ?>
                
                </main>
            </div>
            
        </div>
        <!-- /.row -->

    </div>
<?php
get_footer();  ?>