<?php /* Front Page Templet */
get_header();
?>
<div class="container-fluid Rectangle-2" style="text-align: -webkit-center;">
    <div class="group">
    <div class="item line"></div>
    <div class="item text" style="color:#fff">NEWS</div>
    <div class="item line"></div>
</div>
    
</div>
<br>
<div class="container">
<div class="container-fluid">
    <span class="float-left latest-news"> LATEST NEWS </span>
    <hr>
</div>
<br>
    <div class="row">
        <div class="col-xs-12" style="padding-left: 50em">
            search news for..
    <input type="text" class="searchTerm" placeholder="Player, Match, etc..">
<span class="dropdown">
  <button class="btn btn-primary-btn dropdown-toggle" type="button" data-toggle="dropdown">2016
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">2015</a></li>
    <li><a href="#">2014</a></li>
    <li><a href="#">2013</a></li>
  </ul>
</span>
            <span class="btn btn-primary-btn" style="background-color: #ff7612; color: #fff">GO</span>
        </div>

    </div>

    <br>
    <hr>
</div>

<br>
<div class="container">    
<?php /* main body vontent having images post titles and description */ ?>
            
    <div class="col-xs-12">
    <?php  
                if (have_posts()) :
                    while (have_posts()) :  
                        the_post();?>
                
                
                        
                            <artical>
                                <span  class="col-xs-12 col-md-4">
                                <a href="#">
                                    <img class="Rectangle-7-copy-4 img-responsive" src="<?php bloginfo('template_url') ?>" alt="">
                                </a>
                                    <?php the_time('d F Y'); ?>
                                    <h3>
                                        <a href="<php? the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                
                                    <p><?php the_content(); ?></p>
                            </span>
                                    <?php
                                
                                    endwhile;
                                    endif; 
                                ?>
                                    
                            </artical>

                        </div>
                

</div>
		  

<?php 
get_footer();
?>