<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Able extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * default function for alpha
	 */
	public function index() {
        $this->show(1);
    }

}
