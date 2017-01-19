<?php
function getWSServer($website) {
    $result = shell_exec("/usr/bin/curl -s -I ".$website."|grep Server");
    return $result;
}