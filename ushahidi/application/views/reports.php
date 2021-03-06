	<div class="bigcontainer">
	
	<div class="container ">
		<!-- Header -->
    	<div class="span-24"> <a href ="http://sharek961.org"><img src ="../../application/views/images/home_logo_slogan.png"></a></div>
			<?php include('navigation.php'); ?>
		<div class="span-24"> <img src ="../../application/views/images/home-banner.png"></div>
		
		
		<!-- start reports block -->
		<div class="big-block">
			<div class="big-block-top">
				<div class="big-block-bottom">
					<h1>Reports <?php echo $pagination_stats; ?></h1>
					
                    <?php
                   	foreach ($incidents as $incident)
                    {
                        $incident_id = $incident->id;
                        $incident_title = $incident->incident_title;
                        $incident_description = $incident->incident_description;

                        // Trim to 150 characters without cutting words
                        //XXX: Perhaps delcare 150 as constant
						$incident_description = text::limit_chars($incident_description, 150, "...", true);
						
                        $incident_date = date('Y-m-d', strtotime($incident->incident_date));
                        $incident_location = $incident->location->location_name;
                        $incident_verified = $incident->incident_verified;
                        if ($incident_verified)
                        {
                            $incident_verified = "<span class=\"report_yes\">YES</span>";
                        }
                        else
                        {
                            $incident_verified = "<span class=\"report_no\">NO</span>";
                        }
                    
                        echo "<div class=\"report_row1\">";
                        echo "	<div class=\"report_thumb report_col1\">";
                        echo "    	&nbsp;";
                        if(isset($media_icons[$incident_id])){
                        	echo $media_icons[$incident_id];
                        }
                        echo "    </div>";
                        echo "    <div class=\"report_details report_col2\">";
                        echo "    	<h3><a href=\"" . url::base() . "reports/view/" . $incident_id . "\">" . $incident_title . "</a></h3>";
                        echo $incident_description;
                        echo "  	</div>";
                        echo "    <div class=\"report_date report_col3\">";
                        echo $incident_date;
                        echo "    </div>";
                        echo "    <div class=\"report_location report_col4\">";
                        echo $incident_location;
                        echo "    </div>";
                        echo "    <div class=\"report_status report_col5\">";
                        echo $incident_verified;
                        echo "    </div>";
                        echo "</div>";
                    }
                ?>
				<?php echo $pagination; ?>
				</div>
			</div>
		</div>
		<!-- end reports block -->

