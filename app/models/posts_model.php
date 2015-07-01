<?php

class posts_model extends Kiwi_Model
{
    protected $table = 'posts';
    /**
     * Dohvaca najkasnije postove
     * @return type
     */
    function get_latest_posts($cat_id = null) {
        
        $where = '';
        
        if(is_numeric($cat_id))
            $where = ' where cat_id = ' . $cat_id ;
        
        $sql = "select * from  posts
                left join categories on (categories.cat_id = posts.post_cat_id)
                $where
                order by post_created_at 
                limit 5";
        
        return $this->db->executeSQL($sql);
    }
}