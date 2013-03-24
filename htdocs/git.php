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

<p>
If you are the bleeding-edge kinda person, you have come to the right
place ;-)<br>
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


<h2 id="h2-create-patch">How to create your first GParted patch using git</h2>
<ol>
  <li class="step">Clone the git repository locally:
    <pre>
    git clone git://git.gnome.org/gparted
    </pre>
  </li>
  <li class="step">Set your name and email address:
    <pre>
    git config --global user.name "Joe Bloggs"
    git config --global user.email "joe.bloggs@example.com"
    </pre>
  </li>
  <li class="step">Create a new branch and switch to it:
    <pre>
    cd gparted
    git checkout -b feature
    </pre>
  </li>
  <li class="step">Edit the code, compile and test it.
    <pre>
    # Use favourite editor
    ./autogen.sh
    make
    su root -c src/gpartedbin
    </pre>
  </li>
  <li class="step">Commit change to git:
    <pre>
    git add file1 file2 ...
    git commit
    </pre>
    Compose a suitable commit message:<br>
    <br>
    <i>
    Short one line summary of change (#999999)<br>
    <br>
    Optional longer description explaining why the change is necessary.<br>
    Include details that will help the reviewer understand how the code<br>
    code is broken and being fixed or why this change is an improvement.<br>
    <br>
    Bug #999999 - GNOME Bugzilla one line summary<br>
    <br>
    </i>
    <table border=0><tr><td>
    <div class="tip">
    <p class="hangtip">
    <b>TIP</b>: &nbsp; Improve Patch Readability<br>
      <br>
      Make large and complicated changes as a series of smaller
      changes by repeating steps 4 and 5 as necessary.  Note that each
      incremental patch should compile and run properly.
    </p>
    </div>
    </td></tr></table>
  </li>
  <li class="step">Create a patch file:
    <pre>
    git format-patch master -n --stdout > ~/mypatch.mbox
    </pre>
  </li>
  <li class="step">Final review, apply, compile and test:
    <pre>
    cd /tmp
    git clone git://git.gnome.org/gparted gparted-test
    cd gparted-test
    git am ~/mypatch.mbox
    ./autogen.sh
    make
    su root -c src/gpartedbin
    </pre>
    <table border=0><tr><td>
    <div class="tip">
    <p class="hangtip">
    <b>TIP</b>: &nbsp; Ensure patch applies cleanly<br>
      <br>
      When applying the patch, make sure it applies cleanly.  For
      example there should be no messages appearing such
      as <i>trailing whitespace</i>.
    </p>
    </div>
    </td></tr></table>
  </li>
  <li class="step">Attach ~/mypatch.mbox to your
    GNOME <a href="bugs.php">bug</a> report with a few words.
  </li>
</ol>

<h3>Suggested References</h3>

<ul>
  <li>A <a href="http://zrusin.blogspot.co.uk/2007/09/git-cheat-sheet.html">Git cheat sheet</a></li>
  <li><a href="https://live.gnome.org/Git/Developers">GNOME git instructions</a></li>
  <li><a href="http://git-scm.com/">Git homepage</a></li>
  <li><a href="http://git-scm.com/book">Pro Git</a> online book</li>
  <li><a href="http://mirror.linux.org.au/linux.conf.au/2013/mp4/Git_For_Ages_4_And_Up.mp4">Git For ages 4 and up</a> LCA 2013 video (342M, 1h40m)</li>
  <li><a href="http://gitolite.com/gcs/">Git concepts simplified</a></li>
</ul>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
