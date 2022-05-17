<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{

    public $usuario;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->usuario = new Usuario;
    }


    public function index()
    {
        $usu = $this->usuario->paginate(4);
        return view("index", compact('usu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['senha'] = \Hash::make($data['senha']); 

        $usu2 = $this->usuario->create($data);

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usu = $this->usuario->find($id);
        return view("show", compact('usu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usu_edit = $this->usuario->find($id);
        return view('edit', compact('usu_edit'));
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
        $this->usuario->where(['id'=>$id])->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'tipo'=>$request->tipo,
        ]);

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del_usuario = $this->usuario->find($id);
        $del_usuario->delete();

        return redirect()->route('index');
    }

    public function delete($id)
    {
        $usu_del = $this->usuario->find($id);
        return view("delete", compact('usu_del'));
    }
}
