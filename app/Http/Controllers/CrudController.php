<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class CrudController extends Controller
{
    public function dashboard(Request $request)
    {
        $data = $request->all();
        error_reporting(0);
        if($request->cpf){
            $usuarios = Usuarios::where('cpf', $data['cpf'])->get();

            return view('dashboard', array(
                'usuarios' => $usuarios
            ));
        }
        elseif($request->data){
            $usuarios = Usuarios::where('data', $data['data'])->get();

            return view('dashboard', array(
                'usuarios' => $usuarios
            ));
        }
        elseif($request->nome){
            $usuarios = Usuarios::where('nome', 'like', "%$request->nome%")->get();

            return view('dashboard', array(
                'usuarios' => $usuarios
            ));
        }
        elseif($request->sexo){
            $usuarios = Usuarios::where('sexo', $data['sexo'])->get();

            return view('dashboard', array(
                'usuarios' => $usuarios
            ));
        }
        elseif($request->uf){
            $usuarios = Usuarios::where('estado', $data['uf'])->get();

            return view('dashboard', array(
                'usuarios' => $usuarios
            ));
        }
        elseif($request->city){
            $usuarios = Usuarios::where('cidade', $data['city'])->get();

            return view('dashboard', array(
                'usuarios' => $usuarios
            ));
        }
        else{
            $usuarios = Usuarios::all();
            return view('dashboard', array(
                'usuarios' => $usuarios
            ));
        }
    }

    public function create()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        session_start();
        $data = request()->all();
        $cadastros = Usuarios::create([
            'cpf' => $data['cpf'],
            'nome' => $data['name'],
            'data' => $data['date'],
            'sexo' => $data['sexo'],
            'endereco' => $data['address'],
            'cidade' => $data['city'],
            'estado' => $data['uf']
        ]);
        $_SESSION['success'] = "";
        redirect()->to('/')->send();
    }

    public function find(Request $request)
    {

    }

    public function edit($id)
    {
        $cadastros = Usuarios::findOrFail($id);
        return view('edit', array(
            'cadastros' => $cadastros
        ));
    }

    public function update(Request $request, $id)
    {
        session_start();
        $data = $request->all();
        $cadastros = Usuarios::where('id', $id)->update([
            'cpf' => $data['cpf'],
            'nome' => $data['name'],
            'data' => $data['date'],
            'sexo' => $data['sexo'],
            'endereco' => $data['address'],
            'cidade' => $data['city'],
            'estado' => $data['uf']
        ]);
        $_SESSION['success'] = "";
        redirect()->to('/dashboard')->send();
    }

    public function destroy($id)
    {
        session_start();
        $cadastros = Usuarios::where('id', $id)->delete();
        $_SESSION['delete'] = "";
        redirect()->to('/dashboard')->send();
    }
}
