<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta name="generator" content="HTML::TextToHTML v2.51"/>
</head>
<body>
<h1><a name="section_1">This is GParted live 0.26.0-1.</a></h1>

<h2><a name="section_1_1">Release Notes</a></h2>
<p>New in this release from 0.25.0-3:
</p><ul>
  <li>The underlying GNU/Linux operating system was upgraded. 
   This release is based on the Debian Sid repository (as of 2016/Apr/29).
  </li><li>New upstream GParted 0.26.0. It's compiled with options
   --disable-libparted-dmraid --disable-doc, and the patched parted to
   address these 2 issues:
  <ol>
    <li>fat(32) resizing generates boot sector(s) with
   invalid jump instruction and pseudo-random boot code
   <a href="https://bugzilla.gnome.org/show_bug.cgi?id=759916">https://bugzilla.gnome.org/show_bug.cgi?id=759916</a>
    </li><li>Check FAT32 fs crashes GParted
   <a href="https://bugzilla.gnome.org/show_bug.cgi?id=762448">https://bugzilla.gnome.org/show_bug.cgi?id=762448</a>
  </li></ol>
  </li><li>Linux kernel was updated to 4.5.1-1.
  </li><li>New package ca-certificate was added.
</li></ul>
<p><strong>### MD5SUMS:</strong><br/>
4816b52278afea8e1555629ce6ecedc6  gparted-live-0.26.0-1-amd64.iso
e7bbe4b863c3eff5a1443835bab9f966  gparted-live-0.26.0-1-i686.iso
bc443e7a38d6f731fd5bbeac47a5be1b  gparted-live-0.26.0-1-i686-pae.iso
b3a80464c98324cc854d47921e599e16  gparted-live-0.26.0-1-amd64.zip
3291d70cb172b2ef4fd93cc8ab7e6411  gparted-live-0.26.0-1-i686-pae.zip
55bb79181b80d610dfa12917d0b81aa2  gparted-live-0.26.0-1-i686.zip
</p>
<p><strong>### SHA1SUMS:</strong><br/>
9341cc7693589d2ba214e5a488f12e327c39d24d  gparted-live-0.26.0-1-amd64.iso
9aa9926b3c75b7890fefe31412404c3a69ec4d77  gparted-live-0.26.0-1-i686.iso
6cf3e5813f21569b58e77281cb0c30332ae8c917  gparted-live-0.26.0-1-i686-pae.iso
eb897e65138731d792672e2c1977f75bf0d83729  gparted-live-0.26.0-1-amd64.zip
3a14da66307d63aa9f801c186f7c8aab90dc29c5  gparted-live-0.26.0-1-i686-pae.zip
4024083c952cb023f11acd2b6e31a75bbbe99f85  gparted-live-0.26.0-1-i686.zip
</p>
<p><strong>### SHA256SUMS:</strong><br/>
e02c19c0c7ffd08a797403221ee53b7eff01c041f84ef75e6d4c00bbcd1052e5  gparted-live-0.26.0-1-amd64.iso
6290fb59300a8c266751a0a0ddf77fa8b70e814f437ac6845081500bb52b89e8  gparted-live-0.26.0-1-i686.iso
3f9ecafec37ac2ee24ee4244cedaef8fb44e5f7a3e8d2b2c94f984ef99323233  gparted-live-0.26.0-1-i686-pae.iso
90e0893ad73c3994b38e28356316e1df9c3571d13cbe9410af77b5cf7f4cb8dd  gparted-live-0.26.0-1-amd64.zip
d1ecca334049f5208058ff2f13926ae21ba71a851994c6d072fd5417d9be8f22  gparted-live-0.26.0-1-i686-pae.zip
05602cdf284e0977f614b91ae2da079bc8d90e96ef2619e5ab278ebe90738b80  gparted-live-0.26.0-1-i686.zip
</p>
<p><strong>### SHA512SUMS:</strong><br/>
eef4058a5ea4bcb58e922d0c67b326c7a660e9251f704f65e527cdcac4d60dd3d588bea8dac28140d0f36fa87e75fc443be6fb12001d9da80e5abacb2b5f1837  gparted-live-0.26.0-1-amd64.iso
547bd2d4ebc09972b673fa17a3fd8b6a2fabb2df2f1382c2e7506e1312383384258b8c0bc77262d5f76759b2a05adc06b9bbbd477b7803c38ff2287930d7f30c  gparted-live-0.26.0-1-i686.iso
c6c4729425de7392af47d155a660f62b0c71d9e514e35752ed83f5beda2b6d01da70e4540aea0ded484b6026c18c849e6d00839abf2f1a572bece5f890b46eef  gparted-live-0.26.0-1-i686-pae.iso
d3ae0883a389f0e67de635d901e6158e614c9a12ce4bb0cfd31f7cdcc79809f699a28c1b877407a1a68cba8845a32ad5e4764a9fdecaa85d750036a682779fe2  gparted-live-0.26.0-1-amd64.zip
b1884bee481be32fb40f2a246def6a4ed7cdbb01d1dfe158274ba011c790cec44d1e6c68d21ec5e887e92db23d6fa5ecabd8ac97a3e9309730a8d32987ad58d6  gparted-live-0.26.0-1-i686-pae.zip
b52244964730297fdb3c2bd7a460c698cd3d3e2e8aafcaa3a79971902c5d6d4b983eda508b42fa187c922f662a70fd95d7ba34e52b991a7317545434393ccab4  gparted-live-0.26.0-1-i686.zip
</p>

</body>
</html>