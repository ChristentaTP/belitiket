@extends('layout.layout')
@section('title', $event->nama_acara)
@section('content')

    <div class="buy-ticket-page">
        <div class="ticket-category">
            <h2>Kategori Tiket</h2>
            @foreach ($ticketOptions as $ticket)
                <div class="ticket-option">
                    <div class="ticket-type">{{ $ticket->tipe_tiket }}</div>
                    <div class="ticket-price">Rp. {{ number_format($ticket->harga, 0, ',', '.') }}</div>
                    <div class="ticket-quantity">
                        <button class="quantity-btn">-</button>
                        <span>0</span>
                        <button class="quantity-btn">+</button>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="order-summary">
            <h3>Detail Pesanan</h3>
            <div class="event-detail">
                <img src="{{ asset('images/' . $event->gambar) }}" alt="{{ $event->nama_acara }}">
                <p>{{ $event->nama_acara }}</p>
                <p>{{ \Carbon\Carbon::parse($event->tanggal)->translatedFormat('d F Y') }}</p>
                <p>{{ $event->lokasi }}</p>
            </div>
            <div class="order-total">
                <p>0 Tiket Dipesan</p>
                <p>Total: Rp. 0</p>
            </div>
            <button class="checkout-btn" disabled>Check Out</button>
        </div>
    </div>

@endsection
