<?php

/**
 * Ukljucuje datoteku na putanju $path
 * @param type $path
 * @return boolean
 */
function include_file($path) {
    if (file_exists($path)) {
        require $path;
        return true;
    }
    return false;
}

/**
 * Vraca postavku
 * @param type $index
 */
function get_config_item($index) {
    require APP_PATH . '/config/config.php';
    if (isset($config[$index]))
        return $config[$index];
    else
        return null;
}

/**
 * Vraca postavku baze podataka
 * @param type $index
 */
function get_database_param($index) {
    require APP_PATH . '/config/database.php';
    if (isset($database[$index]))
        return $database[$index];
    else
        return null;
}

/**
 * Standardna funkcija za prikaz gresaka
 */
function show_error($message, $heading = '<h2>Framework error</h2>') {
    echo $heading . $message;
}
