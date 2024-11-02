@extends('layout.layout')
@section('title', $event->nama_acara)
@section('content')

    <div class="event-content">
        <div class="event-image">
            <img src="{{ asset('images/' . $event->gambar) }}" alt="{{ $event->nama_acara }}">
        </div>

        <div class="event-info">
            <h3>{{ $event->nama_acara }}</h3>
            <div class="event-details">
                <p><i class="fa fa-map-marker"></i> {{ $event->lokasi }}</p>
                <p><i class="fa fa-calendar"></i> {{ $event->detail }}</p>
            </div>
        </div>
    </div>

    <!--  box tiket  -->
    <div class="ticket-info">
        <p>Tickets starting at</p>
        <h3>Rp. {{ number_format($event->ticketOptions->min('harga'), 0, ',', '.') }}</h3>
        <button class="buy-ticket-button">Buy Tickets</button>
    </div>

    <!-- Deskripsi Event  -->
    <h3>Deskripsi</h3>
    <p class="event-description">{{ $event->deskripsi }}</p>

@endsection
