<?php
echo <<<EOT
<div id="units">
<h1 align="center">UNITS</h1>
<ol id="unitmenu">
EOT;
$parts = array("HISTORY OF PHYSICS", "STUDY OF THE UNIVERSE", "NANOTECHNOLOGY", "INTERDISCIPLINARY PHYSICS", "SCIENTIFIC SOLUTIONS FOR GLOBAL ISSUES");
for($i=0;$i<5;$i++){
    if($_GET["title"]==$i){
        echo '<li id="unit'.$i.'" class="selected"><a href="tests.php?title='.$i.'&part=0">'.$parts[$i].'</a>';
        echo '<div class="taskList">';
    }else{
        echo '<li id="unit'.$i.'"><a href="tests.php?title='.$i.'&part=0">'.$parts[$i].'</a>';
        echo '<div class="taskList" style="display: none;">';
    }

    for($j=0;$j<5;$j++){
        if($_GET["part"]==$j && $_GET["title"]==$i){
            echo '<span class="selectedTask" value="0'.($j+1).'"><a href="'.'tests.php?title='.$_GET["title"].'&part='.$j.'">Task '.($j+1).'</a></span><br>';
        } else echo '<span class="unselected" value="0'.($j+1).'"><a href="'.'tests.php?title='.$_GET["title"].'&part='.$j.'">Task '.($j+1).'</a></span><br>';
    }
    echo '</div>';
    echo '</li>';
}
echo '</ol>';
echo '</div>';
?>