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
  <li>Create partition tables, (e.g.,  msdos or gpt)</li>
  <li>Create, move, copy, resize, check, label, and delete partitions</li>
  <li>Enable and disable partition flags, (e.g., boot or hidden)</li>
  <li>Align partitions to mebibyte (MiB) or traditional cylinder boundaries</li>
  <li>Attempt data rescue from lost partitions</li>
</ul>

<p>
<b>GParted works with the following storage devices:</b>
</p>
<ul>
  <li>Hard disk drives (e.g., SATA, IDE, and SCSI)</li>
  <li>Flash memory devices, such as USB memory sticks and Solid State Drives
      (SSD's)
  </li>
  <li>RAID Devices (hardware RAID, motherboard BIOS RAID,
      and Linux software RAID)
  </li>
  <li>All sector sizes (e.g., devices with 512, 1024, 2048, 4096 byte
      sectors and more)
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
		<a href="https://btrfs.wiki.kernel.org/index.php/Main_Page" target=new>btrfs-tools</a>
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
		<a href="http://e2fsprogs.sourceforge.net" target=new>e2fsprogs</a> v1.41+
	</td>
</tr>
<tr>
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
		<sup><a href="#mtools">[6]</a></sup>
	</td>
	<td>
		<a href="ftp://ftp.uni-erlangen.de/pub/Linux/LOCAL/dosfstools" target=new>dosfstools</a>
	</td>
</tr>
<tr style="background-color: #dddddd;">
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
		<sup><a href="#mtools">[6]</a></sup>
	</td>
	<td>
		<a href="ftp://ftp.uni-erlangen.de/pub/Linux/LOCAL/dosfstools" target=new>dosfstools</a>
	</td>
</tr>
<tr>
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
		<a href="http://www.mars.org/home/rob/proj/hfs/" target=new>hfsutils</a>
	</td>
</tr>
<tr style="background-color: #dddddd;">
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
		<a href="http://packages.debian.org/search?keywords=hfsprogs" target=new>hfsprogs</a>
	</td>
</tr>
<tr>
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
		<a href="http://www-124.ibm.com/developerworks/oss/jfs/index.html" target=new>jfsutils</a>
	</td>
</tr>
<tr style="background-color: #dddddd;">
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
		<a href="http://www.kernel.org/pub/linux/utils/util-linux/" target=new>util-linux</a>
	</td>
</tr>
<tr>
	<th>
		<b>lvm2 pv</b>
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
		<br>
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
                <a href="http://www.namesys.com/v4/v4.html" target=new>reiser4progs</a>
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
		<a href="http://www.namesys.com" target=new>reiserfsprogs</a>
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
		<a href="http://oss.sgi.com/projects/xfs/" target=new>xfsprogs</a>
	</td>
</tr>
</table>
<br>
<a name="ntfscopy">[1]</a> Copy performed using ntfsclone command.<br>
<a name="grow">[2]</a> You need kernel support for this file system if you want to grow it (module needs to be loaded).<br>
<a name="shrink">[3]</a> Although it's not possible to shrink an xfs file system directly, you can shrink it using GParted's copy functionality.<br>
<a name="libparted">[4]</a> Native available through libparted (versions < 3.0).  For example libparted-2.4.<br>
<a name="xfscopy">[5]</a> Copy performed using xfsdump and xfsrestore.<br>
<a name="mtools">[6]</a> Requires <a href="http://mtools.linux.lu/" target=new>mtools</a> to read and write labels.<br>
<a name="blkid">[7]</a> The blkid command from e2fsprogs v1.41+ is required for ext4 detection.<br>
<a name="swaplabel">[8]</a> The swaplabel command from util-linux v2.18+ is required to label linux-swap.<br>
<a name="blkid2">[9]</a> The blkid command from util-linux v2.18+ is required for exfat detection.<br>
<br>
</div>

<? gnome_foot() ?>

</div>
</body>
</html>
