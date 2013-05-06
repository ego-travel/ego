<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by Cimex Team.
 * ======================
 * Date: date
 * Time: time
 *
 * @link http:://egotravel.com.vn
 * @version 1.0.0
 * @copyright (c) Cimex Team
 *
 * This file is part of the eGo Travel package.
 *
 * Warning: This program is protected by copyright law and international treaties.
 * Unauthorized reproduction or distribution of this program, or any portions of it,
 * may result in severe civil and criminal penalties, and will be prosecuted to the
 * maximum extent possible under the law.
 */

/**
 * User Group Controller
 *
 * @author Thinh Nguyen <email@address.com>
 */
class User_group extends BE_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->config->load('common/status');
        $this->lang->load('user/user_group');
        $this->load->model('backend/user/user_group_m');
    }

    public function index()
    {
        $this->data['view'] = 'user/user_group/index';
        $this->data['active'][$this->data['view']] = true;
        $this->lang->load($this->data['view']);

        $this->data['user_group'] = $this->user_group_m->get();

        $this->load->view('main_layout', $this->data);
    }
}

/* End of file user_group.php */
/* Location: ./application/controllers/backend/user/user_group.php */