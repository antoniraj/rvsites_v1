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
        
       
        $data['title'] = 'Campsite Owner - Add'; 
        if (isset($_POST['btnCampsiteOwners'])) {
               
          
           $user_table['email'] = $this->input->post('email');
           $user_table['mobile'] = $this->input->post('mobile');
           $user_table['password'] = md5($this->input->post('mobile'));
           $user_table['user_type'] = 2;
           $user_table['status'] = 'Active';
           $user_table_id = $this->campsiteowners_model->add_user($user_table);

           $campsite_owner_table['user_id'] = $user_table_id;
           $campsite_owner_table['firstname'] = $this->input->post('firstname');
           $campsite_owner_table['lastname'] = $this->input->post('lastname');
           $this->campsiteowners_model->add_campsite_owner($campsite_owner_table);

           $this->session->set_flashdata('Message','Campsite Owner has been Saved Successfully!');
           redirect('admin/campsiteowners');
        }    

        $this->load->view('admin/admin_header');
        $this->load->view('campsiteowners/add',$data);
        $this->load->view('admin/admin_footer');
    }

  

}
