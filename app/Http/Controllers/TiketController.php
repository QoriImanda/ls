<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket_pesawat;

class TiketController extends Controller
{
    public function simpan(request $request)
    {
        $this->validate($request,[
            'user_id' => 'required|min:1|max:10',
            'awal_keberangkatan' => 'required|min:5|max:20',
            'tujuan_keberangkatan' => 'required|min:5|max:20',
            'no_penerbangan' => 'required|min:5|max:20',
            'harga' => 'required|min:5|max:20'

         ]);

        $tiket = new Tiket_pesawat;
        $tiket->user_id = $request->user_id;
        $tiket->awal_keberangkatan = $request->awal_keberangkatan;
        $tiket->tujuan_keberangkatan = $request->tujuan_keberangkatan;
        $tiket->no_penerbangan = $request->no_penerbangan;
        $tiket->harga = $request->harga;  
        $tiket->save();

        return  redirect()->back()->with('sukses','berhasil');
    }
    public function index (){
        $tiket = Tiket_pesawat::all();
        return view('tiket.index' , compact('tiket'));

    }
    public function edit($id) 
    {
       
        $tiket=Tiket_pesawat::findorfail($id);
        return view('tiket.edit', compact('tiket'));

    }
    public function update(Request $request, $id)
    {
        $tiket=Tiket_pesawat::findorfail($id);
        $tiket->update($request->all());
        return redirect()->route('tiket');
    }
    
    public function delete($id){
        $tiket=Tiket_pesawat::FindOrFail($id);
        $tiket->delete();
        return redirect()->back()->with('sukses_delete','berhasil');
    }
   
}
