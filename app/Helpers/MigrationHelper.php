<?php

namespace App\Helpers;

use Illuminate\Database\Schema\Blueprint;

class MigrationHelper
{
  static function common(Blueprint $table)
  {
    $table->tinyInteger('status')->default(0);
    $table->unsignedInteger('created_by')->nullable();
    $table->unsignedInteger('updated_by')->nullable();
    $table->unsignedInteger('deleted_by')->nullable();
    $table->timestamps();
    $table->softDeletes();
    $table->increments('id');
  }
}
