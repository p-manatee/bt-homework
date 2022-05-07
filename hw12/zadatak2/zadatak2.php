<?php
$wall_x= null;
$wall_y= null;
$tile_x= null;
$tile_y= null;

    if(isset($_POST['submit'])){
        if(isset($_POST['wall-x'])){
            if(!empty($_POST['wall-x'])){
                $wall_x = $_POST['wall-x'];
            }
        }
        if(isset($_POST['wall-y'])){
            if(!empty($_POST['wall-y'])){
                $wall_y = $_POST['wall-y'];
            }
        }
        if(isset($_POST['tile-x'])){
            if(!empty($_POST['tile-x'])){
                $tile_x = $_POST['tile-x'];
            }
        }
        if(isset($_POST['tile-y'])){
            if(!empty($_POST['tile-y'])){
                $tile_y = $_POST['tile-y'];
            }
        }
       if($wall_x != null && $wall_y != null){
           $wall_area = $wall_x * $wall_y;
       }
       if($wall_area){
           echo "Povrsina zida je: " . $wall_area." &#13216; <br>";
       }
       if($tile_x != null && $tile_y != null){
        $tile_area = $tile_x * $tile_y;
    }
    if($tile_area){
        echo "Povrsina zida je: " . $tile_area."&#13216; <br>";
    }
    $number_of_tiles =number_format($wall_area / $tile_area,2) ;
    // uracunacemo otpad od 5%
    $wastage = number_format(5*$number_of_tiles/100,2); 
    $total_number_of_tiles_with_wastage = $number_of_tiles +  $wastage;
    echo "Broj plocica koji je potreban je:  $total_number_of_tiles_with_wastage";
    }



?>