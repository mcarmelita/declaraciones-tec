<?php

namespace App\Http\Controllers;

use App\Documento;
use App\User;
use App\Periodo;
use App\Http\Requests\DocumentoValidaciones;
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
            $documento = Documento::orderBy('nombre')->get();
        }else{
            $documento = Documento::where('id_user', $request->user()->id)->orderBy('nombre')->get();
        }

        return view('documentos.list', compact('documento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $users, Documento $documento)
    {
        $next = route('documentos.store');
        $documento = null;
        $periodo = Periodo::orderBy('id')->get();
        $users = User::orderBy('name')->get();
        return view('documentos.form', compact('users', 'periodo', 'documento', 'next'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumentoValidaciones $request, User $areas)
    {
        //dd($areas);
        $documento = new Documento();
        $documento->nombre = $request->nombre;
        $documento->num_formato = $request->num_formato;
        if ($request->hasFile('archivo')) {
            $archivo = $request->file('archivo');
        }
        $ruta_archivo = time().'_'.$archivo->getClientOriginalName();
        Storage::disk('documentos')->put($ruta_archivo, file_get_contents($archivo->getRealPath()));
        $documento->archivo = $ruta_archivo;
        $documento->id_periodo = $request->periodo;
        $documento->id_user = $request->user()->id;
        $documento->save();

        return redirect()->route('documentos.index', compact('documento', 'areas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function show(Documento $documento)
    {
        return view('documentos.detail', compact('documento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function edit(Documento $documento)
    {
        $next = route('documentos.update', $documento);
        $periodo = Periodo::orderBy('id')->get();
        $users = User::orderBy('name')->get();
        return view('documentos.form', compact('users', 'periodo', 'documento', 'next'));
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
        $documento->nombre = $request->nombre;
        $documento->num_formato = $request->num_formato;
        if ($request->hasFile('archivo')) {
            if ($documento->archivo) {
                Storage::disk('documentos')->delete($documento->archivo);
            }
            $archivo = $request->file('archivo');
            $ruta_archivo = time().'_'.$archivo->getClientOriginalName();
            Storage::disk('documentos')->put($ruta_archivo, file_get_contents($archivo->getRealPath()));
            $documento->archivo = $ruta_archivo;
        }
        $documento->id_periodo = $request->periodo;
        $documento->id_user = $request->user()->id;
        $documento->save();


        return redirect()->route('documentos.index', compact('documento', 'areas'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documento $documento)
    {
        // Obtener identificador
        $id = $documento->id;
        if ($documento->delete()) {
            Storage::disk('documentos')->delete($documento->archivo);
            return redirect()->route('documentos.index')->with('message', 'Eliminado con éxito');
        } else {
            return redirect()->route('documentos.index')->with('message', 'No se pudo eliminar');
        }
        
    }
}
