<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerController extends Controller
{
    //

    public  function index()
    {
        //return view('customers.index');
        return view('customers.index');
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store()
    {

    }

    public  function show()
    {

    }

    public function edit()
    {
        return view('customers.edit');
    }

    public function update()
    {

    }

    public function destroy()
    {
        return view('customers.delete');
    }
}
