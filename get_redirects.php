<?php

$row = 1;

if (($handle = fopen('file.csv', 'r')) !== false) {
    while (($data = fgetcsv($handle)) !== false) {
        $num = count($data);
        if ($num < 3) {
            continue;
        }
        if ($data[2] === 'REDIRECT_NOTSEARCHABLE') {
            echo $data[1] . ' ' . urldecode($data[0]) . "\r\n";
        }
        $row++;
    }
    fclose($handle);
}