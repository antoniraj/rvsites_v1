<?php

/**
 * Agent Controller Class
 * Provides functionality for agent management
 * @access public
 * @package controllers
 * @Author Infant Kishore, Joan Britto S
 * @Reviewed Loganathan N
 */
class Parking_location extends CI_Controller {

    /**
     * Agent Constructor
     *
     * @access public
     * */
    function __construct() {
        parent::__construct();
        $this->load->model('Parking_location_model','PL');
       
    }

    /**
     * List Attorneys Office
     * @return void
     * @access public
     */
    public function Manage() {  
        $data['results'] = $this->PL->manage();
        $title['title'] = 'Parking Locations';
        $title['menu'] = 'pl';
        $this->load->view('layout/header',$title);
        $this->load->view('parkinglocation/manage',$data);
        $this->load->view('layout/list_footer');
    }


    /**
     * Creates the agent signin functionality
     * @return void
     * @access public
     */
    public function add() {      
        $title['title'] = 'Add Parking Location';
        $title['menu'] = 'pl';

        if(isset($_POST['btnSave']))
        {
            
            $data['name'] = $this->input->post('name');
            $data['address'] = $this->input->post('address');           
            $data['created_on'] = date('Y-m-d H:i:s');      
            $data['status'] = 1;
            $this->PL->add($data);
            
            $this->session->set_flashdata('message', 'Parking Location has been saved successfully!');
            redirect('Parking_location/manage'); 
        }

        $data['id'] = '';   
        $data['text'] = 'Add Parking Location';          
       
        $this->load->view('layout/header',$title);
        $this->load->view('parkinglocation/add',$data);
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
            $this->PL->edit($id,$data);
            
            $this->session->set_flashdata('message', 'Parking Location has been saved successfully!');
            redirect('Parking_location/manage'); 
        }

        $results = $this->PL->get_byid($id);
        $data['id'] = $id;
        $data['name'] = $results->name;
        $data['address'] = $results->address;
              
        $data['text'] = 'Edit Parking Location';

        $title['title'] = 'Edit Parking Location';
        $title['menu'] = 'pl';
     
        $this->load->view('layout/header',$title);
        $this->load->view('parkinglocation/add',$data);
        $this->load->view('layout/add_footer');
    }

        /**
     * Delete Location
     * @return void
     * @access public
     */
    public function delete($id=false) {
        $this->db->delete('parking_location', array('id' => $id)); 
        $this->session->set_flashdata('message', 'Parking Location has been deleted successfully!');
        redirect('Parking_location/manage'); 
            
    }

}
