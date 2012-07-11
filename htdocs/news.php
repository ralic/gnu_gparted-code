<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";

if ( ! empty( $_GET["item"] ) ) {
	if ( is_numeric( $_GET["item"] ) ) {
		//Numeric item specified
		$item = $_GET["item"];
		$title = "GParted -- News Item " . $item;
		$heading = "GParted News Item " . $item;
		$max_news = 1;
		$show_links = false; //skip display of more/less news and ad
	} else {
		//Non-numeric item specified
		$item = -1;
		$title = "GParted -- All News";
		$heading = "GParted All News";
		$max_news = 99999; //arbitrary value, increase if you need more
		$show_links = true;
	}
} else {
	//No item specified
	$item = -1;
	$title = "GParted -- News";
	$heading = "GParted News";
	$max_news = 7 ;
	$show_links = true;
}
?>

<head>
  <title><? echo $title; ?></title>
<? html_head() ?>
  <link rel='alternate' type='application/rss+xml' title='GParted News' href='news_rss20.php'>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="rightbox">
  <br>
  <a href="news_rss20.php">
    <img alt="RSS feed icon" src="images/feed-icon-16px.png" width="16" height="16">
    RSS News Feed
  </a>
</div>
<div class="content">
<h1><? echo $heading; ?></h1>

<? if ( $show_links == true ) { ?>
<div class="right">
  <?
    include "google/np-160x600-rhs-near-top.inc";
  ?>
</div>
<?
}

$filename = "text/news.text";
$fcontents = file($filename);
$pos = 0;
$count = 0;
$item_num = -1;

while( (list ($line_num, $line) = each ($fcontents)) && $count < $max_news  ) {
    if ($line_num == $pos) {
	$item_num = chop($line);
	// Determine if record should be displayed
	if ( $item < 0 or $item == $item_num )
		$display_record = true;
	else
		$display_record = false;
    } elseif ($line_num == $pos + 1) {
	if ( $display_record == true ) {
		echo "<div class=\"newshdr\">\n";
		echo "<b>", htmlspecialchars ( chop($line) ), ": ";
	}
    } elseif ($line_num == $pos + 2) {
	if ( $display_record == true ) {
		echo htmlspecialchars ($line), "</b></div>\n";
		echo "<div class=\"newsbody\">";
	}
    } elseif (chop($line) == "---") {
	if ( $display_record == true ) {
		echo "</div>\n";
		$count++;
	}
	$pos = $line_num + 1;
    } else {
	if ( $display_record == true )
		echo $line;
    }
}

if ( $count <= 0 )
	echo "<p><b>No news found.</b></p>\n";

if ($show_links == true) {
	if ( ! empty( $line ) )
		echo "<p><a href=\"news.php?item=all\">All news...</a></p>\n";
	else
		echo "<p><a href=\"news.php\">Less news...</a></p>\n";
}
?>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
