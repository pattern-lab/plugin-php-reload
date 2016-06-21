<?php

/*!
 * Reload Listener Class
 *
 * Copyright (c) 2016 Dave Olsen, http://dmolsen.com
 * Licensed under the MIT license
 *
 * Adds automatic browser reload support to Pattern Lab
 *
 */

namespace PatternLab\Reload;

use \PatternLab\Config;
use \PatternLab\Console;
use \PatternLab\Data;

class PatternLabListener extends \PatternLab\Listener {
  
  protected $faker;
  protected $locale;
  
  /**
  * Add the listeners for this plug-in
  */
  public function __construct() {
    
    // add listener
    $this->addListener("watcher.start","initServer");
    
  }
  
  /**
  * Initialize the web socket server
  */
  public function initServer() {
    
    if ((bool)Config::getOption("reload.on")) {
      $path = __DIR__."AutoReloadServer.php";
      $fp   = popen("php ".$path, "r");
    }
    
  }
  
}
