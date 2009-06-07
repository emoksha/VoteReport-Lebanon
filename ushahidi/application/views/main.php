<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<body>
		<div class="bigcontainer">
		
		<div class="container ">
			<!-- Header -->
	    	<div class="span-24"><a href="/"><img src ="application/views/images/home_logo_slogan.png"></a></div>
						<?php include('navigation.php'); ?>
			<div class="span-24"> <img src ="application/views/images/home-banner.png"></div>
	    	
			<!-- ////// left main content /////////-->
	    	<div class ="span-10">
				<h3>Happening Right Now In Lebanon</h3>
				
<!-- ///////////////////////////////// THE MAP, Slider & Graph //////////////////////////////////////////-->		

				<div class="big-block">
				   <div class="big-block-top">
				    <div class="big-block-bottom">
				     <div class="big-map-block">
				      <div class="filter">
				       <strong><?php echo Kohana::lang('ui_main.media_filter'); ?></strong>
				       <ul>
				        <li><a id="media_0" class="active" href="#" name="media_0"><span><?php echo Kohana::lang('ui_main.reports'); ?></span></a></li>
				        <li><a id="media_4" href="#" name="media_4"><span><?php echo Kohana::lang('ui_main.news'); ?></span></a></li>
				        <li><a id="media_1" href="#" name="media_1"><span><?php echo Kohana::lang('ui_main.pictures'); ?></span></a></li>
				        <li><a id="media_2" href="#" name="media_2"><span><?php echo Kohana::lang('ui_main.video'); ?></span></a></li>
				        <li><a id="media_0" href="#" name="media_0"><span><?php echo Kohana::lang('ui_main.all'); ?></span></a></li>
				       </ul>
				       
				      </div>
				      <div style="padding:10px;">
				       <strong><?php echo "Click on the dots to view reports"; ?></strong>
				      </div>
				      <div id="map" class="map-holder"></div>
				      <div class="slider-holder">
				       <form action="#">
				        <input type="hidden" value="0" name="currentCat" id="currentCat">
				        <fieldset>
				         <label for="startDate">From:</label> <select name="startDate" id="startDate">
				          <?php echo $startDate; ?>
				         </select> <label for="endDate">To:</label> <select name="endDate" id="endDate">
				          <?php echo $endDate; ?>
				         </select>
				        </fieldset>
				       </form>
				      </div>
				      <div id="graph" class="graph-holder"></div>
				     </div>
				     <div class="category">
				      <strong class="title">CATEGORY FILTER</strong>
				      <div class="grey-box">
				       <div class="grey-box-bg">
				        <ul>
				         <li>
				          <a class="active" id="cat_0" href="#" name="cat_0"><span style="background:no-repeat url(<?php echo url::base() . 'swatch/?c=#990000&w=16&h=16&.png'?>;); background-position:left center;">All Categories</span></a>
				         </li><?php
				              foreach ($categories as $category => $category_info)
				              {
				               $category_title = $category_info[0];
				               $category_color = $category_info[1];
				               echo '<li><a href="#" id="cat_'. $category .'"><span style="background:no-repeat url('."/swatch/?c=" . $category_color . "&w=16&h=16&.png" . '); background-position:left center;">' . $category_title . '</span></a></li>';
				               }
				             ?>
				        </ul>
				       </div>
				      </div>

				        
				        <!-- /how_to_submit -->
				     </div>
				    </div>
				   </div>
				  </div><!-- end map and media filter <> start incidents and news blocks -->
				
				
				
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////-->				
<div id ="blogs"><h3><?php echo $blog_feed->items[0]['title'] ?></h3>
<p>	
<?php echo $blog_feed->items[0]['description'] ?>&nbsp;
<a href="<?php echo $blog_feed->items[0]['link'] ?>">More</a>
</p>
</div>

			</div>
			
			<!-- //////// Middle 2nd and 3rd columns   ///////-->
			<div class ="span-11">
			<div class ="span-11">
			<div class ="span-6 append-1"><h3><a href ="http://www.sharek961.org/sharikblog/?page_id=11"> How to participate</a> </h3> </div> <div class ="span-4 last">  <div class ="sharek_submit"><a class ="sharek_submit" href ="http://www.sharek961.org/reports/submit">SUBMIT AN INCIDENT</a></div></div>				
			</div>
			
			<div class ="span-11 sharek_yellowbox">
			 <div class ="span-11">	
			  <div class ="span-1"><img src="application/views/images/icon-email.png"></div>
			  <div class ="span-4" onclick="location.href='mailto:sharek@sharek961.org?subject=Report incident';" style="cursor: pointer;"><div class ="sharek_addpadding">you send us an Email to 'sharek@sharek961.org'</div></div>
			  <div class ="span-1"><img src="application/views/images/icon-twitter.png"></div>
			  <div class ="span-5 last" onclick="location.href='http://www.twitter.com';" style="cursor: pointer;"><div class ="sharek_addpadding">you write a message on twitter to @sharek961</div></div>
			 </div>
			 <div class ="span-11">
			  <div class ="span-1"><img src="application/views/images/icon-sms.png"></div>
		  	  <div class ="span-4" onclick="location.href='http://www.sharek961.org/sharikblog/?page_id=13';" style="cursor: pointer;"><div class ="sharek_addpadding">You send us a text message to 7118 9118</div></div>
			  <div class ="span-1"><img src="application/views/images/icon-form.png"></div>
			  <div class ="span-5 last" onclick="location.href='http://www.sharek961.org/reports/submit';" style="cursor: pointer;"><div class ="sharek_addpadding">or you simply fill out the form here </div></div>
		     </div>
			</div>
			<div class ="span-11">
				
			<h3><a href ="http://www.sharek961.org/sharikblog/?page_id=2">Who we are</a></h3>
			
			<p>Sharek961 has no political interest other than to promote transparency in a country we love. We’re an independent, unaffiliated, non-partisan, all-volunteer project, and the result of the hard work and collaboration of many partners and individuals. <a href ="http://www.sharek961.org/sharikblog/?page_id=2">read more</a></p>
			
			<div class ="span-6" id ="userstream">
			  <h3><a href ="http://sharek961.org/reports/">User Feed Stream</a></h3>
			
			<?php foreach ($incidents as $incident) {
	             $incident_id = $incident->id;
	             $incident_title = text::limit_chars($incident->incident_title, 140, '...', True);
	             $incident_date = $incident->incident_date;
	             $incident_date = date('M j Y G:i', strtotime($incident->incident_date));
	             $incident_location = $incident->location->location_name;
	           ?>

			  <div class ="span-6"><a href="<?php echo url::base() . 'reports/view/' . $incident_id; ?>"><?php echo $incident_title ?></a>
			<div class ="span-3"><?php echo $incident_date; ?></div><div clas ="pan-3 last">| (<?php echo $incident_location; ?>)</div>
			</div>

<?php } ?>   

			<!-- add photos-->
			<div class ="span-6" id ="userphotos">
			<h3>User Photos</h3>

<iframe height="330" width="220" src="http://www.demotix.com/popup/breaking/lebanon%20elections" style="overflow: hidden;">
 <p>Your browser does not support iframes.</p>
</iframe>

			</div>
				
			<div class ="span-6" id ="uservideos">
				
			<!-- add videos -->
		<h3>User Videos</h3>
		
		<ul class="sharekvideo">      
	         <?php 
	          foreach ($video_feeds as $feed) {
	            $feed_id = $feed->id;
	            $feed_title = text::limit_chars($feed->item_title, 140, '...', True);
	            $feed_link = $feed->item_link;
	        ?>
	         <li class="videothumbnails">     
	           <object width="140" height="112"><param name="movie" value="<?php echo $feed_link; ?>"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="<?php echo $feed_link; ?>" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="140" height="112"></embed></object>
	           <a href="#" class="title"><?php echo $feed_title; ?></a>
	         </li>
	            <?php } ?>
		
		<a href ="http://www.sharek961.org/reports/submit"> (upload yours)</a>
		</div>
		
			</div>
			
			
			<div class ="span-5 last">

		  <h3>Lade Reports</h3>

			<?php foreach ($lade_reports as $lrep) {
			         
			?>   		
			<span class ="sharek_news"><?php echo $lrep[1] ?><a href ="<?php echo $lrep[0]; ?>"> details>></a></span>
			  
			<?php } ?>

		      <h3>News</h3>
	
			        <?php foreach ($feeds as $feed) {
			         $feed_id = $feed->id;
			         $feed_title = text::limit_chars($feed->item_title, 140, '...', True);
			         $feed_link = $feed->item_link;
			         $feed_date = date('M j Y G:i', strtotime($feed->item_date));
			         $feed_source = "NEWS";
			        ?>
			         
			       <!-- 
			          <td><a href="<?php echo $feed_link; ?>"><?php echo $feed_title ?></a></td>
			          <td><?php echo $feed_source ?></td>
			          <td><?php echo $feed_date; ?></td>    
			         -->
			        		
			  <span class ="sharek_news"><?php echo $feed_title ?><a href ="<?php echo $feed_link; ?>"> details>></a></span>
			  
			<?php } ?>
			
			</div>
			</div>	
			</div>				
				<!-- //////// last column   ///////-->

				<div class ="span-3 last">
				<div class ="user_area">
                                  <?php include('sidebar.php'); ?>
				</div>			
		</div>
	
	
		<!-- Start of StatCounter Code -->
		<script type="text/javascript">
		var sc_project=4783252; 
		var sc_invisible=1; 
		var sc_partition=54; 
		var sc_click_stat=1; 
		var sc_security="66cf70ae"; 
		</script>

		<script type="text/javascript"
		src="http://www.statcounter.com/counter/counter.js"></script><noscript><div
		class="statcounter"><a title="blogger visitor counter"
		href="http://www.statcounter.com/blogger/"
		target="_blank"><img class="statcounter"
		src="http://c.statcounter.com/4783252/0/66cf70ae/1/"
		alt="blogger visitor counter" ></a></div></noscript>
		<!-- End of StatCounter Code -->
