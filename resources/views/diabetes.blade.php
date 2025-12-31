<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fitur - Diabelens | Prediksi AI</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <main class="container-utama-diabetes">
            <div class="container-menu-diabetes">
                <div class="container-judul-menu-diabetes">
                    <h1 class="judul-menu-diabetes">Cek Diabetes</h1>
                    <p class="deskripsi__menu-diabetes">LDiabelens membantu pasien diabetes memantau kondisi kesehatan dan 
                        mengelola pola hidup berdasarkan data pemeriksaan medis dengan dukungan kecerdasan buatan.</p>
                </div>
                <div class="page-menu">
                    <div class="menu-item active" onclick="window.location='{{ route('diabetes.page') }}'">
                        <img src="{{ asset('images/icon-diabetes.png') }}" alt="diabetes">
                        <span>Diabetes</span>
                    </div>

                    <div class="menu-item" onclick="window.location='{{ route('lifestyle.page') }}'">
                        <img src="{{ asset('images/icon-lifestyle.png') }}" alt="lifestyle">
                        <span>Lifestyle</span>
                    </div>

                    <div class="menu-item" onclick="window.location='{{ route('profile.page') }}'">
                        <img src="{{ asset('images/user.png') }}" alt="profile">
                        <span>Profil</span>
                    </div>
                </div>
            </div>
            <div class="container-form-diabetes">
                <div class="kolom-input-form-diabetes card-diabetes">
                    <form action="#" method="POST" class="form-prediksi">
                        <h2 class="form__judul-diabetes">Form Data Kesehatan Pasien</h2>
                        <p class="form__deskripsi-diabetes">Masukkan data kesehatan berdasarkan hasil pemeriksaan 
                            terakhir dari tenaga medis. Data ini digunakan sistem untuk membantu pemantauan kondisi dan pengelolaan pola hidup pasien diabetes.</p>
                        <input type="number" step="0.01" name="glukosa" placeholder="Kadar Glukosa Darah (mg/dL)" required class="form__input-diabetes">
                        <input type="number" step="0.01" name="tekanan_darah" placeholder="Tekanan Darah" required class="form__input-diabetes">
                        <input type="number" step="0.01" name="skinthickness" placeholder="Ketebalan Lipatan Kulit" required class="form__input-diabetes">
                        <input type="number" name="pregnancies" placeholder="Jumlah Kehamilan" required class="form__input-diabetes">
                        <input type="number" step="0.01" name="insulin" placeholder="Kadar Insulin" required class="form__input-diabetes">
                        <input type="number" step="0.01" name="bmi" placeholder="ndeks Massa Tubuh (BMI)" required class="form__input-diabetes">
                        <input type="number" step="0.01" name="riwayat_diabetes" placeholder="Riwayat Diabetes Keluarga" required class="form__input-diabetes">
                        <input type="number" name="usia" placeholder="Usia" required class="form__input-diabetes">
                    </form> 
                </div>
                <div class="kolom-hasil-ai-diabetes card-ai-diabetes">
                    <div class="hasil-ai-diabetes__konten_good">
                        <h2 class="hasil-ai-diabetes__judul_good">Kondisi Terkontrol!!</h2>
                        <p class="hasil-ai-diabetes__deskripsi">Berdasarkan data yang dimasukkan, 
                            kondisi kesehatan Anda berada dalam kategori terpantau. Tetap lakukan 
                            kontrol rutin dan jalankan pola hidup sehat sesuai anjuran tenaga medis.</p>
                    </div>
                    <div class="hasil-ai-diabetes__gambar">
                        <img src="{{ asset('images/good.jpg') }}" alt="Karakter Dokter AI"> 
                    </div>
                    <button type="submit" form="form-prediksi" class="hasil-ai-diabetes__tombol-generate btn-primary">Analisis Data</button>
                </div>
            </div>
        </main>
    </body>
</html>