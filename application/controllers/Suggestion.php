<?php

/**
 * Agent Controller Class
 * Provides functionality for agent management
 * @access public
 * @package controllers
 * @Author Infant Kishore, Joan Britto S
 * @Reviewed Loganathan N
 */
class Suggestion extends CI_Controller {

    /**
     * Agent Constructor
     *
     * @access public
     * */
    function __construct() {
        parent::__construct();
        $this->load->model('Suggestion_model');
       
    }

    /**
     * List Attorneys Office
     * @return void
     * @access public
     */
    public function Manage() {  
        $data['results'] = $this->Suggestion_model->manage();
        $title['title'] = 'Suggest Information';
        $title['menu'] = 'si';
        $this->load->view('layout/header',$title);
        $this->load->view('suggestion/manage',$data);
        $this->load->view('layout/list_footer');
    }


 
    
    /**
     * Update News info
     * @return void
     * @access public
     */
    public function view($id=false) { 

        $results = $this->Suggestion_model->get_byid($id);
        $data['id'] = $id;
        $data['user_id'] = $results->user_id;
        $data['description'] = $results->description;
              
        $data['text'] = 'View Suggest Information';

        $title['title'] = 'View Suggest Information';
        $title['menu'] = 'si';
     
        $this->load->view('layout/header',$title);
        $this->load->view('suggestion/view',$data);
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
