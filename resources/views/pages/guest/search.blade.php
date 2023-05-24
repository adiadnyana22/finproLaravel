@extends('template.template')

@section('title', 'Search for '.($searchData ?? ''))

@section('content')
    <section class="pt-3">
        <form action="{{ route('searchProduct') }}" method="GET">
            <div class="bg-gray-200 flex items-center gap-3 mt-10 mb-3 p-3 rounded-xl">
                <input type="text" placeholder="Search by product name" class="grow px-5 py-3 bg-transparent outline-none" value="{{ ($searchData ?? '') }}" name="search">
                <button type="submit" class="bg-cyan-500 py-3 px-5 text-white rounded-xl flex items-center gap-2"><i class='bx bx-search'></i><span>Search</span></button>
            </div>
        </form>
        <div class="mt-3">
            <h1 class="text-4xl pt-10"><span class="text-cyan-500 font-bold">Search</span> Result</h1>
            <div class="py-8 grid grid-cols-4 gap-5">
                @foreach($data as $product)
                    <a href="/product/{{ $product->id }}" class="shadow-md rounded-lg bg-white border border-cyan-500">
                        <img src="{{ asset('storage/'.$product->photo) }}" class="h-64 w-full object-cover rounded-lg">
                        <h3 class="truncate text-xl pt-3 px-4 mb-1">{{ $product->name }}</h3>
                        <div class="mb-3 px-4"><span class="font-bold text-cyan-500 text-3xl">{{ $product->price }}</span> <span class="text-xs text-gray-500">IDR</span></div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
