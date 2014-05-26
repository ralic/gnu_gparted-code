<?
include "functions.php";
webpage_init();
?>
<html>

<head>
  <title>GParted -- Frequently Asked Questions</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="content">
<h1>GParted FAQ</h1>

<div class="right">
  <?
    include "google/faqp-160x600-rhs-near-top.inc";
  ?>
</div>

<?
$filename = "text/faq.text";
$fcontents = file($filename);
$pos = 0;
$aantal = 0;
while (list ($line_num, $line) = each ($fcontents)) {
    if ($line_num == $pos) {
        echo "<div class=\"newshdr\">";
        echo "<a name=\"faq-", htmlspecialchars( chop($line) ), "\"></a>\n";
        echo "<b><a href=\"#faq-", htmlspecialchars ( chop($line) ), "\">",
        htmlspecialchars ( chop($line) ), "</a>: ";
    } elseif ($line_num == $pos + 1) {
        echo htmlspecialchars ($line), "</b></div>\n";
        echo "<div class=\"newsbody\"><br>";
    } elseif (chop($line) == "---") {
        echo "<br><br></div>\n";
        $pos = $line_num + 1;
    } else {
	echo $line;
    }
}

?>

</div>

<? gnome_foot() ?>
</div>
</body>
</html>
