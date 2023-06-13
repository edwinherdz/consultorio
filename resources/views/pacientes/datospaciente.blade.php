@csrf
<div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
        <p class="mt-1 text-sm leading-6 text-gray-700">Consultando la información del paciente</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">


            <div class="sm:col-span-2 sm:col-start-1">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Nombre(s) del $paciente</label>
                <div class="mt-2">
                    <input readonly id="" value="{{ old('cnombre',$paciente->cnombre ) }}" type="text" name="cnombre" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 bg-zinc-200	">
                </div>
            </div>
            <div class="sm:col-span-2 ">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Primer Apellido</label>
                <div class="mt-2">
                    <input readonly value="{{ old('cprimerapellido',$paciente->cprimerapellido ) }}" type="text" name="cprimerapellido" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-zinc-200	">
                </div>
            </div>
            <div class="sm:col-span-2 ">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Segundo Apellido</label>
                <div class="mt-2">
                    <input readonly value="{{ old('csegundoapellido',$paciente->csegundoapellido ) }}" type="text" name="csegundoapellido" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-zinc-200	">
                </div>
            </div>
            <div class="sm:col-span-2 ">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Fecha de Nacimiento</label>
                <div class="mt-2">
                    <input readonly value="{{ old('dfechanacimiento',$paciente->dfechanacimiento ) }}" type="date" name="dfechanacimiento" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-zinc-200	">
                </div>
            </div>
            <div class="mt-2">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Sexo</label>

                <select readonly value="{{ old('csexo',$paciente->csexo ) }}" id="csexo" name="csexo" autocomplete="country-name" list="$pacientes" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6  bg-zinc-200	">
                    <datalist id="$pacientes">
                        <option disabled>Seleccionar $paciente</option>
                        <option value="1">test</option>
                    </datalist>
                </select>
            </div>
<div class="sm:col-span-2 ">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                <div class="mt-2">
                    <input readonly value="{{ old('cemail',$paciente->cemail ) }}" type="email" name="cemail" id="cemail" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-zinc-200	">
                </div>
            </div>
<div class="sm:col-span-2 ">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900"  >Teléfono</label>
                <div class="mt-2">
                    <input readonly pattern="[0-9]{9}" value="{{ old('ctelefono',$paciente->ctelefono ) }}" type="number" name="ctelefono" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-zinc-200	">
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">usuario</label>
                <div class="mt-2">
                    <input readonly id="cusuario"  value="{{ old('idusuario',$paciente->idusuario ) }}" type="text" name="idusuario" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-zinc-200	">
                </div>
            </div>
            <div class="sm:col-span-5">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Observaciones</label>
                <div class="mt-2">
                    <textarea readonly type="text" name="cobservacion" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-zinc-200	">{{ old('cdescripcion',$paciente->cdescripcion ) }}</textarea>
                </div>
            </div>
        </div>
    </div>


</div>

<div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="cancel" class="text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Crear</button>
</div>
