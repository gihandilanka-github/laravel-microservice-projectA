<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Http;

class CustomerController extends Controller
{

    public function __construct()
    {

    }

    public function list()
    {

        $response = Http::get(env('MICROSERVICE_B_API_URL').'/customer/list');
        $customers = json_decode($response->body())->data ? json_decode($response->body())->data : [];
        return response()->json(['status' => $response->status(), 'customers' => $customers]);
    }

    public function test()
    {

        return response()->json(['status' => true]);
    }

}
