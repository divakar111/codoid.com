<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
        
           <div class="page-heading">
                  <h2 class="entry-content"><?php printf( __( 'Category Archives: %s', 'twentythirteen' ), single_cat_title( '', false ) ); ?></h2>

				<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>
          </div>

        <?php if ( have_posts() ) : ?>
			
            <div class="entry-content">
                  
                <div class="page-left">
               
                 <?php /* The loop */ ?>
			         <?php while ( have_posts() ) : the_post(); ?>
				         <?php get_template_part( 'content', get_post_format() ); ?>
			         <?php endwhile; ?>

			      <?php twentythirteen_paging_nav(); ?>

		 <?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		 <?php endif; ?>
        
                
                </div>
                <div class="page-sidebar">
					<?php get_sidebar(); ?>
                    <div style="clear:both;"></div>
                </div>
                <div style="clear:both;"></div>
            </div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
