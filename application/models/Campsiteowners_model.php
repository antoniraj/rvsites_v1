<?php

/**
 * User Model Class
 * Provides database access for user management [Agent, Clerk, Administrator]
 * @access public
 * @package models
 * @Author Infant Kishore, Joan Britto S, Jerin Monish AC
 * @Reviewed Loganathan N
 */
class Campsiteowners_model extends CI_Model {

    public $CI;
    public $table_name = 'campsite_owners as CO';
  

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
    public function get_all() {
        $table_name = $this->table_name;
        $return = [];
        $this->db->select('CO.*,US.*')
                ->from($table_name)
				->join('users as US','CO.user_id = US.id','inner')
                ->where('US.status', 'Active');            
              
        $data = $this->db->get();
        if (!empty($data)) {
            $return['data'] = $data->result();
            return $return;
        } else {
            return $return;
        }
    }
	
	/**
     * Retrieve a campsiteowners details by id
     * @access public
     * @param type $id as integer
     * @return array data
     * */
    public function get_campsiteowner_by_id($id) {
       $table_name = $this->table_name;
        $return = [];
        $this->db->select('CO.*,US.*')
                ->from($table_name)
				->join('users as US','CO.user_id = US.id','inner')
                ->where('US.status', 'Active')
				->where('CO.id', $id);            
              
        $data = $this->db->get();
        if (!empty($data)) {
            $return['data'] = $data->result();
            return $return;
        } else {
            return $return;
        }
    }

   

}
