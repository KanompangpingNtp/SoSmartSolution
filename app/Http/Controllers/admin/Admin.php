<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function AdminIndex()
    {
        return view('dashboard.admin.index');
    }
}
