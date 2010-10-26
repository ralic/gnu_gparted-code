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
//meter();
gnome_head();
gnome_menu();
?>
<div class="content">
<h1>Features</h1>
<p>
<b>The following actions and file systems are supported by GParted.</b><br>
</p>
<table border=1>
<tr>
	<th>
		<b>File System</b>
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
	<td>
		<b>btrfs</b>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#copy">[1]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<a href="https://btrfs.wiki.kernel.org/index.php/Main_Page" target=new>btrfs-tools</a>
	</td>
</tr>
<tr>
	<td>
		<b>crypt-luks</b>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<br>
	</td>
</tr>
<tr>
	<td>
		<b>ext2</b>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#copy">[1]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<a href="http://e2fsprogs.sourceforge.net" target=new>e2fsprogs</a>
	</td>
</tr>
<tr>
	<td>
		<b>ext3</b>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#copy">[1]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<a href="http://e2fsprogs.sourceforge.net" target=new>e2fsprogs</a>
	</td>
</tr>
<tr>
	<td>
		<b>ext4</b>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#blkid">[7]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#copy">[1]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<a href="http://e2fsprogs.sourceforge.net" target=new>e2fsprogs</a> v1.41+
	</td>
</tr>
<tr>
	<td>
		<b>fat16</b>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#libparted">[4]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#libparted">[4]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#libparted">[4]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#copy">[1]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#mtools">[6]</a></sup>
	</td>
	<td>
		<a href="ftp://ftp.uni-erlangen.de/pub/Linux/LOCAL/dosfstools" target=new>dosfstools</a>
	</td>
</tr>
<tr>
	<td>
		<b>fat32</b>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#libparted">[4]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#libparted">[4]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#libparted">[4]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#copy">[1]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#mtools">[6]</a></sup>
	</td>
	<td>
		<a href="ftp://ftp.uni-erlangen.de/pub/Linux/LOCAL/dosfstools" target=new>dosfstools</a>
	</td>
</tr>
<tr>
	<td>
		<b>hfs</b>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#libparted">[4]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#copy">[1]</a></sup>
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<a href="http://www.mars.org/home/rob/proj/hfs/" target=new>hfsutils</a>
	</td>
</tr>
<tr>
	<td>
		<b>hfs+</b>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#libparted">[4]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#copy">[1]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<a href="http://packages.debian.org/search?keywords=hfsprogs" target=new>hfsprogs</a>
	</td>
</tr>
<tr>
	<td>
		<b>jfs</b>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#grow">[2]</a></sup>
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#copy">[1]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<a href="http://www-124.ibm.com/developerworks/oss/jfs/index.html" target=new>jfsutils</a>
	</td>
</tr>
<tr>
	<td>
		<b>linux-swap</b>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#copy">[1]</a></sup>
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#swaplabel">[8]</a></sup>
	</td>
	<td>
		<a href="http://www.kernel.org/pub/linux/utils/util-linux-ng/" target=new>util-linux-ng</a>
		or <a href="http://www.kernel.org/pub/linux/utils/util-linux/" target=new>util-linux</a>
	</td>
</tr>
<tr>
	<td>
		<b>lvm2 pv</b>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<br>
	</td>
</tr>
<tr>
	<td>
		<b>ntfs</b>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<a href="http://www.linux-ntfs.org" target=new>ntfsprogs</a>
	</td>
</tr>
<tr>
        <td>
                <b>reiser4</b>
        </td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
        <td>
                <img src="images/supported.png" alt="supported.png">
        </td>
        <td>
                <img src="images/not_supported.png" alt="not_supported.png">
        </td>
        <td>
                <img src="images/not_supported.png" alt="not_supported.png">
        </td>
        <td>
                <img src="images/supported.png" alt="supported.png">
        </td>
        <td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#copy">[1]</a></sup>
        </td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
        <td>
                <a href="http://www.namesys.com/v4/v4.html" target=new>reiser4progs</a>
        </td>
</tr>
<tr>
	<td>
		<b>reiserfs</b>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#copy">[1]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<a href="http://www.namesys.com" target=new>reiserfsprogs</a>
	</td>
</tr>
<tr>
	<td>
		<b>ufs</b>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<br>
	</td>
</tr>
<tr>
	<td>
		<b>xfs</b>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#grow">[2]</a></sup>
	</td>
	<td>
		<img src="images/not_supported.png" alt="not_supported.png">
		<sup><a href="#shrink">[3]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
		<sup><a href="#xfscopy">[5]</a></sup>
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<a href="http://oss.sgi.com/projects/xfs/" target=new>xfsprogs</a>
	</td>
</tr>
</table>
<br>
<a name="copy">[1]</a> The copy is performed by gparted (previously dd was used).<br>
<a name="grow">[2]</a> You need kernel support for this file system if you want to grow it (module needs to be loaded).<br>
<a name="shrink">[3]</a> Although it's not possible to shrink an xfs file system directly, you can shrink it using GParted's copy functionality.<br>
<a name="libparted">[4]</a> Native available through libparted.<br>
<a name="xfscopy">[5]</a> Copy performed using xfsdump and xfsrestore.<br>
<a name="mtools">[6]</a> Requires <a href="http://mtools.linux.lu/" target=new>mtools</a> to read and write labels.<br>
<a name="blkid">[7]</a> The blkid command from e2fsprogs v1.41+ is required for ext4 detection.<br>
<a name="swaplabel">[8]</a> The swaplabel command from util-linux-ng v2.18+ is required to label linux-swap.<br>
<br>
</div>

<? gnome_foot() ?>

</div>
</body>
</html>
