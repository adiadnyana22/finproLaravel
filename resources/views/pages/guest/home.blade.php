@extends('template.template')

@section('title', 'Barbatos Shop')

@section('content')
    <section class="pt-3 pb-5">
        <h1 class="text-4xl text-center pt-10">Welcome to <span class="text-cyan-500 font-bold">Barbatos Shop</span></h1>
        <form action="{{ route('searchProduct') }}" method="GET">
            <div class="bg-gray-200 flex items-center gap-3 mt-10 mb-3 p-3 rounded-xl">
                <input type="text" placeholder="Search by product name" class="grow px-5 py-3 bg-transparent outline-none" name="search">
                <button type="submit" class="bg-cyan-500 py-3 px-5 text-white rounded-xl flex items-center gap-2"><i class='bx bx-search'></i><span>Search</span></button>
            </div>
        </form>
        <div class="mt-8">
            @foreach($data as $category)
            <div class="p-5 mb-8 rounded-xl border border-cyan-500 bg-cyan-50">
                <h2 class="text-center text-3xl mb-1 font-bold">{{ $category->name }}</h2>
                <a href="/category/{{ $category->id }}" class="block text-center text-cyan-600 text-sm hover:underline">View all product with this category</a>
                <div class="mt-5 flex overflow-x-auto gap-5 pb-5" id="scroll-home">
                    @foreach($category->products as $product)
                        <a href="/product/{{ $product->id }}" class="shadow-md rounded-lg bg-white w-80">
                            <img src="{{ asset('storage/'.$product->photo) }}" class="h-64 w-full object-cover rounded-lg">
                            <h3 class="truncate text-xl pt-3 px-4 mb-1">{{ $product->name }}</h3>
                            <div class="mb-3 px-4"><span class="font-bold text-cyan-500 text-3xl">{{ $product->price }}</span> <span class="text-xs text-gray-500">IDR</span></div>
                        </a>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
