<?php
$month = 1;
switch ($month) {
    case 2:
        echo "28/29";
    break;
    case 4:
    case 6:
    case 9:
    case 11:
        echo "30";
    break;
    default: echo "31";
}
?>