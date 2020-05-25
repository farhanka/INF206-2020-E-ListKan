<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\User;
use App\Market;
use App\Ikan;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $pedagang = User::where('role','Seller')->get();
        $ikan = Ikan::all();
        $market = Market::all();

        if($user->role == 'Seller'){
            return view('seller.home', compact('user'));
        }else{
            return view('customer.home', compact('user','ikan','market','pedagang'));
        }
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {   
        
        $market = Market::all();
        $user = auth()->user();
        return view('profile', compact('user','market'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $user = Auth::user();
        $request->validate([
            'firstname' => ['alpha','required', 'string', 'max:255'],
            'lastname' => ['alpha','string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255' ,Rule::unique('users')->ignore($user)],
            'phonenumber' => ['required', 'digits_between:11,13',Rule::unique('users')->ignore($user)],
        ]);
        $user->firstname = request('firstname');
        $user->lastname = request('lastname');
        $user->email = request('email');
        $user->phonenumber = request('phonenumber');
        if($user->role == 'Seller'){
            $user->market_id = request('market');
        }
        $user->save();

        // DB::table('users')->where('id', $user->id)->update ([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phonenumber' => $request->phonenumber,
        //     'role' => $request->role
        // ]);

        return redirect('/profile')->with('status','Profile Updated Successfully!.');
    }

 
}
