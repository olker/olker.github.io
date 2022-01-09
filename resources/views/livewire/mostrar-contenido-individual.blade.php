<div class="flex flex-wrap items-center h-screen md">
    <div class="w-full h-screen bg-white md:w-1/2">
      <div class="mx-12">
        <h1 class="capitalize mt-6 text-5xl font-bold">{{ $con[0]->nombre }} </h1>
        <!-- country region island -->
        <div class="flex mt-6 font-light text-gray-500">
          <div class="pr-4">
            <span class="uppercase">
                Tipo
            </span>
            <p class="capitalize pt-2 text-2xl font-semibold text-gray-900">{{ $con[0]->tipo }}</p>
          </div>
          <div class="pr-4">
            <span class="uppercase">Genero</span>
            <p class="capitalize pt-2 text-2xl font-semibold text-gray-900">{{ $con[0]->genero }}</p>
          </div>
          <div class="pr-4">
            <span class="uppercase">Doblaje</span>
            <p class="capitalize pt-2 text-2xl font-semibold text-gray-900">{{ $con[0]->doblaje }}</p>
          </div>
          <div class="pr-4">
            <span class="uppercase">Subtitulado</span>
            <p class="capitalize pt-2 text-2xl font-semibold text-gray-900">{{ $con[0]->subtitulado }}</p>
          </div>
        </div>

        <div class="w-full mt-8 text-sm leading-snug text-justify text-gray-500 description sm:">
        {{ $con[0]->descripcion }}
        </div>
        <div class="flex mt-8 font-light pb-2 text-gray-500">
            <div class="pr-4">
              <span class="uppercase">Disco</span>
              <p class="pt-2 text-2xl font-semibold text-gray-900">{{ $con[0]->disco }}</p>
            </div>
            <div class="pr-4">
              <span class="uppercase">Peso</span>
              <p class="pt-2 text-2xl font-semibold text-gray-900">{{ $con[0]->peso }} GB</p>
            </div>
        </div>
        @if ($con[0]->tipo != "pelicula")
            <div class="flex mt-6 font-light pb-4 text-gray-500">
                <div class="pr-4">
                <span class="uppercase">Temporada</span>
                <p class="capitalize pt-2 text-2xl font-semibold text-gray-900">{{ $con[0]->temporada }}</p>
                </div>
                <div class="pr-4">
                <span class="uppercase">Capitulos</span>
                <p class="pt-2 text-2xl font-semibold text-gray-900">{{ $con[0]->capitulos }}</p>
                </div>
            </div>
        @endif
        @if (Auth::user())
            <div class="flex items-center justify-center gap-4 pt-10 pb-10 md:gap-8">
                <a wire:click="setContainer('1')" class='w-auto px-5 py-2 font-mediun text-white bg-purple-500 rounded-lg shadow-xl hover:bg-purple-700' data-toggle="modal" data-target="#theModal">
                    Editar
                </a>
                <a wire:click="setContainer('2')" class='w-auto px-5 py-2 font-medium text-white bg-purple-500 rounded-lg shadow-xl hover:bg-purple-700'>
                    Eliminar
                </a>
            </div>
        @endif
      </div>
    </div>
    <div class="w-full h-screen bg-red-600 md:w-1/2">
      <img
        src="{{ asset($con[0]->imagen) }}"
        class="w-full h-screen"
        alt=""
      />
    </div>
    @if($container == 2)
    <div id="miModal" class="modal">
        @include('livewire.modals.alert-eliminar-registro')
    @elseif ($container == 1)
        @include('livewire.modals.ubdate-libreria')
    @endif
</div>
