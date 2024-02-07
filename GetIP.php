<?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
echo ip_info($ip);
function ip_info($ip = NULL) {
       header('Content-Type: application/json; charset=utf-8');
    header('Accept: application/json');
    return file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip);
}

?>
