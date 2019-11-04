<?php
/**
 * All rights reserved.
 * User: Dread Pirate Roberts
 * Date: 06-Aug-17
 * Time: 16:30
 */


require_once 'bootstrap/app.php';


Router::load(['routes/web.php','routes/api.php'])
             ::direct(Request::uri(),Request::method());

