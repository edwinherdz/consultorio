<div>
    <div class="px-4 sm:px-0">
        <h3 class="text-base font-semibold leading-7 text-gray-900">configuracion del consultorio</h3>
        <p class="max-w-2xl mt-1 text-sm leading-6 text-gray-500">Detalles de configuracion del consultorio</p>
    </div>

    @empty(auth()->user()->consultorio_id)
        
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
    </div>
    
</div>
