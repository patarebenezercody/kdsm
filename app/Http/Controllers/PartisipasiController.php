<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Kelurahan\Partisipasi;

class PartisipasiController extends Controller
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
        $data=
        [
            'namakegiatan' => $request['namakegiatan'],
            'waktukegiatan' => $request['waktukegiatan'], 
            'alamatkegiatan' => $request['alamatkegiatan'], 
            'keterangan' => $request['keterangan'],
        ];

        return Partisipasi::create($data);
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
        $partisipasi = Partisipasi::find($id);
        return $partisipasi;
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
        $partisipasi = Partisipasi::find($id);
        $partisipasi->namakegiatan = $request['namakegiatan'];
        $partisipasi->waktukegiatan = $request['waktukegiatan'];
        $partisipasi->alamatkegiatan = $request['alamatkegiatan'];
        $partisipasi->keterangan = $request['keterangan'];
        $partisipasi->update();

        return $partisipasi;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partisipasi = Partisipasi::find($id);
        $partisipasi->destroy($id);
    }

    public function apiPartisipasi(){
        $partisipasi = Partisipasi::all();
        return DataTables::of($partisipasi)
        ->addColumn('action', function($partisipasi){
            return '<a onclick = "editpartisipasi('. $partisipasi->id .')" class="btn btn-primary"></i>Edit</a> ' .
            ' <a onclick = "deletepartisipasi('. $partisipasi->id .')" class="btn btn-danger"></i>Delete</a>';
        })->make(true);
    }
}
