<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

  /**
   * Index Page for the Bravo Controller.
   *
   */
  public function index()
  {
    $this->show(2);
  }
}
