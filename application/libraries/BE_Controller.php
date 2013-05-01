<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BE_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->config->set_item('in_admin', true);

        // // $this->session->set('user_id', 1);
        // if (!$this->session->get('user_id')) {
        //     redirect(site_url('login'));
        // }

        $this->load->library('form_validation');

        $this->language('components/cphome');
        $this->language('components/sidebar');

        $this->data['view'] = strtolower(get_class($this));
        $this->data['active'][$this->data['view']] = true;
    }

    private function generate_active($views = array(), $prefix = null)
    {
        foreach ($views as $index => $value) {
            if (is_array($value)) {
                $this->data['active'][$index] = null;
                $this->generate_active($value, $index . '/');
            } else {
                $this->data['active'][$prefix . $value] = null;
            }
        }
    }
}

/* End of file BE_Controller.php */
/* Location: ./application/libraries/BE_Controller.php */