<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes de '.$cliente->nome) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>Email: <strong>{{ $cliente->email }}</strong></p>
                    <p>Telefone: <strong>{{ $cliente->telefone }}</strong></p>
                    <p>Empresa: <strong>{{ $cliente->empresa }}</strong></p>
                    <p>Telefone comercial: <strong>{{ $cliente->tel_comercial }}</strong></p>
                    <p>Cadastrado em: <strong>{{ $cliente->created_at }}</strong></p>
                    <p>Atualizado a última vez em: <strong>{{ $cliente->updated_at }}</strong></p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
