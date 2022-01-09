@include('common.modalHead')
<div class="fixed inset-0 top-0 left-0 z-50 flex items-center justify-center h-screen bg-center bg-no-repeat bg-cover outline-none min-w-screen animated fadeIn faster focus:outline-none" id="modal-id">
    <div class="relative w-full max-w-lg p-5 mx-auto my-auto bg-white shadow-lg rounded-xl ">
        <!--body-->
        <div class="justify-center flex-auto p-5 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex items-center w-4 h-4 mx-auto -m-1 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="flex items-center w-16 h-16 mx-auto text-red-500" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
            <h2 class="py-4 text-xl font-bold ">Esta seguro de eliminar {{ $mensaje }}?</h3>
            <p class="px-8 text-sm text-gray-500">Se eliminaran todos los registro relacionados a la libreria {{ $mensaje }}</p>
        <!--footer-->
        @include('common.modalFooter')
        </div>
    </div>
</div>
