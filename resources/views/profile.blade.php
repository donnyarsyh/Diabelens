<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitur - Diabelens | Prediksi AI</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @php
        $user = Auth::user();
    @endphp
    <main class="container-utama-profile">
        <div class="container-menu-profile">
            <div class="container-judul-menu-profile">
                <h1 class="judul-menu-profile">Profile</h1>
                <p class="deskripsi__menu-profile">Lorem ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
            <div class="page-menu">
                <div class="menu-item" onclick="window.location='{{ route('diabetes.page') }}'">
                    <img src="{{ asset('images/icon-diabetes.png') }}" alt="diabetes">
                    <span>Diabetes</span>
                </div>

                <div class="menu-item" onclick="window.location='{{ route('lifestyle.page') }}'">
                    <img src="{{ asset('images/icon-lifestyle.png') }}" alt="lifestyle">
                    <span>Lifestyle</span>
                </div>

                <div class="menu-item active" onclick="window.location='{{ route('profile.page') }}'">
                    <img src="{{ $user->avatar ?? asset('images/user.png') }}" alt="Foto Profile">
                    <span>Profil</span>
                </div>
            </div>
        </div>
        <div class="container-form-profile">
            <div class="kolom-input-form card-profile">

                <form action="{{ route('profile.update') }}" method="POST" class="form-prediksi" id="profile-form"
                    enctype="multipart/form-data">
                    @csrf

                    <h2 class="form__judul-profile">Informasi Profile</h2>
                    <p class="form__deskripsi-profile">Isi form sesuai dengan hasil terakhir pengecekan dari dokter.</p>

                    <input type="text" name="nama" placeholder="Nama Lengkap"
                        value="{{ old('nama', $user->name) }}" required class="form__input-profile">

                    <input type="email" name="email" placeholder="Email" value="{{ old('email', $user->email) }}"
                        required class="form__input-profile">

                    <input type="tel" name="telp" placeholder="Nomor Telepon"
                        value="{{ old('telp', $user->telp ?? '') }}" required class="form__input-profile">

                    <select name="gender" class="form__select-profile" required>
                        <option value="" disabled>Pilih Jenis Kelamin</option>
                        <option value="laki-laki"
                            {{ old('gender', $user->gender ?? '') == 'laki-laki' ? 'selected' : '' }}>Laki-laki
                        </option>
                        <option value="perempuan"
                            {{ old('gender', $user->gender ?? '') == 'perempuan' ? 'selected' : '' }}>Perempuan
                        </option>
                    </select>

                    <div class="form-group">
                        <label for="avatar">Avatar</label>
                        <input type="file" name="avatar" id="avatar" accept="image/*"
                            class="form__input-profile">
                    </div>


                    <div class="form-group-with-icon">
                        <input type="password" name="password" id="password_input"
                            placeholder="Password (kosongkan jika tidak mengganti)" class="form__input-profile">
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
    </main>
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password_input');
            const toggleIcon = document.querySelector('.password-toggle-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            }
        }
    </script>
</body>

</html>
