<section class="container px-4 mx-auto">

@include('partials.buttonsindexconsultas')

    <div class="flex flex-col mt-6">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">

                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <button class="flex items-center gap-x-3 focus:outline-none">
                                        <span>Número de consulta</span>
                                    </button>
                                </th>

                                <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Nombre del paciente
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Atendio
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Creado hace</th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Acción</th>

                               
                            </tr>
                        </thead>
                        @forelse($consultas as $consulta)
                    
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            <tr>
                                <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                    <div class="inline px-3 py-1 text-sm font-normal rounded-full text-emerald-500 gap-x-2 bg-emerald-100/60 dark:bg-gray-800">
                                        {{$consulta->id }}
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div>
                                        {{$consulta->Paciente->cnombre }}  {{$consulta->Paciente->cprimerapellido }} {{$consulta->Paciente->csegundoapellido }}
                                    </div>
                                </td>
                                
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div>
                                        <h4 class="text-gray-700 dark:text-gray-200">{{$consulta->User->name}} </h4>
                                    </div>
                                </td>
                                 <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div>
                                        <h4 class="text-gray-700 dark:text-gray-200">{{ $consulta->created_at->diffForHumans() }}</h4>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center gap-x-6">
                                        <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none" onclick="window.location.href='{{route('consultas.show',$consulta)}}'">
                                            Ver
                                        </button>
                                        <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none" onclick="window.location.href='{{route('consultas.edit',$consulta)}}'">
                                            Editar
                                        </button>
                                        <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none" onclick="window.open('{{route('consultas.pdf',$consulta)}}', '_blank');">
                                            Imprimir
                                        </button>

                                    </div>
                                </td>

                            </tr>


                            </tr>
                        </tbody>

                        @empty
                        <li>No hay Consultas para mostrar</li>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 sm:flex sm:items-center sm:justify-between ">

    </div>
</section>
</table>
