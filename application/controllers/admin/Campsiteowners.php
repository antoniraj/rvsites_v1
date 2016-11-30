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
        $this->load->view('admin/admin_header');
        $this->load->view('campsiteowners/add',$data);
        $this->load->view('admin/admin_footer');
    }

    /**
    * Retrieve the campsite owner details by id
    * @return void
    * @access public
    */
    public function edit($id) {

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
      $result = $this->campsiteowners_model->get_campsiteowner_by_id($id);
    //echo '<pre>'; print_r($result);exit;
      $data['data'] = $result['data'];
      $data['text'] = 'Edit';      

      $this->load->view('admin/admin_header');
      $this->load->view('campsiteowners/add',$data);
      $this->load->view('admin/admin_footer');
    }

    function delete($id)
    {
      $this->db->delete('campsite_owners', array('id' => $id)); 
      $this->session->set_flashdata('Message','Campsite Owner has been Deleted Successfully!');
           redirect('admin/campsiteowners');
    }

  

}
