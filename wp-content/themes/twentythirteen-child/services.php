<?php
/**
template name: Services Template
 */
get_header(); ?>
	<div id="primary" class="content-area">

		<div id="content" class="site-content" role="main">

           
		   <div class="container-fluid">
           
        <div class="col-md-12 home-blurb services-blurb">
        <?php
                    // Start the Loop.
                   while ( have_posts() ) : the_post();
             the_content();
			  endwhile;
				?>
        </div> 

	<div class="col-md-12 services-panel  row">
       
              <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 350px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 350px; overflow: hidden;">
			<?php 
			      query_posts('cat=4&order=ASC&showposts=8');
				  $te = 1; 
				  while(have_posts()): the_post();
			?>

            <div class="sercolor" style="display: none;">
                <div class="col-md-12 col onsite">
					<div><i class="fa fa-users"></i></div>
					<h2><?php the_title();?></h2>
					<p><?php $con = get_the_content(); echo substr($con, 0, 170); ?> </p>
					<div class="ser-btn-div"><a href="<?php echo get_permalink();?>" class="btn btn-default">Read More</a></div>   
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

	<div class="test-automation">
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
	</div>
   
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
  

<?php get_footer(); ?>
