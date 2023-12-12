<?php

$i=1;
$end=100;
$s=0;
do{
    if($i<1)
    {

        echo"phep tinh khon thuc hien duoc";
    }

}
while($s<1);
while($i<$end)
{
    $s=$s +1.0/ $i;
    $i++;
}
echo$s;
?>