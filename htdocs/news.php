<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";

if ( ! empty( $_GET["item"] ) ) {
	$title = "GParted -- All News";
	$heading = "GParted All News";
	$max_news = 10000; //arbitrary value, increase if you need more
} else {
	$title = "GParted -- News";
	$heading = "GParted News";
	$max_news = 7 ;
}
?>

<head>
  <title><? echo $title; ?></title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="content">
<h1><? echo $heading; ?></h1>

<div class="right">
  <?
    include "google/np-160x600-rhs-near-top.inc";
  ?>
</div>

<?
$filename = "text/news.text";
$fcontents = file($filename);
$pos = 0;
$count = 0;

while( (list ($line_num, $line) = each ($fcontents)) && $count < $max_news  ) {
    if ($line_num == $pos) {
	echo "<div class=\"newshdr\">\n";
	echo "<b>", htmlspecialchars ( chop($line) ), ": ";
    } elseif ($line_num == $pos + 1) {
	echo htmlspecialchars ($line), "</b></div>\n";
	echo "<div class=\"newsbody\">";
    } elseif (chop($line) == "---") {
	echo "</div>\n";
	$pos = $line_num + 1;
	$count++;
    } else {
	echo $line;
    }
}

if ( ! empty( $line ) )
	echo "<p><a href=\"news.php?item=all\">All news...</a></p>\n";
else
	echo "<p><a href=\"news.php\">Less news...</a></p>\n";
?>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
