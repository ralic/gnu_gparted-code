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
  <?
  html_head_basic();
}

function gnome_head() { ?>
<div class="hdr">
	<a href="index.php"><img class="logo" src="images/gparted-64.png" alt="home" title="back to home page"></a>
	<p><font color="white">
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	<b>Gnome Partition Editor</b>
	</font></p>
</div>
<?
}

function gnome_foot_wo_ads() { ?>
<div class="ftr">
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
<div class="section">
	<div class="sectiontitle">GParted</div>
	<div class="sectioncontent">
		<ul class="nobullet">
		<li><a href="download.php"><b>Download</b></a></li>
		<li><a href="livecd.php">Live CD / USB</a></li>
		<li><a href="news.php">News</a></li>
		<li><a href="features.php">Features</a></li>
		<li><a href="screenshots.php">Screenshots</a></li>
		<li><a href="index.php">About</a></li>
		<li><a href="donations.php">Donate</a></li>
		</ul>
	</div>
</div>
<div class="section">
	<div class="sectiontitle">Help</div>
	<div class="sectioncontent">
		<ul class="nobullet">
		<li><a href="documentation.php">Documentation</a></li>
		<li><a href="faq.php">FAQ</a></li>
		<li><a href="forum.php">Forum</a></li>
		<li><a href="bugs.php">Bugs</a></li>
		<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>
</div>
<div class="section">
	<div class="sectiontitle">Development</div>
	<div class="sectioncontent">
		<ul class="nobullet">
		<li><a href="dev-status.php">Status</a></li>
		<li><a href="git.php">Git</a></li>
		<li><a href="artwork.php">Artwork</a></li>
		<li><a href="http://sourceforge.net/projects/gparted">SF Project Page</a></li>
		<li><a href="howtohelp.php">How to help</a></li>
		</ul>
	</div>
</div>
<div class="section">
	<div class="sectiontitle">Site Search</div>
	<div class="sectioncontent">
	<?
	include "google/gparted-search.inc";
	?>
	</div>
</div>
<?
}

function gnome_menu_wo_ads() { ?>
<div class="menu">
  <? menu_entries(); ?>
</div>
<? flush();
}

function gnome_menu() { ?>
<div class="menu">
  <? menu_entries(); ?>
</div>
<? flush();
}
?>
