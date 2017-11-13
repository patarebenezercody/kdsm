<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Kelurahan\Bilal;
class BilalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bilal');
        
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
            'namabilal' => $request['namabilal'],
            'nik' => $request['nik'],
            'jkelamin' => $request['jkelamin'],
            'ttl' => $request['ttl'],
            'alamatbilal' => $request['alamatbilal'],
            'lokasitugas' => $request['lokasitugas'],
            'norekbanksumut' => $request['norekbanksumut'],
            'kantorcbgbanksumut' => $request['kantorcbgbanksumut'],
            'nohp' => $request['nohp'],
        ];

        return Bilal::create($data);
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
        $b = Bilal::find($id);
        return $b;
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
        $b = Bilal::find($id);
        $b->namabilal = $request['namabilal'];
        $b->nik = $request['nik'];
        $b->jkelamin = $request['jkelamin'];
        $b->ttl = $request['ttl'];
        $b->alamatbilal = $request['alamatbilal'];
        $b->lokasitugas = $request['lokasitugas'];
        $b->norekbanksumut = $request['norekbanksumut'];
        $b->kantorcbgbanksumut = $request['kantorcbgbanksumut'];
        $b->nohp = $request['nohp'];
        $b->update();

        return $b;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b = Bilal::find($id);
        $b->destroy($id);
    }

    public function apiBilal(){
        $b = Bilal::all();
        return DataTables::of($b)
        ->addColumn('action', function($b){
            return '<a onclick = "editbilal('. $b->id .')" class="btn btn-primary glyphicon glyphicon-pencil"></i></a> ' .
            ' <a onclick = "deletebilal('. $b->id .')" class="btn btn-danger glyphicon glyphicon-remove"></i></a>';
        })->make(true);
    }
}
