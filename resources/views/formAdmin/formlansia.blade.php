<div class="modal" id="lansia-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
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
						<label for="nokk" class="col-md-3 control-label">No.KK</label>
						<div class="col-md-6">
							<input type="text" id="nokk" name="nokk" class="form-control"  required autofocus>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="namalansia" class="col-md-3 control-label">Nama Lansia</label>
						<div class="col-md-6">
							<input type="text" id="namalansia" name="namalansia" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="ttl" class="col-md-3 control-label">Tempat/Tgl Lahir</label>
						<div class="col-md-6">
							<input type="text" id="ttl" name="ttl" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="umur" class="col-md-3 control-label">Umur</label>
						<div class="col-md-6">
							<input type="text" id="umur" name="umur" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="status" class="col-md-3 control-label">Status (KAWIN/TIDAK KAWIN)</label>
						<div class="col-md-6">
							<input type="text" id="status" name="status" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="alamat" class="col-md-3 control-label">Alamat</label>
						<div class="col-md-6">
							<input type="text" id="alamat" name="alamat" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>


					<div class="form-group">
						<label for="pekerjaan" class="col-md-3 control-label">Pekerjaan</label>
						<div class="col-md-6">
							<input type="text" id="pekerjaan" name="pekerjaan" class="form-control" required>
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
				</div>

				<div class="modal-footer">
					<button type="submit" class="btn btn-primary btn-save">Simpan</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				</div>
			</form>
		</div>
	</div>
</div>
