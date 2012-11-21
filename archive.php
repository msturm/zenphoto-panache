<?php												
 
	include_once(dirname(__FILE__) . '/../../../includes/language.php'); 
	include_once(dirname(__FILE__) . '/../../../config.php');

?>
<?php if (!defined('WEBPATH')) die(); $themeResult = getTheme($zenCSS, $themeColor, 'light'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php zp_apply_filter('theme_head'); ?>
	<title><?php echo getBareGalleryTitle(); ?> | <?php echo gettext("Archive View"); ?></title>
	<meta http-equiv="content-type" content="text/html; charset=<?php echo getOption('charset'); ?>" />
	<link rel="stylesheet" href="<?php echo pathurlencode($zenCSS); ?>" type="text/css" />
	<link rel="StyleSheet" href="<?php echo SITEURL ?>style.css" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo SITEURL ?>menu.js"></script>
	<?php printRSSHeaderLink('Gallery',gettext('Gallery RSS')); ?>
</head>
<?php include('header.php');?>
<div id="main">

		<div id="gallerytitle">
			<?php if (getOption('Allow_search')) {  printSearchForm(); } ?>
		<h2>
		<span>
		<?php printHomeLink('', ' | '); ?><a href="<?php echo html_encode(getGalleryIndexURL());?>" title="<?php echo gettext('Gallery Index'); ?>"><?php echo getGalleryTitle();?></a>
		</span> | <?php echo gettext("Archive View"); ?>
		</h2>
	</div>
		<div id="padbox">
		<div id="archive"><?php printAllDates(); ?></div>
		<div id="tag_cloud">
					<p><?php echo gettext('Popular Tags'); ?></p>
			<?php printAllTagsAs('cloud', 'tags'); ?>
				</div>
	</div>

</div>

<div id="credit"><?php printRSSLink('Gallery','','RSS', ' | '); ?>
<?php printZenphotoLink(); ?>
<?php
if (function_exists('printUserLogin_out')) {
	printUserLogin_out(" | ");
}
?>
</div>

<?php printAdminToolbox(); ?>

<?php include('../html/footer.php');?>
