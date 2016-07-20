<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		
				<!--footer area-->
					<div class="container-fluid" >
							<div class="col-md-12 foot-back">
							   <!--<p style="text-align:center;"> &copy; 2016 Codoid All Right Reserved</p>-->
							   <div class="col-md-5 aboutthro">
									<?php dynamic_sidebar('Footer About Us'); ?> 
								</div>

								<div class="col-md-5 footer-social">
									<h2>Connect with us</h2>
									<ul>
										<li>
<a href="https://twitter.com/codoid" target="_blank"><img alt="Twitter icon" src="<?php echo site_url();?>/wp-content/themes/twentythirteen-child/img/twitter_footer.png"  class="footer_img"></a></li>
										<li>
<a href="https://www.facebook.com/codoid/" target="_blank"><img alt="Facebook icon" src="<?php echo site_url();?>/wp-content/themes/twentythirteen-child/img/facebook_footer.png" class="footer_img"></a></li> 
										<li>
<a href="https://www.youtube.com/channel/UCCmOTDQgcf4W8oo22mBMUYA" target="_blank"><img alt="Youtube icon" src="<?php echo site_url();?>/wp-content/themes/twentythirteen-child/img/youtube_footer.png" class="footer_img"></a></li>
										<li>
<a href="https://www.linkedin.com/company/codoid" target="_blank"><img alt="Google+ icon" src="<?php echo site_url();?>/wp-content/themes/twentythirteen-child/img/linkedin_footer.png" class="footer_img"></a></li> 
										
										<li>
<a href="https://plus.google.com/+Codoid" target="_blank"><img alt="Twitter icon" src="<?php echo site_url();?>/wp-content/themes/twentythirteen-child/img/google_plus_footer.png" class="footer_img"></a></li>
									<ul>
								</div>

								<div class="clearfix"></div>

								 <div class="col-md-9 fotter-menudiv footer-menu">
									<?php dynamic_sidebar('Footer Nav'); ?>
									
                                    <p class="allright"> &copy; 2016 Codoid All Right Reserved</p>
                                    <div style="clear:both"></div>

								</div>
							   
							</div>
                       </div>
<!---end of footer-->

<script src="<?php echo site_url();?>/wp-content/themestwentythirteen-child/assets/js/jquery.js"></script> 
<script src="<?php echo site_url();?>/wp-content/themestwentythirteen-child/assets/js/bootstrap.js"></script>
</body>
</html>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>