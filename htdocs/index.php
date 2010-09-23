<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

<head>
  <title>GParted -- Welcome</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="rightbox">
	<b>Latest release:</b><br>
	<a href="http://sourceforge.net/projects/gparted/files/gparted/gparted-0.6.3/">GParted 0.6.3</a><br>
	<a href="http://sourceforge.net/projects/gparted/files/gparted-live-stable/0.6.2-2/">Live 0.6.2-2</a>
	</div>
<div class="content">

<h1>Gnome Partition Editor</h1>
<p>
The GParted application is a graphical partition editor for creating,
reorganizing, and deleting disk partitions.<br>
<br>
A disk device can be subdivided into one or more partitions. The
GParted application enables you to change the partition organization
on a disk device while preserving the contents of the partitions.<br>
<br>
GParted uses
<a href="http://www.gnu.org/software/parted/" target="new">GNU libparted</a>
to detect and manipulate devices and partition tables.
Several optional file system tools provide support for file systems
not included in libparted.
</p>
<h2>Features</h2>
<ul>
  <li>Create partition tables (e.g., msdos, gpt)</li>

  <li>Enable and disable partition flags (e.g., boot, hidden)</li>

  <li>Perform actions with partitions such as:
    <ul>
      <li>create or delete</li>
      <li>resize or move (while preserving data)</li>
      <li>check</li>
      <li>label</li>
      <li>copy and paste</li>
    </ul>
  </li>

  <li>Manipulate file systems such as:
    <ul>
      <li>ext2 / ext3 / ext4</li>
      <li>fat16 / fat32</li>
      <li>hfs / hfs+</li>
      <li>linux-swap</li>
      <li>ntfs</li>
      <li>reiserfs / reiser4</li>
      <li>ufs</li>
      <li>xfs</li>
    </ul>
  For specific actions supported see
  detailed <a href="features.php">features</a>.
  </li>

  <li>Align partitions to mebibyte (MiB) or cylinder boundaries</li>

  <li>Supports hardware RAID, motherboard BIOS RAID, and Linux
  software RAID.</li>

  <li>Supports all sector sizes (e.g., 512, 1024, 2048, 4096 byte sectors)</li>
</ul>
<h2>Requirements</h2>
<p>
GParted is developed on x86 based computers using GNU/Linux.  It can
be used on other operating systems, such as Windows or Mac OS X, by
booting from media containing <a href="livecd.php">GParted
Live</a>.
</p>
<h2>Mission Statement</h2>
<p>
The purpose of GParted is to provide an easy way to graphically manage
disk device partitions, without unintended loss of data, through the
use of <a href="http://www.gnu.org/software/parted/">GNU libparted</a>
and other <a href="http://en.wikipedia.org/wiki/Free_software">free
software</a> file system tools.
</p>
<h2>Free Software</h2>
<p>
GParted is <a href="http://en.wikipedia.org/wiki/Free_software">free
software</a>.<br>
You have the freedom to run, copy, distribute, study, change, and
improve GParted.<br>
You do not have to pay money to use GParted.<br>
GParted is distributed under the
<a href="http://www.gnu.org/licenses/gpl.html" target=new>GNU General Public License</a> version 2 or (at your option) any later version.
</p>

</div>
<? gnome_foot() ?>

</div>
</body>
</html>
