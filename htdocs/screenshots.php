<?
include "functions.php";
webpage_init();
?>
<html>

<head>
  <title>GParted -- Screenshots</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="content">
<h1>Screenshots</h1>

<p>
Following are several screen captures of various aspects of the
GParted application.  At the bottom of the page is a screen shot of
the <a href="#gparted-live-boot-menu">GParted Live boot menu</a>.
<br>
<br>
GParted main window displaying disk device partitions.
<br>
<a href="screens/gparted-main-window.png">
  <img src="screens/gparted-main-window.png" width="400px"
       alt="GParted main window displaying disk device partitions">
</a>
<br><br><br>

Main screen with disk information panel.
<br>
<a href="screens/gparted_4_big.png" >
	<img src="screens/gparted_4_small.png" alt="Disk information"></a>
<br><br><br>

Another look at the main window.
<br>
<a href="screens/gparted_7_big.png" >
	<img src="screens/gparted_7_small.png" alt="Drop down menu"></a>
<br><br><br>

<?
  include "google/ssp-468x60-under-title.inc";
?>
<br><br><br>

Information about a specific partition.
<br>
<a href="screens/gparted-partition-information.png">
  <img src="screens/gparted-partition-information.png" width="400px"
       alt="GParted Partion information window displaying ntfs partition">
</a>
<br><br><br>

A closer look at the resize/move dialog.
<br>
<a href="screens/gparted_5_big.png" >
	<img src="screens/gparted_5_small.png" alt="Resize / move"></a>
<br><br><br>

The progress dialog.
<br>
<a href="screens/gparted_2_big.png" >
	<img src="screens/gparted_2_small.png" alt="Progress"></a>
<br><br>
<a href="screens/gparted_9_big.png" >
	<img src="screens/gparted_9_small.png" alt="Progress details"></a>
<br><br><br>

Create a new partition dialog.
<br>
<a href="screens/gparted_6_big.png" >
	<img src="screens/gparted_6_small.png" alt="Create new partition"></a>
<br><br><br>

Create partition table dialog.
<br>
<a href="screens/gparted_8_big.png" >
	<img src="screens/gparted_8_small.png" alt="Create partition table"></a>
<br><br><br>

List of file system supported features.
<br>
<a href="screens/gparted-file-system-support.png">
  <img src="screens/gparted-file-system-support.png" width="400px"
       alt="GParted file system supported features">
</a>
<br><br><br>

Manage flags dialog.
<br>
<a href="screens/gparted_11.png" >
	<img src="screens/gparted_11.png" alt="Manage Flags"></a>
<br><br><br>

<a name="gparted-live-boot-menu"></a>
GParted Live boot menu.
<br>
<a href="screens/gparted-live-boot.jpg">
  <img src="screens/gparted-live-boot.jpg" width="400px"
       alt="GParted Live boot menu">
</a>
</p>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
