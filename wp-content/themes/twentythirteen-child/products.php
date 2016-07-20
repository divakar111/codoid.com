<?php

/**

template name: Products Template

 */

get_header(); ?>

	<div id="primary" class="content-area">



		<div id="content" class="site-content" role="main">



		   <div class="container-fluid">
						<?php 
						$prod_page = wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>
                          <div class="banner-background" style="background-image: url(<?php echo $prod_page;?>);">



                                  <h1><?php the_field('product_page_tag_line');?></h1>

								  <div class="product-banner">
                                  <?php
  $pr_desc = 6;
  $pr_pg_hd_desc = get_post( $pr_desc, ARRAY_A );
  $content_pr = $pr_pg_hd_desc['post_content'];
?>
                                  <p><?php echo $content_pr;?></p>
                                  </div>

						  

					      </div><!-- end of banner-->

          </div>

		  <?php

                    query_posts('cat=5&order=DESC&showposts=12');
					$wn=1;
					while(have_posts()) : the_post();
					$feat_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
		  ?>

		  <div id="divcolor">

			  <div class="container-fluid" id="testing">
				  <div class=" aboutthro">
						<div class="col-md-12 colormnate">
								<div class="col-md-6">
										 <h1><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h1>
										 <p><?php $what_nw_content = get_the_content();
											  echo substr($what_nw_content,0,100);
											?><span>...</span>
										</p><!--<a href="<?php echo get_permalink();?>" input type="btn btn-default" value="Read More"></a>-->
										<a href="<?php echo get_permalink();?>" class="btn btn-default prod-mor-detail">More Details</a>
								</div>
								<div class="col-md-5 product-img">
								    <div> <a href="<?php the_field('product_attachment')?>" target="_blank" class="downloadnow">Download Now</a><div style="clear:both;"></div></div>
									 <div style="clear:both"></div>
									 <div class="img-div"><img src="<?php echo $feat_img; ?>" alt="" title="" /></div>
								</div>
					  </div>

								<div style="clear:both;"></div>

					</div>		
			   </div>
		   </div>
		   <?php $wn++; endwhile;?>

          <div style="clear:both;"></div>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>

