<?php

namespace App\Http\Controllers;

use App\Models\SiswaModel;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        $data=array(
            'dt_siswa' => SiswaModel::all()
        );
        return view('siswa.list', $data);
    }
    
    function insert(Request $request){
        if ($request->isMethod('POST')){
            $siswa = new SiswaModel();
            $siswa->nis_siswa = $request->nis;
            $siswa->nama_siswa = $request->nama;
            $siswa->alamat_siswa = $request->alamat;
            $siswa->save();
            return redirect('/siswa')->with(['pesan' => 'Data Siswa Berhasil Disimpan!']);
        }
        return view('siswa.form');
    }
    function ubah(Request $request){
        $siswa = SiswaModel::find($request->id);
        $data =array(
            'siswa' => $siswa
        );
        if ($request->isMethod('POST')){
            $siswa->nis_siswa = $request->nis;
            $siswa->nama_siswa = $request->nama;
            $siswa->alamat_siswa = $request->alamat;
            $siswa->save();
            return redirect('/siswa')->with(['pesan' => 'Data Siswa Berhasil Diupdate!']);
        }
        return view('siswa.form', $data);
    }
    function hapus($id){
        SiswaModel::find($id)->delete();
        return redirect('/siswa')->with(['pesan' => 'Data Siswa Berhasil Dihapus!']);
    }
}