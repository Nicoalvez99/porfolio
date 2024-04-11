<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mis Proyectos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('nuevo.proyecto') }}" method="post" enctype="multipart/form-data">
                @csrf
                <button type="submit" name="btnNuevoStack" class="bg-blue-500 hover:bg-blue-700 text-white w-full lg:w-1/4 my-5 font-bold py-2 px-4 rounded" style="background-color: #4299E1; margin: 10px 0px;">Nuevo</button>
                @include('partials.session-status')
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="row">
                            <div class="block sm:flex" data-aos="fade-right">

                                <div class="w-full lg:w-1/2" data-aos="fade-right">
                                    <div class="my-3 file">
                                        <div class="container-file">
                                            <div class="header-file">
                                                <svg class="svg1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M7 10V9C7 6.23858 9.23858 4 12 4C14.7614 4 17 6.23858 17 9V10C19.2091 10 21 11.7909 21 14C21 15.4806 20.1956 16.8084 19 17.5M7 10C4.79086 10 3 11.7909 3 14C3 15.4806 3.8044 16.8084 5 17.5M7 10C7.43285 10 7.84965 10.0688 8.24006 10.1959M12 12V21M12 12L15 15M12 12L9 15" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                                <svg class="svg2 hidden" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path class="svg" d="M5.5 12.5L9 16L19 6" stroke="#00C853" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <label for="file" class="footer">
                                                <svg fill="#000000" class="dark:text-white" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M15.331 6H8.5v20h15V14.154h-8.169z"></path>
                                                        <path d="M18.153 6h-.009v5.342H23.5v-.002z"></path>
                                                    </g>
                                                </svg>
                                                <p id="file-status" class="dark:text-white">Sin archivos subidos</p>
                                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M5.16565 10.1534C5.07629 8.99181 5.99473 8 7.15975 8H16.8402C18.0053 8 18.9237 8.9918 18.8344 10.1534L18.142 19.1534C18.0619 20.1954 17.193 21 16.1479 21H7.85206C6.80699 21 5.93811 20.1954 5.85795 19.1534L5.16565 10.1534Z" stroke="#000000" stroke-width="2"></path>
                                                        <path d="M19.5 5H4.5" stroke="#000000" stroke-width="2" stroke-linecap="round"></path>
                                                        <path d="M10 3C10 2.44772 10.4477 2 11 2H13C13.5523 2 14 2.44772 14 3V5H10V3Z" stroke="#000000" stroke-width="2"></path>
                                                    </g>
                                                </svg>
                                            </label>
                                            <input id="file" name="imagen" type="file">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="w-full block md:flex">
                                        <div class="w-full md:w-1/2 px-2">
                                            <div class="my-3">
                                                <label class="block dark:text-gray-300 text-sm font-bold mb-2" for="username">
                                                    Nombre
                                                </label>
                                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nombre" id="username" type="text" required>
                                            </div>
                                        </div>
                                        <div class="w-full md:w-1/2 px-2">
                                            <div class="my-3">
                                                <label class="block dark:text-gray-300 text-sm font-bold mb-2" for="username">
                                                    Resumen
                                                </label>
                                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="resumen" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full block md:flex">
                                        <div class="w-full md:w-1/2 px-2">
                                            <div class="my-3">
                                                <label class="block dark:text-gray-300 text-sm font-bold mb-2" for="username">
                                                    Link
                                                </label>
                                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="link" id="username" type="text">
                                            </div>
                                        </div>
                                        <div class="w-full md:w-1/2 px-2">
                                            <div class="my-3">
                                                <label class="block dark:text-gray-300 text-sm font-bold mb-2" for="username">
                                                    Status
                                                </label>
                                                <select name="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="">
                                                    <option value="Seleccionar" selected disabled>Seleccionar</option>
                                                    <option value="Desarrollo">Desarrollo</option>
                                                    <option value="Producción">Producción</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="w-full px-2">
                                <div class="my-3">
                                    <label class="block dark:text-gray-300 text-sm font-bold mb-2" for="username">
                                        Descripcion corta
                                    </label>
                                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="descripcion" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg my-4">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex">
                        @foreach($proyectos as $proyecto)
                        <form action="{{ route('proyecto.delete', $proyecto->id) }}" method="post">
                            @csrf @method('delete')
                            <button type="submit" class="bg-blue-500 text-white w-full my-1 font-bold py-2 px-4 rounded flex" style="background-color: #4299E1; margin: 10px 0px;">{{ $proyecto->nombre }}</button>
                        </form>
                        @endforeach
                    </div>          
                </div>
            </div>
        </div>
    </div>
</x-app-layout>