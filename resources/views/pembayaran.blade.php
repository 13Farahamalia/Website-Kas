@extends('navbar')

@section('content')    
    <section class="info">
        <div class="info-container">
            <div class="shape">
                <h1 class="tambah">Pembayaran</h1>
                <form action="" method="POST">
                    <div class="input">
                        <label for="nama">Nama</label>
                        <select name="nama" id="nama">
                            <option value="Farah">Farah</option>
                            <option value="Clara">Clara</option>
                        </select>
                    </div>

                    <div class="input info">
                        <h2 class="nominal">Nominal yang harus dibayar</h2>
                        <h3>Rp. 2.000</h3>
                    </div>

                    <div class="input">
                        <label for="bayar">Nominal</label>
                        <input type="text" placeholder="Rp">
                    </div>
                    <br>
                    <input class="btn" type="button" value="Bayar">
                </form>
            </div>
        </div>
    </section>
@endsection