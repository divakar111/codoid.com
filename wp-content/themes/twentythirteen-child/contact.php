<?php
/**
template name: Contact Template
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
       
            <div class="container-fluid">
                           <?php $cont_bnner = wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>
                           <div class="contact-banner" style="background-image:url(<?php echo $cont_bnner;?>);">
					      </div><!-- end of banner-->
          </div>

			      <div class="container-fluid contact-details">
                     <div class="col-md-12 contact-panel content-blub">
					   <div class="col-md-4 blue col">
					      <div class="contact-details-green">
						    <?php
                    // Start the Loop.
                   while ( have_posts() ) : the_post();
             the_content();
			  endwhile;
				?>
                          </div>
					   </div>

					   <div class="col-md-4 col blue">
							 <div class=" contact-details-orange">
								  <?php the_field('general_address_colum');?>
							  </div>
					   </div>

					   <div class="col-md-4 col orange">
						   <div class="contact-details-orange">
							   <h4><img src="<?php echo site_url();?>/wp-content/themes/twentythirteen-child//images/h1-bullet-orange.png">&nbsp;Mail Us</h4>
			<?php echo do_shortcode('[contact-form-7 id="620" title="Contact form 1"]');?>
							   <?php //echo do_shortcode("[ai_contact_form]"); ?>
						   </div>
					   </div>

					   <div class="googlemap contact-details-green  red">
					        <h4><img src="<?php echo site_url();?>/wp-content/themes/twentythirteen-child/images/h1-bullet-red.png">&nbsp;ROADMAP</h4>
								<div class="googlemapiframe">
								        <iframe src="<?php the_field('google_map_iframe');?>" width="1030" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
					   </div>
			   </div>

<div style="clear:both;"></div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>