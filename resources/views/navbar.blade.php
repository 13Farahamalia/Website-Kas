<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/') }}assets/style.css">
    <title>Kas Selcouth</title>
</head>
<body>
    <nav class="navbar-nav">
        <ul>
            <li class="nav-item {{ ($bar =='beranda') ? 'aktif' : '' }}">
                <a href="{{ url('/beranda') }}">
                    <iconify-icon class="icon" icon="tabler:home" ></iconify-icon>
                    Beranda
                </a>
            </li>
            <li class="nav-item {{ ($bar =='pembayaran') ? 'aktif' : '' }}">
                <a href="{{ url('/pembayaran') }}">
                    <iconify-icon class="icon" icon="la:amazon-pay"></iconify-icon>
                    Pembayaran
                </a>
            </li>
            <li class="nav-item {{ ($bar =='pengeluaran') ? 'aktif' : '' }}">
                <a href="{{ url('/pengeluaran') }}">
                    <iconify-icon class="icon" icon="tdesign:money"></iconify-icon>
                    Pengeluaran
                </a>
            </li>
            <li class="nav-item {{ ($bar =='rekapan') ? 'aktif' : '' }}">
                <a href="{{ url('/rekapan') }}">
                    <iconify-icon class="icon" icon="academicons:open-data"></iconify-icon>
                    Rekapan
                </a>
            </li>
        </ul>
    </nav>

    <section>
        @yield('content')
    </section>

    {{-- <script>
        const ul = document.querySelector("li");
        const aa = document.querySelectorAll("a");

        li.addEventListener("click", function(e) {
            e.preventDefault();

            if(e.target.classList.contains("nav-item")) {
                e.target.classList.add("aktif");
            }
        })
    </script> --}}
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>