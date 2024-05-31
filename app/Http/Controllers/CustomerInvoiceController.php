<?php

namespace App\Http\Controllers;

use App\Constants\CustomerConstant;
use App\Constants\InvoiceConstant;
use App\Helpers\ArrayHelper;
use App\Helpers\BladeHelper;
use App\Helpers\ControllerHelper;
use App\IncomeExpenseType;
use App\Models\Customer;
use App\Models\CustomerInvoice;
use Illuminate\Http\Request;

class CustomerInvoiceController extends Controller
{
    private $route;

    public function __construct()
    {
        $this->route = 'customers.invoices';
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
        $customers = true ? Customer::all() : CustomerConstant::CUSTOMERS;
        $invoices = false ? CustomerInvoice::all() : InvoiceConstant::INVOICES;

        return ControllerHelper::view([
            'title' => 'Add Invoice',
            'resource' => 'Customers',
            'type' => 'form',
            'action' => $this->route . '.store',
            // 
            'customer_id_options' => BladeHelper::ddl_f($customers),
            'thead' => [
                '#',
                'Item',
                'Description',
                'Rate',
                'Qty',
                'Amount',
                'Action'
            ],
            'tbody' => ArrayHelper::arrayTop($invoices, 2),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
