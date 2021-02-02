<div class='tituto'>Try/catch</div>



<?php 
//echo 7 / 0;

try {
    //echo 7 / 0;
    echo intdiv(7, 0);
}catch(Error $e){
    echo "deu erro";
}
