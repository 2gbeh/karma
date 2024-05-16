<?php
return [
    'inventory' => [
        'resource' => 'Inventory',
        'create' => 'Add Inventory',
        'index' => [
            'inventory' => 'View Inventory',
            'budget' => 'Budget',
            'payroll' => 'Payroll',
            'journal' => 'General Journal',
        ]
    ],
    'customers' => [
        'resource' => 'Customers',
        'create' => [
            'customer' => 'Add Customer',
            'invoice' => 'Add Invoice',
            'receipt' => 'Add Receipt'
        ],
        'index' => 'View Customers',
    ],
    'vendors' => [
        'resource' => 'Vendors',
        'create' => 'Add Vendor',
        'index' => [
            'vendors' => 'View Vendors',
            'vouchers' => 'Payment Vouchers',
            'orders' => 'Purchase Orders',
            'invocies' => 'Receive Invoice',
            'purchases' => 'Purchase',
        ]
    ]
];
