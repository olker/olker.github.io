<div class="p-4 bg-white border-b border-gray-200 sm:px-20">
    <div class="flex items-center justify-center p-6 px-4 py-2">
        <div class="flex border-2 rounded">
            <input type="text" class="px-4 py-2 w-80" placeholder="Buscar...">
            <button class="flex items-center justify-center px-4 border-l">
                <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path
                        d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                </svg>
            </button>
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
                          <img class="object-fill object-center mb-6 rounded-lg w-72 h-96" src="{{ $item_libreria->imagen }}" alt="Image Size 720x400">
                          <h3 class="text-xs font-medium tracking-widest text-indigo-500 title-font">Genero: {{ $item_libreria->genero }}</h3>
                          <h2 class="mb-4 text-lg font-medium text-indigo-500 title-font">Nombre: {{ $item_libreria->nombre }}</h2>
                          <p class="text-base leading-relaxed">Descricion: {{ $item_libreria->descripcion }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                @endforeach
            </div>
        </div>
            <div class="p-6">
                {{ $libreria->links()}}
            </div>

    </div>
</div>
