<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
*
*/
class Language_m extends MY_Model
{
    protected $table_name = 'language';
    protected $order_by = 'sort_order';

    protected $rules = array(
        'name' => array(
            'field' => 'name',
            'label' => 'lang:language_name',
            'rules' => 'trim|required|min_length[3]|max_length[64]|xss_clean'
        ),

        'native_name' => array(
            'field' => 'native_name',
            'label' => 'lang:native_name',
            'rules' => 'trim|required|min_length[3]|max_length[64]|xss_clean'
        ),

        'alias' => array(
            'field' => 'alias',
            'label' => 'lang:alias',
            'rules' => 'trim|required|alpha_dash|min_length[3]|max_length[64]|callback_unique_alias|xss_clean'
        ),

        'code' => array(
            'field' => 'code',
            'label' => 'lang:iso-639-1',
            'rules' => 'trim|required|alpha|exact_length[2]|callback_unique_code'
        ),

        'encoding' => array(
            'field' => 'encoding',
            'label' => 'lang:encoding',
            'rules' => 'trim|required|min_length[3]|max_length[32]|xss_clean'
        ),

        'sort_order' => array(
            'field' => 'sort_order',
            'label' => 'lang:sort_order',
            'rules' => 'trim|is_natural|xss_clean'
        ),

        'translable' => array(
            'field' => 'translable',
            'label' => 'lang:translable',
            'rules' => 'trim|required|is_natural|less_than[2]|xss_clean'
        )
    );

    function __construct()
    {
        parent::__construct();
    }

    public function get_new()
    {
        $language = new stdClass();
        $language->name        = '';
        $language->native_name = '';
        $language->code        = '';
        $language->encoding    = '';

        return $language;
    }
}

/* End of file language_manager_m.php */
/* Location: ./application/models/backend/language/language_manager_m.php */