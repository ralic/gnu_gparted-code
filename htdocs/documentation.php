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
gnome_head();
gnome_menu();
?>
<div class="content">
<h1>Documentation</h1>

  <table border="0" cellpadding="5px">
    <tr>
      <th>GParted</th>
      <th>Translations</th>
    </tr>
    <tr>
      <td valign="top">
        <a href="display-doc.php?name=help-manual">GParted Manual</a>
      </td>
      <td valign="top">
        <a href="display-doc.php?name=help-manual&lang=cs">České</a>,
        <a href="display-doc.php?name=help-manual&lang=de">Deutsch</a>,
        <a href="display-doc.php?name=help-manual&lang=es">Español</a>,
        <a href="display-doc.php?name=help-manual&lang=fr">Français</a>,
        <a href="display-doc.php?name=help-manual&lang=it">Italiano</a>,
        <a href="display-doc.php?name=help-manual&lang=pt_BR">Português do Brasil</a>,
        <a href="display-doc.php?name=help-manual&lang=ro">Română</a>,
        <a href="display-doc.php?name=help-manual&lang=ru">русский</a>,
        <a href="display-doc.php?name=help-manual&lang=sr">српски</a>,
        <a href="display-doc.php?name=help-manual&lang=sr%40latin">Српске Латиница</a>
      </td>
    </tr>
    <tr>
      <td valign="top">
        <a href="display-doc.php?name=man-page">Manual Page</a>
      </td>
      <td valign="top">
        <a href="display-doc.php?name=man-page&lang=fr">Français</a>
      </td>
    </tr>
    <tr>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <th>GParted Live</th>
      <th>Translations</th>
    </tr>
    <tr>
      <td>
        <a href="display-doc.php?name=gparted-live-manual">GParted Live Manual</a>
      </td>
      <td> </td>
    </tr>
    <tr>
      <td><a href="liveusb.php">Install on USB</a></td>
      <td> </td>
    </tr>
    <tr>
      <td><a href="livepxe.php">Install on PXE Server</a></td>
      <td> </td>
    </tr>
    <tr>
      <td><a href="livehd.php">Install on Hard Disk</a></td>
      <td> </td>
    </tr>
    <tr>
      <td>
        <a href="create-gparted-live.php">Create GParted Live from Scratch</a>
      </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <th>General Information</th>
      <th>Translations</th>
    </tr>
    <tr>
      <td><a href="why-partition.php">Why Partition your Disk Device?</a></td>
      <td> </td>
    </tr>
  </table>

<H3>Book</H3>
  <div style="float: left;">
  <a href="http://www.packtpub.com/manage-disk-space-partitions-with-gparted/book">
  <img src="images/book-9823os-cover.jpg" alt="Manage Partitions with GParted How-to" title="Manage Partitions with GParted How-to">
  </a>
  </div>

  <p>
  <b><i><a href="http://www.packtpub.com/manage-disk-space-partitions-with-gparted/book">Manage
  Partitions with GParted How-to</a></i></b> is a practical, hands-on
  guide providing you with step-by-step instructions to effectively
  organize your hard drive.<br>
  <br>
  For more details and a sample chapter from the book, see
  <a href="display-doc.php?name=moving-space-between-partitions">Moving
  space between partitions</a>.<br>
  <br>
  For book reviews,
  see <a href="http://www.amazon.com/Manage-Partitions-GParted-Curtis-Gedak/product-reviews/184951982X">amazon.com</a>,
  <a href="http://techgage.com/news/dont-understand-drive-partitions-this-short-book-can-help/?utm_source=rss&utm_medium=rss&utm_campaign=dont-understand-drive-partitions-this-short-book-can-help">techgage.com</a>,
  <a href="http://blog.mwpreston.net/2013/01/13/book-review-manage-partitions-with-gparted-how-to-by-curtis-gedak/">mwpreston.net</a>,
  and <a href="http://www.garron.me/blog/manage-partitions-with-gparted-how-to.html">garron.me</a>.
  </p>

  <br style="clear: both;">

<?
  include "google/docp-728x90-under-title.inc";
?>

<H3>Third Party Docs</H3>
  <ul>
    <li><a href="articles.php">Tutorials, Reviews, and other Articles
    featuring GParted</a></li>
    <li><a href="http://en.wikipedia.org/wiki/GParted">GParted Wikipedia
    Doc</a></li>
    <li><a href="docs/sw-req-spec/C/Software_Requirements_Specification_-_GParted.pdf">Software Requirements Specification for GParted (PDF)</a></li>
  </ul>


<H3>Howto Guides (Old)</H3>
    <P>
    LarryT created some of the first documentation for GParted, which
    was last updated on 06/01/2007 and is no longer maintained.  See:
    <a href="http://gparted-livecd.tuxfamily.org/documentation.php">TuxFamily
    GParted-LiveCD documentation</a>
    </P>

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
<A href="http://thestarman.pcministry.com/asm/mbr/NTFSBR.htm">NTFS Boot Record Secrets</A>
<BR>
</P>
</div>

<? gnome_foot() ?>

</div>
</body>
</html>
