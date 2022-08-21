<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard::index');
    }

    public function create()
    {
        return view('dashboard::create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('dashboard::show');
    }

    public function edit($id)
    {
        return view('dashboard::edit');
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
