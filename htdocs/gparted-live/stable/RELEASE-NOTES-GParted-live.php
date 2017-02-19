<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta name="generator" content="HTML::TextToHTML v2.51"/>
</head>
<body>
<h1><a name="section_1">This is GParted live 0.28.1-1.</a></h1>

<h2><a name="section_1_1">Release Notes</a></h2>
<ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2017/Feb/18).
  </li><li>Linux kernel was updated to 4.9.6-3.
  </li><li>New upstream GParted 0.28.1. It's compiled with options
   --disable-libparted-dmraid --disable-doc, and the patched parted to
   address these 2 issues:
  <ol>
    <li>fat(32) resizing generates boot sector(s) with
   invalid jump instruction and pseudo-random boot code
   <a href="https://bugzilla.gnome.org/show_bug.cgi?id=759916">https://bugzilla.gnome.org/show_bug.cgi?id=759916</a>
    </li><li>Check FAT32 fs crashes GParted
   <a href="https://bugzilla.gnome.org/show_bug.cgi?id=762448">https://bugzilla.gnome.org/show_bug.cgi?id=762448</a>
  </li></ol>
</li></ul>
<p><strong>### MD5SUMS:</strong><br/>
358e99fb758bdaac122114664a0fa58a  gparted-live-0.28.1-1-amd64.iso
6231f420757f8bd45bc6a38f1201c053  gparted-live-0.28.1-1-i686.iso
0944669be825b86072ff0a803a6fcd24  gparted-live-0.28.1-1-i686-pae.iso
78faa4afa113d1e364a9a0b7f2fa7e63  gparted-live-0.28.1-1-amd64.zip
e4b50881b9128b844cddfe1185788e74  gparted-live-0.28.1-1-i686-pae.zip
c7b9b75b2c2d04217d99cc4f7a02146e  gparted-live-0.28.1-1-i686.zip
</p>
<p><strong>### SHA1SUMS:</strong><br/>
2e983370c8bad943c2681e2d9449b44a748992ab  gparted-live-0.28.1-1-amd64.iso
2cf82bd87b57d4ef573971334dc704896b344d08  gparted-live-0.28.1-1-i686.iso
f9ee1dab29cc5d2fdabeaafab593e56bd82f8da6  gparted-live-0.28.1-1-i686-pae.iso
c1fc4c07dd3f7033675c6200231728e6af2d75f1  gparted-live-0.28.1-1-amd64.zip
9ea63d1624421647ed2669dd7ac8437aa02396f5  gparted-live-0.28.1-1-i686-pae.zip
87d3b7456d22af8d978bea0813e4ad3723e27a9d  gparted-live-0.28.1-1-i686.zip
</p>
<p><strong>### SHA256SUMS:</strong><br/>
bb27ec95d0a219e0ff2b3cbec07276230a234b92a6315ac4e4ab20be3f61a98e  gparted-live-0.28.1-1-amd64.iso
933ea2a127e7784c448af77792c6871de73b239471a0fa37b3a88550b8774e39  gparted-live-0.28.1-1-i686.iso
d65ad7b35806e9d963d286cc170f512910296ca454bac9a6758dce6174718e84  gparted-live-0.28.1-1-i686-pae.iso
911e55c70ea9d5d781da8079c1da5b5bdcf8ca9571f918de439c3d075431d8fe  gparted-live-0.28.1-1-amd64.zip
5c00a16cc64c53c044d12eaa1dccc4212c93e72a493bb8bad62ac06098b4d145  gparted-live-0.28.1-1-i686-pae.zip
9db8bd11bc8709d2f8b021e770bae745047f4697e8d13f10949dab62eec4966a  gparted-live-0.28.1-1-i686.zip
</p>
<p><strong>### SHA512SUMS:</strong><br/>
042f0fe4521181bd291cc0845499ba97a1a0084909c8ac739b84409ec6509741a4cae6d7dfe6f6424082e1084642dd3a60d080d50800c1df7d4c2e65b9242ab7  gparted-live-0.28.1-1-amd64.iso
43df278520e132801f079289168742eaa8a5e1ceef8009346c55e7f6fba85fd22e1f795397cc34124f850ec1378dd80490c552e161e638954fe4dbb850e39609  gparted-live-0.28.1-1-i686.iso
e277e8d607364e777cebe530a19d1771443635905e5fe6e48123332f87ca8542524a569d5ec6a9c7c16bde5cb70bbc7eea0f2ca7327a989ab9c87c90c22d19be  gparted-live-0.28.1-1-i686-pae.iso
13c8736e07140159c1682e58a0e10486ef49b1f68a612a21bc0395256f3806fca5f53d633b615c5d6c1bf6e9ed58615524a2110c150a688a3be0ccd8a7f4cade  gparted-live-0.28.1-1-amd64.zip
43852e27768e733a1aedf49c05be1e4549773aa0b280f568f3d0a06767a0f44c1db481887a4acd9319d3f6a4f6f2c5aa3a7ef4208202c413cac9abc45654c016  gparted-live-0.28.1-1-i686-pae.zip
21ff81b3897109f135c5ca7f5c9db044469e4a85bbcb5038510bec2d5fe787506cdba1f81f98d01fb5e5ca6ac83b4765e457bd882e6b8200fedcf0d73001396a  gparted-live-0.28.1-1-i686.zip</p>

</body>
</html>
