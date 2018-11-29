<?php
set_time_limit(0);
$source = 'message.txt';

while(true){
    $lastRequest = (int) $_GET['time'] ?? null;
    clearstatcache();

    $lastChangeFile = filemtime($source);

    if ($lastRequest < $lastChangeFile || $lastRequest == 0){
        $data = file_get_contents($source);
        $responce = [
          'data' => $data,
          'time' => $lastChangeFile
        ];
        echo json_encode($responce);
        break;
    } else {
        sleep(1);
    }
}