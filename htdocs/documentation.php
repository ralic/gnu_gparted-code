<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

<head>
  <title>GParted -- Documentation</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
//meter();
gnome_head();
gnome_menu();
?>
<div class="content">
<h1>Documentation</h1>

<h3>Application Help</h3>
  <table border="1">
    <tr> 
      <td>
        <img src="flags/UK.png" alt="English documentation"
             width="28" height="16" border="0"> English
      </td>
      <td>
        <img src="flags/French.png" alt="Documentation français"
             width="28" height="16" border="0"> Français
      </td>
      <!-- Placeholder for Spanish translation
      <td>
        <img src="flags/Spanish.png" alt="Documentación española"
             width="28" height="16">Español
      </td>
      -->
    </tr>
    <tr>
      <td><a href="docs/help-manual/C/gparted.html">Help manual</a></td>
      <td><a href="docs/help-manual/fr/gparted.html">Aide manuel</a></td>
      <!-- Placeholder for Spanish translation
      <td><a href="">Ayuda manual</a></td>
      -->
    </tr>
    <tr>
      <td><a href="docs/man-page/C/gparted.8.html">Man page</a></td>
      <td><a href="docs/man-page/fr/gparted.8.html">Page de manuel</a>
      </td>
      <!-- Placeholder for Spanish translation
      <td><a href="">Página de hombre</a></td>
      -->
    </tr>
  </table>

<h3>GParted Live Howto Guides</h3>
  <p>        
    <a href="./liveusb.php">How to put GParted live on USB</a>
    <br>
    <a href="./livepxe.php">How to put GParted live on a PXE server</a>
    <br>
    <a href="./livehd.php">How to put GParted live on a hard drive</a>
    <br>
    <a href="./create-gparted-live.php">How to create GParted live from scratch</a>
  </p>

<H3>Third Party Docs</H3>
  <ul>
    <li><a href="http://www.dedoimedo.com/computers/gparted.html">GParted
    partitioning software - Full Tutorial</a></li>
    <li><a href="http://www.howtogeek.com/howto/windows-vista/using-gparted-to-resize-your-windows-vista-partition/">Using
    GParted to Resize Your Windows Vista Partition</a></li>
    <li><a href="http://en.wikipedia.org/wiki/GParted">GParted Wikipedia
    Doc</a></li>
  </ul>


<H3>Howto Guides (Old)</H3>
    <P>LarryT created the following documentation.<br>
    Any assistance with updating would be appreciated.</P>
    GParted 0.3-1 - Last update : 
    <!-- #BeginDate format:Am3 -->06/01/2007<!-- #EndDate -->
    - Derni&egrave;re mise &agrave; jour : 
    <!-- #BeginDate format:Ge1 -->01.06.2007<!-- #EndDate -->
    <br>
    <table width="53%"  border="1">
      <tr> 
        <td width="49%"><div align="center"><strong>GLOBAL</strong></div></td>
        <td colspan="2"> <div align="center"></div>
          <div align="center"><img src="flags/UK.png" alt="English documentation" width="28" height="16" border="0"></div></td>
        <td colspan="2"> <div align="center"></div>
          <div align="center"><img src="flags/French.png" alt="Documentation fran�ise" width="28" height="16" border="0"></div></td>
        <td colspan="2"><div align="center"><img src="flags/Spanish.png" alt="Documentación española" width="28" height="16"></div></td>
      </tr>
      <tr> 
        <td>General Information about GParted</td>
        <td width="10%"><div align="center"><a href="http://gparted.sourceforge.net/larry/generalities/gparted.htm">HTML</a></div></td>
        <td width="7%"><div align="center"><a href="larry/generalities/pdf/Generalities.pdf" target="_blank">PDF</a></div></td>
        <td width="10%"><div align="center"><a href="http://gparted.sourceforge.net/larry/generalities/gparted-fr.htm">HTML</a></div></td>
        <td width="7%"> <div align="center"><a href="larry/generalities/pdf/Generalities_fr.pdf" target="_blank">PDF</a></div></td>
        <td width="9%"><a href="larry/generalities/gparted-es.htm">HTML</a></td>
        <td width="8%">&nbsp;</td>
      </tr>
      <tr> 
        <td>Resizing partitions with GParted</td>
        <td><div align="center"><a href="http://gparted.sourceforge.net/larry/resize/resizing.htm">HTML</a></div></td>
        <td><div align="center"><a href="larry/resize/pdf/Resizing.pdf" target="_blank">PDF</a></div></td>
        <td><div align="center"><a href="http://gparted.sourceforge.net/larry/resize/resizing-fr.htm">HTML</a></div></td>
        <td> <div align="center"><a href="larry/resize/pdf/Redimentionner.pdf" target="_blank">PDF</a></div></td>
        <td><a href="larry/resize/resizing-es.htm">HTML</a></td>
        <td>&nbsp;</td>
      </tr>
      <tr> 
        <td>Copying/Moving with GParted</td>
        <td><div align="center"><a href="larry/move/move.htm" target="_blank">HTML</a></div></td>
        <td><div align="center"><a href="larry/move/pdf/copying.pdf" target="_blank">PDF</a></div></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><a href="larry/move/move-es.htm">HTML</a></td>
        <td>&nbsp;</td>
      </tr>
      <tr> 
        <td>The GParted LiveCD 0.3-1</td>
        <td><div align="center"><a href="http://gparted.sourceforge.net/larry/livecd/main/livecd.htm">HTML</a></div></td>
        <td><div align="center"><a href="larry/livecd/main/pdf/LiveCD.pdf" target="_blank">PDF</a></div></td>
        <td><div align="center"><a href="http://gparted.sourceforge.net/larry/livecd/main/livecd-fr.htm">HTML</a></div></td>
        <td> <div align="center"><a href="larry/livecd/main/pdf/LiveCD-FR.pdf" target="_blank">PDF</a></div></td>
        <td><a href="http://gparted.sourceforge.net/larry/livecd/main/livecd-es.htm">HTML</a></td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <table width="54%"  border="1">
      <tr> 
        <td width="60%"><div align="center"><strong>TIPS</strong></div></td>
        <td colspan="2"> <div align="center"></div>
          <div align="center"><img src="flags/UK.png" alt="English documentation" width="28" height="16" border="0"></div></td>
        <td colspan="2"> <div align="center"></div>
          <div align="center"><img src="flags/French.png" alt="Documentation fran�ise" width="28" height="16" border="0"></div></td>
        <td colspan="2"><div align="center"><img src="flags/Spanish.png" alt="Documentación española" width="28" height="16"></div></td>
      </tr>
      <tr> 
        <td>Getting free space from partition</td>
        <td><div align="center"><a href="larry/tips/gfs.htm" target="_blank">HTML</a></div></td>
        <td width="8%"> <div align="center"><a href="larry/tips/pdf/gfs.pdf" target="_blank">PDF</a></div></td>
        <td width="6%">&nbsp;</td>
        <td width="5%">&nbsp;</td>
        <td width="6%"><a href="larry/tips/gfs-es.htm">HTML</a></td>
        <td width="6%">&nbsp;</td>
      </tr>
      <tr> 
        <td>Save gparted_details.htm file </td>
        <td width="9%"><div align="center"><a href="larry/tips/save_details.htm" target="_blank">HTML</a></div></td>
        <td width="8%"><div align="center"><a href="larry/tips/pdf/save_details.pdf" target="_blank">PDF</a></div></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><a href="larry/tips/save_details-es.htm">HTML</a></td>
        <td>&nbsp;</td>
      </tr>
      <tr> 
        <td>Make screenshots</td>
        <td><div align="center"><a href="larry/tips/screenshot.htm" target="_blank">HTML</a></div></td>
        <td><div align="center"><a href="larry/tips/pdf/screenshot.pdf" target="_top">PDF</a></div></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><a href="larry/tips/screenshot-es.htm">HTML</a></td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <p>
      <br>
    </p>
<hr>
<H3>Related Docs</H3>
<p>
A collection of documents I used while working on several aspects of 
gparted.
<BR><BR>
<A href="http://www.gnu.org/software/parted/manual/">(lib)parted documentation</A>
<BR>
<A href="http://www.win.tue.nl/~aeb/linux/Large-Disk.html">Large Disk HOWTO</A>
<BR>
<A href="http://www.cs.auckland.ac.nz/~pgut001/pubs/secure_del.html">Secure Deletion of Data from Magnetic and Solid-State Memory</A>
<BR>
<A href="http://en.wikipedia.org/wiki/Comparison_of_file_systems">Comparison of filesystems</A>
<BR>
<A href="http://en.wikipedia.org/wiki/Master_boot_record">Master Boot Record</A>
<BR>
<A href="http://en.wikipedia.org/wiki/Extended_boot_record">Extended Boot Record</A>
<BR>
<A href="http://en.wikipedia.org/wiki/GUID_Partition_Table">GUID Partition Table</A>
<BR>
<A href="http://mirror.href.com/thestarman/asm/mbr/NTFSBR.htm">NTFS Boot Record Secrets</A>
<BR>
</P>
</div>

<? gnome_foot() ?>

</div>
</body>
</html>
