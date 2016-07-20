<?php



/**



 * The template for displaying all pages



 *



 * This is the template that displays all pages by default.



 * Please note that this is the WordPress construct of pages and that other



 * 'pages' on your WordPress site will use a different template.



 *



 * @package WordPress



 * @subpackage Twenty_Thirteen



 * @since Twenty Thirteen 1.0



 */



get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
       
           <div class="page-heading">
            <h2 class="entry-content"><?php the_title(); ?>
            </h2>
            <?php //get_search_form(); ?>
           </div>

			<div class="entry-content">
               <div style="clear:both;"></div>
                <div class="page-left">
                <?php /* The loop */ ?>
                <?php
                    // Start the Loop.
                   while ( have_posts() ) : the_post();
                        // Include the page content template.
                       // get_template_part( 'content', 'page' );
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) {
                            comments_template();
                        }
                   endwhile;
				?>
                    <?php the_post_thumbnail(); ?>
                    <p><?php the_content();?></p>
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