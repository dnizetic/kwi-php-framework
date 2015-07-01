<?php

class Kiwi_Input {

    /**
     * Utvrdjuje na temelju postavke da li input filtrirati
     */
    public function __construct() {
        $this->xss_clean = get_config_item('global_xss_clean');
    }
    
    /**
     * Sanira input parametar, dopustajuci samo
     * slova, brojeve, underscoreove i povlake.
     */
    private function _sanitize($input) {
        return preg_replace('/[^-a-zA-Z0-9_]/', '', $input);
    }

    /**
     * Dohvaca GET parametar na indeksu $name
     * @param type $name
     * @param type $clean
     */
    public function get($name, $clean = false) {
        if(!isset($_GET[$name]))
            return null;
        $arg = $_GET[$name];
        if ($clean || $this->xss_clean)
            return $this->_sanitize($arg);
        else
            return $arg;
    }

    /**
     * Dohvaća POST parametar
     * @param type $name
     * @param type $clean
     * @return type
     */
    public function post($name, $clean = false) {
        if(!isset($_POST[$name]))
            return null;
        $arg = $_POST[$name];
        if ($clean  || $this->xss_clean)
            return $this->_sanitize($arg);
        else
            return $arg;
    }

    
    /**
     * Dohvaca cookie parametar
     * @param type $name
     * @param type $clean
     * @return type
     */
    public function cookie($name, $clean = false) {
        if(!isset($_COOKIE[$name]))
            return null;
        $arg = $_COOKIE[$name];
        if ($clean  || $this->xss_clean)
            return $this->_sanitize($arg);
        else
            return $arg;
    }
    
    
    /**
     * Dohvaca server parametar
     * @param type $name
     * @param type $clean
     * @return type
     */
    public function server($name, $clean = false) {
        if(!isset($_SERVER[$name]))
            return null;
        $arg = $_SERVER[$name];
        if ($clean  || $this->xss_clean)
            return $this->_sanitize($arg);
        else
            return $arg;
    }

    
    /**
     * Dohvaca tip zahtjeva. On moze biti 'ajax', 'cli' ili 'default'.
     * @param type $name
     * @param type $clean
     * @return type
     */
    public function request_type($name, $clean = false) {
        
        if($_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest')
            return 'ajax';
        else if(php_sapi_name() === 'cli')
            return 'cli';
        else
            return 'default';
        
    }
    
}
