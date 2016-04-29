<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta name="generator" content="HTML::TextToHTML v2.51"/>
</head>
<body>
<p>GParted live 0.26.0-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2016/Apr/29).
  </li><li>New upstream GParted 0.26.0. It's compiled with options
   --disable-libparted-dmraid --disable-doc, and the patched parted to
   address these 2 issues:
  <ol>
    <li>fat(32) resizing generates boot sector(s) with
   invalid jump instruction and pseudo-random boot code
   <a href="https://bugzilla.gnome.org/show_bug.cgi?id=759916">https://bugzilla.gnome.org/show_bug.cgi?id=759916</a>
    </li><li>Check FAT32 fs crashes GParted
   <a href="https://bugzilla.gnome.org/show_bug.cgi?id=762448">https://bugzilla.gnome.org/show_bug.cgi?id=762448</a>
  </li></ol>
  </li><li>Linux kernel was updated to 4.5.1-1.
  </li><li>New package ca-certificate was added.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Fri, 29 Apr 2016 13:27:00 +0800
</p>
<p>GParted live 0.26.0-beta1-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2016/Apr/21).
  </li><li>New upstream GParted 0.26.0-beta1. Compiled with options
   --disable-libparted-dmraid --disable-doc.
  </li><li>Linux kernel was updated to 4.5.1-1.
  </li><li>New package ca-certificate was added.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 21 Apr 2016 15:55:00 +0800
</p>
<p>GParted live 0.26.0-beta1-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2016/Apr/20).
  </li><li>New upstream GParted 0.26.0-beta1.
  </li><li>Linux kernel was updated to 4.5.1-1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 20 Apr 2016 17:59:00 +0800
</p>
<p>GParted live 0.25.0-3
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2016/Feb/18).
  </li><li>Package calcoo instead of qalculate-gtk was added for GParted live.
   It makes GParted live smaller.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 18 Feb 2016 13:25:00 +0800
</p>
<p>GParted live 0.25.0-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2016/Feb/17).
  </li><li>Linux kernel was updated to 4.3.5-1.
  </li><li>Package testdisk was updated to 7.0. Thanks to CJ.
  </li><li>Package qalculate-gtk was added. Thanks J&Atilde;&frac14;rgen Kowalzik for this
   suggestion.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 17 Feb 2016 09:37:00 +0800
</p>
<p>GParted live 0.25.0-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2016/Jan/19).
  </li><li>New GParted 0.25.0.
  </li><li>Linux kernel was updated to 4.3.3-5. Due to the change in Debian
   repository, no more i586 linux kernel, so now GParted live only
   provides i686, i686-pae and amd64 releases.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 20 Jan 2016 07:49:00 +0800
</p>
<p>GParted live 0.25.0-beta1-3
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2016/Jan/14).
  </li><li>Recompiled GParted with options
   "--disable-libparted-dmraid --disable-doc"
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 14 Jan 2016 14:29:00 +0800
</p>
<p>GParted live 0.25.0-beta1-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2016/Jan/13).
  </li><li>New GParted 0.25.0-beta1.
  </li><li>Linux kernel was updated to 4.3.3-5. Due to the change in Debian
   repository, no more i586 linux kernel, so now GParted live only
   provides i686, i686-pae and amd64 release.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 13 Jan 2016 13:22:00 +0800
</p>
<p>GParted live 0.24.0-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2015/Oct/28).
  </li><li>New GParted 0.24.0.
  </li><li>Bug fixed: vi instead of vim existing on system.
   Thanks to echristopherson.
   (<a href="https://bugzilla.gnome.org/show_bug.cgi?id=755602">https://bugzilla.gnome.org/show_bug.cgi?id=755602</a>)
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 28 Oct 2015 22:27:00 +0800
</p>
<p>GParted live 0.23.0-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2015/Aug/06).
  </li><li>Package zerofree was added.
  </li><li>GParted 0.23.0 was recomplied on Debian Sid with updated libs.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Mon, 17 Jul 2015 17:10:00 +0800
</p>
<p>GParted live 0.23.0-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2015/Aug/06).
  </li><li>New GParted 0.23.0.
  </li><li>Linux kernel was updated to 4.1.3-1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 06 Jul 2015 11:22:00 +0800
</p>
<p>GParted live 0.23.0-beta1-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2015/Jul/27).
  </li><li>Linux kernel was updated to 4.0.8-1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Mon, 27 Jul 2015 13:56:00 +0800
</p>
<p>GParted live 0.22.0-3
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2015/Jun/19).
  </li><li>Linux kernel was updated to 4.0.5-1.
  </li><li>Package xorg-server was patched to fixed a VESA graphic issue.
   (<a href="https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=787144">https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=787144</a>)
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Fri, 19 Jun 2015 22:07:00 +0800
</p>
<p>GParted live 0.22.0-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2015/May/22).
  </li><li>Linux kernel was updated to 4.0.2-1.
  </li><li>Using "isohybrid --uefi" to make dd iso file work for uEFI machine.
   Thanks to Patrick Verner and Kubuist for this.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sun, 24 May 2015 20:53:00 +0800
</p>
<p>GParted live 0.22.0-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2015/Mar/23).
  </li><li>New GParted release 0.22.0.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 23 Mar 2015 09:23:00 +0800
</p>
<p>GParted live 0.22.0-beta1-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2015/Mar/15).
  </li><li>New GParted release 0.22.0-beta1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sun, 15 Mar 2015 22:04:00 +0800
</p>
<p>GParted live 0.21.0-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2015/Jan/27).
  </li><li>New GParted release 0.21.0.
  </li><li>The version of i486 is replaced by i586 one.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 27 Jan 2015 16:19:00 +0800
</p>
<p>GParted live 0.21.0-beta1-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2015/Jan/19).
  </li><li>New GParted release 0.21.0-beta1.
  </li><li>Linux kernel was updated to 3.16.7-ckt4-1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Mon, 19 Jan 2015 13:59:00 +0800
</p>
<p>GParted live 0.20.0-3
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2014/Oct/27).
  </li><li>A workaround was added to make GParted live iso boot from PXE. Due to
   some reason this only works for AMD64 version.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Mon, 27 Oct 2014 19:59:00 +0800
</p>
<p>GParted live 0.20.0-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2014/Oct/24).
  </li><li>Adding package syslinux-efi.
  </li><li>Bug fixed: missing required packages syslinux-utils.
  </li><li>Bug fixed: /sbin/start-stop-daemon was missing.
 
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Fri, 24 Oct 2014 13:18:00 +0800
</p>
<p>GParted live 0.20.0-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2014/Oct/24).
  </li><li>New GParted release 0.20.0.
  </li><li>The descriptions and layout about exit icon were improved.
  </li><li>Bug fixed: Incorrect language title for locale pt_BR
   (<a href="https://bugzilla.gnome.org/show_bug.cgi?id=738258">https://bugzilla.gnome.org/show_bug.cgi?id=738258</a>)
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Fri, 24 Oct 2014 07:50:00 +0800
</p>
<p>GParted live 0.20.0-beta2
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2014/Oct/16).
  </li><li>The descriptions about exit icon were improved.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Fri, 17 Oct 2014 12:25:00 +0800
</p>
<p>GParted live 0.20.0-beta1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2014/Oct/14).
  </li><li>New GParted release 0.20.0-beta.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 14 Oct 2014 15:51:00 +0800
</p>
<p>GParted live 0.19.1-4
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2014/Aug/29).
  </li><li>Program MC_HxEd was removed from GParted live because it's not
   maintained anymore.
  </li><li>Program zenity instead of gdialog is used in gl-shutdown-menu.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Fri, 29 Aug 2014 14:05:00 +0800
</p>
<p>GParted live 0.19.1-3
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2014/Aug/28).
  </li><li>Package gparted was recompiled with parted lib 3.2-5.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 28 Aug 2014 20:49:00 +0800
</p>
<p>GParted live 0.19.1-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2014/Aug/27).
  </li><li>Linux kernel was updated to 3.14.15-2.
  </li><li>Package parted was updated to 3.2-5.
  </li><li>Package syslinux was updated to 6.03~pre19+dfsg-3.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 27 Aug 2014 15:11:00 +0800
</p>
<p>GParted live 0.19.1-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2014/Jul/16).
  </li><li>New GParted release 0.19.1.
  </li><li>Linux kernel was updated to 3.14.12-1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 16 Jul 2014 16:46:00 +0800
</p>
<p>GParted live 0.19.1-beta1-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2014/Jul/10).
  </li><li>New GParted release 0.19.1-beta1.
  </li><li>Linux kernel was updated to 3.14.10-1.
  </li><li>Syslinux was updated to 6.03-pre18.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 10 Jul 2014 11:24:00 +0800
</p>
<p>GParted live 0.19.0-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2014/Jun/11).
  </li><li>New GParted release 0.19.0.
  </li><li>Linux kernel was updated to 3.14.5-1.
  </li><li>Syslinux was updated to 6.03-pre13.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Mon, 11 Jun 2014 08:38:00 +0800
</p>
<p>GParted live 0.19.0-beta1-3
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2014/Jun/09).
  </li><li>Package dmraid and kpartx are reverted to use that from
   Debian repository.
  </li><li>Drop the "--enable-libparted-dmraid" configure flag for GParted.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Mon, 06 Jun 2014 14:56:00 +0800
</p>
<p>GParted live 0.19.0-beta1-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2014/Jun/08).
  </li><li>Package dmraid and kpartx are from Ubuntu repository and
   compiled on Debian Sid.
  </li><li>Due to the "eject" command delay issue, the eject prompt is removed
   when booting or halting machine. 
</li></ul>
<p>GParted live 0.19.0-beta1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2014/Jun/04).
  </li><li>New GParted release 0.19.0-beta1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 04 Jun 2014 21:30:00 +0800
</p>
<p>GParted live 0.18.0-5
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2014/May/15).
  </li><li>Linux kernel was updated to 3.14.4-1.
  </li><li>Packages, lsof, psmisc, dnsutils, wget, ftp, bzip2, zip, unzip, 
   w3m and gsmartcontrol were added in GParted live. Thanks to 
   Alexandros Manoussakis and ronbaby for the suggestions.
  </li><li>Startup page of netsurf was assigned to GParted live manual. Thanks to
   ronbaby for this suggestion.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 15 May 2014 22:51:00 +0800
</p>
<p>GParted live 0.18.0-3
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2014/Apr/26).
  </li><li>Linux kernel was updated to 3.13.10-1.
  </li><li>Bug fixed: The background image of EFI boot loader was not shown correctly.
   Thanks to Ady for reporting this issue.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sat, 26 Apr 2014 16:21:00 +0800
</p>
<p>GParted live 0.18.0-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2014/Apr/10).
  </li><li>Linux kernel was updated to 3.13.7-1.
  </li><li>Grub was updated to 2.02~beta2-8.
  </li><li>Packages screen, rsync, iputils-ping, telnet, traceroute and bc were added. Thanks to Alexandros Manoussakis (alex <u>at</u> juniper net) for this suggestion.
  </li><li>Bug fixed: ssh host key protocal ed25519 was not generated during boot. Thanks to Alexandros Manoussakis (alex <u>at</u> juniper net) for this bug report.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 10 Apr 2014 14:36:00 +0800
</p>
<p>GParted live 0.18.0-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2014/Feb/18).
  </li><li>New GParted release 0.18.0.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 20 Feb 2014 10:16:00 +0800
</p>
<p>GParted live 0.18.0-beta1-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2014/Feb/18).
  </li><li>Bug fixed: Forcevideo prompt was missing.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 18 Feb 2014 20:56:00 +0800
</p>
<p>GParted live 0.18.0-beta1-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2014/Feb/13).
  </li><li>New GParted release 0.18.0-beta1.
  </li><li>Linux kernel was updated to 3.12.9-1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 13 Feb 2014 11:09:00 +0800
</p>
<p>GParted live 0.17.0-5
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2014/Jan/21).
  </li><li>The "syslinux" and "isolinux" dirs of GParted live have been unified as one dir "syslinux". Thanks to Ady (ady-sf <u>at</u> hotmail com) for this suggestion.
  </li><li>Linux kernel was updated to 3.12.6-2.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 20 Jan 2014 15:22:00 +0800
</p>
<p>GParted live 0.17.0-4
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2013/Dec/29).
  </li><li>Bug fixed: some parameters were missing in the isolinux and syslinux 
   config files of the zip release.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sun, 29 Dec 2013 19:16:00 +0800
</p>
<p>GParted live 0.17.0-3
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2013/Dec/26).
  </li><li>Linux kernel was updated to 3.12.6-1.
  </li><li>Syslinux was updated to 6.03-pre1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 26 Dec 2013 23:10:00 +0800
</p>
<p>GParted live 0.17.0-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2013/Dec/13).
  </li><li>New GParted release 0.17.0.
  </li><li>Linux kernel was updated to 3.11.10-1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Fri, 13 Dec 2013 10:16:00 +0800
</p>
<p>GParted live 0.17.0-beta2-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2013/Dec/05).
  </li><li>New GParted release 0.17.0-beta2.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 05 Dec 2013 23:11:00 +0800
</p>
<p>GParted live 0.17.0-beta1-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2013/Dec/01).
  </li><li>GParted was compiled with option --enable-online-resize.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Mon, 02 Dec 2013 08:20:00 +0800
</p>
<p>GParted live 0.17.0-beta1-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2013/Dec/01).
  </li><li>New GParted release 0.17.0-beta1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sun, 01 Dec 2013 11:05:00 +0800
</p>
<p>GParted live 0.16.2-12
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2013/Nov/27).
  </li><li>Linux kernel was updated to 3.11.8-1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 28 Nov 2013 20:55:00 +0800
</p>
<p>GParted live 0.16.2-11
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2013/Nov/13).
  </li><li>Linux kernel was updated to 3.11.7-1.
  </li><li>Boot loader isolinux and syslinux were updated to 6.02 with patches for local boot.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 13 Nov 2013 13:51:00 +0800
</p>
<p>GParted live 0.16.2-9
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2013/Oct/28).
  </li><li>Linux kernel was updated to 3.11.6-1.
  </li><li>Boot loader isolinux and syslinux were updated to 6.02.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 28 Oct 2013 08:55:00 +0800
</p>
<p>GParted live 0.16.2-6
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2013/Oct/03).
  </li><li>This release was built with live-build 3, so the live-boot was 
   updated to 3.0.1-1.drbl3, and live-config was updated to 3.0.23-1.drbl2.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 03 Oct 2013 22:59:00 +0800
</p>
<p>GParted live 0.16.2-3
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2013/Sep/26).
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 26 Sep 2013 14:52:00 +0800
</p>
<p>GParted live 0.16.2-1b
</p>
<ul>
  <li>This is a remastered version due to the iso files created by genisoimage won't boot on some machinies. All the files are the same with that of 0.16.2-1, the only difference is the way iso files were created.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 24 Sep 2013 08:54:00 +0800
</p>
<p>GParted live 0.16.2-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2013/Sep/19).
  </li><li>GParted was updated to 0.16.2.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 19 Sep 2013 16:10:00 +0800
</p>
<p>GParted live 0.16.2-beta1-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2013/Sep/12).
  </li><li>GParted was updated to 0.16.2-beta1.
  </li><li>Linux kernel was updated to 3.10.11-1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 12 Sep 2013 12:58:00 +0800
</p>
<p>GParted live 0.16.1-4
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2013/Jun/28).
  </li><li>Linux kernel was updated to 3.9.6-1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Fri, 28 Jun 2013 08:25:00 +0800
</p>
<p>GParted live 0.16.1-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2013/May/09).
  </li><li>Linux kernel was updated to 3.8.11-1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 09 May 2013 17:03:00 +0800
</p>
<p>GParted live 0.16.1-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2013/May/01).
  </li><li>New GParted release 0.16.1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 01 May 2013 10:52:00 +0800
</p>
<p>GParted live 0.16.0-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2013/Apr/25).
  </li><li>New GParted release 0.16.0.
  </li><li>Linux kernel was updated to 3.2.41-2.
  </li><li>Package f2fs-tools was added.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 25 Apr 2013 10:04:00 +0800
</p>
<p>GParted live 0.15.0-3
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2013/Mar/27).
  </li><li>Linux kernel was updated to 3.2.41-1.
  </li><li>Bug fixed:  GParted live iso file was not isohybrided. Thanks to cvbn for reporting this issue.
  </li><li>Bug fixed: fluxbox menu key function failed to start in GParted live.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 27 Mar 2013 15:25:00 +0800
</p>
<p>GParted live 0.15.0-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2013/Mar/20).
  </li><li>New GParted release 0.15.0.
  </li><li>Linux kernel was updated to be 3.2.39-2.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 20 Mar 2013 11:03:00 +0800
</p>
<p>GParted live 0.14.1-6
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2012/Dec/23).
  </li><li>Two more underlying GNU/Linux operating systems were released: i686-PAE (Physical Address Extension) and AMD64 (X86-64).
  </li><li>Linux kernel was updated to be 3.2.35-2.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 27 Dec 2012 08:15:00 +0800
</p>
<p>GParted live 0.14.1-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2012/Dec/13).
  </li><li>New GParted release 0.14.1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 13 Dec 2012 03:59:00 +0800
</p>
<p>GParted live 0.14.1-beta1
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2012/Dec/07).
  </li><li>New GParted release 0.14.1-beta1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Fri, 07 Dec 2012 08:38:00 +0800
</p>
<p>GParted live 0.14.0-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2012/Oct/24).
  </li><li>Linux kernel was updated to be 3.2.32-1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 24 Oct 2012 21:05:00 +0800
</p>
<p>GParted live 0.14.0-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2012/Oct/11).
  </li><li>New GParted release 0.14.0.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 11 Oct 2012 15:11:00 +0800
</p>
<p>GParted live 0.13.1-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2012/Aug/09).
  </li><li>New GParted release 0.13.1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 09 Aug 2012 12:27:00 +0800
</p>
<p>GParted live 0.13.1-beta1-3
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2012/Aug/04).
  </li><li>Bug fixed: /etc/resolv.conf not created during booting.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sun, 05 Aug 2012 08:46:00 +0800
</p>
<p>GParted live 0.13.1-beta1-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2012/Aug/03).
  </li><li>Bug fixed: wrong GParted. Should use new GParted release 0.13.1-beta1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Fri, 03 Aug 2012 10:45:00 +0800
</p>
<p>GParted live 0.13.1-beta1-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2012/Aug/02).
  </li><li>New GParted release 0.13.1-beta1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 02 Aug 2012 19:27:00 +0800
</p>
<p>GParted live 0.13.0-3
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2012/Jul/28).
  </li><li>Linux kernel was updated to be 3.2.23-1.
  </li><li>Packages leafpad and pcmanfm were added.
  </li><li>The man packages of commands were included.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sat, 28 Jul 2012 10:31:00 +0800
</p>
<p>GParted live 0.13.0-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2012/Jul/14).
  </li><li>New GParted release 0.13.0.
  </li><li>Linux kernel was updated to be 3.2.21-3.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sat, 14 Jul 2012 01:15:00 +0800
</p>
<p>GParted live 0.12.1-6
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2012/Jun/19).
  </li><li>Linux kernel was updated to be 3.2.20-1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 19 Jun 2012 21:04:00 +0800
</p>
<p>GParted live 0.12.1-5
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2012/May/20).
  </li><li>Linux kernel was updated to be 3.2.17-1.
  </li><li>Package gptsync was added.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sun, 20 May 2012 09:47:00 +0800
</p>
<p>GParted live 0.12.1-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2012/Apr/10).
  </li><li>Linux kernel was updated to be 3.2.14-1.
  </li><li>New GParted release 0.12.1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 10 Apr 2012 09:47:00 +0800
</p>
<p>GParted live 0.12.0-5
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2012/Mar/03).
  </li><li>Linux kernel was updated to be 3.2.9-1.
  </li><li>Packages smartmontools and cifs-utils were added. 
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 08 Mar 2012 13:47:00 +0800
</p>
<p>GParted live 0.12.0-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2012/Feb/22).
  </li><li>Replacing dillo with netsurf, and adding nilfs-tools.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 23 Feb 2012 10:53:00 +0800
</p>
<p>GParted live 0.12.0-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2012/Feb/22).
  </li><li>Linux kernel was updated to be 3.2.6-1.
  </li><li>New GParted release 0.12.0.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 22 Feb 2012 13:33:00 +0800
</p>
<p>GParted live 0.11.0-12
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2012/Feb/08).
  </li><li>Linux kernel was updated to be 3.2.4-1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 08 Feb 2012 20:21:00 +0800
</p>
<p>GParted live 0.11.0-11
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2012/Jan/25).
  </li><li>Linux kernel was updated to be 3.2.1-2.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Fri, 27 Jan 2012 11:46:00 +0800
</p>
<p>GParted live 0.11.0-10
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2012/Jan/11).
  </li><li>Linux kernel was updated to be 3.1.8-2.
  </li><li>Bug fixed: failed to PXE booting in a machine with 2 or more network cards. Thanks to ckre for reporting this issue.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 11 Jan 2012 15:41:00 +0800
</p>
<p>GParted live 0.11.0-7
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2011/Dec/20).
  </li><li>The program gl-live-netcfg to configure network was added.
  </li><li>Web browser and network configure icons were added on desktop.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 20 Dec 2011 13:31:00 +0800
</p>
<p>GParted live 0.11.0-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2011/Dec/14).
  </li><li>New GParted release 0.11.0.
  </li><li>Linux kernel was updated to 3.1.5-1.
  </li><li>Program ntfs-3g was updated to 2011.10.9AR.1-3.
  </li><li>Grub 2 instead of grub 1 is included in the release since most of the modern distributions use grub 2 already.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 14 Dec 2011 10:39:00 +0800
</p>
<p>GParted live 0.10.0-3
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2011/Nov/2).
  </li><li>New GParted release 0.10.0.
  </li><li>The deprecated icon "info" was removed.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 02 Nov 2011 20:41:00 +0800
</p>
<p>GParted live 0.10.0-beta1-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2011/Oct/25).
  </li><li>New GParted release 0.10.0-beta1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 25 Oct 2011 23:14:00 +0800
</p>
<p>GParted live 0.9.1-5
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2011/Oct/15).
  </li><li>Linux kernel was updated to 3.0.0-5.
  </li><li>Gdisk was updated to 0.8.1.
  </li><li>EFI booting was improved.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sat, 15 Oct 2011 20:47:00 +0800
</p>
<p>GParted live 0.9.1-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2011/Sep/20).
  </li><li>New GParted release 0.9.1.
  </li><li>Linux kernel was updated to 3.0.0-3.
  </li><li>Gdisk was updated to 0.8.0.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 20 Sep 2011 08:55:00 +0800
</p>
<p>GParted live 0.9.0-7
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2011/Jul/28).
  </li><li>Bug fixed: Packages ntfs-3g and libntfs3g were downgraded to 2011.1.15AR.4-2. (<a href="https://bugzilla.gnome.org/show_bug.cgi?id=655215">https://bugzilla.gnome.org/show_bug.cgi?id=655215</a>).
  </li><li>Gdisk was updated to 0.7.2, and compiled without unicode support. Therefore no more libicu44 is included. This makes the GParted live iso file smaller by about 6 MB.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 28 Jul 2011 10:54:00 +0800
</p>
<p>GParted live 0.9.0-6
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2011/Jul/23).
  </li><li>New gparted 0.9.0.
  </li><li>Parted was rolled back to 0.2.3-7 with the patch file fix-head-size-assertion.patch from Ubuntu.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sat, 23 Jul 2011 7:19:00 +0800
</p>
<p>GParted live 0.9.0-3
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2011/Jul/19).
  </li><li>New gparted 0.9.0.
  </li><li>New parted 0.3.0.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 19 Jul 2011 17:09:00 +0800
</p>
<p>GParted live 0.8.1-6
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2011/Jul/07).
  </li><li>Linux kernel was updated to 2.6.39-3.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 07 Jul 2011 21:42:00 +0800
</p>
<p>GParted live 0.8.1-5
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2011/Jul/05).
  </li><li>Kernel 2.6.39-2 is used.
  </li><li>Xz compression instead of gzip method was used when making squashfs and initrd. Therefore the GParted live iso or zip file is smaller by ~ 24 MB.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 05 Jul 2011 14:45:00 +0800
</p>
<p>GParted live 0.8.1-3
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2011/May/24).
  </li><li>New gparted 0.8.1.
  </li><li>Kernel 2.6.38-5 is used.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 24 Mar 2011 20:45:00 +0800
</p>
<p>GParted live 0.8.0-5
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2011/Mar/21).
  </li><li>Kernel 2.6.38-1 is used.
  </li><li>Package ssh was added in this release. //NOTE// By default ssh service is not started, and if you want to start it, make sure you have change the password and the file /etc/hosts.deny.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Mon, 21 Mar 2011 09:12:00 +0800
</p>
<p>GParted live 0.8.0-3
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2011/Mar/02).
  </li><li>Kernel 2.6.37-2 is used.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 02 Mar 2011 21:16:00 +0800
</p>
<p>GParted live 0.8.0-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2011/Feb/28).
  </li><li>Bug fixed: a workaround was added to make setxkbmap work. Thanks to Ejis for the bug report.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Mon, 28 Feb 2011 13:29:00 +0800
</p>
<p>GParted live 0.8.0-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2011/Feb/17).
  </li><li>New gparted 0.8.0.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sat, 17 Feb 2011 11:04:00 +0800
</p>
<p>GParted live 0.7.1-5
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2011/Jan/07).
  </li><li>A new boot menu background was used in this release.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Fri, 07 Jan 2011 11:02:00 +0800
</p>
<p>GParted live 0.7.1-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2010/Dec/15).
  </li><li>New gparted 0.7.1.
  </li><li>New gParted icon on desktop.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 15 Dec 2010 08:58:00 +0800
</p>
<p>GParted live 0.7.0-11
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2010/Dec/11).
  </li><li>Bug fixed: Failed to load keymap issue has been fixed.
  </li><li>Bug fixed: No grub1 was available. Now package grub-legacy (grub1) instead grub-pc (grub2) was installed. Both of grub-pc and grub-legacy deb packages are included in /root/pkg/grub/.
  </li><li>Package mount-gtk was removed. It can not be used to mount the device by selection, one still has to know the device name.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sun, 12 Dec 2010 10:21:00 +0800
</p>
<p>GParted live 0.7.0-7
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2010/Nov/26).
  </li><li>Package mount-gtk was added.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Fri, 26 Nov 2010 10:42:00 +0800
</p>
<p>GParted live 0.7.0-4
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2010/Nov/05).
  </li><li>The boot paramater vga=788 was removed.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sat, 06 Nov 2010 10:25:00 +0800
</p>
<p>GParted live 0.7.0-3
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2010/Nov/05).
  </li><li>The modeset-related boot parameters (i915.modeset=0 xforcevesa radeon.modeset=0 nomodeset) were removed.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Fri, 05 Nov 2010 15:24:00 +0800
</p>
<p>GParted live 0.7.0-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2010/Oct/30).
  </li><li>New gparted 0.7.0.
  </li><li>Syslinux was updated to 4.03.
  </li><li>Package btrfs-tools was added.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 30 Oct 2010 23:45:00 +0800
</p>
<p>GParted live 0.7.0-beta1-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2010/Oct/26).
  </li><li>Kernel 2.6.32-26 is used.
  </li><li>New gparted 0.7.0-beta1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 26 Oct 2010 09:36:00 +0800
</p>
<p>GParted live 0.6.4-1
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2010/Oct/02).
  </li><li>Kernel 2.6.32-24 is used.
  </li><li>New gparted 0.6.4.
  </li><li>Live-config was updated to 2.0.7, and a shorter boot parameter "config" instead of "live-config" is used now. "live-config" is still a valid boot parameter, same as "config".
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sat, 02 Oct 2010 08:28:00 +0800
</p>
<p>GParted live 0.6.3-3
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2010/Sep/25).
  </li><li>New gparted 0.6.3.
  </li><li>Live-boot and live-config are used in this release. Live-initramfs is no more. Therefore if you manage the boot paramters by yourself, you have to put extra boot parameter "live-config" to make live-config to work.
  </li><li>Due to live-config 2.0.6, the X window system now is run as normal user, no more as root. If you need to get root privileges, use "sudo", and there is no password required for the account "user" to run "sudo".
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sat, 25 Sep 2010 07:54:00 +0800
</p>
<p>GParted live 0.6.2-8
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2010/Sep/06).
  </li><li>The utils dir is included in GParted live iso file. With this, we can put the files of GParted live iso on an USB stick and make it bootable with some commands.
  </li><li>Both gl_debug and gl-debug are the same boot parameters for GParted live debug mode.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Mon, 06 Sep 2010 14:34:00 +0800
</p>
<p>GParted live 0.6.2-5
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2010/Sep/01).
  </li><li>This release was created by live-build and live-boot 2 and live-config 2 were used. An extra boot parameter "live-config" was added so it works for live-config.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 01 Sep 2010 06:17:00 +0800
</p>
<p>GParted live 0.6.2-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2010/Aug/03).
  </li><li>New gparted 0.6.2.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 03 Aug 2010 09:40:00 +0800
</p>
<p>GParted live 0.6.1-5
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2010/Jul/26).
  </li><li>Kernel 2.6.32-18 is used.
  </li><li>"radeon.modeset=0" was added in the boot parameter by default.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Mon, 26 Jul 2010 13:30:00 +0800
</p>
<p>GParted live 0.6.1-4
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Sid repository (as of 2010/Jul/21). 
  </li><li>GParted was configured with --disable-doc
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 21 Jul 2010 16:11:00 +0800
</p>
<p>GParted live 0.6.1-2
</p>
<ul>
  <li>The underlying GNU/Linux operating system is based on the Debian Squeeze repository (as of 2010/Jul/09). 
  </li><li>New GParted release 0.6.1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Fri, 09 Jul 2010 16:28:00 +0200
</p>
<p>GParted live 0.6.0-7
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. This release is based on the Debian Sid repository (as of 2010/Jul/05). 
  </li><li>Parted was updated to 2.3.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 06 Jul 2010 00:09:00 +0800
</p>
<p>GParted live 0.6.0-6
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. This release is based on the Debian Sid repository (as of 2010/Jul/01). 
  </li><li>More boot parameters (nomodeset, i915.modeset=1, xforcevesa) were added so that KMS of kernel won't make those VGA card blank.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 01 Jul 2010 09:25:00 +0800
</p>
<p>GParted live 0.6.0-1
</p>
<ul>
  <li>New GParted release 0.6.0.
  </li><li>The underlying GNU/Linux operating system was upgraded. This release is based on the Debian Sid repository (as of 2010/Jun/19). 
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sat, 19 Jun 2010 13:46:00 +0800
</p>
<p>GParted live 0.5.2-11
</p>
<ul>
  <li>Bug fixed: e2fsprogs "/lib/libblkid.so.1: version `BLKID_2.17' not found (required by mkfs.ext3)" issue was fixed. (<a href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=583592">http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=583592</a>)
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 02 Jun 2010 09:57:00 +0800
</p>
<p>GParted live 0.5.2-10
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. This release is based on the Debian Squeeze repository (as of 2010/Jun/01). 
  </li><li>Kernel 2.6.32-14 from Debian Sid repository is used in this release.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 01 Jun 2010 08:53:00 +0800
</p>
<p>GParted live 0.5.2-9
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. This release is based on the Debian Sid repository (as of 2010/Apr/29).
  </li><li>Package parted was patches with libparted - don't canonicalize /dev/mapper paths <a href="http://git.debian.org/?p=parted/parted.git;a=commit;h=c1eb485b9fd8919e18f192d678bc52b0488e6ee0">http://git.debian.org/?p=parted/parted.git;a=commit;h=c1eb485b9fd8919e18f192d678bc52b0488e6ee0</a>, libparted: reenable use of BLKPG ioctls <a href="http://git.debian.org/?p=parted/parted.git;a=commit;h=0e04d17386274fc218a9e6f9ae17d75510e632a3">http://git.debian.org/?p=parted/parted.git;a=commit;h=0e04d17386274fc218a9e6f9ae17d75510e632a3</a>, and libparted: improve BLKPG error checking <a href="http://git.debian.org/?p=parted/parted.git;a=commit;h=7165951dfb584aae2901ac3f1a28fe3624667f19">http://git.debian.org/?p=parted/parted.git;a=commit;h=7165951dfb584aae2901ac3f1a28fe3624667f19</a> 
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 29 Apr 2010 16:59:00 +0800
</p>
<p>GParted live 0.5.2-8
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. This release is based on the Debian Sid repository (as of 2010/Apr/14).
  </li><li>Some non-free, but distributable firmware was added.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 14 Apr 2010 11:40:00 +0800
</p>
<p>GParted live 0.5.2-7
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. This release is based on the Debian Sid repository (as of 2010/Apr/12).
  </li><li>Kernel 2.6.32-11 is used. //NOTE// From this version of kernel, most of the hard drive will be /dev/sda, /dev/sdb... no more /dev/hda, /dev/hdb...
  </li><li>Package live-initramfs was updated to be 1.177.2-1drbl-1.
  </li><li>Boot parameter gl_keymap is deprecated. Now with only "keyb" we can assign the keymap. E.g. for Germany keyboard, you can use "keyb=de".
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Mon, 12 Apr 2010 14:33:00 +0800
</p>
<p>GParted live 0.5.2-5
</p>
<ul>
  <li>Bug fixed: An issue about failing to load keymap for X when boot parameter keyb and gl_kbd are assigned.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 24 Mar 2010 18:02:00 +0800
</p>
<p>GParted live 0.5.2-3
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. This release is based on the Debian Sid repository (as of 2010/Mar/24).
  </li><li>Package live-initramfs was updated to be 1.177.1-1drbl-1.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 24 Mar 2010 13:50:00 +0800
</p>
<ul>
  <li>New GParted 0.5.2.
  </li><li>The underlying GNU/Linux operating system was upgraded. This release is based on the Debian Sid repository (as of 2010/Mar/09). Kernel 2.6.32-3 is used.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 09 Mar 2010 09:17:00 +0800
</p>
<p>GParted live 0.5.1-3
</p>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. This release is based on the Debian Sid repository (as of 2010/Feb/20). Kernel 2.6.32-2 is used.
  </li><li>A bug about nfs module failed to loaded was fixed. Thanks to sigpedag for this bug report.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sun, 21 Feb 2010 00:04:00 +0800
</p>
<p>GParted live 0.5.1-1
</p>
<ul>
  <li>New GParted 0.5.1.
  </li><li>The underlying GNU/Linux operating system was upgraded. This release is based on the Debian Sid repository (as of 2010/Jan/26).
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 26 Jan 2010 08:21:00 +0800
</p>
<p>GParted live 0.5.0-3
</p>
<ul>
  <li>Based on Debian sid repository (2009/Dec/06).
  </li><li>The patches files from Fedora 12 for parted 1.9.0 were applied. This should fix a problem about creating more than one partition inside the Linux software RAID device.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 6 Dec 2009 22:18:00 +0800
</p>
<p>GParted live 0.5.0-2
</p>
<ul>
  <li>Based on Debian sid repository (2009/Dec/04).
  </li><li>Package mdadm was added.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 4 Dec 2009 09:19:00 +0800
</p>
<p>GParted live 0.5.0-1
</p>
<ul>
  <li>New GParted 0.5.0.
  </li><li>Based on Debian sid repository (2009/Dec/03). Kernel 2.6.31-2 is used.
  </li><li>Package live-initramfs is updated to be 1.157.4-6drbl.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Thu, 3 Dec 2009 20:09:00 +0800
</p>
<p>GParted live 0.4.8-7
</p>
<ul>
  <li>Based on Debian sid repository (2009/Nov/18). Kernel 2.6.31-2 is used.
  </li><li>New feature: Now GParted live iso supports grub2 iso loopback boot. Check GParted website for how to edit your grub2 config file for this function.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 18 Nov 2009 18:31:00 +0800
</p>
<p>GParted live 0.4.8-5
</p>
<ul>
  <li>Package libparted 1.8.8 was removed.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Mon, 16 Nov 2009 10:52:00 +0800
</p>
<p>GParted live 0.4.8-4
</p>
<ul>
  <li>Based on Debian Sid repository (2009/Nov/13). Kernel 2.6.31-1 is used.
  </li><li>The package libparted is updated to libparted1.9 because a patch about commit-without-close was applied, and it should fix this issue <a href="https://bugzilla.gnome.org/show_bug.cgi?id=601574.">https://bugzilla.gnome.org/show_bug.cgi?id=601574.</a>
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Mon, 16 Nov 2009 10:21:00 +0800
</p>
<p>GParted live 0.4.8-3
</p>
<ul>
  <li>Based on Debian Sid repository (2009/Nov/13). Kernel 2.6.31-1 is used.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Fri, 13 Nov 2009 22:03:00 +0800
</p>
<p>GParted live 0.4.8-2
</p>
<ul>
  <li>Based on Debian Sid repository (2009/Nov/13).
  </li><li>The package libparted is downgraded to libparted1.8 due to a problem of libparted1.9 on Linux kernel 2.6.30.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Fri, 13 Nov 2009 13:16:00 +0800
</p>
<p>GParted live 0.4.8-1
</p>
<ul>
  <li>Based on Debian Sid repository (2009/Nov/03).
  </li><li>GParted is updated to 0.4.8.
  </li><li>The boot menu is more compact now.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 03 Nov 2009 09:42:00 +0800
</p>
<p>GParted live 0.4.7-1
</p>
<ul>
  <li>Based on Debian Sid repository (2009/Sep/26).
  </li><li>GParted is updated to 0.4.7.
  </li><li>gdisk is updated to 0.5.0.
  </li><li>A bug about mtools was unable to run correctly was fixed.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sat, 10 Oct 2009 23:13:00 +0800
</p>
<p>GParted live 0.4.6-4
</p>
<ul>
  <li>Based on Debian Sid repository (2009/Sep/26), since a bug in Squeeze preventing us to create a live system.
  </li><li>Kernel 2.6.30-7 is used.
  </li><li>Package parted and libparted is upgraded to version 1.9.0.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Fri, 26 Sep 2009 00:46:00 +0800
</p>
<p>GParted live 0.4.6-3
</p>
<ul>
  <li>Based on Debian Squeeze repository (2009/Sep/01).
  </li><li>Keep all the drivers of fs in the kernel.
  </li><li>Since Xdialog has been removed from squeeze due to the grave error, now zenity (gdialog) is used.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Tue, 01 Sep 2009 09:43:00 +0800
</p>
<p>GParted live 0.4.6-2
</p>
<ul>
  <li>Based on Debian Squeeze repository (2009/Aug/31).
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Mon, 31 Aug 2009 20:28:00 +0800
</p>
<p>GParted live 0.4.5-5
</p>
<ul>
  <li>Package vim-tiny was added. Thanks to Jojo de Leon for this suggestion.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sat, 25 Jul 2009 08:31:00 +0800
</p>
<p>GParted live 0.4.5-4
</p>
<ul>
  <li>Based on Debian lenny repository on 2009/Jul/22, and kernel 2.6.30-3 from backports.undebian.org is used.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 22 Jul 2009 23:21:00 +0800
</p>
<p>GParted live 0.4.5-3
</p>
<ul>
  <li>Based on Debian lenny repository on 2009/Jun/03, and kernel 2.6.29-5 from backports.undebian.org is used.
  </li><li>live-initramfs 1.157.2-1drbl is used.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Wed, 03 Jun 2009 23:16:00 +0800
</p>
<p>GParted live 0.4.5-2
</p>
<ul>
  <li>Based on Debian lenny repository on 2009/May/17, but kernel 2.6.29-4 from backports.undebian.org is used.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sun, 17 May 2009 16:06:00 +0800
</p>
<p>GParted live 0.4.5-1
</p><ul>
  <li>New GParted 0.4.5.
  </li><li>Program isolinux/syslinux 3.80 is used.
  </li><li>Program makeboot.sh was polished. Now syslinux is run without "-s" so the created USB flash drive can boot faster.
  </li><li>From this version, the released iso file is "isohybrided". Therefore you
  can use cat or dd to write the iso file to USB flash drive or hard drive.  For more info, refer to <a href="http://syslinux.zytor.com/wiki/index.php/Doc/isolinux#HYBRID_CD-ROM.2FHARD_DISK_MODE">http://syslinux.zytor.com/wiki/index.php/Doc/isolinux#HYBRID_CD-ROM.2FHARD_DISK_MODE</a>.  ///NOTE/// By doing dd or cat the iso file to your USB flash drive or hard drive, ALL THE DATA ON YOUR FLASH DRIVE OR HRAD DRIVE WILL BE OVERWRITTEN! You have been warned!
  </li><li>A boot parameter live-netdev was add in live-initramfs so it can be used to assign the network device to get filesystem.squashfs when using with PXE server.
  </li><li>Bug fixed - Unable to eject CD when rebooting.
  
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sat, 09 Apr 2009 10:03:00 +0800
</p>
<p>GParted live 0.4.4-2
  
</p><ul>
  <li>Kernel 2.6.29-3 is used now.
</li></ul>
<p> -- Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;  Sun, 26 Apr 2009 14:23:00 +0800
</p>
<ul>
  <li>0.4.4-1
  <ul>
    <li>New upstream GParted 0.4.4.
  </li></ul>
  </li><li>0.4.3-4
  <ul>
    <li>A boot parameter "noprompt" was added to "To RAM" boot menu so that it's not required to wait for confirmation during halting or rebooting.
    </li><li>Forcevideo was improved to work with some higher resolution modes. Thanks to pstein for this idea.
    </li><li>/usr/bin/xxd was added.
  </li></ul>
  </li><li>0.4.3-3
  <ul>
    <li>Font size of desktop icons was changed to be smaller in gparted live.
  </li></ul>
  </li><li>0.4.3-2
  <ul>
    <li>Based on stable Debian Lenny (repository on Feb/26/2009)
    </li><li>Created by live helper 1.0.4, and live initramfs 1.156.1 is used.
  </li></ul>
  </li><li>0.4.3-1
  <ul>
    <li>Based on Debian Lenny repository on Feb/13/2009 with linux kernel 2.6.26-13.
    </li><li>New upstream GParted 0.4.3.
    </li><li>Created by live helper 1.0.3, and live initramfs 1.156.1 is used.
  </li></ul>
  </li><li>0.4.1-svn1
  <ul>
    <li>Based on Debian Lenny repository on Jan/31/2009 with linux kernel 2.6.26-13.
    </li><li>GParted 0.4.2 pre-release (<a href="http://gparted.sourceforge.net/gparted-0.4.1-svn.tar.bz2">http://gparted.sourceforge.net/gparted-0.4.1-svn.tar.bz2</a>) is used.
  </li></ul>
  </li><li>0.4.1-2
  <ul>
    <li>Based on Debian Lenny repository on Dec/28/2008 with linux kernel 2.6.26-12.
  </li></ul>
  </li><li>0.4.1-1
  <ul>
    <li>New upstream GParted 0.4.1.
    </li><li>Based on Debian Lenny repository on Nov/30/2008 with linux kernel 2.6.26-10.
  </li></ul>
  </li><li>0.4.0-1
  <ul>
    <li>New GParted 0.4.0.
    </li><li>Based on Debian Lenny repository on Nov/29/2008 with linux kernel 2.6.26-10.
  </li></ul>
  </li><li>0.3.9-13
  <ul>
    <li>MC_HxEd for GParted live was added. See <a href="http://gparted-forum.surf4.info/viewtopic.php?pid=10421#p10421">http://gparted-forum.surf4.info/viewtopic.php?pid=10421#p10421</a> for more details. Thanks to cmdr for providing this GPL program.
  </li></ul>
  </li><li>0.3.9-12
  <ul>
    <li>Based on Debian Lenny repository on Nov/22/2008. Newer kernel 2.6.26-10.
    </li><li>Package cryptsetup was added in create-gparted-live. Thanks to Bodo P. Schmitz for this idea.
  </li></ul>
  </li><li>0.3.9-10
  <ul>
    <li>Based on repository of Debian lenny on Nov/12/2008.
    </li><li>Partimage was added. Thanks to James T Leland for this bug report.
  </li></ul>
  </li><li>0.3.9-9
  <ul>
    <li>Based on repository of Debian lenny on Nov/03/2008.
  </li></ul>
  </li><li>0.3.9-8
  <ul>
    <li>Based on repository of Debian lenny on Oct/27/2008.
  </li></ul>
  </li><li>0.3.9-7
  <ul>
    <li>Use -b 1024k when creating squashfs filesystem. This makes image file smaller.
    </li><li>Force to load module psmouse.
    </li><li>Some minor bugs were fixed.
  </li></ul>
  </li><li>0.3.9-5
  <ul>
    <li>Instead of entering X automatically, we can choose to configure xorg.conf first.
    </li><li>New mechanism to start gparted live: rc2.d/S99start-gparted-live. Two more boot parameters gl_numlk and gl_capslk were added to control numlock and scrlock.
    </li><li>Packages ifupdown and dhcp3-client was added in gparted live, so network config can be done now.
  </li></ul>
  </li><li>0.3.9-4
  <ul>
    <li>OS was minor updated. Use the repository of Debian lenny on Oct/1/2008.
  </li></ul>
  </li><li>0.3.9-3
  <ul>
    <li>Newer kernel 2.6.26-5.
  </li></ul>
  </li><li>0.3.9-2
  <ul>
    <li>Package hfsprogs was added. Thanks to Curtis Gedak.
  </li></ul>
  </li><li>0.3.9-1
  <ul>
    <li>New GParted 0.3.9.
    </li><li>VGA 1024x768 is used for framebuffer when booting.
    </li><li>The icon of USB on desktop was removed since it does not fit the way USB flash drive was made.
  </li></ul>
  </li><li>0.3.8-9
  <ul>
    <li>3 boot parameters were added: gl_lang, gl_kbd, and gl_batch. Example: "gl_lang=en_US gl_kbd=NONE gl_batch" will use en_US.UTF-8 locale and do nothing about keyboard mapping change, and with gl_batch, gparted live won't wait for entering key before enter X.
  </li></ul>
  </li><li>0.3.8-8
  <ul>
    <li>New kernel 2.6.26.
    </li><li>Latest programs from Debian Lenny on 28/Aug/2008.
  </li></ul>
  </li><li>0.3.8-5
  <ul>
    <li>Bug fixed: We should keep more kernel driver modules in GParted live, especially acpi...
  </li></ul>
  </li><li>0.3.8-4
  <ul>
    <li>Updated with newer live-initramfs.
  </li></ul>
  </li><li>0.3.8-3
  <ul>
    <li>Bug fixed: fetch=tftp,http should be logged.
  </li></ul>
  </li><li>0.3.8-2
  <ul>
    <li>Updated with latest Debian Lenny. Therefore newer kernel 2.6.25-2-486 is used.
    </li><li>Support fetch=t<a href="ftp://">ftp://</a>$IP/filesystem.squashfs function for PXE booting.
  </li></ul>
  </li><li>0.3.8-1
  <ul>
    <li>New GParted 0.3.8.
    </li><li>Bug fixed: When rebooting/halting, suppress the error messages about live system umounting.
  </li></ul>
  </li><li>0.3.7-7
  <ul>
    <li>Bug fixed: Forcevideo was broken.
    </li><li>Newer kernel 2.6.24-1-486 (2.6.24-7) is used.
  </li></ul>
  </li><li>0.3.7-5
  <ul>
    <li>X was updated to be 7.3 in Debian lenny, so "dpkg-reconfigure xserver-xorg" won't ask about VGA driver and resolution. They are automatically detected. A program grandr was added so that the screen resolution could be tuned dynamically.
  </li></ul>
  </li><li>0.3.7-2
  <ul>
    <li>Network modules were added so that PXE booting will work.
  </li></ul>
  </li><li>0.3.7-1
  <ul>
    <li>New GParted 0.3.7.
    </li><li>Based on Debian Lenny.
  </li></ul>
  </li><li>0.3.6-9
  <ul>
    <li>Newer kernel: 2.6.24-etchnhalf.1-486 (2.6.24~6)
  </li></ul>
  </li><li>0.3.6-8
  <ul>
    <li>New kernel from EtchAndAHalf is used: 2.6.24-etchnhalf.1-486 (2.6.24~5)
    </li><li>All the files in /var/log/ are not removed now, just make their sizes 0.
  </li></ul>
  </li><li>0.3.6-7
  <ul>
    <li>Live maintainer message was added in boot menu.
  </li></ul>
  </li><li>0.3.6-6
  <ul>
    <li>More messages were added in Forcevideo.
  </li></ul>
  </li><li>0.3.6-5
  <ul>
    <li>Bug fixed: /usr/sbin and /sbin should be in the system PATH so that casper can just run it. Thanks to Curtis Gedak.
  </li></ul>
  </li><li>0.3.6-4
  <ul>
    <li>A smaller font ttf-arphic-newsung instead of ttf-arphic-uming is used now.
  </li></ul>
  </li><li>0.3.6-3
  <ul>
    <li>mtools was added.
    </li><li>/sbin/vol_id is linked to /lib/udev/vol_id.
    </li><li>pciutils, discover1, xresprobe and mdetect were added so it's easier to detect hardware.
  </li></ul>
  </li><li>0.3.6-2
  <ul>
    <li>Forcevideo script was added so that it's easier to configure X.
  </li></ul>
  </li><li>0.3.6-1
  <ul>
    <li>Initial release for GParted 0.3.6.
  </li></ul>
</li></ul>
<p>Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;</p>

</body>
</html>
