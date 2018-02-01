
<?php
/*
 * This for task Charlie. This calls a subcontroller.
 */
class Charlie extends Application {
	
	/* Calls the Parent constructor */
	function __construct()
	{
		parent::__construct();
	}
	/* The subcontroller */
	public function brown()
	{
		$this->show(3);
	}
}

