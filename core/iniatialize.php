<?php

   defined("DS") ? null : define("DS",DIRECTORY_SEPARATOR);
   defined('SITE_ROOT') ? null : define('SITE_ROOT',DS.'wamp64'.DS.'www'.DS.'name of project');

//    define path //wamp64/www/includes plus core

   defined('INC_PATH') ? null : define('INC_PATH',SITE_ROOT.DS.'includes');
   defined('CORE_PATH') ? null : define('CORE_PATH',SITE_ROOT.DS.'core');

//    load the config file first
require_once(INC_PATH.DS."config.php");

// core class
require_once(CORE_PATH.DS."post.php");


?>