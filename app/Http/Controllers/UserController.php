<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use DataTables;

class UserController extends Controller
{
    public function datatable()
    {
        return view('datatable');
    }

    public function getdata()
    {
        $users = DB::table('users')->select('*');
        return DataTables::of($users)->make(true);
    }
}
