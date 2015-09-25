<?php
class Pico_Hide {

/**
 * Pico-Hide
 * A simple plugin to hide pages from navigation
 * 
 * @author Eeve Somepx
 * @link http://somepx.com
 * @license http://opensource.org/licenses/MIT
 */

	public function before_read_file_meta(&$headers) {
		$headers['hide'] = 'Hide';
	}

	public function get_page_data(&$data, $page_meta) {
		$data['hide'] = (isset($page_meta['hide'])) ? ((strtolower($page_meta['hide']) == 'true') ? 1 : 0) : 0;
	}

	public function get_pages(&$pages, &$current_page, &$prev_page, &$next_page) 
	{
    foreach ($pages as $key => $page) {
			if($page['hide']){
			  unset($pages[$key]);
		  }
    }
  }

}
?>
