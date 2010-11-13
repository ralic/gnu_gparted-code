<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

<head>
  <title>GParted -- News</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="content">
<h1>GParted News</h1>

<div class="right">
  <?
    include "google/np-160x600-rhs-near-top.inc";
  ?>
</div>

<?
$filename = "text/news.text";
$fcontents = file($filename);
$pos = 0;
$aantal = 0;
$news_per_page = 5;

if ( ! empty( $_GET["alles"] ) )	
	$max_nieuws = 1000; //arbitrary value, increase if you need more
else
	$max_nieuws = $news_per_page ;

while( (list ($line_num, $line) = each ($fcontents)) && $aantal < $max_nieuws  ) {
    if ($line_num == $pos) {
	echo "<div class=\"newshdr\">\n";
	echo "<b>", htmlspecialchars ( chop($line) ), ": ";
    } elseif ($line_num == $pos + 1) {
	echo htmlspecialchars ($line), "</b></div>\n";
	echo "<div class=\"newsbody\">";
    } elseif (chop($line) == "---") {
	echo "</div>\n";
	$pos = $line_num + 1;
	$aantal++;
    } else {
	echo $line;
    }
}

if ( ! empty( $line ) )	
	echo "<p><a href=\"news.php?alles=alles\">All news...</a></p>\n";
?>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
