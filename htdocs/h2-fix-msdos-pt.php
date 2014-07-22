<?
include "functions.php";
webpage_init();
?>
<html>

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
  Primary and extended partions are identified by numbers 1 to 4
  (e.g., /dev/sdb3)<br>
  Logical partitions are identified by numbers 5 and higher (e.g.,
  /dev/sdb7).
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
    Primary partitions must not exist within an Extended partition.
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

<hr>


<h2 id="instructions">Instructions (step-by-step)</h2>

<table border=0><tr><td>
<div class="tip">
<p class="hangtip">
<b>TIP</b>: &nbsp;
  The <b>sudo</b> prefix is used to acquire root privilege.
</p>
</div>
</td></tr></table>


<h3 id="overlapping-partitions">How-to Fix Overlapping Partitions</h3>

<p>
The following instructions describe how to manually correct the problem
of overlapping partitions.<br>
<br>
Other methods also exist, such as
using <a href="http://www.cgsecurity.org/wiki/TestDisk">testdisk</a>
to scan the disk device to rebuild the partition table.  The testdisk
application is included on <a href="livecd.php">GParted Live</a>.
</p>

<table border=0><tr><td>
<div class="note">
<p class="hangnote">
<b>NOTE</b>: &nbsp;
  Be sure to choose the correct disk device path.<br>
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
    (e.g., <i>/dev/sda</i>).<br>
    <br>
    For example:
    <pre>
    $ <b>sudo parted <i>/dev/sda</i> unit s print</b>
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
    $ <b>sudo fdisk -l -u <i>/dev/sda</i></b>

    Disk /dev/sda: 60.0 GB, 60011642880 bytes
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
    Check the fdisk output for the following problems:<br>
    <br>
    <ul>
      <li class="step">
        <i>Do any of the primary or extended partitions overlap?</i><br>
        <br>
        In other words does one partition (numbers 1 to 4) have a
        start value lower than another partitition (numbers 1 to 4)
        but also an end value higher than the start of the other
        partition?<br>
        <br>
      </li>
      <li class="step">
        <i>Do any of the logical partitions start or end outside the
        extended partition?</i><br>
        <br>
        In other words is the start of a logical partition (numbers
        5+) less than the start of the extended partition?<br>
        Also, is the end of a logical partition (numbers 5+) greater
        than the end of the extended partition?<br>
        <br>
      </li>
      <li class="step">
        <i>Do any of the logical partitions overlap?</i><br>
        <br>
        In other words does one logical partition (numbers 5+) have a
        start value lower than another logical partition (numbers 5+)
        but also have an end value higher than the start of the other
        partition?<br>
        <br>
      </li>
      <li class="step">
        <i>Do any of the primary partitions exist within the extended
        partition?</i><br>
        <br>
        In other words does one partition (numbers 1 to 4) have start
        and end values within the boundaries of another partitition
        (number 1 to 4)?<br>
        In this special case either the extended partition must be
        altered so that it does not encompass the primary partition,
        or the primary partition must be changed to be a logical
        partition within the extended partition.  Fixing this
        situation might require backing up the partitions,
        repartitioning the disk, restoring the partition contents, and
        then repairing the ability to boot.
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
    The new end sector of sda1 should be the start of sda2 minus one
    sector.<br>
    <i>* For logical partitions we would need to subtract at
    least two (2) sectors.</i>
    <pre>
    new sda1 end = (sda2 start) - 1
                 = 81915435 - 1
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
    Make a copy of the partition table in an editable file using the
    sfdisk command.<br>
    <br>
    For example:<br>
    <pre>
    $ <b>sudo sfdisk -d <i>/dev/sda</i> > sda-backup.txt</b>
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

    # partition table of /dev/sda
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
    # partition table of /dev/sda
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
    $ <b>sudo sfdisk <i>/dev/sda</i> < sda-backup.txt</b>
    Checking that no-one is using this disk right now ...
    OK

    Disk /dev/sda: 7296 cylinders, 255 heads, 63 sectors/track
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
    $ <b>sudo parted <i>/dev/sda</i> unit s print</b>
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
    You should now be able to use GParted with this device.  :-)
  </li>
</ol>

<hr>


<h3 id="partition-outside-disk">How-to Fix Partition Outside the Disk</h3>

<p>
The following instructions describe how to manually correct the problem
of a partition extending beyond the end of the disk.<br>
<br>
Other methods also exist, such as
using <a href="http://www.cgsecurity.org/wiki/TestDisk">testdisk</a>
to scan the disk device to rebuild the partition table.  The testdisk
application is included on <a href="livecd.php">GParted Live</a>.<br>
<br>
If the problem occurs with the extended partition, then you might
consider using
the <a href="http://www.rodsbooks.com/fixparts/">fixparts</a>
application.  The fixparts application is also included
on <a href="livecd.php">GParted Live</a>.<br>
</p>

<table border=0><tr><td>
<div class="note">
<p class="hangnote">
<b>NOTE</b>: &nbsp;
  Be sure to choose the correct disk device path.<br>  In the
  following example, the disk device containing a partition outside
  the disk is <b>/dev/sdb</b>
</p>
</div>
</td></tr></table>

<ol>
  <li class="step">
    Ensure you have a good backup of your data.
  </li>
  <li class="step">
    Confirm the problem by running parted on your disk device
    (e.g., <i>/dev/sdb</i>).<br>
    <br>
    For example:
    <pre>
    $ <b>sudo parted <i>/dev/sdb</i> unit s print</b>
    Error: Can't have a partition outside the disk!
    </pre>
    You should see the error message
    <i>Error: Can't have a partition outside the disk!</i>
  </li>
  <li class="step">
    Gather partition details for analysis using the fdisk command.<br>
    <br>
    For example:
    <pre>
    $ <b>sudo fdisk -l -u <i>/dev/sdb</i></b>

    Disk /dev/sdb: 250.1 GB, 250059350016 bytes
    255 heads, 63 sectors/track, 30401 cylinders, total 488397168 sectors
    Units = sectors of 1 * 512 = 512 bytes
    Sector size (logical/physical): 512 bytes / 512 bytes
    I/O size (minimum/optimal): 512 bytes / 512 bytes
    Disk identifier: 0x00068df3

      Device  Boot      Start         End      Blocks   Id  System
    /dev/sdb1   *          63    12578894     6289416    7  HPFS/NTFS/exFAT
    /dev/sdb2        12578895   180345689    83883397+   7  HPFS/NTFS/exFAT
    /dev/sdb3       180345690   390058199   104856255    7  HPFS/NTFS/exFAT
    /dev/sdb4       390058200   488408189    49174995    5  Extended
    /dev/sdb5       390058263   459089504    34515621   83  Linux
    /dev/sdb6       459089568   488392064    14651248+  82  Linux swap / Solaris
    </pre>
  </li>
  <li class="step">
    Check the fdisk output for the cause of the problem.<br>
    <br>
    <i>Does any partition have an end value larger than the disk size?</i><br>
    <br>
    To be precise, since the first sector begins at sector zero
    (0), check to see if the end of any partition is greater than the
    disk size minus one sector.<br>
    <br>
    In this example the end of extended partition sdb4 is beyond the
    size of the disk.<br>
    <br>
    &nbsp; &nbsp; 488,408,189 --- end of sdb4<br>
    &nbsp; &nbsp; 488,397,168 --- size of sdb device<br>
    <pre>
    Disk /dev/sdb: 250.1 GB, 250059350016 bytes
    255 heads, 63 sectors/track, 30401 cylinders, total <span style="color: red;">488397168</span> sectors
    Units = sectors of 1 * 512 = 512 bytes
    Sector size (logical/physical): 512 bytes / 512 bytes
    I/O size (minimum/optimal): 512 bytes / 512 bytes
    Disk identifier: 0x00068df3

      Device  Boot      Start         End      Blocks   Id  System
    /dev/sdb1   *          63    12578894     6289416    7  HPFS/NTFS/exFAT
    /dev/sdb2        12578895   180345689    83883397+   7  HPFS/NTFS/exFAT
    /dev/sdb3       180345690   390058199   104856255    7  HPFS/NTFS/exFAT
    /dev/sdb4       390058200   <span style="color: red;">488408189</span>    49174995    5  Extended
    /dev/sdb5       390058263   459089504    34515621   83  Linux
    /dev/sdb6       459089568   488392064    14651248+  82  Linux swap / Solaris
    </pre>
  </li>
  <li class="step">
    Determine a new end value (and partition size) to prevent the
    partition outside the disk problem.<br>
    <br>
    The new end sector of the partition outside the disk should be the
    size of the disk minus one sector.<br>
    <br>
    In our example:
    <pre>
    new sdb4 end = (sdb disk size) - 1
                 = 488397168 - 1
                 = 488397167
    </pre>
    New size of sda1 will be the new end of sda1 minus the start of
    sda1 plus one sector.
    <pre>
    new sdb4 size = (new sdb4 end) - (sdb4 start) + 1
                  = 488397167 - 390058200 + 1
                  = 98338968
    </pre>
  </li>
  <li class="step">
    Make a copy of the partition table in an editable file using the
    sfdisk command.<br>
    <br>
    For example:<br>
    <pre>
    $ <b>sudo sfdisk -d <i>/dev/sdb</i> > sdb-backup.txt</b>
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
    $ <b>sudo leafpad sdb-backup.txt</b>

    # partition table of /dev/sdb
    unit: sectors

    /dev/sdb1 : start=       63, size= 12578832, Id= 7, bootable
    /dev/sdb2 : start= 12578895, size=167766795, Id= 7
    /dev/sdb3 : start=180345690, size=209712510, Id= 7
    /dev/sdb4 : start=390058200, size= <span style="color: red;">98349990</span>, Id= 5
    /dev/sdb5 : start=390058263, size= 69031242, Id=83
    /dev/sdb6 : start=459089568, size= 29302497, Id=82
    </pre>
    Change the old size of the partition sdb4 (98349990) to
    the calculated new size (98338968).
    <pre>
    # partition table of /dev/sdb
    unit: sectors

    /dev/sdb1 : start=       63, size= 12578832, Id= 7, bootable
    /dev/sdb2 : start= 12578895, size=167766795, Id= 7
    /dev/sdb3 : start=180345690, size=209712510, Id= 7
    /dev/sdb4 : start=390058200, size= <span style="color: green;">98338968</span>, Id= 5
    /dev/sdb5 : start=390058263, size= 69031242, Id=83
    /dev/sdb6 : start=459089568, size= 29302497, Id=82
    </pre>
    Save the file and exit the editor.
  </li>
  <li class="step">
    Write the corrected partition details to the partition table using
    the sfdisk command.<br>
    <br>
    For example:<br>
    <pre>
    $ <b>sudo sfdisk <i>/dev/sdb</i> < sdb-backup.txt</b>
    Checking that no-one is using this disk right now ...
    OK

    Disk /dev/sdb: 30401 cylinders, 255 heads, 63 sectors/track
    Old situation:
    Units = cylinders of 8225280 bytes, blocks of 1024 bytes, counting from 0

       Device Boot Start     End   #cyls    #blocks   Id  System
    /dev/sdb1   *      0+    782     783-   6289416    7  HPFS/NTFS/exFAT
    /dev/sdb2        783   11225   10443   83883397+   7  HPFS/NTFS/exFAT
    /dev/sdb3      11226   24279   13054  104856255    7  HPFS/NTFS/exFAT
    /dev/sdb4      24280   30402-   6123-  49174995    5  Extended
    /dev/sdb5      24280+  28576    4297-  34515621   83  Linux
    /dev/sdb6      28577+  30400    1824-  14651248+  82  Linux swap / Solaris
    New situation:
    Units = sectors of 512 bytes, counting from 0

       Device Boot    Start       End   #sectors  Id  System
    /dev/sdb1   *        63  12578894   12578832   7  HPFS/NTFS/exFAT
    /dev/sdb2      12578895 180345689  167766795   7  HPFS/NTFS/exFAT
    /dev/sdb3     180345690 390058199  209712510   7  HPFS/NTFS/exFAT
    /dev/sdb4     390058200 488397167   98338968   5  Extended
    /dev/sdb5     390058263 459089504   69031242  83  Linux
    /dev/sdb6     459089568 488392064   29302497  82  Linux swap / Solaris
    Warning: partition 4 does not end at a cylinder boundary
    Warning: partition [6] does not end at a cylinder boundary
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
    $ <b>sudo parted <i>/dev/sdb</i> unit s print</b>
    Model: ATA ST3250022ACE (scsi)
    Disk /dev/sdb: 488397168s
    Sector size (logical/physical): 512B/512B
    Partition Table: msdos

    Number  Start       End         Size        Type      File system     Flags
     1      63s         12578894s   12578832s   primary   ntfs            boot
     2      12578895s   180345689s  167766795s  primary   ntfs
     3      180345690s  390058199s  209712510s  primary   ntfs
     4      390058200s  488397167s  98338968s   extended
     5      390058263s  459089504s  69031242s   logical   ext2
     6      459089568s  488392064s  29302497s   logical   linux-swap(v1)
    </pre>
    You should now be able to use GParted with this device.  :-)
  </li>
</ol>

<hr>


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
