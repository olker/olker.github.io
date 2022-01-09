<div class="flex items-center justify-center h-full bg-gray-100">
    @if (session()->has('message'))
    <div class="px-4 py-3 text-black bg-blue-100 border-t border-b border-blue-500" role="alert">
        <p class="font-bold">Mensage</p>
        <p class="text-sm">{{ session('message') }}</p>
      </div>
    @endif
    <div class="grid w-11/12 h-full bg-white rounded-lg shadow-xl md:w-9/12 lg:w-1/2">
      <div class="flex justify-center">
        <div class="flex">
          <h1 class="text-xl font-bold text-gray-600 md:text-2xl">Datos de la nueva libreria</h1>
        </div>
      </div>
      <div class="grid grid-cols-1 mt-5 mx-7">
        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Ingrese el nombre den Anime, Serie o pelicula</label>
        <input wire:model="nombre" type="text" class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" id="nombre" placeholder="Nombre">@error('nombre') <span class="error text-danger">{{ $message }}</span> @enderror
     </div>
      <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
        <div class="grid grid-cols-1">
          <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Doblaje</label>
          <input wire:model="doblaje" type="text" class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" id="doblaje" placeholder="Doblaje">@error('doblaje') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="grid grid-cols-1">
          <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Subtitulado</label>
          <input wire:model="subtitulado" type="text" class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" id="subtitulado" placeholder="Subtitulado">@error('subtitulado') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
      </div>
      <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
        <div class="grid grid-cols-1">
        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Genero</label>
        <select wire:model="genero" class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" id="genero" placeholder="Genero">
          <option value=""></option>
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
        </select>@error('genero') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="grid grid-cols-1">
        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Tipo</label>
        <select wire:model="tipo" class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" id="genero" placeholder="Genero">
          <option value=""></option>
          <option value="pelicula">Pelicula</option>
          <option value="serie">Serie</option>
          <option value="anime">Anime</option>
          <option value="documental">Documental</option>
        </select>@error('tipo') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
      </div>
      @if ($tipo == "serie" or $tipo == "anime")
      <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
        <div class="grid grid-cols-1">
          <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Capitulos</label>
          <input wire:model="capitulos" type="text" class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" id="capitulos" placeholder="nn-nn">@error('acpitulos') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="grid grid-cols-1">
          <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Temporada</label>
          <input wire:model="temporada" type="text" class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" id="temporada" placeholder="Temporada n">@error('temporada') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
      </div>
      @endif
      <div class="grid grid-cols-1 mt-5 mx-7">
        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Descripcion</label>
        <textarea wire:model="descripcion" class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" id="descripcion" placeholder="Descripcion"></textarea>@error('descripcion') <span class="error text-danger">{{ $message }}</span> @enderror
      </div>

      <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
        <div class="grid grid-cols-1">
          <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Numero del Disco</label>
          <input wire:model="disco" type="text" class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" id="disco" placeholder="Disco">@error('disco') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="grid grid-cols-1">
          <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Peso en gigaytes</label>
          <input wire:model="peso"  type="text" class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" id="peso" placeholder="Peso">@error('peso') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
      </div>

      <div class="grid grid-cols-1 mt-5 mx-7">
        <label class="mb-1 text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Foto de la libreria</label>
        @if ($imagen)
        <img src="{{ $imagen->temporaryUrl() }}" style="max-height: 120px">
        @endif
          <div class='flex items-center justify-center w-full'>
              <label class='flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-purple-300 group'>
                  <div class='flex flex-col items-center justify-center pt-7'>
                    <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <p class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                        @if ($imagen == null)
                        Seleccione una foto
                        @else
                        {{ $imagen }}
                        @endif
                    </p>
                  </div>
                <input wire:model="imagen" type='file' class="hidden" name="imagen" id="imagen"/>
              </label>
          </div>
          @error('imagen') <span class="error text-danger">{{ $message }}</span> @enderror
      </div>
      <div class='flex items-center justify-center gap-4 pt-5 pb-5 md:gap-8'>
        <button class='w-auto px-4 py-2 font-medium text-white bg-gray-500 rounded-lg shadow-xl hover:bg-gray-700' data-dismiss="modal">Cancel</button>
        <button class='w-auto px-4 py-2 font-medium text-white bg-purple-500 rounded-lg shadow-xl hover:bg-purple-700' wire:click.prevent="store()">Create</button>
      </div>
    </div>
  </div>

