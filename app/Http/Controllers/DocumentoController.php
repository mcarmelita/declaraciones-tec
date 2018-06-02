<?php

namespace App\Http\Controllers;

use App\Documento;
use App\User;
use App\Periodo;
use Illuminate\Http\Request;
use Storage;
class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Documento $documento, Request $request)
    {
        if ($request->user()->id == 1) {
            $documentos = Documento::orderBy('nombre')->get();
        }else{
            $documentos = Documento::where('id_user', $request->user()->id)->orderBy('nombre')->get();
        }

        return view('documentos.list', compact('documentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $users, Documento $documentos)
    {
        $users = User::orderBy('name')->get();
        $periodos = Periodo::orderBy('id')->get();
        return view('documentos.form', compact('users', 'documentos', 'periodos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $areas)
    {
        //dd($areas);
        $documentos = new Documento();
        $documentos->nombre = $request->nombre;
        $documentos->num_formato = $request->num_formato;
        $archivo = $request->file('archivo');
        $ruta_archivo = time().'_'.$archivo->getClientOriginalName();
        Storage::disk('documentos')->put($ruta_archivo, file_get_contents($archivo->getRealPath()));
        $documentos->archivo = $ruta_archivo;
        $documentos->periodo = $request->periodo;
        $documentos->id_user = $request->user()->id;
        $documentos->save();

        return redirect()->route('documento.index', compact('documentos', 'areas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function show(Documento $documento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function edit(Documento $documento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documento $documento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documento $documento)
    {
        //
    }

    public function download($documento){
      $pathtoFile = public_path().'//documentos/'.$documento;
      return response()->download($pathtoFile);
    }
}
