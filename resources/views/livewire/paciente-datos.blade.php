<div>
    <div>   
        
    </div>

    <div class="sm:col-span-2 sm:col-start-1">
        
        <label for="idPaciente" class="block text-sm font-medium leading-6 text-gray-900">Paciente</label>
        <div class="mt-2">
            <select type="search" wire:model="search" id="paciente_id" name="paciente_id" " list=" pacientes" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                <datalist id="pacientes">
                    <option disabled>Seleccionar Paciente</option>
                    @foreach($pacientes as $paciente =>$dato)
                    <option value="{{$dato['id']}}">{{$dato['id']}} - {{$dato['cnombre']}} {{$dato['cprimerapellido']}} {{$dato['csegundoapellido']}}</option>
                    @endforeach
                </datalist>
            </select>
            @if ($datospacientes)
            <div class="sm:col-span-2">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Fecha de Nacimiento</label>
                <div class="mt-2">
                    <input value="{{ $datospacientes->dfechanacimiento}}" readonly type="date" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 bg-zinc-200	">
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Sexo</label>
                <div class="mt-2">
                    <input value="{{$datospacientes->csexo}}" readonly type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 bg-zinc-200">
                </div>
            </div>
            @endif

        </div>

        
        
    </div>




</div>


