<div class="p-4 bg-white border-b border-gray-200 sm:px-20">
    <div class="flex items-center justify-center p-6 px-4 py-2">
        <div class="flex border-2 rounded">
            <input wire:model="nombreLibreria" type="text" class="px-4 py-2 w-80" placeholder="Buscar...">
            <select wire:model="numeroPagina" class="flex items-center justify-center px-6 border-l">
                <option value="5">5 por página</option>
                <option value="10">10 por página</option>
                <option value="15">15 por página</option>
                <option value="25">25 por página</option>
                <option value="50">50 por página</option>
                <option value="100">100 por página</option>
            </select>
            <select wire:model="orden" class="flex items-center justify-center px-8 border-l">
                <option value="id">ordenar por fecha de registro</option>
                <option value="nombre">ordenar por nombre</option>
                <option value="genero">ordenar por genero</option>
                <option value="disco">ordenar por numero de disco</option>
            </select>
            <select wire:model="tipo" class="flex items-center justify-center px-8 border-l">
                <option value="ASC">asendente</option>
                <option value="DESC">desendente</option>
            </select>
            @if ($nombreLibreria ==! "")
            <button wire:click="clear" class="flex items-center justify-center px-4 border-l">
                X
            </button>
            @endif
        </div>
    </div>
    <div class="mt-8 text-2xl">
        <div class="flex flex-row ">
            <div class="grid grid-cols-3 divide-x ">
                @foreach ($libreria as $item_libreria)
                <section class="text-gray-600 body-font">
                <div class="container px-2 py-8 mx-auto max-w-7x1">
                    <div class="flex flex-wrap -m-4">
                      <div class="xl:w-auto md:w-auto">
                        <div class="p-4 bg-white rounded-lg">
                          <a href="{{ route('libreria.mostrar',$item_libreria) }}"><img class="object-fill object-center mb-6 rounded-lg w-72 h-96" src="{{ $item_libreria->imagen }}" alt="Image Size 720x400"></a>
                          <h3 class="text-xs font-medium tracking-widest text-indigo-500 title-font">{{ $item_libreria->genero }}</h3>
                          <h2 class="capitalize mb-4 text-lg font-medium text-indigo-500 title-font">{{ $item_libreria->nombre }}</h2>
                          <p class="text-base leading-snug text-justify">{{ $item_libreria->descripcion }}</p>
                          <h2 class="mb-4 text-lg font-medium text-indigo-500 title-font">
                              @if (Auth::user())
                              Numero de disco:  {{ $item_libreria->disco }}
                              @endif
                            </h2>
                            <a href="{{ route('libreria.mostrar',$item_libreria) }}" class='w-auto px-4 py-1 text-base font-medium text-white bg-purple-500 rounded-lg shadow-xl hover:bg-purple-700' >Mas Informacion</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                @endforeach
            </div>
        </div>
        @if ($libreria->count())
        <div class="p-6">
            {{ $libreria->links()}}
        </div>
        @else
        <div class="p-6">
            <h2 class="mb-4 text-lg font-medium text-gray-500 title-font">
                El nombre, genero, numero de disco, buscado en esta libreria no existe </h2>
        </div>
        @endif


    </div>
</div>
