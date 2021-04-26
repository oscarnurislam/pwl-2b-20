<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        //$mahasiswas=Mahasiswa::all(); //Mengmbil semua isi tabel
        $mahasiswas = Mahasiswa::where([
            ['Nama', '!=', Null],
            [function ($query) use ($request){
                if(($term = $request->term)){
                    $query->orWhere('Nama','LIKE','%' . $term . '%')->get();
                }
            }]
        ])
            ->orderBy('Nim','desc')
            ->with('kelas')
            ->paginate(5);
        return view('mahasiswas.index', compact('mahasiswas'));
        with('i', (request()->input('page',1)-1) *5);
    }

    public function create()
    {
        $kelas = Kelas::all(); //mendapatkan data dari tabel kelas
        return view('mahasiswas.create' ,['kelas' => $kelas]);
    }

    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'Nim'=>'required',
            'Nama'=>'required',
            'Kelas'=>'required',
            'Jurusan'=>'required',
            'No_Handphone'=>'required',
            'Email'=>'required',
            'Tanggal_lahir'=>'required',
        ]);
        
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = $request->get('Nim');
        $mahasiswa->nama = $request->get('Nama');
        $mahasiswa->jurusan = $request->get('Jurusan');
        $mahasiswa->no_handphone = $request->get('No_Handphone');
        $mahasiswa->email = $request->get('Email');
        $mahasiswa->tanggal_lahir = $request->get('Tanggal_lahir');
        $mahasiswa->save(); 

        $kelas = new Kelas;
        $kelas->id = $request->get('Kelas');

        //fungsi eloquent untuk menambah data
        $mahasiswa->kelas()->associate($kelas);
        $mahasiswa->save(); 
    
    //jika data berhasil ditambahkan, akan kembali kehalaman utama
     return redirect()->route('mahasiswas.index')
        ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }
    public function show($Nim)
    {
        //menampilkan detail data berdasarkan Nim Mahasiswa
        //code sebelum dibuat relasi --> $mahasiswa = Mahasiswa::find($Nim);
        $Mahasiswa = Mahasiswa::with('kelas')->where('nim', $Nim)->first();

        return view('mahasiswas.detail',['Mahasiswa' => $Mahasiswa]);
    }

    public function edit($Nim)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $Mahasiswa = Mahasiswa::with('kelas')->where('nim', $Nim)->first();
        $kelas = Kelas::all(); //mendapatkan data dari tabel kelas
        return view('mahasiswas.edit',compact('Mahasiswa','kelas'));
    }

    public function update(Request $request, $Nim)
    {
        //melakukan validasi data
            $request->validate([
                'Nim'=>'required',
                'Nama'=>'required',
                'Kelas'=>'required',
                'Jurusan'=>'required',
                'No_Handphone'=>'required',
                'Email'=>'required',
                'Tanggal_lahir'=>'required',
            ]);
         
            $mahasiswa = Mahasiswa::with('kelas')->where('nim', $Nim)->first();
            $mahasiswa->nim = $request->get('Nim');
            $mahasiswa->nama = $request->get('Nama');
            $mahasiswa->jurusan = $request->get('Jurusan');
            $mahasiswa->no_handphone = $request->get('No_Handphone');
            $mahasiswa->email = $request->get('Email');
            $mahasiswa->tanggal_lahir = $request->get('Tanggal_lahir');
            $mahasiswa->save(); 
            
            $kelas = new Kelas;
            $kelas->id = $request->get('Kelas');
    
            //fungsi eloquent untuk menambah data
            $mahasiswa->kelas()->associate($kelas);
            $mahasiswa->save(); 
         //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('mahasiswas.index')
                ->with('success','Mahasiswa Berhasil Diupdate');           
    }


    public function destroy($Nim)
    {
        //fungsi eloquent untuk menghapus data
            Mahasiswa::find($Nim)->delete();
                return redirect()->route('mahasiswas.index')
                    ->with('success','Mahasiswa Berhasil Dihapus');
    }
};
