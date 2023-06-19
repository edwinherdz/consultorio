@csrf

<div class="space-y-12"> {{--inicio del livewire --}}


    <div class="pb-12 border-b border-gray-900/10">
        <p class="mt-1 text-sm leading-6 text-gray-700">Favor de capturar los datos requeridos para la consulta</p>

        @if(request()->routeIs('consultas.create'))

        @livewire('paciente-datos')

        @else

        <div class="flex flex-wrap mb-2 -mx-3">
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-city">
                    Nombre
                </label>
                <input disabled name="" value="{{ $consulta->paciente->cnombre .' '.$consulta->paciente->cprimerapellido.' '.$consulta->paciente->csegundoapellido }}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" >
            </div>
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-city">
                    Fecha de Nacimiento
                </label>
                <input disabled name="" value="{{ date('d-m-Y', strtotime($consulta->paciente->dfechanacimiento))}}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none disabled focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" >
            </div>
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-zip">
                    Sexo
                </label>
                <input disabled name="" value="{{ $consulta->paciente->csexo}}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none disabled focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" >
            </div>
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-zip">
                    Email
                </label>
                <input disabled name="" value="{{ $consulta->paciente->cemail}}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none disabled focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" >
            </div>
        </div>

        @endif

        <div class="flex flex-wrap mb-2 -mx-3">

            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-city">
                    Edad
                </label>
                <input type="hidden" name="paciente_id" value="{{ old('paciente_id',$consulta->paciente_id ) }}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" type="text" >

                <input  name="eedad" value="{{ old('eedad',$consulta->eedad ) }}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Indique la edad del paciente">
            </div>
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-zip">
                    Presión Arterial
                </label>
                <input name="cpresion" value="{{ old('cpresion',$consulta->cpresion ) }}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Indique la presión arterial del paciente">
            </div>
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-city">
                    Talla Corporal
                </label>
                <input  name="dtalla" value="{{ old('dtalla',$consulta->dtalla ) }}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Indique la edad del paciente">
            </div>
        </div>
        <div class="flex flex-wrap mb-2 -mx-3">

            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-city">
                    Peso (Kg)
                </label>
                <input name="dpeso" value="{{ old('dpeso',$consulta->dpeso ) }}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Indique el peso del Paciente">
            </div>
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-zip">
                    Alergias
                </label>
                <input name="calergias" value="{{ old('calergias',$consulta->calergias ) }}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="indique la(s) alergia(s) del paciente">
            </div>
        </div>
        <div class="flex flex-wrap mb-2 -mx-3">
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-city">
                    Diagnostico
                </label>
                <textarea name="cdiagnostico" value="" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="indique el diagnostico del paciente">{{ old('cdiagnostico',$consulta->cdiagnostico ) }}</textarea>
            </div>
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-city">
                    Tratamiento
                </label>
                <textarea name="ctratamiento" value="" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Indique el tratamiento para el paciente">{{ old('ctratamiento',$consulta->ctratamiento ) }}</textarea>
            </div>
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-zip">
                    Observaciones adicionales
                </label>
                <textarea name="cobservacion" value="" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="Indique alguna observación adicional">{{ old('cobservacion',$consulta->cobservacion ) }}</textarea>
            </div>
            <input hidden  value="{{ old('user_id', auth()->user()->id ) }}" type="number" name="user_id" id="idusuario" >

        </div>



        <div class="flex justify-end mt-6 itemscenter gap-x-6">
            <button type="cancel" class="text-sm font-semibold leading-6 text-gray-900">{{ __($btnTextCancel) }}</button>
            <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ __($btnText) }}</button>
        </div>
