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
<?
$filename = "text/faq.text";
$fcontents = file($filename);
$pos = 0;
$aantal = 0;
while (list ($line_num, $line) = each ($fcontents)) {
    if ($line_num == $pos) {
        echo "<table width='80%'><tr>";
        echo "<th align=LEFT class=\"news\">", htmlspecialchars ($line), ": ";
    } elseif ($line_num == $pos + 1) {
        echo htmlspecialchars ($line), "</th></tr>\n";
	echo "<tr><td class=\"news\">";
    } elseif (chop($line) == "---") {
        echo "</td></tr></table>";
        $pos = $line_num + 1;
    } else {
	echo $line;
    }
}
echo "</td></tr></table>";

?>

</div>

<? gnome_foot() ?>
</div>
</body>
</html>
