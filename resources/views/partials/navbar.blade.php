<header class="header">
    <div class="header__logo">Diabelens.</div>

    <nav class="header__navigasi">
        <a href="#home" class="navigasi__item aktif">Home</a>
        <a href="#fitur" class="navigasi__item">Fitur</a>
        <a href="#tutorial" class="navigasi__item">Tutorial</a>
    </nav>

    <button class="header__tombol-masuk btn-primary" id="open-modal-btn">
        Login / Daftar
    </button>
</header>
<script>
    const items = document.querySelectorAll(".navigasi__item");

    items.forEach(item => {
        item.addEventListener("click", function() {
            items.forEach(i => i.classList.remove("aktif"));
            this.classList.add("aktif");
        });
    });
</script>
