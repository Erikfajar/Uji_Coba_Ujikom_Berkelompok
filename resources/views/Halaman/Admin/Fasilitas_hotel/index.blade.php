@extends('Layout.main')

@section('isi')
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <h4 class="mb-30"> <button type="button" class="genric-btn primary-border circle" data-bs-toggle="modal"
                        data-bs-target="#create_fasilitas_hotel">
                        + Fasilitas Hotel
                    </button>
                </h4>
                @include('Halaman.Admin.Fasilitas_hotel.modal_create')

                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th style="text-align: center" scope="col">#</th>
                            <th style="text-align: center" scope="col">Nama Fasilitas</th>
                            <th style="text-align: center" scope="col">Keterangan</th>
                            <th style="text-align: center" scope="col">Foto</th>
                            <th style="text-align: center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th style="text-align: center" scope="row">1</th>
                            <td style="text-align: center">Mark</td>
                            <td style="text-align: center">Otto</td>
                            <td style="text-align: center">Otto</td>
                            <td style="text-align: center">
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                data-bs-target="#edit_fasilitas_hotel">Edit</button>
                              <form action="" method="post" class="d-inline">
                                <button class="btn btn-sm btn-danger delete">Del</button>
                              </form>
                            </td>
                        </tr>
                     
                    </tbody>
                    @include('Halaman.Admin.Fasilitas_hotel.modal_edit')
                </table>
            </div>
        </div>
    </div>
@endsection
