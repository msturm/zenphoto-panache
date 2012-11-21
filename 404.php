<?php												
 
	include_once(dirname(__FILE__) . '/../../../includes/language.php'); 
	include_once(dirname(__FILE__) . '/../../../config.php');

?>
<?php if (!defined('WEBPATH')) die(); $themeResult = getTheme($zenCSS, $themeColor, 'light'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php zp_apply_filter('theme_head'); ?>
	<title><?php echo getBareGalleryTitle(); ?> | <?php echo getBareAlbumTitle();?></title>
	<link rel="stylesheet" href="<?php echo pathurlencode($zenCSS); ?>" type="text/css" />
	<link rel="StyleSheet" href="<?php echo SITEURL ?>style.css" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo SITEURL ?>menu.js"></script>
	<?php printRSSHeaderLink('Album',getAlbumTitle()); ?>
</head>
<?php include('header.php');?>
<div id="main">

	<div id="gallerytitle">
		<h2>
		<span>
		<?php printHomeLink('', ' | '); ?><a href="<?php echo html_encode(getGalleryIndexURL());?>" title="<?php echo gettext('Gallery Index'); ?>"><?php echo getGalleryTitle();?></a>
		</span> | <?php echo gettext("Object not found"); ?>
		</h2>
	</div>

		<div id="padbox">
 		<?php
		echo gettext("The Zenphoto object you are requesting cannot be found.");
		if (isset($album)) {
			echo '<br />'.sprintf(gettext('Album: %s'),sanitize($album));
		}
		if (isset($image)) {
			echo '<br />'.sprintf(gettext('Image: %s'),sanitize($image));
		}
		if (isset($obj)) {
			echo '<br />'.sprintf(gettext('Page: %s'),substr(basename($obj),0,-4));
		}
 		?>
	</div>

</div>

<div id="credit">
<?php printZenphotoLink(); ?>
</div>

<?php
printAdminToolbox();
?>

<?php include('../html/footer.php');?>
