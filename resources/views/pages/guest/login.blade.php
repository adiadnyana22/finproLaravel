@extends('template.template')

@section('title', 'Login')

@section('content')
    <section class="flex justify-center items-center h-full">
        <div class="border border-cyan-500 rounded-xl shadow-lg p-5 lg:p-10 w-full lg:w-1/2 mx-2">
            <h1 class="font-bold text-center text-3xl mb-5">Login</h1>
            <form action="{{ route('loginMethod') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label class="block mb-1" for="email">Email :</label>
                    <input type="text" placeholder="Enter your email" class="bg-gray-200 w-full block py-3 px-5 rounded outline-cyan-500" name="email" id="email" value="{{ \Illuminate\Support\Facades\Cookie::get('email_logged') ? \Illuminate\Support\Facades\Cookie::get('email_logged') : old('email') }}" required>
                    @error('email')<p class="text-red-400 mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-5">
                    <label class="block mb-1" for="password">Password :</label>
                    <input type="password" placeholder="Enter your password" class="bg-gray-200 w-full block py-3 px-5 rounded outline-cyan-500" name="password" id="password" required>
                    @error('password')<p class="text-red-400 mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-8 flex gap-2">
                    <input type="checkbox" class="w-4" id="remember" name="remember">
                    <label class="" for="remember">Remember Me</label>
                </div>
                <button type="submit" class="block w-full bg-cyan-500 rounded border border-cyan-500 text-white p-3 font-bold transition hover:bg-transparent hover:text-cyan-500">Login</button>
                <div class="text-center mt-3">Don't have an account? <a href="/register" class="text-cyan-600 hover:underline">Register</a></div>
            </form>
        </div>
    </section>
@endsection
