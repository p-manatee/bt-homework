<?php 

$snail_position = 0;
$snail_speed = 3;
$tree_height = 100;
$tree_growth_speed = 1;
$days_counter = 0;
while($snail_position<$tree_height){
    
    $snail_position += $snail_speed;
    $tree_height += $tree_growth_speed;
    $days_counter++;
   
   
    echo "&#128012;
    <progress value='$snail_position' max='$tree_height'></progress>
        &#127794;<br><br>";
    echo " Dan $days_counter =>  Puz je presao : $snail_position cm, visina drveta je : $tree_height cm<br><br> ------------------------------------------------------------------------------------------------------------------------------------------------------------<br><br>";
}
echo "<h1>Puz se popeo na drvo za $days_counter dana<h1>";

