<?php

/**
 * Agent Controller Class
 * Provides functionality for agent management
 * @access public
 * @package controllers
 * @Author Infant Kishore, Joan Britto S
 * @Reviewed Loganathan N
 */
class Courthouse extends CI_Controller {

    /**
     * Agent Constructor
     *
     * @access public
     * */
    function __construct() {
        parent::__construct();
        $this->load->model('Courthouse_model');
       
    }

    /**
     * List Attorneys Office
     * @return void
     * @access public
     */
    public function Manage() {  
        $data['results'] = $this->Courthouse_model->manage();
        $title['title'] = 'Location of Court House';
        $title['menu'] = 'lch';
        $this->load->view('layout/header',$title);
        $this->load->view('courthouse/manage',$data);
        $this->load->view('layout/list_footer');
    }


    /**
     * Creates the agent signin functionality
     * @return void
     * @access public
     */
    public function add() {      
        $title['title'] = 'Add Location of Court House';
        $title['menu'] = 'lch';

        if(isset($_POST['btnSave']))
        {
            
            $data['name'] = $this->input->post('name');
            $data['address'] = $this->input->post('address');
            $data['latitude'] = $this->input->post('latitude');
            $data['longitude'] = $this->input->post('longitude');
            $data['created_on'] = date('Y-m-d H:i:s');      
            $data['status'] = 1;
            $this->Courthouse_model->add($data);
            
            $this->session->set_flashdata('message', 'Location of Court House has been saved successfully!');
            redirect('Courthouse/manage/'); 
        }

        $data['id'] = '';   
        $data['text'] = 'Add Location of Court House';
          
       
        $this->load->view('layout/header',$title);
        $this->load->view('courthouse/add',$data);
        $this->load->view('layout/add_footer');
    }

 
    
    /**
     * Update News info
     * @return void
     * @access public
     */
    public function edit($id=false) { 

        if(isset($_POST['btnSave']))
        {
            
            $data['name'] = $this->input->post('name');
            $data['address'] = $this->input->post('address');
            $data['latitude'] = $this->input->post('latitude');
            $data['longitude'] = $this->input->post('longitude');
            $data['created_on'] = date('Y-m-d H:i:s');      
            $data['status'] = 1;
            $this->Courthouse_model->edit($id,$data);
            
            $this->session->set_flashdata('message', 'Location of Court House has been saved successfully!');
            redirect('Courthouse/manage/'); 
        }

        $results = $this->Courthouse_model->get_byid($id);
        $data['id'] = $id;
        $data['name'] = $results->name;
        $data['address'] = $results->address;
        $data['longitude'] = $results->longitude;
        $data['latitude'] = $results->latitude;
        
        $data['text'] = 'Edit Location of Court House';

        $title['title'] = 'Edit Location of Court House';
        $title['menu'] = 'ao';
     
        $this->load->view('layout/header',$title);
        $this->load->view('courthouse/add',$data);
        $this->load->view('layout/add_footer');
    }

        /**
     * Delete Location
     * @return void
     * @access public
     */
    public function delete($id=false) {
        $this->db->delete('location_couthouse', array('id' => $id)); 
        $this->session->set_flashdata('message', 'Location of Court House has been deleted successfully!');
        redirect('Courthouse/manage/'); 
            
    }

}
