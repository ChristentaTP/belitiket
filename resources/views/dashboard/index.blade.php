@extends('layout.layout')

@section('title', 'Dashboard-belitiket.com')

@section('content')

    <h1 class="text-center text-orange">Hottest Event This Month</h1>

    <!-- Carousel Container -->
    <div class="carousel-container">
        <!-- Navigation Arrows -->
        <button class="prev" onclick="scrollCarousel(-1)">&#10094;</button>

        <div class="carousel">
            @foreach($events as $event)
                <div class="card">
                    <img src="{{ asset('images/' . $event->gambar) }}" alt="No Images">
                    <h3>{{ $event->nama_acara }}</h3>
                    <p>{{ $event->detail }}</p>
                    <p>{{ $event->lokasi }}</p>
                </div>
            @endforeach
        </div>


{{--        ini data dummy buat tester--}}
{{--        <div class="card">--}}
{{--            <img src="https://media.licdn.com/dms/image/v2/C510BAQEg0y9GAeCCBg/company-logo_200_200/company-logo_200_200/0/1630594544349/himpunan_mahasiswa_teknik_komputer_logo?e=2147483647&v=beta&t=MFZoHvdec251-yu102L5xAyWAizBXmv7YM9GBsHyKRE" alt="No Image">--}}
{{--            <h3>SOUNDSFEST 2024</h3>--}}
{{--            <p>22 Desember 2024</p>--}}
{{--            <p>Bekasi | Parkiran Transera Waterpark</p>--}}
{{--        </div>--}}


        <button class="next" onclick="scrollCarousel(1)">&#10095;</button>
    </div>

    <script>
        function scrollCarousel(direction) {
            const carousel = document.querySelector('.carousel');
            const cardWidth = document.querySelector('.card').offsetWidth;
            carousel.scrollBy({ left: cardWidth * direction, behavior: 'smooth' });
        }
    </script>
@endsection
