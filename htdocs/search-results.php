<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
include "functions.php";
?>

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
