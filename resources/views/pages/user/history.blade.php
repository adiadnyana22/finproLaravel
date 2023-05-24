@extends('template.template')

@section('title', 'History')

@section('content')
    <section class="pt-3 pb-24">
        <h1 class="text-4xl pt-10">Transaction <span class="text-cyan-500 font-bold">History</span></h1>
        @foreach($history as $h)
        <div class="mt-5 p-5 rounded-xl border border-cyan-500">
            <h2 class="text-xl mb-3">Transaction Date : {{ $h->order_date }}</h2>
            <table class="border-collapse border border-cyan-500 table-auto w-full">
                <thead>
                    <tr class="bg-cyan-100">
                        <th class="border border-cyan-500 p-3">Name</th>
                        <th class="border border-cyan-500 p-3">Quantity</th>
                        <th class="border border-cyan-500 p-3">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $totalQuantity = 0;
                    @endphp
                    @foreach($h->order as $order)
                    <tr>
                        <td class="border border-cyan-500 p-3">{{ $order->product->name }}</td>
                        <td class="border border-cyan-500 p-3">{{ $order->quantity }}</td>
                        <td class="border border-cyan-500 p-3">IDR {{ $order->quantity * $order->product->price }}</td>
                    </tr>
                        @php
                            $totalQuantity += $order->quantity;
                        @endphp
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="bg-cyan-100">
                        <th class="border border-cyan-500 p-3">Total</th>
                        <th class="border border-cyan-500 p-3">{{ $totalQuantity }} item(s)</th>
                        <th class="border border-cyan-500 p-3">IDR {{ $h->total_price }}</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        @endforeach
    </section>
@endsection
