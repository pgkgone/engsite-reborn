<?php
$DB = new SQLite3("db.sqlite");
$path = "php/pdfviewer.php?title=".$_GET["title"];
echo "<a class='pdf_link_a hide-on-med-and-down' href='". $path ."'" ."onclick=\"window.open('".$path."','newwindow','width=800,height=600');return false;\">"."PDF</a>";
?>