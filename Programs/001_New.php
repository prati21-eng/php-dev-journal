<?php
$a=10;
function fun()
{
    global $a;
    print($a);
}
fun();

?>