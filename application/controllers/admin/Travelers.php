<?php

/**
 * Agent Controller Class
 * Provides functionality for agent management
 * @access public
 * @package controllers
 * @Author Infant Kishore, Joan Britto S
 * @Reviewed Loganathan N
 */
class Travelers extends CI_Controller {

    /**
     * Agent Constructor
     *
     * @access public
     * */
    function __construct() {
        parent::__construct();
		$this->load->model(array('Travelers_model'));
       
    }

    /**
     * Retrieves the travelers details
     * @return void
     * @access public
     */
    public function index() {
        
		$result	= $this->Travelers_model->get_all();
		$data['travellers_list'] = $result['data'];      

        $this->load->view('admin/admin_header');
        $this->load->view('travelers/list',$data);
        $this->load->view('admin/admin_list_footer');
    }
	
	/**
     * Views the travelers details
     * @return void
     * @access public
     */
	 
	public function view() {
		
	
	}
	
}
