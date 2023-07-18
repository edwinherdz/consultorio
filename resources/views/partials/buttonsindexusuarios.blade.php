<div class="sm:flex sm:items-center sm:justify-between">
    <div>
        <div class="flex items-center gap-x-3">
            <h2 class="text-lg font-medium text-gray-800 dark:text-white">Registros de Usuarios</h2>
        </div>

        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">Usuarios registrados en el consultorio</p>
    </div>

    <div class="flex items-center mt-4 gap-x-3">
        {{-- <button onclick="window.open('{{route('consultas.pdflist')}}', '_blank');" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-black transition-colors duration-200 border border-gray-400 rounded rounded-lg shadow bg-white-100 shrink-0 sm:w-auto gap-x-2 hover:bg-gray-200 dark:hover:bg-gray-500 dark:bg-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
            </svg>


            <span>Reporte de Consultas</span>
        </button> --}}

        <button onclick="window.location.href='{{route('usuarios.create')}}'" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-black transition-colors duration-200 border border-gray-400 rounded rounded-lg shadow bg-white-100 shrink-0 sm:w-auto gap-x-2 hover:bg-gray-200 dark:hover:bg-gray-500 dark:bg-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
            </svg>


            <span>Nuevo Usuario</span>
        </button>
    </div>
</div>

<div class="mt-6 md:flex md:items-center md:justify-between">



</div>
