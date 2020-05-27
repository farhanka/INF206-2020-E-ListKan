<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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

    public function order(Request $request){
        $request->validate([
            'jumlah' => ['required','integer', "between:1,$request->stok"],
        ]);
            
        $market = DB::table('markets')->where('id', $request->pasar)->first();
        $data = [
            'harga' => $request->harga,
            'bobot' => $request->jumlah,
            'code' => Str::random(8),
            'namaikan' => $request->namaikan,
            'pembeli' => $request->pembeli,
            'pasar' => $request->pasar,
            'catatan' => $request->catatan,
        ];

            $pedagang = DB::table('users')->where('id', $request->penjual)->first();
            DB::table('ikan_user')->where('id',$request->id)
                ->update([
                    'stok' => $request->stok - $request->jumlah
                    ]);

                    return view('customer.history', compact('data','market', 'pedagang'));
    }
}
