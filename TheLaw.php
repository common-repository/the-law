<?php
/*
Plugin Name: The Law
Description: Add XSS protection to post content with an HTMLawed filter
Donate Link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=92XWZSS88YF9C
Version: 1.0
Author: Kenneth Rapp <kennethrapp1@gmail.com>
License: GPLv2 or later
*/

require_once(dirname(__FILE__)."/vendor/htmlawed/htmlawed/htmLawed.php");

class TheLaw{

	private $Settings = array();

	function __set($key, $value){
		if(!array_key_exists($key, $this->Settings)){
			$this->Settings[$key] = $value;
		}
	}

	function __get($key){
		if(array_key_exists($key, $this->Settings)){
			return $this->Settings[$key];
		}
		return null;
	}

	function __construct(){
		
		$this->plugin_name = plugin_basename(__FILE__);
		$this->config_file = dirname(__FILE__).DIRECTORY_SEPARATOR.".htmlawedconfig";

		/* .htmlawedconfig will not show up in wordpress' plugin editor. */

		if(is_readable($this->config_file)){ 
			if($this->Config = parse_ini_file($this->config_file, true)){ 
				foreach($this->Config['Filters'] as $filter){ 
					add_filter($filter, array($this, 'theLaw'));
				}
			}
		}
	}

	function theLaw($content){
		return htmLawed($content, $this->Config["HTMLawed"]);
	}
}

new TheLaw();