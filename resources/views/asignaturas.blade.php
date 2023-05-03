<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asignaturas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("------") }}
                </div>
            </div>


            <table>
            <thead>
                <tr>
                    <th> </th>
                    <th>Asignatura</th>
                    <th>Clave</th>
                    <th>Ingenieria</th>
                    <th>Semestre</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($asignaturs as $asigna)
                <tr>
                    <td> </td>
                    <td>{{ $asigna->nombre}}</td>
                    <td>{{ $asigna->clave}}</td>
                    <td>{{ $asigna->ing}}</td>
                    <td>{{ $asigna->semestre}}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody> 

        </table>

            

        </div>
    </div>
</x-app-layout>
