@extends('Layout.main')

@section('isi')
<div class="offers_area padding_top">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100">
                    <h3>Fasilitas Hotel</h3>
                </div>
            </div>
        </div>
        {{-- Tempat menyimpan Poto Fasilitas --}}
        <div class="row">
            <div class="col-xl-3 col-md-4">
                <div class="single_offers">
                    <div class="about_thumb">
                        <img src="{{ asset('Template') }}/img/offers/1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="single_offers">
                    <div class="about_thumb">
                        <img src="{{ asset('Template') }}/img/offers/2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="single_offers">
                    <div class="about_thumb">
                        <img src="{{ asset('Template') }}/img/offers/3.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="single_offers">
                    <div class="about_thumb">
                        <img src="{{ asset('Template') }}/img/offers/3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        {{-- End code poto fasilitas --}}
    </div>
</div>
@endsection