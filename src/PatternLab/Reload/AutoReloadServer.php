<?php

/*!
 * Auto-Reload Server
 *
 * Copyright (c) 2013-2016 Dave Olsen, http://dmolsen.com
 * Licensed under the MIT license
 *
 * The server that clients attach to to learn about content updates. See
 * lib/Wrench/Application/contentSyncBroadcasterApplication.php for logic
 *
 */

require("../../../../../autoload.php");

$server = new \Wrench\BasicServer('ws://0.0.0.0:8001');
$server->registerApplication('reload', new \PatternLab\Reload\AutoReloadApplication());
$server->run();
