<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>live-boot.en.7 (3.x)</title>
</head>

<body>
<pre>
<h3>LIVE-BOOT(7)                  Debian Live Project                 LIVE-BOOT(7)</h3>



<h3>NAME</h3>
       live-boot - System Boot Scripts


<h3>DESCRIPTION</h3>
       live-boot contains the scripts that configure a Debian Live system dur‐
       ing the boot process (early userspace).

       live-boot is a  hook  for  the  initramfs-tools,  used  to  generate  a
       initramfs  capable  to  boot  live  systems,  such  as those created by
       live-helper(7). This includes the Debian Live isos,  netboot  tarballs,
       and usb stick images.

       At  boot time it will look for a (read-only) media containing a "/live"
       directory where a root filesystems (often a compressed filesystem image
       like  squashfs) is stored. If found, it will create a writable environ‐
       ment, using aufs, for Debian like systems to boot from.


<h3>CONFIGURATION</h3>
       live-boot can be configured through a boot parameter or a configuration
       file.

       To  configure the live-boot parameters used by default in a live image,
       see the --bootappend-live option in the lb_config(1) manual page.


   <h4>Kernel Parameters</h4>
       live-boot is only activated if 'boot=live' was used as a kernel parame‐
       ter.

       In  addition,  there are some more boot parameters to influence the be‐
       haviour, see below.


   <h4>Configuration Files</h4>
       live-boot can be configured (but not activated)  through  configuration
       files.  Those  files can be placed either in the root filesystem itself
       (/etc/live/boot.conf,  /etc/live/boot/*),  or   on   the   live   media
       (live/boot.conf, live/boot/*).


<h3>OPTIONS</h3>
       live-boot currently features the following parameters.

       access=ACCESS
           Set  the  accessibility  level  for physically or visually impaired
           users. ACCESS must be one of v1, v2, v3, m1, or m2. v1=lesser  vis‐
           ual   impairment,   v2=moderate  visual  impairment,  v3=blindness,
           m1=minor motor difficulties, m2=moderate motor difficulties.

       console=TTY,SPEED
           Set the default console to be used with  the  "live-getty"  option.
           Example: "console=ttyS0,115200"

       debug
           Makes initramfs boot process more verbose.
           Use: debug=1
           Without setting debug to a value the messages may not be shown.

       fetch=URL

       httpfs=URL
           Another  form  of  netboot  by  downloading a squashfs image from a
           given url.  The fetch method copies the image to ram and the httpfs
           method  uses  fuse and httpfs2 to mount the image in place. Copying
           to ram requires more memory and might take a long  time  for  large
           images.  However,  it  is  more likely to work correctly because it
           does not require networking  afterwards  and  the  system  operates
           faster  once  booted  because  it  does  not require to contact the
           server anymore.
           Due to current limitations in busybox's wget and DNS resolution, an
           URL can not contain a hostname but an IP only.
           Not working: http://example.com/path/to/your_filesystem.squashfs
           Working: http://1.2.3.4/path/to/your_filesystem.squashfs
           Also  note  that  therefore it's currently not possible to fetch an
           image from a namebased virtualhost of an httpd if it is sharing the
           ip with the main httpd instance.
           You may also use the live iso image in place of the squashfs image.

       iscsi=server-ip[,server-port];target-name
           Boot from an iSCSI target that has an iso or disk live image as one
           of its LUNs. The specified target is searched for a LUN which looks
           like a live media. If you use the iscsitarget software iSCSI target
           solution which is packaged in Debian your ietd.conf might look like
           this:
           # The target-name you specify in the iscsi= parameter
           Target &lt;<u>target-name</u>&gt;
             Lun 0 Path=&lt;<u>path-to-your-live-image.iso</u>&gt;,Type=fileio,IOMode=ro
             # If you want to boot multiple machines you might want to look at
           tuning some parameters like
             # Wthreads or MaxConnections

       findiso=/PATH/TO/IMAGE
           Look for the specified ISO file on all disks where it usually looks
           for  the  .squashfs file (so you don't have to know the device name
           as in fromiso=....).

       fromiso=/PATH/TO/IMAGE
           Allows to use a filesystem from within an iso image  that's  avail‐
           able on live-media.

       ignore_uuid
           Do  not  check  that any UUID embedded in the initramfs matches the
           discovered medium. live-boot may be told to generate a UUID by set‐
           ting LIVE_GENERATE_UUID=1 when building the initramfs.

       verify-checksums
           If  specified,  an  MD5  sum is calculated on the live media during
           boot and compared to the value found in  md5sum.txt  found  in  the
           root directory of the live media.

       ip=[DEVICE]:[CLIENT_IP]:[NETMASK]:[GATEWAY_IP]:[NAMESERVER]
       [,[DEVICE]:[CLIENT_IP]:[NETMASK]:[GATEWAY_IP]:[NAMESERVER]]
           Let you specify the name(s) and the  options  of  the  interface(s)
           that  should be configured at boot time. Do not specify this if you
           want to use dhcp (default). It will be changed in a future  release
           to   mimick   official   kernel   boot  param  specification  (e.g.
           ip=10.0.0.1::10.0.0.254:255.255.255.0::eth0,:::::eth1:dhcp).

       ip=[frommedia]
           If this variable is set, dhcp and  static  configuration  are  just
           skipped  and  the system will use the (must be) media-preconfigured
           /etc/network/interfaces instead.

       {live-media|bootfrom}=DEVICE
           If you specify one of this two  equivalent  forms,  live-boot  will
           first  try  to find this device for the "/live" directory where the
           read-only root filesystem should reside. If it did not  find  some‐
           thing usable, the normal scan for block devices is performed.
           Instead of specifing an actual device name, the keyword 'removable'
           can be used to limit the search of acceptable live media to  remov‐
           able type only. Note that if you want to further restrict the media
           to usb mass storage only, you can use the 'removable-usb' keyword.

       {live-media-encryption|encryption}=TYPE
           live-boot  will  mount  the  encrypted  rootfs  TYPE,  asking   the
           passphrase,  useful  to  build paranoid live systems :-). TYPE sup‐
           ported so far are "aes" for loop-aes encryption type.

       live-media-offset=BYTES
           This way you could tell live-boot that your image starts at  offset
           BYTES  in  the above specified or autodiscovered device, this could
           be useful to hide the Debian Live iso or image inside  another  iso
           or image, to create "clean" images.

       live-media-path=PATH
           Sets  the path to the live filesystem on the medium. By default, it
           is set to '/live' and you should not change that  unless  you  have
           customized your media accordingly.

       live-media-timeout=SECONDS
           Set   the   timeout   in   seconds  for  the  device  specified  by
           "live-media=" to become ready before giving up.

       module=NAME
           Instead of using the default optional file "filesystem.module" (see
           below) another file could be specified without the extension ".mod‐
           ule"; it should be placed on "/live" directory of the live medium.

       netboot[=nfs|cifs]
           This tells live-boot to perform  a  network  mount.  The  parameter
           "nfsroot="  (with optional "nfsopts="), should specify where is the
           location of the root filesystem.   With  no  args,  will  try  cifs
           first, and if it fails nfs.

       nfsopts=
           This lets you specify custom nfs options.

       nofastboot
           This  parameter disables the default disabling of filesystem checks
           in /etc/fstab. If you have static filesystems on your harddisk  and
           you  want them to be checked at boot time, use this parameter, oth‐
           erwise they are skipped.

       nopersistence
           disables the "persistence" feature, useful if the bootloader  (like
           syslinux) has been installed with persistence enabled.

       noeject
           Do not prompt to eject the live medium.

       ramdisk-size
           This  parameters  allows to set a custom ramdisk size (it's the '-o
           size' option of tmpfs mount). By default, there is no ramdisk  size
           set,  so  the  default of mount applies (currently 50% of available
           RAM). Note that this option has no currently no effect when booting
           with toram.

       swapon
           This parameter enables usage of local swap partitions.

       persistence
           live-boot  will  probe  devices for persistence media. These can be
           partitions (with the correct GPT name), filesystems (with the  cor‐
           rect  label)  or image files (with the correct file name). Overlays
           are labeled/named "persistence" (see persistence.conf(5)).  Overlay
           image files have extensions which determines their filesystem, e.g.
           "persistence.ext4".

       persistence-encryption=TYPE1,TYPE2 ... TYPEn
           This option determines which types of encryption that we  allow  to
           be used when probing devices for persistence media. If "none" is in
           the list, we allow unencrypted media; if "luks" is in the list,  we
           allow  LUKS-encrypted media. Whenever a device containing encrypted
           media is probed the user will be prompted for the  passphrase.  The
           default value is "none".

       persistence-media={removable|removable-usb}
           If  you specify the keyword 'removable', live-boot will try to find
           persistence partitions on removable media only. Note  that  if  you
           want  to  further  restrict the media to usb mass storage only, you
           can use the 'removable-usb' keyword.

       persistence-method=TYPE1,TYPE2 ... TYPEn
           This option determines which types of persistence media  we  allow.
           If  "overlay"  is in the list, we consider overlays (i.e. "live-rw"
           and "home-rw"). The default is "overlay".

       persistence-path=PATH
           live-boot will look for persistency files in the root directory  of
           a  partition,  with  this  parameter, the path can be configured so
           that you can have multiple directories on  the  same  partition  to
           store persistency files.

       persistence-read-only
           Filesystem changes are not saved back to persistence media. In par‐
           ticular, overlays and netboot NFS mounts are mounted read-only.

       persistence-storage=TYPE1,TYPE2 ... TYPEn
           This option determines which types of persistence storage  to  con‐
           sider when probing for persistence media. If "filesystem" is in the
           list, filesystems with matching labels will be used; if  "file"  is
           in  the list, all filesystems will be probed for archives and image
           files with matching filenames. The default is "file,filesystem".

       persistence-label=LABEL
           live-boot will use the name "LABEL" instead of  "persistence"  when
           searching  for persistent storage. LABEL can be any valid filename,
           partition label, or GPT name. This option replaces the less  flexi‐
           ble  persistent-subtext  option from version 2 of live-boot. If you
           wish to continue using legacy names for persistent storage, use the
           full name with this option, e.g. persistence-label=live-rw-foo

       quickreboot
           This  option causes live-boot to reboot without attempting to eject
           the media and without asking the user to remove the boot media.

       showmounts
           This parameter will make live-boot to show on "/" the  ro  filesys‐
           tems  (mostly  compressed)  on  "/lib/live". This is not enabled by
           default because could lead to problems by applications like  "mono"
           which store binary paths on installation.

       silent
           If  you  boot with the normal quiet parameter, live-boot hides most
           messages of its own. When adding silent, it hides all.

       todisk=DEVICE
           Adding this parameter,  live-boot  will  try  to  copy  the  entire
           read-only  media  to  the specified device before mounting the root
           filesystem. It probably needs a lot of free space. Subsequent boots
           should then skip this step and just specify the "live-media=DEVICE"
           boot parameter with the same DEVICE used this time.

       toram
           Adding this  parameter,  live-boot  will  try  to  copy  the  whole
           read-only  media  to  the  computer's  RAM before mounting the root
           filesystem. This could need a lot of ram, according  to  the  space
           used by the read-only media.

       union=aufs|unionfs
           By  default,  live-boot  uses  aufs.  With  this parameter, you can
           switch to unionfs.


<h3>FILES (old)</h3>
       /etc/live.conf
           Some variables can be configured via this config file  (inside  the
           live system).

       live/filesystem.module
           This  optional  file  (inside  the  live  media) contains a list of
           white-space or carriage-return-separated file  names  corresponding
           to  disk images in the "/live" directory. If this file exists, only
           images listed here will be merged into the root aufs, and they will
           be  loaded  in  the order listed here. The first entry in this file
           will be the "lowest" point in the aufs, and the last file  in  this
           list  will  be  on  the "top" of the aufs, directly below /overlay.
           Without this file, any images in the "/live" directory  are  loaded
           in alphanumeric order.


<h3>FILES</h3>
       /etc/live/boot.conf

       /etc/live/boot/*

       live/boot.conf

       live/boot/*

       persistence.conf


<h3>SEE ALSO</h3>
       persistence.conf(5)

       live-build(7)

       live-config(7)

       live-tools(7)


<h3>HOMEPAGE</h3>
       More  information  about  live-boot  and the Debian Live project can be
       found on the homepage at &lt;<u>http://live.debian.net/</u>&gt; and in the manual at
       &lt;<u>http://live.debian.net/manual/</u>&gt;.


<h3>BUGS</h3>
       Bugs  can be reported by submitting a bugreport for the live-boot pack‐
       age in the Debian Bug Tracking System at  &lt;<u>http://bugs.debian.org/</u>&gt;  or
       by  writing  a  mail  to  the  Debian  Live  mailing  list  at &lt;debian-
       live@lists.debian.org&gt;.


<h3>AUTHOR</h3>
       live-boot was written by Daniel  Baumann  &lt;<u>daniel@debian.org</u>&gt;  for  the
       Debian project.



<h3>3.0.1-1                           2013-02-14                      LIVE-BOOT(7)</h3>
</pre>
</body>

</html>
