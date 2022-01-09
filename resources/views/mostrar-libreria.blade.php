<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Datos extras de '.$nombreLibreria) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                @livewire('mostrar-contenido-individual',['libreriaVieu'=>$idLibreria])
            </div>
        </div>
    </div>
</x-app-layout>
