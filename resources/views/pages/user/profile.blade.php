@extends('template.template')

@section('title', 'Profile')

@section('content')
    <section class="flex justify-center items-center h-full">
        <div class="border border-cyan-500 rounded-xl shadow-lg p-5 lg:p-10 w-full lg:w-3/4 mx-2">
            <h1 class="font-bold text-center text-3xl mb-5">Profile</h1>
            <div class="lg:flex lg:gap-5">
                <div class="mb-5 basis-1/2">
                    <label class="block mb-1" for="name">Name :</label>
                    <input type="text" class="bg-gray-200 w-full block py-3 px-5 rounded outline-cyan-500 text-gray-500" value="{{ $data->name }}" disabled>
                </div>
                <div class="mb-5 basis-1/2">
                    <label class="block mb-1" for="email">Email :</label>
                    <input type="text" class="bg-gray-200 w-full block py-3 px-5 rounded outline-cyan-500 text-gray-500" value="{{ $data->email }}" disabled>
                </div>
            </div>
            <div class="lg:flex lg:gap-5">
                <div class="mb-5 basis-1/2">
                    <label class="block mb-1" for="name">Gender :</label>
                    <input type="text" class="bg-gray-200 w-full block py-3 px-5 rounded outline-cyan-500 text-gray-500" value="{{ $data->gender }}" disabled>
                </div>
                <div class="mb-5 basis-1/2">
                    <label class="block mb-1" for="email">Date of Birth :</label>
                    <input type="text" class="bg-gray-200 w-full block py-3 px-5 rounded outline-cyan-500 text-gray-500" value="{{ date("d-m-Y", strtotime($data->dob)) }}" disabled>
                </div>
            </div>
            <div class="mb-5 basis-1/2">
                <label class="block mb-1" for="name">Country :</label>
                <input type="text" class="bg-gray-200 w-full block py-3 px-5 rounded outline-cyan-500 text-gray-500" value="{{ $data->country->name }}" disabled>
            </div>
        </div>
    </section>
@endsection
