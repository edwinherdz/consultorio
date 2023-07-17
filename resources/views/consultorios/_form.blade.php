@csrf

<div class="pb-12 border-b border-gray-900/10">
    <p class="mt-1 text-sm leading-6 text-gray-700">Favor de capturar los datos requeridos para la consulta</p>

    
    
    <div class="mt-6 border-t border-gray-100">
        <dl class="divide-y divide-gray-100">
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Nombre del consultorio</dt>
                <input {{ request()->RouteIs('consultorios.show') ? 'disabled' : ''}} name="cnombreconsultorio" value="{{ old('cnombreconsultorio',$consultorio->cnombreconsultorio) }}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" type="text">
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Descripción del consultorio</dt>
                <input {{ request()->RouteIs('consultorios.show') ? 'disabled' : ''}} name="cdescripcion" value="{{ old('cdescripcion',$consultorio->cdescripcion) }}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" type="text">
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Dirección</dt>
                <textarea {{ request()->RouteIs('consultorios.show') ? 'readonly' : ''}} name="cdireccion" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" type="text">{{$consultorio ? $consultorio->cdireccion : 'Sin datos' }}</textarea>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Teléfono</dt>
                <input {{ request()->RouteIs('consultorios.show') ? 'disabled' : ''}} name="ctelefono" value="{{ old('ctelefono',$consultorio->ctelefono) }}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" type="tel">
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">E-mail</dt>
                <input {{ request()->RouteIs('consultorios.show') ? 'disabled' : ''}} name="cemail" value="{{ old('cemail',$consultorio->cemail)  }}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" type="email">
            </div>
        </dl>
    </div>

    @if(request()->routeIs('consultorios.show'))

    @else
    <div class="flex justify-end mt-6 itemscenter gap-x-6">
        <button type="cancel" class="text-sm font-semibold leading-6 text-gray-900">{{ __($btnTextCancel) }}</button>
        <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ __($btnText) }}</button>
    </div>
    @endif
