<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
*
*/
class Category extends BE_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->config->load('common/status');
        $this->load->model('backend/category_m');
    }

    public function index()
    {
        $this->data['view'] = 'category/index';
        $this->data['active']['category/index'] = true;
        $this->language('category/index');

        $this->data['languages'] = $this->category_m->get();

        $this->load->view('main_layout', $this->data);
    }

    public function add()
    {
        if ('POST' === @REQUEST_METHOD) {
            $this->_add();
        }

        $this->data['view'] = 'category/add';
        $this->data['active']['category/add'] = true;
        $this->language('category/add');

        $this->load->view('main_layout', $this->data);
    }

    public function edit($alias = null)
    {
        if ('POST' === @REQUEST_METHOD) {
            $this->_edit();
        }

        if (!empty($alias)) {
            if (is_numeric($alias)) {
                $this->db->where('id', $alias);
            } else if (is_string($alias)) {
                $this->db->where('alias', $alias);
            }

            $this->data['language'] = $this->language_m->get(null, true);

            if (empty($this->data['language'])) {
                unset($this->data['language']);
            }
        }

        $this->data['view'] = 'language/edit';
        $this->data['active']['language/edit'] = true;
        $this->language('language/edit');

        $this->load->view('main_layout', $this->data);
    }

    public function delete($alias = null)
    {
        if (!empty($alias)) {
            if (is_numeric($alias)) {
                $this->db->where('id', $alias);
            } else if (is_string($alias)) {
                $this->db->where('alias', $alias);
            }

            $this->data['language'] = $this->language_m->get(null, true);

            if (empty($this->data['language'])) {
                unset($this->data['language']);
            } else {
                $this->language_m->delete($this->data['language']->id);

                // redirect(full_url('language'));
            }
        }

        $this->data['view'] = 'language/delete';
        $this->data['active']['language/delete'] = true;
        $this->language('language/delete');

        $this->load->view('main_layout', $this->data);
    }

    private function _add()
    {
        $this->language('language/add');

        // create a new language
        $this->data['language'] = $this->language_m->get_new();

        // setup the form
        $rules = $this->language_m->get_rules();
        $this->form_validation->set_rules($rules);

        // process the form
        if (true === $this->form_validation->run()) {
            $data = $this->language_m->array_from_post(array('name', 'native_name', 'alias', 'code', 'encoding', 'sort_order', 'translable'));

            $data['sort_order'] = (int)$data['sort_order'];
            $data['translable'] = (int)$data['translable'];
            $data['status'] = 0;
            if (is_array($this->input->post('status')) && count($this->input->post('status'))) {
                foreach ($this->input->post('status') as $status) {
                    $data['status'] += $status;
                }
            }

            $this->language_m->save($data);

            redirect(full_url('language'));
        }
    }

    private function _edit()
    {
        $id = (int)$this->input->post('id');
        $this->data['language'] = $this->language_m->get($id);
        $this->language('language/add');

        // create a new language
        $this->data['language'] = $this->language_m->get_new();

        // setup the form
        $rules = $this->language_m->get_rules();
        $this->form_validation->set_rules($rules);

        // process the form
        if (true === $this->form_validation->run()) {
            $data = $this->language_m->array_from_post(array('name', 'native_name', 'alias', 'code', 'encoding', 'sort_order', 'translable'));

            $data['sort_order'] = (int)$data['sort_order'];
            $data['translable'] = (int)$data['translable'];
            $data['status'] = 0;
            if (is_array($this->input->post('status')) && count($this->input->post('status'))) {
                foreach ($this->input->post('status') as $status) {
                    $data['status'] += $status;
                }
            }

            $this->language_m->save($data, $id);

            redirect(full_url('language'));
        }
    }

    public function unique_alias($alias = null)
    {
        $id = (int)$this->input->post('id');
        ! $id || $this->db->where('id != ', $id);
        $this->db->where('alias', $this->input->post('alias'));

        if (count($this->language_m->get())) {
            $this->form_validation->set_message('unique_alias', $this->lang->line('is_unique'));
            return false;
        }

        return true;
    }

    public function unique_code($code = null)
    {
        $id = (int)$this->input->post('id');
        ! $id || $this->db->where('id != ', $id);
        $this->db->where('code', $this->input->post('code'));

        if (count($this->language_m->get())) {
            $this->form_validation->set_message('unique_code', $this->lang->line('is_unique'));
            return false;
        }

        return true;
    }
}

/* End of file category.php */
/* Location: ./application/controllers/backend/category/category.php */