@extends('main.index')

@section('content')
    <div class="container-form-diabetes">

        {{-- FORM INPUT --}}
        <div class="kolom-input-form-diabetes card-diabetes">
            <form method="POST" action="/diabetes/predict" class="form-prediksi">
                @csrf

                <h2 class="form__judul-diabetes">Form Data Kesehatan Pasien</h2>
                <p class="form__deskripsi-diabetes">
                    Masukkan data kesehatan berdasarkan hasil pemeriksaan terakhir
                    dari tenaga medis. Data ini digunakan sistem untuk membantu pemantauan kondisi dan pengelolaan pola
                    hidup pasien diabetes.
                </p>

                <input type="number" step="0.01" name="Glucose" placeholder="Kadar Glukosa Darah (mg/dL)" required
                    class="form__input-diabetes">
                <input type="number" step="0.01" name="BloodPressure" placeholder="Tekanan Darah" required
                    class="form__input-diabetes">
                <input type="number" step="0.01" name="SkinThickness" placeholder="Ketebalan Lipatan Kulit" required
                    class="form__input-diabetes">
                <input type="number" name="Pregnancies" placeholder="Jumlah Kehamilan" required
                    class="form__input-diabetes">
                <input type="number" step="0.01" name="Insulin" placeholder="Kadar Insulin" required
                    class="form__input-diabetes">
                <input type="number" step="0.01" name="BMI" placeholder="Indeks Massa Tubuh (BMI)" required
                    class="form__input-diabetes">
                <input type="number" step="0.01" name="DiabetesPedigreeFunction" placeholder="Riwayat Diabetes Keluarga"
                    required class="form__input-diabetes">
                <input type="number" name="Age" placeholder="Usia" required class="form__input-diabetes">

                <button type="submit" class="hasil-ai-diabetes__tombol-generate btn-primary">
                    Analisis Data
                </button>
            </form>
        </div>

        {{-- HASIL PREDIKSI --}}
        <div class="kolom-hasil-ai-diabetes card-ai-diabetes">

            @isset($response)
                @if ($response['prediction'] == 0)
                    <div class="hasil-ai-diabetes__konten_good">
                        <h2 class="hasil-ai-diabetes__judul_good">
                            Kondisi Diabetes Terkendali
                        </h2>

                        <p class="hasil-ai-diabetes__deskripsi">
                            Berdasarkan data kesehatan yang dimasukkan, kondisi
                            diabetes saat ini berada dalam batas yang relatif terkendali. Disarankan untuk tetap
                            melakukan pemantauan rutin dan mengikuti anjuran tenaga kesehatan.
                    </div>
                @else
                    <div class="hasil-ai-diabetes__konten_bad">
                        <h2 class="hasil-ai-diabetes__judul_bad">
                            Kondisi Diabetes Perlu Perhatian
                        </h2>

                        <p class="hasil-ai-diabetes__deskripsi">
                            Sistem mendeteksi adanya indikator yang memerlukan
                            perhatian lebih pada kondisi diabetes. Pengelolaan pola hidup dan pemantauan
                            lanjutan sangat disarankan sesuai arahan dokter.
                        </p>
                    </div>
                @endif

                <div class="hasil-ai-diabetes__gambar">
                    @if ($response['prediction'] == 1)
                        <img src="{{ asset('images/bad.jpg') }}" alt="Risiko Diabetes">
                    @else
                        <img src="{{ asset('images/good.jpg') }}" alt="Tidak Diabetes">
                    @endif
                </div>
            @else
                {{-- Tampilan awal sebelum submit --}}
                <div class="hasil-ai-diabetes__konten_good">
                    <h2 class="hasil-ai-diabetes__judul_good">
                        Hasil Prediksi
                    </h2>
                    <p class="hasil-ai-diabetes__deskripsi">
                        Silakan isi formulir untuk melihat hasil prediksi diabetes.
                    </p>
                </div>

                <div class="hasil-ai-diabetes__gambar">
                    <img src="{{ asset('images/doctor-ai.png') }}" alt="Dokter Pasien">
                </div>
            @endisset

        </div>
    </div>
@endsection
