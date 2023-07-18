@csrf
<div class="flex flex-wrap mb-2 -mx-3">
    <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">

        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-city">
            Nombre
        </label>
        <input {{request()->routeIs('usuarios.show') ? 'disabled' : ''}} name="name" value="{{ $usuario->name }}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text">
    </div>
    <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-city">
            email
        </label>
        <input {{request()->routeIs('usuarios.show') ? 'disabled' : ''}} name="email" value="{{ $usuario->email}}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none disabled focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text">
    </div>
    <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-city">
            Contraseña
        </label>
        <input {{request()->routeIs('usuarios.show') ? 'disabled' : ''}} name="password" value="" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none disabled focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text">
    </div>
    <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-city">
            Confirmar Contraseña
        </label>
        <input {{request()->routeIs('usuarios.show') ? 'disabled' : ''}} name="password_confirmation" value="" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none disabled focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text">
    </div>
    <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-zip">
            Consultorio asignado
        </label>

        @if (request()->routeIs('usuarios.show'))
        <input {{request()->routeIs('usuarios.edit') ? '' : 'disabled'}} name="consultorio_id" value="{{ $usuario->consultorio ? $usuario->consultorio->cnombreconsultorio : 'Consultorio sin asignar'  }}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none disabled focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text">
        @else
        <select name="consultorio_id" id="consultorios" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500">
            @foreach($consultorios as $consultorio)
            <option name="consultorio_id" value="{{$consultorio->id}}"
                @isset($usuario->consultorio->id)
                {{ $usuario->consultorio->id == ($consultorio->id) ? 'Selected' : ''  }} 
                @endisset 
                >{{$consultorio->cnombreconsultorio}} </option>
            @endforeach

        </select>
        @endif




    </div>
    <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-zip">
            Creado
        </label>
        <input disabled value="{{ $usuario->created_at}}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none disabled focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text">
    </div>
</div>
<div class="flex justify-end mt-6 itemscenter gap-x-6">
    <button type="cancel" class="text-sm font-semibold leading-6 text-gray-900">{{ __($btnTextCancel) }}</button>
    <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ __($btnText) }}</button>
</div>
