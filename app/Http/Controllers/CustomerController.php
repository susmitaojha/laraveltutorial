<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
{
    public function index(Request $request){
        $customer = Customer::get();
        //dd($customer);
        return view('customer.list', ['data' => $customer]);
    }

    public function add(Request $request){
        if($request -> method() == 'POST'){
            $request -> validate([
                'name' => 'required',
                'email' => 'required|email|unique:customers',
                'mobile_no' => 'required',
                'address' => 'required'
            ]);


            $customer = new Customer([
                'name' => $request ->input('name'),
                'email' => $request ->input('email'),
                'mobile_no' =>$request ->input('mobile_no'),
                'address' =>$request ->input('address'),
            ]);

            $customer -> save();
            return redirect() ->route('customer.list')->with('success', 'Data has been added successfully!');
        }else{
            return view('customer.add');
        }
    }


    public function update(Request $request, $id = ''){
        if($request -> method() == "POST"){
            $request -> validate([
                'name' => 'required',
                'email' => 'required|email|unique:customers,email,'.$request ->input('update_id'),
                'mobile_no' => 'required',
                'address' => 'required'
            ]);

            $customer = Customer::find($request -> input('update_id'));
            $customer->fill([
                'name' => $request ->input('name'),
                'email' => $request ->input('email'),
                'mobile_no' =>$request ->input('mobile_no'),
                'address' =>$request ->input('address'),
            ]);

            $customer -> save();
            return redirect() ->route('customer.list')->with('success', 'Data has been updated successfully!');


        }else{
            $data = Customer::find($id);
            return view('customer.update', ['data' => $data]);
        }
    }


    public function delete(Request $request, $id = ''){
        $user = Customer::where('id', $id)->firstorfail()->delete();
        return redirect() ->route('customer.list')->with('success', 'Data has been Deleted successfully!');

    }
}
