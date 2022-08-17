<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //outputs all customerorder by ID
        $customers = Customer::orderBy('first_name', 'asc')->get();
        return response()->json($customers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create new data on customer table
        $customer = new Customer;
        $customer->employee_id = $request->employee_id;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->privilege = $request->privilege;
        $customer->status = $request->status;
        $customer->save();
        return response()->json($customer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //gets the id only for update or delete purposes
        $customer = Customer::findOrFail($id);
        return response()->json($customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //gets the primary and triggers the update command
        $customer = Customer::findOrFail($id);
        $customer->employee_id = $request->employee_id;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->privilege = $request->privilege;
        $customer->status = $request->status;
        $customer->save();
        // \Log::info($customer);
        return response()->json($customer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //gets the primary and triggers the delete command
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return response()->json($customer);
    }
}
