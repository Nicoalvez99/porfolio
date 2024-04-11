<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mensajes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if($mensajes != '')
                @foreach($mensajes as $mensaje)
                <div class="bg-white dark:bg-gray-800 my-4 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="flex">
                            <div class="mr-auto">
                                <h2>De: {{ $mensaje->nombre }}</h2>
                            </div>
                            <div class="ml-auto">
                                <form action="{{ route('mensaje.delete', $mensaje) }}" method="post">
                                    @csrf @method('delete')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">X</button>
                                </form>
                            </div>
                        </div>
                        <h4>Mail: {{ $mensaje->email }}</h4>
                        <h4>Mensaje:</h4>
                        <p>{{ $mensaje->mensaje }}</p>
                    </div>
                </div>
                @endforeach
            @else
            <div class="bg-white dark:bg-gray-800 my-4 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Aún no tenes mensajes.</h1>
                </div>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>