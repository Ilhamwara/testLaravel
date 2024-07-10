<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\TransactionDataTables;

class FrontController extends Controller
{
    public function index(TransactionDataTables $dataTable)
    {
        return $dataTable->with(['mesin_id' => request()->mesin_id,'month' => request()->month,'code' => request()->code])->render('welcome');
    }
}
