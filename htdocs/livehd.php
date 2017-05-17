<?
include "functions.php";
webpage_init();
?>
<html>

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

<div class="right">
  <?
    include "google/lhdp-300x250-rhs-near-top.inc";
  ?>
</div>

<p>
In addition to writing the GParted Live image to CD and to USB media,
the GParted Live image can also be placed on a hard disk drive.  The
following sections describe how to do this for the GRUB and LILO boot
loaders.
</p>

<h2>Contents</h2>
<ul>
  <li><a href="#live-hd-grub">GParted Live on Hard Disk using GRUB</a></li>
  <li><a href="#live-hd-lilo">GParted Live on Hard Disk using LILO</a></li>
</ul>

<h2 id="live-hd-grub">GParted Live on Hard Disk using GRUB</h2>
<p>
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
    /mnt, say, file "GPL" is in /mnt/, not in any subdir. You can do
    this with a command such as: "unzip gparted-live-*.zip -d /mnt"
    (Replace gparted-live-*.zip with the file name you just
    downloaded).
  </li>
  <li class="step">
    Change the dir name "live" under /mnt to another name, say
    "live-hd".  You can do this with a command like: "cd /mnt; mv live
    live-hd"
  </li>
  <li class="step">
    Add the appropriate menu entry for your version of GRand Unified
    Bootloader (GRUB):
    <ul>
      <li class="step">
        <b>GRUB 1.x (Legacy)</b><br>
        If your grub is version 1.x, edit your grub config file
        /boot/grub/menu.lst, and append the following:
        <pre>
    title     GParted live
    root      (hd0,3)
    kernel    /live-hd/vmlinuz boot=live config union=overlay noswap noprompt vga=788 ip=frommedia live-media-path=/live-hd bootfrom=/dev/hda4 toram=filesystem.squashfs
    initrd    /live-hd/initrd.img
    boot
        </pre>
    In grub version 1 syntax, /dev/hda4 is (hd0,3).
      </li>
      <li class="step">
        <b>GRUB 2.x (and 1.9x)</b><br>
        If your grub is 2.x (grub-pc), e.g. on Debian Squeeze or Ubuntu
        9.10, edit /etc/grub.d/40_custom, make it like:
        <pre>
    menuentry "GParted live" {
      set root=(hd0,4)
      linux /live-hd/vmlinuz boot=live config union=overlay noswap noprompt vga=788 ip=frommedia live-media-path=/live-hd bootfrom=/dev/hda4 toram=filesystem.squashfs
      initrd /live-hd/initrd.img
    }
        </pre>
        <b>NOTE:</b> In grub2, (hd0,4) means the first hard drive and
        the 4th partition. It's different from that in grub version
        1. Then run "update-grub2" to update your grub2
        config. (Thanks to Louie Chen for providing this).<br>
        <br>
        Alternatively from GParted live version 0.4.8-7 onwards, you
        can use only the GParted live iso file in grub2 (Thanks to the
        patches files from <a href="http://grml.org">grml</a>). For
        example, put gparted-live-0.28.1-1-i686.iso in dir /home/isos/, then
        make the grub2 custom file /etc/grub.d/40_custom like:
        <pre>
    menuentry "Gparted live" {
      set isofile="/home/isos/gparted-live-0.28.1-1-i686.iso"
      loopback loop $isofile
      linux (loop)/live/vmlinuz boot=live config union=overlay username=user components noswap noeject vga=788 ip= net.ifnames=0 toram=filesystem.squashfs findiso=$isofile
      initrd (loop)/live/initrd.img
    }
        </pre>
        Then run "update-grub2" to update your grub2 config.
      </li>
      <li class="step">
        <b>GRUB4DOS and WINGRUB</b><br>
        If your grub is grub4dos, edit your grub config file
        menu.lst, and append the following:
        <pre>
    title gparted 28.1 live
    find --set-root /gparted-live-0.28.1-1-i686.iso
    map /gparted-live-0.28.1-1-i686.iso (0xff) || map --mem /gparted-live-0.28.1-1-i686.iso (0xff)
    map --hook
    root (0xff)
    kernel /live/vmlinuz  boot=live union=overlay username=user components noeject vga=788 ip= findiso=/gparted-live-0.28.1-1-i686.iso toram=filesystem.squashfs
    initrd /live/initrd.img
        </pre>
        (Thanks to Frank Breitling for pointing out this sample menu entry.
        See <a href="https://bugzilla.gnome.org/show_bug.cgi?id=682160">Bug
        #682160 - GParted Live on Hard Disk from Windows</a>)
      </li>
    </ul>
    <b>NOTE1:</b> In the above examples we added an extra parameter
    <font color="red">"toram=filesystem.squashfs"</font> so that the
    partition /dev/hda4 won't be locked after booting GParted Live from
    hard disk.<br>
    <b>NOTE2:</b> Remember to check parameters in
    syslinux/syslinux.cfg from the zip file, copy them to here. It
    might be different from here, say vmlinuz path maybe
    different.
  </li>
</ol>
<p>
For more information on grub you can refer to
the <a href="http://www.gnu.org/software/grub/">GNU GRUB</a> web
site.<br>
For more information on grub4dos, see
the <a href="http://sourceforge.net/projects/grub4dos/">GRUB for DOS</a> web
site.
</p>

<h2 id="live-hd-lilo">GParted Live on Hard Disk using LILO</h2>
<p>
The following instructions can be used to set up the GParted Live
image on a hard disk drive using the LILO boot loader.
</p>
<ol>
  <li class="step">
    <a href="http://gparted.org/download.php">Download the GParted
    Live zip file</a>
  </li>
  <li class="step">
    Create a /gparted-live directory:<br>
    <br>
    <pre>
    mkdir /gparted-live
    </pre>
  </li>
  <li class="step">
    Unzip the gparted download file into the /gparted-live
    directory:<br>
    <br>
    <pre>
    cd     /gparted-live
    unzip   gparted-live-<b><i>{...}</i></b>.zip
    </pre>
  </li>
  <li class="step">
    Edit the /etc/lilo.conf file and add a section for gparted.<br>
    <br>
    For this example, let us assume that the /gparted-live directory
    resides on the /dev/sda4 partition.<br>
    <pre>
    <i># GParted bootable partition config begins</i>

    image  = /gparted-live/live/vmlinuz
    root   = /dev/<b><i>sda4</i></b>  <i># make sure this matches the bootfrom= below ...</i>
    label  = gparted
    append = "boot=live config union=overlay username=user components noswap noeject ip= live-media-path=/gparted-live/live bootfrom=/dev/sda4 toram=filesystem.squashfs" vga=788
    initrd = /gparted-live/live/initrd.img

    <i># GParted bootable partition config ends</i>
    </pre>
  </li>
  <li class="step">
    Optionally add a section for memtest86+:
    <pre>
    <i># memtest86+ bootable partition config begins</i>

    image = /gparted-live/live/memtest
    label = memtest

    <i># memtest86+ bootable partition config ends</i>
    </pre>
  </li>
  <li class="step">
    Run lilo:
    <pre>
    lilo
    </pre>
  </li>
</ol>
<p>
These LILO instructions were adapted from the
following <a href="http://gparted-forum.surf4.info/viewtopic.php?id=16841">forum
post</a>.<br>
<br>
For more information on lilo, see
the <a href="https://en.wikipedia.org/wiki/LILO_%28boot_loader%29">LILO
(boot loader)</a> web site.
</p>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
