<?
include "functions.php";
webpage_init();
?>
<html>

<head>
  <title>GParted -- Search Results</title>
<? html_head() ?>
</head>
<body>
<div class="body">

<?
gnome_head();
gnome_menu_wo_ads();
?>
<div class="content">
<h1>Search Results</h1>

<?
include "google/gparted-search-results.inc";
?>

</div>

<? gnome_foot_wo_ads() ?>

</div>
</body>
</html>
