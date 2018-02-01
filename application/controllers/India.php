<?php
/*For task Juliet. This service controller returns JSON data*/
class India extends CI_Controller
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
		// The following should be a relative link to your image file above
		$source = '../data/yee.jpg'; 
		// note that we could have referenced an image anywhere on our system

		// set the mime type for that image (jpeg, png, etc)
		header("Content-type: image/jpeg"); 
		header('Content-Disposition: inline');
		readfile($source); // dish it
	}
}
