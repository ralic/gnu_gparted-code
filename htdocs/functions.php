<?
/* Functions used across web site:
 *
 * html_head_basic()    - HTML header meta data
 * html_head()          - HTML header
 * gnome_head()         - Page header
 * gnome_foot_wo_ads()  - Page footer without ads
 * gnome_foot()         - Page footer without ads
 * gnome_menu_wo_ads()  - Page Menu without ads
 * gnome_menu()         - Page Menu
 * menu_entries()       - Only used internally to functions.php
 */

function html_head_basic() { ?>
  <link rel="icon" href="images/gparted-16.png" type="image/png">
  <link rel="stylesheet" href="css/default.css" type="text/css">
<?
  /* Show canonical link if URL is not for gparted.org */
  if ( strcasecmp($_SERVER['SERVER_NAME'], 'gparted.org') != 0 )
  {
?>
  <link rel="canonical" href="http://gparted.org<?php echo $_SERVER['REQUEST_URI'] ?>">
<?
  }
?>
  <style type="text/css">
    <!--
    @import url(http://www.google.com/cse/api/branding.css);
    -->
  </style>
<?
  include "google/google-analytics.inc";
}

function html_head() { ?>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="author" content="Curtis Gedak">
  <meta name="keywords" content="partition editor, partition manager, partition magic, hard disk drive, flash drive, USB stick">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?
  html_head_basic();
}

function gnome_head() { ?>
<div class="hdr">
	<a href="index.php"><img class="logo" src="images/gparted-64x42.png" alt="home" title="back to home page"></a>
	<div class="hdrtitle">
	<b>Gnome Partition Editor</b>
	</div>
	<div class="hdrsearch">
	<?
	include "google/gparted-search.inc";
	?>
	</div>
</div>
<?
}

function gnome_foot_wo_ads() { ?>
<div class="ftr">
	<a href="documentation.php">Documentation</a> &nbsp;
	<a href="faq.php">FAQ</a> &nbsp;
	<a href="forum.php">Forum</a> &nbsp;
	<a href="bugs.php">Bugs</a> &nbsp;
	<a href="features.php">Features</a> &nbsp;
	<a href="screenshots.php">Screenshots</a> &nbsp;
	<a href="articles.php">Articles</a> &nbsp;
	<a href="contact.php">Contact</a>
	<br><br>
<a href="http://sourceforge.net/projects/gparted"><img
	src="http://sflogo.sourceforge.net/sflogo.php?group_id=115843&amp;type=12"
	width="120" height="31" border="0"
	alt="Get GParted at SourceForge.net. Fast, secure and Free
	Open Source software downloads" ></a>
<a href="http://validator.w3.org/check/referer"><img border="0"
	src="images/valid-html401.png"
	alt="Valid HTML 4.01!" height="31" width="88"></a>
<a href="http://jigsaw.w3.org/css-validator/validator?uri=http://gparted.org/">
	<img border="0" src="images/vcss.gif"
	 alt="Correct CSS!" height="31" width="88"></a>
<a href="privacy-policy.php">
	<img border="0" src="images/pp.png"
	 alt="Privacy policy"></a>
</div>
<? }

function gnome_foot() { ?>
<div class="bottomad">
<?
  include "google/sp-728x90-below-page-content.inc";
?>
</div>
<?
  gnome_foot_wo_ads();
}

function menu_entries() { ?>
	<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="download.php">Download</a></li>
	<li><a href="livecd.php">Live CD/USB</a></li>
	<li><a href="help.php">Help</a></li>
	<li><a href="news.php">News</a></li>
	<li><a href="development.php">Develop</a></li>
	<li><a href="donations.php">Donate</a></li>
	</ul>
<?
}

function gnome_menu_wo_ads() { ?>
<div class="hovermenu">
  <? menu_entries(); ?>
</div>
<? flush();
}

function gnome_menu() { ?>
<div class="hovermenu">
  <? menu_entries(); ?>
</div>
<div class="abovead">
<?
  include "google/sp-728x90-above-page-content.inc";
?>
</div>
<? flush();
}
?>
