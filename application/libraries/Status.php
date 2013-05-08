<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by Cimex Team.
 * ======================
 * Date: 2013-05-08
 * Time: 22:44:52
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
 * Status management
 *
 * @author Vinh Trinh <vinhtrinh@rubikin.com>
 */
class Status
{
	/**
	 * Entity status
	 *
	 * @var array
	 */
	protected $status;

	/**
	 * CodeIgniter instance
	 *
	 * @var CodeIgniter
	 */
	protected $CI;

	/**
	 * The constructor
	 *
	 * @param string $entity entity name
	 */
	public function __construct($entity = null)
	{
		$this->CI =& get_instance();
		$this->CI->lang->load('common/status');

		// IMPORTANT: DO NOT change these STATUSES values
		// ¯¯¯¯¯¯¯¯¯  ¯¯¯¯¯¯              ¯¯¯¯¯¯¯¯
		// default statuses
		if (empty($entity) || ! is_string($entity)) {
			$statuses = array('active', 'suppend', 'deleted');
		}

		// statuses for language entity
		if ('language' === $entity) {
			$statuses = array('active', 'deleted');
		}

		foreach ($statuses as $bits => $status) {
			$this->status['value'][1 << $bits] = $status;
			$this->status['name'][$status] = 1 << $bits;
		}
	}

	/**
	 * Get status by id or name
	 *
	 * @param  mixed $status status identifier
	 * @return mixed           status value | name
	 */
	public function get($status = null)
	{
		if (empty($status)) {
			return $this->status['value'];
		}

		if (isset($this->status['value'][$status])) {
			return $this->status['value'][$status];
		}

		if (isset($this->status['name'][$status])) {
			return $this->status['name'][$status];
		}

		return false;
	}

	public function is($status)
	{
		# code...
	}
}

/* End of file Status.php */
/* Location: ./application/libraries/Status.php */