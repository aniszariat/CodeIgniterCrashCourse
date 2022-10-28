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
$route['employee/list'] = 'Frontend/EmployeeController/getEmployeesList';
$route['employee/post'] = 'Frontend/EmployeeController/postEmployee';
$route['employee/fields'] = 'Frontend/EmployeeController/getFields';
$route['employee/edit/(:num)'] = 'Frontend/EmployeeController/editEmployee/$1'; // get by ID
$route['employee/getEmployee/(:num)'] = 'Frontend/EmployeeController/getEmployeeById/$1'; // get by ID
$route['employee/update/(:num)'] = 'Frontend/EmployeeController/updateEmployee/$1';
$route['employee/updateById/(:num)'] = 'Frontend/EmployeeController/updateEmployeeById/$1';
$route['employee/delete/(:num)'] = 'Frontend/EmployeeController/deleteEmployeeById/$1';
// $route['employee/confirmDelete/(:num)'] = 'Frontend/EmployeeController/deleteEmployeeById/$1';
$route['employee/confirmDelete/(:num)']['DELETE'] = 'Frontend/EmployeeController/deleteEmployeeById/$1';
$route['employee/dir'] = 'Frontend/EmployeeController/getDir';

//** Login and register Routes */
$route['register']['GET'] = 'Auth/RegisterController' ;
$route['register']['POST'] = 'Auth/RegisterController/register' ;
$route['login']['GET'] = 'Auth/loginController' ;
$route['login']['POST'] = 'Auth/loginController/login' ;
$route['userpage']['GET'] = 'UserController/userpage' ;
$route['adminpage']['GET'] = 'AdminController/userpage' ;
