<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

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
<br>
<ol>
<li>Boot GParted live (Version 0.4.1-2 or later is required).
<li>Follow the instructions to enter X, then open a terminal.
<li>Configure internet connection, e.g. run "dhclient eth0" to lease IP address from a DHCP server, or you can use commands like "ifconfig" and "route" to assign static IP address.
<li>apt-get update 
<li>Turn on the apt repository by editing /etc/apt/sources.list, e.g. "nano /etc/apt/sources.list" or "vim /etc/apt/sources.list", make it like:
<pre>
deb http://free.nchc.org.tw/debian/ lenny main contrib non-free # Or any Debian mirror site near you.
deb http://free.nchc.org.tw/debian-security lenny/updates main contrib non-free  # Or any Debian mirror site near you.
deb http://free.nchc.org.tw/drbl-core drbl unstable testing stable live-stable live-testing live-unstable live-experimental
</pre>
<li>apt-get update
<li>mkdir -p /usr/share/man/man{1,5,8}
<li>apt-get --reinstall install libc6<br>
    (By doing this, we can avoid this error: "iconv: conversion to `latin1' is not supported" when creating GParted live by live helper because /usr/lib/gconv/ was removed when GParted live was created)
<li>apt-get install live-helper cdebootstrap drbl clonezilla zip bzip2 rsync mkisofs
<li>Mount a working space, you need at least 600 MB. e.g. mount /dev/hdb1 /mnt
<li>cd /mnt
<li>Edit /opt/drbl/sbin/create-gparted-live to meet your need if necessary, e.g. if you want to add some package, you can append the package name in the variable "pkgs" if it exists in the Debian repository. E.g. if you want to add the package "pcmanfm", you can try to search it in the Debian repository by: "apt-cache search pcmanfm". Once you are sure it's in repository, you can add it.
<li>Run: "/opt/drbl/sbin/create-gparted-live" to create GParted live,<br>
or to use the unstable branch of DRBL and experimental branch of live on drbl repository:<br>
/opt/drbl/sbin/create-gparted-live -l en -b u -e e<br>
If you want to assign different repositories to download files, you can run something like:<br>
/opt/drbl/sbin/create-gparted-live -l en -b u -e e -m http://ftp.us.debian.org/debian -s http://security.debian.org -g http://drbl.sourceforge.net/drbl-core<br>
For more info, you can run "/opt/drbl/sbin/create-gparted-live --help"<br>
BTW, in the file "GParted-Live-Version" in the GParted live iso file, you can find the command which was used to create the GParted iso file.
</ol>

<br><br><br><br><br><br><br><br><br>
</p>
</div>

<? gnome_foot() ?>

</div>
</body>
</html>
