<?php
/**
template name: Thank you
 */
get_header(); ?>
	<div id="primary" class="content-area">

		<div id="content" class="site-content" role="main">

           <div class="page-heading">

            <h2 class="entry-content"><?php the_title(); ?>

                  <span class="breadcrumbspage"> <?php custom_breadcrumbs(); ?> </span>

            </h2>

            <?php //get_search_form(); ?>

           </div> 
		<div class="entry-content">
               <div style="clear:both;"></div>

                <div class="page-left">
                <div class="mydownload" style="padding-top:5%; border:1 px solid #CCC;">
                  
                   Thank you by contacting us <?php $_GET['name'];?>
                  
                   </div>     

                </div>

                <div class="page-sidebar">

					<?php get_sidebar(); ?>

                    <div style="clear:both;"></div>

                </div>

                <div style="clear:both;"></div>
                

            </div>

<div style="clear:both;"></div>

		</div><!-- #content -->

	</div><!-- #primary -->

                    



<?php get_footer(); ?>
