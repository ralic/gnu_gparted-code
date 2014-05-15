<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>live-config.en.7 (3.x)</title>
</head>

<body>
<pre>
<h3>LIVE-CONFIG(7)                Debian Live Project               LIVE-CONFIG(7)</h3>



<h3>NAME</h3>
       live-config - System Configuration Scripts


<h3>DESCRIPTION</h3>
       live-config  contains  the  scripts that configure a Debian Live system
       during the boot process (late userspace).


<h3>CONFIGURATION</h3>
       live-config can be configured through boot parameters or  configuration
       files.  If  both  mechanisms  are  used  for a certain option, the boot
       parameters take precedence over the  configuration  files.  When  using
       persistency, live-config scripts are only run once.

       To  configure  the  live-config  parameters  used  by default in a live
       image, see the --bootappend-live  option  in  the  lb_config(1)  manual
       page.


   <h4>Boot Parameters (scripts)</h4>
       live-config  is only activated if 'boot=live' is used as a boot parame‐
       ter. Additionally, live-config needs to be told which  scripts  to  run
       through the 'live-config' parameter or which scripts to not run through
       the 'live-noconfig' parameter. If both 'live-config'  and  'live-nocon‐
       fig'  are  used,  or, if either one is specified multiple times, always
       the later one takes precedence over the previous one(s).


       live-config | config
           All scripts are run.  This  is  what  Debian  Live  images  use  by
           default.

       live-config=SCRIPT1,SCRIPT2,  ... SCRIPTn | config=SCRIPT1,SCRIPT2, ...
       SCRIPTn
           Only the specified scripts are run. Note that  the  order  matters,
           e.g.  'live-config=sudo,user-setup'  would  not work since the user
           needs to be added before it can be configured for sudo. Look at the
           filenames  of  the  scripts  in /lib/live/config for their ordering
           number.

       live-noconfig | noconfig
           No script is run. This is the same as not using any  of  'live-con‐
           fig' or 'live-noconfig'.

       live-noconfig=SCRIPT1,SCRIPT2,  ... SCRIPTn | noconfig=SCRIPT1,SCRIPT2,
       ... SCRIPTn
           All scripts are run, except the specified ones.


   <h4>Boot Parameters (options)</h4>
       Some individual scripts can change their behaviour upon a boot  parame‐
       ter.


       live-config.debconf-preseed=filesystem|medium|URL1|URL2|  ...  |URLn  |
       debconf-preseed=medium|filesystem|URL1|URL2| ... |URLn
           Allows to fetch and apply one or more debconf preseed files  to  be
           applied  to the debconf database. Note that the URLs must be fetch‐
           able by wget (http, ftp or file://).
           If the file is placed on the live medium, it can  be  fetched  with
           file:///lib/live/mount/medium/FILE,  or  with file:///FILE if it is
           in the root filesystem of the live system itself.
           All preseed files in /lib/live/config-preseed/ in the root filesys‐
           tem  of  the live system can be automatically enabled with the key‐
           word 'filesystem'.
           All preseed files in /live/config-preseed/ of the live  medium  can
           be automatically enabled with the keyword 'medium'.
           If  several  mechanisms are combined, then filesystem preseed files
           are applied first, then medium preseed files, and last the  network
           preseed files.

       live-config.hostname=HOSTNAME | hostname=HOSTNAME
           Allows to set the hostname of the system. The default is 'debian'.

       live-config.username=USERNAME | username=USERNAME
           Allows  to  set  the  username that gets created for autologin. The
           default is 'user'.

       live-config.user-default-groups=GROUP1,GROUP2     ...     GROUPn      |
       user-default-groups=GROUP1,GROUP2 ... GROUPn
           Allows to set the default groups of the users that gets created for
           autologin is member of. The default  is  'audio  cdrom  dip  floppy
           video plugdev netdev powerdev scanner bluetooth'.

       live-config.user-fullname="USER  FULLNAME"  | user-fullname="USER FULL‐
       NAME"
           Allows to set the fullname of  the  users  that  gets  created  for
           autologin. The default is 'Debian Live user'.

       live-config.locales=LOCALE1,LOCALE2         ...        LOCALEn        |
       locales=LOCALE1,LOCALE2 ... LOCALEn
           Allows to set the locale of the  system,  e.g.  'de_CH.UTF-8'.  The
           default  is  'en_US.UTF-8'.  In  case  the  selected  locale is not
           already available on the system, it is automatically  generated  on
           the fly.

       live-config.timezone=TIMEZONE | timezone=TIMEZONE
           Allows to set the timezone of the system, e.g. 'Europe/Zurich'. The
           default is 'UTC'.

       live-config.keyboard-model=KEYBOARD_MODEL     |     keyboard-model=KEY‐
       BOARD_MODEL
           Allows to change the keyboard model. There is no default value set.

       live-config.keyboard-layouts=KEYBOARD_LAYOUT1,KEYBOARD_LAYOUT2 ... KEY‐
       BOARD_LAYOUTn | keyboard-layouts=KEYBOARD_LAYOUT1,KEYBOARD_LAYOUT2  ...
       KEYBOARD_LAYOUTn
           Allows  to  change the keyboard layouts. If more than one is speci‐
           fied, the tools of the desktop environment will allow to switch  it
           under X11. There is no default value set.

       live-config.keyboard-variants=KEYBOARD_VARIANT1,KEYBOARD_VARIANT2   ...
       KEYBOARD_VARIANTn |  keyboard-variants=KEYBOARD_VARIANT1,KEYBOARD_VARI‐
       ANT2 ... KEYBOARD_VARIANTn
           Allows  to change the keyboard variants. If more than one is speci‐
           fied, the same number of values as keyboard-layouts  values  should
           be specified as they will be matched one-to-one in the order speci‐
           fied. Blank values are allowed. The tools of the  desktop  environ‐
           ment  will  allow  to  switch  between each layout and variant pair
           under X11. There is no default value set.

       live-config.keyboard-options=KEYBOARD_OPTIONS  |  keyboard-options=KEY‐
       BOARD_OPTIONS
           Allows  to  change  the keyboard options. There is no default value
           set.

       live-config.sysv-rc=SERVICE1,SERVICE2  ...  SERVICEn   |   sysv-rc=SER‐
       VICE1,SERVICE2 ... SERVICEn
           Allows to disable sysv services through update-rc.d.

       live-config.utc=yes|no | utc=yes|no
           Allows  to change if the system is assuming that the hardware clock
           is set to UTC or not. The default is 'yes'.

       live-config.x-session-manager=X_SESSION_MANAGER    |     x-session-man‐
       ager=X_SESSION_MANAGER
           Allows to set the x-session-manager through update-alternatives.

       live-config.xorg-driver=XORG_DRIVER | xorg-driver=XORG_DRIVER
           Allows  to set xorg driver instead of autodetecting it. If a PCI ID
           is  specified   in   /usr/share/live/config/xserver-xorg/DRIVER.ids
           within  the  live  system, DRIVER is enforced for these devices. If
           both a boot parameter and a override is found, the  boot  parameter
           takes precedence.

       live-config.xorg-resolution=XORG_RESOLUTION | xorg-resolution=XORG_RES‐
       OLUTION
           Allows to set xorg resolution instead  of  autodetecting  it,  e.g.
           1024x768.

       live-config.hooks=filesystem|medium|URL1|URL2|      ...     |URLn     |
       hooks=medium|filesystem|URL1|URL2| ... |URLn
           Allows to fetch and execute one or more arbitrary files. Note  that
           the  URLs  must  be  fetchable  by wget (http, ftp or file://), the
           files are executed in /tmp of the running live system, and that the
           files  needs their dependencies, if any, already installed, e.g. if
           a  python  script  should  be  executed  the  system  needs  python
           installed.  Some  hooks  for some common use-cases are available at
           /usr/share/doc/live-config/examples/hooks/                      and
           &lt;<u>http://live.debian.net/other/hooks</u>&gt;.
           If  the  file  is placed on the live medium, it can be fetched with
           file:///lib/live/mount/medium/FILE, or with file:///FILE if  it  is
           in the root filesystem of the live system itself.
           All  hooks in /lib/live/config-hooks/ in the root filesystem of the
           live system can be automatically enabled with the keyword 'filesys‐
           tem'.
           All hooks in /live/config-hooks/ of the live medium can be automat‐
           ically enabled with the keyword 'medium'.
           If several mechanisms are combined, then filesystem hooks are  exe‐
           cuted first, then medium hooks, and last the network hooks.


   <h4>Boot Parameters (shortcuts)</h4>
       For  some  common  use  cases where it would require to combine several
       individual parameters, live-config provides shortcuts. This allows both
       to have full granularity over all the options, as well keep things sim‐
       ple.


       live-config.noroot | noroot
           Disables the sudo and policykit, the user cannot gain  root  privi‐
           leges on the system.

       live-config.noautologin | noautologin
           Disables both the automatic console login and the graphical autolo‐
           gin.

       live-config.nottyautologin | nottyautologin
           Disables the automatic login on  the  console,  not  affecting  the
           graphical autologin.

       live-config.nox11autologin | nox11autologin
           Disables  the automatic login with any display manager, not affect‐
           ing tty autologin.


   <h4>Boot Parameters (special options)</h4>
       For special use cases there are some special boot paramters.


       live-config.debug | debug
           Enables debug output in live-config.


   <h4>Configuration Files</h4>
       live-config can be configured (but not activated) through configuration
       files.  Everything but the shortcuts that can be configured with a boot
       parameter can be alternatively also be configured through one  or  more
       files.  If  configuration  files are used, the 'boot=live' parameter is
       still required to activate live-config.

       Configuration files can be placed either in the root filesystem  itself
       (/etc/live/config.conf,  /etc/live/config/*),  or  on  the  live  media
       (live/config.conf, live/config/*). If both places are used for  a  cer‐
       tain option, the ones from the live media take precedence over the ones
       from the root filesystem.

       Although the configuration files placed in the  conf.d  directories  do
       not  require  a  particular name or suffix, it is suggested for consis‐
       tency reasons to either use 'vendor.conf' or 'project.conf' as a naming
       scheme (whereas 'vendor' or 'project' is replaced with the actual name,
       resulting in a filename like 'debian-eeepc.conf').

       The actual content of the configuration files consists of one  or  more
       of the following variables.


       LIVE_CONFIGS=SCRIPT1,SCRIPT2, ... SCRIPTn
           This variable equals the 'live-config=SCRIPT1,SCRIPT2, ... SCRIPTn'
           parameter.

       LIVE_NOCONFIGS=SCRIPT1,SCRIPT2, ... SCRIPTn
           This  variable  equals  the   'live-noconfig=SCRIPT1,SCRIPT2,   ...
           SCRIPTn' parameter.

       LIVE_DEBCONF_PRESEED=filesystem|medium|URL1|URL2| ... |URLn
           This   variable  equals  the  'live-config.debconf-preseed=filesys‐
           tem|medium|URL1|URL2| ... |URLn' parameter.

       LIVE_HOSTNAME=HOSTNAME
           This variable equals the 'live-config.hostname=HOSTNAME' parameter.

       LIVE_USERNAME=USERNAME
           This variable equals the 'live-config.username=USERNAME' parameter.

       LIVE_USER_DEFAULT_GROUPS=GROUP1,GROUP2 ... GROUPn
           This         variable         equals         the         'live-con‐
           fig.user-default-groups="GROUP1,GROUP2 ... GROUPn"' parameter.

       LIVE_USER_FULLNAME="USER FULLNAME"
           This  variable  equals  the  'live-config.user-fullname="USER FULL‐
           NAME"' parameter.

       LIVE_LOCALES=LOCALE1,LOCALE2 ... LOCALEn
           This variable equals the  'live-config.locales=LOCALE1,LOCALE2  ...
           LOCALEn' parameter.

       LIVE_TIMEZONE=TIMEZONE
           This variable equals the 'live-config.timezone=TIMEZONE' parameter.

       LIVE_KEYBOARD_MODEL=KEYBOARD_MODEL
           This    variable    equals   the   'live-config.keyboard-model=KEY‐
           BOARD_MODEL' parameter.

       LIVE_KEYBOARD_LAYOUTS=KEYBOARD_LAYOUT1,KEYBOARD_LAYOUT2    ...     KEY‐
       BOARD_LAYOUTn
           This   variable   equals   the   'live-config.keyboard-layouts=KEY‐
           BOARD_LAYOUT1,KEYBOARD_LAYOUT2 ... KEYBOARD_LAYOUTn' parameter.

       LIVE_KEYBOARD_VARIANTS=KEYBOARD_VARIANT1,KEYBOARD_VARIANT2   ...   KEY‐
       BOARD_VARIANTn
           This   variable   equals   the  'live-config.keyboard-variants=KEY‐
           BOARD_VARIANT1,KEYBOARD_VARIANT2 ... KEYBOARD_VARIANTn' parameter.

       LIVE_KEYBOARD_OPTIONS=KEYBOARD_OPTIONS
           This   variable   equals   the   'live-config.keyboard-options=KEY‐
           BOARD_OPTIONS' parameter.

       LIVE_SYSV_RC=SERVICE1,SERVICE2 ... SERVICEn
           This variable equals the 'live-config.sysv-rc=SERVICE1,SERVICE2 ...
           SERVICEn' parameter.

       LIVE_UTC=yes|no
           This variable equals the 'live-config.utc=yes|no' parameter.

       LIVE_X_SESSION_MANAGER=X_SESSION_MANAGER
           This  variable  equals  the   'live-config.x-session-manager=X_SES‐
           SION_MANAGER' parameter.

       LIVE_XORG_DRIVER=XORG_DRIVER
           This   variable  equals  the  'live-config.xorg-driver=XORG_DRIVER'
           parameter.

       LIVE_XORG_RESOLUTION=XORG_RESOLUTION
           This variable equals the  'live-config.xorg-resolution=XORG_RESOLU‐
           TION' parameter.

       LIVE_HOOKS=filesystem|medium|URL1|URL2| ... |URLn
           This     variable     equals     the    'live-config.hooks=filesys‐
           tem|medium|URL1|URL2| ... |URLn' parameter.


<h3>CUSTOMIZATION</h3>
       live-config can be easily customized for downstream projects  or  local
       usage.


   <h4>Adding new config scripts</h4>
       Downstream  projects can put their scripts into /lib/live/config and do
       not need to do anything else, the scripts will be called  automatically
       during boot.

       The  scripts  are best put into an own debian package. A sample package
       containing an example script can be found  in  /usr/share/doc/live-con‐
       fig/examples.


   <h4>Removing existing config scripts</h4>
       It  is  not  really possible to remove scripts itself in a sane way yet
       without requiring either to ship a locally modified live-config package
       or  using  dpkg-divert.  However, the same can be achieved by disabling
       the respective scripts through the live-noconfig mechanism, see  above.
       To  avoid  to  always  need specifing disabled scripts through the boot
       parameter, a configuration file should be used, see above.

       The configuration files for the live system itself are best put into an
       own  debian  package. A sample package containing an example configura‐
       tion can be found in /usr/share/doc/live-config/examples.


<h3>SCRIPTS</h3>
       live-config currently features the following scripts in  /lib/live/con‐
       fig.


       debconf
           allows to apply arbitrary preseed files placed on the live media or
           an http/ftp server.

       hostname
           configures /etc/hostname and /etc/hosts.

       user-setup
           adds a live user account.

       sudo
           grants sudo privileges to the live user.

       locales
           configures locales.

       locales-all
           configures locales-all.

       tzdata
           configures /etc/timezone.

       gdm configures autologin in gdm.

       gdm3
           configures autologin in gdm3 (squeeze and newer).

       kdm configures autologin in kdm.

       lightdm
           configures autologin in lightdm.

       lxdm
           configures autologin in lxdm.

       nodm
           configures autologin in nodm.

       slim
           configures autologin in slim.

       xinit
           configures autologin with xinit.

       keyboard-configuration
           configures the keyboard.

       sysvinit
           configures sysvinit.

       sysv-rc
           configures sysv-rc by disabling listed services.

       login
           disables lastlog.

       apport
           disables apport.

       gnome-panel-data
           disables lock button for the screen.

       gnome-power-manager
           disables hibernation.

       gnome-screensaver
           disables the screensaver locking the screen.

       kaboom
           disables KDE migration wizard (squeeze and newer).

       kde-services
           disables some unwanted KDE services (squeeze and newer).

       debian-installer-launcher
           adds debian-installer-launcher on users desktop.

       module-init-tools
           automatically load some modules on some architectures.

       policykit
           grant user privilegies through policykit.

       sslcert
           regenerating ssl snake-oil certificates.

       update-notifier
           disables update-notifier.

       anacron
           disables anacron.

       util-linux
           disables util-linux' hwclock.

       login
           disables lastlog.

       xserver-xorg
           configures xserver-xorg.

       ureadahead (ubuntu only)
           disables ureadahead.

       openssh-server
           recreates openssh-server host keys.

       xfce4-panel
           configures xfce4-panel to default settings.

       hooks
           allows to run arbitrary commands from a script placed on  the  live
           media or an http/ftp server.


<h3>FILES</h3>
       /etc/live/config.conf

       /etc/live/config/*

       live/config.conf

       live/config/*

       /lib/live/config.sh

       /lib/live/config/

       /var/lib/live/config/

       /var/log/live/config.log

       /live/config-hooks/*

       live/config-hooks/*

       /live/config-preseed/*

       live/config-preseed/*


<h3>SEE ALSO</h3>
       live-boot(7)

       live-build(7)

       live-tools(7)


<h3>HOMEPAGE</h3>
       More  information  about live-config and the Debian Live project can be
       found on the homepage at &lt;<u>http://live.debian.net/</u>&gt; and in the manual at
       &lt;<u>http://live.debian.net/manual/</u>&gt;.


<h3>BUGS</h3>
       Bugs  can  be  reported  by  submitting a bugreport for the live-config
       package in the Debian Bug Tracking System at  &lt;<u>http://bugs.debian.org/</u>&gt;
       or   by   writing   a   mail   to  the  Debian  Live  mailing  list  at
       &lt;<u>debian-live@lists.debian.org</u>&gt;.


<h3>AUTHOR</h3>
       live-config was written by Daniel Baumann &lt;<u>daniel@debian.org</u>&gt;.



<h3>3.0.23-1                          2013-04-25                    LIVE-CONFIG(7)</h3>
</pre>
</body>

</html>
