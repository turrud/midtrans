<?php
return [
    'merchant_id' => env('Midtrans_Merchant_ID'),
    'client_key' => env('Midtrans_Client_Key'),
    'server_key' => env('Midtrans_Server_Key'),
    
    'is_production' => env('Midtrans_is_Production'),
    'snap_js' => env('SNAP_URL'),
];