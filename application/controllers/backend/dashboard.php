<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends BE_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['lang'] = array_merge($this->data['lang'], $this->lang->load('dashboard'));

        $this->load->view('main_layout', $this->data);
    }
}

/* End of file test.php */
/* Location: ./application/controllers/test.php */