@extends('Layout.main')

@section('isi')
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <div class="row g-3 mb-3 align-items-center">
                    <div class="col-auto">
                      <input type="date" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-auto">
                      <input type="date" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-md-2 offset-md-3">
                      <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" style="margin-left: 230%" placeholder="Search....">
                    </div>
                  </div>
                <table class="table  table-hover table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
