<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

<head>
  <title>GParted Live on USB</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="content">
<H1>GParted Live on USB</H1>
<p>
  First, <a href="download.php">download</a> GParted live zip file.<br>
  After the zip file is downloaded, you can make it bootable in a MS
  Windows or GNU/Linux computer by the following steps (This method only
  works for the file system in USB flash drive is FAT format. For other
  file system, you can try to use grub or other bootloader):
</p>
<ul>
  <li>Extract files and make USB flash drive bootable under MS windows
    <ul>

      <li>Choice 1 (Use GUI program in MS windows):<br>
	<ul>
	  <li>Download <a href="https://sourceforge.net/project/showfiles.php?group_id=241180" target=_blank>Live USB Helper</a> to help you to create this Live USB flash drive. Just install the program in MS windows, then you can follow the GUI to create the live. <font color=red>PS.</font> To run Live USB helper program on MS windows, you need a dll file "vb6stkit.dll". If Live USB helper complains about no vb6stkit.dll was found, you can download it on <a href="http://www.dll-files.com" target="_blank">http://www.dll-files.com</a> and read the <a href="http://www.dll-files.com/support/faq.shtml" target=_blank>FAQ</a> to install it.
	  </li>
	</ul>
      </li>

      <li>Choice 2 (Manually):<br>
	<ul>
	  <li>
            (PS: The following description is modified from:
            http://www.pendrivelinux.com/2007/01/02/all-in-one-usb-dsl.
            Thanks to PDLA from http://pendrivelinux.com)<br>
	    <font color="red">
	      *****************************<br>
	      WARNING!  WARNING!  WARNING!<br>
	      *****************************<br>
	      WARNING!: ***DO NOT RUN*** makeboot.bat from your local
	      hard drive!  It should only be run from your USB flash
	      drive. Executing it incorrectly could cause your MS
	      windows not to boot!!!<br>
	    </font>
	    
	    <ol>
	      <li>Download the <a href="http://h50178.www5.hp.com/local_drivers/17550/SP27608.exe">HP-USB Format tool</a> and format your flash drive using the Fat or Fat32 option. This program can be used to format USB devices that won't boot properly when formatted with MS windows format tool.
	      <li>Extract all the contents of the zip file to your "flash drive." Keep the directory architecture, for example, file "COPYING" should be in the USB flash drive's top directory (e.g. G:\COPYING).
	      <li>Browse to your "flash drive" and click the makeboot.bat. <font color="red">WARNING! Makeboot.bat must be run from your USB flash drive. Executing it incorrectly could cause your MS windows not to boot.</font>
	      <li>Follow the on-screen instructions.
	    </ol>
	  </li>
	</ul>
      </li>
    </ul>
  </li>
  
  <li>Extract files and make USB flash drive bootable under GNU/Linux<br>
    <ol>
      <li>Insert your USB flash drive into the USB port on your Linux machine and wait a few seconds. Next, run the command "dmesg" to query the device name of the USB flash drive. Let's say, for example, that you find it is /dev/sdb1. In this example, we assume /dev/sdb1 has FAT filesystem.
      <li>Unzip all the files, and copy them into your USB flash drive. Keep the directory architecture, for example, file "COPYING" should be in the USB flash drive's top directory (e.g. /media/usb/COPYING).
      <li><font color="red">Make sure syslinux 3.71 or later is available on your GNU/Linux system</font>. If not, download it <a href="http://www.kernel.org/pub/linux/utils/boot/syslinux/" target=_blank>here</a>. Normally you do not have to compile it on GNU/Linux, just untar it (e.g. run "tar xvzf syslinux-3.71.tar.gz") and a binary executable file called "syslinux" under dir linux is available. If you use version earlier than 3.71 to do the following command, the created USB flash drive won't be able to boot correctly. You can run something like: "PATH_TO/syslinux -s /dev/sdb1" (Replace PATH_TO with your syslinux program PATH if it's not in system PATH) to make your USB flash drive bootable. <font color="red">WARNING! Executing it incorrectly could cause your GNU/Linux not to boot. Confirm the command before you run it.</font>
      <li>Some of USB flash drive does not contain any booting program in the MBR. If so, it won't be able to boot. You can run "cat /usr/lib/syslinux/mbr.bin > /dev/sdb" (/usr/lib/syslinux/mbr.bin comes with package syslinux). The path of the mbr.bin depends on the GNU/Linux distributions.  <font color="red">WARNING! Executing it incorrectly could cause your GNU/Linux not to boot. Confirm the command before you run it.</font>
      <li>If your USB flash drive is not able to boot, check (1) Is there any partition in your flash drive ? It must contain 1 partition at least. (2) The partition must be marked as "bootable" in the partition table. (3) The partition must be on the cylinder boundary.
    </ol>
  </li>
</ul>
</div>

<? gnome_foot() ?>

</div>
</body>
</html>
