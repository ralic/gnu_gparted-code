<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

<head>
  <title>GParted Live on PXE Server</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="content">
<H1>GParted Live on PXE Server</H1>
<p>
Besides GParted Live CD and Live USB, we can put the GParted Live
image on a PXE server so that a client can boot via the network to use
GParted.  The steps to do this are as follows:
</p>

<ol>
  <li class="step">
    Set up a PXE server. You might refer to documentation, such as
    <a href="http://www.debian-administration.org/articles/478"
    target=_blank>setting up a server for PXE network booting</a>,
    or <a href="http://drbl.sourceforge.net" target=_blank>DRBL
    (Diskless Remote Boot in Linux)</a> to assist you..<br>
    In these steps we assume the pxelinux config file is
    /tftpboot/nbi_img/pxelinux.cfg/default, and the image files are in
    /tftpboot/nbi_img/.
  </li>
  <li class="step">
    Set up an http service on the PXE server.
  </li>
  <li class="step">
    <a href="download.php">Download GParted live zip file</a>.  You
    have to use 0.3.7-2 or later because network drivers are only
    included after that.
  </li>
  <li class="step">
    Unzip all the files in a temp dir /tmp/gparted/. You can do this
    with a command such as: 
    <pre>
    mkdir -p /tmp/gparted; unzip gparted-live-*.zip -d /tmp/gparted/
    </pre>
    <b>NOTE:</b> Replace gparted-live-*.zip with the file name you
    just downloaded.
  </li>
  <li class="step">
    Copy the necessary boot files (vmlinuz1 and initrd1.img) to
    /tftpboot/nbi_img/.  For example:<br>
    <pre>
    cp /tmp/gparted/live/{vmlinuz1,initrd1.img} /tftpboot/nbi_img/
    </pre>
  </li>
  <li class="step">
    Copy /tmp/gparted/live/filesystem.squashfs to your http server.
    For example:<br>
    <pre>
    cp /tmp/gparted/live/filesystem.squashfs /var/www/
    </pre>
  </li>
  <li class="step">

    Edit your PXE config file /tftpboot/nbi_img/pxelinux.cfg/default,
    and append the following:<br>
    <pre>
    label GParted Live
            MENU LABEL GParted Live
            kernel vmlinuz1
            append initrd=initrd1.img boot=live union=aufs noswap noprompt vga=788 fetch=http://$webserverIP/filesystem.squashfs
    </pre>
    <b>NOTE1:</b> Replace <i>$webserverIP</i> with the IP address of
    your http server.<br>
    <b>NOTE2:</b> Remember to check the boot parameters in
    syslinux/syslinux.cfg from the zip file.  You should replace the
    above listed parameters with these more recent ones because these
    newer boot parameters might be different.  For example the
    vmlinuz1 path might be different.<br>
    <font color="red"><b>NOTE3:</b> Do not use the parameter
    "ip=frommedia" in your PXE config file.</font><br>
  </li>
</ol>

<p>
  For more information about pxelinux, refer to the
  following <a href="http://syslinux.zytor.com/pxe.php"
  target=_blank>article on PXELinux</a>.
</p>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
