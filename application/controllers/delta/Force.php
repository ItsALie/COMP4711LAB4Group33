<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Force extends Application
{

  /**
   * Index Page for the Delta Controller.
   *
   */
  public function index()
  {
    $this->show(4);
  }
}
