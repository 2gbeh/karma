<?php

namespace App\Helpers;

// $isFocus = fn($name) => request()->routeIs($name)
class BladeHelper
{
  static function email_f($str)
  {
    $str_f = sprintf('<a href="mailto:%s" target="_blank">%s</a>', $str, $str);
    return filter_var($str, FILTER_VALIDATE_EMAIL) ? $str_f : $str;
  }

  static function money_f($n)
  {
    return number_format($n);
  }

  static function date_f($dt)
  {
    $ts = date_create($dt);
    $date = date_format($ts, 'M j, Y');
    $time = date_format($ts, 'h:i A');
    return $date . '<br/>' . $time;
  }

  static function ddl_f($collection, $pick = ['id', 'name'], $len = -1)
  {
    $ddl =  [];
    [$i, $j] = is_array($pick) ? [$pick[0], $pick[1]] : [$pick, $pick];
    foreach ($collection as $k => $arr) {
      if ($len > -1 && $len == $k) break;
      // 
      [$value, $text] = [$arr[$i], $arr[$j]];
      $ddl[$value] = $text;
    }
    return $ddl;
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

  static function optionAttribs($name, $value, $defaults)
  {
    $res = 'value="' . $value . '"';
    if ($value == old($name, $defaults[$name] ?? null)) $res .= " selected";

    echo $res;
  }
}
