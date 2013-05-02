<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

<head>
  <title>GParted -- Download</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="content">
<h1>Downloads</h1>

<div class="right">
  <?
    include "google/dp-160x600-rhs-near-top.inc";
  ?>
</div>

<p>
GParted is a free partition manager that enables you to resize, copy,
and move partitions without data loss.<br>
<br>
The best way to access all of the <a href="features.php">features</a>
of the GParted application is by using the GParted Live bootable
image.  GParted Live enables you to use GParted on GNU/Linux as well
as other operating systems, such as Windows or Mac OS X.
</p>

<table border=0><tr><td>
<div class="caution">
<p class="hangcaution">
<b>CAUTION</b>: &nbsp; 
Editing partitions has the potential to cause <b><u>LOSS of DATA</u></b>.<br>
You are advised to <b><u>BACKUP your DATA</u></b> before using gparted.<br>
</p>
</div>
</td></tr></table>

<h2>Download Links</h2>

<p>
<a href="donations.php"><img src="images/btn_donate_LG.gif" border="0" alt="Donate to GParted" style="float: left; padding-right: 20px;"></a>
If you use GParted and it helps you with your task, then please consider making
a donation to help us make GParted better.<br>
</p>

<table border=0><tr><td>
<div class="note">
<p class="hangnote">
<b>NOTE</b>: &nbsp; GParted Live is available in three different
architectures
</p>
<table border=0 style="font-size: smaller; valign: top;">
  <tr style="valign: top;">
    <td valign="top"><b>i486</b></td>
    <td valign="top">
    - 32-bit version runs on x86 and x86-64 based computers, limited
      to physical address space of 4 gigabytes, and uses one processor
      only.<br>
      &nbsp; &nbsp; <b><i>If in doubt, try this one first.</i></b>
    </td>
  </tr>
  <tr>
    <td valign="top"><b>i686-PAE</b></td>
    <td valign="top">
    - 32-bit version runs on x86 (i686 and higher) and x86-64 based
      computers, with <b>P</b>hysical <b>A</b>ddress <b>E</b>xtenstion
      to access more than 4 gigabytes of memory, and supports use of
      multiple processor cores.
    </td>
  </tr>
  <tr>
    <td valign="top"><b>amd64</b></td>
    <td valign="top">
    - 64-bit version runs on x86-64 based computers, with ability to
      access more than 4 gigabytes of memory, and supports use of
      multiple processor cores.
    </td>
  </tr>
</table>
</div>
</td></tr></table>

<br>

<table border="1px" cellpadding="5px">
  <tr>
    <th colspan="4">
      GParted Live CD/USB/HD/PXE Bootable Image
    </th>
  </tr>

  <tr>
    <th colspan="4">
      Stable Releases
    </th>
  </tr>

  <tr>
    <td>
      <a href="http://sourceforge.net/projects/gparted/files/gparted-live-stable/0.16.1-1/gparted-live-0.16.1-1-i486.iso">Download gparted-live-0.16.1-1-i486.iso</a><br>
      <br>
      <a href="http://sourceforge.net/projects/gparted/files/gparted-live-stable/">Stable directory (.iso/.zip)</a>
    </td>
    <td valign="top">
      <a href="http://free.nchc.org.tw/gparted-live/stable/RELEASE-NOTES-GParted-live.txt" target=_blank>Release notes</a>
    </td>
    <td valign="top">
      <a href="http://free.nchc.org.tw/gparted-live/stable/ChangeLog-GParted-live.txt" target=_blank>Changelog</a>
    </td>
    <td valign="top">
      <a href="http://free.nchc.org.tw/gparted-live/stable/CHECKSUMS.TXT" target=_blank>Checksums</a>
    </td>
  </tr>

  <tr>
    <th colspan="4">
      Testing Releases
    </th>
  </tr>

  <tr>
    <td>
      <a href="http://sourceforge.net/projects/gparted/files/gparted-live-testing/">Testing directory (.iso/.zip)</a>
    </td>
    <td>
      <a href="http://free.nchc.org.tw/gparted-live/testing/RELEASE-NOTES-GParted-live.txt" target=_blank>Release notes</a>
    </td>
    <td>
      <a href="http://free.nchc.org.tw/gparted-live/testing/ChangeLog-GParted-live.txt" target=_blank>Changelog</a>
    </td>
    <td>
      <a href="http://free.nchc.org.tw/gparted-live/testing/CHECKSUMS.TXT" target=_blank>Checksums</a>
    </td>
  </tr>
</table>

<br>

<table border="1px" cellpadding="5px">
  <tr>
    <th colspan="2">
      GParted Application Source Code
    </th>
  </tr>
  <tr>
    <td>
      <a href="http://sourceforge.net/projects/gparted/files/gparted/">Source code directory (.tar.bz2)</a>
    </td>
    <td>
      Release notes and checksums in same directory.
    </td>
  </tr>
</table>

<br>

<table border="1px" cellpadding="5px">
  <tr>
    <th>
      Linux Distribution
      <a href="#distribution-note">*</a>
    </th>
    <th>
      Package
    </th>
    <th>
      Command Prompt Install
    </th>
  </tr>

  <tr>
    <th>
      Debian
    </th>
    <td>
      <a href="http://packages.debian.org/search?keywords=gparted">gparted</a>
    </td>
    <td>
      <pre>sudo apt-get install gparted</pre>
    </td>
  </tr>

  <tr>
    <th>
      Fedora
    </th>
    <td>
      <a href="http://koji.fedoraproject.org/koji/packageinfo?packageID=1950">gparted</a>
    </td>
    <td>
      <pre>su -c "yum install gparted"</pre>
    </td>
  </tr>

  <tr>
    <th>
      OpenSUSE
    </th>
    <td>
      <a href="http://software.opensuse.org/package/gparted">gparted</a>
    </td>
    <td>
      <pre>sudo zypper install gparted</pre>
    </td>
  </tr>

  <tr>
    <th>
      Ubuntu
    </th>
    <td>
      <a href="https://apps.ubuntu.com/cat/applications/gparted/"><img src="http://developer.ubuntu.com/wp-content/uploads/2012/06/downloadonubuntubutton.png" title="Download for Ubuntu" alt="Download for Ubuntu button" width="122" height="49"></a>
    </td>
    <td>
      <pre>sudo apt-get install gparted</pre>
    </td>
  </tr>
</table>

<a name="distribution-note"></a>
<p>
&nbsp; &nbsp; * NOTE: Distribution packages might not contain the most
recent versions of GParted.
</p>

<table border="1px" cellpadding="5px">
  <tr>
    <th>
      Old GParted Live Images (not recommended)
    </th>
  </tr>
  <tr>
    <td>
      <a href="http://sourceforge.net/projects/gparted/files/old-gparted-livecd/">Old LiveCD (0.0.9-alpha1 to 0.3.4-11) release directory</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="http://sourceforge.net/projects/gparted/files/old-gparted-liveusb/">Old LiveUSB (0.2.5-2 to 0.3.1-1) release directory</a>
    </td>
  </tr>
</table>


<br>

<table border=0><tr><td>
<div class="tip">
<p class="hangtip">
<b>TIP</b>: &nbsp; Problems booting GParted Live image?
See <a href="http://gparted.org/display-doc.php?name=gparted-live-manual&lang=C#gparted-live-tips-on-booting-gparted-live">Tips on Booting GParted Live</a>.<br>
</p>
</div>
</td></tr></table>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
