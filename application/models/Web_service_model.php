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
	public $customers = 'customers';
	public $attorneys_office = 'attorneys_office';
	public $location_courthouse = 'location_couthouse';
	public $parking_location = 'parking_location';
	public $push_notification = 'push_notification';
	public $suggest_information = 'suggest_information AS SI';
	
	

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
	
	/*
     * This method handles getting customer details
     * @access public
     * @return type array data
     * */

    public function get_customers() {
		$table_name = $this->customers;
        // get customer details
        $customer_details_query = $this->db->select('*')
                ->from($table_name)
                ->where('status', '1')
                ->get();
        $customer_details = $customer_details_query->result();
		
		if($customer_details){
			$customer_data = array(
						'result'=>true,
						'msg'=>'',
						'customer_data'=>$customer_details
						);
		} else {
			$customer_data = array(
						'result'=>false,
						'msg'=>'No Records Found',
						);
		}
        return $customer_data;
    }
	
	/*
     * This method handles getting attorneys office details
     * @access public
     * @return type array data
     * */

    public function get_attorneys_office() {
		$table_name = $this->attorneys_office;
        // get customer details
        $attorneys_office_query = $this->db->select('*')
                ->from($table_name)
                ->where('status', '1')
                ->get();
        $attorneys_office_details = $attorneys_office_query->result();
		
		if($attorneys_office_details){
			$attorneys_office_data = array(
						'result'=>true,
						'msg'=>'',
						'attorneys_office_data'=>$attorneys_office_details
						);
		} else {
			$attorneys_office_data = array(
						'result'=>false,
						'msg'=>'No Records Found',
						);
		}
        return $attorneys_office_data;
    }
	
	/*
     * This method handles getting location courthouse details
     * @access public
     * @return type array data
     * */

    public function get_location_courthouse() {
		$table_name = $this->location_courthouse;
        // get customer details
        $location_courthouse_query = $this->db->select('*')
                ->from($table_name)
                ->where('status', '1')
                ->get();
        $location_courthouse_details = $location_courthouse_query->result();
		
		if($location_courthouse_details){
			$location_courthouse_data = array(
						'result'=>true,
						'msg'=>'',
						'location_courthouse_data'=>$location_courthouse_details
						);
		} else {
			$location_courthouse_data = array(
						'result'=>false,
						'msg'=>'No Records Found',
						);
		}
        return $location_courthouse_data;
    }
	
	/*
     * This method handles getting parking location details
     * @access public
     * @return type array data
     * */

    public function get_parking_location() {
		$table_name = $this->parking_location;
        // get customer details
        $parking_location_query = $this->db->select('*')
                ->from($table_name)
                ->where('status', '1')
                ->get();
        $parking_location_details = $parking_location_query->result();
		
		if($parking_location_details){
			$parking_location_data = array(
						'result'=>true,
						'msg'=>'',
						'parking_location_data'=>$parking_location_details
						);
		} else {
			$parking_location_data = array(
						'result'=>false,
						'msg'=>'No Records Found',
						);
		}
        return $parking_location_data;
    }
	
	/*
     * This method handles getting push notification details
     * @access public
     * @return type array data
     * */

    public function get_push_notification() {
		$table_name = $this->push_notification;
        // get customer details
        $push_notification_query = $this->db->select('*')
                ->from($table_name)
                ->where('status', '1')
                ->get();
        $push_notification_details = $push_notification_query->result();
		
		if($push_notification_details){
			$push_notification_data = array(
						'result'=>true,
						'msg'=>'',
						'push_notification_data'=>$push_notification_details
						);
		} else {
			$push_notification_data = array(
						'result'=>false,
						'msg'=>'No Records Found',
						);
		}
        return $push_notification_data;
    }
	
	/*
     * This method handles getting suggest information details
     * @access public
     * @return type array data
     * */

    public function get_suggest_information() {
		$table_name = $this->suggest_information;
        // get customer details
        $suggest_information_query = $this->db->select('SI.*,US.email')
                ->from($table_name)
				->join($this->users, 'SI.user_id = US.id', 'inner')
                //->where('status', '1')
                ->get();
        $suggest_information_details = $suggest_information_query->result();
		
		if($suggest_information_details){
			$suggest_information_data = array(
						'result'=>true,
						'msg'=>'',
						'suggest_information_data'=>$suggest_information_details
						);
		} else {
			$suggest_information_data = array(
						'result'=>false,
						'msg'=>'No Records Found',
						);
		}
        return $suggest_information_data;
    }
	
	
}
