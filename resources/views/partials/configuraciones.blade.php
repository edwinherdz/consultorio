<div>
    <div class="px-4 sm:px-0">
        <h1 class="text-base font-semibold leading-7 text-gray-900">Configuraciones</h1>
        <p class="max-w-2xl mt-1 text-sm leading-6 text-gray-500">Detalles de configuracion del consultorio</p>
    </div>

    {{-- @empty(auth()->user()->consultorio_id)

    <div>
        <a href="{{route('consultorios.create')}}"> Crear Consultorio</a>
</div>
@else
<div>
    <a href="{{route('consultorios.show',auth()->user()->consultorio_id)}}"> Configurar consultorio.</a>
</div>
@endempty
<div>
    <a href="{{route('estudios.index')}}"> Configurar catálogo Estudio médico.</a>
</div> --}}
<div class="flex flex-row space-x-4 ">
    @empty(auth()->user()->consultorio_id)
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-sky-100">
        <div class="p-5">
            <a href="{{route('consultorios.create')}}">
                <h5 class="mb-2 text-2xl tracking-tight text-gray-900 dark:text-white hover:bg-sky-100">Configuración inicial del consultorio</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Realizar la configuración inicial del consultorio</p>
        </div>
    </div>
    @else
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-sky-100">
        <div class="p-5">
            <a href="{{route('consultorios.show',auth()->user()->consultorio_id)}}">
                <h5 class="mb-2 text-2xl tracking-tight text-gray-900 dark:text-white hover:bg-sky-100">Datos del consultorio</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Modulo de administración del consultorio</p>
        </div>
    </div>
    @endempty




    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-sky-100">
        <div class="p-5">
            <a href="{{route('estudios.index')}}">
                <h5 class="mb-2 text-2xl tracking-tight text-gray-900 dark:text-white">Catálogo de Estudios Médicos</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Módulo de administración del catálogo de Estudios Médicos</p>
        </div>
    </div>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-sky-100">
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl tracking-tight text-gray-900 dark:text-white">Administración de usuarios</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Módulo de administración de usuarios</p>
        </div>
    </div>
    
</div>
</div>
