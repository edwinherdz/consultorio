@csrf

<div class="pb-12 border-b border-gray-900/10">
    <p class="mt-1 text-sm leading-6 text-gray-700">Favor de capturar los datos requeridos para el registro del Estudio Médico</p>

    
    
    <div class="mt-6 border-t border-gray-100">
        <dl class="divide-y divide-gray-100">
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Nombre del Estudio Médico</dt>
                <input {{ request()->RouteIs('estudios.show') ? 'disabled' : ''}} name="cnombre" value="{{ old('cnombre',$estudio->cnombre) }}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" type="text">
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Descripción del Estudio Médico</dt>
                <input {{ request()->RouteIs('estudios.show') ? 'disabled' : ''}} name="cdescripcion" value="{{ old('cdescripcion',$estudio->cdescripcion)}}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" type="text">
            </div>
            @if(request()->RouteIs('estudios.create'))
            
            @else 
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Fecha de Creación</dt>
                <input {{ request()->RouteIs('estudios.show') ? 'disabled' : ''}} name="created_at" value="{{ old('created_at',$estudio->created_at) }}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" type="text">
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Estado del Estudio Médico</dt>
                <input {{ request()->RouteIs('estudios.show') ? 'disabled' : ''}} name="lactivo" value="{{ $estudio->lactivo ? 'Activo' : 'Inactivo'}}" class=" {{ $estudio->lactivo ? 'bg-green-100' : 'bg-orange-100'}}  block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"   type="text">
            </div>
            @endif
           
        </dl>
    </div>

    @if(request()->routeIs('estudios.show'))

    @else
    <div class="flex justify-end mt-6 itemscenter gap-x-6">
        <button type="cancel" class="text-sm font-semibold leading-6 text-gray-900">{{ __($btnTextCancel) }}</button>
        <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ __($btnText) }}</button>
    </div>
    @endif
