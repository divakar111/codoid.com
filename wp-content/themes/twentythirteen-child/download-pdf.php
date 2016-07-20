<?php
/**
template name: Downlaod Browser
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
<?php
/*if(isset($_POST['submit'])){
$to = 'deepmala.nimje@gmail.com';
$subject = 'Download Browser By' . $_POST['name'];
$body = $_POST['feedback'];
$headers = 'Content-Type: text/html; charset=UTF-8';
wp_mail( $to, $subject, $body, $headers );

}

*/if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$feed = $_POST['feedback'];
     $to = "sales@pioneerherbal.com";
         $subject = "Request for download free broucher";
         
         $message = "<b>Message.</b>";
         $message = $feed;
         
		 $headers .= 'From: ' . $_POST['email'];
         $headers .= 'Reply-To: ' . $email;
         $headers .= "MIME-Version: 1.0\r\n";
         $headers .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$headers);
         
         if( $retval == true )
         {
            echo "Message sent successfully...";
         }
         else
         {
            echo "Message could not be sent...";
         }
}
?>
			<div class="entry-content">
               <div style="clear:both;"></div>

                <div class="page-left">
                <div class="mydownload" id="mydownloadform" style="padding-top:5%; border:1 px solid #CCC;">
                  
                  <form name="download" method="post" action="wp-content/themes/twentythirteen-child/pdf/product-brochure">
                  Name Of Person :<span class="required"> * </span><br/>
                  <input type="text" name="name" required size="35"><br/><br/>
                  Contact No : <span class="required"> * </span><br/>
                  <input type="text" name="contact" required pattern="^([0|\+[0-9]{1,5})?([1-9][0-9]{9})$" size="35"><br/><br/>
                  Email : <span class="required"> * </span><br/>
                  <input type="text" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" size="35"><br/><br/>
                  Feedback :<br/>
                  <textarea name="feedback" rows="8" cols="35"></textarea><br/><br/>
                  <input type="submit" name="submit" value="submit">&nbsp;&nbsp;<input type="reset" name="reset" value="Reset">
                  
                  <!--<table>
                     <tr>
                       <td align="right">Name Of Person : *</td>
                       <td align="left"> <input type="text" name="name" required size="35"></td>
                     </tr>
                     <tr>  
                         <td>Contact No : *</td>
                         <td> <input type="text" name="contact" required pattern="^([0|\+[0-9]{1,5})?([1-9][0-9]{9})$" size="35"> </td>
                     </tr>
                     <tr>    
                         <td>Email : *</td>
                         <td> <input type="text" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" size="35"></td>
                     </tr>
                     <tr>    
                         <td valign="top">Feedback : </td>
                         <td> <textarea name="feedback" rows="8" cols="35"></textarea></td>
                      </tr>
                      <tr>
                          <td></td>   
                          <td><input type="submit" name="submit" value="submit">&nbsp;&nbsp;<input type="reset" name="reset" value="Reset"></td>
                      </tr>    
                  </table>-->
                        </form>
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
