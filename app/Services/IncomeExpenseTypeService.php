<?php

namespace App\Services;

use App\IncomeExpenseType;

class IncomeExpenseTypeService
{
  static function getName($id){
    // dd($incomeExpenseType);
    $incomeExpenseType = IncomeExpenseType::find($id);
    return $incomeExpenseType->name;
  }
}