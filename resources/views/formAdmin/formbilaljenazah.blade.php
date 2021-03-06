<div class="modal" id="bilal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
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
						<label for="namabilal" class="col-md-3 control-label">Nama Bilal Jenazah</label>
						<div class="col-md-6">
							<input type="text" id="namabilal" name="namabilal" class="form-control" required autofocus>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="nik" class="col-md-3 control-label">NIK</label>
						<div class="col-md-6">
							<input type="text" id="nik" name="nik" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="jkelamin" class="col-md-3 control-label">Jenis Kelamin</label>
						<div class="col-md-6">
							<input type="text" id="jkelamin" name="jkelamin" class="form-control" required>
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
						<label for="alamatbilal" class="col-md-3 control-label">Alamat Bilal Jenazah</label>
						<div class="col-md-6">
							<input type="text" id="alamatbilal" name="alamatbilal" class="form-control">
							<span class="help-block with-errors"></span>
						</div>
					</div>

					
					<div class="form-group">
						<label for="lokasitugas" class="col-md-3 control-label">Lokasi Tugas</label>
						<div class="col-md-6">
							<input type="text" id="lokasitugas" name="lokasitugas" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="norekbanksumut" class="col-md-3 control-label">Nomor Rekening Bank Sumut</label>
						<div class="col-md-6">
							<input type="text" id="norekbanksumut" name="norekbanksumut" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="kantorcbgbanksumut" class="col-md-3 control-label">Kantor Cabang Bank SUMUT</label>
						<div class="col-md-6">
							<input type="text" id="kantorcbgbanksumut" name="kantorcbgbanksumut" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="nohp" class="col-md-3 control-label">No HP</label>
						<div class="col-md-6">
							<input type="text" id="nohp" name="nohp" class="form-control" required>
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
