
<?php if (!defined('WEBPATH')) die(); $themeResult = getTheme($zenCSS, $themeColor, 'light'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php zp_apply_filter('theme_head'); ?>
	<title><?php echo getBareGalleryTitle(); ?></title>
	<link rel="stylesheet" href="<?php echo  $zenCSS ?>" type="text/css" />
	<link rel="StyleSheet" href="<?php echo $_zp_themeroot; ?>/css/style.css" type="text/css" media="screen" />
	<?php printRSSHeaderLink('Gallery',gettext('Gallery RSS')); ?>	
</head>
<?php include('header.php');?>
<div id="main">

	<div id="gallerytitle">
		<?php if (getOption('Allow_search')) {  printSearchForm(''); } ?>
		<h2><?php printHomeLink('', ' | '); echo getGalleryTitle(); ?></h2>
	</div>
		
		<div id="padbox">
		
		<div id="albums">
			<?php while (next_album()): ?>
			<div class="album">
						<div class="thumb">
					<a href="<?php echo html_encode(getAlbumLinkURL());?>" title="<?php echo gettext('View album:'); ?> <?php echo getAnnotatedAlbumTitle();?>"><?php printAlbumThumbImage(getAnnotatedAlbumTitle()); ?></a>
 						 </div>
						<div class="albumdesc">
					<h3><a href="<?php echo html_encode(getAlbumLinkURL());?>" title="<?php echo gettext('View album:'); ?> <?php echo getAnnotatedAlbumTitle();?>"><?php printAlbumTitle(); ?></a></h3>
 							<small><?php printAlbumDate(""); ?></small>
					<p><?php printAlbumDesc(); ?></p>
				</div>
				<p style="clear: both; "></p>
			</div>
			<?php endwhile; ?>
		</div>
		<br clear="all" />
		<?php printPageListWithNav("&laquo; ".gettext("prev"), gettext("next")." &raquo;"); ?>
	</div>

</div>

<div id="credit">
<?php
if (function_exists('printUserLogin_out')) {
	printUserLogin_out('', ' | ');
}
?>
<?php printRSSLink('Gallery','','RSS', ' | '); ?>
<?php printCustomPageURL(gettext("Archive View"),"archive"); ?> |

<?php	if (function_exists('printContactForm')) {
	printCustomPageURL(gettext('Contact us'), 'contact', '', '', ' | ');
}
?>

<?php
if (!zp_loggedin() && function_exists('printRegistrationForm')) {
	printCustomPageURL(gettext('Register for this site'), 'register', '', '', ' | ');
}
?>
<?php printZenphotoLink(); ?>
</div>

<?php printAdminToolbox(); ?>
<?php include('../html/footer.php'); ?>
