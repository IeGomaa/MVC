<?php

require_once '../vendor/autoload.php';

use IeCourse\core\Application;

const DS = DIRECTORY_SEPARATOR;
define('ROOT',dirname(__DIR__));
const APP = ROOT . DS . 'app';
const CORE = APP . DS . 'core';
const Model = APP . DS . 'models';
const VIEW = APP . DS . 'views';
const Controller = APP . DS . 'controllers';
const PUBLIC_PATH = 'http://www.ieCourse.com/';
const PROJECT = 'ieCourse';

$application = new Application();