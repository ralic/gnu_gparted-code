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
	<a href="http://sourceforge.net/project/showfiles.php?group_id=115843&amp;package_id=125754">GParted 0.4.5</a><br>
	<a href="http://sourceforge.net/project/showfiles.php?group_id=115843&amp;package_id=271779">Live 0.4.4-1</a>
	</div>
<div class="content">

<h1>Gnome Partition Editor</h1>
<p>
GParted is the Gnome Partition Editor application. Before attempting to
use it, here is some basic background information.<br>
<br>
A hard disk is usually subdivided into one or more
partitions. These partitions are normally not
re-sizable (making one smaller and the adjacent one larger).  The purpose
of GParted is to allow the individual to take a hard disk and change the
partition organization therein, while preserving the partition
contents.<br>
<br>
GParted is an industrial-strength package for creating, destroying,
resizing, moving, checking and copying partitions, and the file systems on them.
This is useful for creating space for new operating systems,
reorganizing disk usage, copying data residing on hard disks and
mirroring one partition with another (disk imaging).<br>
<br>
GParted uses <a href="http://www.gnu.org/software/parted/" target="new">GNU libparted</a> to detect and manipulate devices and partition tables.<br>
<br>
Several (optional) file system tools provide support for file systems
not included in libparted.<br>
These optional packages will be detected at runtime and do not require a
rebuild of GParted.<br>
<br>
GParted is written in C++ and uses <a href="http://gtkmm.org/" target="new">gtkmm</a> for its Graphical User Interface (GUI). The general approach is to keep the Graphical User Interface as simple
as possible. Every attempt was made to conform to the <a href="http://library.gnome.org/devel/hig-book/stable/" target="new">GNOME Human Interface Guidelines</a>.<br>
<br>
GParted comes under the terms of the <a href="http://www.gnu.org/licenses/gpl.html" target=new>General Public License</a>
</p>

</div>
<? gnome_foot() ?>

</div>
</body>
</html>
