<?php

/**
 * Agent Controller Class
 * Provides functionality for agent management
 * @access public
 * @package controllers
 * @Author Infant Kishore, Joan Britto S
 * @Reviewed Loganathan N
 */
class Property extends CI_Controller {

    /**
     * Agent Constructor
     *
     * @access public
     * */
    function __construct() {
        parent::__construct();
		$this->load->model(array('Property_model'));
       
    }

    /**
     * Retrieves the travelers details
     * @return void
     * @access public
     */
    public function index() {
        
		$result	= $this->Property_model->get_all();
		$data['property_list'] = $result['data'];      

        $this->load->view('admin/admin_header');
        $this->load->view('property/list',$data);
        $this->load->view('admin/admin_footer');
    }
	
	/**
     * Views the travelers details
     * @return void
     * @access public
     */
	    public function view($id) {
        $data = [];
        $result = $this->Property_model->get_property_by_id($id);
      	if ($result) {
            $result = $result[0];
            $data['id'] = $result->id;
			$data['property_title'] = $result->property_title;
        }
        $this->template->build('property/view', $data);
    }

}
