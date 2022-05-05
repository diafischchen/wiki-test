<?php

const VERSION = '1.1.3';

const ABSURL = 'http://localhost/';

const APP_PATH = ABSPATH . '/app';
const CONFIG_PATH = ABSPATH . '/config';
const LIBS_PATH = ABSPATH . '/libs';
const VIEW_PATH = ABSPATH . '/view';
const WIKIS_PATH = ABSPATH . '/wikis';

// Debug
const DEBUG_MODE = true;

// Errors anzeigen
if (DEBUG_MODE) {
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
} else {
    error_reporting(0);
}

require CONFIG_PATH . '/functions.php';
require CONFIG_PATH . '/auth.php';
require CONFIG_PATH . '/autoload.php';
require LIBS_PATH . '/autoload.php';