<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="container-fluid">
            
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?> 
            
            <?php 
			$categories = get_the_category();
            $category_id = $categories[0]->cat_ID;
			//echo $category_id;
			if( $category_id == 5)
			{
		    ?>
			   <div class="entry-header" style="position:relative;">
                  <a href="<?php the_field('product_attachment')?>" target="_blank" class="downloadnow" style="right:0px; 
                  top:20px;margin-top:15px;     margin-right:0px;">Download Now</a>
            <div style="clear:both;"></div>
            </div>
			<?php
			    }
				
			?>
            
			<?php //get_template_part( 'content', get_post_format() ); ?>
                <div class="entry-content">
                <div class="single-post-title">
                   <h2><?php the_title();?></h2>
                </div>
                <div class="single-post-img">
                <?php $sing_post_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>
                <img src="<?php echo $sing_post_img?>" alt="" title=""/>
                </div>
                <div class="single-post-desc">
                <?php the_content();?>
                </div>
                </div>
                
				<?php twentythirteen_post_nav(); ?>
				<?php //comments_template(); ?>

			<?php endwhile; wp_reset_query();  ?>
            
           </div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>