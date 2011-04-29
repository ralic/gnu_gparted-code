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

<div class="right">
  <?
    include "google/lusbp-160x600-rhs-near-top.inc";
  ?>
</div>

<p>
  The bootable <a href="livecd.php">GParted Live</a> image can also be
  installed on a USB flash drive.<br>
  <br>
  Following are instructions on how to setup GParted Live on your USB
  flash drive using either <a href="#windows-setup">MS Windows</a>
  or <a href="#linux-setup">GNU/Linux</a>.<br>
  <br>
  NOTE: These installation methods only work when the USB flash drive
  is formatted with a FAT file system.  Some users have reported that
  only the FAT16 file system worked for them.  For other file systems
  you might try to use grub or some other boot loader.
</p>

<br>
<hr>

<a name="windows-setup"></a>
<h2>USB setup with Windows</h2>
<p>
  Choose one of the following methods to setup GParted Live on your
  USB flash drive using MS Windows:
</p>
<ul>
  <li>
    <a href="#windows-method-a">Windows Method A:  Tuxboot</a>
  </li>
  <li>
    <a href="#windows-method-b">Windows Method B:  Manual</a>
  </li>
  <li>
    <a href="#windows-method-c">Windows Method C:  Unetbootin</a>
  </li>
  <li>
    <a href="#windows-method-d">Windows Method D:  LinuxLive USB Creator</a>
  </li>
</ul>

<a name="windows-method-a"></a>
<h3>Windows Method A:  Tuxboot</h3>
<ol>
  <li class="step">
    Download <a href="http://tuxboot.org/"
    target=_blank>Tuxboot</a> on your MS Windows computer.
  </li>
  <li class="step">
    From Windows, run the Tuxboot program and follow 
    <a href="http://tuxboot.org/installation-screenshots.php" target=_blank>
    the instructions in the GUI</a> to install GParted Live on your USB flash
    drive.
  </li>
</ol>

<a name="windows-method-b"></a>
<h3>Windows Method B:  Manual</h3>

<table border=0><tr><td>
<div class="warning">
<p class="hangwarning">
<b>WARNING!</b> &nbsp;
DO NOT RUN  makeboot.bat from your local hard drive!<br>
Doing so could cause your MS windows not to boot!!!
</p>
</div>
</td></tr></table>

<ol>
  <li class="step">
    <a href="download.php">Download</a> the GParted
    Live <b>zip</b> file.
  </li>
  <li class="step">
    If you already have a partition of at least 200 MB in size on your
    USB flash drive formatted with a FAT file system then skip to the
    next step (3).<br>
    Otherwise create at least a 200 MB partition on your USB flash
    drive and format it with a FAT16 or FAT32 file system.
  </li>
  <li class="step">
    Extract all the contents of the zip file to FAT16/FAT32
    partition on your USB flash drive.  Keep the directory
    architecture, for example, file "COPYING" should be in the USB
    flash drive's top directory (e.g. G:\COPYING).
  </li>
  <li class="step">
    Browse to your USB flash drive and as an administrator, click the 
    makeboot.bat in the dir utils\win32\. <font color="red"><b>WARNING!</b>
    Makeboot.bat must be run from your USB flash drive.</font>
  </li>
  <li class="step">
    Follow the on-screen instructions.<br>
    (PS: The above description is modified from:
    http://www.pendrivelinux.com/2007/01/02/all-in-one-usb-dsl.
    Thanks to PDLA from http://pendrivelinux.com)<br>
    <br>
  </li>
</ol>

<a name="windows-method-c"></a>
<h3>Windows Method C:  Unetbootin</h3>
<table border=0><tr><td>
<div class="caution">
<p class="hangcaution">
  <b>CAUTION</b>: &nbsp; Unetbootin creates a different boot menu.<br>
  Therefore it is recommended to use method A or B.<br>
</p>
</div>
</td></tr></table>

<ol>
  <li class="step">
    If you already have Unetbootin installed on your computer then
    skip to the next step (2).<br>
    Otherwise download and
    install <a href="http://unetbootin.sourceforge.net/"
    target=_blank>Unetbootin</a> on your MS Windows computer.
  </li>
  <li class="step">
    <a href="download.php">Download</a> the GParted
    Live <b>iso</b> file.
  </li>
  <li class="step">
    From Windows, run the Unetbootin program and follow the
    instructions in the GUI to install GParted Live on your USB flash
    drive.
  </li>
</ol>

<a name="windows-method-d"></a>
<h3>Windows Method D:  LinuxLive USB Creator</h3>
<ol>
  <li class="step">
    If you already have LinuxLive USB Creator installed on your computer then
    skip to the next step (2).<br>
    Otherwise download and
    install <a href="http://www.linuxliveusb.com/"
    target=_blank>LinuxLive USB Creator</a> on your MS Windows computer.
  </li>
  <li class="step">
    <a href="download.php">Download</a> the GParted
    Live <b>iso</b> file.
  </li>
  <li class="step">
    From Windows, install then run the LinuxLive USB Creator program and follow the
    instructions in the GUI to install GParted Live on your USB flash
    drive.
  </li>
</ol>

<br>
<hr>

<a name="linux-setup"></a>
<h2>USB setup with GNU/Linux</h2>
<p>
  Choose one of the following methods to setup GParted Live on your
  USB flash drive using GNU/Linux:
</p>
<ul>
  <li>
    <a href="#linux-method-a">GNU/Linux Method A:  Tuxboot</a>
  </li>
  <li>
    <a href="#linux-method-b">GNU/Linux Method B:  Manual</a>
  </li>
  <li>
    <a href="#linux-method-c">GNU/Linux Method C:  Unetbootin</a>
  </li>
</ul>

<a name="linux-method-a"></a>
<h3>GNU/Linux Method A:  Tuxboot</h3>
<ol>
  <li class="step">
    Download <a href="http://tuxboot.org/"
    target=_blank>Tuxboot</a> on your GNU/Linux computer.
  </li>
  <li class="step">
    From GNU/Linux, follow <a href="http://tuxboot.org/installation-screenshots.php" target=_blank>the instructions and the GUI</a> to run Tuxboot to install GParted Live on your USB flash drive.
  </li>
</ol>

<a name="linux-method-b"></a>
<h3>GNU/Linux Method B:  Manual</h3>

<table border=0><tr><td>
<div class="warning">
<p class="hangwarning">
<b>WARNING!</b> &nbsp;
Confirm you have the correct path name before executing commands!<br>
Failure to do so could cause loss of data or your GNU/Linux not to boot!!!<br>
<b>/dev/sde</b> is a device path name<br>
<b>/dev/sde1</b> is a partition path name
</p>
</div>
</td></tr></table>

<ol>
  <li class="step">
    <a href="download.php">Download</a> the GParted
    Live <b>zip</b> file.
  </li>
  <li class="step">
    If you already have a FAT16 or FAT32 partition on your USB flash
    drive then skip to the next step (3).<br>

    Otherwise prepare at least a 200 MB partition formatted with either a FAT16 or FAT32 file system.<br>

    If the USB flash drive or USB hard drive does not have
    any partition, you can use a partitioning tool (e.g. gparted, parted, fdisk,
    cfdisk or sfdisk) to create a partition with a size of 200 MB or
    more.<br>
    Here we assume your USB flash drive or USB hard drive is /dev/sdd
    (<font color="red">You have to comfirm your device name, since
    it's _NOT_ always /dev/sdd</font>) on your GNU/Linux, so the
    partition table is like:
    <pre>
      # fdisk -l /dev/sdd
      Disk /dev/sdd: 12.8 GB, 12884901888 bytes
      15 heads, 63 sectors/track, 26630 cylinders
      Units = cylinders of 945 * 512 = 483840 bytes
      Disk identifier: 0x000c2aa7

         Device Boot      Start         End      Blocks   Id  System
         /dev/sdd1   *           1       26630    12582643+   b  W95 FAT32
    </pre>
    Then format the partition as FAT with a command such as "mkfs.vfat
    -F 32 /dev/sdd1"<br>
    <font color="red"><b>WARNING!</b> Executing the mkfs.vfat command
    on the wrong partition or device could cause your GNU/Linux not to
    boot.  Be sure to confirm the command before you run it.</font>
    <pre>
      # mkfs.vfat -F 32 /dev/sdd1
      mkfs.vfat 2.11 (12 Mar 2005)
    </pre>
  </li>
  <li class="step">
    Insert your USB flash drive or USB hard drive into the USB port on
    your Linux machine and wait a few seconds. Next, run the command
    "dmesg" to query the device name of the USB flash drive or USB
    hard drive. Let's say, for example, that you find it is
    /dev/sdd1. In this example, we assume /dev/sdd1 has FAT
    filesystem, and it is automatically mounted in dir /media/usb/. If
    it's not automatically mounted, manually mount it with commands
    such as "mkdir -p /media/usb; mount /dev/sdd1 /media/usb/".
  </li>
  <li class="step">
    Unzip all the files and copy them into your USB flash drive or USB
    hard drive.  You can do this with a command such as: "unzip
    gparted-live-0.4.5-2.zip -d /media/usb/"). Keep the directory
    architecture, for example, file "COPYING" should be in the USB
    flash drive or USB hard drive's top directory
    (e.g. /media/usb/COPYING).
  </li>
  <li class="step">
    To make your USB flash drive bootable, first change the working
    dir, e.g. "cd /media/usb/utils/linux", then run "bash makeboot.sh
    /dev/sdd1" (<font color="red">replace /dev/sdd1 with your USB
    flash drive device name</font>), and follow the prompts.<br>
    <font color="red"><b>WARNING!</b> Executing makeboot.sh with the
    wrong device name could cause your GNU/Linux not to boot.  Be sure
    to confirm the command before you run it.</font><br>
    <br>
    NOTE: There is a known problem if you run makeboot.sh on Debian
    Etch, since the program utils/linux/syslinux does not work
    properly.  Make sure you run it on newer GNU/Linux, such as Debian
    Lenny, Ubuntu 8.04, or Fedora 9.
  </li>
</ol>

<table border=0><tr><td>
<div class="tip">
<p class="hangtip">
<b>TIP</b>: &nbsp;
  If your USB flash drive or USB hard drive is not able to boot, check
  the following:
</p>
<ul>
  <li class="step">
    Ensure that your USB flash drive contains at least one FAT partition.
  </li>
  <li class="step">
    Ensure that the partition is marked as "bootable" in the partition table.
  </li>
  <li class="step">
    Ensure that the partition starts on a cylinder boundary.<br>
    For the first partition this is usually sector 63.
  </li>
</ul>
</div>
</td></tr></table>

<a name="linux-method-c"></a>
<h3>GNU/Linux Method C:  Unetbootin</h3>
<table border=0><tr><td>
<div class="caution">
<p class="hangcaution">
  <b>CAUTION</b>: &nbsp; Unetbootin creates a different boot menu.<br>
  Therefore it is recommended to use method A or B.<br>
</p>
</div>
</td></tr></table>

<ol>
  <li class="step">
    If you already have Unetbootin installed on your computer then
    skip to step 2.<br>
    Otherwise install <a href="http://unetbootin.sourceforge.net/"
    target=_blank>Unetbootin</a> on your GNU/Linux computer.
  </li>
  <li class="step">
    <a href="download.php">Download</a> the GParted
    Live <b>iso</b> file.
  </li>
  <li class="step">
    From GNU/Linux, run the Unetbootin program and follow the
    instructions in the GUI to install GParted Live on your USB flash
    drive.
  </li>
</ol>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
