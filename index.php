<?php

/**
 * Okruzenje moze biti 'dev' ili 'prod', 
 * prvo za development, a drugo za produkciju.
 */
define('ENV', 'dev');


switch (ENV) {
    case 'dev':
        error_reporting(E_ALL);
        break;
    case 'prod':
        error_reporting(0);
        break;
    default:
        exit('Okruzenje nije ispravno podeseno.');
}


/**
 * Verzija okvira
 */
define('KIWI_VERSION', '0.1');

/**
 * Putanja do sistemskih datoteka
 */
define('FRAMEWORK_PATH', 'framework');

/**
 * Putanja do izvorisnog direktorija aplikacijskih datoteka
 */
define('APP_PATH', 'app');


/**
 * Ishodisni direktorij
 */
define('ROOT_PATH', basename(dirname(__FILE__)));


/**
 * Ucitavanja aplikacijskih konstanti
 */
require APP_PATH . '/config/constants.php';

/**
 * Ucitavanje konfiguracije BP
 */
require APP_PATH . '/config/database.php';

/**
 * Ogranicavanje vremena izvrsavanja PHP skripta
 */
@set_time_limit(30);



/**
 * Ucitavanje glavnog kontrolera
 */
require FRAMEWORK_PATH . '/core/Controller.php';

/**
 * Ucitavanje glavnog modela
 */
require FRAMEWORK_PATH . '/core/Model.php';

/**
 * Instantacija singleton base controllera
 */
$kiwi = new Kiwi_Controller();

/**
 * Vraca okvir kao "super objekt" sa svim ucitanim klasama
 */
function &get_kiwi_instance() {
    return Kiwi_Controller::get_instance();
}


$kr = $kiwi->router;

$controller = $kr->get_controller();
$method = $kr->get_method();

if ($controller) {
    if (include_file(APP_PATH . '/controllers/' . $controller . '.php')) {
        $ctrl_instance = new $controller();
        $ctrl_instance->$method();
    } else {

        $ctrl_method = $kr->match_against_router();

        if ($ctrl_method) {
            $parts = explode('/', $ctrl_method);
            $controller = $parts[0];
            $method = $parts[1];

            if (include_file(APP_PATH . '/controllers/' . $controller . '.php')) {
                $ctrl_instance = new $controller();
                $ctrl_instance->$method();
            }
        } else {
            show_error('Controller "' . $controller . '" not found.');
        }
    }
}

