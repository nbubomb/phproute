<?php 
$url = $_SERVER['REQUEST_URI'];
$url_parts = explode('?', $url);
$url = $url_parts[0];
$url = str_replace('/phproute', '', $url);
$url_parts = explode('/', $url);

if ($url_parts[1] == '') {
    include 'signin.php';
} elseif ($url_parts[1] == 'signin') {
    include 'signin.php';
} elseif ($url_parts[1] == 'team') {
    if (isset($url_parts[2]) && !empty($url_parts[2])) {
        $team = $url_parts[2];
        include 'team.php';
    } else {
        echo "เลือกทีม";
    }
} else {
    include 'errors/error404.php';
}
?>