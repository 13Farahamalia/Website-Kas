@extends('navbar')

@section('content')
    <section>
        <div class="container">
            <div class="wrap">
            <div class="text">
                <h1>HALO BENDAHARA!</h1>
                <p>Jaga Duit Kelas Yaa</p>
            </div>
            <img src="{{ asset('/') }}assets/iyo.png">
            </div>
        </div>
    </section>
    
    <section class="info">
        <div class="info-container">
            <div class="shape">
                <p>Jumlah Uang KAS</p>
                <h1>Rp.1.500.000</h1>
            </div>
            <div class="shape">
                <h1 class="tanggungan">Daftar yang memiliki tanggungan</h1>
                <p>1. Farah = Rp. 28.000</p>
                <p>2. Dia = Rp. 16.000</p>
                <p>3. Clara = Rp. 32.000</p>
                <p>4. Zahra = Rp. 78.000</p>
            </div>
        </div>
    </section>
@endsection
