<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Olá ".Auth::user()->name) }}
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900 mt-4">
                    <p>Total de usuários: {{ $totalUsers }}</p>
                    <p>Total de clientes: {{ $totalClientes }}</p>
                    <p>Total de meus clientes: {{ $totalMeusClientes }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
