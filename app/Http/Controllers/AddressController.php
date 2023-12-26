<?php

namespace App\Http\Controllers;

use App\Models\Customer_address;
use Illuminate\Http\Request;
use App\Models\Customer;

class AddressController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $customer_address = Customer_address::select("customers.name", "customer_addresses.address", "customer_addresses.id")
                            ->join('customers', 'customers.id','=','customer_addresses.customer_id')
                            ->get();


        return view('customer.addressList', ['data' => $customer_address]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request){
        if($request -> method() == 'POST'){
            $request -> validate([
                'customer_name' => 'required',
                'address' => 'required'
            ]);

            $customer_address = new Customer_address([
                'customer_id' =>$request ->input('customer_name'),
                'address' =>$request ->input('address'),
            ]);

            $customer_address -> save();
            return redirect() ->route('AddressController.list')->with('success', 'Data has been added successfully!');
        }else{
            $customer = Customer::get();
            return view('customer.addAddress', ['data' => $customer]);
        }
    }

    public function update(Request $request, $id = ''){
        if($request -> method() == "POST"){
            $request -> validate([
                'address' => 'required',
            ]);
            $customer_address = Customer_address::find($request -> input('update_id'));
            $data = [
                'address' =>$request ->input('address'),
            ];

            $customer_address -> fill($data);

            $customer_address -> save();
            return redirect() ->route('AddressController.list')->with('success', 'Data has been updated successfully!');


        }else{
            $data = Customer_address::find($id);
            return view('customer.updateAddress', ['data' => $data]);
        }
    }
    public function delete(Request $request, $id = ''){
        $user = Customer_address::where('id', $id)->firstorfail()->delete();
        return redirect() ->route('AddressController.list')->with('success', 'Data has been Deleted successfully!');

    }
}
