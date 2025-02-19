<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index(){
        // $biodata=Biodata::ddRawSql();
        // $biodata=Biodata::all();
        // dd($biodata);
        // $biodata=Biodata::latest()->get();  //get untuk mengambil banyak data, first untuk hanya satu
        $obat=Obat::orderBy('id','ASC')->cursorPaginate(10); //buat dulu appservice provider, kemudian pilih bootstrap 5,
                                                        //ketik Paginator::useBootstrapFive(); di provider, tambahkan
                                                        // {{ $biodata->links() }} di view untuk menampilkan tabelnya
        return view('obat.obat', compact('obat'));
    }

    public function create(){

        return view('obat.createobat');
    }

    public function store(Request $request){
        // dd($request->all());
        $obat=Obat::create(
            [

                'Nama_Obat'=> $request->Nama_Obat,
                'Merk'=> $request->Merk,
                'Suplier'=> $request->Suplier,
            ]
            );
        return redirect()->route('obat.index')->with('success','berhasil ditambahkan');
    }

    public function edit($id){
        $obat=Obat::find($id);
        return view('obat.editobat', compact('obat'));
    }

    public function update(Request $request, $id){
        $obat=Obat::find($id)
        ->update([
            'Nama_Obat'=> $request->Nama_Obat,
            'Merk'=> $request->Merk,
            'Suplier'=> $request->Suplier,

        ]);
        return redirect()->route('obat.index')->with('success','Berhasil di Update');
    }

    public function delete($id){
        $obat=Obat::find($id)->delete();
        return redirect()->route('obat.index')->with('success','Berhasil di Hapus');
    }

}
