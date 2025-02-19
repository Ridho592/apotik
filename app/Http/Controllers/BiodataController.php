<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index(){
        // $biodata=Biodata::ddRawSql();
        // $biodata=Biodata::all();
        // dd($biodata);
        // $biodata=Biodata::latest()->get();  //get untuk mengambil banyak data, first untuk hanya satu
        $biodata=Biodata::orderBy('id','ASC')->cursorPaginate(10); //buat dulu appservice provider, kemudian pilih bootstrap 5,
                                                        //ketik Paginator::useBootstrapFive(); di provider, tambahkan
                                                        // {{ $biodata->links() }} di view untuk menampilkan tabelnya
        return view('biodata', compact('biodata'));
    }

    public function create(){

        return view('createbiodata');
    }

    public function store(Request $request){
        // dd($request->all());
        $biodata=Biodata::create(
            [

                'Nama'=> $request->Nama,
                'Alamat'=> $request->Alamat,
                'Umur'=> $request->Umur,
            ]
            );
        return redirect()->route('biodata.index')->with('success','berhasil ditambahkan');
    }

    public function edit($id){
        $biodata=Biodata::find($id);
        return view('editbiodata', compact('biodata'));
    }

    public function update(Request $request, $id){
        $biodata=Biodata::find($id)
        ->update([
            'Nama'=> $request->Nama,
            'Alamat'=> $request->Alamat,
            'Umur'=> $request->Umur,

        ]);
        return redirect()->route('biodata.index')->with('success','Berhasil di Update');
    }

    public function delete($id){
        $biodata=Biodata::find($id)->delete();
        return redirect()->route('biodata.index')->with('success','Berhasil di Hapus');
    }


}
