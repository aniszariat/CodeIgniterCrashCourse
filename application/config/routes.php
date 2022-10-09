<?php

defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
$route['about'] = 'welcome/demo';
$route['ind'] = 'PageController/index';
$route['pages'] = 'PageController/pages';
$route['blog/(:any)/(:num)'] = 'PageController/blog/$1/$2';
$route['employee'] = 'Frontend/EmployeeController';
$route['employee/add'] = 'Frontend/EmployeeController/create';
$route['employee/store'] = 'Frontend/EmployeeController/store';
