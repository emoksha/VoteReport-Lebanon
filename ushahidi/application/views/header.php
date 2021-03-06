<?php 
/**
 * Header view page.
 *
 * PHP version 5
 * LICENSE: This source file is subject to LGPL license 
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/copyleft/lesser.html
 * @author     Ushahidi Team <team@ushahidi.com> 
 * @package    Ushahidi - http://source.ushahididev.com
 * @module     API Controller
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license    http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License (LGPL) 
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
	<title><?php echo $site_name; ?></title>
	
	<!-- Blue Print CSS-->
	<link rel="stylesheet" href="http://www.sharek961.org/application/views/mustapha_css/blueprint/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="http://www.sharek961.org/application/views/mustapha_css/custom-sharek961.css" type="text/css" media="screen, projection">
	<!--[if IE]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
		

	<?php
	// Load OpenLayers before jQuery!
	if ($map_enabled)
	{
		echo html::script('http://www.sharek961.org/media/js/OpenLayers/OpenLayers.js');
		// OpenLayers Theme
		echo html::stylesheet('http://www.sharek961.org/application/views/mustapha_css/style');
		echo html::stylesheet('http://www.sharek961.org/application/views/mustapha_css/all');
		
	}	
	
	// Load jQuery
	echo html::script('http://www.sharek961.org/media/js/jquery');
	echo html::script('http://www.sharek961.org/media/js/jquery.ui.min');
	
	// Other stuff to load only we have the map enabled
	if ($map_enabled)
	{
		echo $api_url . "\n";
		if ($main_page) {
			echo html::script('http://www.sharek961.org/media/js/accessibleUISlider.jQuery');
			echo html::script('http://www.sharek961.org/media/js/jquery.flot');
			echo html::script('http://www.sharek961.org/media/js/timeline');
			?>
			<!--[if IE]><script language="javascript" type="text/javascript" src="<?php echo url::base() ?>media/js/excanvas.pack.js"></script><![endif]-->
			<?php
			echo html::stylesheet('http://www.sharek961.org/application/views/mustapha_css/jquery-ui-themeroller');
		}
	}
	if ($validator_enabled) 
	{
		echo html::script('http://www.sharek961.org/media/js/jquery.validate.min');
	}
	if ($datepicker_enabled)
	{
		echo html::stylesheet('http://www.sharek961.org/application/views/mustapha_css/ui.datepicker');
	}
	if ($photoslider_enabled)
	{
		echo html::script('http://www.sharek961.org/media/js/photoslider.js');
	}
	if( $videoslider_enabled )
	{
		echo html::script('http://www.sharek961.org/media/js/coda-slider.pack.js');
	}
	if ($allow_feed == 1) {
		echo "<link rel=\"alternate\" type=\"application/rss+xml\" href=\"http://" . $_SERVER['SERVER_NAME'] . "/feed/\" title=\"RSS2\" />";
	}
	?>
	<script type="text/javascript">
		<?php echo $js . "\n"; ?>
	</script>
</head>

<!--
<body class="<?php echo $this_page ?>">
	<div id="main">
		<div id="header">
			<?php include('navigation.php'); ?>
			<div class="lang_search">
				<div class="search_box">
					<form method="get" id="search" action="<?php echo url::base() . 'search/'; ?>">
					<input type="text" id="keywords" name="k" value="" class="text">
					<input type="submit" name="b" class="searchbtn" value="<?php echo Kohana::lang('ui_main.search'); ?>" title="">
					</form>
				</div> /search box -->
			</div> <!-- lang_search -->
		</div> <!-- /header -->
		<!-- end header block <> start content block -->
