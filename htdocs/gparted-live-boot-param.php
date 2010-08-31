The boot parameters for GParted live
GParted live is based on <a href="http://wiki.debian.org/DebianLive/" target=_blank>Debian live</a> with GParted installed. Therefore there are 2 kinds of boot parameters:
<ol>
<li>Boot parameters from live-initramfs. You can refer to this <a href="./live-initramfs.en.7.txt" target=_blank>manual of live-initramfs</a>.
<li>Boot parameters specially for GParted. All of them are named as "gl__*", e.g. gl_kbd, gl_lang, gl_numlk, gl_capslk, gl_batch, gl-debug and keyb. 
  <ul>
  <li>gl_kbd is for keymap used in GParted live. Man install-keymap for more details.<br>
      e.g. gl_kbd="NONE" (won't change the default layout)<br>
           gl_kbd="/usr/share/keymaps/i386/azerty/fr-latin9.kmap.gz" (French keyboard)
  <li>gl_lang is the language used in GParted live. Available value: en_US.UTF-8, zh_TW.UTF-8...
      e.g. gl_lang="en_US.UTF-8"
  <li>gl-debug is for you to enter command line prompt before any GParted-related action is run. This is easier for you to debug.
  <li>ocs_numlk, ocs_capslk.<br>
      To turn on or off the numberlock or capslock of keyboard. You can use "on" or "off", e.g. gl_numlk=on to turn on numberlock when booting.
  <li>Batch mode or not (yes/no), if yes, it won't ask about X configuration.<br>
      e.g. gl_batch="no"
  </ul>
<li>Therefore if you want to assign the language and keyboard layout as German, , and let the system to automatically detect the X-window configuration, you can put the boot parameters as:<br>
    gl_lang=de_DE keyb=de gl_batch
</ol>
<hr>
