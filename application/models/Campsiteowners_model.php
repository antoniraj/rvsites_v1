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
        $this->db->select('CO.*,CO.id AS coid,US.*')
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
				->join('users as US','CO.user_id = US.id','left')
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

     /**
    * Inserts Absence  details
    * @access public
    * @param $data array data
    * @return boolean true details added successfully
    */
    public function add_campsite_owner($data) {
        $table_name = 'campsite_owners';
        $result = $this->db->insert($table_name, $data);
        if ($result) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    /**
    * Inserts Absence  details
    * @access public
    * @param $data array data
    * @return boolean true details added successfully
    */
    public function add_user($data) {
        $table_name = 'users';
        $result = $this->db->insert($table_name, $data);
        if ($result) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    /**
    * Update Absence  details
    * @access public
    * @param $data array data
    * @return boolean true details added successfully
    */
    public function edit_campsite_owner($data,$id) {
        $table_name = 'campsite_owners';

        $this->db->where('id', $id);
        $this->db->update($table_name, $data);       
    }

    /**
    * Inserts Absence  details
    * @access public
    * @param $data array data
    * @return boolean true details added successfully
    */
    public function edit_user($data,$id) {
        $table_name = 'users';
        $this->db->where('id', $id);
        $this->db->update($table_name, $data); 
    }


   

}
