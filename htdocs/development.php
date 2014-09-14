<?
include "functions.php";
webpage_init();
?>
<html>

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

<h2>Building GParted</h2>
<p>
Briefly, the commands to build and install GParted into the default
location of /usr/local are:
</p>
<pre>
  ./configure
  make
  sudo make install
</pre>
<p>
This assumes all the dependencies are already installed and builds the
default configuration.
</p>
<p>
More information on dependencies and configuration options can be
found in the "Building from Source" section of the <a
href="http://git.gnome.org/browse/gparted/tree/README">README</a>
file.
</p>

<h2>Source Code</h2>
<p>
The source code for GParted is managed under the GNOME git repository.<br>
<br>
<a href="http://git.gnome.org/cgit/gparted/">Browse</a> git visually
or read <a href="http://live.gnome.org/Git/Developers">GNOME git
instructions</a>.<br>
<br>
For those interested in the leading edge of GParted development, see
<a href="git.php">Developing GParted using Git</a>.
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
statement</a>.<br>
<br>
We try to ensure that the GParted will compile and run on the
currently supported versions of many major GNU/Linux distributions
(distros).  Distros we often include in our testing include:
<a href="http://en.wikipedia.org/wiki/CentOS">Centos/RHEL</a>,
<a href="http://en.wikipedia.org/wiki/Debian">Debian</a>,
<a href="http://en.wikipedia.org/wiki/Fedora_%28operating_system%29">Fedora</a>,
<a href="http://en.wikipedia.org/wiki/OpenSUSE">openSUSE</a>, and
<a href="http://en.wikipedia.org/wiki/Ubuntu_%28operating_system%29">Ubuntu</a>.
<br>
<br>
To help guide graphical interface design, we use 800x600 as our target
minimum screen resolution.
</p>

<h2>Coding Style</h2>
<p>
There are no hard and fast coding standards for GParted.  For now we
prefer code enhancements to match the surrounding coding style.<br>
<br>
Having said that, the existing code base contains a mixture of
indentation and alignment schemes which use various combinations of
tabs and spaces.  This is messy.<br>
<br>
For patches and for new code we prefer to use tabs for indentation and
spaces for alignment.  For details on this "smart tab" alignment
scheme, please refer to the following links:
</p>
<ul>
  <li><a href="http://www.emacswiki.org/SmartTabs">Smart Tabs in
    Emacs</a></li>
  <li><a href="http://vim.wikia.com/wiki/Indent_with_tabs,_align_with_spaces">Indent
    with Tabs, Align with Spaces in Vim</a></li>
</ul>

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
