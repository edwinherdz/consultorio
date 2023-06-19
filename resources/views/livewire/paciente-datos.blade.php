<div>
    <div>

    </div>

    <div class="sm:col-span-2 sm:col-start-1">

        <label for="Pacientes">Buscar paciente</label>
        <input type="search" wire:model="search" list="pacienteslist" id="Pacientes" name="paciente_id" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none disabled focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="Ingrese nombre del paciente">

        <datalist id="pacienteslist">
            <option disabled>Seleccionar Paciente</option>
            @foreach($pacientes as $paciente =>$dato)
            <option value="{{$dato['id']}}">{{$dato['cnombre']}} {{$dato['cnombre']}} {{$dato['cprimerapellido']}} {{$dato['csegundoapellido']}}</option>
            @endforeach
        </datalist>


        @if ($datospacientes)

        <div class="flex flex-wrap mb-2 -mx-3">
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-city">
                    Nombre
                </label>
                <input disabled name="" value="{{ $datospacientes->cnombre .' '.$datospacientes->cprimerapellido.' '.$datospacientes->csegundoapellido }}" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Indique la talla corporal del paciente">
            </div>
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-city">
                    Fecha de Nacimiento
                </label>
                <input disabled name="" value="{{ date('d-m-Y', strtotime($datospacientes->dfechanacimiento))}}" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none disabled focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Indique el peso del Paciente">
            </div>
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-zip">
                    Sexo
                </label>
                <input disabled name="" value="{{ $datospacientes->csexo}}" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none disabled focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="indique la(s) alergia(s) del paciente">
            </div>
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-zip">
                    Email
                </label>
                <input disabled name="" value="{{ $datospacientes->cemail}}" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none disabled focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="indique la(s) alergia(s) del paciente">
            </div>
        </div>

        @endif

    </div>



</div>




</div>
