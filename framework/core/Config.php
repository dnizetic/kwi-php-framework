<?php


class Kiwi_Config {
    
    static $config;
    
    public function __construct() {
        require APP_PATH . '/config/config.php';
        self::$config = $config;
    }
    
    
    /**
     * Dohvaca postavku pod indexom $index.
     * Ako ne postoji, vraca null.
     * @param type $index
     * @return type
     */
    public function get_item($index) {
        if(isset(self::$config[$index]))
            return self::$config[$index];
        else
            return null;
    }
    
    /**
     * Postavlja postavku pod indexom $index.
     * Ako ne postoji, vraca null.
     * @param type $index
     * @return type
     */
    public function set_item($key, $value) {
        self::$config[$key] = $value;
    }
    
}
