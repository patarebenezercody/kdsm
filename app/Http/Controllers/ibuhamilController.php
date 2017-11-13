<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Kelurahan\DIHamil;

class ibuhamilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ibu');
    
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
            'nokk' => $request['nokk'],
            'namaibuhamil' => $request['namaibuhamil'],
            'umur' => $request['umur'],
            'alamat' => $request['alamat'],
            'namasuami' => $request['namasuami'],
            'jlhanak' => $request['jlhanak'],
            'pekerjaan' => $request['pekerjaan'],
            'keterangan' => $request['keterangan'],
        ];

        return DIHamil::create($data);
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
        $ibuhamil = DIHamil::find($id);
        return $ibuhamil;
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
        $ibuhamil = DIHamil::find($id);
        $ibuhamil->nokk = $request['nokk'];
        $ibuhamil->namaibuhamil = $request['namaibuhamil'];
        $ibuhamil->umur = $request['umur'];
        $ibuhamil->alamat = $request['alamat'];
        $ibuhamil->namasuami = $request['namasuami'];
        $ibuhamil->jlhanak = $request['jlhanak'];
        $ibuhamil->pekerjaan = $request['pekerjaan'];
        $ibuhamil->keterangan = $request['keterangan'];
        $ibuhamil->update();

        return $ibuhamil;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ibuhamil = DIHamil::find($id);
        $ibuhamil->destroy($id);
    }

    public function apiIbuHamil(){
        $ibuhamil = DIHamil::all();
        return DataTables::of($ibuhamil)
        ->addColumn('action', function($ibuhamil){
            return '<a onclick = "editIbu('. $ibuhamil->id .')" class="btn btn-primary glyphicon glyphicon-pencil"></i></a> ' .
            ' <a onclick = "deleteIbu('. $ibuhamil->id .')" class="btn btn-danger glyphicon glyphicon-remove"></i></a>';
        })->make(true);
    }
}
