<?php
$DB = new SQLite3("db.sqlite");
$part = (int)$_GET['part']+1;
$title= (int)$_GET['title']+1;
$partsRome = array("I", "II", "III", "IV", "V");
$title=$DB->query("SELECT title FROM MENU WHERE id =".$title.";")->fetchArray()[0];
echo "<title class='main-text-only-one' id=".(int)$_GET['title'].$_GET['part'].">".$title.": Part — ".$partsRome[$part-1]."</title>";
echo "<h1 align='center' class='beauty_title''>".$title.": Part - ".$partsRome[$part-1]."</h1>";
echo "<div class=\"divider\"></div>";
?>


