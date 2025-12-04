<div class="modal-overlay" id="auth-modal">
    <div class="auth-card">

        <button class="close-btn" id="close-modal-btn">&times;</button>

        {{-- FORM LOGIN --}}
        <form id="login-form" class="form-login">
            @csrf

            <h2>Login ke Diabelens</h2>

            <div class="form-group">
                <input type="email" id="email" class="form-input" placeholder="Alamat Email" required>
            </div>

            <div class="form-group">
                <input type="password" id="password" class="form-input" placeholder="Kata Sandi" required>
            </div>

            <button type="submit" class="form-submit-btn btn-primary">
                Masuk
            </button>

            <p id="login-error" style="color:red; display:none;"></p>
            <div class="form-link-switch">
                Belum punya akun?
                <a href="#" id="switch-to-register">Daftar Sekarang</a>
            </div>
        </form>

        {{-- FORM REGISTER --}}
        <form class="form-register" id="register-form" style="display:none;">
            @csrf
            <h2>Daftar Akun Baru</h2>

            <div class="form-group">
                <input type="text" name="name" class="form-input" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-input" placeholder="Alamat Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-input" placeholder="Kata Sandi (min. 6 karakter)"
                    required>
            </div>
            <div class="form-group">
                <input type="password" name="password_confirmation" class="form-input"
                    placeholder="Konfirmasi Kata Sandi" required>
            </div>

            <button type="submit" class="form-submit-btn btn-primary">Daftar</button>

            <div class="form-link-switch">
                Sudah punya akun? <a href="#" id="switch-to-login">Login</a>
            </div>
        </form>
    </div>
</div>
