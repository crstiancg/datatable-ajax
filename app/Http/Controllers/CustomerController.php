<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables;

class CustomerController extends Controller
{
    
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = Customer::select('*');
            return DataTables::of($data)
            ->addColumn('actions', 'customer.actions')
            ->rawColumns(['actions'])
            ->make(true);
        }

        return view('customer.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return $customer;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return back()->with('eliminar','delete');
    }
}
