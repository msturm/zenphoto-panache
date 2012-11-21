<?php												
 
	include_once(dirname(__FILE__) . '/../../../includes/language.php'); 
	include_once(dirname(__FILE__) . '/../../../config.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo getBareGalleryTitle(); ?></title>
	<meta http-equiv="content-type" content="text/html; charset=<?php echo getOption('charset'); ?>" />
	<?php zp_apply_filter('theme_head'); ?>
	<link rel="stylesheet" href="<?php echo $_zp_themeroot; ?>/slideshow.css" type="text/css" />
	<link rel="StyleSheet" href="<?php echo SITEURL ?>style.css" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo SITEURL ?>menu.js"></script>
	<?php printSlideShowJS(); ?>
</head>
<?php include('header.php');?>
	<div id="slideshowpage">
			<?php printSlideShow(true,true); ?>
	</div>
<?php include('../html/footer.php');?>
