<?php

/**
 * User Model Class
 * Provides database access for user management [Agent, Clerk, Administrator]
 * @access public
 * @package models
 * @Author Infant Kishore, Joan Britto S, Jerin Monish AC
 * @Reviewed Loganathan N
 */
class Suggestion_model extends CI_Model {

    public $CI;
    public $table_name = '';
  

    /**
     * Constructor
     * 
     * */
    public function __construct() {
        parent::__construct();
        $this->CI = & get_instance();
    }


     /**
     * Get Attorneys Office
     * @access public
     * @param $id as int
     * @return array data
     * */
    public function manage() {
        $table_name = 'suggest_information';
        $data = [];

        $this->db->select('*')
                ->from($table_name);
                
        $result = $this->db->get();
        if (!empty($result)) {
            $data = $result->result();
        }

        return $data;
    }

    

    /**
     * Get Attorneys Office
     * @access public
     * @param $id as int
     * @return array data
     * */
    public function get_byid($id=false) {
       $table_name = 'suggest_information';
        $data = [];

        $this->db->select('*')
                ->from($table_name)
                ->where(array('id' => $id));
       $result = $this->db->get();
        if (!empty($result)) {
            $data = $result->row();
        }

        return $data;
       
    }


}
