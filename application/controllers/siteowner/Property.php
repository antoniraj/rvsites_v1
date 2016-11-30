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

        $this->load->view('siteowner/header');
        $this->load->view('siteowner/property/list',$data);
        $this->load->view('siteowner/footer');
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

    /**
     * Get the Add form
     * @return void
     * @access public
     */
    public function add() {
        
       
        $data['title'] = 'Property - Add'; 
        if (isset($_POST['btnCampsiteOwners'])) {               
           
           $id = $this->input->post('id');

           $user_table['email'] = $this->input->post('email');
           $user_table['mobile'] = $this->input->post('mobile');
           
           $user_table['user_type'] = 2;
           $user_table['status'] = 'Active';
           $user_id = $this->input->post('user_id');          

          
           $campsite_owner_table['firstname'] = $this->input->post('firstname');
           $campsite_owner_table['lastname'] = $this->input->post('lastname');
           $campsite_owner_table['address'] = $this->input->post('address');
           $id = $this->input->post('id');
           

           if($id=='') //add
           {
              $user_table['password'] = md5($this->input->post('mobile'));
              $user_table_id = $this->campsiteowners_model->add_user($user_table);

              $campsite_owner_table['user_id'] = $user_table_id;
              $this->campsiteowners_model->add_campsite_owner($campsite_owner_table);
           }
           else
           {
            
              $this->campsiteowners_model->edit_user($user_table,$user_id);

              $campsite_owner_table['user_id'] =  $this->input->post('user_id');
              $this->campsiteowners_model->edit_campsite_owner($campsite_owner_table,$id);
           }

           $this->session->set_flashdata('Message','Campsite Owner has been Saved Successfully!');
           redirect('admin/campsiteowners');
        }    
        $data['text'] = 'Add'; 
        $this->load->view('siteowner/header');
        $this->load->view('siteowner/property/add',$data);
        $this->load->view('siteowner/cal_footer');
    }

}
