@extends('template.template')

@section('title', $dataCategory->name.' Category')

@section('content')
    <section class="pt-3 pb-5">
        <h1 class="text-4xl pt-10"><span class="text-cyan-500 font-bold">{{ $dataCategory->name }}</span> Category</h1>
        <div class="py-8 grid grid-cols-4 gap-5">
            @foreach($data as $product)
                <a href="/product/{{ $product->id }}" class="shadow-md rounded-lg bg-white border border-cyan-500">
                    <img src="{{ asset('storage/'.$product->photo) }}" class="h-64 w-full object-cover rounded-lg">
                    <h3 class="truncate text-xl pt-3 px-4 mb-1">{{ $product->name }}</h3>
                    <div class="mb-3 px-4"><span class="font-bold text-cyan-500 text-3xl">{{ $product->price }}</span> <span class="text-xs text-gray-500">IDR</span></div>
                </a>
            @endforeach
        </div>
        {{ $data->links() }}
    </section>
@endsection
