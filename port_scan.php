<?php
//set_time_limit(0);
$target_ip = '127.0.0.1';
$ports = [80,81,88,6379,8000,8080,8088];
$timeout = 0.5;
foreach ($ports as $p) {
    # code...
    $f = @fsockopen($target_ip,$p,$errno, $errstr, $timeout);
    if(is_resource($f)){
        echo 'port : '.$p.'=>open<br>';
        fclose($f);
    }
}


?>
