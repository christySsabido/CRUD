<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div>
     <h1>hola</h1>

    @foreach ($users as $user)
        <p>{{ $user->id }}</p>
    @endforeach

    <br>
 </div>
</x-app-layout>
