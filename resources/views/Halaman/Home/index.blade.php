@extends('Layout.main')

@section('isi')
    <!-- Start Sample Area -->
    <section class="sample-text-area">
        <div class="container box_1170">
            <h3 class="text-heading">Text Sample</h3>
            <p class="sample-text">
                Every avid independent filmmaker has <b>Bold</b> about making that <i>Italic</i> interest documentary,
                or short
                film to show off their creative prowess. Many have great ideas and want to “wow”
                the<sup>Superscript</sup> scene,
                or video renters with their big project. But once you have the<sub>Subscript</sub> “in the can” (no easy
                feat), how
                do you move from a <del>Strike</del> through of master DVDs with the <u>“Underline”</u> marked
                hand-written title
                inside a secondhand CD case, to a pile of cardboard boxes full of shiny new, retail-ready DVDs, with UPC
                barcodes
                and polywrap sitting on your doorstep? You need to create eye-popping artwork and have your project
                replicated.
                Using a reputable full service DVD Replication company like PacificDisc, Inc. to partner with is
                certainly a
                helpful option to ensure a professional end result, but to help with your DVD replication project, here
                are 4 easy
                steps to follow for good DVD replication results:

            </p>
        </div>

    </section>
    <section class="sample-text-area">
        <div class="container box_1170">
            <h1><b>Form Pemesanan</b></h1>
            <form action="">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Pemesan</label>
                <div class="col-sm-10">
                    <select name="" class="form-control" id="">
                        <option value="">Erik</option>
                        <option value="">Fajar</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                 <input type="email"  class="form-control" name="" id="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">No.Hp</label>
                <div class="col-sm-10">
                 <input type="number"  class="form-control" name="" id="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Tamu</label>
                <div class="col-sm-10">
                 <input type="text"  class="form-control" name="" id="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Tipe Kamar</label>
                <div class="col-sm-10">
                    <select name="" class="form-control" id="">
                        <option value="">Erik</option>
                        <option value="">Fajar</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                   <button type="submit" style="color: white" class="btn btn-primary confirm-pemesanan">Konfirmasi Pemesanan</button>
                </div>
            </div>
        </form>
        </div>

    </section>
@endsection
