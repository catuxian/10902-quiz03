<?php
$array=[1,2,3,4,5];
echo "原始陣列";
echo "<pre>";
print_r($array);
echo "</pre>";

foreach($array as $key => $value){
    if($key==0){
        echo $key."==";
        echo "up->".$key;
    }else{
        echo $key."==";
        echo "up->".($key-1);

    }

    if($key==(count($array)-1)){

        echo "down->".$key;
        echo "<br>";
    }else{

        echo "down->".($key+1);
        echo "<br>";
    }

    //$array[$key]=$value+2;
}

echo "改變後";
echo "<pre>";
print_r($array);
echo "</pre>";
?>