</div>
    <div class="flex items-center justify-center gap-4 pt-5 pb-5 modal-footer md:gap-8">
                <button type="button" wire:click.prevent="cancel()"
                class='w-auto px-4 py-2 font-medium text-white bg-gray-500 rounded-lg shadow-xl hover:bg-gray-700'
                data-dismiss="modal">CERRAR</button>
                @if ($selected_id == 1)
                <button type="button" wire:click.prevent="update({{ $con[0]->id }})" class='w-auto px-4 py-2 font-medium text-white bg-purple-500 rounded-lg shadow-xl hover:bg-purple-700'>
                    ACTUALIZAR</button>
                @elseif ($selected_id == 2)
                <button type="button" wire:click.prevent="delete({{ $con[0]->id }})" class='w-auto px-4 py-2 font-medium text-white bg-purple-500 rounded-lg shadow-xl hover:bg-purple-700'>
                    ELIMINAR</button>
                @endif
            </div>
        </div>
    </div>
</div>
