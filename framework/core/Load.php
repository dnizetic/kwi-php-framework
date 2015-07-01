<?php

class Kiwi_Load {

    /**
     * Ucitava pogled. Automatski dodaje .php ekstenziju kod
     * ucitavanja datoteke.
     * @param type $path
     */
    public function view($path, $data = null) {
        $data['kiwi'] =& get_kiwi_instance();
        extract($data);
        require APP_PATH . '/views/' . $path . '.php';
    }

    /**
     * Ucitava helper. Automatski dodaje .php ekstenziju kod
     * ucitavanja datoteke.
     * @param type $path
     */
    public function helper($path, $data = null) {
        if ($data)
            extract($data);
        require APP_PATH . '/helpers/' . $path . '.php';
    }

    /**
     * Ucitava biblioteku.
     * @param type $path
     */
    public function library($path) {
        $ci = & get_kiwi_instance();
        require APP_PATH . '/libraries/' . $path . '.php';
        $ci->$path = new $path();
    }
    
    /**
     * Ucitava model.
     * @param type $path
     */
    public function model($path) {
        $ci = & get_kiwi_instance();
        require APP_PATH . '/models/' . $path . '.php';
        $ci->$path = new $path($ci->db);
    }

}
