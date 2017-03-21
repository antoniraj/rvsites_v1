<?php

/**
 * Web Service Model Class
 * Provides database access for web service 
 * @access public
 * @package models
 */
class Web_service_model extends CI_Model {

    public $CI;
    public $users = 'users AS US';

    /**
     * Constructor
     * 
     * */
    public function __construct() {
        parent::__construct();
        $this->CI = & get_instance();
    }

    /*
     * This method handles to get the user id by login credentials
     * @access public
     * @param 
     * @return type array data
     * */

    public function get_user_id($username, $password) {
        // Specifies the username and password
        $username = $username;
        $password = $password;
        //Table initiation
        $table_name = $this->users;
        //Query to fetch user type

        $user_type_query = $this->db->select('US.id,US.email,US.mobile,US.user_type,US.status')
                ->from($table_name)
                ->where(array('US.mobile' => $username, 'US.password' => encrypt_md5($password)))
                ->get();
        $result_data = $user_type_query->result();

        //print_r($admin_details); exit;	
        if (!empty($result_data)) {
            $usertype = $result_data[0]->user_type;
            $user_id = $result_data[0]->id;

            $result_array = array(
                "result" => true,
                "msg" => "",
                "user_type" => $usertype,
                "id" => $user_id,
            );
        } else {
            $result_array = array(
                "result" => false,
                "msg" => "No Records Found",
            );
        }
        return $result_array;
    }
}
