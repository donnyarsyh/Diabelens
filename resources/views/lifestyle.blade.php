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
        <main class="container-utama-lifestyle">
            <div class="container-menu-lifestyle">
                <div class="container-judul-menu-lifestyle">
                    <h1 class="judul-menu-lifestyle">Cek Gaya Hidup</h1>
                    <p class="deskripsi__menu-lifestyle">Fitur ini membantu pasien diabetes mengevaluasi pola makan, aktivitas fisik, 
                        dan kebiasaan harian sebagai bagian dari pengelolaan gaya hidup sehat berdasarkan analisis kecerdasan buatan.</p>
                </div>
                <div class="page-menu">
                    <div class="menu-item" onclick="window.location='{{ route('diabetes.page') }}'">
                        <img src="{{ asset('images/icon-diabetes.png') }}" alt="diabetes">
                        <span>Diabetes</span>
                    </div>

                    <div class="menu-item active" onclick="window.location='{{ route('lifestyle.page') }}'">
                        <img src="{{ asset('images/icon-lifestyle.png') }}" alt="lifestyle">
                        <span>Lifestyle</span>
                    </div>

                    <div class="menu-item" onclick="window.location='{{ route('profile.page') }}'">
                        <img src="{{ asset('images/user.png') }}" alt="profile">
                        <span>Profil</span>
                    </div>
                </div>
            </div>
            <div class="container-form-lifestyle">
                <div class="kolom-input-form-lifestyle card-lifestyle">
                    <form action="#" method="POST" class="form-prediksi" id="form-prediksi">
                        <h2 class="form__judul-lifestyle">Form Data Gaya Hidup</h2>
                        <p class="form__deskripsi-lifestyle">
                            Pilih kebiasaan gaya hidup yang paling sesuai dengan kondisi Anda saat ini. Data ini 
                            digunakan sistem untuk memberikan analisis dan rekomendasi pendukung dalam pengelolaan 
                            diabetes.</p>

                        <!-- CHECKBOX -->
                        <label class="form__label-lifestyle">Pola Makan Harian</label>
                        <div class="checkbox-group-lifestyle">
                            <label><input type="checkbox" name="makanan[]" value="Sayuran"> Sayuran</label>
                            <label><input type="checkbox" name="makanan[]" value="Buah-buahan"> Buah-buahan</label>
                            <label><input type="checkbox" name="makanan[]" value="Nasi Putih"> Nasi Putih</label>
                            <label><input type="checkbox" name="makanan[]" value="Makanan Manis"> Makanan Manis</label>
                            <label><input type="checkbox" name="makanan[]" value="Makanan Cepat Saji"> Makanan Cepat Saji</label>
                        </div>
                        <br>

                        <label class="form__label-lifestyle">Aktivitas Olahraga</label>
                        <div class="checkbox-group-lifestyle">
                            <label><input type="checkbox" name="makanan[]" value="Lari"> Lari</label>
                            <label><input type="checkbox" name="makanan[]" value="Jalan Kaki"> Jalan Kaki</label>
                            <label><input type="checkbox" name="makanan[]" value="Senam Ringan"> Senam Ringan</label>
                            <label><input type="checkbox" name="makanan[]" value="Berenang"> Berenang<</label>
                            <label><input type="checkbox" name="makanan[]" value="Tidak Berolahraga"> Tidak Berolahraga</label>
                        </div>
                        <br>

                        <label class="form__label-lifestyle">Aktivitas Harian</label>
                        <div class="checkbox-group-lifestyle">
                            <label><input type="checkbox" name="makanan[]" value="Berkerja didepan komputer">  Bekerja di depan komputer</label>
                            <label><input type="checkbox" name="makanan[]" value="Banyak duduk"> Banyak duduk</label>
                            <label><input type="checkbox" name="makanan[]" value="Aktif bergerak"> Aktif bergerak</label>
                            <label><input type="checkbox" name="makanan[]" value="Pekerjaan Fisik"> Pekerjaan fisik</label>
                            <label><input type="checkbox" name="makanan[]" value="Kombinasi aktivitas"> Kombinasi aktivitas</label>
                        </div>
                        <br>
                    </form>
                </div>
                <div class="kolom-hasil-ai-lifestyle card-ai-lifestyle">
                    <div class="hasil-ai-lifestyle__konten_good">
                        <h2 class="hasil-ai-lifestyle__judul_good">Pola Hidup Terkelola!!</h2>
                        <p class="hasil-ai-lifestyle__deskripsi">Berdasarkan data gaya hidup yang dipilih, sistem menilai bahwa pola hidup Anda 
                            termasuk dalam kategori terkelola. Tetap jaga konsistensi pola makan dan aktivitas fisik sesuai anjuran tenaga medis.</p>
                    </div>
                    <div class="hasil-ai-lifestyle__gambar">
                        <img src="{{ asset('images/good.jpg') }}" alt="Karakter Dokter AI"> 
                    </div>
                    <button type="submit" form="form-prediksi" class="hasil-ai-lifestyle__tombol-generate btn-primary">Analisis Gaya Hidup</button>
                </div>
            </div>
        </main>
    </body>
</html>