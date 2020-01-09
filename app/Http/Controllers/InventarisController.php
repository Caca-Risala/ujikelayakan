<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InventarisController extends Controller
{
	public function index()
	{
		$data_inventaris = \App\Inventaris::all();
    	return view('inventaris.index',['data_inventaris'=> $data_inventaris]);
	}

	public function create(Request $request)
	{
		\App\Inventaris::create($request->all());
		return redirect ('/inventaris')->with('sukses','Data Berhasil Diinput');
	}

	public function	edit($id_inventaris)
	{
		$inventaris	= \App\Inventaris::find($id_inventaris);
		return	view('inventaris/edit',['inventaris'=> $inventaris]);
	}

		public function update(Request $request){
    		$inventaris = DB::table('inventaris')->where('id_inventaris',$request->id_inventaris)->update([
    			'id_inventaris' =>$request->id_inventaris,
    			'nama' =>$request->nama,
    			'kondisi' =>$request->kondisi,
    			'keterangan' =>$request->keterangan,
    			'jumlah' =>$request->jumlah,
    			'id_jenis' =>$request->id_jenis,
    			'tanggal_register' =>$request->tanggal_register,
    			'id_ruang' =>$request->id_ruang,
    			'kode_inventaris' =>$request->kode_inventaris,
    			'id_petugas' =>$request->id_petugas
    		]);
    			return redirect('/inventaris')->with('sukses','Data Berhasil Diupdate');
	}

		public function	delete($id_inventaris)
	{
		$inventaris	= \App\Inventaris::find($id_inventaris);
		$inventaris->delete($inventaris);
		return redirect('/inventaris')->with('sukses','Data Berhasil Dihapus');
	}
}
