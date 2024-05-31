<?php

namespace App\Http\Controllers;

use App\Constants\CustomerConstant;
use App\Models\Customer;
use App\Helpers\ArrayHelper;
use App\Helpers\ControllerHelper;
use App\Http\Requests\StoreCustomerRequest;
use Illuminate\Http\Request;
use App\IncomeExpenseType;

class CustomerController extends Controller
{
    private $route;

    public function __construct()
    {
        $this->route = 'customers';
    }

    public function index()
    {
        $customers = true ? Customer::all() : CustomerConstant::CUSTOMERS;

        return ControllerHelper::view([
            'title' => 'View Customer',
            'resource' => 'Customers',
            'type' => 'table',
            // 
            'thead' => [
                '#',
                'Customer Name',
                'Email Address',
                'Phone Number',
                'Sales Ledger',
                'Terms of Payment',
                'Date Created',
                'Action'
            ],
            'tbody' => $customers,
        ]);
    }

    public function create()
    {
        $incomeExpenseTypes = IncomeExpenseType::select('id', 'name')->get();
        $sales_ledger_options = ArrayHelper::toAssoc($incomeExpenseTypes);

        return ControllerHelper::view([
            'title' => 'Add Customer',
            'resource' => 'Customers',
            'type' => 'form',
            'action' => $this->route . '.store',
            // 
            "sales_ledger_options" => $sales_ledger_options,
            'terms_of_payment_options' => ["COD", "Pay in number of days"],
            'defaults' => true ? [] : [
                'name' => 'john doe',
                'email' => 'john@email.com',
                'phone' => '12345678901',
                'address' => 'somewhere',
                'income_expense_type_id' => 4,
                'terms_of_payment' => "COD",
            ]
        ]);
    }

    public function store(StoreCustomerRequest $request)
    {
        // dd($validated);
        $validated = $request->validated();
        Customer::create($validated);

        return redirect('/customers');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
