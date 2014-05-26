<?
include "functions.php";
webpage_init();
?>
<html>

<head>
	<title>GParted -- Why Partition?</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="content">
<h1>Why Partition your Disk Device?</h1>

<div class="right">
  <?
    include "google/wpp-300x250-rhs-near-top.inc";
  ?>
</div>

<h2>List of Reasons</h2>
<p>
There are several good reasons why you might partition your disk device.
</p>

<ul>
  <li class="step">
    <a href="#improve-performance">
      To improve performance
    </a>
  </li>
  <li class="step">
    <a href="#multi-os">
      To install more than one Operating System
    </a>
  </li>
  <li class="step">
    <a href="#share-data">
      To share data among Operating Systems
    </a>
  </li>
  <li class="step">
    <a href="#quicker-maintenance">
      To make computer maintenance tasks quicker
    </a>
  </li>
  <li class="step">
    <a href="#caveat-too-many">
      Caveat: Too many partitions
    </a>
  </li>
</ul>

<h2 id="improve-performance">To Improve Performance</h2>
<div class="tip">
<p>
To improve performance, you should place frequently accessed files in
a partition at the start of the hard disk drive.
</p>
</div>
<p>
Modern hard disk drives contain more sectors of data at the outer edge
of the physical disk than at the inner edge.  Hard drives spin at a
constant rate; normally 5400, 7200, or 10,000 RPM.  This physical
configuration means that more data can be accessed at the outer edge
(start) in a single spin of the disk than at the inner edge (end).
</p>
<p>
To take advantage of these physical hard disk drive properties, you
should place frequently accessed files at the start of the disk (lower
sector numbers).
</p>
<p>
For example to shorten the Operating System boot time, you should
place the OS in a partition at the start of the hard disk drive.  Less
frequently accessed information, such as your data files, should be
placed in a partition after the OS.
</p>
<div class="note">
<p>
<b>Note:</b>
These improved performance properties only apply to hard disk drives
because these devices contain spinning disks.
</p>
<p>
For disk devices that do not contain moving parts, such as Solid State
Drives (SSDs), memory sticks, and USB flash drives, you will get
increased performance by aligning partitions to mebibyte (MiB)
boundaries.
</p>
<p>
Aligning partitions to mebibyte (MiB) boundaries works well with
modern Operating Systems and all types of disk devices.
</p>
</div>

<h2 id="multi-os">To install more than one Operating System</h2>
<div class="tip">
<p>
To install more than one Operating System, you should create separate
partitions for each OS.
</p>
</div>
<p>
Because different Operating Systems have different requirements, each
OS should have a separate partition so that these individual
requirements can be met.
</p>

<h3>Partition Requirements</h3>
<ul>
  <li class="step">
    Windows requires a primary partition for the OS.
  </li>
  <li class="step">
    GNU/Linux can use either a primary partition or a logical partition.
  </li>
  <li class="step">
    Mac OS X needs a primary partition.
  </li>
</ul>

<h3>File System Requirements</h3>
<ul>
  <li class="step">
    Windows performs optimally with NTFS.
  </li>
  <li class="step">
    GNU/Linux prefers file systems such as ext2/3/4, xfs, and btrfs.
  </li>
  <li class="step">
    Mac OS X performs optimally with HFS+.
  </li>
</ul>

<h3>Partition Table Requirements</h3>
<p>
As a general rule, each disk device should contain only one partition
table.<br>
Mac OS X is an exception to this rule.
</p>
<ul>
  <li class="step">
    Recent Windows versions, such as Windows 7, can use either a GPT
    or an MSDOS partition table.
    <br>
    Older Windows versions, such as Windows XP, require an MSDOS
    partition table.
  </li>
  <li class="step">
    GNU/Linux can use either a GPT or an MSDOS partition table.
  </li>
  <li class="step">
    Mac OS X uses a hybrid partition table scheme consisting of both a GPT
    and an MSDOS partition table.<br>
    <br>
    <div class="note">
    <b>Note:</b>
    After editing partitions with GParted, the hybrid partition table
    scheme gets out of sync.  You can re-synchronize the partition
    tables using the gptsync command included with GParted Live, or
    with the <a href="http://refit.sourceforge.net/">rEFIt</a>
    application.
    </div>
  </li>
</ul>
<div class="note">
<p>
<b>Note:</b>
On disk devices with a 512 byte sector size, an MSDOS partition table
is limited to 2 TB.  For disk sizes larger than 2 TB you need to use a
different partition table, such as GPT.
</p>
</div>

<h2 id="share-data">To share data among Operating Systems</h2>
<div class="tip">
<p>
To share data among Operating Systems, you should place your data in a
file system in a separate partition that can be read from and written
to by all your OSes (e.g., FAT32).
</p>
</div>
<p>
In a perfect world, all Operating Systems would be able to read from
and write to all file system types.  Unfortunately this is not the
case.  Hence if you wish to access your data from all of your OSes,
you need to use a file system type that each OS can access.
</p>
<p>
The FAT16 (limited to 2 GB) and FAT32 file systems are examples of two
file systems that can be read from and written to by OSes, such as
Windows, GNU/Linux, and Mac OS X.
</p>

<h2 id="quicker-maintenance">To make computer maintenance tasks quicker</h2>
<div class="tip">
<p>
To make computer maintenance tasks quicker, you should store your data
in a separate partition.
</p>
</div>
<p>
Even if you do not run multiple Operating Systems on your computer,
there are advantages to storing your data in a partition separate from
the OS.
</p>
<p>

One advantage is that you will have at least two partitions: one
containing the OS (and applications), and a second containing data, as
opposed to a single larger partition.  The file system on a small
partition is quicker to check or defragment than a large partition.
This can save you time when your computer is running file system
checks to recover from a power failure, or when you are defragmenting
your disk for improved performance.

</p>
<p>

A second advantage is that if all of your data is contained in a
separate partition, then you can use the backup strategy that I use.
Specifically, on a frequent basis I back up all of my data in my data
partition, but do not back up the OS or applications.

</p>
<p>

My reasoning is that I <b>cannot</b> afford to lose my data, but I can lose
the OS because with some effort I can re-install the Operating System
and applications using the install media.  Recreating my data is neither 
practical, nor even possible.

</p>
<p>

A third advantage to storing your data in a separate partition is that
it makes Operating System upgrades quicker.  Often when upgrading from
one major version of an OS to another version, the process involves
reformatting the partition.  If your data is in the same partition as
the OS, then you will have to restore your data from backup.  If;
however, you have your data in a separate partition, then you can skip
the step to restore your data from backup.

</p>

<h2 id="caveat-too-many">Caveat: Too many partitions</h2>
<div class="caution">
<p>

Because managing multiple partitions can become onerous, you should
only create or reserve space for as many partitions as you reasonably
need.

</p>
</div>

<p>

I would be remiss if I did not tell you about the problems that can
occur with too many partitions.  Specifically partitions do not share
free space with other partitions.  Hence if one partition runs out of
free space, then you will need to resize, move, or delete other
partitions to enable you to address the lack of free space problem.

</p>
<p>

If there is unallocated space immediately after the partition, then
growing the partition into this space is often a quick task.

</p>
<p>

Unfortunately if unallocated space is not available immediately after
the partition, then the task becomes much more onerous.  This is
because moving partitions is a time consuming task, and there is
always the chance of data loss due to software bugs, hardware
problems, or power failure.  We highly recommend that you back up your
data prior to moving partitions.

</p>
<p>

To minimize the chance that you will need to restructure your
partition layout, we recommend that you spend some time up front to
estimate the partition sizes you will need.

</p>

</div>
<? gnome_foot() ?>

</div>
</body>
</html>
