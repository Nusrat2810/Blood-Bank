<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['Hi/enter'] = 'Hello/enter';
$route['//(:any)'] = '//';
$route['//(:num)'] = '//';
$route['Hi/index'] = 'Welcome/index';
$route['Home/Admin'] = 'Hello/three2';
$route['Admin/Users'] = 'Hello/users';

