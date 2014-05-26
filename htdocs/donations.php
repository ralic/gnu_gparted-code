<?
include "functions.php";
webpage_init();
?>
<html>

<head>
  <title>GParted -- Donations</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu_wo_ads();
?>
<div class="content">
<h1>Donations</h1>
The GParted Project endeavours to provide a safe, easy way to manage
disk device partitions.  If you enjoy using our software, please
consider making a donation.<br>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<p>Donate via PayPal:
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="1930500">
<input type="image" src="images/btn_donate_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</p>
</form>
Your donation will help us to make GParted better.
<br>
<br>
We maintain a list of donations over the past year.  By
default each donor is listed as 'anonymous' to protect your identity.
If you would like your name or userid displayed then please let me
know,
<a href="mailto:gedakc&#064;users.sf.net">mailto: Curtis Gedak</a>.<br>
<br>
We are grateful for all donations.<br>
<br>
<h3>Received Donations</h3>
<table border=1>
<tr>
	<th><b>Date</b></th>
	<th><b>Donor</b></th>
	<th><b>Amount</b></th>
</tr>

<?
$filename = "text/donations.text";
$fcontents = file($filename);
$pos = 0;
$entry_count = 0;

$current_date = date("Y-m-d");
$term = 365;
$expire_date = date( "Y-m-d", mktime(0, 0, 0, date("m"), date("d")-$term, date("y")) );

$continue="true";
while( (list ($line_num, $line) = each ($fcontents)) && $continue == "true"  )
{
  if ($line_num == $pos)
  {
    $entry_date = chop($line);
    if ( strtotime( $entry_date ) <= strtotime( $expire_date ) )
    {
      $continue = "false";
    }
    else
    {
      echo "<tr>\n";
      echo "\t<td>", $entry_date, "</td>\n";
    }
  }
  elseif (chop($line) == "---")
  {
    echo "</tr>\n";
    $pos = $line_num + 1;
    $entry_count++;
  }
  else
  {
    echo "\t<td>", chop($line), "</td>\n";
  }
}

?>

</table>

</div>

<? gnome_foot_wo_ads() ?>

</div>
</body>
</html>
