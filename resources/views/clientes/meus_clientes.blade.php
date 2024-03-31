<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Meus clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (session('msg'))
                        <p class="bg-blue-500 p-2 rounded text-center text-white mb-4">
                            {{ session('msg') }}
                        </p>
                    @endif
                    <table class="table-auto w-full">
                        <thead class="bg-grey-100 text-left">
                            <th class="p-2">Nome</th>
                            <th>Telefone</th>
                            <th>Email</th>
                            <th>Ações</th>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $cliente)
                                <tr class="hover:bg-gray-100">
                                    <td class="p-2">{{ $cliente->nome }}</td>
                                    <td>{{ $cliente->telefone }}</td>
                                    <td>{{ $cliente->email }}</td>
                                    <td>
                                        <a href="{{ route('cliente.show',$cliente) }}" class="bg-blue-500 text-white rounded p-2">Detalhes</a>
                                        <a href="{{ route('cliente.meus_clientes',[Auth::user(),$cliente->id]) }}" class="bg-blue-500 text-white rounded p-2">Detalhes Aqui</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="p-6 text-gray-900">
                    @if($detalhes_aqui != null)
                        <h3>Detalhes aqui</h3>
                        <div>
                            <p>Nome: <strong>{{ $detalhes_aqui->nome }}</strong></p>
                            <p>Email: <strong>{{ $detalhes_aqui->email }}</strong></p>
                            <p>Telefone: <strong>{{ $detalhes_aqui->telefone }}</strong></p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
