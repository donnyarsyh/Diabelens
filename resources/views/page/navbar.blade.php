<div class="container-menu-diabetes">
    <div class="container-judul-menu-diabetes">
        @if (Route::currentRouteName() === 'diabetes.page' || Route::currentRouteName() === 'diabetes.predict')
            <h1 class="judul-menu-diabetes">Manajemen Diabetes</h1>
        @elseif (Route::currentRouteName() === 'lifestyle.page' || Route::currentRouteName() === 'lifestyle.store')
            <h1 class="judul-menu-diabetes">Cek Gaya Hidup</h1>
        @elseif (Route::currentRouteName() === 'profile.page' || Route::currentRouteName() === 'profile.update')
            <h1 class="judul-menu-diabetes">Profile</h1>
        @endif

        <p class="deskripsi__menu-diabetes">Diabelens membantu pasien diabetes memantau kondisi
            kesehatan dan mengelola pola hidup berdasarkan data pemeriksaan medis dengan dukungan kecerdasan
            buatan.</p>
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
            <img src="{{ $user->avatar ?? asset('images/user.png') }}" alt="Foto Profile">
            <span>Profil</span>
        </div>
    </div>
</div>
