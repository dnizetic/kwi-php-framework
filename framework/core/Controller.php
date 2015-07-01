<?php

class Kiwi_Controller {

    /**
     * Klase koje se mogu referencirati unutar
     * ove klase. 
     * @var type 
     */
    public static $core_classes = array(
        'Global' => null, //ako je vrijednost null, ne postavlja se kao objekt unutar kontrolera
        'Config' => 'config',
        'Router' => 'router',
        'Load' => 'load',
        'Input' => 'input',
        'Database' => 'db',
        'Model' => 'model' //Has to come after Database
    );
    private static $instance;

    public function __construct() {
        self::$instance = & $this;

        foreach (self::$core_classes as $key => $val) {
            require_once FRAMEWORK_PATH . '/core/' . $key . '.php';
            if ($val) {
                $cl_name = 'Kiwi_' . $key;
                if ($cl_name == 'Kiwi_Database') {
                    $this->$val = new Kiwi_Database(get_database_param('database'), get_database_param('username'), get_database_param('password'));
                } else if ($cl_name == 'Kiwi_Model') {
                    $this->$val = new Kiwi_Model($this->db);
                } else {
                    $this->$val = new $cl_name();
                }
            }
        }
    }

    public static function &get_instance() {
        return self::$instance;
    }

}
