<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

<head>
  <title>GParted -- Development</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="content">
<h1>Development</h1>
<p>
Following is a high level view of how development is guided and
managed on the GParted project.<br>
<br>
Work on the GParted application is managed by Curtis Gedak.<br>
Work on the GParted Live image is managed by Steven Shiau.
</p>

<a name="mission-statement"></a>
<h2>Mission Statement</h2>
<p>
The goal of GParted is to provide an easy way to graphically manage
disk device partitions, without unintended loss of data, through the
use of <a href="http://www.gnu.org/software/parted/">GNU libparted</a>
and other <a href="http://en.wikipedia.org/wiki/Free_software">free
software</a> file system tools.
</p>

<h2>Source Code Repository</h2>
<p>
The source code for GParted is managed under the GNOME git repository.<br>
See the <a href="git.php">GParted git</a> page for more information.
</p>

<h2>Releases</h2>
<p>
Plans for new releases of GParted can be found in
the <a href="http://gparted-forum.surf4.info/viewforum.php?id=4">General
Development</a> forum.<br>
<br>
We strive to create new releases of GParted about every 2 months.
Having said that, we will create a new release in a much shorter time
frame, especially if needed to fix critical bugs.
</p>

<h2>Communication</h2>
<p>
The <a href="forum.php">forum</a> is used extensively for
communication.<br>
<br>
<a href="bugs.php">Bugs</a> are reported and tracked using the Gnome bugzilla bug tracking system.
</p>

<h2>Application Development Guidelines</h2>
<p>
GParted is written
in <a href="http://en.wikipedia.org/wiki/C%2B%2B">C++</a> and uses
<a href="http://gtkmm.org/" target="new">gtkmm</a> for the Graphical
User Interface (GUI).<br>
<br>
GParted uses
<a href="http://www.gnu.org/software/parted/" target="new">GNU libparted</a>
to detect and manipulate devices and partition tables.
Several optional file system tools provide support for file systems
not included in libparted.<br>
<br>
The general approach is to keep the GUI as simple as possible.  We
strive to conform to the
<a href="http://library.gnome.org/devel/hig-book/stable/"
target="new">GNOME Human Interface Guidelines</a>.  We try to keep the
source code as maintainable as is reasonably possible.  We seek to
stay true to the GParted <a href="#mission-statement">mission
statement</a>.
</p>

<h2>Coding Style</h2>
<p>
There are no hard and fast coding standards for GParted.  For now we
prefer code enhancements to match the surrounding coding style.
</p>

<h2>Artwork</h2>
<p>
Creative designs can be found on the <a href="artwork.php">artwork</a>
page.
</p>

<h2>Other Ways to Help</h2>
<p>
There are many ways to contribute to the GParted project that do not
involve developing code. See the <a href="howtohelp.php">how to
help</a> page.
</p>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
