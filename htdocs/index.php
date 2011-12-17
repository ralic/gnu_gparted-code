<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

<head>
  <title>GParted -- About</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="rightbox">
	<b>Latest release:</b><br>
	<a href="http://sourceforge.net/projects/gparted/files/gparted/gparted-0.11.0/">GParted 0.11.0</a><br>
	<a href="http://sourceforge.net/projects/gparted/files/gparted-live-stable/0.11.0-7/">Live 0.11.0-7</a>
	</div>
<div class="content">

<h1>Gnome Partition Editor</h1>
<p>
GParted is a free partition editor for graphically managing your disk
partitions.<br>
<br>
With GParted you can resize, copy, and move partitions without data
loss, enabling you to:<br>
</p>
<ul>
  <li class="step">Grow or shrink your C: drive
    <div class="right">
      <?
        include "google/hp-336x280-rhs-near-features.inc";
      ?>
    </div>
  </li>
  <li class="step">Create space for new operating systems</li>
  <li class="step">Attempt data rescue from lost partitions</li>
</ul>
<p>
Learn more now about GParted <a href="features.php">features</a>, read
the latest <a href="news.php">news</a>, or
view <a href="screenshots.php">screenshots</a> of GParted in action.
</p>
<h2>Requirements</h2>
<p>
GParted can be used on x86 based computers running Linux, Windows, or
Mac OS X by booting from media containing <a href="livecd.php">GParted
Live</a>.  A minimum of 128 MB of RAM is needed to use all of the
<a href="features.php">features</a> of the GParted application.
</p>
<h2>Free Software</h2>
<p>
GParted is <a href="http://en.wikipedia.org/wiki/Free_software">free
software</a>.<br>
You have the freedom to run, copy, distribute, study, change, and
improve GParted.<br>
You do not have to pay money to use GParted.<br>
GParted is distributed under the
<a href="http://www.gnu.org/licenses/gpl.html" target=new>GNU General Public License</a> version 2 or (at your option) any later version.
</p>

</div>
<? gnome_foot() ?>

</div>
</body>
</html>
