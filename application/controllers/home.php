<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

      
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SendIndex_model');
        
        //Do your magic here
    }

    public function index()
    {
        $this->load->view('inc/header');
        $this->load->view('home');
        $this->load->view('inc/footer');
        
    }
    
    
    public function check_send_index()
    {
        $this->load->model('sendindex_model');

        if($this->input->post('submit'))
        {
            $client_code = $this->input->post('client_code');
            $pod = $this->input->post('pod');
            $send_index = $this->input->post('send_index');
            
            
            $client_data = array(
                'clinet_code'   => $client_code,
                'pod'           => $pod,
                'send_index'    => $send_index
            );
            
            $this->SendIndex_model->insert_index($client_data);
           

        } else{
            redirect('home', 'refesh');
        }                                    
       
    }

}

/* End of file Controllername.php */
