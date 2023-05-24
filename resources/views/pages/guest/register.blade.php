@extends('template.template')

@section('title', 'Register')

@section('content')
    <section class="flex justify-center items-center h-full">
        <div class="border border-cyan-500 rounded-xl shadow-lg p-5 lg:p-10 w-full lg:w-3/4 mx-2">
            <h1 class="font-bold text-center text-3xl mb-5">Register</h1>
            <form action="{{ route('registerMethod') }}" method="POST">
                @csrf
                <div class="lg:flex lg:gap-5">
                    <div class="mb-5 basis-1/2">
                        <label class="block mb-1" for="name">Name :</label>
                        <input type="text" placeholder="Enter your name" class="bg-gray-200 w-full block py-3 px-5 rounded outline-cyan-500" name="name" id="name" required minlength="5" value="{{ old('name') }}">
                        @error('name')<p class="text-red-400 mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div class="mb-5 basis-1/2">
                        <label class="block mb-1" for="email">Email :</label>
                        <input type="text" placeholder="Enter your email" class="bg-gray-200 w-full block py-3 px-5 rounded outline-cyan-500" name="email" id="email" required value="{{ old('email') }}">
                        @error('email')<p class="text-red-400 mt-1">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="lg:flex lg:gap-5">
                    <div class="mb-5 basis-1/2">
                        <label class="block mb-1" for="password">Password :</label>
                        <input type="password" placeholder="Enter your password" class="bg-gray-200 w-full block py-3 px-5 rounded outline-cyan-500" name="password" id="password" required minlength="8">
                        @error('password')<p class="text-red-400 mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div class="mb-5 basis-1/2">
                        <label class="block mb-1" for="confirm-pass">Confirm Password :</label>
                        <input type="password" placeholder="Re-type your password" class="bg-gray-200 w-full block py-3 px-5 rounded outline-cyan-500" name="confirm-pass" id="confirm-pass" required minlength="8">
                        @error('confirm-pass')<p class="text-red-400 mt-1">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="lg:flex lg:gap-5">
                    <div class="mb-5 basis-1/2">
                        <label class="block mb-1">Gender :</label>
                        <div class="flex">
                            <div class="space-x-3 flex text-sm">
                                <label>
                                    <input class="sr-only peer" name="gender" type="radio" value="male" {{ old('gender') == "female" ? "" : "checked" }} />
                                    <div class="py-3 px-5 bg-gray-200 rounded-lg flex items-center justify-center text-black peer-checked:font-semibold peer-checked:bg-cyan-500 peer-checked:text-white">
                                        Male
                                    </div>
                                </label>
                                <label>
                                    <input class="sr-only peer" name="gender" type="radio" value="female" {{ old('gender') == "female" ? "checked" : "" }}/>
                                    <div class="py-3 px-5 bg-gray-200 rounded-lg flex items-center justify-center text-black peer-checked:font-semibold peer-checked:bg-cyan-500 peer-checked:text-white">
                                        Female
                                    </div>
                                </label>
                            </div>
                        </div>
                        @error('gender')<p class="text-red-400 mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div class="mb-5 basis-1/2">
                        <label class="block mb-1" for="dob">Date of Birth :</label>
                        <input type="date" class="bg-gray-200 w-full block py-3 px-5 rounded outline-cyan-500" name="dob" id="dob" required min="1900-01-02" max="{{ date('Y-m-d', strtotime("yesterday")) }}" value="{{ old('dob') ? old('dob', date('Y-m-d')) : "" }}">
                        @error('dob')<p class="text-red-400 mt-1">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="mb-8">
                    <label class="block mb-1" for="country">Country :</label>
                    <select required name="country" id="country" class="bg-gray-200 block w-full py-3 px-5 rounded outline-cyan-500">
                        <option value="" disabled selected hidden>Choose a country</option>
                        @foreach($country as $c)
                            <option value="{{ $c->id }}" {{ old('country') == $c->id ? "selected" : "" }}>{{ $c->name }}</option>
                        @endforeach
                    </select>
                    @error('country')<p class="text-red-400 mt-1">{{ $message }}</p>@enderror
                </div>
                <button type="submit" class="block w-full bg-cyan-500 rounded border border-cyan-500 text-white p-3 font-bold transition hover:bg-transparent hover:text-cyan-500">Register</button>
                <div class="text-center mt-3">Have an account? <a href="/login" class="text-cyan-600 hover:underline">Login</a></div>
            </form>
        </div>
    </section>
@endsection
