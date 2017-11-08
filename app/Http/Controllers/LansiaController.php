<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Kelurahan\Lansia;

class LansiaController extends Controller
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
        $data =
        [
            'id' => $request['id'],
            'nokk' => $request['nokk'],
            'namalansia' => $request['namalansia'],
            'ttl' => $request['ttl'],
            'umur' => $request['umur'],
            'status' => $request['status'],
            'alamat' => $request['alamat'],
            'pekerjaan' => $request['pekerjaan'],
            'keterangan' => $request['keterangan'],
        ];

        return Lansia::create($data);
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
        $lansia = Lansia::find($id);
        return $lansia;
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
        $lansia = Lansia::find($id);
        $lansia->nokk = $request['nokk'];
        $lansia->namalansia = $request['namalansia'];
        $lansia->ttl = $request['ttl'];
        $lansia->umur = $request['umur'];
        $lansia->status = $request['status'];
        $lansia->alamat = $request['alamat'];
        $lansia->pekerjaan = $request['pekerjaan'];
        $lansia->keterangan = $request['keterangan'];
        $lansia->update();

        return $lansia;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lansia = Lansia::find($id);
        $lansia->destroy($id);
    }

    public function apiLansia(){
        $lansia = Lansia::all();
        return DataTables::of($lansia)
        ->addColumn('action', function($lansia){
            return '<a onclick = "editlansia('. $lansia->id .')" class="btn btn-primary"></i>Edit</a> ' .
            ' <a onclick = "deletelansia('. $lansia->id .')" class="btn btn-danger"></i>Delete</a>';
        })->make(true);
    }
}
