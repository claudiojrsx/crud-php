<?php

class Erro {
    public static function errorHandling(Exception $e) {
        if (DEBUG) {
            echo '<prev>';
            print_r($e);
            echo '</prev>';
        } else {
            echo $e->getMessage();
        }
        exit();
    }
}