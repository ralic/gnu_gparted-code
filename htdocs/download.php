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
<p><font color="red">

<b>WARNING</b>: &nbsp; Do not use GParted with unpatched parted-1.9.0.<br>
When used with newer Linux kernels, such as 2.6.30, unpatched
parted-1.9.0 fails to properly inform the kernel of changes to
partition tables.<br>
<br>
 &nbsp; &nbsp; &nbsp; <a href="https://bugzilla.gnome.org/show_bug.cgi?id=601574">Bug #601574 - ERROR: Current NTFS volume size is bigger than the device size!</a><br>
<br>
The critical patch that must be applied is:
<a href="http://git.debian.org/?p=parted/parted.git;a=commit;h=ad25892bb995f61b0ddf801ed1f74e0b1e7390ce">Patch for 'commit to os' for linux</a><br>
<br>
This problem has been fixed with GParted Live 0.4.8-6.<br>
</font></p>

<h3>GParted</h3>
Browse releases of GParted source code <a href="http://sourceforge.net/projects/gparted/files/gparted/">here</a><br>
<br>
<h3>GParted Live CD/USB/HD/PXE</h3>
<!--
<font color="red">///WARNING/// Due to a hardware/firmware bug, it's _NOT_ recommended to run GParted live on some types of HP Pavilion machines. This is not the fault of GParted live. Otherwise your VGA card fan might be dead. For more info, please refer to <a href="http://bugzilla.gnome.org/show_bug.cgi?id=579000" target=_blank>this bug report</a>.</font><br>
-->
<br>
Browse <b>Stable</b> releases of GParted Live
 <a href="http://sourceforge.net/projects/gparted/files/gparted-live-stable/">here</a> (<a href="http://free.nchc.org.tw/gparted-live/stable/CHECKSUMS.TXT" target=_blank>checksums info</a>).<br>
Browse latest <b>Testing</b> releases GParted Live
 <a href="http://sourceforge.net/projects/gparted/files/gparted-live-testing/">here</a> (<a href="http://free.nchc.org.tw/gparted-live/testing/CHECKSUMS.TXT" target=_blank>checksums info</a>).<br>
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
<a href="http://www.linuxdiscs.com/index.php?searchStr=gparted&amp;act=viewCat">LinuxDiscs.com</a>
<br>
</div>

<? gnome_foot() ?>

</div>
</body>
</html>
