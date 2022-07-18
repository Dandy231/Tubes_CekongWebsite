@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class = 'cekong-header'>
        <h1></h1>
        <p class=lead>
        </p>
    </div> --}}

{{-- Home --}}
    <div class="bg-image">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center pt-5">
            <div class="d-flex justify-content-center align-items-center">
                <div class="button">
                    <div class="text-center mt-5 pt-5">
                        <a class="btn btn-primary mt-5 text-white" href="#cekong">Let's Check</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row offset-3 my-5" style="width: 40rem">
        <div class="cekong-section text-center my-2 mt-5 pt-5 mb-5 pb-5" id="cekong">
            <div class="card rounded-5">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Cek Ongkirmu Disini!</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <h5 class="text-white">Asal Pengirim:</h5>
                                <div class="form-group text-white pt-2">
                                    <label for="">Provinsi</label>
                                    <select name="origin_province" id="provinsi" class="form-control provinsi">
                                        <option value="#">--Pilih--</option>
                                        @foreach ($province as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group text-white pt-2">
                                    <label for="">Kota/Kabupaten</label>
                                    <select name="origin_city" id="kota" class="form-control">
                                        <option value="#">--Pilih--</option>
                                    </select>
                                </div>
                                <h5 class="text-white pt-4">Tujuan Pengirim:</h5>
                                <div class="form-group text-white pt-2">
                                    <label for="">Kota/Kabupaten</label>
                                    <select name="destination_city" id="destination_city" class="form-control">
                                        <option value="#">--Pilih--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <h5 class="text-white pt-3">Pilih Expedisi:</h5>
                                @foreach ($courier as $key => $value)
                                <div class="form-check form-check-inline text-white">
                                    <input class="form-check-input" type="checkbox" id="courier-{{ $key }}" name="courier[]" value="{{ $value->code }}">
                                    <label class="form-check-label" for="courier-{{ $key }}">{{ $value->title }}</label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-row pt-3">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section class="about-section text-center mt-5 pt-5" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4">Cek Ongkir Se-Indonesia</h2>
                    <p class="text-white-50">
                        Cekong merupakan sebuah platform yang memudahkan para penjual dan pebisnis online untuk melakukan cek tarif ongkir. Anda bisa cek ongkir JNE serta ekspedisi lainnya menggunakan Cekong dalam melakukan cek tarif pengiriman dengan mudah, cepat, akurat, di mana saja, dan kapan saja. Cekong mendukung pengecekan cek ongkos kirim termurah dari berbagai macam ekspedisi yang ada di Indonesia.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
