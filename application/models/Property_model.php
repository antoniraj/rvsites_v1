<?php

/**
 * User Model Class
 * Provides database access for user management [Agent, Clerk, Administrator]
 * @access public
 * @package models
 * @Author Infant Kishore, Joan Britto S, Jerin Monish AC
 * @Reviewed Loganathan N
 */
class Property_model extends CI_Model {

    public $CI;
    public $table_name = 'property as PR';
  

    /**
     * Constructor
     * 
     * */
    public function __construct() {
        parent::__construct();
        $this->CI = & get_instance();
    }

    /**
     * Retrieves property details
     * @return array data
     * @param str $param array of login details
     * @access public
     */
    public function get_all() {
        $table_name = $this->table_name;
        $return = [];
        $this->db->select('PR.*,')
                ->from($table_name)
                ->where('PR.status', 'Active');            
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
    public function get_property_by_id($id) {
	print_r($id); exit;
       $table_name = $this->table_name;
        $return = [];
        $this->db->select('PR.*')
                ->from($table_name)
				->where(array('PR.id', $id));            
        $data = $this->db->get();
		            $return['data'] = $data->result();

		print_r($return['data']); exit;
        if (!empty($data)) {
            $return['data'] = $data->result();
            return $return;
        } else {
            return $return;
        }
    }


	/**
     * Retrievess clerk details by clerk id
     * @param int id
     * @return array datas     
     * @access public
     */
    public function get_clerk_by_id($id){
        $table_name = $this->table_name;
        $data     = [];
        
        $this->db->select('*')
                    ->from($table_name)
                   // ->join('user_detail as UD','user_clerk_details.user_id=UD.id','inner')
                    ->where(array('UD.id'=>$id));                    
        $result = $this->db->get();
        if(!empty($result)){
            $data = $result->result();
        }

        return $data;
    }
}
