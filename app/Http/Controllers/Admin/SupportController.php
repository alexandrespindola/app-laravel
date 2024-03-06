<?php

namespace App\Http\Controllers\Admin;
use App\Models\Support;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all();
        dd($supports);

        return view('admin.supports.index');
    }
}
