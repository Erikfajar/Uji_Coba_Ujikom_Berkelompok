<!-- Modal -->
<div class="modal fade" id="edit_fasilitas_hotel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Edit Fasilitas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama Fasilitas</label>
          <input type="text" maxlength="100" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Tipe Kamar">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Foto Fasilitas Hotel</label>
          <input type="file" class="form-control">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Keterangan Fasilitas</label>
          <input id="x" type="hidden" name="content">
          <trix-editor input="x"></trix-editor>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
