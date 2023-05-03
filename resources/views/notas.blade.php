<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("hola") }}
                </div>
            </div>

            <table>
            <thead>
                <tr>
                    <th>Resumen</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notes as $note)
                <tr>
                    <td> </td>
                    <td>{{ $note->resumen}}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody> 

        </table>


        </div>
    </div>
</x-app-layout>
