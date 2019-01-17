<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Customer extends Model
{
    protected $table = 'customers';

    public static function getCustomers($id = '', $getById = false)
    {
        if ($id != '' && $getById) {
            $customer = DB::table('customers')
                ->where('id', '=', $id)
                ->get();
            return $customer->isEmpty() ? 'xxx' : $customer;
        }
        return DB::table('customers')->get();
    }
}
