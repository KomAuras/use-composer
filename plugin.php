<?php
/*
Plugin Name: use-composer
 */

use UseComposer\Admins\AdminClass;

require_once dirname(__FILE__) . '/vendor/autoload.php';

$admin = new AdminClass();
$admin->Run();