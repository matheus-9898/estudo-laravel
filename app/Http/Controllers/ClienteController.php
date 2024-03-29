<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('clientes.index',[
            'clientes' => Cliente::orderBy('nome')->paginate('5')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //INPUT
    {
        $cliente = new Cliente();

        $cliente->user_id = $request->user_id;
        $cliente->nome = $request->nome;
        $cliente->email = $request->email;
        $cliente->telefone = $request->telefone;
        $cliente->empresa = $request->empresa;
        $cliente->tel_comercial = $request->tel_comercial;

        $cliente->save();

        return redirect()->route('cliente.create')->with('msg','Cliente cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return view('clientes.show',[
            'cliente' => $cliente
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }

    public function meus_clientes(User $user, $id)
    {
        //$user = User::where('id',$id->id)->first();
        $clientes = $user->customers()->get();

        if($id == 0){
            $detalhesCliente = null;
        }else{
            foreach ($clientes as $cliente) {
                if($cliente->id == $id)
                    $detalhesCliente = $cliente;
            }
        }
        return view('clientes.meus_clientes',[
            'clientes' => $clientes,
            'detalhes_aqui' => $detalhesCliente
        ]);
    }
}
