<?php
session_start();

$counter = "count.txt";

if(!file_exists($counter)){
    $file=fopen($counter,"w");
    fwrite($file,0);
    fclose($file);
}

$count = (int)file_get_contents($counter);
if(!isset($_SESSION["count"])){

    $_SESSION["count"]=++$count;
    
    $file = fopen($counter,"w");
    fwrite($file,$count);
    fclose($file);
}

echo "<div class=\"viewsCount\">
        <span class=\"helperText\">Visitors</span>
        <span class=\"viewsText\">", $_SESSION['count'],"</span>
      </div>";
?>