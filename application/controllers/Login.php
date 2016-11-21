<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Perksme Development Team
 */
class Login extends CI_Controller{
    
    /* Executes the tasks when class is loaded */
    public function __construct() {
        parent::__construct();    
        $this->load->model('login_model');
    }



    public function index(){
        $data['title'] = 'RV Sites | Login';
        $this->load->view('login');
    }

    public function validateuser()
    {
         // Validate form fields
       $data['email'] = $this->input->post('email');
            $data['password'] = md5($this->input->post('password'));
            $result = $this->login_model->check_login($data);           
            $result = ($result['data']) ? $result['data'][0] : '';

           if (!empty($result)) {
                $session_data['id'] = $result->id;               
                $session_data['email'] = $result->email;
                $session_data['mobile'] = $result->mobile;
                $session_data['user_type'] = $result->user_type;              
                $this->session->set_userdata($session_data);
                
                // Check whether user Agent or Clerk
                if ($result->user_type == USER_TYPE_ADMIN) {
                    redirect('admin/dashboard', $result);
                } else if ($result->user_type == USER_TYPE_SITEOWNER) {
                    redirect('siteowner/dashboard', $result);
                } else if ($result->user_type == USER_TYPE_TRAVELLER) {
                    redirect('home', $result);
                }
                
            } else {
                $this->session->set_flashdata('error', $this->lang->line('login_invalid'));
                $data['title'] = 'RV Sites | Login';
                redirect('login', $data);
            }


        

    }
    
   /**
     * Logs the user out
     * @return void
     * @access public
     */
    public function logout() {
        $this->sess_expiration = 0;
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('mobile');
        $this->session->unset_userdata('user_type');
        //$this->session->sess_destroy();

        $this->session->set_flashdata('success', $this->lang->line('logout_success'));
        redirect('login', 'refresh');
    }
    
}

