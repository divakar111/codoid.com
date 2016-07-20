<?php

/**

 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
get_header(); ?>
<script src="<?php echo site_url();?>/wp-content/themes/twentythirteen-child/assets/js/jquery.js"></script> 
<script src="<?php echo site_url();?>/wp-content/themes/twentythirteen-child/assets/js/bootstrap.js"></script>
    <div id="home-slider">

    </div>

	<div id="primary" class="content-area">

		<div id="content" class="site-content" role="main">

        

			<div class="container-fluid">

<div class="banner">

  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="15000"> 

    <!-- Wrapper for slides -->

    <div class="carousel-inner" role="listbox">
	<?php 
		  		query_posts('post_type=home_slider&order=ASC');
				$slide=1;
				while(have_posts()) : the_post();
		  ?>
      <div class="item <?php if($slide==1){ echo 'active';}?>">
      <?php $slid_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>
      <img src="<?php echo $slid_img; ?>" alt="<?php echo $slid_img; ?>" title="<?php echo $slid_img; ?>">

        <div class="carousel-caption">
          <h3><?php the_title();?></h3>
          <?php the_content();?>
        </div>

      </div>
	  <?php 
	  $slide++; endwhile;
	  ?>
    </div>
    <!-- Left and right controls --> 
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"><i class="fa fa-angle-left"></i> </span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"><i class="fa fa-angle-right"></i> </span> <span class="sr-only">Next</span> </a> </div>

</div>

</div>

<!-- Banner End -->

<div class="clearfix"></div>

<!-- middle-area -->



<div class="container-fluid">
        <div class="col-md-12 home-blurb">
		    <?php 
					$id=15;
					$post = get_page($id);
					$content = apply_filters('the_content', $post->post_content);
					$content = str_replace(']]>', ']]>', $content);
					$cus_page_titl = $post->post_title;
					$cus_page_thum = wp_get_attachment_url(get_post_thumbnail_id(15));
			?>

            <h1><?php echo $cus_page_titl; ?></h1>
            <?php echo $content; ?>
        </div>

	<?php /*?><div class="col-md-12 home-panel">

     <?php 

		  query_posts('cat=3&order=asc&showposts=3');
		  $te = 1; 
		  while(have_posts()): the_post();
     ?>  

            <div class="col-md-4 col">
            	<?php 
				$hm_ser_icon = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
				?>
            	<div><img src="<?php echo $hm_ser_icon;?>" alt="<?php echo $hm_ser_icon;?>" title="<?php echo $hm_ser_icon;?>"></div>
                <h2><?php the_title(); ?></h2>
                <p><?php $what_nw_content = get_the_content(); echo $what_nw_content;?> </p>
                <div><a href="<?php echo get_permalink();?>" class="btn btn-default">Read More</a></div>
            </div>
   <?php $te++; endwhile; wp_reset_query();?>

   </div><?php */?>
  
      <div id="primary" class="content-area">

		<div id="content" class="site-content" role="main">

           
		   <div class="container-fluid">
           
        <?php /*?><div class="col-md-12 home-blurb services-blurb">
        <?php
                    // Start the Loop.
                   while ( have_posts() ) : the_post();
             the_content();
			  endwhile;
				?>
        </div><?php */?> 

	<div class="col-md-12 services-panel  row" style="background-color:#fdfdfd;">
       
              <div id="jssor_1" style="position: relative; margin: 0 auto; top: 20px; left: 0px; width: 1300px; height: 350px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 350px; overflow: hidden;">
			<?php 
			      query_posts('cat=3&order=ASC&showposts=5');
				  $te = 1; 
				  while(have_posts()): the_post();
			?>

            <div class="sercolor" style="display: none;">
                <div class="col-md-12 home-onsite col ">
					<div>
					<?php $post_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>
                    <img src="<?php echo $post_img;?>" >
                    </div>
					<h2><?php the_title();?></h2>
					<p><?php $con = get_the_content(); echo substr($con, 0, 170); ?> </p>
					<div class="ser-btn-div"><a href="<?php echo get_permalink();?>" class="btn btn-default">Read In Details</a></div>   
					<br/>
				</div>
            </div>

           <?php $te++; endwhile; ?>
            
        </div>
			

        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb03" style="bottom:10px;right:10px; display:none;">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:21px;height:21px; display:none;">
                <div data-u="numbertemplate" style="display:none;"></div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora03r" style="top:0px;right:-2px;width:55px;height:55px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Slideshow Maker</a>
    </div>


    </div>

  


    <div style="clear:both;"></div>

	<?php /*?><div class="test-automation">
	 <p style="text-align: center;"><img src="<?php echo site_url();?>/wp-content/themes/twentythirteen-child/assets/images/rhombus.png" style="margin-top:-65px;"></p>
		  <div class="auto-test">
		  <?php 
		    $id=34;
			$post = get_page($id);
			$content = apply_filters('the_content', $post->post_content);
			$content = str_replace(']]>', ']]>', $content);
			$cus_page_titl = $post->post_title;
			$cus_page_thum = wp_get_attachment_url(get_post_thumbnail_id(25));
			?>
			  <h2><?php echo $cus_page_titl; ?> </h2>
			      <?php echo $content; ?>
		 </div>
	</div><?php */?>
   
</div>


			
          <div style="clear:both;"></div>

		</div><!-- #content -->

	</div><!-- #primary -->

<script type="text/javascript" src="<?php echo site_url();?>/wp-content/themes/twentythirteen-child/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url();?>/wp-content/themes/twentythirteen-child/js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_options = {
              $AutoPlay: false,
              $AutoPlaySteps: 4,
              $SlideDuration: 160,
              $SlideWidth: 325,
              $SlideSpacing: 3,
              $Cols: 4,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 4
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 1,
                $SpacingY: 1
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1300);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 03 css */
        /*
        .jssorb03 div           (normal)
        .jssorb03 div:hover     (normal mouseover)
        .jssorb03 .av           (active)
        .jssorb03 .av:hover     (active mouseover)
        .jssorb03 .dn           (mousedown)
        */
        .jssorb03 {
            position: absolute;
        }
        .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
            position: absolute;
            /* size of bullet elment */
            width: 21px;
            height: 21px;
            text-align: center;
            line-height: 21px;
            color: white;
            font-size: 12px;
            background: url('img/b03.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb03 div { background-position: -5px -4px; }
        .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
        .jssorb03 .av { background-position: -65px -4px; }
        .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }

        /* jssor slider arrow navigator skin 03 css */
        /*
        .jssora03l                  (normal)
        .jssora03r                  (normal)
        .jssora03l:hover            (normal mouseover)
        .jssora03r:hover            (normal mouseover)
        .jssora03l.jssora03ldn      (mousedown)
        .jssora03r.jssora03rdn      (mousedown)
        */
        .jssora03l, .jssora03r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('<?php echo site_url();?>/wp-content/themes/twentythirteen-child/img/a03.png') no-repeat;
            overflow: hidden;
        }
        .jssora03l { background-position: -3px -33px; }
        .jssora03r { background-position: -63px -33px; }
        .jssora03l:hover { background-position: -123px -33px; }
        .jssora03r:hover { background-position: -183px -33px; }
        .jssora03l.jssora03ldn { background-position: -243px -33px; }
        .jssora03r.jssora03rdn { background-position: -303px -33px; }
    </style>
          
          
          
          
          
            <div class="clearfix"></div>

				<div class="testimonail-background-home">

					<div class="col-md-12 home-blurb">

						  <h1 class="testheading">Testimonial</h1>

					 </div> 
                     <div class="container">
					<div class="row testimonal-panel">



 <?php global $wpdb;

              /*$sql =  mysql_query("select p.ID, p.post_status,  r.object_id, r.term_taxonomy_id  

								   from `wp_posts` p

								   left join `wp_term_relationships`  r on p.ID = r.object_id

								   where p.ID = 96 and  p.post_status = 'publish' ");*/



             $sql = mysql_query("select t.term_id, t.count, p.ID, p.post_status,  r.object_id, r.term_taxonomy_id

			 from `wp_f0npwq3mss_term_taxonomy` t

			 left join `wp_f0npwq3mss_term_relationships` r on  t.term_id = r.term_taxonomy_id

			 left join `wp_f0npwq3mss_posts` p on r.object_id = p.ID where t.term_id = 7 and  p.post_status = 'publish' ");

								   $row = mysql_num_rows($sql);

?>



<?php if($row == 1){ ?>

                     <div class="col-md-4"></div>

                     <div class="col-md-4 single-show">



                     <?php 

						  

							 query_posts('cat=7&order=asc&showposts=1');

							 $no =1;

							 while(have_posts()): the_post();

						  

					   ?>

											<?php the_content();?>

									        <div class="signature">- <?php the_title();?>

												 <?php $feat_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>

												 <img src="<?php echo $feat_img; ?>" alt="<?php echo $feat_img; ?>" class="">

											</div>

								

					   <?php $no++; endwhile;wp_reset_query(); ?>

                        </div>



 



<?php } elseif($row > 2) { ?>





                      <?php 

						  

							 query_posts('cat=7&order=asc&showposts=6');

							 $no =1;

							 while(have_posts()): the_post();

						  

					   ?>

								  <div class="col-md-4 col testidisplay">

											<p><?php the_content();?></p>

									        <div class="signature">- <?php the_title();?>

												 <?php $feat_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>

												 <img src="<?php echo $feat_img; ?>" alt="<?php echo $feat_img; ?>" class="">

											</div>

								 </div>



					   <?php $no++; endwhile;wp_reset_query(); ?>





  <?php } ?>



					    

 

					   <div style="clear:both;"></div>

                       

											<?php if($row >1){?>

											 

												<div class="read-more-link hm-testim-readmore">

												   <p><a href="<?php echo site_url();?>/?page_id=103" class="btn btn-default more-linkh">READ MORE</a></p>

                                                 </div>



											 <?php }

								 ?>

					</div>
                    </div>

					<div style="clear:both;"></div>





			   </div>



    </div>

    <div style="clear:both;"></div>



	



		</div><!-- #content -->

	</div><!-- #primary -->



<?php //get_sidebar(); ?>

<?php get_footer(); ?>

