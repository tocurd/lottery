<?php 
include_once APPPATH . 'models/Base_model.php';
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Game_rule_model extends Base_model {
	public function __construct() {
	    parent::__construct();
	    $this->table_name = 'game_rule';
	}



}