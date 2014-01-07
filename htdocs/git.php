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

<h2>Contents</h2>
<ul>
  <li><a href="#build-using-git">How to build GParted using
  git</a></li>
  <li><a href="#create-patch">How to create your first GParted patch
  using git</a>
  <li><a href="#verify-every-change">Verifying every change of a patch
  set compiles</a>
    <ul>
      <li><a href="#testbuild">testbuild.sh</a></li>
      <li><a href="#git-test-sequence">git-test-sequence</a></li>
    </ul>
  </li>
  <li><a href="#references">Suggested References</a></li>
</ul>

<h2 id="build-using-git">How to build GParted using git</h2>
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


<h2 id="create-patch">How to create your first GParted patch using git</h2>
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
    is broken and being fixed or why this change is an improvement.<br>
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
      as <i>trailing whitespace</i>.<br>
      <br>
      See <a href="https://bugzilla.gnome.org/show_bug.cgi?id=696471">Bug
      696471 - Fix trailing whitespace errors</a> for a discussion of
      why we only fix existing trailing whitespace in GParted
      patch-by-patch, and for ideas on how to avoid trailing
      whitespace.
    </p>
    </div>
    </td></tr></table>
  </li>
  <li class="step">Attach ~/mypatch.mbox to your
    GNOME <a href="bugs.php">bug</a> report with a few words.
  </li>
</ol>

<h2 id="verify-every-change">Verifying every change of a patch set compiles</h2>
<table border=0><tr><td>
<div class="note">
<p class="hangnote">
<b>NOTE</b>: &nbsp;
  Ensuring that every change in a multi patch set compiles is
  important for incremental testability and enabling the use of git
  bisect in searching for the commit which introduced a bug.
</p>
</div>
</td></tr></table>
<ol>
  <li class="step">One time set-up of
    <a href="https://github.com/dustin/bindir/blob/master/git-test-sequence">git-test-sequence</a>
    and
    <a href="https://git.gnome.org/browse/gparted/tree/testbuild.sh">testbuild.sh</a>:<br>
    <pre>
    mkdir -p ~/bin
    cd ~/bin
    wget https://raw.github.com/dustin/bindir/master/git-test-sequence
    chmod 755 git-test-sequence
    wget https://git.gnome.org/browse/gparted/plain/testbuild.sh
    chmod 755 testbuild.sh
    </pre>
  </li>
  <li class="step">Clone GParted for testing:<br>
    <pre>
    cd /tmp
    git clone git://git.gnome.org/gparted gparted-test
    cd gparted-test
    </pre>
  </li>
  <li class="step">Apply and test build every patch in the set:<br>
    <pre>
    git am ~/review-patchset.mbox
    git-test-sequence origin/master.. testbuild.sh
    </pre>
  </li>
</ol>
<p>
Further information on <a href="#testbuild">testbuild.sh</a>
and <a href="#git-test-sequence">git-test-sequence</a> follows.
</p>

<h3 id="testbuild">testbuild.sh</h3>
<p>
<a href="https://git.gnome.org/browse/gparted/tree/testbuild.sh">testbuild.sh</a>
is for developers to build GParted in a git repository, appending the
top commit and build results to the log file testbuild.log.  It is
intended for use
with <a href="#git-test-sequence">git-test-sequence</a> to verify
every commit in a patch set compiles, but it can be used standalone
too.
</p>
<p>
Build current code:
</p>
<pre>
    rm testbuild.log
    testbuild.sh
    echo $?
    less testbuild.log
</pre>
<p>
Parameters on the command line are passed to autogen.sh, which in turn
are passed on to configure.  See the INSTALL file for details on
parameters to configure.  Example:
</p>
<pre>
    testbuild.sh --prefix=/usr
</pre>
<p>
By default testbuild.sh instructs make to use the number of processors
in the machine as the number of jobs to run simultaneously.  This is
to minimise build time.  This can be overridden by specifying the
required parameters to make in the MAKEFLAGS environment variable.
See
<a href="http://man7.org/linux/man-pages/man1/make.1.html">make(1)</a>
for details of parameters to make.  Example:
</p>
<pre>
      MAKEFLAGS='-j 2 -w' testbuild.sh
</pre>
<p>
Build current code specifying both alternative make flags and
configure parameters:
</p>
<pre>
    rm testbuild.log
    MAKEFLAGS='-j 2 -w' testbuild.sh --prefix=/usr
    echo $?
    less testbuild.log
</pre>

<h3 id="git-test-sequence">git-test-sequence</h3>
<p>
<a href="https://github.com/dustin/bindir/blob/master/git-test-sequence">git-test-sequence</a> (blog:
<a href="http://dustin.github.io/2010/03/28/git-test-sequence.html">git
test-sequence: Push Working Changes</a>) allows a sequence of git
commits to be tested.  The range of commits is specified using
standard git <a href="http://git-scm.com/book/ch6-1.html">commit
ranges</a> syntax (about 2/3 down the page).  Combined with
<a href="#testbuild">testbuild.sh</a> it allows us
to <a href="#verify-every-change">verify every change of a patch set
compiles</a>.
</p>
<p>
Git-test-sequence records test results in the local git repository
object store allowing it to report immediately when passed tests are
re-run again.
</p>
<p>
Usage:
</p>
<pre>
    git-test-sequence &lt;commit_range&gt; &lt;test_program&gt;
</pre>
<p>
Normal case would be to apply patch set for review and test build all
commits between upstream master and current head:
</p>
<pre>
    cd /tmp
    git clone git://git.gnome.org/gparted gparted-test
    cd gparted-test
    git am ~/review-patchset.mbox
    git-test-sequence origin/master.. testbuild.sh
</pre>
<p>
Test build a range of commits while also specifying parameters to
configure and alternative make flags:
</p>
<pre>
    cd /tmp
    git clone git://git.gnome.org/gparted gparted-test
    cd gparted-test
    MAKEFLAGS='-j 2 -w' git-test-sequence GPARTED_0_14_1..GPARTED_0_15_0 'testbuild.sh --prefix=/usr'
</pre>
<p>
On failure examine the log file testbuild.log for details.
</p>

<h2 id="references">Suggested References</h2>

<ul>
  <li>A <a href="http://zrusin.blogspot.co.uk/2007/09/git-cheat-sheet.html">Git cheat sheet</a></li>
  <li><a href="https://live.gnome.org/Git/Developers">GNOME git instructions</a></li>
  <li><a href="http://git-scm.com/">Git homepage</a></li>
  <li><a href="http://git-scm.com/book">Pro Git</a> online book</li>
  <li><a href="http://mirror.linux.org.au/linux.conf.au/2013/mp4/Git_For_Ages_4_And_Up.mp4">Git For ages 4 and up</a> LCA 2013 video (342MB, 1h40m)</li>
  <li><a href="http://gitolite.com/gcs/">Git concepts simplified</a></li>
</ul>

</div>

<? gnome_foot() ?>

</div>
</body>
</html>
