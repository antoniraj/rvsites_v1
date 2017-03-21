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

}
