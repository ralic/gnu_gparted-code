<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

<head>
  <title>GParted -- Live Boot Parameters</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="content">
<h1>GParted Live Boot Parameters</h1>
<a href="https://wiki.ubuntu.com/Kernel/KernelBootParameters" target=_blank>Kernel boot parameters</a> are text strings which are interpreted by the system to change specific behaviors and enable or disable certain features.
Different boot loaders use different config files for the boot parameters:
<ol>
<li>For GParted live booting from CD on a MBR machine, <a href="http://www.syslinux.org" target=_blank>isolinux</a> is the boot loader. Therefore the config file is /isolinux/isolinux.cfg.</li>
<li>For GParted live booting from USB flash drive on a MBR machine, <a href="http://www.syslinux.org" target=_blank>syslinux</a> is the boot loader. Therefore the config file is /syslinux/syslinux.cfg.</li>
<li>For GParted live booting from PXE on a MBR machine, <a href="http://www.syslinux.org" target=_blank>pxelinux</a> is the boot loader. The config file is on the PXE server, and is configured by the system administrator. it could be something like /tftpboot/nbi_img/pxelinux.cfg/default, or different file.</li>
<li>For GParted live booting from a uEFI machine, <a href="http://en.wikipedia.org/wiki/GNU_GRUB" target=_blank>grub2</a> is used. Therefore the config file is /EFI/boot/grub.cfg. </li>
</ol>
<p>
GParted live is based on <a href="http://wiki.debian.org/DebianLive/" target=_blank>Debian live</a> with GParted installed. Therefore there are 2 kinds of boot parameters:
<ol>
<li>Boot parameters from Debian live-boot and live-config. You can refer to the <a href="boot-parameters/live-boot.php">manual of live-boot</a> and <a href="boot-parameters/live-config.php">manual of live-config.</a>.
<li>Boot parameters specially for GParted. All of them are named as "gl__*", they are: gl-debug, gl_numlk, gl_capslk, gl_batch. 
  <ul>
  <li>gl-debug is for you to enter command line prompt before any GParted-related action is run. This is easier for you to debug.
  <li>gl_numlk, gl_capslk.<br>
      To turn on or off the numberlock or capslock of keyboard. You can use "on" or "off", e.g. gl_numlk=on to turn on numberlock when booting.
  <li>gl_batch<br>
      To enable batch mode, put it, then GParted live won't ask about X configuration during booting.<br>
      e.g. gl_batch
  </ul>
</ol>
<p>Therefore if you want to assign <a href="http://live.debian.net/manual/3.x/html/live-manual.en.html#customizing-locale-and-language" target=_blank>the language</a> and <a href="http://live.debian.net/manual/3.x/html/live-manual.en.html#customizing-locale-and-language" target=_blank>keyboard layout</a> as German one, and let the system to automatically detect the X-window configuration, you can put the boot parameters as:<br>
    locales=de_DE.UEF-8 keyboard-layouts=de gl_batch
</p>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
