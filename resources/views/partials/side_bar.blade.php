<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700 " aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800 ">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('home') }}" class="{{ SetActive('home') }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-white-100 dark:hover:bg-teal-500  hover:bg-cyan-400">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentcolor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('consultas.index') }}" class="{{ SetActive('consultas.*') }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-cyan-400 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                    </svg>

                    <span class="ml-3">Consultas</span>
                </a>
            </li>
            <li>
                <a href="{{route('pacientes.index')}}" class=" {{ SetActive('pacientes.*') }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-cyan-400 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>

                    <span class="flex-1 ml-3 whitespace-nowrap">Pacientes</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<div class="p-4 mt-12 sm:ml-64 ">

    @yield('content')

</div>


<a href="{{route('pacientes.index')}}" class=" {{ SetActive('pacientes.*') }}">
            
                    <span class="flex-1 ml-3 whitespace-nowrap">Pacientes</span>
                </a>