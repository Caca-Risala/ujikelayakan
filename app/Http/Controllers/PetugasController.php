<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PetugasController extends Controller
{
	public function index()
	{
		$data_petugas = \App\Petugas::all();
    	return view('petugas.index',['data_petugas'=> $data_petugas]);
	}

	public function create(Request $request)
	{
		\App\Petugas::create($request->all());
		return redirect ('/petugas')->with('sukses','Data Berhasil Diinput');
	}

	public function	edit($id_petugas)
	{
		$petugas = \App\Petugas::find($id_petugas);
		return	view('petugas/edit',['petugas'=> $petugas]);
	}

		public function update(Request $request){
    		$petugas = DB::table('petugas')->where('id_petugas',$request->id_petugas)->update([
    			'id_petugas' =>$request->id_petugas,
    			'nama' =>$request->nama,
    			'kondisi' =>$request->kondisi,
    			'keterangan' =>$request->keterangan,
    			'jumlah' =>$request->jumlah,
    			'id_jenis' =>$request->id_jenis,
    			'tanggal_register' =>$request->tanggal_register,
    			'id_ruang' =>$request->id_ruang,
    			'kode_petugas' =>$request->kode_petugas,
    			'id_petugas' =>$request->id_petugas
    		]);
    			return redirect('/petugas')->with('sukses','Data Berhasil Diupdate');
	}

		public function	delete($id_petugas)
	{
		$petugas = \App\Petugas::find($id_petugas);
		$petugas->delete($petugas);
		return redirect('/petugas')->with('sukses','Data Berhasil Dihapus');
	}
}
