<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

<head>
  <title>GParted -- How to Help</title>
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
<h1>How to help</h1>
<h3>Bugs</h3>
<p>
Properly filed bugs are a great help while developing software.<br>
The bugs page can be found <a href="http://gparted.sourceforge.net/bugs.php">here</a>.
</p>
<h3>Forum</h3>
<p>
The forums are the first place to ask and receive support. It would be great if users would help each other.<br>
This is also the place to ask for and discuss new features.<br>
Sign up and join the fun <a href="http://gparted.sourceforge.net/forum.php">here</a>.
</p>
<h3>Language Translation</h3>
<p>
Translating GParted to your language is a valuable task that enables even more people to comfortably use GParted.<br>
Learn more about the GNOME Translation Project <a href="http://live.gnome.org/TranslationProject/">here</a>.<br>
View the status of GParted language translation <a href="http://l10n.gnome.org/module/gparted/">here</a>.
</p>
<h3>Coding</h3>
<p>
GParted is written in <a href="http://en.wikipedia.org/wiki/C%2B%2B">C++</a> and uses
<a href="http://gtkmm.org/" target="new">gtkmm</a>
for its Graphical User Interface (GUI).
The general approach is to keep the GUI as simple as possible.
We strive to conform to the
<a href="http://library.gnome.org/devel/hig-book/stable/" target="new">GNOME Human Interface Guidelines</a>.
We try to keep the source code as maintainable as is reasonably
possible.
We seek to stay true to the GParted <a href="index.php#mission-statement">mission statement</a>.<br>
<br>
GParted uses
<a href="http://www.gnu.org/software/parted/" target="new">GNU libparted</a>
to detect and manipulate devices and partition tables.
Several optional file system tools provide support for file systems
not included in libparted.<br>
<br>
You can <a href="http://git.gnome.org/cgit/gparted/">browse</a> 
the git repository visually,
or read instructions <a href="http://live.gnome.org/Git/Developers">here</a>.<br>
<br>
Please let me know if you want to help developing GParted. It might be a good idea to look at 
<a href="http://bugzilla.gnome.org/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;classification=Other&amp;product=gparted&amp;long_desc_type=substring&amp;long_desc=&amp;status_whiteboard_type=allwordssubstr&amp;status_whiteboard=&amp;keywords_type=allwords&amp;keywords=&amp;bug_status=UNCONFIRMED&amp;bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;bug_status=NEEDINFO&amp;emailassigned_to1=1&amp;emailtype1=substring&amp;email1=&amp;emailassigned_to2=1&amp;emailreporter2=1&amp;emailqa_contact2=1&amp;emailcc2=1&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">outstanding bugs</a> or search the source for 'FIXME' or 'TODO'.<br>
</p>
<h3>Donations</h3>
<p>
Another way to contribute is to make a donation to the GParted project.  For
details on donations please refer to our
<a href="http://gparted.sourceforge.net/donations.php">donations page</a>.

<br>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
