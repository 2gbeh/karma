<?php

namespace App\Http\Controllers;

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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        return ControllerHelper::view([
            'title' => 'Add Customer',
            'resource' => 'Customers',
            'type' => 'form',
            'action' => $this->route . '.store',
            "sales_ledger_options" => ArrayHelper::toAssoc(IncomeExpenseType::all()),
            'terms_of_payment_options' => ["COD", "Pay in number of days"],
            'defaults' => [
                'name' => 'john doe',
                'email' => 'john@email.com',
                'phone' => '12345678901',
                'address' => 'john@example.com',
                'sales_ledger_id' => 4,
                'terms_of_payment' => "COD",
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        //
        $validated = $request->validated();
        

        dd($validated);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
