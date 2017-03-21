<?php

/**
 * Agent Controller Class
 * Provides functionality for agent management
 * @access public
 * @package controllers
 * @Author Infant Kishore, Joan Britto S
 * @Reviewed Loganathan N
 */
class Content extends CI_Controller {

    /**
     * Agent Constructor
     *
     * @access public
     * */
    function __construct() {
        parent::__construct();
        $this->load->model('Content_model');
       
    }

    /**
     * List Attorneys Office
     * @return void
     * @access public
     */
    public function attorneys_office() {  
        $data['results'] = $this->Content_model->attorneys_office();
        $title['title'] = 'Attorneys Office';
        $title['menu'] = 'ao';
        $this->load->view('layout/header',$title);
        $this->load->view('content/attorneys_office_manage',$data);
        $this->load->view('layout/list_footer');
    }


    /**
     * Creates the agent signin functionality
     * @return void
     * @access public
     */
    public function ao_add() {      
        $title['title'] = 'Add Attorneys Office';
        $title['menu'] = 'ao';

        if(isset($_POST['btnSave']))
        {
            
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');
            $data['created_on'] = date('Y-m-d H:i:s');      
            $data['status'] = 1;
            $this->Content_model->ao_add($data);
            
            $this->session->set_flashdata('message', 'Content has been saved successfully!');
            redirect('Content/attorneys_office/'); 
        }

        $data['id'] = '';
        $data['title'] = '';        
        $data['description'] = '';
        $data['text'] = 'Add Attorneys Office';
          
       
        $this->load->view('layout/header',$title);
        $this->load->view('content/ao_add',$data);
        $this->load->view('layout/add_footer');
    }

 
    
    /**
     * Update News info
     * @return void
     * @access public
     */
    public function ao_edit($id=false) { 

        if(isset($_POST['btnSave']))
        {
            
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');
            
            $this->Content_model->ao_edit($id,$data);
            
            $this->session->set_flashdata('message', 'Content has been saved successfully!');
            redirect('Content/attorneys_office/'); 
        }

        $results = $this->Content_model->get_ao_byid($id);
        $data['id'] = $id;
        $data['title_ao'] = $results->title;
        $data['description'] = $results->description;
        
        $data['text'] = 'Edit Attorneys Office';

        $title['title'] = 'Edit Attorneys Office';
        $title['menu'] = 'ao';
     
        $this->load->view('layout/header',$title);
        $this->load->view('content/ao_add',$data);
        $this->load->view('layout/add_footer');
    }

        /**
     * Delete Location
     * @return void
     * @access public
     */
    public function delete($id=false) {
        $this->db->delete('push_notification', array('id' => $id)); 
        $this->session->set_flashdata('message', 'Push Notification has been deleted successfully!');
        redirect('Pushnotification/manage'); 
            
    }

    /**
     * view news News info
     * @return void
     * @access public
     */
    public function view($id=false,$channel=false) { 

       
        $results = $this->news_model->get_news_byid($id);
        $data['id'] = $id;
        $data['title'] = $results->title;
        $data['news_type'] = $results->news_type;
        $data['summary'] = $results->summary;
        $data['created_on'] = $results->created_on;
        $data['view_count'] = $results->view_count;

         $data['text'] = 'View News - '.$results->title;
        if($channel==1)
        {
            $data['text'] = 'View CEO Message - '.$results->title;
        }
        $this->news_model->add_view_count($id);
     
        $this->load->view('layout/header');
        $this->load->view('news/news_view',$data);
        $this->load->view('layout/footer');
    }

  

}
