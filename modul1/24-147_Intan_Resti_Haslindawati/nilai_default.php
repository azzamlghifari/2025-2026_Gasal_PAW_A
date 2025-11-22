<?php
function setHeight($minheight = 50){
    echo "the height is : $minheight <br>";
}

setHeight(350);
setHeight(); //will use the default value of 50
setHeight(135);
setHeight(80);
?>