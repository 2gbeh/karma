<?php

use App\Helpers\MigrationHelper;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->string('name')->index();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            // $table->unsignedInteger('sales_ledger_id');
            $table->foreignIdFor(\App\IncomeExpenseType::class);
            $table->string('terms_of_payment');
            $table->tinyInteger('terms_of_payment_in_days')->nullable();
            // 
            MigrationHelper::common($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
