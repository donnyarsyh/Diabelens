@extends('layouts.master')

@section('content')
    <section class="bagian-hero" id="home">
        <div class="hero__konten">
            <h1 class="hero__judul">Kelola Diabetes Lebih Mudah, Cepat, dan Terarah dengan <span
                    class="hero__judul-highlight">Diabelens</span></h1>
            <p class="hero__deskripsi">Sistem manajemen pasien diabetes yang dirancang untuk membantu fasilitas 
                kesehatan dan pasien dalam memantau kondisi kesehatan secara berkelanjutan melalui pengelolaan 
                data yang terintegrasi dan berbasis teknologi.</p>
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
            <p class="penjelasan__deskripsi">Pengelolaan diabetes memerlukan pemantauan kondisi kesehatan secara rutin, 
                pencatatan data yang akurat, serta konsistensi dalam menjaga pola hidup. Diabelens hadir sebagai solusi 
                digital yang membantu fasilitas kesehatan meningkatkan efisiensi layanan, sekaligus mendukung pasien 
                dalam mengelola kondisi kesehatannya secara lebih terarah.</p>
        </div>
    </section>
    <section class="bagian-fitur section"id="fitur">
        <!-- Judul dan Subjudul menggunakan kelas baru -->
        <h2 class="fitur__judul section-title">Fitur</h2>
        <p class="fitur__subjudul section-subtitle">Fitur utama yang dirancang untuk mendukung pemantauan dan pengelolaan 
            kondisi pasien diabetes secara berkelanjutan.</p>

        <div class="fitur__wadah-kartu">
            <div class="fitur__kartu">
                <div class="kartu__ikon-wadah">
                    <i class="fa-solid fa-bell-concierge kartu__ikon"></i>
                </div>
                <h3 class="kartu__judul">Monitoring Riwayat Diabetes Pasien</h3>
                <p class="kartu__deskripsi">Menyediakan pencatatan riwayat kesehatan pasien diabetes secara terstruktur, 
                    sehingga memudahkan pemantauan perkembangan kondisi pasien dari waktu ke waktu.</p>
            </div>

            <div class="fitur__kartu">
                <div class="kartu__ikon-wadah">
                    <i class="fa-solid fa-heart-pulse kartu__ikon"></i>
                </div>
                <h3 class="kartu__judul">Monitoring Gaya Hidup Pasien Diabetes</h3>
                <p class="kartu__deskripsi">Membantu memantau pola hidup pasien, termasuk aktivitas fisik dan kebiasaan 
                    harian, sebagai bagian dari upaya pengendalian kondisi diabetes.</p>
            </div>
        </div>
    </section>
    <section class="bagian-tutorial section section--dark" id="tutorial">
        <!-- Judul dan Subjudul menggunakan kelas baru, warna diatur oleh section--dark -->
        <h2 class="tutorial__judul section-title">Tutorial</h2>
        <p class="tutorial__subjudul section-subtitle">Alur penggunaan sistem yang sederhana untuk membantu pengguna memahami 
            proses pengelolaan kondisi diabetes.</p>

        <div class="tutorial__wadah-langkah">
            <div class="langkah__item">
                <span class="langkah__nomor">1</span>
                <h4 class="langkah__judul">Registrasi dan Login</h4>
                <p class="langkah__deskripsi">Pengguna melakukan pendaftaran akun dan masuk ke sistem menggunakan data pribadi 
                    yang valid agar keamanan serta kerahasiaan data kesehatan tetap terjaga.</p>
            </div>
            <div class="langkah__item">
                <span class="langkah__nomor">2</span>
                <h4 class="langkah__judul">Input Data Kesehatan</h4>
                <p class="langkah__deskripsi">Pengguna memasukkan data kesehatan seperti kadar gula darah, berat badan, dan 
                    informasi pendukung lainnya berdasarkan hasil pemeriksaan medis.</p>
            </div>
            <div class="langkah__item">
                <span class="langkah__nomor">3</span>
                <h4 class="langkah__judul">Pemrosesan Data</h4>
                <p class="langkah__deskripsi">Sistem memproses data kesehatan yang telah dimasukkan untuk mengidentifikasi 
                    pola dan kondisi kesehatan pengguna secara menyeluruh.</p>
            </div>
            <div class="langkah__item">
                <span class="langkah__nomor">4</span>
                <h4 class="langkah__judul">Analisis dan Informasi</h4>
                <p class="langkah__deskripsi">Hasil pemrosesan ditampilkan dalam bentuk informasi kondisi kesehatan yang 
                    mudah dipahami sebagai bahan evaluasi dan pemantauan.</p>
            </div>
            <div class="langkah__item">
                <span class="langkah__nomor">5</span>
                <h4 class="langkah__judul">Pemantauan Berkala</h4>
                <p class="langkah__deskripsi">Pengguna dapat memantau perkembangan kondisi kesehatannya secara berkala 
                    melalui riwayat data dan tampilan visual yang disediakan sistem.</p>
            </div>
            <div class="langkah__item">
                <span class="langkah__nomor">6</span>
                <h4 class="langkah__judul">Dukungan Pengelolaan Pola Hidup</h4>
                <p class="langkah__deskripsi">Informasi yang diperoleh digunakan sebagai pendukung dalam mengatur pola 
                    hidup sehat sesuai dengan anjuran tenaga kesehatan.</p>
            </div>
        </div>
    </section>

    <footer class="kaki-halaman">
        <div class="kaki-halaman__wadah">
            <div class="kaki-halaman__kolom">
                <h4 class="kaki-halaman__judul-kolom">Diabelens.</h4>
                <p class="kaki-halaman__teks">Diabelens merupakan sistem manajemen pasien diabetes berbasis teknologi 
                    yang mendukung pemantauan kondisi kesehatan secara berkelanjutan.</p>
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
                    <i class="fas fa-map-marker-alt"></i> Jl. Karimata No.56, Kabupaten Jember
                </p>
                <p class="kaki-halaman__teks">
                    <i class="fas fa-envelope"></i> diabelens.luxoria@gmail.com
                </p>
                <p class="kaki-halaman__teks">
                    <i class="fas fa-phone"></i> +62 856-0766-9075
                </p>
            </div>
        </div>
        <div class="kaki-halaman__hak-cipta">
            &copy; 2026 Diabelens. Semua Hak Dilindungi.
        </div>
    </footer>
@endsection
