
  <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
    <thead class="bg-gray-50 dark:bg-gray-800">
        <tr>
            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                
                Folio consulta
            
        </th>
            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                
                    Folio paciente
                
            </th>

            <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                Nombre Paciente
            </th>

            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
               Fecha de creación
            </th>
        </tr>
    </thead>

    @forelse($consultas as $consulta)

    <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
        <tr>
            <td class="px-4 py-4 text-sm whitespace-nowrap">
                <div>
                    {{$consulta->id}}
                </div>
            </td>
            <td class="px-4 py-4 text-sm whitespace-nowrap">
                <div>
                    {{$consulta->Paciente->id}}
                </div>
            </td>
            <td class="px-4 py-4 text-sm whitespace-nowrap">
                <div class="inline px-3 py-1 text-sm font-normal gap-x-2 dark:bg-gray-800">
                    {{$consulta->Paciente->cnombre}} {{$consulta->Paciente->cprimerapellido}} {{$consulta->Paciente->csegundoapellido}}
                </div>
            </td>
            <td class="px-4 py-4 text-sm whitespace-nowrap">
                <div class="inline px-3 py-1 text-sm font-normal gap-x-2 dark:bg-gray-800">
                    {{$consulta->created_at}}
                </div>
            </td>
        </tr>


        </tr>
    </tbody>

    @empty
    <li>No hay Consultas para mostrar</li>
    @endforelse
</table>