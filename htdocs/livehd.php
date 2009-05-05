<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

<head>
  <title>GParted Live on harddisk</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="content">
<H1>GParted Live on harddisk</H1>
<p>
Besides GParted Live CD and Live USB, we can put GParted Live on harddisk. This is howto:<br>
Here we use grub boot loader as an example. You have to put the GParted live files in a FAT, ext2/3, reiserfs or any grub supported partition.<br>
If you do not have such a partition, you can use <a href="http://gparted.sf.net" target=_blank>gparted</a> to resize your partition and create another partition to put GParted live. Here we assume you already have a FAT partition /dev/hda4 to put GParted live. This is how to do that:<br>
1. Boot the OS in the harddrive, saying it's GNU/Linux.<br>
2. Mount /dev/hda4 as /mnt, you can make it by: "mount /dev/hda4 /mnt"<br>
3. <a href="./download.php">Download GParted live zip file</a>, and unzip all the files in /mnt, make sure you put all the files in /mnt, say, COPYING is in /mnt/, not in any subdir. You can make it by something like: "unzip gparted-live-*.zip -d /mnt" (Replace gparted-live-*.zip with the file name you just downloaded).<br>
4. It is recommended to remove /mnt/makeboot.bat to avoid some mistake.<br>
5. Edit your grub config file /boot/grub/menu.lst, and append the following:<br>
-----------<br>
title           GParted live<br>
root            (hd0,3)<br>
kernel 		/live/vmlinuz1 toram boot=live union=aufs noswap noprompt vga=788 ip=frommedia<br>
initrd 		/live/initrd1.img<br>
boot<br>
-----------<br>
   //NOTE// Here we put an extra param "toram" so that the partition /dev/hda4 won't be locked. In grub syntax, here /dev/hda4 is (hd0,3).<br>
   <font color="red">Remember to check parameters in syslinux/syslinux.cfg from the zip file, copy them to here. It might be different from here, say vmlinuz1 path maybe different.</font><br>
   For more info about grub, you can refere to <a href="http://www.gnu.org/software/grub/" target=_blank>here</a>.<br>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
