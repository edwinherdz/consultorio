<div>
    

    <div>
    

        <div>
            <section class="container px-4 mx-auto">
        
                {{-- @include('partials.buttonsindexestudios') --}}
        
                <div class="relative flex items-center mt-4 md:mt-0">
                    <span class="absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </span>
        
                    <input wire:model="search" placeholder="Buscar Usuario" type="search" class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
        
                </div>
        
                <div class="flex flex-col mt-6">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
        
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-500">
                                    <thead class="bg-gray-50 dark:bg-gray-800">
                                        <tr>
                                            {{-- <th scope="col" class=" cursor-pointer py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-100" wire:click="order('id')">
                                                <span>ID</span>
                                            </th> --}}
        
                                            <th scope="col" class="cursor-pointer px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-100 focus:outline-none" wire:click="order('cnombre')">
                                                Nombre
                                            </th>
        
                                            <th scope="col" class="cursor-pointer px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-100" wire:click="order('cdescripcion')">
                                                email
                                            </th>
                                            {{-- <th scope="col" class="cursor-pointer px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-100" wire:click="order('created_at')">
                                                Fecha de Creación
                                            </th> --}}
        
                                            {{-- <th scope="col" class="cursor-pointer px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-100" wire:click="order('lactivo')">
                                                Activo
                                            </th> --}}
                                            <th scope="col" class=" px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-100">
                                                Acción
                                            </th>
        
                                        </tr>
                                    </thead>
                                    @forelse($usuarios as $usuario)
        
                                    <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                        <tr>
    
                                            {{-- <td class="px-12 py-4 text-sm font-medium whitespace-nowrap dark:text-gray-200"> 
                                                <div >
                                                    {{$estudio->id }}
                                                </div>
                                            </td> --}}
                                            <td class="px-4 py-4 text-sm whitespace-nowrap dark:text-gray-200">
                                                <div>
                                                    {{$usuario->name }}
                                                </div>
                                            </td>
        
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <h4 class="text-gray-700 dark:text-gray-200">{{$usuario->email}} </h4>
                                                </div>
                                            </td>
                                            {{-- <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <h4 class="text-gray-700 dark:text-gray-200">{{ $estudio->created_at->format('d-m-Y') }}</h4>
                                                </div>
                                            </td> --}}
                                            {{-- <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div class="inline px-3 py-1 text-sm font-normal rounded-full text-emerald-500 gap-x-2 bg-{{$estudio->lactivo ? 'emerald' : 'red'}}-100/60 dark:bg-gray-800">
                                                    {{$estudio->lactivo ? 'Activo' : 'Inactivo' }}
                                                </div>
                                            </td> --}}
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div class="flex items-center gap-x-6">
                                                          
                                                            <ul class="transition-colors duration-200 text-sky-500 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none" onclick="window.location.href='{{route('usuarios.show',$usuario)}}'">
                                                                <button class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-black transition-colors duration-200 border border-gray-400 rounded rounded-lg shadow bg-white-100 shrink-0 sm:w-auto gap-x-2 hover:bg-gray-200 dark:hover:bg-gray-500 dark:bg-gray-600" >
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
        
                                                                    </svg>
                                                                    Visualizar
                                                                </button>
                                                            </ul>
                                                            <ul class="transition-colors duration-200 text-sky-500 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none" onclick="window.location.href='{{route('usuarios.edit',$usuario)}}'">
            
                                                               
                                                                <button class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-black transition-colors duration-200 border border-gray-400 rounded rounded-lg shadow bg-white-100 shrink-0 sm:w-auto gap-x-2 hover:bg-gray-200 dark:hover:bg-gray-500 dark:bg-gray-600" >
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
        
                                                                    </svg>
                                                                    Editar
                                                                </button>
        
                                                            </ul>
                                                        
                                                        
                                                            {{-- <ul class="transition-colors duration-200 text-sky-500 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none" onclick="window.open('{{route('consultas.pdf',$consulta)}}', '_blank');">
                                                                <button class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-black transition-colors duration-200 border border-gray-400 rounded rounded-lg shadow bg-white-100 shrink-0 sm:w-auto gap-x-2 hover:bg-gray-200 dark:hover:bg-gray-500 dark:bg-gray-600" >
        
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                                                                    </svg>
                                                                    Receta
                                                                </button>
                                                            </ul> --}}
                                                        
                                                    
                                                </div>
                                            </td>
                                
                                        </tr>
        
        
                                        </tr>
                                    </tbody>
        
                                    @empty
                                    <li>No hay Estudios Médicos para mostrar</li>
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
            {{-- {{ $estudio->links() }} --}}
        
        </div>
        
    
    
    
    </div>
    



</div>
