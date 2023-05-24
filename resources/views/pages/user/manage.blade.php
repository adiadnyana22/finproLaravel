@extends('template.template')

@section('title', 'Manage Product')

@section('content')
    <section class="pt-3 pb-5">
        <h1 class="text-4xl pt-10">Manage <span class="text-cyan-500 font-bold">Product</span></h1>
        <div class="flex mt-10 mb-3 justify-between items-center">
            <form action="{{ route('manageProduct') }}" method="GET" class="w-1/2">
                <div class="bg-gray-200 flex items-center gap-3 p-3 rounded-xl">
                    <input type="text" placeholder="Search by product name" class="grow px-5 py-3 bg-transparent outline-none" name="search" value="{{ ($searchData ?? '') }}">
                    <button type="submit" class="bg-cyan-500 py-3 px-5 text-white rounded-xl flex items-center gap-2"><i class='bx bx-search'></i><span>Search</span></button>
                </div>
            </form>
            <a href="/manage/add" class="bg-cyan-500 text-white text-xl px-5 py-3 rounded-xl"><i class='bx bx-plus' ></i> Add Product</a>
        </div>
        @if(session('success'))
            <div class="bg-cyan-200 px-3 py-5 text-lg rounded-lg text-center" id="successMessage">
                {{ session('success') }}
            </div>

            <script>
                const msg = document.getElementById('successMessage');

                setTimeout(() => {
                    msg.style.display = 'none';
                }, 3000)
            </script>
        @endif
        <div class="mt-8 grid grid-cols-2 gap-5 mb-5">
            @foreach($data as $product)
                <div class="p-5 rounded-xl border border-cyan-500 flex gap-5">
                    <img src="{{ asset('storage/'.$product->photo) }}" class="w-1/4 h-40 rounded object-cover">
                    <div class="flex flex-col justify-between w-full">
                        <div>
                            <h2 class="font-bold text-xl">{{ $product->name }}</h2>
                            <h3 class="text-gray-500 my-2">Category : <span class="font-bold">{{ $product->category->name }}</span></h3>
                        </div>
                        <div class="flex gap-3">
                            <a href="/manage/edit/{{ $product->id }}" class="grow text-center bg-cyan-500 border border-cyan-500 rounded text-white py-2 px-3 font-bold flex items-center gap-2"><i class='bx bx-edit'></i> Edit</a>
                            <form action="/manage/delete-method/{{ $product->id }}" method="POST" class="grow">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="block w-full text-center bg-white border border-cyan-500 rounded text-cyan-500 py-2 px-3 font-bold flex items-center gap-2"><i class='bx bx-trash'></i> Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $data->links() }}
    </section>
@endsection
