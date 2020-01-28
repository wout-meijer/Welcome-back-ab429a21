<?php

print(checkBalance($argv) . "\n");

function checkBalance($argv) {
    if ($argv[1] == $argv[2]) {
        return 'In balans';
    }
    return 'Niet in balans';
}