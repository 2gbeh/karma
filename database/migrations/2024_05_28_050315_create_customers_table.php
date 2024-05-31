<?php

use App\Helpers\MigrationHelper;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    private $table;

    public function __construct()
    {
        $this->table = 'customers';
    }

    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->string('name')->index();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            $table->foreignIdFor(\App\IncomeExpenseType::class);
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
