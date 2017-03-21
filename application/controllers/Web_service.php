<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Web Service Controller Class
 * Provides functionality for absence  management
 * @access public
 * @package controllers
 */
class Web_service extends CI_Controller {

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('web_service_model');
        //error_reporting(-1);
        //ini_set('display_errors', false);
    }

    /**
     * Retrieves login details 
     * @return array
     * @access public
     */
    public function get_login_details() {
        // Get post values
        $post = file_get_contents("php://input");
        // Decode json post input as php array:
        $post_data = json_decode($post, true);
        $username = isset($post_data['username']) ? $post_data['username'] : '';
        $password = isset($post_data['password']) ? $post_data['password'] : '';
        $user = $this->web_service_model->get_user_id($username, $password);
        echo json_encode($user);
    }
	
	/**
     * Retrieves customers details 
     * @return array
     * @access public
     */
    public function get_customer_details() {
        // Get post values
        $customers = $this->web_service_model->get_customers();
        echo json_encode($customers);
    }
	
	/**
     * Retrieves attorneys office details 
     * @return array
     * @access public
     */
    public function get_attorneys_office_details() {
        // Get post values
        $attorneys_office = $this->web_service_model->get_attorneys_office();
        echo json_encode($attorneys_office);
    }
	
	/**
     * Retrieves location courthouse details 
     * @return array
     * @access public
     */
    public function get_location_courthouse_details() {
        // Get post values
        $location_courthouse = $this->web_service_model->get_location_courthouse();
        echo json_encode($location_courthouse);
    }
	
	/**
     * Retrieves location courthouse details 
     * @return array
     * @access public
     */
    public function get_parking_location_details() {
        // Get post values
        $parking_location = $this->web_service_model->get_parking_location();
        echo json_encode($parking_location);
    }
	
	/**
     * Retrieves push notification 
     * @return array
     * @access public
     */
    public function get_push_notification_details() {
        // Get post values
        $push_notification = $this->web_service_model->get_push_notification();
        echo json_encode($push_notification);
    }
	
	/**
     * Retrieves suggest information
     * @return array
     * @access public
     */
    public function get_suggest_information_details() {
        // Get post values
        $suggest_information = $this->web_service_model->get_suggest_information();
        echo json_encode($suggest_information);
    }

}
