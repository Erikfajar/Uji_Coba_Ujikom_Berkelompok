@extends('Layout.main')

@section('isi')
    <!-- Untuk -->
    <section class="sample-text-area">
        <div class="container box_1170">
            {{-- <h2>Kamar VVIP</h2>
            <div class="card text-bg-dark">
                <img src="{{ asset('Template/img/rooms/1.png') }}" height="300px" class="card-img" alt="...">
             
                <h4>Fasilitas</h4>
            </div> --}}
            <div class="card mb-3">
                <img src="{{ asset('Template/img/rooms/1.png') }}" height="350px" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title">Card title</h2>
                    <h4 class="card-text">Fasilitas:</h4>
                    <p class="card-text">Fasilitas:</p>
                </div>
            </div>

        </div>

    </section>


@endsection
