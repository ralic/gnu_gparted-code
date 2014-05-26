<?
include "functions.php";
webpage_init();
?>
<html>
<?
// Query strings passed to this page:
//    name:  Name of documenation to display (e.g., help-manual)
//    lang:  Documentation language (e.g., C)

// File name structure:  docs/$docname/$lang/$docname.html
$name = urlencode($_GET["name"]);
$lang = urlencode($_GET["lang"]);
if ( $lang=="" ) $lang = "C";
$pathname = "docs/" . $name . "/" . urldecode($lang) . "/";
$filename = $pathname . $name . ".html";

$filecontents = @file_get_contents( $filename );

if ( $filecontents==FALSE )
{
  $title = "GParted -- Document not found";
  $meta_http_equiv = "";
  $meta_description = "";
  $doc_error = "<h1>Document not found</h1>";
}
else
{
  $doc_error = "";

  // Parse out title from head section
  //
  // NOTE:  To negate a string in a pattern search, use:
  //           (?:(?!string).)
  //        See http://www.php.net/manual/en/function.preg-match.php#103015
  //
  if ( preg_match( '&<head(?:(?!<title).)*<title[^>]*>(?P<title>[^<]*)</title&si'
                 , $filecontents, $matches )
     ) {
    $title = "GParted -- " . $matches["title"];
  } else {
    $title = "GParted -- Title not found";
  }

  // Parse out meta tag http-equiv from head section
  if ( preg_match( '&<head(?:(?!<meta).)*(?P<httpequiv><meta.*http-equiv[^>]*>).*</head&i'
                 , $filecontents  , $matches )
     ) {
    $meta_http_equiv = $matches["httpequiv"];
  } else {
    $meta_http_equiv = '<meta http-equiv="Content-Type"'
                     . ' content="text/html; charset=UTF-8">';
  }

  // Parse out meta tag description from head section
  if ( preg_match( '&<head(?:(?!<meta).).*(?P<desc><meta.*description[^>]*>).*</head&i'
                 , $filecontents, $matches )
     ) {
    $meta_description = $matches["desc"];
  } else {
    $meta_description = "";
  }

  // Remove stuff up to <html[^>]*> if html exists
  $filecontents = preg_replace( '&^(?:(?!<html).)*<html[^>]*>&si'
                              , '', $filecontents );

  // Remove stuff up to </head> if head exists
  $filecontents = preg_replace( '&^(?:(?!</head).)*</head[^>]*>&si'
                              , '', $filecontents );

  // Remove stuff up to <body> if body exists
  $filecontents = preg_replace( '&^(?:(?!<body).)*<body[^>]*>&si'
                              , '', $filecontents );

  // Remove stuff after </html[^>]*> if html exists
  $filecontents = preg_replace( '&</html[^>]*>.*$&si', '', $filecontents );

  // Remove stuff after </body[^>]*> if html exists
  $filecontents = preg_replace( '&</body[^>]*>.*$&si', '', $filecontents );

  // Display only one entry in <div class="revhistory"> section if it exists
  //   Usually found in html files generated from docbook xml files
  //   with the command:
  //     xmlto html-nochunks file.xml
  $pattern = '&(<div[\s]*class="revhistory"><table.*?<tr>.*?</tr>' 
           . '<tr>.*?</tr>)(.*?)(</table></div>)&si';
  $replacement = '${1}${3}';
  $filecontents = preg_replace( $pattern, $replacement, $filecontents );

  // Fix up img tag src="" paths
  $pattern = '&(<img[^>]*src=")([^"\s]*)([^>]*>)&si';
  $replacement = '${1}' . $pathname . '${2}${3}';
  $filecontents = preg_replace( $pattern, $replacement, $filecontents );

  // Fix up img tag src='' paths
  $pattern = "&(<img[^>]*src=')([^'\s]*)([^>]*>)&si";
  $replacement = '${1}' . $pathname . '${2}${3}';
  $filecontents = preg_replace( $pattern, $replacement, $filecontents );

  // Fix up a tag class="ulink" href="figures/.*" paths
  $pattern = '&(<a[^>]*class="ulink"[^>]*href=")(figures/[^"\s]*)([^>]*>)&si';
  $replacement = '${1}' . $pathname . '${2}${3}';
  $filecontents = preg_replace( $pattern, $replacement, $filecontents );

  // Fix up a tag class='ulink' href='figures/.*' paths
  $pattern = "&(<a[^>]*class='ulink'[^>]*href=')(figures/[^'\s]*)([^>]*>)&si";
  $replacement = '${1}' . $pathname . '${2}${3}';
  $filecontents = preg_replace( $pattern, $replacement, $filecontents );
}
?>

<head>
  <title><? echo $title ?></title>
  <?
    echo $meta_http_equiv . "\n";
    echo $meta_description . "\n";
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?
    html_head_basic();
  ?>
</head>

<body>
<div class="body">
<?
  gnome_head();
  gnome_menu();
?>

<div class="content">
  <div class="right">
    <?
      include "google/ddp-300x250-rhs-near-top.inc";
    ?>
  </div>
<?
  echo $doc_error;
  echo $filecontents;
?>
</div>

<? gnome_foot() ?>

</div>
</body>
</html>
