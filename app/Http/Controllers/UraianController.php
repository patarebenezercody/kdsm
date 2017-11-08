<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Uraian;

class UraianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =[
            'id' => $request['id'],
            'nama' => $request['nama'],
            'instansi' => $request['instansi'],
            'alamat' => $request['alamat'],
            'nohp' => $request['nohp'],
            'satuan' => $request['satuan'],
            'jenisdonasi' => $request['jenisdonasi'],
            'perkiraannilai' => $request['perkiraannilai'],
        ];

        return Uraian::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $u = Uraian::find($id);
        return $u;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $u = Uraian::find($id);
        $u->nama = $request['nama'];
        $u->instansi = $request['instansi'];
        $u->alamat = $request['alamat'];
        $u->nohp = $request['nohp'];
        $u->satuan = $request['satuan'];
        $u->jenisdonasi = $request['jenisdonasi'];
        $u->perkiraannilai = $request['perkiraannilai'];
        $u->update();

        return $u;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $u = Uraian::find($id);
        $u->destroy($id);
    }

    public function apiUraian(){
        $u = Uraian::all();
        return DataTables::of($u)
        ->addColumn('action', function($u){
            return '<a onclick = "edituraian('. $u->id .')" class="btn btn-primary"></i>Edit</a> ' .
            ' <a onclick = "deleteuraian('. $u->id .')" class="btn btn-danger"></i>Delete</a>';
        })->make(true);
    }
}
