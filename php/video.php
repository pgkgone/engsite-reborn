<?php
echo<<<EOT
<div class="container" align="center">
    <video controls crossorigin playsinline width="555px" id="plyr" style="min-height: 290px;">
        <source src="" type="video/mp4">
    </video>
EOT;
if($_GET["part"]==0) {
    echo <<<EOT
    <div class="button_list">
        <button class="btn act" id="1">1</button>
        <button class="btn" id="2">2</button>
        <button class="btn" id="3">3</button>
		<button class="btn" id="4">4</button>
		<button class="btn" id="5">5</button>
		<button class="btn" id="6">6</button>
    </div>

EOT;
}
echo "</div>";
echo "<div class=\"divider\"></div>";
?>