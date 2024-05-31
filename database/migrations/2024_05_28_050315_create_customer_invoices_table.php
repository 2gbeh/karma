<?php

use App\Helpers\MigrationHelper;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerInvoicesTable extends Migration
{
  private $table;

  public function __construct()
  {
    $this->table = 'customer_invoices';
  }

  public function up()
  {
    Schema::create($this->table, function (Blueprint $table) {
      $table->foreignIdFor(\App\Models\Customer::class);
      
      $table->string('name')->index();
      $table->string('email')->unique();
      $table->string('phone');
      $table->string('address');
      $table->string('terms_of_payment');
      $table->tinyInteger('terms_of_payment_in_days')->nullable();
      // 
      MigrationHelper::common($table);
    });
  }

  public function down()
  {
    Schema::dropIfExists($this->table);
  }
}
