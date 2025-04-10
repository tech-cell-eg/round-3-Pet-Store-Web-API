<?php

namespace App\Services;

use App\Models\Customer;
use App\Http\Resources\CustomerResource;
use Illuminate\Support\Facades\Storage;

class CustomerService
{
    public function getAllCustomers()
    {
        $customers = Customer::all();
        return CustomerResource::collection($customers);
    }

   
}