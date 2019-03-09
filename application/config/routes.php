<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['musics']='musics/index';
$route['orders']='gears/placeyourorder';
$route['gears']='gears/index';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
