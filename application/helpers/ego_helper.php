<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Full URL
 *
 * Create a local URL based on your basepath. Segments can be passed via the
 * first parameter either as a string or an array.
 *
 * @access  public
 * @param   string
 * @return  string
 */
if ( ! function_exists('full_url'))
{
    function full_url($uri = '')
    {
        $CI =& get_instance();
        return $CI->config->site_url($uri, true);
    }
}

/* End of file ego_helper.php */
/* Location: ./application/helpers/ego_helper.php */