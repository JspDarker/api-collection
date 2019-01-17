<?php

namespace App\Http\Controllers\Backend;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{

    public function index()
    {
        $data['customers'] = Customer::getCustomers();
        $data['is'] = true;
        return view('classics.customer.index', $data);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return Customer::getCustomers($id, true);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
