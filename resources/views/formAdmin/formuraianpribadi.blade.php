<div class="modal" id="uraian-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
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
						<label for="nama" class="col-md-3 control-label">Nama</label>
						<div class="col-md-6">
							<input type="text" id="nama" name="nama" class="form-control"  required autofocus>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="instansi" class="col-md-3 control-label">Instansi / Perusahaan</label>
						<div class="col-md-6">
							<input type="text" id="instansi" name="instansi" class="form-control" required>
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
						<label for="nohp" class="col-md-3 control-label">Tlp/HP</label>
						<div class="col-md-6">
							<input type="text" id="nohp" name="nohp" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="satuan" class="col-md-3 control-label">Satuan</label>
						<div class="col-md-6">
							<input type="text" id="satuan" name="satuan" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="jenisdonasi" class="col-md-3 control-label">Jenis Donasi</label>
						<div class="col-md-6">
							<input type="text" id="jenisdonasi" name="jenisdonasi" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="perkiraannilai" class="col-md-3 control-label">Perkiraan Nilai (RP)</label>
						<div class="col-md-6">
							<input type="text" id="perkiraannilai" name="perkiraannilai" class="form-control" required>
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
