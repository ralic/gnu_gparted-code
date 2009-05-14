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
	<td>
		<b>File System</b>
	</td>
	<td>
		<b>Detect</b>
	</td>
	<td>
		<b>Read</b>
	</td>
	<td>
		<b>Create</b>
	</td>
	<td>
		<b>Grow</b>
	</td>
	<td>
		<b>Shrink</b>
	</td>
	<td>
		<b>Move</b>
	</td>
	<td>
		<b>Copy</b>
	</td>
	<td>
		<b>Check</b>
	</td>
	<td>
		<b>Label</b>
	</td>
	<td>
		<b>Required software</b>
	</td>
</tr>
<tr>
	<td>
		<b>btrfs</b>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		<br>
	</td>
</tr>
<tr>
	<td>
		<b>crypt-luks</b>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
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
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#copy">[1]</a>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
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
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#copy">[1]</a>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
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
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#blkid">[7]</a>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#copy">[1]</a>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
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
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#libparted">[4]</a>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#libparted">[4]</a>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#libparted">[4]</a>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#copy">[1]</a>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#mtools">[6]</a>
	</td>
	<td>
		<a href="ftp://ftp.uni-erlangen.de/pub/Linux/LOCAL/dosfstools" target=new>dosfstools</a>
	</td>
</tr>
<tr>
	<td>
		<b>fat32</b>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#libparted">[4]</a>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#libparted">[4]</a>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#libparted">[4]</a>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#copy">[1]</a>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#mtools">[6]</a>
	</td>
	<td>
		<a href="ftp://ftp.uni-erlangen.de/pub/Linux/LOCAL/dosfstools" target=new>dosfstools</a>
	</td>
</tr>
<tr>
	<td>
		<b>hfs</b>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#libparted">[4]</a>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#copy">[1]</a>
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
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
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#libparted">[4]</a>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#copy">[1]</a>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
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
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#grow">[2]</a>
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#copy">[1]</a>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
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
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#copy">[1]</a>
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td>
		mkswap (part of <a href="http://www.kernel.org/pub/linux/utils/util-linux" target=new>util-linux</a>)
	</td>
</tr>
<tr>
	<td>
		<b>lvm2 pv</b>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
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
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<a href="http://www.linux-ntfs.org" target=new>ntfsprogs</a>,
		xxd (part of vim-common), dd
	</td>
</tr>
<tr>
        <td>
                <b>reiser4</b>
        </td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
        <td align=CENTER>
                <img src="images/supported.png" alt="supported.png">
        </td>
        <td align=CENTER>
                <img src="images/not_supported.png" alt="not_supported.png">
        </td>
        <td align=CENTER>
                <img src="images/not_supported.png" alt="not_supported.png">
        </td>
        <td align=CENTER>
                <img src="images/supported.png" alt="supported.png">
        </td>
        <td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#copy">[1]</a>
        </td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
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
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#copy">[1]</a>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
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
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	</td>
	<td align=CENTER>
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
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#grow">[2]</a>
	</td>
	<td align=CENTER>
		<img src="images/not_supported.png" alt="not_supported.png">
	  	<a href="#shrink">[3]</a>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	  	<a href="#xfscopy">[5]</a>
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td align=CENTER>
		<img src="images/supported.png" alt="supported.png">
	</td>
	<td>
		<a href="http://oss.sgi.com/projects/xfs/" target=new>xfsprogs</a>
	</td>
</tr>
<tr>
	<td>
		<b>File System</b>
	</td>
	<td>
		<b>Detect</b>
	</td>
	<td>
		<b>Read</b>
	</td>
	<td>
		<b>Create</b>
	</td>
	<td>
		<b>Grow</b>
	</td>
	<td>
		<b>Shrink</b>
	</td>
	<td>
		<b>Move</b>
	</td>
	<td>
		<b>Copy</b>
	</td>
	<td>
		<b>Check</b>
	</td>
	<td>
		<b>Label</b>
	</td>
	<td>
		<b>Required software</b>
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
<br>
</div>

<? gnome_foot() ?>

</div>
</body>
</html>
