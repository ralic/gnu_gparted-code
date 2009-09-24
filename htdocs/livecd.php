<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

<head>
  <title>GParted -- Live CD/USB/PXE/HD </title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="content">
<H1>Live CD/USB/PXE/HD</H1>
<p>
<b>GParted Live</b> is a small bootable GNU/Linux distribution for x86 machine.<br>
It enables you to use all the features of the latest versions of GParted.<br>
<br>
GParted Live can be installed on CD, USB, PXE server, and Hard Disk then run on an x86 machine.<br>
<br>
<font color="red">///WARNING/// Due to a hardware/firmware bug, it's _NOT_ recommended to run GParted live on some types of HP Pavilion machines. Otherwise your VGA card fan might be dead. For more info, please refer to <a href="http://bugzilla.gnome.org/show_bug.cgi?id=579000" target=_blank>this bug report</a>.</font>
<br>
<br>
For GParted Live on CD, download the .iso file and burn it as an image to a CD.<br>
For GParted Live on USB, check <a href="liveusb.php">this doc</a>.<br>
For GParted Live on a PXE server, check <a href="livepxe.php">this doc</a>.<br>
For GParted Live on Hard Disk, check <a href="livehd.php">this doc</a>.<br>
<br><br>
GParted Live downloads can be found <a href="download.php">here</a>.<br>
As for the packages comes with GParted live, you can check the file "live/packages.txt" inside the GParted iso file or zip file.<br>
<br><br>
<font color="red">///NOTE/// It is recommended to do a whole disk or partition image backup before you use GParted to resize or move your partition.</font>
Some free (GPL) disk or partition image tools, which provide live CD or USB flash drive so that you do not have to install or configure, are available:<br>
<ul>
<li><a href="http://clonezilla.org" target=_blank>Clonezilla</a>
<li><a href="http://www.fsarchiver.org" target=_blank>FSArchiver</a>
<li><a href="http://g4l.sourceforge.net" target=_blank>G4L</a>
<li><a href="http://www.feyrer.de/g4u" target=_blank>g4u</a>
<li><a href="http://partimage.org" target=_blank>Partimage</a>
<li><a href="http://partclone.org" target=_blank>Partclone</a>
</ul>

<br><br>
If you want to create gparted live from scratch or to customize that, you can follow <a href="create-gparted-live.php">this doc</a>.
<br><br><br><br><br><br><br><br><br>
</p>
</div>

<? gnome_foot() ?>

</div>
</body>
</html>
