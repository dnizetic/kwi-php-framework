<?php

class Kiwi_Router {

    private $current_url;
    private $request_uri;

    public function __construct() {
        $this->request_uri = $_SERVER['REQUEST_URI'];
        
        /**
         * Contains GET arguments
         */
        if (strpos($this->request_uri, '?') !== false) {
            $parts = explode('?', $this->request_uri);
            $this->request_uri = $parts[0];
            
            if(isset($parts[1])) {
                $query_string = $parts[1];
                parse_str($query_string, $_GET);
            }
        }
        $this->current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }

    /**
     * Vraca trenutno pozvani kontroler
     * @return type
     */
    function get_controller() {

        $parts = explode('/', $this->request_uri);
        if (count($parts) > 2) {
            return $parts[2];
        }
        return null;
    }

    /**
     * Vraca trenutno pozvanu metodu
     * @return string
     */
    function get_method() {
        $parts = explode('/', $this->request_uri);
        if (count($parts) > 3) {
            return $parts[3];
        }
        return 'index';
    }

    /**
     * Dohvaca base url - napr. books/met1
     * @return string
     */
    function get_base_url() {
        $fin_string = '';
        $parts = explode('/', $this->request_uri);
        if (count($parts) > 2) {
            $subparts = array_slice($parts, 2);
            foreach ($subparts as $p)
                $fin_string .= $p . '/';
            return substr($fin_string, 0, -1);
        }
        return $fin_string;
    }

    /**
     * Dohvaca assets ishodisni direktorij
     * @return string
     */
    function get_assets_path() {
        return "http://" . $_SERVER['HTTP_HOST'] . '/' . ROOT_PATH . '/assets/';
    }

    /**
     * Dohvaca root url, napr. localhost/kiwi
     * @return string
     */
    function get_root_url() {
        return "http://" . $_SERVER['HTTP_HOST'] . '/' . ROOT_PATH;
    }

    /**
     * Provjerava u $routes nizu da li
     * postoji match
     */
    function match_against_router() {

        require_once APP_PATH . '/config/routing.php';

        if (isset($routes)) {
            $base_url = $this->get_base_url();

            foreach ($routes as $key => $val) {
                if ($key == $base_url) {
                    return $val;
                }
            }
        }
        return false;
    }

}
