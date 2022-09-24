<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the dashboard page resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }
}
