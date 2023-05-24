@extends('template.template')

@section('title', 'Cart')

@section('content')
    <section class="pt-3 pb-24">
        <h1 class="text-4xl pt-10">Cart <span class="text-cyan-500 font-bold">Product</span></h1>
        @if(session('success'))
            <div class="bg-cyan-200 px-3 py-5 text-lg rounded-lg text-center mt-3" id="successMessage">
                {{ session('success') }}
            </div>

            <script>
                const msg = document.getElementById('successMessage');

                setTimeout(() => {
                    msg.style.display = 'none';
                }, 3000)
            </script>
        @endif
        <div class="mt-8 grid grid-cols-2 gap-5">
            @foreach($products as $product)
                <div class="p-5 rounded-xl border border-cyan-500 flex gap-5">
                    <img src="{{ asset('storage/'.$product->product->photo) }}" class="w-1/4 rounded object-cover">
                    <div class="flex flex-col justify-between w-full">
                        <div>
                            <h2 class="font-bold text-xl">{{ $product->product->name }}</h2>
                            <div class="flex justify-between">
                                <span class="text-gray-500 mt-2">Total Price : <span class="font-bold">IDR {{ $product->product->price }}</span></span>
                                <span class="text-gray-500 mt-2">Quantity : {{ $product->quantity }}</span>
                            </div>
                        </div>
                        <div class="flex gap-3 mt-2">
                            <form action="{{ route('deleteCart', $product->id) }}" method="POST" class="grow">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="block w-full text-center bg-white border border-cyan-500 rounded text-cyan-500 py-2 px-3 font-bold flex items-center gap-2"><i class='bx bx-trash'></i> Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="fixed bottom-0 left-0 right-0 bg-cyan-100 mx-5 mb-3 shadow-lg rounded-lg flex justify-between items-center py-3 px-5">
            <div>Total Price : <span class="font-bold">IDR {{ $total }}</span></div>
            @if(count($products) > 0)
                <form action="{{ route('purchase') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $total }}" name="total">
                    <button type="submit" class="bg-cyan-500 text-white rounded px-5 py-2">Purchase</button>
                </form>
            @endif
        </div>
    </section>
@endsection
