@extends('main.index')
@section('content')
    <div class="container-form-lifestyle">
        <div class="kolom-input-form-lifestyle card-lifestyle">
            <form action="{{ route('lifestyle.store') }}" method="POST" class="form-prediksi" id="form-prediksi">
                @csrf

                <h2 class="form__judul-lifestyle">Form Data Gaya Hidup</h2>
                <p class="form__deskripsi-lifestyle">
                    Pilih kebiasaan gaya hidup yang paling sesuai dengan kondisi
                    Anda saat ini. Data ini digunakan sistem untuk memberikan analisis dan rekomendasi pendukung
                    dalam pengelolaan diabetes.
                </p>

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
                    <label><input type="checkbox" name="olahraga[]" value="Lari"> Lari</label>
                    <label><input type="checkbox" name="olahraga[]" value="Jalan Kaki"> Jalan Kaki</label>
                    <label><input type="checkbox" name="olahraga[]" value="Senam Ringan"> Senam Ringan</label>
                    <label><input type="checkbox" name="olahraga[]" value="Berenang"> Berenang</label>
                    <label><input type="checkbox" name="olahraga[]" value="Tidak Berolahraga"> Tidak Berolahraga</label>
                </div>
                <br>

                <label class="form__label-lifestyle">Aktivitas Harian</label>
                <div class="checkbox-group-lifestyle">
                    <label>
                        <input type="checkbox" name="aktivitas[]" value="Berkerja didepan komputer">
                        Berkerja didepan komputer
                    </label>
                    <label><input type="checkbox" name="aktivitas[]" value="Banyak duduk"> Banyak duduk</label>
                    <label><input type="checkbox" name="aktivitas[]" value="Aktif bergerak"> Aktif bergerak</label>
                    <label><input type="checkbox" name="aktivitas[]" value="Pekerjaan Fisik"> Pekerjaan Fisik</label>
                    <label>
                        <input type="checkbox" name="aktivitas[]" value="Kombinasi aktivitas">
                        Kombinasi aktivitas
                    </label>
                </div>
                <br>
            </form>
        </div>
        <div class="kolom-hasil-ai-lifestyle card-ai-lifestyle">

            @if (isset($score))
                @if ($score >= 3)
                    {{-- HASIL BAGUS --}}
                    <div class="hasil-ai-lifestyle__konten_good">
                        <h2 class="hasil-ai-lifestyle__judul_good">
                            {{ $hasil ?? 'Silakan isi form' }}
                        </h2>
                        <p class="hasil-ai-lifestyle__deskripsi">
                            {{ $deskripsi ?? '' }}
                        </p>
                    </div>
                    <div class="hasil-ai-lifestyle__gambar">
                        <img src="{{ asset('images/good.jpg') }}" alt="Karakter Dokter AI">
                    </div>
                @else
                    {{-- HASIL KURANG BAGUS --}}
                    <div class="hasil-ai-lifestyle__konten_bad">
                        <h2 class="hasil-ai-lifestyle__judul_bad">
                            {{ $hasil ?? 'Silakan isi form' }}
                        </h2>
                        <p class="hasil-ai-lifestyle__deskripsi">
                            {{ $deskripsi ?? '' }}
                        </p>
                    </div>
                    <div class="hasil-ai-lifestyle__gambar">
                        <img src="{{ asset('images/bad.jpg') }}" alt="Karakter Dokter AI">
                    </div>
                @endif

                <small>Skor Gaya Hidup: {{ $score }}</small>
            @else
                {{-- BELUM ADA ANALISIS --}}
                <div class="hasil-ai-lifestyle__konten_neutral">
                    <h2>Silakan isi form</h2>
                    <p>Hasil analisis gaya hidup akan muncul di sini.</p>
                </div>
            @endif



            <button type="submit" form="form-prediksi" class="hasil-ai-lifestyle__tombol-generate btn-primary">
                Analisis Gaya Hidup
            </button>

        </div>

    </div>
@endsection
