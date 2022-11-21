<?php
echo isBitten();

function isBitten() {
    $s = mt_rand(0,1);
    //$bool = false;
    $resp = "";
    switch ($s) {
        case 0:
            $resp = "FALSE";
            break;
        case 1:
            //$bool = true;
            $resp = "TRUE";
            break;
    }
    return $resp;
}
?>