<?php

namespace App\Helpers;

class ArrayHelper
{
  static function optionAttribs($name, $val)
  {
    $res = "value={$val}";
    if ($val == old($name)) $res .= " selected";
    echo $res;
  }
}
