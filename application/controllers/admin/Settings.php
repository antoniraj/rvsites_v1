<?php

/**
 * Agent Controller Class
 * Provides functionality for agent management
 * @access public
 * @package controllers
 * @Author Infant Kishore, Joan Britto S
 * @Reviewed Loganathan N
 */
class Settings extends CI_Controller {

    /**
     * Agent Constructor
     *
     * @access public
     * */
    function __construct() {
        parent::__construct();
		$this->load->model(array('Settings_model'));
       
    }

    /**
     * Retrieves the travelers details
     * @return void
     * @access public
     */
    public function index() {
        
		
		$data['title'] = 'Settings';
        $result = $this->Settings_model->get_settings('1');

        if(isset($_POST['btnSettings']))
        {
            $data_post['site_title'] = $this->input->post('site_title');
            $data_post['logo'] = '';
            $data_post['meta_keyword'] = $this->input->post('meta_keyword');
            $data_post['meta_desc'] = $this->input->post('meta_desc');
            $data_post['fee_totalamount'] = $this->input->post('fee_totalamount');
            $data_post['paypal_proc_fee'] = $this->input->post('paypal_proc_fee');
            $data_post['cc_proc_fee'] = $this->input->post('cc_proc_fee');

            $data_post['in_proc_fee'] = $this->input->post('in_proc_fee');
            $data_post['currency_formate'] = $this->input->post('currency_formate');
            $data_post['payment_method'] = $this->input->post('payment_method');
            $data_post['cs_notification'] = $this->input->post('cs_notification');
            $data_post['book_notification'] = $this->input->post('book_notification');

            $this->Settings_model->update_settings($data_post);
            redirect('admin/settings');
        }
        // echo '<pre>'; 
        // print_r($result);exit;
       
        $data['site_title'] = $result->site_title;
        $data['logo'] = $result->logo;
        $data['meta_keyword'] = $result->meta_keyword;
        $data['meta_desc'] = $result->meta_desc;
        $data['fee_totalamount'] = $result->fee_totalamount;
        $data['paypal_proc_fee'] = $result->paypal_proc_fee;
        $data['cc_proc_fee'] = $result->cc_proc_fee;

        $data['in_proc_fee'] = $result->in_proc_fee;
        $data['currency_formate'] = $result->currency_formate;
        $data['payment_method'] = $result->payment_method;
        $data['cs_notification'] = $result->cs_notification;
        $data['book_notification'] = $result->book_notification;

        $this->load->view('admin/admin_header');
        $this->load->view('settings/settings',$data);
        $this->load->view('admin/admin_list_footer');
    }
	
	/**
     * Views the travelers details
     * @return void
     * @access public
     */
	 
	public function view() {
		
	
	}
	
}
