<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

<head>
  <title>GParted Live on Hard Disk</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="content">
<h1>GParted Live on Hard Disk</h1>

<p>
Besides GParted Live CD and Live USB, we can also put GParted Live on
harddisk.<br>
<br>
In this example we use the grub boot loader.  You have to put the
GParted live files in a FAT, ext2, ext3, reiserfs or some other grub
supported partition.<br>
<br>
If you do not have such a partition, you can
use <a href="http://gparted.org">gparted</a> to resize an existing
partition to free up space and then create another partition to put
GParted Live.  From this point on we assume you already have a FAT
partition /dev/hda4 to put GParted live.  Following are the set up
steps:
</p>

<ol>
  <li class="step">
    Boot the OS in the hard drive.  Let's assume it is GNU/Linux.
  </li>
  <li class="step">
    Mount /dev/hda4 as /mnt, you can manually mount it by issuing a
    command like: "mount /dev/hda4 /mnt"
  </li>
  <li class="step">
    <a href="./download.php">Download GParted live zip file</a>, and
    unzip all the files in /mnt, make sure you put all the files in
    /mnt, say, COPYING is in /mnt/, not in any subdir. You can do this
    with a command such as: "unzip gparted-live-*.zip -d /mnt"
    (Replace gparted-live-*.zip with the file name you just
    downloaded).
  </li>
  <li class="step">
    Change the dir name "live" under /mnt to another name, say
    "live-hd".  You can do this with a command like: "cd /mnt; mv live
    live-hd"
  </li>
  <li class="step">
    If your grub is version 1.x, edit your grub config file
    /boot/grub/menu.lst, and append the following:
    <pre>
    title     GParted live
    root      (hd0,3)
    kernel    /live-hd/vmlinuz1 boot=live union=aufs noswap noprompt vga=788 ip=frommedia live-media-path=/live-hd bootfrom=/dev/hda4 toram=filesystem.squashfs
    initrd    /live-hd/initrd1.img
    boot
    </pre>
    In grub version 1 syntax, /dev/hda4 is (hd0,3).
  </li>
  <li>
    If your grub is 2.x (grub-pc), e.g. on Debian Squeeze or Ubuntu
    9.10, edit /etc/grub.d/40_custom, make it like:
    <pre>
    menuentry "GParted live" {
      set root=(hd0,4)
      linux /live-hd/vmlinuz1 boot=live union=aufs noswap noprompt vga=788 ip=frommedia live-media-path=/live-hd bootfrom=/dev/hda4 toram=filesystem.squashfs
      initrd /live-hd/initrd1.img
    }
    </pre>

    <b>NOTE:</b> In grub2, (hd0,4) means the first hard drive and the
    4th partition. It's different from that in grub version 1. Then
    run "update-grub2" to update your grub2 config. (Thanks to Louie
    Chen for providing this).<br>
    <br>

    Alternatively from GParted live version 0.4.8-7 onwards, you can
    use only the GParted live iso file in grub2 (Thanks to the patches
    files from <a href="http://grml.org">grml</a>). For example, put
    gparted-live-0.5.2-9.iso in dir /home/isos/, then make the grub2
    custom file /etc/grub.d/40_custom like:
    <pre>
    menuentry "Gparted live" {
      set isofile="/home/isos/gparted-live-0.5.2-9.iso"
      loopback loop $isofile
      linux (loop)/live/vmlinuz1 boot=live union=aufs noswap noprompt vga=788 ip=frommedia toram=filesystem.squashfs findiso=$isofile
      initrd (loop)/live/initrd1.img
    }
    </pre>
    Then run "update-grub2" to update your grub2 config.
  </li>
</ol>
<p>
<b>NOTE1:</b> In the above examples we added an extra parameter
<font color="red">"toram=filesystem.squashfs"</font> so that the
partition /dev/hda4 won't be locked after booting GParted Live from
hard disk.<br>
<b>NOTE2:</b> Remember to check parameters in syslinux/syslinux.cfg
from the zip file, copy them to here. It might be different from here,
say vmlinuz1 path maybe different.<br>
<br>
For more information on grub you can refer to
the <a href="http://www.gnu.org/software/grub/">GNU GRUB</a> web
site.<br>
</p>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
