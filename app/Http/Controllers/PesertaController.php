<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class PesertaController extends Controller {

    public function index() {
        return view('datapeserta', [
            'data' => Peserta::all(), 
            'title' => 'Data anggota'
        ]);
    }
    
    public function add() {
        return view('adddatapeserta',[
            'title' => 'Tambah Data anggota'
        ]);
    }
    public function edit($id){
        
        $peserta = Peserta::where('id', $id)->first();

        return view('editdatapeserta', [
            'peserta' => $peserta,
            'title' => 'Edit Data Anggota'
        ]);

    }

    public function update(Request $request, $id) {
        $nama_anggota = $request->input('nama_anggota');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $usia   = $request->input('usia');
        $email = $request->input('email');
       
        
        $peserta = Peserta::where('id', $id)->first();
        $peserta->nama_anggota = $nama_anggota;
        $peserta->jenis_kelamin = $jenis_kelamin;
        $peserta->usia = $usia;
        $peserta->email = $email;

        $peserta->save();

        return redirect()->to('/peserta');
    }


    public function dashboard(){
        $peserta= Peserta::count();

        return view('main', compact('peserta'));

    }

    public function store(Request $request) {
        $nama_anggota = $request->input('nama_anggota');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $usia   = $request->input('usia');
        $email = $request->input('email');

        $peserta           = new Peserta;
        $peserta->nama_anggota = $nama_anggota;
        $peserta->jenis_kelamin = $jenis_kelamin;
        $peserta->usia = $usia;
        $peserta->email = $email;

        $peserta->save();

        return redirect()->to('/peserta');
    }
    public function delete($id) {
        $peserta = Peserta::where('id', $id)->first();
        $peserta->delete();
        return redirect()->back();
    }

    public function search(Request $request){
        if($request->has('search')){
            $peserta = Peserta::where('nama','usia','email','%',$request->search.'%')->get();
        }else{
            $peserta = Peserta::all();
        }
        return view('datapeserta',['Peserta' => $peserta]);
    }
}
