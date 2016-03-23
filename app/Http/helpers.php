<?php
function status($code) {
    $status = [
        1 => 'waiting',
        2 => 'reviewing',
        3 => 'approved',
        4 => 'completed'
    ];

    if (array_key_exists($code, $status) !== true) {
        throw new Exception('Can not map the status code to text');
    }else{
        return $status[$code];
    }
}
