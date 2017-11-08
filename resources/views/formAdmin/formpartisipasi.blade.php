<div class="modal" id="partisipasi-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form method="POST" class="form-horizontal" data-toggle="validator">
				{{ csrf_field() }} {{ method_field('POST') }}
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times; </span> </button>
					<h3 class="modal-title"><center>Form</center></h3>
				</div>

				<div class="modal-body">

					<input type="hidden" id="id" name="id">
					<div class="form-group">
						<label for="namakegiatan" class="col-md-3 control-label">Nama Kegiatan</label>
						<div class="col-md-6">
							<input type="text" id="namakegiatan" name="namakegiatan" class="form-control"  required autofocus>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="waktukegiatan" class="col-md-3 control-label">Waktu Kegiatan</label>
						<div class="col-md-6">
							<input type="text" id="waktukegiatan" name="waktukegiatan" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="alamatkegiatan" class="col-md-3 control-label">Alamat Kegiatan</label>
						<div class="col-md-6">
							<input type="text" id="alamatkegiatan" name="alamatkegiatan" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="keterangan" class="col-md-3 control-label">Keterangan</label>
						<div class="col-md-6">
							<input type="text" id="keterangan" name="keterangan" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>


				<div class="modal-footer">
					<button type="submit" class="btn btn-primary btn-save">Simpan</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				</div>
			</form>
		</div>
	</div>
</div>
