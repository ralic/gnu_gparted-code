<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

<head>
  <title>GParted -- A free application for graphically managing disk
    device partitions</title>

<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="rightbox">
	<b>Stable release:</b><br>
	<a href="http://sourceforge.net/projects/gparted/files/gparted/gparted-0.18.0/">GParted 0.18.0</a><br>
	<a href="http://downloads.sourceforge.net/gparted/gparted-live-0.18.0-1-i486.iso">Live 0.18.0-1</a>
	</div>
<div class="content">

<h1>About</h1>
<p>
GParted is a free partition editor for graphically managing your disk
partitions.<br>
<br>
With GParted you can resize, copy, and move partitions without data
loss, enabling you to:<br>
</p>
<ul>
  <li class="step">Grow or shrink your C: drive</li>
  <li class="step">Create space for new operating systems</li>
  <li class="step">Attempt data rescue from lost partitions</li>
</ul>

<a href="screens/gparted_1_big.png">
  <img src="screens/gparted_1_small.png" alt="GParted Main screen"
        height="163px" class="left">
</a>

<h2>Discover More</h2>
<ul>
  <li class="nobullet">
    Learn <a href="why-partition.php">why partition your disk
    device</a>.
  </li>
  <li class="nobullet">
    Explore the <a href="documentation.php">documentation</a>
    and <a href="faq.php">FAQ</a>.
  </li>
  <li class="nobullet">
    Get <a href="help.php">help</a> with disk partitioning.
  </li>
  <li class="nobullet">
    View <a href="screenshots.php">screenshots</a> of GParted in action.
  </li>
</ul>

<div class="right">
  <?
    include "google/hp-336x280-rhs-near-features.inc";
  ?>
</div>

<a name="features"></a>
<h2>Features</h2>
<ul>
  <li class="step">Perform actions with partitions such as:
    <ul>
      <li>create or delete</li>
      <li>resize or move</li>
      <li>check</li>
      <li>label</li>
      <li>set new UUID</li>
      <li>copy and paste</li>
    </ul>
  </li>

  <li class="step">Manipulate file systems such as:
    <ul>
      <li>btrfs</li>
      <li>ext2 / ext3 / ext4</li>
      <li>fat16 / fat32</li>
      <li>hfs / hfs+</li>
      <li>linux-swap</li>
      <li>lvm2 pv</li>
      <li>nilfs2</li>
      <li>ntfs</li>
      <li>reiserfs / reiser4</li>
      <li>ufs</li>
      <li>xfs</li>
    </ul>
  For specific actions supported see
  detailed <a href="features.php">features</a>.
  </li>
</ul>
<h2>Requirements</h2>
<p>
GParted can be used on x86 and x86-64 based computers running Linux,
Windows, or Mac OS X by booting from media
containing <a href="livecd.php">GParted Live</a>.  A minimum of 128 MB
of RAM is needed to use all of the
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
