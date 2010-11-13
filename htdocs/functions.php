<?
// Hier komen alle functies te staan die in alle scripts gebruikt kunnen worden.
// Zo worden de scripts zelf redelijk schoon gehouden.
// Functies tot nu toe zijn:
//
//	meter()
//      html_head()
//	gnome_head()
//	gnome_foot_wo_ads()
//	gnome_foot()
//	gnome_menu()
//

function meter() { ?>
<div class="meter">
<!--WEBBOT bot="HTMLMarkup" startspan ALT="Site Meter" -->
<script type="text/javascript" language="JavaScript">var site="s13gnome"</script>
<script type="text/javascript" language="JavaScript1.2" src="http://s13.sitemeter.com/js/counter.js?site=s13gnome">
</script>
<noscript>
<a href="http://s13.sitemeter.com/stats.asp?site=s13gnome" target="_top">
<img src="http://s13.sitemeter.com/meter.asp?site=s13gnome" alt="Site Meter" border=0></a>
</noscript>
<!-- Copyright (c)2002 Site Meter -->
<!--WEBBOT bot="HTMLMarkup" Endspan -->
</div>
<?
}

function html_head() {
srand ((double) microtime() * 1000000);
$backgroundnumber = rand (1, 5);
?>
  <link rel="icon" href="images/gparted-16.png" type="image/png">
  <link rel="stylesheet" href="css/default.css" type="text/css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="author" content="Vincent van Adrighem and Curtis Gedak">
  <meta name="keywords" content="partition manager partition editor hard disk drive parted gparted partition magic">
  <style type="text/css">
    <!--
    @import url(http://www.google.com/cse/api/branding.css);
    -->
    .hdr {
      background: url("images/<? 
	echo "background0";
	echo $backgroundnumber;
	echo ".png\") no-repeat;";
?>
    }
  </style>
<?
  include "google/google-analytics.inc";
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
<div class="copyright">
<!-- Commented out 2009-03-11 by Curtis Gedak
<a href="http://www.softpedia.com/reviews/linux/GParted-Review-22766.shtml#"><img src="images/softpedia_pick_award_s.gif"
	border="0" alt="Softpedia Review Award Logo"></a>
-->
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

function gnome_menu() { ?>
<div class="menu">
<div class="section">
	<div class="sectiontitle">GParted</div>
	<div class="sectioncontent">
		<ul class="nobullet">
		<li><a href="index.php">About</a></li>
		<li><a href="news.php">News</a> <?
//Dit stukje vist de datum uit de nieuwstekst-spool.
	$filename = "text/news.text";
	$fcontents = file($filename);
	list ($line_num, $line) = each ($fcontents);
	$line = chop($line);
	$line = substr($line, 0, strlen($line) - 5);
	echo "(", $line, ")</li>\n"; ?>
		<li><a href="features.php">Features</a></li>
		<li><a href="screenshots.php">Screenshots</a></li>
		<li><a href="livecd.php">Live CD/USB/PXE</a></li>
		<li><a href="download.php">Downloads</a></li>
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
		<li><a href="howtohelp.php">How can I help?</a></li>
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
</div>
<? flush();
}
?>
