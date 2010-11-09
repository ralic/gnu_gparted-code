<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

<head>
  <title>GParted -- Frequently Asked Questions</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
//meter();
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
        echo "<div class=\"newshdr\"><b>", htmlspecialchars ($line), ": ";
    } elseif ($line_num == $pos + 1) {
        echo htmlspecialchars ($line), "</b></div>\n";
        echo "<p>";
    } elseif (chop($line) == "---") {
        echo "</p>";
        $pos = $line_num + 1;
    } else {
	echo $line;
    }
}
echo "</p>";

?>

</div>

<? gnome_foot() ?>
</div>
</body>
</html>
