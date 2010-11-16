<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";

// Query strings passed to this page:
//    name:  Name of documenation to display (e.g., help-manual)
//    lang:  Documentation language (e.g., C)

// File name structure:  docs/$docname/$lang/$docname.html
$pathname = "docs/" . urlencode($_GET["name"]) . "/" 
          . urlencode($_GET["lang"]) . "/";
$filename = $pathname . urlencode($_GET["name"]) . ".html";

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
  if ( preg_match( '&<head.*<title[^>]*>(?P<title>.*)</title&si', $filecontents
                 , $matches )
     ) {
    $title = "GParted -- " . $matches["title"];
  } else {
    $title = "GParted -- Title not found";
  }

  // Parse out meta tag http-equiv from head section
  if ( preg_match( '&<head.*(?P<httpequiv><meta.*http-equiv[^>]*>).*</head&si'
                 , $filecontents  , $matches )
     ) {
    $meta_http_equiv = $matches["httpequiv"];
  } else {
    $meta_http_equiv = '<meta http-equiv="Content-Type"'
                     . ' content="text/html; charset=UTF-8">';
  }

  // Parse out meta tag description from head section
  if ( preg_match( '&<head.*(?P<desc><meta.*description[^>]*>).*</head&si'
                 , $filecontents, $matches )
     ) {
    $meta_description = $matches["desc"];
  } else {
    $meta_description = "";
  }

  // Remove stuff up to <html[^>]*> if html exists
  $filecontents = preg_replace( '&^.*<html[^>]*>&si', '', $filecontents );

  // Remove stuff up to </head> if head exists
  $filecontents = preg_replace( '&^.*</head[^>]*>&si', '', $filecontents );

  // Remove stuff up to <body> if body exists
  $filecontents = preg_replace( '&^.*<body[^>]*>&si', '', $filecontents );

  // Remove stuff after </html[^>]*> if html exists
  $filecontents = preg_replace( '&</html[^>]*>.*$&si', '', $filecontents );

  // Remove stuff after </body[^>]*> if html exists
  $filecontents = preg_replace( '&</body[^>]*>.*$&si', '', $filecontents );

  // Fix up img tag src="" paths
  $pattern = '&(<img[^>]*src=")([^"\s]*)([^>]*>)&si';
  $replacement = '${1}' . $pathname . '${2}${3}';
  $filecontents = preg_replace( $pattern, $replacement, $filecontents );

  // Fix up img tag src='' paths
  $pattern = "&(<img[^>]*src=')([^'\s]*)([^>]*>)&si";
  $replacement = '${1}' . $pathname . '${2}${3}';
  $filecontents = preg_replace( $pattern, $replacement, $filecontents );
}
?>

<head>
  <title><? echo $title ?></title>
  <?
    echo $meta_http_equiv . "\n";
    echo $meta_description . "\n";
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
<?
  echo $doc_error;
  echo $filecontents;
?>
</div>

<? gnome_foot() ?>

</div>
</body>
</html>
