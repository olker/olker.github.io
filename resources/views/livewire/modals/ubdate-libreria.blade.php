@include('common.modalHead')
<div class="fixed inset-0 top-0 left-0 z-50 flex items-center justify-center h-screen bg-center bg-no-repeat bg-cover outline-none min-w-screen animated fadeIn faster focus:outline-none" id="modal-id">
    <div class="flex items-center justify-center w-11/12 h-10-12 ">
        <div class="grid w-11/12 h-full bg-white rounded-lg shadow-xl md:w-9/12 lg:w-1/2">
          <div class="grid  mt-5  md:gap-8 mx-7">
            <div class="grid grid-cols-1">
            <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                Seleccionar el atributo a modificar
            </label>
            <select wire:model="datoEditar" class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                <option value="atributo">Atributos</option>
                <option value="nombre">Nombre: {{ $con[0]->nombre }}</option>
                <option value="genero">Genero: {{ $con[0]->genero }}</option>
                <option value="imagen">Imagen</option>
                <option value="doblaje">Doblaje: {{ $con[0]->doblaje }}</option>
                <option value="subtitulado">Subtitulado: {{ $con[0]->subtitulado }}</option>
                <option value="descripcion">Descripcion</option>
                <option value="disco">Disco: {{ $con[0]->disco }}</option>
                <option value="peso">Peso: {{ $con[0]->peso }}</option>
                <option value="tipo">Categoria: {{ $con[0]->tipo }}</option>
                @if ($con[0]->tipo != "pelicula")
                <option value="capitulos">Capitulos: {{ $con[0]->capitulos }}</option>
                <option value="temporada">Temporada: {{ $con[0]->temporada }}</option>
                @endif
            </select>
            </div>
           @if ($datoEditar && $datoEditar != "atributo")
                @if ($datoEditar == "imagen")
                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <label class="mb-1 text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Foto de la libreria</label>
                        <div class='flex items-center justify-center w-full'>
                            <label class='flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-purple-300 group'>
                                <div class="grid grid-cols-1 gap-5 mt-1 md:grid-cols-2 md:gap-8 mx-7">
                                    <div class="grid grid-cols-1">
                                        @if ($variableEditar != null)
                                            <img src="{{ $variableEditar->temporaryUrl() }}"style="max-height: 120px">
                                        @else
                                            <img src="{{ asset($con[0]->imagen) }}" style="max-height: 120px">
                                        @endif
                                    </div>
                                    <div class="grid grid-cols-1">
                                        <div class='flex flex-col items-center justify-center pt-7'>
                                            <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                            <p class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                            @if  ($variableEditar != null)
                                                Ya se cargo la nueva imagen
                                            @else
                                                Seleccione nueva foto
                                            @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <input wire:model="variableEditar" type='file' class="hidden" name="imagen" id="imagen"  placeholder="Descripcion"/>
                            </label>
                        </div>
                        @error('imagen') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                @elseif ($datoEditar == "tipo")
                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Seleccione el {{ $datoEditar }} de la libreria {{ $con[0]->nombre }} en la lista
                        </label>
                        <select wire:model="variableEditar" class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            <option value="">Lista categoria</option>
                            <option value="Pelicula">Pelicula</option>
                            <option value="Serie">Serie</option>
                            <option value="Anime">Anime</option>
                            <option value="Documental">Documental</option>
                        </select>
                    </div>
                @elseif ($datoEditar == "genero")
                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Seleccione el {{ $datoEditar }} de la libreria {{ $con[0]->nombre }} en la lista
                        </label>
                        <select wire:model="variableEditar" class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            <option value="">lista de generos</option>
                            <option value="Shoujo">Shoujo</option>
                            <option value="Isekai">Isekai</option>
                            <option value="Shonen">Shonen</option>
                            <option value="Seinen">Seinen</option>
                            <option value="Magical Girls">Magical Girlsn</option>
                            <option value="Mecha">Mecha</option>
                            <option value="Acción">Acción</option>
                            <option value="Aventura">Aventura</option>
                            <option value="Ciencia Ficción">Ciencia Ficció</option>
                            <option value="Comedia">Comedia</option>
                            <option value="Drama">Drama</option>
                            <option value="Fantasía">Fantasía</option>
                            <option value="Musical">Musical</option>
                            <option value="Terror">Terror</option>
                            <option value="Thriller e intriga">Thriller e intriga</option>
                            <option value="Dramas políticos">Dramas políticos</option>
                            <option value="Animada">Animada</option>
                        </select>
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Si no hay el genero que busca ingrese uno nuevo
                        </label>
                        <input
                        wire:model="variableEditar"
                        type="text"
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        id="newDato"
                        placeholder="Ingrese el nuevo dato">
                        @error('newDato') <span class="error text-danger">{{ $message }}</span>@enderror
                    </div>
                @elseif ($datoEditar == "descripcion")
                    <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                        Modificar la {{ $datoEditar }} de la libreria {{ $con[0]->nombre }}
                    </label>
                    <textarea wire:model="variableEditar"
                    class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    id="newDato"
                    placeholder="Ingrese el nuevo dato">
                    </textarea>
                    @error('descripcion') <span class="error text-danger">{{ $message }}</span> @enderror

                @else
                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Modificar {{ $datoEditar }} de la libreria {{ $con[0]->nombre }}
                        </label>
                        <input
                        wire:model="variableEditar"
                        type="text"
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        id="newDato"
                        placeholder="Ingrese el nuevo dato">
                        @error('newDato') <span class="error text-danger">{{ $message }}</span>@enderror
                    </div>
                @endif
           @endif

            <div class="grid grid-cols-1 mt-5 mx-7">
                @include('common.modalFooter')
            </div>
          </div>
        </div>
      </div>
</div>
