@csrf

<div class="space-y-12">
    <div class="pb-12 border-b border-gray-900/10">
        <p class="mt-1 text-sm leading-6 text-gray-700">Favor de capturar los datos requeridos para la consulta</p>

        <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">


            @if(request()->routeIs('consultas.create'))
            <div class="sm:col-span-2 sm:col-start-1">
                <label for="idPaciente" class="block text-sm font-medium leading-6 text-gray-900">Paciente</label>
                <div class="mt-2">
                    <select id="idpaciente_id" name="paciente_id" " list="pacientes" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <datalist id="pacientes">
                            <option disabled>Seleccionar Paciente</option>
                            @foreach($pacientes as $paciente =>$dato)
                            <option value="{{$dato['id']}}">{{$dato['cnombre']}} {{$dato['cprimerapellido']}} {{$dato['csegundoapllido']}}</option>
                            @endforeach
                        </datalist>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Fecha de Nacimiento</label>
                <div class="mt-2">
                    <input value="{{$dato->dfechanacimiento}}" readonly type="date"  autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 bg-zinc-200	">
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Sexo</label>
                <div class="mt-2">
                    <input value="{{$dato->csexo}}" readonly type="text"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 bg-zinc-200">
                </div>
            </div>

            @else
            <div class="sm:col-span-2 sm:col-start-1">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Nombre del Paciente</label>
                <div class="mt-2">
                    <input name="nombrepaciente" value="{{$consulta->Paciente->cnombre}} {{$consulta->Paciente->cprimerapellido}} {{$consulta->Paciente->csegundoapllido}}" readonly type="text"    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 bg-zinc-200	">
                </div>
                <input name="paciente_id" id="paciente_id" value="{{$consulta->Paciente->paciente_id}}" readonly type="hidden"   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 bg-zinc-200	">
            </div>
            <div class="sm:col-span-1">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Fecha de Nacimiento</label>
                <div class="mt-2">
                    <input value="{{$consulta->Paciente->dfechanacimiento}}" readonly type="date"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 bg-zinc-200	">
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Sexo</label>
                <div class="mt-2">
                    <input value="{{$consulta->Paciente->csexo}}" readonly type="text"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 bg-zinc-200">
                </div>
            </div>
            @endif

            <div class="sm:col-span-1 sm:col-start-1">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900 ">Edad</label>
                <div class="mt-2">
                    <input value="{{ old('eedad',$consulta->eedad ) }}" type="number" name="eedad"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-1">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Presión Arterial</label>
                <div class="mt-2">
                    <input id="calergias" name="cpresion" value="{{ old('calergias',$consulta->cpresion ) }}" type="text" name="fechanacimiento" id="region"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>


            <div class="sm:col-span-1">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Talla corporal</label>
                <div class="mt-2">
                    <input id="calergias" name="dtalla" value="{{ old('dtalla',$consulta->dtalla ) }}"  type="number" step="any"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Peso</label>
                <div class="mt-2">
                    <input id="calergias" name="dpeso" value="{{ old('dpeso',$consulta->dpeso ) }}" type="number" step="any"  autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-2">
                <label id="calergias" name="calergias" for="region" class="block text-sm font-medium leading-6 text-gray-900">Alergias</label>
                <div class="mt-2">
                    <input id="calergias" name="calergias" value="{{ old('calergias',$consulta->calergias ) }}" type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-5">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Diagnostico del pasiente</label>
                <div class="mt-2">
                    <textarea id="calergias" name="cdiagnostico" type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('calergias',$consulta->cdiagnostico ) }} </textarea>
                </div>
            </div>
            <div class="sm:col-span-5">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Tratamiento del pasiente</label>
                <div class="mt-2">
                    <textarea id="calergias" name="ctratamiento" type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('calergias',$consulta->ctratamiento ) }}</textarea>
                </div>
            </div>
            <div class="sm:col-span-5 ">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Observaciones</label>
                <div class="mt-2">
                    <textarea type="text" name="cobservacion" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('cobservacion',$consulta->cobservacion ) }}</textarea>
                </div>
            </div>
            <div class="sm:col-span-1 ">
                <div class="mt-2">
                    <input  hidden value="{{ old('idusuario', auth()->user()->id ) }}" type="number" name="idusuario" id="idusuario" ">
                </div>
            </div>
        </div>
    </div>


</div>

<div class="flex items-center justify-end mt-6 gap-x-6">
    <button type="cancel" class="text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
    <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Actualizar</button>
</div>
