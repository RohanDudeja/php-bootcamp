<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();

        return view('viewcustomers', ['allCustomers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createcustomer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        Customer::create([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'id_number' => $request->get('id_number'),
        ]);

        return redirect('/customers');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //$customers = DB::table('customers')->where('id',$request->get('id_number'));
        $customer=[];
        if (Customer::where('id_number', $request->get('id_number'))->exists()) {
            $customer = Customer::where('id_number', $request->get('id_number'))->get();
        }
        return view('viewcustomers', ['allCustomers' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if (Customer::where('id_number', $request->get('id_number'))->exists()) {
            Customer::where('id_number', $request->get('id_number'))->delete();
        }
        $customers = Customer::all();
        return view('viewcustomers', ['allCustomers' => $customers]);

    }
}
