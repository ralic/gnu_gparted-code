<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

<head>
	<title>GParted -- How-to Fix Invalid MSDOS Partition Tables</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu();
?>
<div class="content">
<h1>How-to Fix Invalid MSDOS Partition Tables</h1>

<h2>Summary</h2>
<p>
This article describes how to fix some common problems that cause an
MSDOS partition table (also known as Master Boot Record - MBR) to be
invalid.<br>
<br>
Note that a computer with an invalid partition table can often still
boot up.  However, tools like GParted will not work until the
partition table is corrected.
</p>

<table border=0><tr><td>
<div class="caution">
<p class="hangcaution">
<b>CAUTION</b>: &nbsp;
  Editing partitions has the potential to cause <b>LOSS of DATA</b>.<br>
  You are advised to <b>BACKUP your DATA</b> before proceeding.
</p>
</div>
</td></tr></table>

<h2>Contents</h2>
<ul>
  <li><a href="#basic-msdos">Basic MSDOS Partition Table Rules</a></li>
  <li><a href="#symptoms">Symptoms of an Invalid Partition Table</a>
    <ul>
      <li>
        <a href="#disk-unallocated">Entire Disk Device Shown as
        Unallocated</a>
      </li>
      <li>
        <a href="#apply-action-fail">Applying Action on Logical or
        Extended Partition Fails</a>
      </li>
    </ul>
  <li>
    <a href="#instructions">Instructions (step-by-step)</a>
    <ul>
      <li>
        <a href="#overlapping-partitions">How-to Fix Overlapping
        Partitions</a>
      </li>
      <li>
        <a href="#partition-outside-disk">How-to Fix Partition Outside
        the Disk</a>
      </li>
      <li>
        <a href="#unable-satisfy-constraints">How-to Fix Unable to
        Satisfy All Constraints</a>
      </li>
    </ul>
  </li>
</ul>

<h2 id="basic-msdos">MSDOS Partition Table Rules</h2>
<table border=0><tr><td>
<div class="tip">
<p class="hangtip">
<b>TIP</b>: &nbsp;
  In order for an MSDOS partition table to be valid, the partitions
  within the apartition table must adhere to these rules.
</p>
</div>
</td></tr></table>
<p>
A valid MSDOS partition table must obey all of the following rules:
</p>
<ol>
  <li class="step">
    At most four primary partitions, or three primary partitions and one
    extended partition are permitted.
  </li>
  <li class="step">
    Primary and Extended partitions must not overlap.
  </li>
  <li class="step">
    An extended partition may contain multiple logical partitions.<br>
    &nbsp; It is permissible for a logical partition to end on the
    same sector as the end of the extended partition.
  </li>
  <li class="step">
    Logical partitions must not overlap other logical partitions.
  </li>
  <li class="step">
    At least 2 unallocated sectors are required in front of a
    logical partition.<br>
    &nbsp; This space is required for the Extended Boot Record (EBR).
  </li>
  <li class="step">
    All partitions must exist within the size of the disk device.<br>
    &nbsp; Sector numbering begins at zero, so the first sector is
    sector 0.
  </li>
  <li class="step">
    Each partition must start within the first 2^32 (4,294,967,296)
    sectors of the disk device, and be smaller than 2^32 sectors.<br>
    &nbsp; For disks with 512 byte sectors, 2^32 sectors is 2
    Tebibytes (2 TiB).
  </li>
</ol>


<h2 id="symptoms">Symptoms of an Invalid Partition Table</h2>
<p>
You might have an invalid partition table if you notice either of the
following symptoms when using GParted:
</p>
<ul>
  <li>
    <a href="#disk-unallocated">
      GParted shows the entire disk device as unallocated
    </a>
  </li>
  <li>
    <a href="#apply-action-fail">
      GParted fails when applying an action on a logical or an
      extended partition
    </a>
  </li>
</ul>


<h3 id="disk-unallocated">Entire Disk Device Shown as Unallocated</h3>
<p>
There are a few situations that can cause this problem.  To learn the
cause, in GParted double-click on the "unallocated" disk device and
check the information window for warning messages.
</p>
<p>
Common warning messages that cause this problem are as follows:
</p>
<ul>
  <li class="step">
    <b>Can't have overlapping partitions</b><br>
    <br>
    The root cause is that the partition table contains at least one
    occurrence where the end of one partition overlaps the start of
    another partition.  See <a href="#overlapping-partitions">How-to
    Fix Overlapping Partitions</a>.<br>
    <br>
  </li>
  <li class="step">
    <b>Can't have a partition outside the disk!</b><br>
    <br>
    The root cause is that the partition table contains at least one
    occurrence where the end of one partition is beyond the end of the
    disk device.  See <a href="#partition-outside-disk">How-to Fix
    Partition Outside the Disk</a>.<br>
    <br>
  </li>
  <li class="step">
    <b><i>/dev/sda</i>: unrecognized disk label</b><br>
    <br>
    Two root causes for this message are as follows:<br>
    <br>
    <ul>
      <li class="step">
        <b>The device does not contain a partition table.</b><br>
        <br>

        If the device does contain data then perhaps the
        entire device is formatted with a file system.  It is also
        possible that the device is part of some other data structure,
        such as a RAID.  In these situations there is no partition
        table to edit.<br>

        <br>

        Otherwise, if this is a new disk device then the device is
        most likely empty.  In this case you would proceed to create a
        partition table and at least one partition to prepare the
        disk device for use.<br>

        <br>
      </li>
      <li class="step">
        <b>The type of partition table is not recognized by GParted.</b><br>
        <br>
        If the device contains data, then perhaps the device is using
        a new type of partition table.  GParted supports many commonly
        used partition tables, such as msdos or gpt, but not all types
        of partition tables are supported.  In this situation you
        would need to determine what type of partition table is in
        use.  Then you could seek out other partition management tools
        to edit the partition table.<br>
        <br>
      </li>
    </ul>
  </li>
</ul>

<h3 id="apply-action-fail">Applying Action on Logical or Extended
Partition Fails</h3>
<p>

To determine if the failure is due to an invalid partition table,
expand the GParted details in the "Applying pending operations"
window, and search for the source of the error.<br>

<br>

If the text "<b>Unable to satisfy all constraints on the
partition</b>" is found, then there might be less than 2 unallocated
sectors in front of each logical partition.<br>
For example, there should be at least 2 unallocated sectors between:

</p>
<ul>
  <li class="step">
    the start of the extended partition and the start of a logical
    partition.
  </li>
  <li class="step">
    the end of one logical partition and the start of the next logical
    partition.
  </li>
</ul>
<p>
The 2 unallocated sectors are required to store the Extended Boot
Record (EBR).  The EBR contains information about the following
logical partition.  The Linux kernel considers EBRs to be two sectors
long, in order to "leave room for LILO (LInux LOader)".<br>
See <a href="#unable-satisfy-constraints">How-to Fix Unable to Satisfy
All Constraints</a>.
</p>

<h2 id="instructions">Instructions (step-by-step)</h2>

<table border=0><tr><td>
<div class="tip">
<p class="hangtip">
<b>TIP</b>: &nbsp;
  The <b>sudo</b> prefix is used to acquire root privilege.
</p>
</div>
</td></tr></table>
<br>
<table border=0><tr><td>
<div class="tip">
<p class="hangtip">
<b>TIP</b>: &nbsp;

  Primary and extended partions are identified by the numbers 1 to
  4.<br>
  Logical partitions are identified by numbers 5 and higher.
</p>
</div>
</td></tr></table>

<h3 id="overlapping-partitions">How-to Fix Overlapping Partitions</h3>

<table border=0><tr><td>
<div class="note">
<p class="hangnote">
<b>NOTE</b>: &nbsp;
  Be sure to choose the correct disk device (e.g, /dev/sde).<br>
  In the following example, the disk device containing overlapping
  partitions is <b>/dev/sda</b>
</p>
</div>
</td></tr></table>

<ol>
  <li class="step">
    Ensure you have a good backup of your data.
  </li>
  <li class="step">
    Confirm the problem by running parted on your disk device
    (e.g. /dev/sda).<br>
    <br>
    For example:
    <pre>
    $ <b>sudo parted /dev/sda unit s print</b>
    Error: Can't have overlapping partitions.
    </pre>
    You should see the error message
    <i>Error: Can't have overlapping partitions.</i>
  </li>
  <li class="step">
    Gather partition details for analysis using the fdisk command.<br>
    <br>
    For example:
    <pre>
    $ <b>sudo fdisk -l -u</b>

    Disk /dev/loop0: 60.0 GB, 60011642880 bytes
    255 heads, 63 sectors/track, 7296 cylinders, total 117210240 sectors
    Units = sectors of 1 * 512 = 512 bytes
    Sector size (logical/physical): 512 bytes / 512 bytes
    I/O size (minimum/optimal): 512 bytes / 512 bytes
    Disk identifier: 0x000b2d37

       Device Boot      Start         End      Blocks   Id  System
    /dev/sda1   *          63    81922347    40961142+   7  HPFS/NTFS/exFAT
    /dev/sda2        81915435   117210239    17647402+   5  Extended
    /dev/sda5        81915498    98494514     8289508+  83  Linux
    /dev/sda6        98494578    99008594      257008+  82  Linux swap / Solaris
    /dev/sda7        99008658   115394894     8193118+   b  W95 FAT32
    </pre>
  </li>
  <li class="step">
    Check for the fdisk output for the following problems:<br>
    <br>
    <ul>
      <li class="step">
        <i>Do any of the primary or extended partitions overlap?</i><br>
        <br>
        In other words does the end of a partition (numbers 1 to 4) start
        before other partitions, but have an end value higher the
        start of other following partitions (numbers 1 to 4)?<br>
        <br>
      </li>
      <li class="step">
        <i>Do any of the logical partitions start or end outside the
        extended partition?</i><br>
        <br>
        In other words is the start of a logical partition (numbers
        5+) less than the start of the extended partition?<br>
        Also, is the end of a logical partition (numbers 5+) greather
        than the end of the extended partition?<br>
        <br>
      </li>
      <li class="step">
        <i>Do any of the logical partitions overlap?</i><br>
        <br>
        In other words does the end of a partition (numbers 5+) start
        before other partitions, but have an end value higher the
        start of other following partitions (numbers 5+)?<br>
        <br>
      </li>
    </ul>
    In this example the end of primary partition sda1 overlaps the
    beginning of extended partition sda2.<br>
    <br>
    &nbsp; &nbsp; 81,922,347 --- end of sda1<br>
    &nbsp; &nbsp; 81,915,435 --- start of sda2<br>
    <pre>
       Device Boot      Start         End      Blocks   Id  System
    /dev/sda1   *          63    <span style="color: red;">81922347</span>    40961142+   7  HPFS/NTFS/exFAT
    /dev/sda2        <span style="color: red;">81915435</span>   117210239    17647402+   5  Extended
    /dev/sda5        81915498    98494514     8289508+  83  Linux
    /dev/sda6        98494578    99008594      257008+  82  Linux swap / Solaris
    /dev/sda7        99008658   115394894     8193118+   b  W95 FAT32
    </pre>
  </li>
  <li class="step">

    Determine a new end value (and partition size) to avoid the
    overlap.<br>
    <br>
    <table border=0><tr><td>
    <div class="note">
    <p class="hangnote">
    <b>NOTE</b>: &nbsp;
    </p>
    <ul>
      <li class="step">
        In cases where we do not know if the starting or ending
        sector is the problem, we assume that the starting sector of
        each partition is correct, and that the ending sector might
        be in error.
      </li>
      <li class="step">
        No sectors are required between primary and extended
        partitions.
      </li>
      <li class="step">
        At least 2 sectors of unallocated space are required in
        front of logical partitions.
      </li>
    </ul>
    </div>
    </td></tr></table>
    <br>
    In this example, we assume that the starting sector of extended
    partition sda2 is correct.  Hence we need to change the end sector
    of primary partition sda1.<br>
    <br>
    New end sector of sda2 should be the start of sda1 minus one
    sector.<br>
    <i>* For logical partitions we would need to subtract an
    additional two (2) sectors.</i>
    <pre>
    new sda1 end = (sda2 start) - 1 = 81915435 - 1
                 = 81915434
    </pre>
    New size of sda1 will be the new end of sda1 minus the start of
    sda1 plus one sector.
    <pre>
    new sda1 size = (new sda1 end) - (sda1 start) + 1
                  = 81915434 - 63 + 1
                  = 81915372
    </pre>
  </li>
  <li class="step">
    Make an editable file of the partition table using the sfdisk
    command.<br>
    <br>
    For example:<br>
    <pre>
    $ <b>sudo sfdisk -d /dev/sda > sda-backup.txt</b>
    </pre>
  </li>
  <li class="step">
    Use your favourite editor to edit the file to change the old
    partition size to the new partition size.<br>
    If you are using GParted Live, you can edit the file using the
    Leafpad editor.<br>
    <br>
    For example:<br>
    <pre>
    $ <b>sudo leafpad sda-backup.txt</b>

    # partition table of /dev/loop0
    unit: sectors

    /dev/sda1 : start=       63, size= <span style="color: red;">81922285</span>, Id= 7, bootable
    /dev/sda2 : start= 81915435, size= 35294805, Id= 5
    /dev/sda3 : start=        0, size=        0, Id= 0
    /dev/sda4 : start=        0, size=        0, Id= 0
    /dev/sda5 : start= 81915498, size= 16579017, Id=83
    /dev/sda6 : start= 98494578, size=   514017, Id=82
    /dev/sda7 : start= 99008658, size= 16386237, Id= b
    </pre>
    Change the old size of the primary partition sda1 (81922285) to
    the calculated new size (81915372).
    <pre>
    # partition table of /dev/loop0
    unit: sectors

    /dev/sda1 : start=       63, size= <span style="color: green;">81915372</span>, Id= 7, bootable
    /dev/sda2 : start= 81915435, size= 35294805, Id= 5
    /dev/sda3 : start=        0, size=        0, Id= 0
    /dev/sda4 : start=        0, size=        0, Id= 0
    /dev/sda5 : start= 81915498, size= 16579017, Id=83
    /dev/sda6 : start= 98494578, size=   514017, Id=82
    /dev/sda7 : start= 99008658, size= 16386237, Id= b
    </pre>
    Save the file and exit the editor.
  </li>
  <li class="step">
    Write the corrected partition details to the partition table using
    the sfdisk command.<br>
    <br>
    For example:<br>
    <pre>
    $ <b>sudo sfdisk /dev/sda < sda-backup.txt</b>
    Checking that no-one is using this disk right now ...
    OK

    Disk /dev/loop0: 7296 cylinders, 255 heads, 63 sectors/track
    Old situation:
    Units = cylinders of 8225280 bytes, blocks of 1024 bytes, counting from 0

       Device Boot Start     End   #cyls    #blocks   Id  System
    /dev/sda1   *      0+   5099-   5100-  40961142+   7  HPFS/NTFS/exFAT
    /dev/sda2       5099    7295    2197   17647402+   5  Extended
    /dev/sda3          0       -       0          0    0  Empty
    /dev/sda4          0       -       0          0    0  Empty
    /dev/sda5       5099+   6130    1032-   8289508+  83  Linux
    /dev/sda6       6131+   6162      32-    257008+  82  Linux swap / Solaris
    /dev/sda7       6163+   7182    1020-   8193118+   b  W95 FAT32
    New situation:
    Units = sectors of 512 bytes, counting from 0

       Device Boot    Start       End   #sectors  Id  System
    /dev/sda1   *        63  81915434   81915372   7  HPFS/NTFS/exFAT
    /dev/sda2      81915435 117210239   35294805   5  Extended
    /dev/sda3             0         -          0   0  Empty
    /dev/sda4             0         -          0   0  Empty
    /dev/sda5      81915498  98494514   16579017  83  Linux
    /dev/sda6      98494578  99008594     514017  82  Linux swap / Solaris
    /dev/sda7      99008658 115394894   16386237   b  W95 FAT32
    Successfully wrote the new partition table

    Re-reading the partition table ...

    If you created or changed a DOS partition, /dev/foo7, say, then use dd(1)
    to zero the first 512 bytes:  dd if=/dev/zero of=/dev/foo7 bs=512 count=1
    (See fdisk(8).)
    </pre>
  </li>
  <li class="step">
    Confirm the problem is now resolved by running parted on your disk
    device.<br>
    <br>
    For example:
    <pre>
    $ <b>sudo parted /dev/sda unit s print</b>
    Model: ATA ST3060022ACE (scsi)
    Disk /dev/sda: 117210240s
    Sector size (logical/physical): 512B/512B
    Partition Table: msdos

    Number  Start      End         Size       Type      File system     Flags
     1      63s        81915434s   81915372s  primary   ntfs            boot
     2      81915435s  117210239s  35294805s  extended
     5      81915498s  98494514s   16579017s  logical   ext2
     6      98494578s  99008594s   514017s    logical   linux-swap(v1)
     7      99008658s  115394894s  16386237s  logical   fat32
    </pre>
  </li>
</ol>

<h3 id="partition-outside-disk">How-to Fix Partition Outside the Disk</h3>

<p>
We plan to outline how to approach this problem.  In the meantime you can seek help in the <a href="forum.php">GParted forum</a>.
</p>

<h3 id="unable-satisfy-constraints">How-to Fix Unable to Satisfy All
Constraints</h3>

<p>
We plan to outline how to approach this problem.  In the meantime you can seek help in the <a href="forum.php">GParted forum</a>.
</p>

</div>
<? gnome_foot() ?>

</div>
</body>
</html>
