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
gnome_head();
gnome_menu();
?>
<div class="content">
<h1>Downloads</h1>

<div class="right">
  <?
    include "google/dp-160x600-rhs-near-top.inc";
  ?>
</div>

<p>
GParted is a free partition manager that enables you to resize, copy,
and move partitions without data loss.<br>
<br>
The bootable image is called GParted Live and enables all
the <a href="features.php">features</a> of the GParted application.
GParted Live can be used on GNU/Linux as well as other operating
systems, such as Windows or Mac OS X.
</p>

<table border=0><tr><td>
<div class="caution">
<p class="hangcaution">
<b>CAUTION</b>: &nbsp; 
Editing partitions has the potential to cause <b><u>LOSS of DATA</u></b>.<br>
You are advised to <b><u>BACKUP your DATA</u></b> before using gparted.<br>
</p>
</div>
</td></tr></table>

<h2>Download Links</h2>

<p>
<a href="donations.php"><img src="images/btn_donate_LG.gif" border="0" alt="Donate to GParted" style="float: left; padding-right: 20px;"></a>
If you use GParted and it helps you with your task, then please consider making
a donation to help us make GParted better.<br>
</p>

<table border="1px" cellpadding="5px">
  <tr>
    <th colspan="4">
      GParted Live CD/USB/HD/PXE Bootable Image
    </th>
  </tr>

  <tr>
    <td>
      <a href="http://sourceforge.net/projects/gparted/files/gparted-live-stable/">Download <b>stable</b> releases<br>(.iso/.zip)</a>
    </td>
    <td>
      <a href="http://free.nchc.org.tw/gparted-live/stable/RELEASE-NOTES-GParted-live.txt" target=_blank>Release<br>notes</a>
    </td>
    <td>
      <a href="http://free.nchc.org.tw/gparted-live/stable/ChangeLog-GParted-live.txt" target=_blank>Changelog</a>
    </td>
    <td>
      <a href="http://free.nchc.org.tw/gparted-live/stable/CHECKSUMS.TXT" target=_blank>Checksums</a>
    </td>
  </tr>

  <tr>
    <td>
      <a href="http://sourceforge.net/projects/gparted/files/gparted-live-testing/">Download <b>testing</b> releases<br>(.iso/.zip)</a>
    </td>
    <td>
      <a href="http://free.nchc.org.tw/gparted-live/testing/RELEASE-NOTES-GParted-live.txt" target=_blank>Release<br>notes</a>
    </td>
    <td>
      <a href="http://free.nchc.org.tw/gparted-live/testing/ChangeLog-GParted-live.txt" target=_blank>Changelog</a>
    </td>
    <td>
      <a href="http://free.nchc.org.tw/gparted-live/testing/CHECKSUMS.TXT" target=_blank>Checksums</a>
    </td>
  </tr>
</table>

<br>

<table border="1px" cellpadding="5px">
  <tr>
    <th colspan="2">
      GParted Application Source Code
    </th>
  </tr>
  <tr>
    <td>
      <a href="http://sourceforge.net/projects/gparted/files/gparted/">Download source code (.tar.bz2)</a>
    </td>
    <td>
      Release notes and checksums in same directory.<br>
      See gparted-<i>x.y.z</i>-notes.txt
    </td>
  </tr>
</table>

<br>

<table border="1px" cellpadding="5px">
  <tr>
    <th>
      Old GParted Live Images (not recommended)
    </th>
  </tr>
  <tr>
    <td>
      <a href="http://sourceforge.net/projects/gparted/files/old-gparted-livecd/">Download old LiveCD (0.0.9-alpha1 to 0.3.4-11) releases</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="http://sourceforge.net/projects/gparted/files/old-gparted-liveusb/">Download old LiveUSB (0.2.5-2 to 0.3.1-1) releases</a>
    </td>
  </tr>
</table>


<br>

<table border=0><tr><td>
<div class="tip">
<p class="hangtip">
<b>TIP</b>: &nbsp; Experiencing messages such as<br>
<i>"ERROR: Current NTFS volume size is bigger than the device size!"</i>?<br>
See
<a href="http://gparted-forum.surf4.info/viewtopic.php?id=13777">Problems Resizing File Systems with GParted</a>.<br>
</p>
</div>
</td></tr></table>

<br>

<table border=0><tr><td>
<div class="tip">
<p class="hangtip">
<b>TIP</b>: &nbsp; Problems booting GParted Live image?
See <a href="http://gparted-forum.surf4.info/viewtopic.php?id=14377">Tips on Booting GParted Live</a>.<br>
</p>
</div>
</td></tr></table>

<h2>Order a Disk</h2>
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
