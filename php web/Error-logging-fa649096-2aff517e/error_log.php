<?php

function countDown($int)
{
    try {
        if (!preg_match('/^[0-9]*$/', $int)) {
            throw new Exception('Er is iets fout gegaan...');
            exit;
        }
        if ($int <= +10 && $int >= 0) {
            echo 'Correct getal';
        } else {
            throw new Exception('Er is iets fout gegaan...');
            exit;
        }
    } catch (Exception $e) {
        error_log($e->getMessage(), 0) ;
    }
}

countDown(11);
