<?php

namespace App\Helpers;

class ArrayHelper
{
  static function arrayTop($arr)
  {
    return array_slice($arr, 0, 2);
  }

  static function toAssoc($arr, $keys = ['id', 'name'])
  {
    $assoc = [];
    [$key, $value] = $keys;
    foreach ($arr as $obj) {
      $assoc[$obj->$key] = $obj->$value;
    }
    return $assoc;
  }
}
