@extends('layouts.app')

@section('titulo')
    Registrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('img/registrar.jpg')}}" alt="Imagen Registro de Usuario">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input type="text" id="name" name="name" placeholder="Tu Nombre"
                        class="border p-3 w-full rouded-lg">
                @error('name')
                    <span class="text-xs text-red-500">{{$message}}</span>
                    
                @enderror
                    </div>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input type="text" id="username" name="username" placeholder="Tu Nombre de Usuario"
                        class="border p-3 w-full rouded-lg">
                </div>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input type="email" id="email" name="email" placeholder="Tu Email"
                        class="border p-3 w-full rouded-lg">
                </div>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input type="password" id="password" name="password" placeholder="Tu Password"
                        class="border p-3 w-full rouded-lg">
                </div>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Confirmar Password
                    </label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        placeholder="Repite tu Password" class="border p-3 w-full rouded-lg">
            </form>

            <input type="submit" value="Crear Cuenta"
                class="mt-5 bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </div>
    </div>
@endsection
