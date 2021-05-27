<?php
echo '<h3>';
for ($i = 0; $i <= 99; $i++){
    if ($i<10){
        echo '0'.$i.', ';
    }
    if ($i>9 & $i<99){
        echo $i.', ';
    }
    if ($i>=99){
        echo $i;
    }
} 
echo'</h3>';
?>