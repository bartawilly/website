<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public function index() {
        $this->load->view("home");
    }

    public function project() {
        $this->load->view("project");
    }

    public function language() {
        if($this->config->item('language') == "arabic"){
            $this->config->item('language', 'english');
        }
        else{
            $this->config->item('language', 'arabic');
        }
        $this->load->view("home");
    }


    


}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */