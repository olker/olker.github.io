<div wire:ignore.self class="modal fade" id="exampleModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="flex flex-col min-h-screen bg-grey-lighter" role="document">
        <div class="container flex flex-col items-center justify-center flex-1 max-w-sm px-2 mx-auto">
            <div class="w-full px-6 py-8 text-black bg-white rounded shadow-md">
                <h1 class="mb-8 text-3xl text-center" id="exampleModalLabel">Create Nueva Libreria</h1>
            </div>
           <div class="modal-body">
				<form>
            <div class="form-group">
                <label for="nombre"></label>
                <input wire:model="nombre" type="text" class="block w-full p-3 mb-4 border rounded border-grey-light" id="nombre" placeholder="Nombre">@error('nombre') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="genero"></label>
                <input wire:model="genero" type="text" class="block w-full p-3 mb-4 border rounded border-grey-light" id="genero" placeholder="Genero">@error('genero') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="imagen"></label>
                <input wire:model="imagen" type="text" class="block w-full p-3 mb-4 border rounded border-grey-light" id="imagen" placeholder="Imagen">@error('imagen') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="doblaje"></label>
                <input wire:model="doblaje" type="text" class="block w-full p-3 mb-4 border rounded border-grey-light" id="doblaje" placeholder="Doblaje">@error('doblaje') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="subtitulado"></label>
                <input wire:model="subtitulado" type="text" class="block w-full p-3 mb-4 border rounded border-grey-light" id="subtitulado" placeholder="Subtitulado">@error('subtitulado') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="descripcion"></label>
                <input wire:model="descripcion" type="text" class="block w-full p-3 mb-4 border rounded border-grey-light" id="descripcion" placeholder="Descripcion">@error('descripcion') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="disco"></label>
                <input wire:model="disco" type="text" class="block w-full p-3 mb-4 border rounded border-grey-light" id="disco" placeholder="Disco">@error('disco') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="peso"></label>
                <input wire:model="peso" type="text" class="block w-full p-3 mb-4 border rounded border-grey-light" id="peso" placeholder="Peso">@error('peso') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="w-full py-3 my-1 text-center text-white rounded bg-green hover:bg-green-dark focus:outline-none btn btn-secondary close-btn" data-dismiss="modal">Cancelar</button>
                <button type="button" wire:click.prevent="store()" class="w-full py-3 my-1 text-center text-white rounded bg-green hover:bg-green-dark focus:outline-none btn btn-primary close-modal">Guardar</button>
            </div>
        </div>
    </div>
    @if (session()->has('message'))
    <div class="mt-6 text-grey-dark alert alert-success">
        {{ session('message') }}
    </div>
@endif
</div>
