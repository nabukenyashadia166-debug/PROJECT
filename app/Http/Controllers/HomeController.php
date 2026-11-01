<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function home()
    {
        return view('home');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    public function create()
    {
        return redirect()->route('home');
    }

    public function store(Request $request)
    {
        return redirect()->route('home');
    }

    public function show($id = null)
    {
        return redirect()->route('home');
    }

    public function edit($id = null)
    {
        return redirect()->route('home');
    }

    public function update(Request $request, $id = null)
    {
        return redirect()->route('home');
    }

    public function destroy($id = null)
    {
        return redirect()->route('home');
    }
}
