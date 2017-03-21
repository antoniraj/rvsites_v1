<?php

/**
 * Agent Controller Class
 * Provides functionality for agent management
 * @access public
 * @package controllers
 * @Author Infant Kishore, Joan Britto S
 * @Reviewed Loganathan N
 */
class Dashboard extends CI_Controller {

    /**
     * Agent Constructor
     *
     * @access public
     * */
    function __construct() {
        parent::__construct();
       
    }

    /**
     * Creates the agent signin functionality
     * @return void
     * @access public
     */
    public function index() { 
        $title['title'] = 'Dashboard';
        $title['menu'] = 'Dashboard';
        $this->load->view('layout/header',$title);
        $this->load->view('layout/dashboard');
        $this->load->view('layout/footer');
    }

  

}
