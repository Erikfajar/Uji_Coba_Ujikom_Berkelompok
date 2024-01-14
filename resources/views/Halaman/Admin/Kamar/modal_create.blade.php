<!-- Modal -->
<div class="modal fade" id="create_kamar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Tambah Kamar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tipe Kamar</label>
            <input type="text" maxlength="100" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Tipe Kamar">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Foto Kamar</label>
            <input type="file" class="form-control">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Jumlah Kamar</label>
            <input type="text" maxlength="11" class="form-control">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Fasilitas Kamar</label>
            <input id="x" type="hidden" name="content">
            <trix-editor input="x"></trix-editor>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  