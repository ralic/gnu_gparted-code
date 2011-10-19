<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

<head>
  <title>GParted -- Status</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="content">
<h1>Development Status</h1>
<p>
Work on the GParted application is managed by Curtis Gedak.<br>
Work on the GParted Live image is managed by Steven Shiau.
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

<h2>Source Code Repository</h2>
<p>
The source code for GParted is managed under the Gnome git repository.
You can <a href="http://git.gnome.org/cgit/gparted/">browse</a> the
git repository visually, or read
instructions <a href="http://live.gnome.org/Git/Developers">here</a>.<br>
<br>
For those trying to compile GParted from the git repository see:<br>
<a href="http://gparted-forum.surf4.info/viewtopic.php?id=14136">How to Build GParted from git Source Code Repository</a>
</p>

<h2>Communication</h2>
<p>
The <a href="forum.php">forum</a> is used extensively for
communication.<br>
<br>
<a href="http://quad/gparted/htdocs/bugs.php">Bugs</a> are reported and tracked using the Gnome bugzilla bug tracking system.
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
stay true to the GParted <a href="index.php#mission-statement">mission
statement</a>.
</p>

<h2>Coding Style</h2>
<p>
There are no hard and fast coding standards for GParted.  For now we
prefer code enhancements to match the surrounding coding style.
</p>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
