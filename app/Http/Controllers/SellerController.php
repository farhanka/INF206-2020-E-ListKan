<?php

namespace App\Http\Controllers;
use App\Ikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SellerController extends Controller
{
    protected $table = 'ikan_user';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('seller.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $request->validate([
            'name' => ['required','alpha'],
            'harga' => ['required','integer','min:1000'],
            'stok' => ['required', 'integer','min:1'],
        ]);
        
        if(Ikan::where('name', $request->name)->first() == null){
            Ikan::create([
                'name' => $request->name,
                'type' => $request->type,
                'picture' => $request->picture,
            ]);
        }

        $user_id = auth()->user()->id;
        $ikan = Ikan::where('name', $request->name)->first();
        
            DB::table('ikan_user')->insert([
                'user_id' => $user_id,
                'ikan_id' => $ikan->id,
                'harga_ikan' => $request->harga,
                'stok'=> $request->stok,
            ]);
        return redirect('/home')->with('success','Ikan '.$request->name. ' berhasil ditambahkan');
    }
       
        

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = auth()->user();
        return view('seller.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ikan = Ikan::find($id);
        $user = auth()->user();
        $x = DB::table('ikan_user')
            ->where('user_id', $user->id)
            ->where('ikan_id', $ikan->id)->first();
        return view('seller.edit',compact('ikan','x'));
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
        $request->validate([
            'harga' => ['required','integer','min:1000'],
            'stok' => ['required', 'integer','min:1'],
        ]);
        
        $user = auth()->user();
        $ikan = Ikan::all();
        DB::table('ikan_user')
        ->where('user_id', $user->id)
        ->where('ikan_id', $request->id)->update([
            'harga_ikan' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect('/seller/show')->with('edited','Data ikan berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = auth()->user();
        DB::table('ikan_user')
        ->where('user_id', $user->id)
        ->where('ikan_id', $id)->delete();

        return redirect('/seller/show')->with('deleted','1 data telah dihapus. ID : '.$id);
    }
}