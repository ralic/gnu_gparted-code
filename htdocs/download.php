<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

<head>
  <title>GParted -- Download</title>
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
<h1>Downloads</h1>
<p><i>
<b>CAUTION</b>: &nbsp; 
Editing partitions has the potential to cause <b><u>LOSS of DATA</u></b>.<br>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
You are advised to <b><u>BACKUP your DATA</u></b> before using
the gparted application.<br>
</i></p>

<p><i>
<font color="red">
<b>WARNING</b>: &nbsp; 
GParted 0.6.0 contains a serious bug when moving partitions to the right.<br>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
See <a href="https://bugzilla.gnome.org/show_bug.cgi?id=623630">Bug #623630</a> for more details.<br>
</font>
</i></p>

<p><i>
<b>CAUTION</b>: &nbsp; Partition editing problems can be experienced using<br>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
GParted with newer GNU/Linux kernels (2.6.31+),<br>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
udev (138+), and parted (1.8.8.+ up to 2.2 inclusive).<br>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
These problems have even occurred with GParted Live 0.5.2-9.<br>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
If you encounter an error message similar to:<br>
<br>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
ERROR: Current NTFS volume size is bigger than the device size!<br>
<br>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
then please refer to the following forum post:<br>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<a href="http://gparted-forum.surf4.info/viewtopic.php?id=13777">"WARNING! Problem Resizing File Systems with GParted"</a>.<br>
<br>
<b>We recommend GParted 0.5.1 or higher</b> for all partition editing operations.
</i></p>

<p>
If you use GParted and it helps you with your task, please consider making
a donation to help us make GParted better.<br>
<a href="donations.php"><img src="images/btn_donate_LG.gif" border="0" alt="Donate to GParted"></a>
</p>

<h3>GParted</h3>
Browse releases of GParted source code <a href="http://sourceforge.net/projects/gparted/files/gparted/">here</a><br>
<br>
<h3>GParted Live CD/USB/HD/PXE</h3>
<!--
<font color="red">///WARNING/// Due to a hardware/firmware bug, it's _NOT_ recommended to run GParted live on some types of HP Pavilion machines. This is not the fault of GParted live. Otherwise your VGA card fan might be dead. For more info, please refer to <a href="http://bugzilla.gnome.org/show_bug.cgi?id=579000" target=_blank>this bug report</a>.</font><br>
-->
<br>
Browse <b>Stable</b> releases of GParted Live
 <a href="http://sourceforge.net/projects/gparted/files/gparted-live-stable/">here</a> (<a href="http://free.nchc.org.tw/gparted-live/stable/CHECKSUMS.TXT" target=_blank>checksums info</a>, <a href="http://free.nchc.org.tw/gparted-live/stable/ChangeLog-GParted-live.txt" target=_blank>changelog info</a>).<br>
Browse latest <b>Testing</b> releases GParted Live
 <a href="http://sourceforge.net/projects/gparted/files/gparted-live-testing/">here</a> (<a href="http://free.nchc.org.tw/gparted-live/testing/CHECKSUMS.TXT" target=_blank>checksums info</a>, <a href="http://free.nchc.org.tw/gparted-live/testing/ChangeLog-GParted-live.txt" target=_blank>changelog info</a>).<br>
<br>
Browse old LiveCD (0.0.9-alpha1 to 0.3.4-11) releases <a href="http://sourceforge.net/projects/gparted/files/old-gparted-livecd/">here</a>.<br>
Browse old LiveUSB (0.2.5-2 to 0.3.1-1) releases <a href="http://sourceforge.net/projects/gparted/files/old-gparted-liveusb/">here</a>.<br>
<br>
<h3>Order a Disk</h3>
<p>
The GParted LiveCD is available as a large ISO file that may be difficult
for some people to download and burn to CD.
Since some online shops provide GParted Live on CD,
you might decide to order it and receive the disk by postal mail.
Before ordering a disk, please check that it is the version you want.<br>
These shops are not affiliated with the GParted Project.
</p>
<a href="http://www.linuxcd.org/view_distro.php?id_distro=328&amp;ref=gparted">LinuxCD.org</a>
<br>
</div>

<? gnome_foot() ?>

</div>
</body>
</html>
