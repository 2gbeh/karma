<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Route;

class ControllerHelper
{
  static function view($params = [], $name = '')
  {
    $route_prefix = config("view.root");
    $route_name =  strlen($name) > 1 ? $name : Route::currentRouteName();
    $path = sprintf("%s%s", $route_prefix, $route_name);
    
    return view($path, ['params' => $params]);
  }
}
