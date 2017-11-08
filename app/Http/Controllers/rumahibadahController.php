<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Kelurahan\Pengurus;

class rumahibadahController extends Controller
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
            'nik' => $request['nik'],
            'jkelamin' => $request['jkelamin'],
            'ttl' => $request['ttl'],
            'alamat' => $request['alamat'],
            'namatempatibadah' => $request['namatempatibadah'],
            'alamattempatibadah' => $request['alamattempatibadah'],
            'norekbanksumut' => $request['norekbanksumut'],
            'kantorcbgbanksumut' => $request['kantorcbgbanksumut'],
            'nohp' => $request['nohp'],
        ];

        return Pengurus::create($data);
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
        $pengurus = Pengurus::find($id);
        return $pengurus;
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
        $pengurus = Pengurus::find($id);
        $pengurus->nama = $request['nama'];
        $pengurus->nik = $request['nik'];
        $pengurus->jkelamin = $request['jkelamin'];
        $pengurus->ttl = $request['ttl'];
        $pengurus->alamat = $request['alamat'];
        $pengurus->namatempatibadah = $request['namatempatibadah'];
        $pengurus->alamattempatibadah = $request['alamattempatibadah'];
        $pengurus->norekbanksumut = $request['norekbanksumut'];
        $pengurus->kantorcbgbanksumut = $request['kantorcbgbanksumut'];
        $pengurus->nohp = $request['nohp'];

        $pengurus->update();

        return $pengurus;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengurus = Pengurus::find($id);
        $pengurus->destroy($id);
    }

    public function apiPengurus(){
        $pengurus = Pengurus::all();
        return DataTables::of($pengurus)
        ->addColumn('action', function($pengurus){
            return '<a onclick = "editPengurus('. $pengurus->id .')" class="btn btn-primary"></i>Edit</a> ' .
            ' <a onclick = "deletePengurus('. $pengurus->id .')" class="btn btn-danger"></i>Delete</a>';
        })->make(true);
    }
}
