<div class="space-y-12">
    <div class="pb-12 border-b border-gray-900/10">
        <p class="mt-1 text-sm leading-6 text-gray-700">Visualizando la información de la consulta</p>

        <div class="flex flex-wrap mb-2 -mx-3 dark:bg-red-300">
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-city">
                    Id Consulta
                </label>
                <input disabled name="" value="{{ $consulta->id}}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" >
            </div>
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-city">
                    Nombre completo del paciente
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
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-zip">
                    Edad
                </label>
                <input disabled name="" value="{{ $consulta->eedad}}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none disabled focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" >
            </div>
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-zip">
                    Presión Arterial
                </label>
                <input disabled name="" value="{{ $consulta->cpresion}}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none disabled focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" >
            </div>
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-zip">
                    Peso del Paciente
                </label>
                <input disabled name="" value="{{ $consulta->dpeso}}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none disabled focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" >
            </div>
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-city">
                    Alergias del Paciente
                </label>
                <input disabled name="" value="{{ $consulta->calergias }}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" >
            </div>
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-zip">
                    Usuario
                </label>
                <input disabled name="" value="{{auth()->user()->name}}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none disabled focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" >
            </div>
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-zip">
                    Diagnostico del paciente
                </label>
                <textarea disabled name="" value="" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none disabled focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" >{{ $consulta->cdiagnostico}}</textarea>
            </div>
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-zip">
                    Tratamiento del paciente
                </label>
                <textarea disabled name="" value="" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none disabled focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" >{{ $consulta->ctratamiento}}</textarea>
            </div>
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-zip">
                    Observaciones adicionales
                </label>
                <textarea disabled name="" value="" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none disabled focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" >{{ $consulta->cobservacion}}</textarea>
            </div>
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-zip">
                    Fecha de creación
                </label>
                <input disabled name="" value="{{ $consulta->paciente->created_at}}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none disabled focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" >
            </div>
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-zip">
                    Fecha de Modificación
                </label>
                <input disabled name="" value="{{ $consulta->paciente->updated_at}}" class="block w-full px-4 py-3 leading-tight text-gray-700 border border-gray-200 rounded appearance-none disabled focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" >
            </div>
        </div>
    
        
    
        </div>
    </div>
</div>
