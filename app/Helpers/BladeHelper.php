<?php

namespace App\Helpers;

class BladeHelper
{
  static function email_f($email)
  {
    return '<a href="mailto:' . $email . '" target="_blank">' . $email . '</a>';
  }

  static function date_f($ts)
  {
    $d = date_create($ts);
    return date_format($d, 'M j, Y') . '<br/>' . date_format($d, 'h:i A');
  }

  static function hideMenuItem($permissions, $flag = 0)
  {
    foreach ($permissions as $permission) {
      if (config($permission) !== $flag) return false;
    }
    return true;
  }

  static function activeMenuItem($routes)
  {
    return request()->routeIs($routes);
  }
}
