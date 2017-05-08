<?php /* Front Page Templet */
get_header();
?>
<div class="container Rectangle-2 text-center">
    <div class="hr-sect"><span class="news">NEWS </span></div>
</div>
<br>
<div class="custome-container">
    <span class="float-left latest-news"> LATEST NEWS </span>
    <span class="Shape-9-copy-2"></span>
</div>
<br>
<div class="container float-right">
<div class="custome-container float-left">
    <form role="search">
        <span class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="q">
            <span class="input-group-btn">
                    </span>
        </span>
        <span class="dropdown" style="padding-left: 60em">
    <button class="btn btn-default dropdown-toggle " type="button" id="menu1" data-toggle="dropdown">2016
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2015</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2014</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2013</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2012</a></li>
    </ul>
  </span>
        </form>
    </div>
    </div>
<div class="container">    
<?php /* main body vontent having images post titles and description */ ?>
            
    <div class="custome-container">
    <?php  
                if (have_posts()) :
                    while (have_posts()) :  
                        the_post();?>
                
                
                        
                            <artical>
                                <span  class="col-md-4">
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