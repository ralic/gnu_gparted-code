<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

<head>
	<title>GParted -- Features</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="content">
<h1>Features</h1>

<div class="right">
  <?
    include "google/fp-336x280-rhs-near-top.inc";
  ?>
</div>

<p>
<b>GParted enables you to easily manage your disk partitions:</b>
</p>
<ul>
  <li class="step">Create partition tables, (e.g.,  msdos or gpt)</li>
  <li class="step">Create, move, copy, resize, check, label, set new UUID,
                   and delete partitions
  </li>
  <li class="step">Enable and disable partition flags, (e.g., boot or hidden)
  </li>
  <li class="step">Align partitions to mebibyte (MiB) or traditional cylinder
                   boundaries
  </li>
  <li class="step">Attempt data rescue from lost partitions</li>
</ul>

<p>
<b>GParted works with the following storage devices:</b>
</p>
<ul>
  <li class="step">Hard disk drives (e.g., SATA, IDE, and SCSI)</li>
  <li class="step">Flash memory devices, such as USB memory sticks and Solid
                   State Drives (SSD's)
  </li>
  <li class="step">RAID Devices (hardware RAID, motherboard BIOS RAID,
                   and Linux software RAID)
  </li>
  <li class="step">All sector sizes (e.g., devices with 512, 1024, 2048,
                   4096 byte sectors and more)
  </li>
</ul>

<p>
<b>GParted supports the following actions on file systems:</b>
</p>
<table border=1>
<tr>
	<th style="text-align: center;">
		<b>File system</b>
	</th>
	<th>
		<b>Detect</b>
	</th>
	<th>
		<b>Read</b>
	</th>
	<th>
		<b>Create</b>
	</th>
	<th>
		<b>Grow</b>
	</th>
	<th>
		<b>Shrink</b>
	</th>
	<th>
		<b>Move</b>
	</th>
	<th>
		<b>Copy</b>
	</th>
	<th>
		<b>Check</b>
	</th>
	<th>
		<b>Label</b>
	</th>
	<th>
		<b>UUID</b>
	</th>
	<th>
		<b>Required software</b>
	</th>
</tr>
<tr>
	<th>
		<b>btrfs</b>
	</th>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#grow">[2]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#grow">[2]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#btrfs">[10]</a></sup>
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<a href="https://btrfs.wiki.kernel.org" target=new>btrfs-tools</a>
	</td>
</tr>
<tr style="background-color: #dddddd;">
	<th>
		<b>crypt-luks</b>
	</th>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<br>
	</td>
</tr>
<tr>
	<th>
		<b>exfat</b>
	</th>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#blkid2">[9]</a></sup>
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<br>
	</td>
</tr>
<tr style="background-color: #dddddd;">
	<th>
		<b>ext2</b>
	</th>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<a href="http://e2fsprogs.sourceforge.net" target=new>e2fsprogs</a>
	</td>
</tr>
<tr>
	<th>
		<b>ext3</b>
	</th>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<a href="http://e2fsprogs.sourceforge.net" target=new>e2fsprogs</a>
	</td>
</tr>
<tr style="background-color: #dddddd;">
	<th>
		<b>ext4</b>
	</th>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#blkid">[7]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<a href="http://e2fsprogs.sourceforge.net" target=new>e2fsprogs</a> v1.41+
	</td>
</tr>
<tr>
	<th>
		<b>f2fs</b>
	</th>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#blkid3">[14]</a></sup>
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<a href="http://sourceforge.net/projects/f2fs-tools/" target=new>f2fs-tools</a>
	</td>
</tr>
<tr style="background-color: #dddddd;">
	<th>
		<b>fat16</b>
	</th>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#libparted">[4]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#libparted">[4]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#libpartedmove">[13]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#mtools">[6]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#mtools">[6]</a></sup>
	</td>
	<td>
		<a href="http://www.daniel-baumann.ch/software/dosfstools/" target=new>dosfstools</a>
	</td>
</tr>
<tr>
	<th>
		<b>fat32</b>
	</th>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#libparted">[4]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#libparted">[4]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#libpartedmove">[13]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#mtools">[6]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#mtools">[6]</a></sup>
	</td>
	<td>
		<a href="http://www.daniel-baumann.ch/software/dosfstools/" target=new>dosfstools</a>
	</td>
</tr>
<tr style="background-color: #dddddd;">
	<th>
		<b>hfs</b>
	</th>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#libparted">[4]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<a href="http://www.mars.org/home/rob/proj/hfs/" target=new>hfsutils</a>
	</td>
</tr>
<tr>
	<th>
		<b>hfs+</b>
	</th>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#libparted">[4]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<a href="http://packages.debian.org/sid/hfsprogs" target=new>hfsprogs</a>
	</td>
</tr>
<tr style="background-color: #dddddd;">
	<th>
		<b>jfs</b>
	</th>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#grow">[2]</a></sup>
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<a href="http://jfs.sourceforge.net/" target=new>jfsutils</a>
	</td>
</tr>
<tr>
	<th>
		<b>linux-swap</b>
	</th>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#swaplabel">[8]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#swaplabel">[8]</a></sup>
	</td>
	<td>
		<a href="http://en.wikipedia.org/wiki/Util-linux" target=new>util-linux</a>
	</td>
</tr>
<tr style="background-color: #dddddd;">
	<th>
		<b>lvm2 pv</b>
	</th>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<a href="http://sourceware.org/lvm2/" target=new>lvm2</a>
	</td>
</tr>
<tr>
	<th>
		<b>nilfs2</b>
	</th>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#blkid3">[12]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#grow">[2]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#grow">[2]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<a href="http://www.nilfs.org/" target=new>nilfs-utils</a>
	</td>
</tr>
<tr style="background-color: #dddddd;">
	<th>
		<b>ntfs</b>
	</th>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#ntfscopy">[1]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#ntfsuuid">[11]</a></sup>
	</td>
	<td>
		<a href="http://www.tuxera.com/community/ntfs-3g-download/" target=new>ntfs-3g</a> / 
		<a href="http://sourceforge.net/projects/linux-ntfs" target=new>ntfsprogs</a>
	</td>
</tr>
<tr>
        <th>
                <b>reiser4</b>
        </th>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
        <td>
                <img src="images/supported.png" alt="supported">
        </td>
        <td>
                <img src="images/not_supported.png" alt="not supported">
        </td>
        <td>
                <img src="images/not_supported.png" alt="not supported">
        </td>
        <td>
                <img src="images/supported.png" alt="supported">
        </td>
        <td>
		<img src="images/supported.png" alt="supported">
        </td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
        <td>
                <a href="https://reiser4.wiki.kernel.org/" target=new>reiser4progs</a>
        </td>
</tr>
<tr style="background-color: #dddddd;">
	<th>
		<b>reiserfs</b>
	</th>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<a href="https://reiser4.wiki.kernel.org/" target=new>reiserfsprogs</a>
	</td>
</tr>
<tr>
	<th>
		<b>ufs</b>
	</th>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
	</td>
	<td>
		<br>
	</td>
</tr>
<tr style="background-color: #dddddd;">
	<th>
		<b>xfs</b>
	</th>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#grow">[2]</a></sup>
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported">
		<sup><a href="#shrink">[3]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
		<sup><a href="#xfscopy">[5]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<img src="images/supported.png" alt="supported">
	</td>
	<td>
		<a href="http://oss.sgi.com/projects/xfs/" target=new>xfsprogs</a>, xfsdump
	</td>
</tr>
</table>
<br>
<a name="ntfscopy">[1]</a> Copy performed using ntfsclone command.<br>
<a name="grow">[2]</a> You need kernel support for this file system if you want to grow it (or shrink if shrink is supported).<br>
<a name="shrink">[3]</a> Although it's not possible to shrink an xfs file system directly, you can shrink it using GParted's copy functionality.<br>
<a name="libparted">[4]</a> Native available through libparted (versions < 3.0 or versions > 3.0).  For example libparted-3.1.<br>
<a name="xfscopy">[5]</a> Copy performed using xfsdump and xfsrestore.<br>
<a name="mtools">[6]</a> Requires <a href="http://mtools.linux.lu/" target=new>mtools</a> to read and write labels and UUIDs.<br>
<a name="blkid">[7]</a> The blkid command from e2fsprogs v1.41+ is required for ext4 detection.<br>
<a name="swaplabel">[8]</a> The swaplabel command from util-linux v2.18+ is required to write labels and UUIDs on linux-swap.<br>
<a name="blkid2">[9]</a> The blkid command from util-linux v2.18+ is required for exfat detection.<br>
<a name="btrfs">[10]</a> Requires btrfs-tools version released after Oct. 25, 2011 to write labels.<br>
<a name="ntfsuuid">[11]</a> Requires <a href="http://www.tuxera.com/community/ntfs-3g-advanced/">ntfs-3g advanced</a> release version >= 2012.1.15AR to change UUID.  The <a href="http://www.tuxera.com/community/ntfs-3g-download/">ntfs-3g stable</a> version 2012.1.15 does not yet support changing NTFS UUID.<br>
<a name="blkid3">[12]</a> The blkid command from util-linux v2.20+ or libparted 2.4+ is required for nilfs2 detection.<br>
<a name="libpartedmove">[13]</a> Native available through libparted < 3.0.  Move performed internally by GParted for libparted >= 3.0.<br>
<a name="blkid3">[14]</a> The blkid command from util-linux v2.23+ is required for f2fs detection.<br>
<br>
</div>

<? gnome_foot() ?>

</div>
</body>
</html>
