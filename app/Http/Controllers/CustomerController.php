<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Ikan;
use App\Market;
class CustomerController extends Controller
{
    public function show($id){
        
        $user = auth()->user();
        $pedagang = User::where('role','Seller')
                    ->where('market_id', $id)
                    ->get();
        if($pedagang->count() != 0){
            return view('customer.daftarIkan',compact('user','pedagang'));
        }else{
            return redirect('home')->with('null','Belum ada data ikan di pasar '.$id);
        }
    }

    public function menuBeli($user_id, $ikan_id){

        $pedagang = User::where('role','Seller')
                    ->where('id', $user_id)
                    ->first();
        $ikan = DB::table('ikan_user')->where('ikan_id', $ikan_id)
                ->where('user_id', $user_id)->first();
        
        $a = Ikan::where('id', $ikan_id)->first();

        return view('customer.pembelian',compact('pedagang','ikan','a'));
    }
}