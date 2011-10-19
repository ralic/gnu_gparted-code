<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

<head>
  <title>GParted -- Git</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="content">
<h1>Git Source Code Management</h1>

<div class="right">
  <?
    include "google/gitp-300x250-rhs-near-top.inc";
  ?>
</div>

<p>
If you are the bleeding-edge kinda person, you have come to the right
place ;-)<br>
I cannot quarantee git versions will work or even compile, but feel
free to give it a try.<br>
<br>
<a href="http://git.gnome.org/cgit/gparted/">Browse</a> git visually
or read <a href="http://live.gnome.org/Git/Developers">GNOME git
instructions</a>.
</p>
<br>

<h2>How to build GParted using git</h2>
<ol>
  <li>
    Be sure to install the dependencies for GParted.<br>
    <br>
    These are described in the "Building from source" portion of the
    <a href="http://git.gnome.org/browse/gparted/tree/README">README</a>
    file.
    <br><br>
  </li>
  <li>
    Checkout a copy of the source code from the git repository:
    <pre>
    git clone git://git.gnome.org/gparted
    </pre>
  </li>
  <li>
    Compile the GParted source code into an executable:
    <pre>
    cd gparted
    ./autogen.sh
    make
    </pre>
  </li>
  <li>
    Install the GParted executable (as root):
    <pre>
    make install
    </pre>
  </li>
</ol>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
