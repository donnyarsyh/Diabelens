@extends('main.index')

@section('content')
    @php
        $user = Auth::user();
    @endphp
    <div class="container-form-profile">
        <div class="kolom-input-form card-profile">

            <form action="{{ route('profile.update') }}" method="POST" class="form-prediksi" id="profile-form"
                enctype="multipart/form-data">
                @csrf

                <h2 class="form__judul-profile">Informasi Profil Pengguna</h2>
                <p class="form__deskripsi-profile">Lengkapi dan perbarui data diri Anda untuk mendukung
                    personalisasi layanan dan kemudahan pengelolaan informasi pada sistem Diabelens. </p>

                <input type="text" name="nama" placeholder="Nama Lengkap Pengguna"
                    value="{{ old('nama', $user->name) }}" required class="form__input-profile">

                <input type="email" name="email" placeholder="Email Pengguna" value="{{ old('email', $user->email) }}"
                    required class="form__input-profile">

                <input type="tel" name="telp" placeholder="Nomor Telepon Aktif"
                    value="{{ old('telp', $user->telp ?? '') }}" required class="form__input-profile">

                <select name="gender" class="form__select-profile" required>
                    <option value="" disabled>Pilih Jenis Kelamin</option>
                    <option value="laki-laki" {{ old('gender', $user->gender ?? '') == 'laki-laki' ? 'selected' : '' }}>
                        Laki-laki
                    </option>
                    <option value="perempuan" {{ old('gender', $user->gender ?? '') == 'perempuan' ? 'selected' : '' }}>
                        Perempuan
                    </option>
                </select>

                <div class="form-group">
                    <label for="avatar">Foto Profil</label>
                    <input type="file" name="avatar" id="avatar" accept="image/*" class="form__input-profile">
                </div>


                <div class="form-group-with-icon">
                    <input type="password" name="password" id="password_input"
                        placeholder="Password Baru (kosongkan jika tidak ingin mengganti)" class="form__input-profile">
                    <i class="fas fa-eye-slash password-toggle-icon" onclick="togglePasswordVisibility()"></i>
                </div>

                <button type="submit" class="btn-primary btn-simpan">Simpan</button>
            </form>

        </div>
        <div class="kolom-foto-profile card-foto-profile">
            <div class="foto-profile">
                <img src="{{ $user->avatar ?? asset('images/user.png') }}" alt="Foto Profile">
            </div>
            <form id="logout-form" action="{{ route('logout.process') }}" method="POST" style="display:none;">
                @csrf
            </form>
            <button type="button" class="btn-logout" title="Keluar Akun"
                onclick="document.getElementById('logout-form').submit()">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
            </button>
        </div>
    </div>
@endsection
