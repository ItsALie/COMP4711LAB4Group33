<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Golf extends Application
{

  /**
   * Index Page for the Golf Controller.
   *
   */
  public function index()
  {
    $this->show(6);
  }
}
