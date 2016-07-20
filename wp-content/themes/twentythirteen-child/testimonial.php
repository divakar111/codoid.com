<?php
/**
template name: Testimonial Template
 */
get_header(); ?>
	<div id="primary" class="content-area">

		<div id="content" class="site-content" role="main">

            <div class="container-fluid">
			           <div class="banner height-contact">
						   <h2 class="entry-content"><?php the_title(); ?><h2>
					    </div><!-- end of banner-->
        
					<div class="clearfix"></div>
							
							<div class="col-md-12 testimonal-panel pdding-blog">
								 <?php 
								  
									 query_posts('cat=7&order=asc&showposts=12');
									 $no =1;
									 while(have_posts()): the_post();
								  
								  ?>
								  
										  <div class="col-md-4 col testidisplay blogsetting">
													<p><?php the_content();?></p>
													<div class="signature">- <?php the_title();?>
														 <?php $feat_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>
														 <img src="<?php echo $feat_img; ?>" alt="" class="">
													</div>
										 </div>
						   
							   <?php $no++; endwhile;wp_reset_query(); ?>

							   <div class="jqueryloadmore">
									<div class="col-md-10 styling">
									  <p style="text-align:center;"><a href="#" id="load">Load More</a></p>
								   </div>
					           </div>
							  
					   </div>
			   
          </div>
    <div style="clear:both;"></div>
		   

		</div><!-- #content -->

	</div><!-- #primary -->



<?php get_footer(); ?>
<style>
.blogsetting { display:none; }
</style>
<script>
jQuery(document).ready(function(){

    jQuery(".blogsetting").slice(0, 6).show(); // select the first ten
    jQuery("#load").click(function(e){ // click event for load more
        e.preventDefault();
        jQuery(".blogsetting:hidden").slice(0, 6).show(); // select next 10 hidden divs and show them
        if(jQuery("blogsetting:hidden").length == 0){ // check if any hidden divs still exist
            //alert("No more blogs"); // alert if there are none left

                //jQuery(".noblogs").show();

        }
    });
});
</script>

