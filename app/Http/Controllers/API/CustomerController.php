<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Services\CustomerService;

class CustomerController extends ApiController
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index()
    {
        return ApiController::successResponse(
            [
                "message"=>"Customers returnrd successfully",
                "data"=>$this->customerService->getAllCustomers()
            ]);
    }
}
