<div class="space-y-12">
    <div class="pb-12 border-b border-gray-900/10">
        <p class="mt-1 text-sm leading-6 text-gray-700">Visualizando la información de la consulta</p>

        <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">


            <div class="sm:col-span-2 sm:col-start-1">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Nombre(s) del Paciente</label>
                <div class="mt-2">
                    <input readonly id="" value="{{$consulta->Paciente->cnombre}}" type="text" name="cnombre" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 bg-zinc-200	">
                </div>
            </div>
            <div class="sm:col-span-2 ">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Primer Apellido</label>
                <div class="mt-2">
                    <input readonly value="{{$consulta->Paciente->cprimerapellido}}" type="text" name="cprimerapellido" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-zinc-200	">
                </div>
            </div>
            <div class="sm:col-span-2 ">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Segundo Apellido</label>
                <div class="mt-2">
                    <input readonly value="{{$consulta->Paciente->csegundoapellido}}" type="text" name="csegundoapellido" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-zinc-200	">
                </div>
            </div>
            <div class="sm:col-span-2 ">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Fecha de Nacimiento</label>
                <div class="mt-2">
                    <input readonly value="{{$consulta->Paciente->dfechanacimiento}}" type="date" name="dfechanacimiento" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-zinc-200	">
                </div>
            </div>
            <div class="sm:col-span-2 ">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Sexo</label>
                <div class="mt-2">
                    <input readonly value="{{$consulta->paciente->csexo}}" type="email" name="csexo" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-zinc-200	">
                </div>
            </div>
            <div class="sm:col-span-2 ">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Edad</label>
                <div class="mt-2">
                    <input readonly value="{{$consulta->eedad}}" type="email" name="cemail" id="cemail" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-zinc-200	">
                </div>
            </div>
            <div class="sm:col-span-2 ">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Peso del Paciente</label>
                <div class="mt-2">
                    <input readonly pattern="[0-9]{9}" value="{{$consulta->dpeso}}" type="number" name="ctelefono" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-zinc-200	">
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Alergias del Paciente</label>
                <div class="mt-2">
                    <input readonly id="cusuario" value="{{$consulta->calergias}}" type="text" name="idusuario" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-zinc-200	">
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Registro</label>
                <div class="mt-2">
                    <input readonly id="cusuario" value="{{auth()->user()->name}}" type="text" name="idusuario" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-zinc-200	">
                </div>
            </div>
            <div class="sm:col-span-5">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Diagnostico</label>
                <div class="mt-2">
                    <textarea readonly type="text" name="cdiagnostico" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-zinc-200	">{{ old('cdescripcion',$consulta->cdiagnostico ) }}</textarea>
                </div>
            </div>
            <div class="sm:col-span-5">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Tratamiento</label>
                <div class="mt-2">
                    <textarea readonly type="text" name="ctratamiento" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-zinc-200	">{{ old('cdescripcion',$consulta->ctratamiento ) }}</textarea>
                </div>
            </div>
            <div class="sm:col-span-5">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Observaciones</label>
                <div class="mt-2">
                    <textarea readonly type="text" name="cobservacion" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-zinc-200	">{{ old('cdescripcion',$consulta->cobservacion ) }}</textarea>
                </div>
            </div>
            <div class="sm:col-span-2 sm:col-start-1">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Fecha de creación</label>
                <div class="mt-2">
                    <input readonly id="cusuario" value="{{$consulta->created_at}}" type="text" name="idusuario" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-zinc-200	">
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Fecha de Modificación</label>
                <div class="mt-2">
                    <input readonly id="cusuario" value="{{$consulta->updated_at}}" type="text" name="idusuario" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-zinc-200	">
                </div>
            </div>
        </div>
    </div>
</div>
