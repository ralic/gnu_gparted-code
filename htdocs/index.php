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
	<a href="http://sourceforge.net/projects/gparted/files/gparted/gparted-0.5.0/">GParted 0.5.0</a><br>
	<a href="http://sourceforge.net/projects/gparted/files/gparted-live-stable/0.4.8-6/">Live 0.4.8-6</a>
	</div>
<div class="content">

<h1>Gnome Partition Editor</h1>
<p>
The GParted application is the GNOME partition editor for creating,
reorganizing, and deleting disk partitions.<br>
<br>
A disk device can be subdivided into one or more partitions. The
GParted application enables you to change the partition organization
on a disk device while preserving the contents of the partitions.<br>
<br>
With GParted you can accomplish the following tasks:<br>
</p>
<ul>
  <li>Create a partition table on a disk device.</li>
  <li>Enable and disable partition flags such as boot and hidden.</li>
  <li>Perform actions with partitions such as:<br>
    <ul>
      <li>create or delete</li>
      <li>resize or move</li>
      <li>check</li>
      <li>label</li>
      <li>copy and paste</li>
    </ul>
  </li>
</ul>
<p>
GParted uses
<a href="http://www.gnu.org/software/parted/" target="new">GNU libparted</a>
to detect and manipulate devices and partition tables.
Several optional file system tools provide support for file systems
not included in libparted.<br>
<br>
GParted is developed on GNU/Linux.
It can be used on other operating systems, such as Windows, by booting
from media containing <a href="livecd.php">GParted Live</a>.<br>
<br>
GParted is free and open source software available under the terms of the
<a href="http://www.gnu.org/licenses/gpl.html" target=new>GNU General Public License</a>
</p>

</div>
<? gnome_foot() ?>

</div>
</body>
</html>
