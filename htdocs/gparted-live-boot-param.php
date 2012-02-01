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
<p>
GParted live is based on <a href="http://wiki.debian.org/DebianLive/" target=_blank>Debian live</a> with GParted installed. Therefore there are 2 kinds of boot parameters:
<ol>
<li>Boot parameters from live-initramfs. You can refer to this <a href="./live-initramfs.en.7.txt" target=_blank>manual of live-initramfs</a>.
<li>Boot parameters specially for GParted. All of them are named as "gl__*", they are: gl_lang, gl-debug, gl_numlk, gl_capslk, gl_batch. 
  <ul>
  <li>gl_lang is the language used in GParted live. Available values: de_DE , en_US , es_ES , fr_FR , it_IT , ja_JP , pt_BR , ru_RU , zh_CN , zh_TW...
      e.g. gl_lang="en_US"
  <li>gl-debug is for you to enter command line prompt before any GParted-related action is run. This is easier for you to debug.
  <li>gl_numlk, gl_capslk.<br>
      To turn on or off the numberlock or capslock of keyboard. You can use "on" or "off", e.g. gl_numlk=on to turn on numberlock when booting.
  <li>gl_batch<br>
      To enable batch mode, put it, then GParted live won't ask about X configuration during booting.<br>
      e.g. gl_batch
  </ul>
</ol>
<p>Therefore if you want to assign the language and keyboard layout as German one, and let the system to automatically detect the X-window configuration, you can put the boot parameters as:<br>
    gl_lang=de_DE keyb=de gl_batch
</p>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
