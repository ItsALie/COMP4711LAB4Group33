<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Reroute bananas/rule to golf.
 */
$route['bananas/rule'] = function() {
  return 'golf';
};
