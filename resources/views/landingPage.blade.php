@extends('layouts.master')

@section('content')
    <section class="bagian-hero" id="home">
        <div class="hero__konten">
            <h1 class="hero__judul">Kelola Diabetes Lebih Mudah, Cepat, dan Terarah dengan <span
                    class="hero__judul-highlight">Diabelens</span></h1>
            <p class="hero__deskripsi">Sistem manajemen pasien diabetes yang membantu fasilitas kesehatan mengelola
                pasien secara terintegrasi dan memberikan kemudahan pasien mengakses layanan terbaik.</p>
            <button class="hero__tombol-utama btn-primary" id="open-modal-btn">Mulai Sekarang</button>
        </div>
        <div class="hero__gambar">
            <img src="{{ asset('images/doctor1.png') }}" alt="logo1">
        </div>
    </section>
    <section class="bagian-penjelasan section">
        <div class="penjelasan__gambar">
            <img src="{{ asset('images/doctor2.png') }}" alt="logo2">
        </div>
        <div class="penjelasan__konten">
            <!-- Judul menggunakan kelas section-title baru -->
            <h2 class="penjelasan__judul section-title">Mengapa Sistem Manajemen Diabetes Dibutuhkan?</h2>
            <p class="penjelasan__deskripsi">Pendekatan terpadu untuk pasien diabetes menuntut fasilitas kesehatan untuk
                memiliki sistem yang cepat, akurat, dan terintegrasi. Dengan Diabelens, kualitas layanan meningkat, dan
                penanganan pasien merasakan ketika dokter menggunakan teknologi AI.</p>
        </div>
    </section>
    <section class="bagian-fitur section"id="fitur">
        <!-- Judul dan Subjudul menggunakan kelas baru -->
        <h2 class="fitur__judul section-title">Fitur</h2>
        <p class="fitur__subjudul section-subtitle">Lorem ipsum is simply dummy text of the printing and typesetting
            industry.</p>

        <div class="fitur__wadah-kartu">
            <div class="fitur__kartu">
                <div class="kartu__ikon-wadah">
                    <i class="fa-solid fa-bell-concierge kartu__ikon"></i>
                </div>
                <h3 class="kartu__judul">Monitoring Riwayat Diabetes Pasien</h3>
                <p class="kartu__deskripsi">Lorem ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>

            <div class="fitur__kartu">
                <div class="kartu__ikon-wadah">
                    <i class="fa-solid fa-heart-pulse kartu__ikon"></i>
                </div>
                <h3 class="kartu__judul">Monitoring Gaya Hidup Pasien Diabetes</h3>
                <p class="kartu__deskripsi">Lorem ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
        </div>
    </section>
    <section class="bagian-tutorial section section--dark" id="tutorial">
        <!-- Judul dan Subjudul menggunakan kelas baru, warna diatur oleh section--dark -->
        <h2 class="tutorial__judul section-title">Tutorial</h2>
        <p class="tutorial__subjudul section-subtitle">Lorem ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

        <div class="tutorial__wadah-langkah">
            <div class="langkah__item">
                <span class="langkah__nomor">1</span>
                <h4 class="langkah__judul">Monitoring Riwayat Diabetes Pasien</h4>
                <p class="langkah__deskripsi">Lorem ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
            </div>
            <div class="langkah__item">
                <span class="langkah__nomor">2</span>
                <h4 class="langkah__judul">Monitoring Riwayat Diabetes Pasien</h4>
                <p class="langkah__deskripsi">Lorem ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
            </div>
            <div class="langkah__item">
                <span class="langkah__nomor">3</span>
                <h4 class="langkah__judul">Monitoring Riwayat Diabetes Pasien</h4>
                <p class="langkah__deskripsi">Lorem ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
            </div>
            <div class="langkah__item">
                <span class="langkah__nomor">4</span>
                <h4 class="langkah__judul">Monitoring Riwayat Diabetes Pasien</h4>
                <p class="langkah__deskripsi">Lorem ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
            </div>
            <div class="langkah__item">
                <span class="langkah__nomor">5</span>
                <h4 class="langkah__judul">Monitoring Riwayat Diabetes Pasien</h4>
                <p class="langkah__deskripsi">Lorem ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
            </div>
            <div class="langkah__item">
                <span class="langkah__nomor">6</span>
                <h4 class="langkah__judul">Monitoring Riwayat Diabetes Pasien</h4>
                <p class="langkah__deskripsi">Lorem ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
            </div>
        </div>
    </section>

    <footer class="kaki-halaman">
        <div class="kaki-halaman__wadah">
            <div class="kaki-halaman__kolom">
                <h4 class="kaki-halaman__judul-kolom">Diabelens</h4>
                <p class="kaki-halaman__teks">Sistem manajemen pasien diabetes berbasis AI.</p>
                <div class="kaki-halaman__sosmed">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
            <div class="kaki-halaman__kolom">
                <h4 class="kaki-halaman__judul-kolom">Navigasi</h4>
                <a href="#" class="kaki-halaman__tautan">Home</a>
                <a href="#" class="kaki-halaman__tautan">Fitur</a>
                <a href="#" class="kaki-halaman__tautan">Tutorial</a>
                <a href="#" class="kaki-halaman__tautan">Ketentuan Layanan</a>
            </div>
            <div class="kaki-halaman__kolom">
                <h4 class="kaki-halaman__judul-kolom">Hubungi Kami</h4>
                <p class="kaki-halaman__teks">
                    <i class="fas fa-map-marker-alt"></i> Jl. Sehat No. 1, Jakarta
                </p>
                <p class="kaki-halaman__teks">
                    <i class="fas fa-envelope"></i> info@trackingd.com
                </p>
                <p class="kaki-halaman__teks">
                    <i class="fas fa-phone"></i> +62 812-3456-7890
                </p>
            </div>
        </div>
        <div class="kaki-halaman__hak-cipta">
            &copy; 2024 Diabelens. Semua Hak Dilindungi.
        </div>
    </footer>
@endsection
