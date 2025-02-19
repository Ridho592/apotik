<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // $biodata=Biodata::ddRawSql();
        // $biodata=Biodata::all();
        // dd($biodata);
        // $biodata=Biodata::latest()->get();  //get untuk mengambil banyak data, first untuk hanya satu
        $user=User::orderBy('id','ASC')->cursorPaginate(10); //buat dulu appservice provider, kemudian pilih bootstrap 5,
                                                        //ketik Paginator::useBootstrapFive(); di provider, tambahkan
                                                        // {{ $biodata->links() }} di view untuk menampilkan tabelnya
        return view('user.user', compact('user'));
    }

    public function create(){

        return view('user.createuser');
    }

    public function store(Request $request){
        // dd($request->all());
        $user=User::create(
            [
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=> $request->password,
            ]
            );
        return redirect()->route('user.index')->with('success','berhasil ditambahkan');
    }

    public function edit($id){
        $user=User::find($id);
        return view('user.edituser', compact('user'));
    }

    public function update(Request $request, $id){

        if($request->password == null){
        $user=User::find($id)
        ->update([
            'name'=> $request->name,
            'email'=> $request->email,


        ]);
    }else{
        $user=User::find($id)
        ->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,

        ]);
    }


        return redirect()->route('user.index')->with('success','Berhasil di Update');
    }

    public function delete($id){
        $user=User::find($id)->delete();
        return redirect()->route('user.index')->with('success','Berhasil di Hapus');
    }


}
