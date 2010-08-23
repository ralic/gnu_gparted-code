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
  First, <a href="download.php">download</a> GParted live iso or zip file. GParted live iso file is required for Unetbootin method in the following. For other methods, GParted live zip file is required.<br>
  After the iso or zip file is downloaded, you can make it bootable <a href="#on_MS_windows">on a MS Windows</a> or <a href="#on_gnu_linux">on a GNU/Linux</a> computer by the following steps (This method only works for the file system in USB flash drive is FAT format. For other file system, you can try to use grub or other bootloader):
</p>
<ul>
  <li><a name="on_MS_windows"></a>Extract files and make USB flash drive bootable under MS windows
    <ul>
      <!--
      <li>Choice 1 (Use GUI program on MS windows):<br>
	<ul>
	  <li>Download <a href="https://sourceforge.net/projects/liveusbhelper/files/Live%20USB%20Helper/" target=_blank>Live USB Helper</a> to help you to create this Live USB flash drive. Just install the program on MS windows, then you can follow the GUI to create the live. You need the GParted live zip file for this method. <font color=red>PS.</font> To run Live USB helper program on MS windows, you need a dll file "vb6stkit.dll". If Live USB helper complains about no vb6stkit.dll was found, you can download it on <a href="http://www.dll-files.com" target="_blank">http://www.dll-files.com</a> and read the <a href="http://www.dll-files.com/support/faq.shtml" target=_blank>FAQ</a> to install it.
	  </li>
	</ul>
      </li>
      -->
      <li>Choice 1 (Manually):<br>
	<ul>
	  <li>
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
              <li>Create a partition on your flash drive as FAT16 or FAT32 if there is no any FAT16 or FAT32 partition on that. If there is, you can use the existing one.
	      <li>Extract all the contents of the zip file to FAT16/FAT32 partition on your "flash drive." Keep the directory architecture, for example, file "COPYING" should be in the USB flash drive's top directory (e.g. G:\COPYING).
	      <li>Browse to your "flash drive" and click the makeboot.bat in the dir utils\win32\. <font color="red">WARNING! Makeboot.bat must be run from your USB flash drive. Executing it incorrectly could cause your MS windows not to boot.</font>
	      <li>Follow the on-screen instructions.
            (PS: The above description is modified from:
            http://www.pendrivelinux.com/2007/01/02/all-in-one-usb-dsl.
            Thanks to PDLA from http://pendrivelinux.com)<br>
	    </ol>
	  </li>
	</ul>
      </li>

      <li>Choice 2 (A GUI program on MS windows):<br>
	<ul>
	  <li>Download <a href="http://unetbootin.sourceforge.net/" target=_blank>Unetbootin</a> to help you to create this Live USB flash drive. Just run the program on MS windows, then you can follow the GUI to create the live. You will need the GParted live iso file in this method. <font color=red>PS.</font> The boot menu created by Unetbootin is not exactly the same boot menu as the one created in choice 1. Therefore it's recommended to use the choice 1.
              <!--
              Therefore it's recommended to use the <a href="https://sourceforge.net/project/showfiles.php?group_id=241180" target=_blank>Live USB Helper</a> to create such a GParted live on USB flashd drive.
              -->
	</ul>
      </li>


    </ul>
  </li>
  
  <li><a name="on_gnu_linux"></a>Extract files and make USB flash drive bootable under GNU/Linux<br>
    <ul>
      <li>Choice 1 (Manually):<br>
    <ol>
       <li>Prepare an USB flash drive or USB hard drive or external disk which has a partition using FAT (either FAT16, FAT32) file system. If the USB flash drive or USB hard drive does not have any partition, you can use disk tool (e.g. gparted, fdisk, cfdisk or sfdisk) to create a partition with size 200 MB or more, Here we assume your USB flash drive or USB hard drive is /dev/sdd (<font color="red">You have to comfirm your the device name, since it's _NOT_ always /dev/sdd</font>) on your GNU/Linux, so the partition table is like:
       <pre>
       # fdisk -l /dev/sdd
       Disk /dev/sdd: 12.8 GB, 12884901888 bytes
       15 heads, 63 sectors/track, 26630 cylinders
       Units = cylinders of 945 * 512 = 483840 bytes
       Disk identifier: 0x000c2aa7
       
          Device Boot      Start         End      Blocks   Id  System
          /dev/sdd1   *           1       26630    12582643+   b  W95 FAT32
       </pre>
       Then format the partition as FAT (e.g. "mkfs.vfat -F 32 /dev/sdd1" <font color="red">WARNING! Executing it incorrectly could cause your GNU/Linux not to boot. Confirm the command before you run it.</font>).
       <pre>
       # mkfs.vfat -F 32 /dev/sdd1
       mkfs.vfat 2.11 (12 Mar 2005)
       </pre>
       <li>Insert your USB flash drive or USB hard drive into the USB port on your Linux machine and wait a few seconds. Next, run the command "dmesg" to query the device name of the USB flash drive or USB hard drive. Let's say, for example, that you find it is /dev/sdd1. In this example, we assume /dev/sdd1 has FAT filesystem, and it is automatically mounted in dir /media/usb/. If it's not automatically mounted, manually mount it by "mkdir -p /media/usb; mount /dev/sdd1 /media/usb/".
       <li>Unzip all the files, and copy them into your USB flash drive or USB hard drive (You can make it by the command like: "unzip gparted-live-0.4.5-2.zip -d /media/usb/"). Keep the directory architecture, for example, file "COPYING" should be in the USB flash drive or USB hard drive's top directory (e.g. /media/usb/COPYING).
       <li>To make your USB flash drive bootable, first change the working dir, e.g. "cd /media/usb/utils/linux", then run "bash makeboot.sh /dev/sdd1" (replace /dev/sdd1 as your USB flash drive device name), and follow the prompts to finish that. <font color="red">WARNING! Executing it with wrong device name could cause your GNU/Linux not to boot. Confirm the command before you run it.</font> (There is a known problem if you run makeboot.sh on Debian Etch, since the program utils/linux/syslinux does not work on that. Make sure you run it on newer GNU/Linux, e.g. Debian Lenny, Ubuntu 8.04, Fedora 9...).
       <li>If your USB flash drive or USB hard drive is not able to boot, check (1) Is there any partition in your flash drive ? It must contain 1 partition at least. (2) The partition must be marked as "bootable" in the partition table. (3) The partition must be on the cylinder boundary.
    </ol>
  </li>
      <li>Choice 2 (Use GUI program on GNU/Linux):<br>
          <ul>
	  <li>Download <a href="http://unetbootin.sourceforge.net/" target=_blank>Unetbootin</a> to help you to create this Live USB flash drive. Just run the program on MS windows, then you can follow the GUI to create the live. You will need the GParted live iso file in this method. <font color=red>PS.</font> The boot menu created by Unetbootin is not exactly the same boot menu as the one created in choice 1. Therefore it's recommended to use the choice 1 to create such a GParted live on USB flashd drive.
          </li>
          </ul>
  </ul>
</ul>
</div>

<? gnome_foot() ?>

</div>
</body>
</html>
