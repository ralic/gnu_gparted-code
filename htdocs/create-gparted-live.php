<?
include "functions.php";
webpage_init();
?>
<html>

<head>
  <title>Create GParted live from scratch</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="content">
<H1>Create GParted live from scratch</H1>
<p>
<b>GParted Live</b> is a small bootable GNU/Linux distribution for x86 machine based on Debian live. If you want to create GParted live from scratch, you can follow the following:<br>
 <font color="red">//NOTE// Due to the changes in Debian Sid repository are very frequent, the following method might need to be adjusted according to the changes.</font>
<br>
<ol>
  <li class="step">Boot GParted live on a PC with RAM size larger than 1 GB (GParted live version >= <a href="http://downloads.sourceforge.net/gparted/gparted-live-0.28.1-1-i686-pae.iso" target=_blank>0.28.1-1</a> is required.)</li>
  <li class="step">Follow the instructions to enter X, then open a terminal. The follow actions have to be run as root. If you are not root, run "sudo -i" to become root.</li>
  <li class="step">Configure internet connection, e.g. run "dhclient eth0" to lease IP address from a DHCP server, or you can use commands like "ifconfig" and "route" to assign static IP address.</li>
  <li class="step">Turn on the apt repository by editing /etc/apt/sources.list, e.g. "nano /etc/apt/sources.list" or "vi /etc/apt/sources.list", make it like:
<pre>
deb http://ftp.us.debian.org/debian/ sid main contrib non-free # Or any Debian mirror site near you.
</pre>
  </li>
  <li class="step">apt-get update</li>
  <li class="step">mkdir -p /usr/share/man/man{1,5,8}</li>
  <li class="step">mkdir -p /usr/share/drbl/pkg/syslinux/efi{32,64}</li>
  <li class="step">apt-get --reinstall install libc6<br>
    (By doing this, we can avoid this error: "iconv: conversion to `latin1' is not supported" when creating GParted live by live helper because /usr/lib/gconv/ was removed when GParted live was created)
  </li>
  <li class="step">apt-get install live-build=4.0.5-1.drbl3 debootstrap drbl clonezilla zip bzip2 rsync genisoimage binutils xz-utils cpio bc initramfs-tools pxelinux isolinux
  <li class="step">export PATH=$PATH:/usr/share/drbl/sbin/:/usr/share/drbl/bin/</li>
  <li class="step">If the available space in dir /tmp/ is less than 500 MB, tune it to be larger than 500 MB. You can make it by the commands like:<br>
mount -t tmpfs -o "nosuid,size=60%,mode=1777" tmpfs /tmp<br>
Or <br>
mount -t tmpfs -o "nosuid,size=524288000,mode=1777" tmpfs /tmp
  <li class="step">run command "/usr/share/drbl/sbin/drbl-prepare-pxelinux"
  <li class="step">Mount a working space (Use Unix/Linux file system. Do not mount FAT or NTFS file system), you need at least 600 MB. e.g. mount /dev/sdb1 /mnt</li>
  <li class="step">mkdir /mnt/live/</li>
  <li class="step">cd /mnt/live/</li>
  <li class="step">Edit /usr/sbin/create-gparted-live to meet your need if necessary, e.g. if you want to add some package, you can append the package name in the variable "pkgs" if it exists in the Debian repository. E.g. if you want to add the package "pcmanfm", you can try to search it in the Debian repository by: "apt-cache search pcmanfm". Once you are sure it's in repository, you can add it.</li>
  <li class="step">Run: "/usr/sbin/create-gparted-live" with appropriate options to create GParted live,<br>
e.g. to use the unstable branch of DRBL and experimental branch of live on drbl repository:<br>
/usr/sbin/create-gparted-live -l en -b u -e e<br>
  <br>
If you want to assign different repositories to download files, you can run something like:<br>
create-gparted-live -l en -b u -e e -m http://ftp.us.debian.org/debian -s http://security.debian.org -g http://drbl.sourceforge.net/drbl-core<br>
  <br>
Or more options you can try (this is how GParted live 0.28.1-2 was created):<br>
<font color="blue">create-gparted-live -o -bt debootstrap -c 'main non-free' -k 'firmware-linux-free firmware-linux firmware-linux-nonfree firmware-bnx2 firmware-bnx2x firmware-qlogic firmware-ralink live-boot=4.0.2-1.drbl15 live-boot-initramfs-tools=4.0.2-1.drbl15 live-config=4.0.4-1.drbl7 live-config-systemd=4.0.4-1.drbl7 live-tools syslinux=3:6.03+dfsg-14.1 extlinux=3:6.03+dfsg-14.1 syslinux-common=3:6.03+dfsg-14.1 syslinux-utils=3:6.03+dfsg-14.1 syslinux-efi=3:6.03+dfsg-14.1' -f 686-pae -b unstable -e unstable -d sid -m http://free.nchc.org.tw/debian -s http://free.nchc.org.tw/debian-security -g http://free.nchc.org.tw/drbl-core -y 6.03 -i 0.28.1-1-i686-pae -n 4.9.0-3 -x quiet</font>
  <br>
  <br>
If nothing goes wrong, an iso file <font color=red>gparted-live-0.28.1-1-i686-pae.iso</font> and a zip file <font color=red>gparted-live-0.28.1-1-i686-pae.zip</font> will be created in the dir /mnt/live/. All other files under /mnt/live/ are temp files for troubleshooting, and you can remove them if everything goes smoothly.
  <br>
For more info, you can run "create-gparted-live --help"<br>
BTW, in the file "GParted-Live-Version" in the GParted live iso file, you can find the command which was used to create the GParted iso file.
  </li>
</ol>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
