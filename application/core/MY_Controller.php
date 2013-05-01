<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class MY_Controller extends CI_Controller
{
    protected $data;

    function __construct()
    {
        parent::__construct();

        $this->data['lang'] = array();
    }

    protected function language($language)
    {
        $this->data['lang'] = array_merge(
            $this->data['lang'],
            $this->lang->load($language)
        );
    }
}