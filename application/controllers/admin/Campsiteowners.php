<?php

/**
 * Agent Controller Class
 * Provides functionality for agent management
 * @access public
 * @package controllers
 * @Author Infant Kishore, Joan Britto S
 * @Reviewed Loganathan N
 */
class Campsiteowners extends CI_Controller {

    /**
     * Agent Constructor
     *
     * @access public
     * */
    function __construct() {
        parent::__construct();
		$this->load->model(array('campsiteowners_model'));
       
    }

    /**
     * Retrieves the campsite owners details
     * @return void
     * @access public
     */
    public function index() {
        
		$result	= $this->campsiteowners_model->get_all();
		$data['owners_list'] = $result['data'];      

        $this->load->view('admin/admin_header');
        $this->load->view('campsiteowners/list',$data);
        $this->load->view('admin/admin_list_footer');
    }
	
	/**
     * Retrieve the campsite owner details by id
     * @return void
     * @access public
     */
	public function view($id) {
        
		$result	= $this->campsiteowners_model->get_campsiteowner_by_id($id);
		$data['owners_list'] = $result['data'];     

        $this->load->view('admin/admin_header');
        $this->load->view('campsiteowners/view',$data);
        $this->load->view('admin/admin_footer');
    }

    /**
     * Get the Add form
     * @return void
     * @access public
     */
    public function add() {
        
       
        $data['title'] = $result['Campsite Owner - Add'];     

        $this->load->view('admin/admin_header');
        $this->load->view('campsiteowners/add',$data);
        $this->load->view('admin/admin_footer');
    }

  

}
