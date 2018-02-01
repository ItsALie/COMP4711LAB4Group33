<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Tango extends Application
{

  /**
   * Index Page for the Tango Controller.
   *
   */
  public function index()
  {
    $this->show(5);
  }
}
