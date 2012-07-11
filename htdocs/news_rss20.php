<?
//Function to generate channel header xml given date
//  of last published news item
function echochannelheader($rssdate) {
?>
<rss version="2.0">
  <channel>
    <title>GParted News</title>
    <link>http://gparted.org/news.php</link>
    <description>
      News about the application, the bootable GParted Live image, and more.
    </description>
    <language>en-us</language>
    <pubDate><?echo $rssdate; ?></pubDate>
    <lastBuildDate><?echo $rssdate; ?></lastBuildDate>
    <docs>http://cyber.law.harvard.edu/rss/rss.html</docs>
    <generator>Custom php script</generator>
    <managingEditor>gedakc@users.sf.net (Curtis Gedak)</managingEditor>
    <webMaster>gedakc@users.sf.net (Curtis Gedak)</webMaster>
    <ttl>1800</ttl>
    <image>http://gparted.org/images/gparted-64x42.png</image>

<?
}

//Begin RSS 2.0 XML feed.
header("Content-Type: text/xml; charset=UTF-8");
echo "<?xml version=\"1.0\"?>\n";

$max_news = 7; //arbitrary value, increase if you need more
$filename = "text/news.text";
$fcontents = file($filename);
$pos = 0;
$count = 0;
$item_num = -1;

//Loop through news items
while( (list ($line_num, $line) = each ($fcontents)) && $count < $max_news  ) {
    if ($line_num == $pos) {
	$item_num = chop($line);
    } elseif ($line_num == $pos + 1) {
	$itemdate = date("r", strtotime( htmlspecialchars( chop($line) ) ) );
	//If first item then echo channel heading
	if ($count <= 0) {
		echochannelheader( $itemdate );
	}
	echo "    <item>\n";
	echo "      <guid>http://gparted.org/news.php?item=", $item_num, "</guid>\n";
	echo "      <pubdate>", $itemdate, "</pubdate>\n";
    } elseif ($line_num == $pos + 2) {
	echo "      <title>", htmlspecialchars ( chop($line) ), "</title>\n";
	echo "      <link>http://gparted.org/news.php?item=", $item_num, "</link>\n";
	echo "      <description><![CDATA[\n";
    } elseif ($line_num == $pos + 3 and ($line == "<br>\n") ) {
	//skip first <br> in news item
    } elseif (chop($line) == "---") {
	echo "      ]]></description>\n";
	echo "    </item>\n";
	echo "\n";
	$count++;
	$pos = $line_num + 1;
    } else {
	echo "          ", $line;
    }
}
?>
  </channel>
</rss>
