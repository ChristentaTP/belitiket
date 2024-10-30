@extends('layout.layout')

@section('title', 'Dashboard-belitiket.com')

@section('content')
    <h1 class="text-center text-orange">Hottest Event This Month</h1>

    <!-- Carousel Container -->
    <div class="carousel-container">
        <!-- Navigation Arrows -->
        <button class="prev" onclick="scrollLeft()">&#10094;</button>
        <button class="next" onclick="scrollRight()">&#10095;</button>

        <div class="carousel">
            <!-- Card 1 -->
            <div class="card">
                <img src="https://media.licdn.com/dms/image/v2/C510BAQEg0y9GAeCCBg/company-logo_200_200/company-logo_200_200/0/1630594544349/himpunan_mahasiswa_teknik_komputer_logo?e=2147483647&v=beta&t=MFZoHvdec251-yu102L5xAyWAizBXmv7YM9GBsHyKRE" alt="Event Image">
                <h3>SING GUYUB FEST 2024</h3>
                <p>08 Desember 2024</p>
                <p>Semarang | Stadion Diponegoro</p>
            </div>
            <!-- Card 2 -->
            <div class="card">
                <img src="https://media.licdn.com/dms/image/v2/C510BAQEg0y9GAeCCBg/company-logo_200_200/company-logo_200_200/0/1630594544349/himpunan_mahasiswa_teknik_komputer_logo?e=2147483647&v=beta&t=MFZoHvdec251-yu102L5xAyWAizBXmv7YM9GBsHyKRE" alt="Event Image">
                <h3>SOUNDSFEST 2024</h3>
                <p>22 Desember 2024</p>
                <p>Bekasi | Parkiran Transera Waterpark</p>
            </div>
            <!-- Card 3 -->
            <div class="card">
                <img src="https://media.licdn.com/dms/image/v2/C510BAQEg0y9GAeCCBg/company-logo_200_200/company-logo_200_200/0/1630594544349/himpunan_mahasiswa_teknik_komputer_logo?e=2147483647&v=beta&t=MFZoHvdec251-yu102L5xAyWAizBXmv7YM9GBsHyKRE" alt="Event Image">
                <h3>HARMONIKU FEST 2024</h3>
                <p>28 Oktober 2024</p>
                <p>Semarang | Bandara Lama Semarang</p>
            </div>
            <!-- Card 4 -->
            <div class="card">
                <img src="https://media.licdn.com/dms/image/v2/C510BAQEg0y9GAeCCBg/company-logo_200_200/company-logo_200_200/0/1630594544349/himpunan_mahasiswa_teknik_komputer_logo?e=2147483647&v=beta&t=MFZoHvdec251-yu102L5xAyWAizBXmv7YM9GBsHyKRE" alt="Event Image">
                <h3>SAMPOERNA FEST</h3>
                <p>06 November 2024</p>
                <p>Semarang | Simpang Lima</p>
            </div>
            <!-- Tambahan card dummy lainnya -->
            <div class="card">
                <img src="https://media.licdn.com/dms/image/v2/C510BAQEg0y9GAeCCBg/company-logo_200_200/company-logo_200_200/0/1630594544349/himpunan_mahasiswa_teknik_komputer_logo?e=2147483647&v=beta&t=MFZoHvdec251-yu102L5xAyWAizBXmv7YM9GBsHyKRE" alt="Event Image">
                <h3>SAMPOERNA FEST</h3>
                <p>06 November 2024</p>
                <p>Semarang | Simpang Lima</p>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/150" alt="Event Image">
                <h3>SAMPOERNA FEST</h3>
                <p>06 November 2024</p>
                <p>Semarang | Simpang Lima</p>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        const carousel = document.querySelector('.carousel');

        function scrollLeft() {
            carousel.scrollBy({
                left: -220, // Sesuaikan dengan lebar card + gap
                behavior: 'smooth'
            });
        }

        function scrollRight() {
            carousel.scrollBy({
                left: 220, // Sesuaikan dengan lebar card + gap
                behavior: 'smooth'
            });
        }
    </script>

@endsection
