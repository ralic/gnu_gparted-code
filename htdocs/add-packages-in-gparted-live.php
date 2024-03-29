<?
include "functions.php";
webpage_init();
?>
<html>

<head>
  <title>Add packages in GParted live</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="content">
<H1>Add packages in GParted live</H1>
<p>
<b>GParted Live</b> is a small bootable GNU/Linux distribution for x86 machine based on Debian live. If you want to add packages in GParted live, you can follow this:<br>
 <font color="red">//NOTE// Due to the changes in Debian Sid repository are very frequent, the following method might need to be adjusted according to the changes.</font>
<br>
<ol>
  <li>You need a GNU/Linux system as a working environment to do this. Here we use Debian Jessie as the working environment. First we need to install squashfs-tools if it's not installed:<br>
  <br>
  <code>
  $ sudo apt-get update; sudo apt-get install squashfs-tools<br>
  </code>
  <br>
  </li>
  <li class="step">Download the GParted live zip format file which you intend to add packages, e.g., GParted live version <a href="http://downloads.sourceforge.net/gparted/gparted-live-0.28.1-1-i686-pae.zip" target=_blank>0.28.1-1</a>, then uncompress it and extract the filesystem.squashfs<br>
  <br>
  <code>
  $ mkdir ~/zip-tmp ~/squashfs-tmp<br>
  $ unzip gparted-live-0.28.1-1-i686-pae.zip -d ~/zip-tmp<br>
  $ cp ~/zip-tmp/live/filesystem.squashfs ~/squashfs-tmp<br>
  $ cd ~/squashfs-tmp; sudo unsquashfs filesystem.squashfs<br>
  (it will extract filesystem.squashfs to directory "squashfs-root" )<br>
  </code>
  <br>
  </li>
  <li>Assume the package you intend to add exists in Debian repository, e.g., firefox-esr, then we can do it by:<br>
  <br>
  <code>
  $ sudo mount --bind /proc squashfs-root/proc/<br>
  $ sudo mount --bind /sys squashfs-root/sys/<br>
  $ sudo mount --bind /dev squashfs-root/dev/<br>
  $ sudo chroot squashfs-root/<br>
  $ echo "nameserver 8.8.8.8" > /etc/resolv.conf<br>
  (It will write the nameserver for the chroot environment. You can use your desired namer server)<br>
  $ apt-get update; apt-get install firefox-esr<br>
  $ exit<br>
  </code>
  <br>
  </li>
  <li>Rebuild the new filesystem.squashfs and replace the original one ,then rebuild GParted live zip file with a XZ-compressed filesystem.squashfs:<br>
  <br>
  <code>
  $ sudo mksquashfs squashfs-root filesystem.squashfs.new -b 1024k -comp xz -Xbcj x86 -e boot<br>
  $ sudo cp filesystem.squashfs.new ~/zip-tmp/live/filesystem.squashfs<br>
  $ cd ~/zip-tmp ; sudo zip -r ../gparted-live.new.zip ./*<br>
  </code>
  <br>
  Now you have gparted-live.new.zip with firefox-esr included.<br>
  <br>
  </li>
  <li>If you want to convert zip file to iso file, you can make it by:<br>
  <br>
  <code>
  $ cd ~/zip-tmp/<br>
  $ genisoimage -A 'GParted live CD' -f -r -hide-rr-moved -hide-joliet-trans-tbl -J -l -allow-limited-size -b syslinux/isolinux.bin -c syslinux/boot.cat -no-emul-boot -boot-load-size 4 -boot-info-table -eltorito-alt-boot -efi-boot EFI/images/efiboot.img -no-emul-boot ./ > /tmp/gparted-live.iso<br>
  </code>
  </li>
</ol>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
