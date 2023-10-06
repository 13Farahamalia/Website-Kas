@extends('navbar')

@section('content')
    <section class="info">
        <div class="info-container">
            <div class="shape">
                <h1 class="edit">Pengeluaran</h1>
                <div class="jumlah">
                <h2>Jumlah KAS</h2>
                <h3>Rp. 1.200.000</h3>
                </div>
                <form action="" method="POST">
                    <div class="input">
                        <label for="ambil">Nominal Pengeluaran</label>
                        <input type="text" name="ambil" placeholder="Rp">
                    </div>
                    <br>
                    <div class="input">
                        <label for="keterangan">Keterangan Pengeluaran</label>
                        <input type="text" name="keterangan" placeholder="Keterangan">
                    </div>
                    <br>
                    <input class="btn" type="button" value="Bayar">
                </form>
            </div>
        </div>
    </section>
@endsection
