<?php


/**
 * Imena tablice moraju biti postavljene u dijete klasi pod
 * atributom $table (protected)
 */
class Kiwi_Model {

    protected $db;

    public function __construct($db) {
        $this->db = $db;
    }

    /**
     * Dohvaca sve retke u tablici
     * @return type
     */
    function get_all() {
        if(isset($this->table)) {
            $sql = 'select * from ' . $this->table;
            
            $rows = $this->db->executeSQL($sql);
            
            return $rows;
        }
    }
    
    /**
     * Dohvaca jedan redak po idu
     * @return type
     */
    function get($id) {
        if(isset($this->table) && isset($this->pk_name)) {
            $sql = 'select * from ' . $this->table . ' where ' . $this->pk_name . ' = ' . $id;
            
            $rows = $this->db->executeSQL($sql);
            
            if(count($rows) == 1)
                return $rows[0];
            else
                return array();
        }
    }

}
