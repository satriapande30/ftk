<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use  Barryvdh\DomPDF\Facade;



class CrudController extends Controller
{

    public function index(Request $request)
    {   
        if ($request->has('search')){
            $mahasiswa = Mahasiswa::where(
                'nim',
                'nama',
                'semester',
                'jk',
                'agama',
                'prodi',
                'jurusan',
                'keterangan', 
                'LIKE', 
                '%'. $request->search.'%')->paginate(10);
        }else{
            $mahasiswa = Mahasiswa::paginate(10);
        }

        // $mahasiswa = Mahasiswa::all();
        // return view('/data', ['mahasiswa' => $mahasiswa]);
        
        
        return view('/', ['mahasiswa'=> $mahasiswa]);
    }

    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = request('nim');
        $mahasiswa->nama = request('nama');
        $mahasiswa->semester = request('semester');
        $mahasiswa->jk = request('jk');
        $mahasiswa->tempat_lahir = request('tempat_lahir');
        $mahasiswa->tgl_lahir = request('tgl_lahir');
        $mahasiswa->agama = request('agama');
        $mahasiswa->prodi = request('prodi');
        $mahasiswa->jurusan = request('jurusan');
        $mahasiswa->hp = request('hp');
        $mahasiswa->email = request('email');
        $mahasiswa->alamat = request('alamat');
        $mahasiswa->keterangan = request('keterangan');
        $mahasiswa->save();

        return redirect('/');
    }


 
    public function edit($id)
    {
        $mahasiswa = DB::table('mahasiswa')->where('id', $id)->get();
        return view('/edit', ['mahasiswa' => $mahasiswa]);
    }


    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        DB::table('mahasiswa')->where('id', $request->id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'semester' => $request->semester,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'prodi' => $request->prodi,
            'jurusan' => $request->jurusan,
            'hp' => $request->hp,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/');
    }


    public function destroy($id)
    {
        DB::table('mahasiswa')->where('id', $id)->delete();
        return redirect('/')->with('success', 'Data Berhasil Dihapus');
    }

}
