<?php

/**
 * Agent Controller Class
 * Provides functionality for agent management
 * @access public
 * @package controllers
 * @Author Infant Kishore, Joan Britto S
 * @Reviewed Loganathan N
 */
class Pushnotification extends CI_Controller {

    /**
     * Agent Constructor
     *
     * @access public
     * */
    function __construct() {
        parent::__construct();
        $this->load->model('Pushnotification_model');
       
    }

    /**
     * Creates the agent signin functionality
     * @return void
     * @access public
     */
    public function add() {      
         

        if(isset($_POST['btnPushnotification']))
        {
            // echo '<pre>';
            // print_r($_POST);exit;
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');
            $data['created_on'] = date('Y-m-d H:i:s'); 
            $data['to_sent_on'] = ($_POST['to_sent_on']!='')?date('Y-m-d',strtotime($_POST['to_sent_on'])):'';       
            $data['status'] = 1;
            $result = $this->Pushnotification_model->add($data);
            
            $this->session->set_flashdata('message', 'Notification has been saved successfully!');
            redirect('Pushnotification/manage/', $result); 
        }

        $data['id'] = '';
        $data['title'] = '';        
        $data['description'] = '';
        $data['text'] = 'Add Push Notification';
          
        $title['title'] = 'Add Push Notification';
        $title['menu'] = 'Notification';
        $this->load->view('layout/header',$title);
        $this->load->view('notification/add',$data);
        $this->load->view('layout/add_footer');
    }

 
    /**
     * List the Community Events
     * @return void
     * @access public
     */
    public function manage() {  
        $data['results'] = $this->Pushnotification_model->get_all_notification();
        $title['title'] = 'Manage Push Notification';
        $title['menu'] = 'Notification';
        $this->load->view('layout/header',$title);
        $this->load->view('notification/manage',$data);
        $this->load->view('layout/list_footer');
    }

    /**
     * Update News info
     * @return void
     * @access public
     */
    public function edit($id=false) { 

         if(isset($_POST['btnPushnotification']))
        {
            // echo '<pre>';
            // print_r($_POST);exit;
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');
            $data['created_on'] = date('Y-m-d H:i:s'); 
            $data['to_sent_on'] = ($_POST['to_sent_on']!='')?date('Y-m-d',strtotime($_POST['to_sent_on'])):'';       
            $data['status'] = 1;
            $result = $this->Pushnotification_model->edit($id,$data);
            
            $this->session->set_flashdata('message', 'Notification has been saved successfully!');
            redirect('Pushnotification/manage/', $result); 
        }

        $results = $this->Pushnotification_model->get_notification_byid($id);
        $title['title'] = 'Edit Push Notification';
        $title['menu'] = 'Notification';

        $data['text'] = 'Edit Push Notification';
        $data['id'] = $results->id;
        $data['title_notification'] = $results->title;
        $data['description'] = $results->description;
        $data['to_sent_on'] = date('m/d/Y',strtotime($results->to_sent_on));
       
        $this->load->view('layout/header',$title);
        $this->load->view('notification/add',$data);
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
