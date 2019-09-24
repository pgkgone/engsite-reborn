<?php
$DB = new SQLite3("db.sqlite");
$path = "php/pdfviewer.php?page=";
$task=$DB->query("SELECT page FROM tests WHERE title=".(int)$_GET['title']." AND part=".(int)$_GET['part']."")->fetchArray()[0];
$path .= $task;
echo "<a class='pdf_link_a' href='". $path ."'" ."onclick=\"window.open('".$path."','newwindow','width=800,height=600');return false;\">"."PDF</a>";
?>