<?php

/**
 * User Model Class
 * Provides database access for user management [Agent, Clerk, Administrator]
 * @access public
 * @package models
 * @Author Infant Kishore, Joan Britto S, Jerin Monish AC
 * @Reviewed Loganathan N
 */
class Settings_model extends CI_Model {

    public $CI;
    public $table_name = 'settings';
  

    /**
     * Constructor
     * 
     * */
    public function __construct() {
        parent::__construct();
        $this->CI = & get_instance();
    }

    /**
     * Retrieves campsite owners details
     * @return array data
     * @param str $param array of login details
     * @access public
     */
    public function get_settings($id=false) {
        $table_name = $this->table_name;
        $data = [];

        $result = $this->db->get_where($table_name, array('id' => (int) $id));
        if (!empty($result)) {
            $data = $result->row();
        }

        return $data;
    }
	
	/**
     * Retrieve a campsiteowners details by id
     * @access public
     * @param type $id as integer
     * @return array data
     * */
    public function update_settings($data) {
       $table_name = $this->table_name;
        $this->db->where('id',1);
        $result = $this->db->update($table_name, $data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

   

}
