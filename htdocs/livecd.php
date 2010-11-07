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

<div class="right">
  <?
    include "google/lcdp-160x600-rhs-near-top.inc";
  ?>
</div>

<p>
<b>GParted Live</b> is a small bootable GNU/Linux distribution for x86
based computers.<br>
It enables you to use all the features of the latest versions of the
GParted application.<br>
<br>
GParted Live can be installed on CD, USB, PXE server, and Hard Disk
then run on an x86 machine.<br>
</p>

<table border=0><tr><td>
<div class="caution">
<p class="hangcaution">
<b>CAUTION</b>:&nbsp;
Creating a a whole disk or partition image backup is recommended
before you resize or move a partition.  Some free software (GPL) disk
and partition image tools are available:<br>
<br>
<a href="http://clonezilla.org" target=_blank>Clonezilla</a>, &nbsp;
<a href="http://www.fsarchiver.org" target=_blank>FSArchiver</a>, &nbsp;
<a href="http://g4l.sourceforge.net" target=_blank>G4L</a>, &nbsp;
<a href="http://www.feyrer.de/g4u" target=_blank>g4u</a>, &nbsp;
<a href="http://partimage.org" target=_blank>Partimage</a>, &nbsp;
<a href="http://partclone.org" target=_blank>Partclone</a>.
</p>

</div>
</td></tr></table>

<h2>Installation Instructions</h2>
<p>
To install GParted Live on CD, <a href="download.php">download</a> the
.iso file and burn it as an image to a CD.<br>
<br>
For other installations, please refer to the following documents:<br>
<a href="liveusb.php">GParted Live on USB</a><br>
<a href="livepxe.php">GParted Live on PXE server</a><br>
<a href="livehd.php">GParted Live on Hard Disk</a><br>
<a href="create-gparted-live.php">Create your own custom GParted Live
from scratch</a><br>
</p>
<h2>Accounts in GParted live</h2>
<p>
GParted live is based on <a href="http://live.debian.net/" target=_blank>Debian live</a>, and the default account is "user", with password "live". There is no root password, so if you need root privileges, login as "user", then run "sudo" to get root priviliges. 
</p>

<h2>Available boot parameters</h2>
<p>
You can find the available boot parameters for GParted live <a href="./gparted-live-boot-param.php">here</a>.

<h2>Included Packages</h2>
<p>
GParted Live includes additional packages, such as:<br>
</p>
<table border=0>
  <tr>
    <td><a href="http://mlterm.sourceforge.net/">mlterm</a></td>
    <td>- Multilingual terminal emulator (provides access to command line)</td>
  </tr>
  <tr>
    <td><a href="http://www.partimage.org/">partimage</a></td>
    <td>- Backup partitions into a compressed image file<br></td>
  </tr>
  <tr>
    <td><a href="http://www.cgsecurity.org/wiki/TestDisk">testdisk</a></td>
    <td>- Data recovery tool that can help recover lost partitions<br></td>
  </tr>
  <tr>
    <td><a href="http://en.wikipedia.org/wiki/Gpart">gpart</a></td>
    <td>- (Older) data recovery tool that can help recover lost msdos partition tables<br></td>
  </tr>
  <tr>
    <td><a href="http://www.nano-editor.org/">nano</a></td>
    <td>- Text editor</td>
  </tr>
  <tr>
    <td><a href="http://www.vim.org/">vim-tiny</a></td>
    <td>- Enhanced vi text editor</td>
  </tr>
  <tr>
    <td><a href="http://www.gnu.org/software/parted/">parted</a></td>
    <td>- Partition table editor (command line based)</td>
  </tr>
  <tr>
    <td><a href="http://userweb.kernel.org/~kzak/util-linux-ng/">fdisk</a></td>
    <td>- MSDOS partition table editor (command line based)</td>
  </tr>
  <tr>
    <td><a href="http://sourceforge.net/projects/gptfdisk/">gdisk</a></td>
    <td>- GPT partition table editor (command line based)</td>
  </tr>
</table>
<p>
To view all of the included packages you can either:<br>
 &nbsp; &nbsp; refer to the "packages-<i>x.y.z</i>-<i>w</i>.txt" file in the
 download directory,<br>
or<br>
 &nbsp; &nbsp; view the file "live/packages.txt" file inside the
 GParted Live iso file or zip file.<br>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
