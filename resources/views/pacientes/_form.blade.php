@csrf
<div class="space-y-12">
    <div class="pb-12 border-b border-gray-900/10">
        <p class="mt-1 text-sm leading-6 text-gray-700">Favor de capturar los datos requeridos del paciente</p>

        <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">


            <div class="sm:col-span-2 sm:col-start-1">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Nombre(s) del Paciente</label>
                <div class="mt-2">
                    <input  id="" value="{{ old('cnombre',$paciente->cnombre ) }}" type="text" name="cnombre"  autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6	">
                </div>
            </div>
            <div class="sm:col-span-2 ">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Primer Apellido</label>
                <div class="mt-2">
                    <input value="{{ old('cprimerapellido',$paciente->cprimerapellido ) }}" type="text" name="cprimerapellido" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-2 ">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Segundo Apellido</label>
                <div class="mt-2">
                    <input value="{{ old('csegundoapellido',$paciente->csegundoapellido ) }}" type="text" name="csegundoapellido" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-2 ">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Fecha de Nacimiento</label>
                <div class="mt-2">
                    <input value="{{ old('dfechanacimiento',$paciente->dfechanacimiento ) }}" type="date" name="dfechanacimiento" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="mt-2">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Sexo</label>

                <select value="{{ old('csexo',$paciente->csexo ) }}" id="csexo" name="csexo" autocomplete="country-name" list="pacientes" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                    <datalist id="pacientes">
                        <option selected disabled>Seleccionar Sexo</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>

                    </datalist>
                </select>
            </div>
<div class="sm:col-span-2 ">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                <div class="mt-2">
                    <input value="{{ old('email',$paciente->cemail ) }}" type="email" name="cemail" id="cemail" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
<div class="sm:col-span-2 ">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900"  >Teléfono</label>
                <div class="mt-2">
                    <input pattern="[0-9]{9}" value="{{ old('ctelefono',$paciente->ctelefono ) }}" type="number" name="ctelefono" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-2">
                <div class="mt-2">
                    <input  hidden value="{{ old('idusuario', auth()->user()->id ) }}" type="number" name="idusuario" id="idusuario" ">
                </div>
            </div>
            <div class="sm:col-span-5">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Observaciones</label>
                <div class="mt-2">
                    <textarea type="text" name="cobservacion" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('cdescripcion',$paciente->cdescripcion ) }}</textarea>
                </div>
            </div>
        </div>
    </div>


</div>

<div class="flex items-center justify-end mt-6 gap-x-6">
    <button type="cancel" class="text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
    <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Actualizar</button>
</div>
