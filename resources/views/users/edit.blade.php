<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edição de nível de acesso') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 mb-4">
                    <p class="mb-4">Editando nível de acesso de <strong>{{ $user->name }}</strong></p>
                    <p>Nível de acesso atual: <strong>{{ $user->level }}</strong></p>
                </div>
                <div class="p-6 text-gray-900">
                    <form action="{{ route('user.updateNivel',$user->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <label for="level">Selecione um novo nível</label>
                        <select name="level" id="level" class="py-1 px-8 rounded" required>
                            <option value="" selected disabled>Selecione</option>
                            <option value="user">Usuário Comum</option>
                            <option value="admin">Administrador</option>
                        </select>
                        <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
