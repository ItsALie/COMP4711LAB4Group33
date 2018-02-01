<?php
/*For task Juliet. This service controller returns JSON data*/
class Juliet extends CI_Controller
{
	/* Calls the parent constructor */
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Echos a json object
	 */
	public function index()
	{
		$record = $this->quotes->get(1);
		header("Content-type: application/json");
		echo json_encode($record);
	}

}
