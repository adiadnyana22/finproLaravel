@extends('template.template')

@section('title', $data->name)

@section('content')
    <section class="flex justify-center items-center h-full">
        <div class="border border-cyan-500 rounded-xl shadow-lg p-3 lg:p-8 w-full lg:w-3/4 mx-2">
            <div class="grid grid-cols-2 gap-10">
                <div class="flex items-center">
                    <img src="{{ asset('storage/'.$data->photo) }}" class="h-96 w-full object-cover rounded-lg">
                </div>
                <div class="flex items-center">
                    <div>
                        <h1 class="font-bold text-2xl">{{ $data->name }}</h1>
                        <p class="text-gray-400 text-sm mt-2">
                            {{ $data->detail }}
                        </p>
                        <div class="text-gray-400 my-5"><span class="text-cyan-500 text-5xl font-bold">{{ $data->price }}</span> IDR</div>
                        @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->role == "user")
                        <form action="{{ route('addToCart') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product" value="{{ $data->id }}">
                            <div class="flex justify-center items-center pt-2 gap-2">
                                <button type="button" class="py-3 px-5 bg-white text-cyan-500 border border-cyan-500 rounded" id="minus">-</button>
                                <input type="number" min="1" max="100" value="1" class="bg-gray-200 border border-gray-200 grow text-center p-3 rounded outline-cyan-500" name="quantity" id="quantity" required>
                                <button type="button" class="py-3 px-5 bg-white text-cyan-500 border border-cyan-500 rounded" id="plus">+</button>
                            </div>
                            <button type="submit" class="mt-5 bg-cyan-500 block w-full text-white p-3 rounded border border-cyan-500 transition hover:bg-transparent hover:text-cyan-500">Add to Cart</button>
                        </form>
                        @endif

                        <script>
                            const quantity = document.getElementById('quantity');

                            quantity.addEventListener('change', () => {
                                if(parseInt(quantity.value) > 100) quantity.value = 100;
                                else if(parseInt(quantity.value) < 1) quantity.value = 1;
                            })

                            document.getElementById('plus').addEventListener('click', () => {
                                if(parseInt(quantity.value) < 100) quantity.value = parseInt(quantity.value) + 1;
                            })

                            document.getElementById('minus').addEventListener('click', () => {
                                if(parseInt(quantity.value) > 1) quantity.value = parseInt(quantity.value) - 1;
                            })
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
