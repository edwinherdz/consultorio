<div>
    <section class="container px-4 mx-auto">

        @include('partials.buttonsindexpacientes')

        <div class="mt-6 md:flex md:items-center md:justify-between">
    
            <div class="relative flex items-center mt-4 md:mt-0">
                <span class="absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </span>
    
                <input wire:model="search" type="text" placeholder="Buscar" class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
        </div>
    
        <div class="flex flex-col mt-6">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
    
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-800">
                                <tr>
                                    <th scope="col" class=" cursor-pointer py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400" wire:click="order('id')">
                                        
                                        Número de Paciente
                                    
                                </th>
                                    <th scope="col" class="cursor-pointer py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 " wire:click="order('cnombre')">
                                        
                                            Nombre del paciente
                                        
                                    </th>
    
                                    <th scope="col" class="cursor-pointer px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400" wire:click="order('cprimerapellido')">
                                        Primer Apellido
                                    </th>
    
                                    <th scope="col" class="cursor-pointer px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400" wire:click="order('csegundoapellido')">
                                        Segundo Apellido
                                    </th>
    
                                    <th scope="col" class="cursor-pointer px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400"wire:click="order('consultas_count')"  >Total de consultas</th>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Registró</th>
                                    <th scope="col" class="cursor-pointer px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400" wire:click="order('created_at')">Creado hace</th>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Acción</th>
    
    
                                </tr>
                            </thead>
                            @forelse($pacientes as $paciente)
    
                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                <tr>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div>
                                            {{$paciente->id }}
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div>
                                            {{$paciente->cnombre }}
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="inline px-3 py-1 text-sm font-normal gap-x-2 dark:bg-gray-800">
                                            {{$paciente->cprimerapellido }}
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="inline px-3 py-1 text-sm font-normal gap-x-2 dark:bg-gray-800">
                                            {{$paciente->csegundoapellido }}
                                        </div>
                                    </td>
                                    <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                        <div class="inline px-3 py-1 text-sm font-normal rounded-full text-emerald-500 gap-x-2 bg-emerald-100/60 dark:bg-gray-800">
                                            {{ ($paciente->consultas_count) }}
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div>
                                            <h4 class="text-gray-700 dark:text-gray-200">{{$paciente->user->name}}</h4>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div>
                                            <h4 class="text-gray-700 dark:text-gray-200">{{ $paciente->created_at->locale('es_ES')->diffForHumans() }}</h4>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none" onclick="window.location.href='{{route('pacientes.show',$paciente)}}'">
                                                Ver
                                            </button>
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none" onclick="window.location.href='{{route('pacientes.edit',$paciente)}}'">
                                                Editar
                                            
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
    {{ $pacientes->links() }}
</div>
