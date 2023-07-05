<div>
    <div class="px-4 sm:px-0">
        <h3 class="text-base font-semibold leading-7 text-gray-900">configuracion del consultorio</h3>
        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Detalles de configuracion del consultorio</p>
    </div>
    <form action="POST">

        <div class="mt-6 border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Nombre del consultorio</dt>
                    <input name="cnombreconsultorio" value="{{$consultorio ? $consultorio->cnombreconsultorio : 'Sin datos' }}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" type="text">
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Descripción del consultorio</dt>
                    <input name="cdescripcion" value="{{$consultorio ? $consultorio->cdescripcion :'Sin datos' }}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" type="text">
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Dirección</dt>
                    <textarea name="cdireccion"  class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" type="text">{{$consultorio ? $consultorio->cdireccion : 'Sin datos' }}</textarea>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Teléfono</dt>
                    <input name="ctelefono" value="{{$consultorio ? $consultorio->ctelefono :'Sin datos' }}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" type="tel">
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">E-mail</dt>
                    <input name="ctelefono" value="{{$consultorio ? $consultorio->cemail : 'Sin datos' }}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" type="email">
                </div>
            </dl>
        </div>
    </form>
</div>
