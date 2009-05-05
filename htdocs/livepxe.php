<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

<head>
  <title>GParted Live on PXE server</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="content">
<H1>GParted Live on PXE server</H1>
<p>
Besides GParted Live CD and Live USB, we can put GParted Live on a PXE server so that client can boot via network to use GParted. This is howto:<br>
1. Prepare a PXE server. You may refer to some doc, e.g. <a href="http://www.debian-administration.org/articles/478" target=_blank>this one</a> or <a href="http://drbl.sourceforge.net" target=_blank>DRBL (Diskless Remote Boot in Linux)</a>. We assume the pxelinux config file is /tftpboot/nbi_img/pxelinux.cfg/default, and the image files are in /tftpboot/nbi_img/.<br>
2. Prepare http service on that PXE server, too.<br>
3. <a href="./download.php">Download GParted live zip file</a> (<font color="red">You have to use 0.3.7-2 or later</font>, network drivers are only included after that), and unzip all the files in a temp dir /tmp/gparted/. You can make it by something like: "mkdir -p /tmp/gparted; unzip gparted-live-*.zip -d /tmp/gparted/" (Replace gparted-live-*.zip with the file name you just downloaded).<br>
4. Copy necessary boot files (vmlinuz1 and initrd1.img) to /tftpboot/nbi_img/. You can make it by: "cp /tmp/gparted/live/{vmlinuz1,initrd1.img} /tftpboot/nbi_img/<br>
5. Copy /tmp/gparted/live/filesystem.squashfs to your http server, e.g "cp /tmp/gparted/live/filesystem.squashfs /var/www/".<br>
5. Edit your PXE config file /tftpboot/nbi_img/pxelinux.cfg/default, and append the following:<br>
-----------<br>
label GParted Live<br>
  MENU LABEL GParted Live<br>
  kernel vmlinuz1<br>
  append initrd=initrd1.img boot=live union=aufs noswap noprompt vga=788 fetch=http://$webserverIP/filesystem.squashfs<br>
-----------<br>
   //NOTE// Replace $webserverIP with your IP address of http server.<br>
   <font color="red">Remember to check parameters in syslinux/syslinux.cfg from the zip file, copy them to here. It might be different from here, say vmlinuz1 path maybe different. (Note! Do not put parameter "ip=frommedia")</font><br>
   For more info about pxelinux, you can refere to <a href="http://syslinux.zytor.com/pxe.php" target=_blank>here</a>.<br>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
