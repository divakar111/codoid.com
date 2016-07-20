<?php

/**

template name: Blog Template Grid New

 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div id="content" class="site-content" role="main">

       

            <div class="container-fluid">

           

                          <div class="banner height-contact">

						   <h2 class="entry-content"><?php the_title(); ?><h2>

					      </div><!-- end of banner-->

          </div>

               <div class="container-fluid">

                     <div class="col-md-12 blog-panel pdding-blog">

						<?php 

						  

							 query_posts('cat=6&order=DESC&showposts=100');

							 $no =1;

							 while(have_posts()): the_post();

						  

						  ?>



							  <div class="col-md-4 col blogsetting">

								  <div class="blogpaddall1"  style="padding:20px;">

										<h4><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h4>

										<p><?php $what_nw_content = get_the_content(); 

												  echo substr($what_nw_content,0,120);?><span>..</span>

										  <br>

											<a href="<?php echo get_permalink();?>">[Read more..]</a>

										</p>						 

								   </div>

							 </div>

                   

					   <?php $no++; endwhile; ?>

					   

                       <div style="clear:both"></div>

					   

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