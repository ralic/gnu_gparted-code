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
<ol>
<li> Boot the OS in the harddrive, saying it's GNU/Linux.<br>
<li> Mount /dev/hda4 as /mnt, you can make it by: "mount /dev/hda4 /mnt"<br>
<li> <a href="./download.php">Download GParted live zip file</a>, and unzip all the files in /mnt, make sure you put all the files in /mnt, say, COPYING is in /mnt/, not in any subdir. You can make it by something like: "unzip gparted-live-*.zip -d /mnt" (Replace gparted-live-*.zip with the file name you just downloaded).
<li> Change the dir name "live" under /mnt as another name, say "live-hd". You can make it by: "cd /mnt; mv live live-hd"
<li> If your grub is version 1.x, edit your grub config file /boot/grub/menu.lst, and append the following:<br>
<p>================================================<br>
title           GParted live<br>
root            (hd0,3)<br>
kernel 		/live-hd/vmlinuz1 boot=live union=aufs noswap noprompt vga=788 ip=frommedia <font color="red">live-media-path=/live-hd bootfrom=/dev/hda4 toram=filesystem.squashfs</font><br>
initrd 		/live-hd/initrd1.img<br>
boot<br>
<p>================================================<br>
<li> If your grub is 2.x (grub-pc), e.g. on Debian Squeeze or Ubuntu 9.10, edit /etc/grub.d/40_custom, make it like:<br>
<p>================================================<br>
menuentry "GParted live" {<br>
  set root=(hd0,4)<br>
  linux /live-hd/vmlinuz1 boot=live union=aufs noswap noprompt vga=788 ip=frommedia <font color="red">live-media-path=/live-hd bootfrom=/dev/hda4 toram=filesystem.squashfs</font><br>
  initrd /live-hd/initrd1.img<br>
} <br>
<p>================================================<br>
   //NOTE// In grub2, (hd0,4) means the first harddrive and the 4th partition. It's different from that in grub version 1. Then run "update-grub2" to update your grub2 config. (Thanks to Louie Chen for providing this). <br><br>
       Besides, from GParted live version 0.4.8-7, you can use only the GParted live iso file in grub2 (Thanks to the patches files from <a href="http://grml.org" target=_blank>grml</a>). For example, put gparted-live-0.4.8-7.iso in dir /home/isos/, then make the grub2 custom file /etc/grub.d/40_custom like:<br>
<p>================================================<br>
    menuentry "Gparted live" {<br>
    set isofile="/home/isos/gparted-live-0.4.8-7.iso"<br>

    loopback loop $isofile<br>
    linux (loop)/live/vmlinuz1 boot=live union=aufs noswap noprompt vga=788 ip=frommedia <font color="red">toram=filesystem.squashfs findiso=$isofile</font><br>
    initrd (loop)/live/initrd1.img<br>
}
<p>================================================<br>
       Then run "update-grub2" to update your grub2 config.<br>
</ol>
   //NOTE// Here we put an extra param "toram=filesystem.squashfs" so that the partition /dev/hda4 won't be locked. In grub syntax, here /dev/hda4 is (hd0,3).<br>
   <font color="red">Remember to check parameters in syslinux/syslinux.cfg from the zip file, copy them to here. It might be different from here, say vmlinuz1 path maybe different.</font><br>
   For more info about grub, you can refere to <a href="http://www.gnu.org/software/grub/" target=_blank>here</a>.<br>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
